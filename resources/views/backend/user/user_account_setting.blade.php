@extends('backend.master')
@section('title')
    Đây là trang thay đổi profile
@endsection
@section('content')
    <div class="layout-px-spacing">

        <div class="account-settings-container layout-top-spacing">
            @if (session('type'))
                <div class="alert alert-{{ session('type') }} alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">Close</span>
                    </button>
                    <strong>{{ session('title') }}</strong><br><br>{{ session('msg') }}
                </div>
            @endif
            <div class="text-center text-danger">
                @foreach ($errors->all() as $error)
                    {{ $error }}
                @endforeach
            </div>
            <div class="account-content">
                <div class="scrollspy-example" data-spy="scroll" data-target="#account-settings-scroll" data-offset="-100">
                    <form action="{{ route('admin.profilesettingput') }}" method="POST"
                        class="needs-validation {{ $errors->all() ? 'was-validated' : '' }}" novalidate>
                        @method($method)
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                                <div id="general-info" class="section general-info">
                                    <div class="info">
                                        <h6 class="">General Information</h6>
                                        <div class="row">
                                            <div class="col-lg-11 mx-auto">
                                                <div class="row">
                                                    <div class="col-xl-2 col-lg-12 col-md-4">
                                                        <div class="upload mt-4 pr-md-4">
                                                            <img src="{{ asset($user->image ?? 'upload/images/noimage.png') }}"
                                                                width="108.92" height="100" />
                                                            <input type="hidden" class="form-control"
                                                                value="{{ $user->image ?? '' }}" id="image-profile"
                                                                name="image" />
                                                            <button type="button" class="mt-2 btn btn-info"
                                                                onclick="openfile('image-profile')">
                                                                Uploap Picture
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-10 col-lg-12 col-md-8 mt-md-0 mt-4">
                                                        <div class="form">
                                                            <div class="row">
                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label for="fullName">Full Name</label>
                                                                        <input type="text"
                                                                            class="form-control mb-4 @error('name') is-invalid @enderror"
                                                                            id="fullName" name="name"
                                                                            value="{{ $user->name ?? old('name') }}">
                                                                        @error('name')
                                                                            <div class="invalid-feedback">
                                                                                {{ $message }}
                                                                            </div>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <label class="dob-input">Date of Birth</label>
                                                                    <div
                                                                        class="md-form md-outline input-with-post-icon datepicker">
                                                                        <input placeholder="Select date" type="date"
                                                                            id="example" value="{{ $user->birthday }}"
                                                                            name="birthday" class="form-control">
                                                                        <label for="example">Try me...</label>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div class="form-group">
                                                                <label for="profession">Profession</label>
                                                                <input type="text" class="form-control mb-4" id="profession"
                                                                    name="profession" value="{{ $user->profession }}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                                    <div id="about" class="section about mt-5">
                                        <div class="info">
                                            <h5 class="">About</h5>
                                            <div class="row">
                                                <div class="col-md-11 mx-auto">
                                                    <div class="form-group">
                                                        <label for="aboutBio">Bio</label>
                                                        <textarea class="form-control" id="aboutBio" placeholder="Tell something interesting about yourself" name="about"
                                                            rows="10">{{ $user->about }}
                                                </textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                            <div id="contact" class="section contact">
                                <div class="info">
                                    <h5 class="">Contact</h5>
                                    <div class="row">
                                        <div class="col-md-11 mx-auto">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="address">Address</label>
                                                        <input type="text" class="form-control mb-4" id="address"
                                                            name="address" placeholder="Address"
                                                            value="{{ $user->address }}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="phone">Phone</label>
                                                        <input type="text" class="form-control mb-4" id="phone" name="phone"
                                                            placeholder="Write your phone number here"
                                                            value="{{ $user->phone }}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="email">Email</label>
                                                        <input type="text" class="form-control mb-4" id="email" name="email"
                                                            placeholder="Write your email here"
                                                            value="{{ $user->email }}">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                            <div id="social" class="section social">
                                <div class="info">
                                    <h5 class="">Social</h5>
                                    <div class="row">

                                        <div class="col-md-11 mx-auto">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="input-group social-linkedin mb-3">
                                                        <div class="input-group-prepend mr-3">
                                                            <span class="input-group-text" id="linkedin">
                                                                <a href="{{ $user->linkedin_link }}">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="feather feather-linkedin">
                                                                        <path
                                                                            d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z">
                                                                        </path>
                                                                        <rect x="2" y="9" width="4" height="12"></rect>
                                                                        <circle cx="4" cy="4" r="2"></circle>
                                                                    </svg>
                                                                </a>
                                                            </span>
                                                        </div>
                                                        <input type="text" class="form-control"
                                                            placeholder="linkedin Username" aria-label="Username"
                                                            name="linkedin_link" aria-describedby="linkedin"
                                                            value="{{ $user->linkedin_link }}">
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="input-group social-tweet mb-3">
                                                        <div class="input-group-prepend mr-3">
                                                            <span class="input-group-text" id="tweet">
                                                                <a href="{{ $user->twitter_link }}">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="feather feather-twitter">
                                                                        <path
                                                                            d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z">
                                                                        </path>
                                                                    </svg>
                                                                </a>
                                                            </span>
                                                        </div>
                                                        <input type="text" class="form-control"
                                                            placeholder="Twitter Username" name="twitter_link"
                                                            aria-label="Username" aria-describedby="tweet"
                                                            value="{{ $user->twitter_link }}">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-11 mx-auto">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="input-group social-fb mb-3">
                                                        <div class="input-group-prepend mr-3">
                                                            <span class="input-group-text" id="fb">
                                                                <a href="{{ $user->facebook_link }}">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="feather feather-facebook">
                                                                        <path
                                                                            d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z">
                                                                        </path>
                                                                    </svg>
                                                                </a>
                                                            </span>
                                                        </div>
                                                        <input type="text" class="form-control"
                                                            placeholder="Facebook Username" aria-label="Username"
                                                            name="facebook_link" aria-describedby="fb"
                                                            value="{{ $user->facebook_link }}">
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="input-group social-github mb-3">
                                                        <div class="input-group-prepend mr-3">
                                                            <span class="input-group-text" id="github">
                                                                <a href="{{ $user->website_link }}">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="feather feather-github">
                                                                        <path
                                                                            d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22">
                                                                        </path>
                                                                    </svg>
                                                                </a>
                                                            </span>
                                                        </div>
                                                        <input type="text" class="form-control"
                                                            placeholder="Github Username" name="website_link"
                                                            aria-label="Username" aria-describedby="github"
                                                            value="{{ $user->website_link }}">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="as-footer-container text-right">
                            @csrf
                            <button class="btn btn-danger">Reset All</button>
                            <button type="submit" class="btn btn-success">Cập nhật</button>
                        </div>

                </div>
                </form>
            </div>

        </div>
    </div>
    </div>


    <script>
        CKEDITOR.replace('aboutBio');
    </script>
@endsection
