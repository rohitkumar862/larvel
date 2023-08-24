@extends('backend.admin')
@section('content')

<style>
    input#dd {
    padding: 4px;
}
</style>
<div class="col-lg-12">
    <div class="p-5">
        <div class="text-center">
            @if(session()->has('success'))
            <div class="atere alert-success">{{session('success')}}</div>
            @endif
            @if(session()->has('error'))
            <div class="atere alert-success">{{session('error')}}</div>
            @endif
            <h1 class="h1 text-gray-900 mb-4">Add New Blog</h1>
        </div>
        <form class="user" action="{{route('save-blog')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="form-label">Category</label>
                <select class="form-control" name="category">
                    <option value="">Select Category</option>
                    @foreach($categories as $cat)
                    <option value="{{$cat->id}}">{{$cat->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label class="form-label">Sub Category</label>
                <select class="form-control" name="subcategory">
                    <option value="">Select SubCategory</option>
                    @foreach($subcategories as $sub)
                    <option value="{{$sub->id}}">{{$sub->title}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label>Title</label>
                <input type="text" class="form-control form-control-user" name="title" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Title">
            </div>
            <div class="form-group">
                <label>Discription</label>
                <input type="text" class="form-control form-control-user" name="disc" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Discription">
            </div>
            <div class="form-group">
                <label class="form-label">status</label>
                <select class="form-control" name="status">
                    <option value="1">Active</option>
                    <option value="0">inactive</option>
                </select>
            </div>
            <div class="form-group">
                <label class="form-label">Photo</label>
                <input type="file" id="dd" class="form-control form-control-user" name="photo" placeholder="Choose Photo" />
            </div>
            <input type="submit" name="save" class="btn btn-primary" value="SAVE" />
        </form>
    </div>
</div>


@endsection         