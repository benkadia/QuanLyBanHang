@extends('backend.master')
@section('title')
    Đây là trang thay đổi profile
@endsection
@section('content')
    <style>
        body {
            display: -ms-flexbox;
            display: -webkit-box;
            display: flex;
            -ms-flex-align: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            align-items: center;
            -webkit-box-pack: center;
            justify-content: center;
        }

    </style>
    <div class="card login-form mt-5">
        <div class="card-body">
            <h3 class="card-title text-center text-uppercase font-weight-bold text-primary">Thay đổi mật khẩu</h3>
            @if (session('type'))
                <div class="alert alert-{{ session('type') }} alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">Close</span>
                    </button>
                    <strong>{{ session('title') }}</strong><br><br>{{ session('msg') }}
                </div>
            @endif
            @if (session('error'))
                <div class="text-center text-danger">
                    {{ session('error') }}
                </div>
            @endif
            <div class="text-center text-danger">
                @foreach ($errors->all() as $error)
                    {{ $error }}
                @endforeach
            </div>
            <div class="card-text">
                <form action="{{ route('admin.changepassput') }}" method="POST"
                    class="needs-validation {{ $errors->all() ? 'was-validated' : '' }}" novalidate>
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Mật khẩu hiện tại</label>
                        <input required type="password" class="form-control form-control-sm" name="current_password"
                            class="form-control @error('current_password') is-invalid @enderror">
                        @error('current_password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Mật khẩu mới</label>
                        <input required type="password" class="form-control form-control-sm" name="new_password"
                            class="form-control @error('new_password') is-invalid @enderror">
                        @error('new_password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Xác nhận mật khẩu</label>
                        <input required type="password" class="form-control form-control-sm" name="confirm_password"
                            class="form-control @error('confirm_password') is-invalid @enderror">
                        @error('confirm_password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary btn-block submit-btn">Confirm</button>
                </form>
            </div>
        </div>
    </div>
@endsection
