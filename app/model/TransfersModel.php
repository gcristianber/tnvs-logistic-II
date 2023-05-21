<?php

class TransfersModel{

    use Model;

    protected $table = 'log1_whs_transfers';

    public function fetch_all_transfers(){
        $query = 'SELECT log1_whs_transfers.*,
        log1_whs_locations.*,
        log1_whs_transfer_types.*,
        admin_um_accounts.display_name as author_name,
        admin_um_accounts.username as author_username
        FROM log1_whs_transfers
        LEFT JOIN log1_whs_locations ON
        log1_whs_transfers.location_id = log1_whs_locations.location_id
        LEFT JOIN log1_whs_transfer_types ON
        log1_whs_transfers.transfer_type_id = log1_whs_transfer_types.type_id
        LEFT JOIN admin_um_accounts ON
        log1_whs_transfers.author_id = admin_um_accounts.user_id';

        return $this->query($query);
    }
    


}