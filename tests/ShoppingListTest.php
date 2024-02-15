<?php

use PHPUnit\Framework\TestCase;

require_once "src/ShoppingList.php";

class ShoppingListTest extends TestCase{
    public $shoppingList;

    function setUp(): void
    {
        $this->shoppingList = new ShoppingList();
    }

    function testAddItem(){#Verifica se o método addItem() adiciona corretamente itens à lista de compras.
        $this->shoppingList->addItem('Maçã');
        $this->shoppingList->addItem('Banana');
        $this->assertEquals(['Maçã', 'Banana'], $this->shoppingList->getItems());
    }

    function testRemoveItem(){#Verifica se o método removeItem() remove corretamente um item da lista de compras.
        $this->shoppingList->addItem('Maçã');
        $this->shoppingList->addItem('Banana');
        $this->shoppingList->addItem('Mamão');
        $this->shoppingList->removeItem(0);
        $this->assertEquals(['Banana', 'Mamão'], $this->shoppingList->getItems());
    }

    function testAddItemDuplicado(){#Verifica se o método addItem() adiciona corretamente itens à lista de compras.
        $this->shoppingList->addItem('Maçã');
        $this->shoppingList->addItem('Maçã');
        $this->shoppingList->addItem('Banana');
        $array = array_unique($this->shoppingList->getItems());
        $this->assertEquals(['Maçã', 'Banana'], $array);
    }

    function testNãoRemoveItemInexistente(){#Verifica se o método removeItem() remove corretamente um item da lista de compras.
        $this->shoppingList->addItem('Maçã');
        $this->shoppingList->addItem('Banana');
        $this->shoppingList->addItem('Mamão');
        $this->shoppingList->removeItem(5);
        $this->assertEquals(['Maçã', 'Banana', 'Mamão'], $this->shoppingList->getItems());
    }

    function testClearItems(){#Verifica se o método clearItems() remove todos os itens da lista de compras.
        $this->shoppingList->addItem('Maçã');
        $this->shoppingList->addItem('Banana');
        $this->shoppingList->clearItems();
        $this->assertEquals([], $this->shoppingList->getItems());
    }
    
}

/*
public function testSoma(){
        $classe = new Classe();
        $resultado = $classe->somar(2, 3);
        $this->assertEquals(5, $resultado);
}
*/

/*
    function testAddItem(){#Verifica se o método addItem() adiciona corretamente itens à lista de compras.
        $this->shoppingList->addItem('Maçã');
        $this->shoppingList->addItem('Maçã');
        $this->shoppingList->addItem('Banana');
        // $this->shoppingList->addItem('Banana');
        // $this->assertEquals(['Maçã', 'Banana'], $this->shoppingList->getItems());
        #$array = ['Maçã', 'Maçã'];
        $array = array_unique($this->shoppingList->getItems());
        $this->assertEquals(['Maçã', 'Banana'], $array);
        #$this->assertContainsOnly('Maçã', $this->shoppingList->getItems(), true);
        #$this->assertEquals($array, $this->shoppingList->getItems());
    }
*/