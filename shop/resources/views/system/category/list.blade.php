@extends('system.main')
@section('content')
    <div class="card">
        <div class="card-header">
            <div class="card-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                        <button type="submit" class="btn btn-default">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0">
            <table class="table table-hover text-nowrap">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Content</th>
                        <th>Active</th>
                        <th>Update at</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @if($listCategories)
                        @foreach($listCategories as $category)
                            <tr>
                                <td>{{ $category -> id }}</td>
                                <td>{{ $category -> name }}</td>
                                <td>{!! $category -> content !!}</td>
                                <td>{{ $category -> active == 1 ? 'True' : 'False' }}</td>
                                <td>{{ $category -> updated_at }}</td>
                                <td>
                                    <a href="/system/categories/edit/{{$category->id }}">
                                        Edit
                                    </a>
                                    <a href="#" onclick="removeCategory({{ $category->id }}, '/system/categories/destroy')">
                                        Delete
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    @else

                    @endif

                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
@endsection
