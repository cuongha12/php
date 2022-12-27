@extends('layouts.masterAdmin')

@section('main')
<form action="{{route('product.update',$product->id)}}" method="POST" role="form" enctype="multipart/form-data">
    @csrf @method('PUT')
    <legend>Form title</legend>
    <div class="form-group">
        <div class="form-group">
            <label for="">Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{old('name') ? old('name') : $product->name}}" placeholder="" aria-describedby="helpId">
            @error('name')
            <div class="alert alert-danger py-2 my-2">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="">Image</label>
            <input type="file" name="upload" id="image" class="form-control" placeholder="" aria-describedby="helpId" onchange="change_img(this)">
            <img src="{{url('uploads')}}/{{$product->image}}" id="file" alt="">
        </div>
        <div class="form-group">
            <label for="">Price</label>
            <input type="text" name="price" value="{{$product->price}}" id="price" class="form-control" placeholder="" aria-describedby="helpId">
        </div>
        <div class="form-group">
            <label for="">Sale</label>
            <input type="text" name="sale" value="{{$product->id}}" id="sale" class="form-control" placeholder="" aria-describedby="helpId">
        </div>
        <select class="form-select" aria-label="Default select example" name="category_id">
            @foreach($cate as $cat)
            <option value="{{$cat->id}}">{{$cat->name}}</option>
            @endforeach
        </select>
        <div class="radio">
            <label>
                <input type="radio" name="status" value="1" {{$product->status == 1 ? 'checked':''}}>
                Hiển thị
            </label>
        </div>
        <div class="radio">
            <label>
                <input type="radio" name="status" value="0" {{$product->status == 0 ? 'checked':''}}>
                Tạm ẩn
            </label>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

@stop()
@section('js')
<script>
    function change_img(upload) {
        var image = upload.files[0];

        var reader = new FileReader;

        reader.onload = function(e) {
            file.src = e.target.result
        }
        reader.readAsDataURL(image);
    }
</script>
@stop()