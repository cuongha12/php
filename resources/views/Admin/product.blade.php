@extends('layouts.masterAdmin')

@section('main')
<div class="container">
<a name="" id="" class="btn btn-primary" href="{{route('product.create')}}" role="button">Thêm</a>

    <table class="table table-dark table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Image</th>
                <th>Price</th>
                <th>Sale</th>
                <th>Category</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pro as $cat)
            <tr>
                <td>{{ $cat->id }}</td>
                <td>{{ $cat->name }}</td>
                <td><img src="{{url('uploads')}}/{{$cat->image}}" width="100px" alt=""></td>
                <td>{{ $cat->price }}</td>
                <td>{{ $cat->sale }}</td>
                <td>{{ $cat->cats ? $cat->cats->name : '' }}</td>
                <td>{{ $cat->status == 0 ? 'Tạm ẩn' : 'Hiển thị' }}</td>
                <td>
                    <form action="{{route('product.destroy',$cat->id)}}" method="POST">
                        @csrf @method('DELETE')
                        <a href="{{route('product.edit',$cat->id)}}" class="btn btn-success">EDIT</a>
                        <button class="btn btn-danger" onclick="alert('Có xoá hay không')">DELETE</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <hr>
</div>
@stop()