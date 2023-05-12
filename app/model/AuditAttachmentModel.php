<?php

class AuditAttachmentModel
{

    use Model;

    protected $table = 'log2_am_attachments';

    public function insert_attachment($report_id, $data)
    {

        foreach ($_FILES['attachments']['name'] as $key => $val) {

            $prefix = "FILE-";
            $date = date("ymd");
            $random_str = strtoupper(substr(str_shuffle(md5(microtime())), 0, 5));
            $file_id = $prefix . $date . $random_str;

            $name = $_FILES['attachments']['name'][$key];
            $full_path = $_FILES['attachments']['tmp_name'][$key];
            $type = $_FILES['attachments']['type'][$key];
            $size = $_FILES['attachments']['size'][$key];

            // 4. Store the files in a folder
            $target_dir = "uploads/audit_management/" . $report_id . "/";
            if (!file_exists($target_dir)) {
                mkdir($target_dir);
            }
            $target_file = $target_dir . basename($_FILES["attachments"]["name"][$key]);
            move_uploaded_file($_FILES["attachments"]["tmp_name"][$key], $target_file);

            $data = [
                "file_id" => $file_id,
                "file_name" => $name,
                "size" => $size,
                "file_path" => $target_dir,
                "date_added" => date("Y-m-d h:i:s"),
                "report_id" => $report_id
            ];

            $this->insert($data);
        }

        // $this->insert($data);

    }
}
