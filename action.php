<?php
require_once 'vendor/autoload.php';
use App\classes\Category;
use App\classes\Product;

$category   = new Category();
$categories = $category->getAllCategory();


if (isset($_GET['page']))
{
    if ($_GET['page'] == 'home')
    {
        $product  = new Product();
        $products = $product->getAllProduct();
        include 'pages/home.php';
    }
    elseif ($_GET['page'] == 'about')
    {
        include 'pages/about.php';
    }
    elseif ($_GET['page'] == 'contact')
    {
        include 'pages/contact.php';
    }
    elseif ($_GET['page'] == 'category')
    {
        $id= $_GET['id'];
        $product = new Product();
        $products = $product->getAllCategoryProduct($id);
        include 'pages/category.php';
    }
    elseif ($_GET['page'] == 'detail')
    {
        $id = $_GET['id'];
        $product = new Product();
        $singleProduct = $product->getProductById($id);
        include 'pages/detail.php';
    }
}
