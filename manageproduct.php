<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Products - E-Commerce Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="index.html">E-Commerce</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="index.html">Home</a></li>
                    <li class="nav-item"><a class="nav-link active" href="manage-product.html">Manage Products</a></li>
                    <li class="nav-item"><a class="nav-link" href="add-product.html">Add Product</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container py-5">
        <h2 class="mb-4">Manage Products</h2>
        <div class="table-responsive">
            <table class="table table-bordered align-middle">
                <thead class="table-light">
                    <tr>
                        <th scope="col">Image</th>
                        <th scope="col">Name</th>
                        <th scope="col">Price</th>
                        <th scope="col">Category</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="https://via.placeholder.com/80x60" alt="Product 1" class="img-thumbnail" style="height: 60px;"></td>
                        <td>Product 1</td>
                        <td>$19.99</td>
                        <td>Electronics</td>
                        <td>
                            <a href="edit-product.html" class="btn btn-warning btn-sm">Edit</a>
                            <a href="delete-product.html" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td><img src="https://via.placeholder.com/80x60" alt="Product 2" class="img-thumbnail" style="height: 60px;"></td>
                        <td>Product 2</td>
                        <td>$29.99</td>
                        <td>Clothing</td>
                        <td>
                            <a href="edit-product.html" class="btn btn-warning btn-sm">Edit</a>
                            <a href="delete-product.html" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                    <!-- Add more products as needed -->
                </tbody>
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> 