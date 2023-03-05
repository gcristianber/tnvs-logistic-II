<?php

class FMDrivers
{

    use Model;

    protected $table = "log2_fm_driver_accts";
    protected $allowed_size = 1000000;
    protected $allowed_ext = array("jpg", "jpeg", "png");

    public function renderViewData(){

        $query = "select * from $this->table";

		return $this->query($query);
    }


    public function uploadFile($form, $file)
    {

        $vehicle_id      = uniqid("vh");
        $make_new_path  = "uploads/images/avatars/";

        $file_ext = pathinfo($file["file"]["name"], PATHINFO_EXTENSION);

        $file_path = $make_new_path . $vehicle_id . '.' . $file_ext;
        $file_name = $vehicle_id . '.' . $file_ext;
        move_uploaded_file($file["file"]["tmp_name"], $file_path);

        $data = [
            "driver_id" => $vehicle_id,
            "img_name" => $file_name,
            "display_name" => $form["display_name"],
            "password" => $form["password"],
            "email_address" => $form["email_address"],
            "contact_number" => $form["contact_number"],
            "address" => $form["address"],
            "city" => $form["city"],
            "country" => $form["country"],
        ];

        $this->insert($data);
    }

    public function checkForm($form, $file)
    {

        $this->errors = [];

        $file_ext = pathinfo($file["file"]["name"], PATHINFO_EXTENSION);

        if ($file["file"]["size"] > $this->allowed_size) {
            $this->errors["file"] = "File is too large!";
        }

        if (in_array($file_ext, $this->allowed_ext) == 0) {
            $this->errors["file"] = "Invalid file extension!";
        }

        if ($file["file"]["error"] === 4) {
            $this->errors["file"] = "There's no file attached!";
        }

        if ($form["password"] != $form["confirm_password"]) {
            $this->errors["file"] = "Password does not match!";
        }

        if (empty($this->errors)) {
            $this->uploadFile($form, $file);
            return true;
        }

        return false;
    }
}
