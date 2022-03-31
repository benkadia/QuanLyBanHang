@extends('backend.master')
@section('title')
    day la trang them sp
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
                                <a name="" id="" class="btn btn-primary btn-xs" href="{{route('users.index')}}" role="button">Quay lại</a>
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
                                    <label class="form-control-label" for="inputBasicFirstName">Tên Đăng Nhập</label>
                                    <input required type="text" class="form-control @error('username') is-invalid @enderror" id="inputBasicFirstName" name="username" value="{{$item->username??old('username')}}" />
                                    @error('username')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>

                                <div class="form-group col-md-12">
                                    <label class="form-control-label" for="inputBasicLastName">Họ tên</label>
                                    <input type="text" class="form-control" id="inputBasicLastName" name="name" value="{{$item->name??old('name')}}" />
                                </div>

                                <div class="form-group col-md-12">
                                    <label class="form-control-label" for="inputBasicLastName">Mật khẩu</label>
                                    <input type="password" class="form-control" id="inputBasicLastName" name="password" value="{{$item->password??old('password')}}" />
                                </div>


                                <div class="form-group col-md-12">
                                    <label class="form-control-label" for="inputBasicLastName">Email</label>
                                    <input type="email" class="form-control" id="inputBasicLastName" name="email" value="{{$item->email??old('email')}}" />
                                </div>

                                <div class="form-group col-md-12">
                                    <label class="form-control-label" for="inputBasicLastName">Phone</label>
                                    <input type="text" class="form-control" id="inputBasicLastName" name="phone"  value="{{$item->phone??old('phone')}}" />
                                </div>

                                <div class="form-group col-md-12">
                                    <label class="form-control-label" for="inputBasicLastName">Ảnh đại diện</label>
                                    <img src="{{asset($item->image??'upload/images/noimage.png')}}" width="100"/>
                                    <input  type="hidden" class="form-control" value="{{$item->image??''}}"
                                    id="image-user"
                                    name="image"  />
                                    <button type="button" onclick="openfile('image-user')">Chọn hình</button>
                                </div>


                            </div>
                            <div class="form-group">
                                @csrf
                                <button type="submit" class="btn btn-primary">Ghi</button>
                                <a href="{{route('users.index')}}" class="btn btn-danger">Bỏ Qua</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
