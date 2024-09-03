<?php


namespace App\classes;


class Product
{
    public $products = [], $result = [];

    public function __construct()
    {
        $this->products = [
            0 => [
                'id'            => 1,
                'category_id'   => 2,
                'name'          => 'Fashionable T Shirt',
                'price'         => 2500,
                'description'   => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'image'         => 'p1.jpg'
            ],
            1 => [
                'id'            => 2,
                'category_id'   => 2,
                'name'          => 'Jeans Pant',
                'price'         => 3800,
                'description'   => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'image'         => 'p2.jpg'
            ],
            2 => [
                'id'            => 3,
                'category_id'   => 1,
                'name'          => 'New Samsung S24 Ultra',
                'price'         => 240800,
                'description'   => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'image'         => 'p3.jpg'
            ],
            3 => [
                'id'            => 4,
                'category_id'   => 1,
                'name'          => 'iPhone 15 pro Max',
                'price'         => 146700,
                'description'   => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'image'         => 'p4.jpg'
            ],
            4 => [
                'id'            => 5,
                'category_id'   => 1,
                'name'          => 'New Google Pixel Phone',
                'price'         => 95000,
                'description'   => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'image'         => 'p5.jpg'
            ],
            5 => [
                'id'            => 6,
                'category_id'   => 3,
                'name'          => 'New Sari',
                'price'         => 8000,
                'description'   => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'image'         => 'p6.jpg'
            ],
            6=> [
                'id'            => 7,
                'category_id'   => 4,
                'name'          => 'Kids Shirt',
                'price'         => 1800,
                'description'   => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'image'         => 'p7.png'
            ],
            7=> [
                'id'            => 8,
                'category_id'   => 5,
                'name'          => ' Real Madrid Jearsy-Player Addition',
                'price'         => 2200,
                'description'   => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'image'         => 'p8.jpg'
            ],
        ];
    }

    public function getAllProduct()
    {
        return $this->products;
    }

    public function getAllCategoryProduct($id)
    {
        foreach ($this->products as $product)
        {
            if ($product['category_id'] == $id)
            {
                array_push($this->result, $product);
            }
        }
        return $this->result;
    }

    public function getProductById($id)
    {
        foreach ($this->products as $product)
        {
            if ($product['id'] == $id)
            {
                return $product;
            }
        }
    }
}