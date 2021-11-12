<?php
include "parts/header.php";


$query = "SELECT * FROM products";

$filters = [];
if (isset($_GET['search'])){
    $search = $_GET['search'];
    $filters[]="name LIKE '%$search%' OR description LIKE '%$search%'";
}

if (isset($_GET['vendor'])){
    $vendorIds= $_GET['vendor'];
    $vendorFilters = [];
    foreach ($vendorIds as $vendorId) {
        $vendorFilters[] = "vendorId=$vendorId";
    }
    if (count($vendorFilters)>0){
        $filters[] = '('.implode(' OR ', $vendorFilters).')';
    }
}

if (isset($_GET['category'])){
    $categoryIds= $_GET['category'];

    $categoryFilters = [];
    foreach ($categoryIds as $categoryId) {
        $categoryFilters[] = "categoryId=$categoryId";
    }
    if (count($categoryFilters)>0){
        $filters[] = '('.implode(' OR ', $categoryFilters).')';
    }
}

if (isset($_GET['price_range'])){
    $priceRanges= $_GET['price_range'];
    $priceRangeFilters = [];
    if (in_array('1..100', $priceRanges)){
        $priceRangeFilters[]="price >= 1 AND price <=100";
    }
    if (in_array('100..200', $priceRanges)){
        $priceRangeFilters[]="price > 100 AND price <=200";
    }
    if (in_array('200..2000', $priceRanges) ){
        $priceRangeFilters[]="price > 200 AND price <=2000";
    }

    if (count($priceRangeFilters)>0){
        $filters[] = '('.implode(' OR ', $priceRangeFilters).')';
    }

}

if (count($filters)>0){
    $filtersString = implode(' AND ', $filters);
    $query.=' WHERE '.$filtersString;
}

$searchedProducts = query($query);
$products = [];
foreach ($searchedProducts as $searchedProduct){
    $products[] = new Product($searchedProduct['id']);
}
?>
    <div class="container mt-5">
        <form method="get" action="search.php">
            <div class="row">

                <div class="col-3 mt-5">
                    <h2>Vendor</h2>
                    <?php $vendors = Vendor::findAll(); ?>
                    <?php foreach ($vendors as $vendor): ?>
                        <?php $vendorObj = new Vendor($vendor->getId()) ?>
                        <input type="checkbox"
                        <?php if (isset($vendorIds) && in_array($vendorObj->getId(),$vendorIds)): ?>
                            checked="checked"
                        <?php endif ?>
                               name="vendor[]" value="<?php echo $vendorObj->getId(); ?>" /><?php echo $vendorObj->name; ?><br />
                    <?php endforeach; ?>
                </div>
                <div class="col-3 mt-5">
                    <h2>Category</h2>
                    <?php $categories = Category::findAll(); ?>
                    <?php foreach ($categories as $category): ?>
                        <?php $categoryObj = new Category($category->getId()) ?>
                        <input type="checkbox"
                        <?php if (isset($categoryIds) && in_array($categoryObj->getId(),$categoryIds)): ?>
                            checked="checked"
                        <?php endif ?>
                               name="category[]" value="<?php echo $categoryObj->getId(); ?>" /><?php echo $categoryObj->name; ?><br />
                    <?php endforeach; ?>
                </div>
                <div class="col-3 mt-5">
                    <h2>Price</h2>
                    <input type="checkbox"
                        <?php if (isset($priceRanges) && in_array("1..100",$priceRanges)): ?>
                            checked="checked"
                        <?php endif ?>
                           name="price_range[]" value="1..100" />1..100 <br />
                    <input type="checkbox"
                        <?php if (isset($priceRanges) && in_array("100..200",$priceRanges)): ?>
                            checked="checked"
                        <?php endif ?>
                           name="price_range[]" value="100..200" />100..200 <br />
                    <input type="checkbox"
                        <?php if (isset($priceRanges) && in_array("200..2000",$priceRanges)): ?>
                            checked="checked"
                        <?php endif ?>
                           name="price_range[]" value="200..2000" />200..2000 <br />
                </div>
                <div class="col-3 mt-5">
                    <button type="submit" class="btn btn-primary">Filter</button>
                </div>

            </div>
        </form>
        <div class="row">
            <div class="col-12 mt-5">
                <h2>Cauta </h2>
            </div>
            <?php
            foreach ($products as $product){
                $product->card();
            }
            ?>
        </div>
    </div>
<?php include "parts/footer.php"; ?>