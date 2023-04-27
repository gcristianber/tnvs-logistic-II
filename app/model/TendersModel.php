<?php 

class TendersModel{


    use Model;

    protected $table = 'log2_vp_tenders';

    public function fetch_all_tenders(){
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
        tenders.status_id = tender_status.status_id
        ';

        return $this->query($query);
    }

}