@extends('backend.master')
@section('title')
    day la trang cap quyen
@endsection
@section('content')
    <div class="container">
        <div class="container">
            <div id="tableProgress" class="col-lg-12 col-12 layout-spacing">
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                <h4>Cấp quyền cho "{{ $user->username }}"</h4>
                            </div>
                        </div>
                    </div>
                    <div class="widget-content widget-content-area">
                        @if(session('type'))
                    <div class="alert alert-{{session('type')}} alert-dismissible fade show" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            <span class="sr-only">Close</span>
                        </button>
                        <strong>{{session('title')}}</strong><br><br>{{session('msg')}}
                    </div>
                    @endif
                        <h4>Chọn chức năng</h4>
                        <form action="{{ route('role.accessput', $user->id) }}" method="post">
                            @csrf
                            @method('PUT')
                            <ul style="list-style:none">
                                @if ($list->count())
                                    @foreach ($list as $parent)
                                        @php
                                            if ($parent->parent_id != 0)
                                                continue;
                                            $childs = $list->where('parent_id', $parent->id);
                                        @endphp
                                        <li><input id="func{{ $parent->id }}" name="funcs[]" value="{{ $parent->id }}"
                                                {{ isset($roles[$parent->id]) ? 'checked' : '' }} type="checkbox" />
                                            <label for="func{{ $parent->id }}">{{ $parent->name }}</label>
                                            @if ($childs->count())
                                                <ul style="list-style:none">
                                                    @foreach ($childs as $child)
                                                        <li><input id="func{{ $child->id }}" type="checkbox"
                                                                name="funcs[]" {{ isset($roles[$child->id]) ? 'checked' : '' }}
                                                                value="{{ $child->id }}" /> <label
                                                                for="func{{ $child->id }}">{{ $child->name }}</label>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            @endif
                                        </li>
                                    @endforeach
                                @else
                                    <div class="text-center table-warning" colspan="5">Không tìm thấy dữ liệu.</div>
                                @endif
                            </ul>
                            <div class="mt-2 text-right">
                                <a type="button" href="{{ route('role.index') }}" class="btn btn-danger">Bỏ qua</a>
                                <button type="submit" class="btn btn-primary">Ghi</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
