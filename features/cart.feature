Feature: ECommerce Cart
    In order to purchase a product
    As a customer
    I need to be able to add a product in my cart

    Scenario: Add a product to cart should increment the cart item number
        Given I am customer "customer@customer.com"
        When I add a product "Product" to cart
        Then The cart items number should increment
    
    