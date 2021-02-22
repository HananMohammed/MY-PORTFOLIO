<?php

namespace App\Models\Front;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    public $items = null;
    public $totalQuantity = 0;
    public $totalPrice = 0;

    public function __construct($oldCart)
    {
        if ($oldCart)
        {

            $this->items = $oldCart->items;
            $this->totalQuantity = $oldCart->totalQuantity;
            $this->totalPrice = $oldCart->totalPrice;
        }
    }

    public function add($item, $id)
    {

        $storedItem = ["quantity" => 0, "price" => $item->price, "item" => $item];
        if ($this->items)
        {
            if (array_key_exists($id, $this->items))
            {
                $storedItem = $this->items[$id];
            }
        }

        $storedItem["quantity"]++;

        $price = !empty( $storedItem["offer"] ) ? $storedItem["offer"] : $storedItem["price"] ;

        $storedItem["price"] = $price * $storedItem["quantity"];

        $this->items[$id] = $storedItem;

        $this->totalQuantity++;

        $this->totalPrice += !empty( $item->offer) ? $item->offer : $item->price ;

    }
}
