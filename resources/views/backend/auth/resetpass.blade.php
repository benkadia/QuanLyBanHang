@extends('backend.auth')
@section('title')
    day la trang quên mật khẩu
@endsection
@section('content')
    <div class="form-container outer">
        <div class="form-form">
            <div class="form-form-wrap">
                <div class="form-container">
                    <div class="form-content">

                        <h1 class="">Quên mật khẩu</h1>
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
                        <form class="text-left needs-validation {{$errors->all()?'was-validated':''}}" novalidate  method="post" action="{{ route('admin.resetpost') }}">
                            <div class="form">

                                <div id="username-field" class="field-wrapper input">
                                    <label for="username">Email</label>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-user">
                                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="12" cy="7" r="4"></circle>
                                    </svg>
                                    <input id="email" name="email" type="text" class="form-control @error('email') is-invalid @enderror"
                                        placeholder="e.g admin">
                                        @error('email')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                                <div class="d-sm-flex justify-content-between">
                                    <div class="field-wrapper">
                                        @csrf
                                        <button type="submit" class="btn btn-primary" value="">Gửi</button>
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
