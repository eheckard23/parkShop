<?php

namespace App;

class Cart {

    public $items = null;
    public $totalQty = 0;
    public $totalPrice = 0;

    public function __construct($oldCart) {

        if($oldCart) {
            $this->items = $oldCart->items;
            $this->totalQty = $oldCart->totalQty;
            $this->totalPrice = $oldCart->totalPrice;
        }

    }

    // add new item
    public function add($item, $id) {

        $storedItem = [
            'qty' => 0,
            'item' => $item,
            'price' => $item['price']
        ];

        if($this->items) {
            if(array_key_exists($id, $this->items)) {
                $storedItem = $this->items[$id];
            };
        }

        $storedItem['qty']++;
        $storedItem['price'] = $item['price'] * $storedItem['qty'];
        $this->items[$id] = $storedItem;
        $this->totalQty++;
        $this->totalPrice += $item['price'];

    }

    // add one item
    public function addOne($item, $id) {

        if(array_key_exists($id, $this->items)) {

            $this->items[$id]['qty']++;
            $this->items[$id]['price'] += $this->items[$id]['item']['price'];
            $this->totalQty++;
            $this->totalPrice += $this->items[$id]['item']['price'];

        }

    }

    // removeAll
    public function removeAll($item, $id) {

        if(array_key_exists($id, $this->items)) {

            $this->totalQty -= $this->items[$id]['qty'];
            $this->totalPrice -= $this->items[$id]['price'];
            unset($this->items[$id]);

        }

    }

    // remove one
    public function removeOne($item, $id) {

        if(array_key_exists($id, $this->items)) {

            $this->items[$id]['qty']--;
            $this->items[$id]['price'] -= $this->items[$id]['item']['price'];
            $this->totalQty--;
            $this->totalPrice -= $this->items[$id]['item']['price'];

            if($this->items[$id]['qty'] <= 0) {
                unset($this->items[$id]);
            }

        }

    }

}