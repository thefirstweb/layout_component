<?php
$data = [
    '0' => [
        'img' => 'https://farm1.staticflickr.com/474/19407641340_5bdd95eb65_z.jpg',
        'promote_text' => 'promote_text',
        'title' => 'titeSRyqiple',
        'price' => '2580',
        'shop' => 'Yahoo! Yahoo!',
        'url' => '//tw.yahoo.com',
        'low_price' => '100',
        'high_price' => '100999999',
        'product_info' => '2 商家販售(11 個商品)',
    ],
    '1' => [
        'img' => 'https://farm1.staticflickr.com/290/19595609395_6ea2b635ea_z.jpg',
        'promote_text' => 'promote_text',
        'title' => 'tiSRt網路封鎖失靈leyqip',
        'price' => '258025802580258025802580',
        'shop' => 'Yahoo!Yahoo! ',
        'url' => '//feebee.com.tw',
        'low_price' => '0',
        'high_price' => '200',
        'product_info' => '111 商家販售(999 個商品)',
    ],
    '2' => [
        'img' => 'https://farm1.staticflickr.com/474/19407641340_5bdd95eb65_z.jpg',
        'promote_text' => 'promote_text',
        'title' => 'title tiSRtle網路封鎖失靈titletitleyqiptl網路封鎖失靈etitletieyqiptle title',
        'price' => '2580',
        'shop' => 'Yahoo!Yahoo!Yahoo!Yahoo!',
        'url' => '//google.com.tw',
        'low_price' => '99990',
        'high_price' => '199999200',
        'product_info' => '2 商家販售(2 個商品)',
    ],
    '3' => [
        'img' => 'https://farm1.staticflickr.com/290/19595609395_6ea2b635ea_z.jpg',
        'promote_text' => 'promote_text promote_text promote_textpromote_text promote_textpromote_text promote_text',
        'title' => 'title tiSRtleyqipetitleeyqiptieyqiptle eyqi peyqipeyqip',
        'price' => '2580',
        'shop' => 'Yahoo!',
        'url' => '//www.mobile01.com/',
        'low_price' => '15000',
        'high_price' => '23000',
        'product_info' => '1119 商家販售(9999 個商品)',
    ],
    '5' => [
        'img' => 'https://farm1.staticflickr.com/474/19407641340_5bdd95eb65_z.jpg',
        'promote_text' => 'promote_text',
        'title' => 'titeSRyqiple',
        'price' => '2580',
        'shop' => 'Yahoo! Yahoo!',
        'url' => '//tw.yahoo.com',
        'low_price' => '100',
        'high_price' => '100999999',
        'product_info' => '2 商家販售(11 個商品)',
    ],
    '6' => [
        'img' => 'https://farm1.staticflickr.com/290/19595609395_6ea2b635ea_z.jpg',
        'promote_text' => 'promote_text',
        'title' => 'tiSRt網路封鎖失靈leyqip',
        'price' => '258025802580258025802580',
        'shop' => 'Yahoo!Yahoo! ',
        'url' => '//feebee.com.tw',
        'low_price' => '0',
        'high_price' => '200',
        'product_info' => '111 商家販售(999 個商品)',
    ],
    '7' => [
        'img' => 'https://farm1.staticflickr.com/474/19407641340_5bdd95eb65_z.jpg',
        'promote_text' => 'promote_text',
        'title' => 'title tiSRtle網路封鎖失靈titletitleyqiptl網路封鎖失靈etitletieyqiptle title',
        'price' => '2580',
        'shop' => 'Yahoo!Yahoo!Yahoo!Yahoo!',
        'url' => '//google.com.tw',
        'low_price' => '99990',
        'high_price' => '199999200',
        'product_info' => '2 商家販售(2 個商品)',
    ],
    '8' => [
        'img' => 'https://farm1.staticflickr.com/290/19595609395_6ea2b635ea_z.jpg',
        'promote_text' => 'promote_text promote_text promote_textpromote_text promote_textpromote_text promote_text',
        'title' => 'title tiSRtleyqipetitleeyqiptieyqiptle eyqi peyqipeyqip',
        'price' => '2580',
        'shop' => 'Yahoo!',
        'url' => '//www.mobile01.com/',
        'low_price' => '15000',
        'high_price' => '23000',
        'product_info' => '1119 商家販售(9999 個商品)',
    ],
];

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
<title></title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/pure/0.6.0/pure-min.css">
<link rel="stylesheet" href="build/style.css">

<style>

body {
    background: #f3f3f3;
}
h2 {
    font-size: 2em;
}

</style>
</head>
<body>

<h2>mod_price_comparison</h2>
<ul class="mod_grid_layout mod_price_comparison pure-g">
<?php
foreach ($data as $key) {
?>

    <li class="mod_price_comparison_list pure-u" data-ga="" data-store="" data-url="">
        <div class="product">
            <a class="link_ghost" rel="nofollow" href="<?php echo $key['url']; ?>" target="_blank">
                <div class="img_container">
                    <img src="<?php echo $key['img']; ?>" alt="" class="">
                </div>
                <div class="container">
                    <h4 class="normal"><?php echo $key['title']; ?></h4>
                </div>
            </a>
            <div class="container_bottom">
                <ol>
                    <li class="mod_price_comparison_items pure-g">
                        <a href="<?php echo $key['url']; ?>" target="_blank">
                            <span class="pure-u-1-2 ellipsis small shop">
                                <?php echo $key['shop']; ?>
                            </span>
                            <span class="pure-u-1-2 ellipsis price large">
                                <?php echo $key['price']; ?>
                            </span>
                        </a>
                    </li>
                    <li class="mod_price_comparison_items pure-g">
                        <a href="<?php echo $key['url']; ?>" target="_blank">
                            <span class="pure-u-1-2 ellipsis small shop">
                                <?php echo $key['shop']; ?>
                            </span>
                            <span class="pure-u-1-2 ellipsis price large">
                                <?php echo $key['price']; ?>
                            </span>
                        </a>
                    </li>
                    <li class="mod_price_comparison_items pure-g">
                        <a href="<?php echo $key['url']; ?>" target="_blank">
                            <span class="pure-u-1-2 ellipsis small shop">
                                <?php echo $key['shop']; ?>
                            </span>
                            <span class="pure-u-1-2 ellipsis price large">
                                <?php echo $key['price']; ?>
                            </span>
                        </a>
                    </li>
                </ol>
            </div>
        </div>
    </li>

<?php
}
?>
</ul>

<h2>mod_price_comparison(theme_cell_phone_border)</h2>
<h3>class: theme_cell_phone_border theme_appliances_border theme_camera_border</h3>
<ul class="mod_grid_layout mod_price_comparison theme_cell_phone_border pure-g">
<?php
foreach ($data as $key) {
?>

    <li class="mod_price_comparison_list pure-u" data-ga="" data-store="" data-url="">
        <div class="product">
            <a class="link_ghost" rel="nofollow" href="<?php echo $key['url']; ?>" target="_blank">
                <div class="img_container">
                    <img src="<?php echo $key['img']; ?>" alt="" class="">
                </div>
                <div class="container">
                    <h4 class="normal"><?php echo $key['title']; ?></h4>
                </div>
            </a>
            <div class="container_bottom">
                <ol>
                    <li class="mod_price_comparison_items pure-g">
                        <a href="<?php echo $key['url']; ?>" target="_blank">
                            <span class="pure-u-1-2 ellipsis small shop">
                                <?php echo $key['shop']; ?>
                            </span>
                            <span class="pure-u-1-2 ellipsis price large">
                                <?php echo $key['price']; ?>
                            </span>
                        </a>
                    </li>
                    <li class="mod_price_comparison_items pure-g">
                        <a href="<?php echo $key['url']; ?>" target="_blank">
                            <span class="pure-u-1-2 ellipsis small shop">
                                <?php echo $key['shop']; ?>
                            </span>
                            <span class="pure-u-1-2 ellipsis price large">
                                <?php echo $key['price']; ?>
                            </span>
                        </a>
                    </li>
                    <li class="mod_price_comparison_items pure-g">
                        <a href="<?php echo $key['url']; ?>" target="_blank">
                            <span class="pure-u-1-2 ellipsis small shop">
                                <?php echo $key['shop']; ?>
                            </span>
                            <span class="pure-u-1-2 ellipsis price large">
                                <?php echo $key['price']; ?>
                            </span>
                        </a>
                    </li>
                </ol>
            </div>
        </div>
    </li>

<?php
}
?>
</ul>

<h2>mod_product</h2>
<ul class="mod_grid_layout mod_product pure-g">
<?php
foreach ($data as $key) {
?>

    <li class="pure-u" data-ga="" data-store="" data-url="">
        <a class="link_ghost" rel="nofollow" href="<?php echo $key['url']; ?>" target="_blank">
            <div class="product">
                <div class="img_container">
                    <img src="<?php echo $key['img']; ?>" alt="" class="">
                </div>
                <div class="info">
                    <div class="container">
                        <h4 class="normal"><?php echo $key['title']; ?></h4>
                    </div>
                    <div class="container_bottom">
                        <div class="price ellipsis large">
                            <?php echo $key['price']; ?>
                        </div>
                        <div class="shop ellipsis small">
                            <?php echo $key['shop']; ?>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </li>

<?php
}
?>
</ul>

<h2>mod_product(Divider)</h2>
<ul class="mod_grid_layout mod_product pure-g">
<?php
$mod_grid_divider = "mod_grid_divider";
$divider_count = 1;
$data_size = sizeof($data);
foreach ($data as $key) {
    if ($divider_count === $data_size) {
        $mod_grid_divider = "";
    }
    $divider_count++;

?>

    <li class="pure-u <?php echo $mod_grid_divider; ?>" data-ga="" data-store="" data-url="">
        <a class="link_ghost" rel="nofollow" href="<?php echo $key['url']; ?>" target="_blank">
            <div class="product">
                <div class="img_container">
                    <img src="<?php echo $key['img']; ?>" alt="" class="">
                </div>
                <div class="info">
                    <div class="container">
                        <h4 class="normal"><?php echo $key['title']; ?></h4>
                    </div>
                    <div class="container_bottom">
                        <div class="price ellipsis large">
                            <?php echo $key['price']; ?>
                        </div>
                        <div class="shop ellipsis small">
                            <?php echo $key['shop']; ?>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </li>

<?php
}
?>
</ul>

<h2>mod_product(close btn) (grid_shadow)</h2>
<ul class="mod_grid_layout mod_product pure-g">
<?php
foreach ($data as $key) {
?>

    <li class="pure-u" data-ga="" data-store="" data-url="">
        <div class="mod_grid_close xlarge"></div>
        <a class="link_ghost grid_shadow" rel="nofollow" href="<?php echo $key['url']; ?>" target="_blank">
            <div class="product">
                <div class="img_container">
                    <img src="<?php echo $key['img']; ?>" alt="" class="">
                </div>
                <div class="info">
                    <div class="container">
                        <h4 class="normal"><?php echo $key['title']; ?></h4>
                    </div>
                    <div class="container_bottom">
                        <div class="price ellipsis large">
                            <?php echo $key['price']; ?>
                        </div>
                        <div class="shop ellipsis small">
                            <?php echo $key['shop']; ?>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </li>

<?php
}
?>
</ul>

<h2>mod_product(rank flag) (grid_shadow)</h2>
<ul class="mod_grid_layout mod_product pure-g">
<?php
$flag_count = 1;
foreach ($data as $key) {
?>

    <li class="pure-u" data-ga="" data-store="" data-url="">
        <a class="link_ghost grid_shadow" rel="nofollow" href="<?php echo $key['url']; ?>" target="_blank">
            <div class="mod_grid_flag xlarge"><?php echo $flag_count++; ?></div>
            <div class="product">
                <div class="img_container">
                    <img src="<?php echo $key['img']; ?>" alt="" class="">
                </div>
                <div class="info">
                    <div class="container">
                        <h4 class="normal"><?php echo $key['title']; ?></h4>
                    </div>
                    <div class="container_bottom">
                        <div class="price ellipsis large">
                            <?php echo $key['price']; ?>
                        </div>
                        <div class="shop ellipsis small">
                            <?php echo $key['shop']; ?>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </li>

<?php
}
?>
</ul>

<h2>mod_product(rank flag) (grid_shadow)(theme_cell_phone_flag)</h2>
<h3>class: theme_cell_phone_flag theme_appliances_flag theme_camera_flag</h3>
<ul class="mod_grid_layout mod_product theme_cell_phone_flag pure-g">
<?php
$flag_count = 1;
foreach ($data as $key) {
?>

    <li class="pure-u" data-ga="" data-store="" data-url="">
        <a class="link_ghost grid_shadow" rel="nofollow" href="<?php echo $key['url']; ?>" target="_blank">
            <div class="mod_grid_flag xlarge"><?php echo $flag_count++; ?></div>
            <div class="product">
                <div class="img_container">
                    <img src="<?php echo $key['img']; ?>" alt="" class="">
                </div>
                <div class="info">
                    <div class="container">
                        <h4 class="normal"><?php echo $key['title']; ?></h4>
                    </div>
                    <div class="container_bottom">
                        <div class="price ellipsis large">
                            <?php echo $key['price']; ?>
                        </div>
                        <div class="shop ellipsis small">
                            <?php echo $key['shop']; ?>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </li>

<?php
}
?>
</ul>

<h2>mod_product(grid_shadow)</h2>
<ul class="mod_grid_layout mod_product pure-g">
<?php
foreach ($data as $key) {
?>

    <li class="pure-u" data-ga="" data-store="" data-url="">
        <a class="link_ghost grid_shadow" rel="nofollow" href="<?php echo $key['url']; ?>" target="_blank">
            <div class="product">
                <div class="img_container">
                    <img src="<?php echo $key['img']; ?>" alt="" class="">
                </div>
                <div class="info">
                    <div class="container">
                        <h4 class="normal"><?php echo $key['title']; ?></h4>
                    </div>
                    <div class="container_bottom">
                        <div class="price ellipsis large">
                            <?php echo $key['price']; ?>
                        </div>
                        <div class="shop ellipsis small">
                            <?php echo $key['shop']; ?>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </li>

<?php
}
?>
</ul>

<h2>mod_product(grid_shadow) (price range)</h2>
<ul class="mod_grid_layout mod_product pure-g">
<?php
foreach ($data as $key) {
?>

    <li class="pure-u" data-ga="" data-store="" data-url="">
        <a class="link_ghost grid_shadow" rel="nofollow" href="<?php echo $key['url']; ?>" target="_blank">
            <div class="product">
                <div class="img_container">
                    <img src="<?php echo $key['img']; ?>" alt="" class="">
                </div>
                <div class="info">
                    <div class="container">
                        <h4 class="normal"><?php echo $key['title']; ?></h4>
                    </div>
                    <div class="container_bottom">
                        <span class="price ellipsis large">
                            <?php echo $key['low_price']; ?> ~ <span class="price_range"><?php echo $key['high_price']; ?></span>
                        </span>
                    </div>
                </div>
            </div>
        </a>
    </li>

<?php
}
?>
</ul>

<h2>mod_product(grid_shadow) (price range with desc)</h2>
<ul class="mod_grid_layout mod_product pure-g">
<?php
foreach ($data as $key) {
?>

    <li class="pure-u" data-ga="" data-store="" data-url="">
        <a class="link_ghost grid_shadow" rel="nofollow" href="<?php echo $key['url']; ?>" target="_blank">
            <div class="product">
                <div class="img_container">
                    <img src="<?php echo $key['img']; ?>" alt="" class="">
                </div>
                <div class="info">
                    <div class="container">
                        <h4 class="normal"><?php echo $key['title']; ?></h4>
                    </div>
                    <div class="container_bottom">
                        <span class="price ellipsis large">
                            <?php echo $key['low_price']; ?> ~ <span class="price_range"><?php echo $key['high_price']; ?></span>
                        </span>
                        <div class="product_info ellipsis small">
                            <?php echo $key['product_info']; ?>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </li>

<?php
}
?>
</ul>

<h2>mod_promotion</h2>
<ul class="mod_grid_layout mod_promotion pure-g">
<?php
foreach ($data as $key) {
?>

    <li class="pure-u" data-ga="" data-store="" data-url="">
        <a class="link_ghost" rel="nofollow" href="<?php echo $key['url']; ?>" target="_blank">
            <div class="product">
                <div class="img_container">
                    <img src="<?php echo $key['img']; ?>" alt="" class="">
                </div>
                <div class="info">
                    <div class="container">
                        <p class="promote_text ellipsis small"><?php echo $key['promote_text']; ?></p>
                        <h4 class="normal"><?php echo $key['title']; ?></h4>
                    </div>
                    <div class="container_bottom pure-g">
                        <span class="price large ellipsis pure-u">
                            <?php echo $key['price']; ?>
                        </span>
                        <span class="buy normal pure-u">搶購</span>
                    </div>
                </div>
            </div>
        </a>
    </li>

<?php
}
?>
</ul>

<h2>mod_promotion_list</h2>
<ul class="mod_promotion_list">
<?php
foreach ($data as $key) {
?>

    <li class="" data-ga="" data-store="" data-url="">
        <a class="link_ghost" rel="nofollow" href="<?php echo $key['url']; ?>" target="_blank">
            <div class="pure-g product">
                <span class="pure-u img_container">
                    <img src="<?php echo $key['img']; ?>" alt="" class="">
                </span>
                <span class="pure-u info">
                    <h4 class="normal"><?php echo $key['title']; ?></h4>
                    <div class="container_bottom pure-g">
                        <span class="pure-u-3-4 vertical_middle">
                            <span class="price large ellipsis pure-u">
                                <?php echo $key['price']; ?>
                            </span>
                        </span>
                        <span class="pure-u-1-4">
                            <span class="pure-u buy normal">搶購</span>
                        </span>
                    </div>
                </span>
            </div>
        </a>
    </li>

<?php
}
?>
</ul>

<h2>mod_promotion_list(divider)</h2>
<ul class="mod_promotion_list">
<?php
foreach ($data as $key) {
?>

    <li class="mod_list_divider" data-ga="" data-store="" data-url="">
        <a class="link_ghost" rel="nofollow" href="<?php echo $key['url']; ?>" target="_blank">
            <div class="pure-g product">
                <span class="pure-u img_container">
                    <img src="<?php echo $key['img']; ?>" alt="" class="">
                </span>
                <span class="pure-u info">
                    <h4 class="normal"><?php echo $key['title']; ?></h4>
                    <div class="container_bottom pure-g">
                        <span class="pure-u-3-4 vertical_middle">
                            <span class="price large ellipsis pure-u">
                                <?php echo $key['price']; ?>
                            </span>
                        </span>
                        <span class="pure-u-1-4">
                            <span class="pure-u buy normal">搶購</span>
                        </span>
                    </div>
                </span>
            </div>
        </a>
    </li>

<?php
}
?>
</ul>

<h2>mod_promotion(divider)</h2>
<ul class="mod_grid_layout mod_promotion pure-g">
<?php
$mod_grid_divider = 'mod_grid_divider_';
$mod_grid_count = 0;
foreach ($data as $key) {
$mod_grid_count++;
?>

    <li class="pure-u <?php echo $mod_grid_divider . $mod_grid_count; ?>" data-ga="" data-store="" data-url="">
        <a class="link_ghost" rel="nofollow" href="<?php echo $key['url']; ?>" target="_blank">
            <div class="product">
                <div class="img_container">
                    <img src="<?php echo $key['img']; ?>" alt="" class="">
                </div>
                <div class="info">
                    <div class="container">
                        <p class="promote_text ellipsis small"><?php echo $key['promote_text']; ?></p>
                        <h4 class="normal"><?php echo $key['title']; ?></h4>
                    </div>
                    <div class="container_bottom pure-g">
                        <span class="price large ellipsis pure-u">
                            <?php echo $key['price']; ?>
                        </span>
                        <span class="buy normal pure-u">搶購</span>
                    </div>
                </div>
            </div>
        </a>
    </li>

<?php
}
?>
</ul>

<h2>mod_promotion_large</h2>
<ul class="mod_grid_layout mod_promotion_large pure-g">
<?php
foreach ($data as $key) {
?>

    <li class="pure-u" data-ga="" data-store="" data-url="">
        <a class="link_ghost" rel="nofollow" href="<?php echo $key['url']; ?>" target="_blank">
            <div class="product">
                <div class="img_container">
                    <img src="<?php echo $key['img']; ?>" alt="" class="">
                </div>
                <div class="info">
                    <div class="container">
                        <p class="promote_text ellipsis small"><?php echo $key['promote_text']; ?></p>
                        <h4 class="xlarge"><?php echo $key['title']; ?></h4>
                    </div>
                    <div class="container_bottom">
                        <span>促銷價</span>
                        <span class="price ellipsis xlarge">
                            <?php echo $key['price']; ?>
                        </span>
                        <span class="buy normal">搶購</span>
                    </div>
                </div>
            </div>
        </a>
    </li>

<?php
}
?>
</ul>

<h2>mod_promotion_large(divider left)</h2>
<ul class="mod_grid_layout mod_promotion_large pure-g">
<?php
foreach ($data as $key) {
?>

    <li class="pure-u mod_grid_divider_left" data-ga="" data-store="" data-url="">
        <a class="link_ghost" rel="nofollow" href="<?php echo $key['url']; ?>" target="_blank">
            <div class="product">
                <div class="img_container">
                    <img src="<?php echo $key['img']; ?>" alt="" class="">
                </div>
                <div class="info">
                    <div class="container">
                        <p class="promote_text ellipsis small"><?php echo $key['promote_text']; ?></p>
                        <h4 class="xlarge"><?php echo $key['title']; ?></h4>
                    </div>
                    <div class="container_bottom">
                        <span>促銷價</span>
                        <span class="price ellipsis xlarge">
                            <?php echo $key['price']; ?>
                        </span>
                        <span class="buy normal">搶購</span>
                    </div>
                </div>
            </div>
        </a>
    </li>

<?php
}
?>
</ul>

<h2>mod_promotion_large(divider right)</h2>
<ul class="mod_grid_layout mod_promotion_large pure-g">
<?php
foreach ($data as $key) {
?>

    <li class="pure-u mod_grid_divider_right" data-ga="" data-store="" data-url="">
        <a class="link_ghost" rel="nofollow" href="<?php echo $key['url']; ?>" target="_blank">
            <div class="product">
                <div class="img_container">
                    <img src="<?php echo $key['img']; ?>" alt="" class="">
                </div>
                <div class="info">
                    <div class="container">
                        <p class="promote_text ellipsis small"><?php echo $key['promote_text']; ?></p>
                        <h4 class="xlarge"><?php echo $key['title']; ?></h4>
                    </div>
                    <div class="container_bottom">
                        <span>促銷價</span>
                        <span class="price ellipsis xlarge">
                            <?php echo $key['price']; ?>
                        </span>
                        <span class="buy normal">搶購</span>
                    </div>
                </div>
            </div>
        </a>
    </li>

<?php
}
?>
</ul>


<h2>mod_groupon</h2>
<ul class="mod_grid_layout mod_groupon pure-g">
<?php
foreach ($data as $key) {
?>

    <li class="pure-u" data-ga="" data-store="" data-url="">
        <a class="link_ghost" rel="nofollow" href="<?php echo $key['url']; ?>" target="_blank">
            <div class="product">
                <div class="img_container">
                    <img src="<?php echo $key['img']; ?>" alt="" class="">
                </div>
                <div class="info">
                    <div class="container">
                        <h4 class="normal"><?php echo $key['title']; ?></h4>
                    </div>
                    <div class="container_bottom">
                        <div class="pure-g">
                            <span class="pure-u price_groupon">
                                <span class="price_origin ellipsis">
                                    原價: <?php echo "1234567890";?>
                                </span>
                                <span class="price_discount ellipsis">
                                    優惠價
                                    <span class="price xlarge">
                                        <?php echo $key['price']; ?>
                                    </span>
                                </span>
                            </span>
                            <span class="pure-u">
                                <span class="buy normal">搶購</span>
                            </span>
                        </div>
                        <div class="pure-g">
                            <div class="pure-u-1-2 shop ellipsis">
                                <?php echo $key['shop']; ?>
                            </div>
                            <div class="pure-u-1-2 countdown">124325435998</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="discount">
                <span class="xlarge"><?php echo "85"; ?></span><br><span class="discount_text">折</span>
            </div>
        </a>
    </li>

<?php
}
?>
</ul>
</body>
</html>