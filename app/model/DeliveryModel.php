<?php

class DeliveryModel{

    use Model;

    protected $table = 'log2_fm_delivery';

    public function view(){
        $query = 'SELECT 
        delivery.tracking_id,
        driver.driver_name,
        driver.email_address,
        delivery_type.delivery_type_name,
        category.category_name,
        requestor.display_name requestor_name,
        requestor_dept.department_name requestor_dept_name,
        delivery.date_requested,
        delivery.est_delivery_date,
        delivery_status.delivery_status_name

        FROM log2_fm_delivery delivery
        LEFT JOIN log2_fm_drivers driver ON
        delivery.driver_id = driver.driver_id
        LEFT JOIN log2_fm_delivery_type delivery_type ON
        delivery_type.delivery_type_id = delivery.delivery_type_id
        LEFT JOIN log1_whs_category category ON
        category.category_id = delivery.category_id
        LEFT JOIN admin_um_accounts requestor ON
        delivery.requestor_id = requestor.user_id
        LEFT JOIN admin_um_departments requestor_dept ON
        requestor.department_id = requestor_dept.department_id
        LEFT JOIN log2_fm_delivery_status delivery_status ON
        delivery.status_id = delivery_status.status_id
        ';

        return $this->query($query);
    }

    public function fetch_all_delivery(){
        return $this->view();
    }


}