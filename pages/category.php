<div class="container hidden-xs hidden-sm">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="/">HOME</a></li>
            <li class="active">CANVAS RUCKSACKS</li>
        </ol>
    </div>
</div>
<header>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h1>CANVAS RUCKSACKS</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
            <div class="col-md-4">
                <img src="/images/homepage-content/canvas-rucksacks.jpg" width="360" height="136" style="margin-top: 20px;" />
                </div>
            </div>
        </div>
    </div>
</header>
<section>
    <div class="container">
        <div class="row">
            <div class="col-xs-6">
                <p class="h4">VIEW FILTERS&nbsp;<input type="checkbox" name="filter-toggle"></p>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="row">
            <div class="filters col-xs-12 col-md-3">
<?php
                include 'components/filters.php';
?>
            </div>
<?php
    $products = array(
         1 => array("href" => "/product", "image" => "product-1.png", "name" => "SANDQVIST CANVAS ORIGINAL BACKPACK - OSKAR / OLIVE", "price" => "£123.99"),
         2 => array("href" => "/product", "image" => "product-2.png", "name" => "SANDQVIST CANVAS ORIGINAL BACKPACK - OSKAR / OLIVE", "price" => "£123.99"),
         3 => array("href" => "/product", "image" => "product-3.png", "name" => "SANDQVIST CANVAS ORIGINAL BACKPACK - OSKAR / OLIVE", "price" => "£123.99", "pre-order" => true),
         4 => array("href" => "/product", "image" => "product-4.png", "name" => "SANDQVIST CANVAS ORIGINAL BACKPACK - OSKAR / OLIVE", "price-old" => "£123.99", "price-new" => "£99.99"),
         5 => array("href" => "/product", "image" => "image-missing.png", "name" => "SANDQVIST CANVAS ORIGINAL BACKPACK - OSKAR / OLIVE", "price" => "£123.99"),
         6 => array("href" => "/product", "image" => "image-missing.png", "name" => "SANDQVIST CANVAS ORIGINAL BACKPACK - OSKAR / OLIVE", "price" => "£123.99"),
         7 => array("href" => "/product", "image" => "image-missing.png", "name" => "SANDQVIST CANVAS ORIGINAL BACKPACK - OSKAR / OLIVE", "price" => "£123.99"),
         8 => array("href" => "/product", "image" => "image-missing.png", "name" => "SANDQVIST CANVAS ORIGINAL BACKPACK - OSKAR / OLIVE", "price" => "£123.99"),
         9 => array("href" => "/product", "image" => "image-missing.png", "name" => "SANDQVIST CANVAS ORIGINAL BACKPACK - OSKAR / OLIVE", "price" => "£123.99"),
        10 => array("href" => "/product", "image" => "image-missing.png", "name" => "SANDQVIST CANVAS ORIGINAL BACKPACK - OSKAR / OLIVE", "price" => "£123.99"),
        11 => array("href" => "/product", "image" => "image-missing.png", "name" => "SANDQVIST CANVAS ORIGINAL BACKPACK - OSKAR / OLIVE", "price" => "£123.99"),
        12 => array("href" => "/product", "image" => "image-missing.png", "name" => "SANDQVIST CANVAS ORIGINAL BACKPACK - OSKAR / OLIVE", "price" => "£123.99"),
        13 => array("href" => "/product", "image" => "image-missing.png", "name" => "SANDQVIST CANVAS ORIGINAL BACKPACK - OSKAR / OLIVE", "price" => "£123.99"),
        14 => array("href" => "/product", "image" => "image-missing.png", "name" => "SANDQVIST CANVAS ORIGINAL BACKPACK - OSKAR / OLIVE", "price" => "£123.99"),
        15 => array("href" => "/product", "image" => "image-missing.png", "name" => "SANDQVIST CANVAS ORIGINAL BACKPACK - OSKAR / OLIVE", "price" => "£123.99"),
        16 => array("href" => "/product", "image" => "image-missing.png", "name" => "SANDQVIST CANVAS ORIGINAL BACKPACK - OSKAR / OLIVE", "price" => "£123.99"),
    );
    
    foreach ($products as $product_id => $product) {
        include 'components/product.php';
    
    }
?>
</section>