@extends('admin-layout.main')
@section('title', 'Danh sách sản phẩm')
@section('content')
    

<table class="table table-hover">
    <thead>
        <th>ID</th>
        <th>Name</th>
        <th>Category</th>
    </thead>
    <tbody>
        @foreach($products as $p)
        <tr>
            <td>{{$p->id}}</td>
            <td>{{$p->name}}</td>
            <td>
                <a href="{{BASE_URL . 'admin/danh-muc/' . $p->category->id}}">{{$p->category->name}}</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection