<?php

class DeliveryItemsModel
{

    use Model;

    protected $table = 'log2_fm_delivery_items';

    public function insert_line_items($data)
    {

        foreach($data["line_items"] as $item){
            $item["tracking_id"] = $data["tracking_id"];
            $this->insert($item);
        }
        
       
        
    }
}
