<?php

class Templates {

    use Controller;

    public function index(){


    }

    public function default_template($data){

        $dompdf = new Dompdf\Dompdf();

        ob_start();
        $html = $this->view("templates/default", $data);
        $html=ob_get_clean();
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();

        $dompdf->stream("uploads/vendor_contract.pdf", Array("Attachment" => 0));
    }

    public function vendor_contract(){
        $data = [
            "title"=> "Test Title",
            "pr_id"=> "001"
        ];

        $dompdf = new Dompdf\Dompdf();

        ob_start();
        $html = $this->view("templates/vendor_contract", $data);
        $html=ob_get_clean();
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();

        $dompdf->stream("uploads/vendor_contract.pdf", Array("Attachment" => 0));
    }

    public function purchase_order(){

        $dompdf = new Dompdf\Dompdf();

        ob_start();
        $html = $this->view("templates/purchase_order");
        $html=ob_get_clean();
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();

        $dompdf->stream("uploads/purchase_order.pdf", Array("Attachment" => 0));
    }

    public function employment_certificate(){

        $dompdf = new Dompdf\Dompdf();

        ob_start();
        $html = $this->view("templates/employment_certificate");
        $html=ob_get_clean();
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();

        $dompdf->stream("uploads/employment_certificate.pdf", Array("Attachment" => 0));
    }
}