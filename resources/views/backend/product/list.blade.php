@extends('backend.master')
@section('title')
    day la trang ds
@endsection
@section('content')
    <div class="container">
        <div class="container">
            <div id="tableProgress" class="col-lg-12 col-12 layout-spacing">
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="row">
                            <div class="col-6">
                                <h4>Danh sách sản phẩm ({{ $total }} dòng)</h4>
                            </div>
                            <div class="col-6 text-right">
                                <a name="" id="" class="btn btn-primary btn-xs" href="{{route('products.create')}}" role="button">Thêm mới</a>
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
                    <div class="filter-pannel">
                        <form>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                  <input type="text"
                                    class="form-control" required value="{{request()->input('key')}}" name="key" id="" aria-describedby="helpId" placeholder="Từ khóa">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <a type="text"
                                    class="btn btn-danger btn-xs" href="{{route('products.index')}}" aria-describedby="helpId" placeholder="">Tất cả</a>
                                  <button type="text"
                                    class="btn btn-success btn-xs" aria-describedby="helpId" placeholder="">Tìm</button>
                                </div>
                            </div>
                        </div>
                        </form>
                    </div>
                    <div class="widget-content widget-content-area">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Tên Sản Phẩm</th>
                                            <th>Giá Tiền</th>
                                            <th>Số Lượng</th>
                                            <th>Hình Sản Phẩm</th>
                                            <th>Thuộc Danh Mục</th>
                                            <th>Status</th>
                                            <th>Thao Tác</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if($list)
                                        @foreach($list as $item)
                                                <tr>
                                                    <td>{{$item->name}}</td>
                                                    <td>{{$item->price}}</td>
                                                    <td>{{$item->qty}}</td>
                                                    <td>
                                                        <img src="{{asset($item->image)}}" onerror="this.src = '{{asset('upload/images/noimage.png')}}';" class="img-fluid" alt="" height="60" width="60">
                                                    </td>
                                                    <td>{{$item->NAMECAT}}</td>
                                                    <td>
                                                        {!!
                                                        $item->status == 1 ?
                                                            '<span class="badge badge-success">Đang Hiện</span>'
                                                            : '<span class="badge badge-dark">Đang Ẩn</span>'
                                                        !!}
                                                    </td>
                                                    <td class="actions">
                                                        <a href="{{route('products.edit',$item->id)}}" class='btn btn-sm btn-icon btn-pure btn-primary on-default edit-row'>
                                                        Cập nhật
                                                        </a>
                                                        <a onclick="if(confirm('Are you sure?')){document.getElementById('del-{{$item->id}}').submit()}" class='btn btn-sm btn-icon btn-pure btn-danger on-default remove-row'>
                                                        Xóa
                                                        </a>
                                                        <form method="post" class="d-none" id="del-{{$item->id}}" action="{{route('products.destroy',$item->id)}}">
                                                            @csrf
                                                            @method('DELETE')
                                                        </form>
                                                    </td>
                                                </tr>
                                       @endforeach
                                       @else
                                       <tr>
                                        <td class="text-center table-warning" colspan="5">Không tìm thấy dữ liệu.</td>
                                    </tr>
                                       @endif
                                    </tbody>
                                </table>
                                <style>
                                    .paginate-custom>nav{
                                        display: inline-block !important;
                                    }
                                </style>
                                <div class="text-right paginate-custom">
                                {{$list->appends(request()->all())->links()}}
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
