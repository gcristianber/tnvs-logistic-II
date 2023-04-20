<?php

class Accounts{

    use Model;

    protected $table = 'admin_um_accounts';


    public function fetch_accounts(){

        $query = 'SELECT
        admin_um_accounts.user_id,
        admin_um_accounts.display_name,
        admin_um_accounts.username,
        admin_um_accounts.password,
        
        admin_um_roles.role_name as user_role,
        admin_um_departments.department_name as user_department,
        admin_um_status.status_name as user_status
        
        FROM admin_um_accounts
        LEFT JOIN admin_um_roles ON
        admin_um_accounts.role_id = admin_um_roles.role_id
        LEFT JOIN admin_um_departments ON
        admin_um_accounts.department_id = admin_um_departments.department_id
        LEFT JOIN admin_um_status ON
        admin_um_accounts.status_id = admin_um_status.status_id';

        return $this->query($query);
    }


}