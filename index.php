<?php
session_start();
require_once __DIR__ . "/env.php";
require_once __DIR__ . "/common/function.php";
require_once __DIR__ . "/models/BaseModel.php";
require_once __DIR__ . "/models/Category.php";
require_once __DIR__ . "/models/Product.php";

require_once __DIR__ . "/controllers/HomeController.php";
require_once __DIR__ . "/controllers/ProductController.php";
require_once __DIR__ . "/controllers/CartController.php";

$ctl = $_GET['ctl'] ?? '';

match ($ctl) {
    '', 'home'  => (new HomeController)->index(),
    'category'  => (new ProductController)->index(),
    'detail'    => (new ProductController)->show(),
    'add-cart'  => (new CartController)->addToCart(),
    'view-cart' => (new CartController)->viewCart(),
    'delete-cart'   => (new CartController)->deleteProductInCart(),
    default => view('errors.404'),
};

/*
1. Trinh hải Long
2. Nguyễn Trung Đức
3. Phan Xuân Đức
*/