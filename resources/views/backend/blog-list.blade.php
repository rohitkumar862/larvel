<!-- DataTales Example -->
@extends('backend.admin')
@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h1 class="h1 text-gray-900 mb-4"> Blog List</h1>
        <!-- <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6> -->
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Category</th>
                        <th>SubCategory</th>
                        <th>Title</th>
                        <th>Discription</th>
                        <th>Status</th>
                        <th>Photo</th>
                        <th>Creater At</th>
                        <th>Operations</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($blogs as $blog)
                    <tr>
                        <td>{{$blog['id']}}</td>
                        <td>{{$blog->category->name}}</td>
                        <td>{{$blog->subcategory->title}}</td>
                        <td>{{$blog['title']}}</td>
                        <td>{{$blog['discription']}}</td>
                        <td>{{$blog['status']}}</td>
                        <td><img src="{{asset('img/'.$blog->photos)}}" width="70%" height="90px"></td>
                        <td>{{date('d-m-y',strtotime($blog['created_at']))}}</td>
                        <td>
                            <a href="{{route('blogs.edit',encrypt($blog['id']))}}" class="btn btn-info btn-sm">Edit</a>
                            <a href="{{route('blogs-delete',($blog['id']))}}" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection