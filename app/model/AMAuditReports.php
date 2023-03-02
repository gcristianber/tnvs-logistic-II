<?php

class AMAuditReports
{

    use Model;

    protected $table = "log2_am_audit_report";

    public function insertReport($tableData)
    {
        $query = "INSERT INTO log2_am_audit_report (item_id, item_name, item_desc, manufacturer, system_count, actual_count, variance, accuracy) 
        VALUES (:item_id, :item_name, :item_desc, :manufacturer, :system_count, :actual_count, :variance, :accuracy)";
        // Iterate through the array and execute the insert query for each item
        foreach ($tableData as $item) {
            $this->query($query, $item);
        }
       
    }
}
