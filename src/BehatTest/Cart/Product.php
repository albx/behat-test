<?php

namespace BehatTest\Cart;

class Product
{
    /**
     * The product name
     *
     * @var string
     */
    protected $name;

    protected function __construct()
    {
    }

    /**
     * Get the product name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Create a new product
     *
     * @param string $name
     * @return Product
     */
    public static function create($name)
    {
        $product = new Product;
        $product->name = $name;

        return $product;
    }
}