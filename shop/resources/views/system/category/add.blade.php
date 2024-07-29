@extends('system.main')
@section('head')
    <script src="/ckeditor/ckeditor.js"></script>
@endsection
@section('content')
    <div class="card card-primary">
        @include('system.alert')
        <!-- form start -->
        <form action="" method="post">
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Enter name" value="{{ old('name') }}">
                    @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Content</label>
                    <textarea name="content" id="category-add-content" rows="10" cols="80">
                       {{ old('content') }}
                    </textarea>
                </div>
                <div class="form-group">
                    <label>Active</label>
                    <div class="custom-control custom-radio">
                        <input class="custom-control-input" type="radio" id="customRadio1" value="1" name="category_active" checked="">
                        <label for="customRadio1" class="custom-control-label">Yes</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input class="custom-control-input" type="radio" id="customRadio2" value="0" name="category_active">
                        <label for="customRadio2" class="custom-control-label">No</label>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            @csrf
        </form>
    </div>
@endsection

@section('footer')
    <script>
        // Replace the <textarea id="editor1"> with a CKEditor 4
        // instance, using default configuration.
        CKEDITOR.replace( 'category-add-content' );
    </script>
@endsection
