<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>

    <main>
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-10 d-flex justify-content-end">
                    {{-- <a href="{{ route('admin-products-index') }}" class="btn btn-dark my-2">Back</a> --}}
                    <a href="{{ route('admin-index') }}" class="btn btn-dark my-2">Back</a>
                </div>
                <div class="col-md-10">
                    <div class="card border-0 shadow-lg">
                        <div class="card-header bg-dark">
                            <h3 class="text-white">Edit Product</h3>
                        </div>
                        {{-- <form enctype="multipart/form-data" action="{{ route('admin-products-update', $product->id) }}" --}}
                        <form enctype="multipart/form-data" action="{{ route('admin-update-product', $product->id) }}"
                            method="post">
                            @method('put')
                            @csrf
                            <div class="card-body">
                                <div class="mb-3">
                                    <label class="form-label h5" for="name">Name</label>
                                    <input value="{{ $product->name }}" type="text" name="name" id="name"
                                        placeholder="Enter your Name" class=" form-control form-control-lg">
                                </div>
                                <div class="mb-3">
                                    <label for="sku" class="form-label h5">SKU</label>
                                    <input value="{{ $product->sku }}" type="text" name="sku" id="sku"
                                        class=" form-control form-control-lg" placeholder="Enter SKU">
                                </div>
                                <div class="mb-3">
                                    <label for="price" class="form-label h5">Price</label>
                                    <input value="{{ $product->price }}" placeholder="Enter Price" type="text"
                                        name="price" id="price" class=" form-control form-control-lg">
                                </div>

                                <div class="mb-3">
                                    <label for="Description" class="form-label h5">Description</label>
                                    <textarea placeholder="Enter description" cols="30" rows="5" name="description" id="description"
                                        class="form-control form-control-lg">
                                        {{ $product->description }}
                                    </textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="image" class="form-label h5">Image</label>
                                    <input type="file" name="image" id="image"
                                        class="form-control form-control-lg">
                                    @if ($product->image != '')
                                        <img class="w-25 my-3" src="{{ asset('uploads/products/' . $product->image) }}"
                                            alt="">
                                    @endif
                                </div>
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
</body>

</html>
