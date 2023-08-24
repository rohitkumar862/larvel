<!-- DataTales Example -->
@extends('backend.admin')
@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h1 class="h1 text-gray-900 mb-4"> Categorys List</h1>
        <!-- <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6> -->
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Status</th>
                        <th>Creater At</th>
                        <th>Operations</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($categories as $category)
                    <tr>
                        <td>{{$category['id']}}</td>
                        <td>{{$category['name']}}</td>
                        <td>{{$category['title']}}</td>
                        <td>{{$category['status']}}</td>
                        <td>{{date('d-m-y',strtotime($category['created_at']))}}</td>
                        
                        <td>
                            <a href="{{route('categories.edit',encrypt($category['id']))}}" class="btn btn-info btn-sm">Edit</a>
                            <a href="{{route('delete-category',$category['id'])}}" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection