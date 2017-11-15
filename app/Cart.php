<?php

namespace App;

class Cart
{
    public $items;
    public $totalQty = 0;
    public $totalPrice = 0;

    public funtion __construct() {
    	if($oldCart) {
    		// cart already exists
    		$this->items = $oldCart->items;
    		$this->totalQty = $oldCart->totalQty;
    		$this->totalPrice = $oldCart->totalPrice;
    	}
    }

    // add new item
    public function add($item, $id) {
    	//
    }
}
