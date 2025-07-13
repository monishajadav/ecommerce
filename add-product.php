
    <?php include "./includes/header.php" ?>
   <?php include('includes/navbar.php') ?>
    <div class="container py-5">
        <h2 class="mb-4">Add New Product</h2>
        <form id="addProductForm" enctype="multipart/form-data" novalidate>
            <div class="mb-3">
                <label for="productName" class="form-label">Product Name</label>
                <input type="text" class="form-control" id="productName" required>
                <div class="invalid-feedback">Please enter the product name.</div>
            </div>
            <div class="mb-3">
                <label for="productDescription" class="form-label">Description</label>
                <textarea class="form-control" id="productDescription" rows="3" required></textarea>
                <div class="invalid-feedback">Please enter a description.</div>
            </div>
            <div class="mb-3">
                <label for="productPrice" class="form-label">Price ($)</label>
                <input type="number" class="form-control" id="productPrice" min="0" step="0.01" required>
                <div class="invalid-feedback">Please enter a valid price.</div>
            </div>
            <div class="mb-3">
                <label for="productCategory" class="form-label">Category</label>
                <input type="text" class="form-control" id="productCategory" required>
                <div class="invalid-feedback">Please enter a category.</div>
            </div>
            <div class="mb-3">
                <label for="productImage" class="form-label">Product Image</label>
                <input class="form-control" type="file" id="productImage" accept="image/*" required>
                <div class="invalid-feedback">Please upload a product image.</div>
            </div>
            <button type="submit" class="btn btn-primary">Add Product</button>
        </form>
    </div>
 <?php include('includes.footer.php')?>
