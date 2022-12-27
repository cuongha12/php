@extends('layouts.masterAdmin')

@section('main')
<form action="{{route('product.store')}}" enctype="multipart/form-data" method="POST">
    @csrf
    <div class="form-group">
        <div class="form-group">
            <label for="">Name</label>
            <input type="text" name="name" id="name" class="form-control" placeholder="" aria-describedby="helpId">
        </div>
        <div class="form-group">
            <label for="">Image</label>
            <input type="file" name="upload" id="image" class="form-control" placeholder="" aria-describedby="helpId">
        </div>
        <div class="form-group">
            <label for="">Price</label>
            <input type="text" name="price" id="price" class="form-control" placeholder="" aria-describedby="helpId">
        </div>
        <div class="form-group">
            <label for="">Sale</label>
            <input type="text" name="sale" id="sale" class="form-control" placeholder="" aria-describedby="helpId">
        </div>
        <select class="form-select" aria-label="Default select example" name="category_id">
            @foreach($cate as $cat)
            <option value="{{$cat->id}}">{{$cat->name}}</option>
            @endforeach
        </select>
        <div class="radio">
            <label>
                <input type="radio" name="status" value="1" checked>
                Hiển thị
            </label>
        </div>
        <div class="radio">
            <label>
                <input type="radio" name="status" value="0">
                Tạm ẩn
            </label>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

@stop()