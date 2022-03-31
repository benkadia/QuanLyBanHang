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
                            <div class="col-xl-6 col-md-6 col-sm-6 col-6">
                                <h4>Danh sách người dùng ({{ $total }} dòng)</h4>
                            </div>
                            <div class="col-xl-6 col-md-6 col-sm-6 col-6 text-right">
                                <a href="{{route('users.create')}}" class="btn btn-info text-right">Thêm mới</a>
                            </div>

                        </div>

                    </div>
                    <div class="widget-content widget-content-area">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th class="text-center">#</th>
                                        <th class="text-center">Tên đăng nhập</th>
                                        <th class="text-center">Họ & Tên</th>
                                        <th class="text-center">Email</th>
                                        <th class="text-center">Phone</th>
                                        <th class="text-center">Ảnh đại diện</th>
                                        <th class="text-center">Trạng thái</th>
                                        <th class="text-center">Tác vụ</th>
                                        <th class="text-center">Hành động</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($total)
                                        @foreach ($list as $item)
                                            <tr>
                                                <td class="text-center">{{$i++}}</td>
                                                <td>{{ $item->username }}</td>
                                                <td>{{ $item->name }}</td>
                                                <td>{{ $item->email }}</td>
                                                <td>{{ $item->phone?'0'.$item->phone:'' }}</td>
                                                <td>
                                                    <img src="{{asset($item->image)}}" onerror="this.src = '{{asset('upload/images/noimage.png')}}';" class="img-fluid" alt="" height="60" width="60"></td>
                                                <td>
                                                    {!! $item->status == 1 ? '<span class="badge badge-success">Hoạt động</span>' : '<span class="badge badge-dark">Tạm khóa</span>' !!}
                                                </td>
                                                <td class="text-center">
                                                    <ul class="table-controls">
                                                        <li><a href="" title="Cấp quyền">Cấp quyền</a></li>
                                                    </ul>
                                                </td>
                                                <td class="actions">
                                                    <a href="{{route('users.edit',$item->id)}}" class='btn btn-sm btn-icon btn-pure btn-primary on-primary edit-row'>
                                                    Cập nhật
                                                    </a>
                                                    <a onclick="if(confirm('Are you sure?')){document.getElementById('del-{{$item->id}}').submit()}" class='btn btn-sm btn-icon btn-pure btn-danger on-danger remove-row'>
                                                    Xóa
                                                    </a>
                                                    <form method="post" class="d-none" id="del-{{$item->id}}" action="{{route('users.destroy',$item->id)}}">
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
