@extends('backend.auth')
@section('title')
    day la trang login
@endsection
@section('content')
    <div class="form-container outer">
        <div class="form-form">
            <div class="form-form-wrap">
                <div class="form-container">
                    <div class="form-content">

                        <h1 class="">Đăng nhập</h1>
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
                                {{$error}}<br>
                            @endforeach
                            </div>

                        <p class="">Nhập thông tin để sử dụng hệ thống.</p>
                        <div class="text-center text-danger  alert-danger">
                            {{ session('message') }}
                        </div>
                        <form class="text-left needs-validation {{$errors->all()?'was-validated':''}}" novalidate  method="post" action="{{ route('admin.loginpost') }}">
                            <div class="form">

                                <div id="username-field" class="field-wrapper input">
                                    <label for="username">Tên đăng nhập</label>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-user">
                                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="12" cy="7" r="4"></circle>
                                    </svg>
                                    <input id="username" name="username" type="text" class="form-control @error('username') is-invalid @enderror"
                                        placeholder="e.g admin">
                                        @error('username')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>

                                <div id="password-field" class="field-wrapper input mb-2">
                                    <div class="d-flex justify-content-between">
                                        <label for="password">Mật khẩu</label>
                                    </div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-lock">
                                        <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                                        <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                                    </svg>
                                    <input id="password" name="password" type="password" class="form-control @error('password') is-invalid @enderror"
                                        placeholder="Mật khẩu">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" id="toggle-password" class="feather feather-eye">
                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                        <circle cx="12" cy="12" r="3"></circle>
                                    </svg>
                                    @error('password')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                                <a href="{{route('admin.reset')}}" class="forgot-pass-link">Quên mật khẩu?</a>
                                <div class="n-chk">
                                    <label class="new-control new-checkbox checkbox-primary">
                                        <input type="checkbox" class="new-control-input" value="1" name="remember">
                                        <span class="new-control-indicator"></span> Nhớ đăng nhập
                                    </label>
                                </div>
                                <div class="d-sm-flex justify-content-between">
                                    <div class="field-wrapper">
                                        @csrf
                                        <button type="submit" class="btn btn-primary">Đăng nhập</button>
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
