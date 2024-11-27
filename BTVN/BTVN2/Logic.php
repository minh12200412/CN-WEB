<?php
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['action'])){
    if($_POST['action'] == 'addSp'){
        $products[] = [
        'id' => count($products) + 1,
        'name' => htmlspecialchars( $_POST['nameSp']),
        'price' => htmlspecialchars($_POST['priceSp'])
        ];
    }
    else if($_POST['action'] == 'edit'){
        foreach($products as &$product){
            if($product['id'] == $_POST['id']){
                $product['name'] = htmlspecialchars($_POST['name']);
                $product['price'] = htmlspecialchars($_POST['price']);
                break;
            }
        }
        unset($product);
    }
    else if($_POST['action'] == "delete"){
        foreach($products as $key => $item){
            if($item['id'] == $_POST['id']){
                unset($products[$key]);
                break;
            }
        }
    }
}