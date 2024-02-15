<?php

class ShoppingList {
    public $items = array();
    function addItem($item){ #Adiciona um item à lista de compras.
        if (!in_array($item, $this->items)) {
            array_push($this->items, $item);
        }
    }

    function getItems(){#Retorna todos os itens da lista de compras.
        return $this->items;
    }
    
    function removeItem($index){#Remove um item da lista de compras com base no índice fornecido.
        if(isset($this->items[$index])){
            unset($this->items[$index]);
            $this->items = array_values($this->items);
        }
    }
    
    function clearItems(){#Limpa todos os itens da lista de compras.
        $this->items = array();
    }
}
