<?php 

class VRReservations{

    use Model;

    protected $table = "log2_vr_reservations";
    protected $view_table = "log2_vr_reservations_view";

    public function renderView(){
        
        $query = "select * from $this->view_table";

		return $this->query($query);
    }

}