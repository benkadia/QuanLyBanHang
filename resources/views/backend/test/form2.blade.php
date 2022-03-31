@extends('backend.empty')
@section('title')
    day la trang them sp
@endsection
@section('content')
    <div class="container">
        <div class="container">
            <div id="tableProgress" class="col-lg-12 col-12 layout-spacing">
                <div class="statbox widget box box-shadow">
                    <div class="widget-content widget-content-area">
                        @if(session('type'))
                        <div class="alert alert-{{session('type')}} alert-dismissible fade show" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                <span class="sr-only">Close</span>
                            </button>
                            <strong>{{session('title')}}</strong><br><br>{{session('msg')}}
                        </div>
                        @endif
                        <form action=""  method="post" class="needs-validation {{$errors->all()?'was-validated':''}}" novalidate >
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label class="form-control-label" for="inputBasicFirstName">Email</label>
                                    <input required type="text" class="form-control @error('email') is-invalid @enderror"
                                    id="inputBasicFirstName" name="email" value="{{$item->email??old('email')}}" />
                                    @error('email')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group col-md-12">
                                    <label class="form-control-label" for="inputBasicFirstName">Tiêu đề</label>
                                    <input required type="text" class="form-control @error('title') is-invalid @enderror"
                                    id="inputBasicFirstName" name="title" value="{{$item->title??old('title')}}" />
                                    @error('title')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group col-md-12">
                                    <label class="form-control-label" for="inputBasicFirstName">Tên người nhận</label>
                                    <input required type="text" class="form-control @error('name') is-invalid @enderror"
                                    id="inputBasicFirstName" name="name" value="{{$item->name??old('name')}}" />
                                    @error('name')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group col-md-12">
                                    <label class="form-control-label" for="inputBasicFirstName">Nội dung</label>
                                    <textarea required type="text" class="form-control @error('content') is-invalid @enderror"
                                    id="inputBasicFirstName" name="content" >{{$item->content??old('content')}}</textarea>
                                    @error('content')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                @csrf
                                <button type="submit" class="btn btn-primary">Gửi</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
