<?php

include "parts/header.php";

?>
    <div class="row">
        <div class="col-12">
            <form action="processInsertProduct.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name"  placeholder="Enter product name">
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="number" class="form-control" id="price"  name="price"  placeholder="Enter product price">
                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" id="description" name="description"  placeholder="Enter product description"></textarea>
                </div>

                <div class="form-group">
                    <label for="code">Code</label>
                    <input type="text" class="form-control" id="code" name="code"  placeholder="Enter product code">
                </div>

                <div class="form-group">
                    <label for="discount">Discount</label>
                    <input type="number" class="form-control"  name="discount" id="discount"  placeholder="Enter product discount">
                </div>

                <div class="form-group">
                    <label for="weight">Weight</label>
                    <input type="number" class="form-control"  name="weight" id="weight"  placeholder="Enter product weight">
                </div>

                <div class="form-group">
                    <label for="category">Type</label>
                    <select class="form-control"   name="type" id="type"  placeholder="Select type">
                            <option value="product">Product</option>
                            <option value="service">Service</option>
                            <option value="delivery">Delivery</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="category">Category</label>
                    <select class="form-control"   name="categoryId" id="category"  placeholder="Select category">
                        <?php foreach (Category::findAll() as $category): ?>
                            <option value="<?php echo $category->getId(); ?>"><?php echo $category->name; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="form-group">
                    <label for="vendor">Vendor</label>
                    <select type="number" class="form-control"   name="vendorId" id="vendor"  placeholder="Select vendor">
                    <?php foreach (Vendor::findAll() as $vendor): ?>
                        <option value="<?php echo $vendor->getId(); ?>"><?php echo $vendor->name; ?></option>
                    <?php endforeach; ?>
                    </select>
                </div>

                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" class="form-control"   name="image" id="image"  placeholder="Select your image">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
<?php include "parts/footer.php"; ?>