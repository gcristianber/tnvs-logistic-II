<?php

class AMAuditSched
{

    use Model;

    protected $table = "log2_am_audit_sched";

    public function addSchedule($data)
    {

        $data["audit_schedule_id"] = uniqid("au");

        // ? Insert the data
        $this->insert($data);

        // print_r($data);
       
    }
}
