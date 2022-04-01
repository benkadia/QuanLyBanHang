@extends('backend.master')
@section('title')
    Thêm Nhà Cung Cấp
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
                            <div class="col-6 text-right">
                                <a name="" id="" class="btn btn-primary btn-xs" href="{{route('suppliers.index')}}" role="button">Quay lại</a>
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
                        <form action="{{$action}}"  method="post" class="needs-validation {{$errors->all()?'was-validated':''}}" novalidate >
                            @method($method)
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label class="form-control-label" for="inputBasicFirstName">Tên Nhà Cung Cấp</label>
                                    <input required type="text" class="form-control @error('name') is-invalid @enderror" id="inputBasicFirstName" name="name" value="{{$sups['name']??old('name')}}" />
                                    @error('name')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>

                                <div class="form-group col-md-12">
                                    <label class="form-control-label" for="inputBasicLastName">Tóm Tắt</label>
                                    <input type="text" class="form-control @error('summary') is-invalid @enderror" id="inputBasicLastName" name="summary" value="{{$sups['summary']??old('summary')}}" />
                                    @error('summary')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>

                                <div class="form-group col-md-12">
                                    <label class="form-control-label" for="inputBasicLastName">Số điện thoại</label>
                                    <input type="text" class="form-control @error('phone') is-invalid @enderror" id="inputBasicLastName" name="phone" value="{{$sups['phone']??old('phone')}}" />
                                    @error('phone')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>

                                <div class="form-group col-md-12">
                                    <label class="form-control-label" for="inputBasicLastName">Email</label>
                                    <input type="text" class="form-control @error('email') is-invalid @enderror" id="inputBasicLastName" name="email" value="{{$sups['email']??old('email')}}" />
                                    @error('email')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>

                                <div class="form-group col-md-12">
                                    <label class="form-control-label" for="inputBasicLastName">Tên Riêng</label>
                                    <input type="text" class="form-control @error('alias') is-invalid @enderror" id="inputBasicLastName" name="alias" value="{{$sups['alias']??old('alias')}}" />
                                    @error('alias')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>

                                <div class="form-group col-md-12">
                                    <label class="form-control-label" for="inputBasicLastName">Hình Danh Mục</label>
                                    <img src="{{asset($sups['image']??'upload/images/noimage.png')}}" width="100"/>
                                    <input  type="hidden" class="form-control" value="{{$sups['image']??''}}"
                                    id="image-category"
                                    name="image"  />
                                    <button type="button" onclick="openfile('image-category')">Chọn hình</button>
                                </div>

                                <div class="form-group col-md-12">
                                    <label class="form-control-label" for="inputBasicLastName">Từ Khoá</label>
                                    <input type="text" class="form-control @error('keyword') is-invalid @enderror" id="inputBasicLastName" name="keyword"  value="{{$sups['keyword']??old('keyword')}}" />
                                    @error('keyword')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>

                                <div class="form-group col-md-12">
                                    <label class="form-control-label" for="inputBasicLastName">Mô Tả</label>
                                    <input type="text" class="form-control @error('description') is-invalid @enderror" id="inputBasicLastName" name="description"  value="{{$sups['description']??old('description')}}" />
                                    @error('description')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>

                                <div class="form-group col-md-12">
                                    <label class="form-control-label" for="inputBasicLastName">Tiêu Đề</label>
                                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="inputBasicLastName" name="title"  value="{{$sups['title']??old('title')}}" />
                                    @error('title')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                @csrf
                                <button type="submit" class="btn btn-primary">Ghi</button>
                                <a href="{{route('suppliers.index')}}" class="btn btn-danger">Bỏ Qua</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
