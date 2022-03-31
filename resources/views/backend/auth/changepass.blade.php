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
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                <h4>Danh sách người dùng ({{ $total }} dòng)</h4>
                            </div>
                        </div>
                    </div>
                    <div class="widget-content widget-content-area">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th class="text-center">#</th>
                                        <th>Tên đăng nhập</th>
                                        <th>Họ & Tên</th>
                                        <th>Trạng thái</th>
                                        <th class="text-center">Tác vụ</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($total)
                                        @foreach ($list as $item)
                                            <tr>
                                                <td class="text-center">{{$item->id}}</td>
                                                <td>{{$item->username}}</td>
                                                <td>
                                                    {{$item->name}}
                                                </td>
                                                <td>
                                                    {!!$item->status == 1 ? '<span class="badge badge-success">Hoạt động</span>' : '<span class="badge badge-dark">Tạm khóa</span>'!!}
                                                </td>
                                                <td class="text-center">
                                                    <ul class="table-controls">
                                                        <li><a href="" title="Cấp quyền">Cấp quyền</a></li>
                                                    </ul>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
