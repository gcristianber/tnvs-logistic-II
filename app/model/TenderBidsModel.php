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

        vendors.display_name,
        vendors.email_address,
        vendors.location,

        tender_bids.bid,
        tender_bids.message,
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

        return $this->query($query, $data);
    }

    public function submit_bid($data){

        $prefix = "BID-";
        $date = date("ymd");
        $random_str = strtoupper(substr(str_shuffle(md5(microtime())), 0, 5));

        $data["bid_id"] = $prefix . $date . $random_str;
        $data["vendor_id"] = $_SESSION["user"]->vendor_id;

        print_r($data);

        $this->insert($data);
    }

}
