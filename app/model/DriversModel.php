<?php

class DriversModel
{

    use Model;

    protected $table = 'log2_fm_drivers';

    protected function view_query(){
        $query = 'SELECT 
        driver.driver_id,
        driver.driver_name,
        driver.email_address,
        driver.username,
        driver.password,
        driver.last_active,
        driver.account_age,
        driver.date_created,
        driver.avatar_thumbnail,
        driver_status.status_name
        FROM log2_fm_drivers driver
        LEFT JOIN log2_fm_driver_status driver_status ON 
        driver.status_id = driver_status.driver_status_id
        ';
        return $query;
    }

    public function fetch_all_drivers()
    {
        return $this->query($this->view_query());
    }
}
