<?php

class TenderAwardsModel
{

    use Model;

    protected $table = 'log2_vp_awards';

    public function fetch_all_awards()
    {
        $query = 'SELECT awards.*,
        bids.*,
        vendors.*,
        tenders.*,
        categories.*
        FROM log2_vp_awards awards
        LEFT JOIN log2_vp_tender_bids bids ON
        awards.bid_id = bids.bid_id
        LEFT JOIN log2_vp_tenders tenders ON
        bids.tender_id = tenders.tender_id
        LEFT JOIN log2_vp_supply_category categories ON
        tenders.category_id = categories.category_id
        LEFT JOIN log2_vp_vendors vendors ON
        bids.vendor_id = vendors.vendor_id';

        return $this->query($query);
    }
}
