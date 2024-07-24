@extends('layoutadmin')
@section('title')
    Danh sách danh mục sản phẩm
@endsection
@section('content')
    <a href="{{route('category.create')}}" class="btn btn-success">Thêm mới</a>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">name</th>
        </tr>
        </thead>
        <tbody>
        @foreach($listCate as $item)
        <tr>
            <th scope="row">{{$item->id}}</th>
            <td>{{$item->name}}</td>
        </tr>
        @endforeach
        </tbody>
    </table>
    {{-- {{$listPro->links()}} --}}
@endsection
