<?php

require_once __DIR__ . "/common/function.php";
require_once __DIR__ . "/controllers/HomeController.php";

$ctl = $_GET['ctl'] ?? '';


match ($ctl) {
    '', 'home' => (new HomeController)->index(),
    default => view('errors.404'),
};

/*
1. Trinh hải Long
2. Nguyễn Trung Đức
3. Phan Xuân Đức
*/