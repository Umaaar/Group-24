namespace App\Helpers;

<?php


class Cart
{
    private $cart = [
        'records' => [],
        'totalQty' => 0,
        'totalPrice' => 0
    ];

    // Cart constructor
    public function __construct()
    {
        if (session()->get('cart')){
            $this->cart = session()->get('cart');
        }
    }

    // Add a record to the cart
    public function add($item)
    {
        // add logic comes here
        session()->put('cart', $this->cart);  // save the session
    }

    // Delete a record from the cart
    public function delete($item)
    {
        // delete logic comes here
        session()->put('cart', $this->cart);  // save the session
    }

    // Empty the cart 
    public function empty()
    {
        session()->forget('cart');
    }

    // Get the complete cart
    public function getCart()
    {
        return $this->cart;
    }

    // Get all the records from the cart
    public function getRecords()
    {
        return $this->cart['records'];
    }

    // Get one record from the cart
    public function getOneRecord($key)
    {
        if (array_key_exists($key, $this->cart['records'])) {
            return $this->cart['records'][$key];
        }
    }

    // Get all the record keys
    public function getKeys()
    {
        return array_keys($this->cart['records']);
    }
    
    // Get the number of items 
    public function getTotalQty()
    {
        return $this->cart['totalQty'];
    }

    // Get the total price
    public function getTotalPrice()
    {
        return $this->cart['totalPrice'];
    }

    // Calculate the number of items and total price
    private function updateTotal()
    {
        // calculate logic comes here
    }
}