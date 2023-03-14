<?php

session_start();

class Incoming_documents
{

    use Controller;

    public function index()
    {
        $data = [];

        $RequestModel = new DT_RequestModel;
        $FileManagerModel = new DT_FileManagerModel;
        $data["requests"] = $RequestModel->renderAll();
        $data["files"] = $FileManagerModel->renderAll();

        $this->view('partials/navbar');
        $this->view("document_tracking/incoming_documents", $data);
        $this->view('partials/sidebar');
    }

    public function review_request()
    {

        $RequestModel = new DT_RequestModel;
        $TrackingModel = new DT_TrackingModel;

        $tracking_id = $_POST["tracking_id"];
        // ? Updates the target id's current status in Request Table
        $RequestModel->update($tracking_id, ["current_status_id" => 2], "tracking_id");

        $TrackingModel->insert(
            [
                "tracking_id" => $_POST["tracking_id"],
                "remarks" => $_POST["remarks"],
                "status_id" => 2
            ]
        );
    }

    public function working_request()
    {

        $RequestModel = new DT_RequestModel;
        $TrackingModel = new DT_TrackingModel;

        $tracking_id = $_POST["tracking_id"];
        // ? Updates the target id's current status in Request Table
        $RequestModel->update($tracking_id, ["current_status_id" => 3], "tracking_id");

        $TrackingModel->insert(
            [
                "tracking_id" => $_POST["tracking_id"],
                "remarks" => $_POST["remarks"],
                "status_id" => 3
            ]
        );
    }

    public function release_request()
    {

        $RequestModel = new DT_RequestModel;
        $TrackingModel = new DT_TrackingModel;

        $tracking_id = $_POST["tracking_id"];
        // ? Updates the target id's current status in Request Table
        $RequestModel->update($tracking_id, ["current_status_id" => 4], "tracking_id");

        $TrackingModel->insert(
            [
                "tracking_id" => $_POST["tracking_id"],
                "remarks" => $_POST["remarks"],
                "status_id" => 4,
            ]
        );

        $content = $_POST["content"];
        $dompdf = new Dompdf\Dompdf();

        $data = [
            "content" => $content
        ];

        ob_start();
        $html = $this->view("templates/default", $data);
        $html = ob_get_clean();
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();

        // $dompdf->stream("uploads/hahaha.pdf", array("Attachment" => 0));
        $pdfContent = $dompdf->output();
        $uploadDir = 'uploads/documents/' . $tracking_id . '/';
        mkdir($uploadDir);
        $fileName = 'example.pdf';

        

        file_put_contents($uploadDir . $fileName, $pdfContent);
        chmod($uploadDir, 0755);
        $fileSize = filesize($uploadDir . $fileName);

        /* 
        TODO: Insert the following to the database
         * -> Document ID
         * -> Document Name
         * -> Document Size
         * -> Category Id
         * -> Date Created
         * -> Department Id
         * -> Author Id
        */

        $addFile = [
            "document_id" => $tracking_id,
            "document_name" => $fileName,
            "document_size" => $fileSize,
            "category_id" => $_POST["category_id"],
            "department_id" => 1, //!TODO: Change this depends on SESSION
            "author_id" => "sa12345",
        ];

        $FileManagerModel = new DT_FileManagerModel;
        $FileManagerModel->insert($addFile);
        
    }
}
