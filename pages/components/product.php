<?php
if (!isset($size)) {
    $class = "col-xs-6 col-md-3";
    $size = 263;
}
$flagSize = ($size / 263) * 70;
if ($product) {
?>
<article class="<?php echo $class; ?>">
    <a href="<?php echo $product['href']; ?>">
    <?php
        $filename = "/images/products/" . $product['image'];
    ?>
        <img width="<?php echo $size; ?>" height="<?php echo $size; ?>" src="<?php echo $filename; ?>" alt="" />
    <?php
        if (isset($product['price-old'])) {
    ?>
        <img class="product-flag" width="<?php echo $flagSize; ?>" height="<?php echo $flagSize; ?>" src="/images/products/20-percent.png" alt="" />
    <?php
        }
        if (isset($product['pre-order'])) {
    ?>
        <img class="product-flag" width="<?php echo $flagSize; ?>" height="<?php echo $flagSize; ?>" src="/images/products/pre-order.png" alt="" />
    <?php
        }
    ?>
        <p><?php echo $product['name']; ?></p>
    <?php
        if (isset($product['price-old'])) {
    ?>
        <p><span class="price price-old"><?php echo $product['price-old']; ?></span><span class="price price-new"><?php echo $product['price-new']; ?></span></p>
    <?php
        } else {
    ?>
        <p><span class="price"><?php echo $product['price']; ?></span></p>
    <?php
        }
    ?>
    </a>
</article>
<?php
}
?>
