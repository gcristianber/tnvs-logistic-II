<?php

class TenderBidsModel
{
    use Model;

    protected $table = 'log2_vp_tender_bids';

    public function fetch_bids($data, $data_not = [])
    {
        $keys = array_keys($data);
        $keys_not = array_keys($data_not);
        $query = 'SELECT 
        tender_bids.bid_id,
        tender_bids.tender_id,
        tender_bids.vendor_id,

        vendors.company_name,
        vendors.location,

        tender_bids.bid,
        tender_bids.quality,
        tender_bids.discount,
        tender_bids.delivery_time,
        tender_bids.date_submitted,
        tender_bids.is_awarded
        
        FROM log2_vp_tender_bids tender_bids
        LEFT JOIN log2_vp_vendors vendors ON
        tender_bids.vendor_id = vendors.vendor_id
        WHERE ';

        foreach ($keys as $key) {
            $query .= $key . " = :" . $key . " && ";
        }

        foreach ($keys_not as $key) {
            $query .= $key . " != :" . $key . " && ";
        }

        $query = trim($query, " && ");

        $query .= " limit $this->limit offset $this->offset";
        $data = array_merge($data, $data_not);

        return $this->query($query, $data);
    }

}
