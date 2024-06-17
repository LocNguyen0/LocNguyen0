@extends('admin.layouts.master')

@section('title')
    Danh sách danh mục sản phẩm
@endsection

@section('content')
    <a href="{{ route('admin.catalogues.create') }}" class="btn btn-primary mb-3">Thêm mới</a>
    <table>
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>COVER</th>
            <th>IS_ACTIVE</th>
            <th>CREATED_AT</th>
            <th>UPDATED_AT</th>
            <th>ACTION</th>
        </tr>

        @foreach ($data as $item)
        
        <tr>
            <td>{{ $item -> id }}</td>
            <td>{{ $item -> name }}</td>
            <td>
                <img src="{{ Storage::url($item -> cover) }}" alt="" width="50px">
            </td>
            <td>{!! $item -> is_active 
            ? ' <span class="badge bg-primary">YES</span>' 
            : ' <span class="badge bg-danger">NO</span>'!!}</td>
            <td>{{ $item -> created_at }}</td>
            <td>{{ $item -> updated_at }}</td>
            <td>
                <a href="{{ route('admin.catalogues.show', $item->id) }}" class="btn btn-info mb-3">Xem</a>
                <a href="{{ route('admin.catalogues.edit', $item->id) }}" class="btn btn-warning mb-3">sửa</a>
                
                <a href="{{ route('admin.catalogues.destroy', $item->id) }}"  onclick="return confirm('Bạn có muốn xoá ?')" class="btn btn-danger mb-3">xóa</a>
            </td>
        </tr>
        @endforeach

    </table>

    {{$data->links()}}
@endsection
