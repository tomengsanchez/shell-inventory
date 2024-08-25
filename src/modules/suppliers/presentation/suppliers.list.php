<?php
namespace Module\Suppliers\Presentation;

class SupplierList{
    var $x = '';
    public function __construct(Type $var = null) {
        $x= "Suppliers";
    }

    public function draw_table(){
        echo $this->x;
    }
}