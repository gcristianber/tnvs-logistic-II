<?php

class TendersModel
{


    use Model;

    protected $table = 'log2_vp_tenders';

    public function fetch_all_tenders()
    {
        $query = 'SELECT tenders.*,
        supply_category.supply_category_name,
        tender_status.tender_status_name

        FROM log2_vp_tenders tenders
        LEFT JOIN log2_vp_supply_category supply_category ON
        tenders.category_id = supply_category.category_id
        LEFT JOIN log2_vp_tender_status tender_status ON
        tenders.status_id = tender_status.status_id
        ';

        return $this->query($query);
    }


    public function fetch_tender($data, $data_not = [])
    {
        $keys = array_keys($data);
        $keys_not = array_keys($data_not);
        $query = 'SELECT 
        tenders.tender_id,
        tenders.subject,
        tenders.description,
        supply_category.supply_category_name,
        tenders.date_created,
        tenders.closing_date,
        tenders.contract_budget,
        tender_status.tender_status_name

        FROM log2_vp_tenders tenders
        LEFT JOIN log2_vp_supply_category supply_category ON
        tenders.category_id = supply_category.category_id
        LEFT JOIN log2_vp_tender_status tender_status ON
        tenders.status_id = tender_status.status_id WHERE 
        ';

        foreach ($keys as $key) {
            $query .= $key . " = :" . $key . " && ";
        }

        foreach ($keys_not as $key) {
            $query .= $key . " != :" . $key . " && ";
        }

        $query = trim($query, " && ");

        $query .= " limit $this->limit offset $this->offset";
        $data = array_merge($data, $data_not);

        $result = $this->query($query, $data);

        if ($result)
            return $result[0];

        return false;
    }

    public function update_status($id, $status)
    {

        switch ($status) {
            case 'pending':
                $this->update($id, ["status_id" => 1], 'tender_id');
                break;
            case 'publish':
                $this->update($id, ["status_id" => 2], 'tender_id');
                break;
            case 'awarded':
                $this->update($id, ["status_id" => 3], 'tender_id');
                break;
        }
    }


}
