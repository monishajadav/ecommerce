<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart - E-Commerce</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #f8fafc 0%, #e0eafc 100%);
        }
        .cart-card {
            border-radius: 1.5rem;
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.08);
            background: #fff;
        }
        .cart-summary {
            border-radius: 1rem;
            background: #f1f6fb;
            box-shadow: 0 2px 8px 0 rgba(31, 38, 135, 0.05);
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold" href="index.html"><i class="bi bi-bag-check"></i> E-Commerce</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="index.html">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="about.html">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
                    <li class="nav-item"><a class="nav-link active" href="cart.html"><i class="bi bi-cart"></i> Cart</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container py-5">
        <h2 class="mb-4 fw-bold text-center"><i class="bi bi-cart"></i> Shopping Cart</h2>
        <div class="row g-4">
            <div class="col-lg-8">
                <div class="cart-card card p-4 mb-4">
                    <div class="table-responsive">
                        <table class="table align-middle mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th scope="col">Product</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Subtotal</th>
                                    <th scope="col">Remove</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><img src="https://via.placeholder.com/80x60" class="img-thumbnail" style="height: 60px;" alt="Product 1"></td>
                                    <td>Product 1</td>
                                    <td>$19.99</td>
                                    <td><input type="number" class="form-control form-control-sm w-50" value="1" min="1"></td>
                                    <td>$19.99</td>
                                    <td><button class="btn btn-outline-danger btn-sm"><i class="bi bi-trash"></i></button></td>
                                </tr>
                                <tr>
                                    <td><img src="https://via.placeholder.com/80x60" class="img-thumbnail" style="height: 60px;" alt="Product 2"></td>
                                    <td>Product 2</td>
                                    <td>$29.99</td>
                                    <td><input type="number" class="form-control form-control-sm w-50" value="2" min="1"></td>
                                    <td>$59.98</td>
                                    <td><button class="btn btn-outline-danger btn-sm"><i class="bi bi-trash"></i></button></td>
                                </tr>
                                <!-- More cart items as needed -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="cart-summary p-4 mb-4">
                    <h5 class="fw-bold mb-3">Order Summary</h5>
                    <div class="d-flex justify-content-between mb-2">
                        <span>Subtotal</span>
                        <span>$79.97</span>
                    </div>
                    <div class="d-flex justify-content-between mb-2">
                        <span>Shipping</span>
                        <span>$5.00</span>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-between mb-3">
                        <span class="fw-bold">Total</span>
                        <span class="fw-bold text-primary">$84.97</span>
                    </div>
                    <a href="checkout.html" class="btn btn-primary w-100">Proceed to Checkout <i class="bi bi-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> 