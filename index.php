<?php
require_once __DIR__ . "/env.php";
require_once __DIR__ . "/common/function.php";
require_once __DIR__ . "/models/BaseModel.php";
require_once __DIR__ . "/models/Category.php";
require_once __DIR__ . "/models/Product.php";

require_once __DIR__ . "/controllers/HomeController.php";

$ctl = $_GET['ctl'] ?? '';

//Demo lớp Category
$cate = new Category;

//dữ liệu
$data = [
    'cate_name' => 'Thời trang mèo',
    'type' => 0, //type=1 là thú cưng, type=0 là sản phẩm
];
//Thêm dl
// $cate->create($data);
//Cập nhật
// $cate->update(5, $data);
//Xóa danh muc 5
// $cate->delete(5);
//Hiển thị dữ liêu
// echo "<pre>";
// var_dump($cate->all());

//Demo Product
$product = new Product;
$data = [
    'name' => 'Bát ăn cho chó mèo',
    'image' => '',
    'price' => 100000,
    'quantity' => 120,
    'description' => 'Bát ăn là nơi chứa thức ăn và nước cho chó và mèo.',
    'status' => 1, //status=1 là đang kinh doanh, =0 là ngừng kinh doanh
    'category_id' => 5
];
//Thêm sản phẩm
// $product->create($data);
//Cập nhật
$product->update(2, $data);
//hiển thị
echo "<pre>";
var_dump($product->find(2));

match ($ctl) {
    '', 'home' => (new HomeController)->index(),
    default => view('errors.404'),
};

/*
1. Trinh hải Long
2. Nguyễn Trung Đức
3. Phan Xuân Đức
*/