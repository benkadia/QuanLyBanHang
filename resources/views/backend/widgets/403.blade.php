<div class="container-fluid">
    <div class="row">
        <div class="col-md-4 mr-auto mt-5 text-md-left text-center">
            <a href="index-2.html" class="ml-md-5">
                <img alt="image-404" src="{{asset('backend/assets/img/logo2.svg')}}" class="theme-logo">
            </a>
        </div>
    </div>
</div>
<div class="container-fluid error-content">
    <div class="">
        <h1 class="error-number">403</h1>
        <p class="mini-text">Ooops!</p>
        <p class="error-text mb-4 mt-1">Bạn không có quyền này. Vui lòng báo Admin!</p>
        <a href="{{route('admin.home')}}" class="btn btn-primary mt-5">Go Back</a>
    </div>
</div>
