@extends('client-layout.main')
@section('content')
<h3>Hello, {{$_SESSION['auth']['name']}}</h3>
<table>
    <thead>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Gender</th>
        <th>Age</th>
        <th>Avatar</th>
        <th>
            <a href="{{BASE_URL . 'add-user'}}">Tạo mới</a>
        </th>
    </thead>
    <tbody>
        @foreach($users as $u)
        <tr>
            <td>{{$u->id}}</td>
            <td>{{$u->name}}</td>
            <td>{{$u->email}}</td>
            <td>
                @if($u->gender == 1)
                Nam
                @elseif($u->gender == 2)
                Nữ
                @else
                Khác
                @endif
            </td>
            <td>{{$u->age}}</td>
            <td>
                @if(!empty($u->avatar))
                <img src="{{PUBLIC_PATH . $u->avatar}}" width="70">
                @endif
            </td>
            <td>
                <a href="{{BASE_URL . 'edit-user/' . $u->id}}">Sửa</a>
                <a href="{{BASE_URL . 'remove-user/' . $u->id}}">Xóa</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection