@extends('backend.master')
@section('title')
    day la trang config
@endsection
@section('content')
    <div class="container">
        <div class="container">
            <div id="tableProgress" class="col-lg-12 col-12 layout-spacing">
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="row">
                            <div class="col-6">
                                <h4>{{$title}}</h4>
                            </div>
                        </div>
                    </div>
                    @if(session('type'))
                    <div class="alert alert-{{session('type')}} alert-dismissible fade show" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            <span class="sr-only">Close</span>
                        </button>
                        <strong>{{session('title')}}</strong><br><br>{{session('msg')}}
                    </div>
                    @endif
                    <div class="text-center text-danger">
                    @foreach ($errors->all() as $error)
                        {{$error}}
                    @endforeach
                    </div>
                    <div class="widget-content widget-content-area">
                        <form action="{{route('config.save')}}"  method="post" class="needs-validation {{$errors->all()?'was-validated':''}}" novalidate >
                            @method('PUT')
                            <div class="row">
                                @foreach ($configs as $item)
                                    @switch($item->type)
                                        @case('text')
                                        <div class="form-group col-md-12">
                                            <label class="form-control-label" for="{{$item->key}}">{{$item->summary}}</label>
                                            <input type="text" class="form-control @error('configs.'.$item->key) is-invalid @enderror" id="{{$item->key}}"
                                            name="configs[{{$item->key}}]" value="{{$item->value??old('configs.'.$item->key)}}" />
                                            @error('configs.'.$item->key)
                                            <div class="invalid-feedback">
                                                {{$message}}
                                            </div>
                                            @enderror
                                        </div>
                                            @break
                                        @case('textarea')
                                        <div class="form-group col-md-12">
                                            <label class="form-control-label" for="{{$item->key}}">{{$item->summary}}</label>
                                            <textarea class="form-control @error('configs.'.$item->key) is-invalid @enderror" id="{{$item->key}}"
                                            name="configs[{{$item->key}}]" >{{$item->value??old('configs.'.$item->key)}}</textarea>
                                            @error('configs.'.$item->key)
                                            <div class="invalid-feedback">
                                                {{$message}}
                                            </div>
                                            @enderror
                                        </div>
                                            @break
                                        @case('image')
                                        <div class="form-group col-md-12">
                                            <label class="form-control-label" for="image-{{$item->key}}">{{$item->summary}}</label>
                                            <img src="{{asset($item->value??'upload/images/noimage.png')}}" width="100"/>
                                            <input  type="hidden" class="form-control" value="{{$item->value??''}}"
                                            id="image-{{$item->key}}"
                                            name="configs[{{$item->key}}]"  />
                                            <button type="button" onclick="openfile('image-{{$item->key}}')">Chọn hình</button>
                                        </div>
                                        @break
                                        @case('editor')
                                        <div class="form-group col-md-12">
                                            <label class="form-control-label" for="{{$item->key}}">{{$item->summary}}</label>
                                            <textarea class="form-control @error('configs.'.$item->key) is-invalid @enderror" id="{{$item->key}}"
                                            name="configs[{{$item->key}}]" >{{$item->value??old('configs.'.$item->key)}}</textarea>
                                            @error('configs.'.$item->key)
                                            <div class="invalid-feedback">
                                                {{$message}}
                                            </div>
                                            @enderror
                                        </div>
                                        <script>
                                            CKEDITOR.replace('{{$item->key}}');
                                        </script>
                                            @break
                                    @endswitch
                                @endforeach
                            </div>
                            <div class="form-group">
                                @csrf
                                <button type="submit" class="btn btn-primary">Ghi</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
