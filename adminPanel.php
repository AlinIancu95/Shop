<?php include 'functions.php';?>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="Shop/style.css">
</head>
<body>
<?php if (!getAuthUser() || !getAuthAdmin()){
    header('Location: index.php');
}
?>
    <div class="container-fluid mainSite">
        <div class="container">
            <div class="row">
                <div class="col-2 logo">
                    <a href="../Shop/index.php">
                        <img src="../Shop/images/logo.png" alt="logo.png" title="Libertate in fiecare zi">
                    </a>
                </div>
                <div class="col-10">
                    <h1>
                        <strong>
                            Admin Panel
                        </strong>
                    </h1>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-6 mt-5">
                    <a class="btn btn-primary" href="insertProduct.php">Adauga Produs</a>
                </div>
            </div>
            <div class="row">
                <div class="col-6 mt-4">
                    <button class="btn btn-primary" id="addVendorBtn">
                        Adauga vendor
                    </button>
                </div>
                <div class="col-6 mt-4">
                    <button class="btn btn-primary" id="addCategoryBtn">
                        Adauga categorie
                    </button>
                </div>
            </div>

            <div class="row">
                <div class="col-6 mt-4">
                    <button class="btn btn-primary" id="deleteVendorBtn">
                        Sterge vendor
                    </button>
                </div>
                <div class="col-6 mt-4">
                    <button class="btn btn-primary" id="deleteCategoryBtn">
                        Sterge categorie
                    </button>
                </div>
            </div>
            <div class="row">
                <div class="col-6 d-none" id="vendorForm"" >
                    <form action="processInsertVendor.php" method="post">
                        <div class="form-group">
                            <label for="name">Vendor name</label>
                            <input type="text" class="form-control" id="name" name="name"  placeholder="Enter vendor name">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
                <div class="col-6 d-none" id="categoryForm">
                    <form action="processInsertCategory.php" method="post">
                        <div class="form-group">
                            <label for="name">Category name</label>
                            <input type="text" class="form-control" id="name" name="name"  placeholder="Enter category name">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-6 d-none" id="deleteVendorForm"" >
                <form action="processDeleteVendor.php" method="post">
                    <div class="form-group">
                        <label for="name">Delete vendor name</label>
                        <input type="text" class="form-control" id="name" name="name"  placeholder="Delete vendor name">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <div class="col-6 d-none" id="deleteCategoryForm">
                <form action="processDeleteCategory.php" method="post">
                    <div class="form-group">
                        <label for="name">Delete category name</label>
                        <input type="text" class="form-control" id="name" name="name"  placeholder="Delete category name">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        document.getElementById('addCategoryBtn').addEventListener('click', function() {
            if (document.getElementById('categoryForm').classList.contains('d-none')) {
                document.getElementById('categoryForm').classList.remove('d-none');
            }
            else {
                document.getElementById('categoryForm').classList.add('d-none');
            }
        } )

        document.getElementById('addVendorBtn').addEventListener('click', function() {
            if (document.getElementById('vendorForm').classList.contains('d-none')) {
                document.getElementById('vendorForm').classList.remove('d-none');
            }
            else {
                document.getElementById('vendorForm').classList.add('d-none');
            }
        } )
        document.getElementById('deleteCategoryBtn').addEventListener('click', function() {
            if (document.getElementById('deleteCategoryForm').classList.contains('d-none')) {
                document.getElementById('deleteCategoryForm').classList.remove('d-none');
            }
            else {
                document.getElementById('deleteCategoryForm').classList.add('d-none');
            }
        } )

        document.getElementById('deleteVendorBtn').addEventListener('click', function() {
            if (document.getElementById('deleteVendorForm').classList.contains('d-none')) {
                document.getElementById('deleteVendorForm').classList.remove('d-none');
            }
            else {
                document.getElementById('deleteVendorForm').classList.add('d-none');
            }
        } )
    </script>
</body>
