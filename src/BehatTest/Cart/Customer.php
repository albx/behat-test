<?php

namespace BehatTest\Cart;

class Customer
{
    /**
     * customer email
     *
     * @var string
     */
    private $email;

    /**
     * Get the customer's email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    protected function __construct()
    {
    }

    /**
     * Create a customer with the given email
     *
     * @param string $email
     * @return Customer
     */
    public static function createWithEmail($email)
    {
        $customer = new Customer;
        $customer->email = $email;

        return $customer;
    }
}