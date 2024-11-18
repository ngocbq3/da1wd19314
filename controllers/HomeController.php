<?php

class HomeController
{
    public function index()
    {
        //lấy các sản phẩm là thú cưng
        $pets = (new Product)->listProductInPet();
        //Lấy các sản phẩm không phải thú cưng
        $products = (new Product)->listProductOtherPet();

        //lấy danh mục
        $categories = (new Category)->all();

        return view("clients.home", compact('pets', 'products', 'categories'));
    }
}
