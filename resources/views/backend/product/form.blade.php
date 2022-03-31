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
                                <a name="" id="" class="btn btn-primary btn-xs" href="{{route('products.index')}}" role="button">Quay lại</a>
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
                                    <label class="form-control-label" for="inputBasicFirstName">Tên Sản Phẩm</label>
                                    <input required type="text" class="form-control @error('name') is-invalid @enderror" id="inputBasicFirstName" name="name" value="{{$item->name??old('name')}}" />
                                    @error('name')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>

                                <div class="form-group col-md-12">
                                    <label class="form-control-label" for="inputBasicLastName">sku</label>
                                    <input type="text" class="form-control" id="inputBasicLastName" name="sku" value="{{$item->sku??old('sku')}}" />
                                </div>

                                <div class="form-group col-md-12">
                                    <label class="form-control-label" for="inputBasicLastName">Giá Tiền</label>
                                    <input type="text" class="form-control" id="inputBasicLastName" name="price" value="{{$item->price??old('price')}}" />
                                </div>

                                <div class="form-group col-md-12">
                                    <label class="form-control-label" for="inputBasicLastName">Số Lượng</label>
                                    <input type="text" class="form-control" id="inputBasicLastName" name="qty"  value="{{$item->qty??old('qty')}}" />
                                </div>

                                <div class="form-group col-md-12">
                                    <label class="form-control-label" for="inputBasicLastName">Mô tả</label>
                                    <textarea class="form-control" name="summary" id="content-product" rows="3">{{$item->summary??old('summary')}}</textarea>
                                </div>
                                <div class="form-group col-md-12">
                                    <label class="form-control-label" for="inputBasicLastName">Nội dung</label>
                                    <textarea class="form-control" name="content" id="content-product" rows="3">{{$item->content??old('content')}}</textarea>
                                    <script>
                                        CKEDITOR.replace('content-product');
                                    </script>
                                </div>

                                <div class="form-group col-md-12">
                                    <label class="form-control-label" for="inputBasicLastName">Hình Đại Diện</label>
                                    <img src="{{asset($item->image??'upload/images/noimage.png')}}" width="100"/>
                                    <input  type="hidden" class="form-control" value="{{$item->image??''}}"
                                    id="image-product"
                                    name="image"  />
                                    <button type="button" onclick="openfile('image-product')">Chọn hình</button>
                                </div>
                                <div class="form-group col-md-12">
                                    <label class="form-control-label" for="inputBasicLastName">Hình chi tiết</label>
                                    <img src="{{asset($item->images??'upload/images/noimage.png')}}" width="100"/>
                                    <input  type="hidden" class="form-control" value="{{$item->images??''}}"
                                    id="image-products"
                                    name="images"  />
                                    <button type="button" onclick="openfile('image-products')">Chọn hình</button>
                                </div>

                                <div class="form-group col-md-12 text-center">
                                    <label class="form-control-label" for="inputBasicLastName">Images Preview</label>
                                    <div id="images-preview">
                                        <img src="" height="60" width="60" onerror="this.src='{{asset('upload/images/noimage.png')}}'" alt="">
                                    </div>
                                </div>

                                <div class="form-group col-md-12">
                                    <label class="form-control-label" for="inputBasicLastName">Sản Phẩm thuộc:</label>
                                    <select class="form-control" name="category_id" id="">
                                        <option value="">Chọn nhóm</option>
                                        @foreach ($cats as $cat)
                                        <option {{($item->category_id??'')==$cat->id?'selected':''}} value="{{$cat->id}}">{{$cat->name}}</option>
                                        @endforeach
                                    </select>
                                </div>

                            </div>
                            <div class="form-group">
                                @csrf
                                <button type="submit" class="btn btn-primary">Ghi</button>
                                <a href="{{route('products.index')}}" class="btn btn-danger">Bỏ Qua</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
