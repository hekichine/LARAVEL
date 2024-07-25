<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>CRUD</title>
</head>
<body>


<div class="bg-dark py-3">
    <h3 class="text-white  text-center"> LARAVEL CRUD</h3>
</div>
<div class="container mt-3">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card border-0 shadow-lg">
                <div class="card-header bg-dark text-white">
                    <h3 class="">Create Product</h3>
                </div>
                <form action="{{ route('products.store') }}" method="post">
                    @csrf
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="name">Name</label>
                            <input id="name" value="{{ old('name') }}" type="text" @error('name') is-invalid @enderror class="form-control form-control-lg" placeholder="Name" name="name">
                            @error('name')
                                <p class="invalid-feedback d-block">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="sku">SKU</label>
                            <input id="sku" value="{{ old('sku') }}"  type="text" @error('sku') is-invalid @enderror class="form-control form-control-lg" placeholder="SKU" name="sku">
                            @error('sku')
                                <p class="invalid-feedback d-block">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="price">Price</label>
                            <input id="price" value="{{ old('price') }}"  type="number" @error('price') is-invalid @enderror class="form-control form-control-lg" placeholder="Price" name="price">
                            @error('price')
                                <p class="invalid-feedback d-block">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="des">Description</label>
                            <textarea   class="form-control" name="description" cols="30" rows="5">{{ old('description') }}
                            </textarea>
                        </div>
                        <div class="mb-3">
                            <label for="image">Image</label>
                            <input type="file" class="form-control form-control-lg" name="image" >
                        </div>
                        <div class="d-grid">
                            <button class="btn btn-primary btn-lg">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
-->
</body>
</html>
