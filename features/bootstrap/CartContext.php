<?php

use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\Context;
use Behat\Behat\Context\SnippetAcceptingContext;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;

use BehatTest\Cart\Cart;
use BehatTest\Cart\Product;
use BehatTest\Cart\Customer;

/**
 * Defines application features from the specific context.
 */
class CartContext implements Context, SnippetAcceptingContext
{
    private $cart;

    private $customer;

    private $cartItemsNumber;

    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {
    }

    /**
     * @Given I am customer :email
     */
    public function iAmCustomer($email)
    {
        $this->customer = Customer::createWithEmail($email);
    }

    /**
     * @When I add a product :product to cart
     */
    public function iAddAProductToCart($product)
    {
        $this->cart = Cart::forCustomer($this->customer);
        $product = Product::create($product);

        $this->cartItemsNumber = $this->cart->countItems();
        $this->cart->addProduct($product);
    }

    /**
     * @Then The cart items number should increment
     */
    public function theCartItemsNumberShouldIncrement()
    {
        assertTrue(($this->cartItemsNumber + 1) === $this->cart->countItems());
    }
}
