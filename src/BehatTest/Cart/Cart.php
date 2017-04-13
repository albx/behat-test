<?php

namespace BehatTest\Cart;

class Cart
{
    /**
     * Cart items
     *
     * @var array
     */
    protected $items = [];

    /**
     * The cart customer
     *
     * @var Customer
     */
    protected $customer;

    /**
     * The cart instance
     *
     * @var Cart
     */
    protected static $instance = null;

    protected function __construct()
    {
    }

    /**
     * Set the customer for the current cart
     *
     * @param Customer $customer
     * @return void
     */
    public function setCustomer(Customer $customer)
    {
        $this->customer = $customer;
    }

    /**
     * Get the customer for the current cart
     *
     * @return Customer
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    public function addProduct(Product $product)
    {
        $this->items[] = $product;
    }

    public function countItems()
    {
        return count($this->items);
    }

    /**
     * Create or get the cart instance for the customer
     *
     * @param Customer $customer
     * @return Cart
     */
    public static function forCustomer(Customer $customer)
    {
        if (self::$instance == null || $customer->getEmail() != self::$instance->getCustomer()->getEmail()) {
            self::$instance = new Cart;
            self::$instance->setCustomer($customer);
        }

        return self::$instance;
    } 
}