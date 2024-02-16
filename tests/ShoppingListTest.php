<?php

use PHPUnit\Framework\TestCase;

require_once "src/ShoppingList.php";

class ShoppingListTest extends TestCase{
    public $shoppingList;

    function setUp(): void
    {
        $this->shoppingList = new ShoppingList();
    }

    function testAddItem(){
        $this->shoppingList->addItem('Maçã');
        $this->shoppingList->addItem('Banana');
        $this->assertEquals(['Maçã', 'Banana'], $this->shoppingList->getItems());
    }

    function testRemoveItem(){
        $this->shoppingList->addItem('Maçã');
        $this->shoppingList->addItem('Banana');
        $this->shoppingList->addItem('Mamão');
        $this->shoppingList->removeItem(0);
        $this->assertEquals(['Banana', 'Mamão'], $this->shoppingList->getItems());
    }
    # Exercício A
    function testAddItemDuplicado(){
        $this->shoppingList->addItem('Maçã');
        $this->shoppingList->addItem('Maçã');
        $this->shoppingList->addItem('Banana');
        $array = array_unique($this->shoppingList->getItems());
        $this->assertEquals(['Maçã', 'Banana'], $array);
    }
    # Exercício B
    function testNãoRemoveItemInexistente(){
        $this->shoppingList->addItem('Maçã');
        $this->shoppingList->addItem('Banana');
        $this->shoppingList->addItem('Mamão');
        $this->shoppingList->removeItem(5);
        $this->assertEquals(['Maçã', 'Banana', 'Mamão'], $this->shoppingList->getItems());
    }
    # Exercício C
    function testClearItems(){
        $this->shoppingList->addItem('Maçã');
        $this->shoppingList->addItem('Banana');
        $this->shoppingList->clearItems();
        $this->assertEquals([], $this->shoppingList->getItems());
    }
    
}
?>

a) Qual é o propósito da classe ShoppingList?
Simular uma lista de compras, podendo adicionar itens, obtê-los, removê-los da lista e limpar todos eles da lista.

b) Quais são os métodos disponíveis na classe ShoppingList e o que cada um deles faz?
- addItem($item): Adiciona um item à lista de compras.
- getItems(): Retorna todos os itens para à lista.
- removeItem($index): Remove um item da lista.
- clearItems(): Remove todos os itens da lista.

c) Explique o que é testado no método testAddItem().
A funcionalidade do método addItem() na classe ShoppingList, adicionando 2 itens à lista e verificando se a inserção ocorreu corretamente.

d) Qual é a finalidade do método testRemoveItem() e o que ele verifica?
Verificar a funcionalidade do método removeItem() na classe ShoppingList, adicionando 3 itens à lista e removendo um deles, então verificando se a remoção ocorreu corretamente.