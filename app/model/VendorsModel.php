<?php

class VendorsModel{

    use Model;

    protected $table = 'log2_vp_vendors';

    public function fetch_all_vendors(){
        $query = 'SELECT 
        vendor.vendor_id,
        vendor.email_address,
        vendor.password,
        vendor.fullname,
        vendor.company_name,
        vendor.location,

        supply_category.supply_category_name,
        company_type.company_type_name,
        user_status.user_status_name

        
        FROM log2_vp_vendors vendor
        LEFT JOIN log2_vp_supply_category supply_category ON
        vendor.supply_category_id = supply_category.category_id

        LEFT JOIN log2_vp_company_types company_type ON
        vendor.company_type_id = company_type.company_type_name

        LEFT JOIN log2_vp_user_status user_status ON
        vendor.status_id = user_status.status_id
        ';

        return $this->query($query);
    }

}