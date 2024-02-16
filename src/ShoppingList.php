<?php

class ShoppingList {
    public $items = array();
    function addItem($item){
        if (!in_array($item, $this->items)) {
            array_push($this->items, $item);
        }
    }

    function getItems(){
        return $this->items;
    }
    
    function removeItem($index){
        if(isset($this->items[$index])){
            unset($this->items[$index]);
            $this->items = array_values($this->items);
        }
    }
    
    function clearItems(){
        $this->items = array();
    }
}
