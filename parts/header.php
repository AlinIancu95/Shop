<?php include 'functions.php';?>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../Shop/style.css">
</head>
<body>
<div class="container-fluid mainSite">
    <div class="container">
        <div class="row">
            <div class="col-2 logo">
                <a href="../Shop/index.php">
                    <img src="../Shop/images/logo.png" alt="logo.png" title="Libertate in fiecare zi">
                </a>
            </div>
            <form method="get" action="search.php">
                <div class="col-6 searchbox">
                    <div class="search">
                        <input type="text" name="search" placeholder="Ai libertatea sa alegi ce vrei" class="placeholder">
                    </div>
                    <div class="lupa">
                        <button type="submit">
                            <i class="searchul fa fa-search" aria-hidden="true"></i>
                        </button>
                    </div>
                </div>
            </form>
            <?php if (getAuthUser()): ?>
                 &nbsp; <a href="logout.php">LogOut</a>
            <?php else: ?>
                <div class="col-2 contulMeu dropdown">
                    <a href="#">
                        <i class="user fa fa-user-o" aria-hidden="true"></i>
                        <span class="cont">Contul meu
                                <i class="fa fa-caret-down" aria-hidden="true"></i>
                                </span>
                        <div class="dropdown-content contContent">
                            <div class="dropdownBody clearfix">
                                <i class="usercircle fa fa-user-circle" aria-hidden="true"></i>
                                <p class="paraUser">Intra in contul tau eMAG si ai control <br />complet asupra ofertelor!</p>
                            </div>
                            <div class="dropdownFooter">
                                <a href="login.php" class="btndropDown btn btn-primary">
                                    <img src="images/forward.png" alt="forward">
                                    <span>Intra in cont</span>
                                </a>
                                <a href="../Shop/newUser.php" class="textCont">
                                    <span>Cont nou</span>
                                </a>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endif; ?>
            <div class="col-1 favorite dropdown">
                <a href="#">
                    <i class="heart fa fa-heart-o" aria-hidden="true"></i>
                    <span class="favorit">Favorite
                            <i class="fa fa-caret-down" aria-hidden="true"></i>
                            </span>
                    <div class="dropdown-content">
                        <p>Nu ai produse favorite.</p>
                    </div>
                </a>
            </div>
            <div class="col-2 cosulMeu dropdown">
                <a href="#">
                    <i class="cart fa fa-shopping-cart" aria-hidden="true"></i>
                    <span class="badge badge-danger"><?php echo getCurrentCart()->getProductCount(); ?></span>
                    <span class="cos">Cosul meu
                            <i class="fa fa-caret-down" aria-hidden="true"></i>
                            </span>
                    <div class="dropdown-content">
                        <a class="nav-link" href="cart.php">Vezi detalii cos</a>
                    </div>
                </a>
            </div>
            <div class="col-1 blank">

            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-12">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Categorii
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <?php $categories = Category::findAll(); ?>
                                <?php foreach ($categories as $categoryObj): ?>
                                    <a class="dropdown-item" href="category.php?id=<?php echo $categoryObj->getId(); ?>"><?php echo $categoryObj->name ?>(<?php echo $categoryObj->productCount; ?>)</a>
                                <?php endforeach; ?>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Vendori
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <?php $vendors = Vendor::findAll(); ?>
                                <?php foreach ($vendors as $vendorObj): ?>
                                    <a class="dropdown-item" href="vendor.php?id=<?php echo $vendorObj->getId(); ?>"><?php echo $vendorObj->name ?>(<?php echo count($vendorObj->getProducts()); ?>)</a>
                                <?php endforeach; ?>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../Shop/index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li>
                        <?php if (getAuthUser() && getAuthAdmin()): ?>
                            <li class="nav-item">
                                <a class="nav-link" href="../Shop/adminPanel.php">Admin Panel</a>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </nav>
        </div>
    </div>