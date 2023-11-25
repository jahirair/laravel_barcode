<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <div class="container mt-3">
        <h2>Add Product form</h2>
        <form class="forms-sample" action="{{ url('/store') }}" method='POST' enctype="multipart/form-data">
            @csrf
            <div class="form-group row">
                <label for="product_title" class="col-sm-3 col-form-label">Title</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="product_title" name="title"
                        placeholder="Product Name" style="color:#000;">
                </div>
            </div>

            <div class="form-group row">
                <label for="product_description" class="col-sm-3 col-form-label">Price</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="product_description" name="price"
                        placeholder="Product Price" style="color:#000;">
                </div>
            </div>


            <div class="form-group row">
                <label for="product_price" class="col-sm-3 col-form-label">Description</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="product_price" name="description"
                        placeholder="Product Description" style="color:#000;">
                </div>
            </div>




            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

</body>

</html>
