<?php

namespace App\classes;


class Category
{
    public $categories = [];

    public function __construct()
    {
        $this->categories = [
            0 => [
                'id' => 1,
                'name' => 'Electronics'
            ],
            1 => [
                'id' => 2,
                'name' => 'Man Fashion'
            ],
            2 => [
                'id' => 3,
                'name' => 'Woman Fashion'
            ],
            3 => [
                'id' => 4,
                'name' => 'Kids Fashion'
            ],
            4 => [
                'id' => 5,
                'name' => 'Sports Fashion'
            ],
        ];
    }

    public function getAllCategory()
    {
        return $this->categories;
    }
}