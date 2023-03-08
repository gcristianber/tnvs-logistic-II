<?php

class FMVehicles
{

    use Model;

    protected $table = "log2_fm_vehicles";
    protected $view_table = "log2_fm_vehicles_view";
    protected $allowed_size = 1000000;
    protected $allowed_ext = array("jpg", "jpeg", "png");

    public function renderViewData(){

        $query = "select * from $this->view_table";

		return $this->query($query);
    }

    public function insertData($form)
    {
        $data = [
            "vehicle_id" => uniqid("vh"),
            "make" => $form["make"],
            "plate" => $form["plate"],
            "vehicle_model_type_id" => $form["vehicle_model_type_id"],
            "gearbox_type_id" => $form["gearbox_type_id"],
            "color" => $form["color"],
            "no_seaters" => $form["no_seaters"],
            "odometer" => $form["odometer"],
            "dimensions" => $form["dimensions"],
        ];

        $this->insert($data);
    }

    public function uploadFile($form, $file)
    {

        $vehicle_id      = uniqid("vh");
        $make_new_path  = "uploads/images/vehicles/";

        $file_ext = pathinfo($file["file"]["name"], PATHINFO_EXTENSION);

        $file_path = $make_new_path . $vehicle_id . '.' . $file_ext;
        $file_name = $vehicle_id . '.' . $file_ext;
        move_uploaded_file($file["file"]["tmp_name"], $file_path);

        $data = [
            "vehicle_id" => $vehicle_id,
            "img_name" => $file_name,
            "make" => $form["make"],
            "plate" => $form["plate"],
            "model_type_id" => $form["vehicle_model_type_id"],
            "gearbox_type_id" => $form["gearbox_type_id"],
            "color" => $form["color"],
            "no_seaters" => $form["no_seaters"],
            "odometer" => $form["odometer"],
            "dimensions" => $form["dimensions"],
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

        if (empty($this->errors)) {
            $this->uploadFile($form, $file);
            return true;
        }

        return false;
    }
}
