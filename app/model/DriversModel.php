<?php

class DriversModel
{

    use Model;

    protected $table = 'log2_fm_drivers';

    public function fetch_all_drivers()
    {
        $query = 'SELECT 
        driver.*,
        role.role_name as user_role,
        driver_status.status_name
        FROM log2_fm_drivers driver
        LEFT JOIN log2_fm_driver_status driver_status ON 
        driver.status_id = driver_status.driver_status_id
        LEFT JOIN admin_um_roles role ON 
        driver.role_id = role.role_id
        ';
        return $this->query($query);
    }

    private function findDriverWithLeastActivity($drivers)
    {
        $leastDriver = null;
        $leastActivity = PHP_INT_MAX;

        foreach ($drivers as $driver) {
            $activityTimestamp = strtotime($driver->last_active);

            if ($activityTimestamp < $leastActivity) {
                $leastActivity = $activityTimestamp;
                $leastDriver = $driver;
            }
        }

        return $leastDriver;
    }

    public function assignDriver()
    {
        $query = 'SELECT 
        driver.*,
        role.role_name as user_role,
        driver_status.status_name
        FROM log2_fm_drivers driver
        LEFT JOIN log2_fm_driver_status driver_status ON 
        driver.status_id = driver_status.driver_status_id
        LEFT JOIN admin_um_roles role ON 
        driver.role_id = role.role_id
        ';
        $drivers = $this->query($query);

        // Find the driver with the least activity
        $leastDriver = $this->findDriverWithLeastActivity($drivers);

        return $leastDriver;
    }


    public function fetch_driver($data, $data_not = [])
    {
        $keys = array_keys($data);
        $keys_not = array_keys($data_not);
        $query = 'SELECT 
        driver.*,
        role.role_name as user_role,
        driver_status.status_name
        FROM log2_fm_drivers driver
        LEFT JOIN log2_fm_driver_status driver_status ON 
        driver.status_id = driver_status.driver_status_id
        LEFT JOIN admin_um_roles role ON 
        driver.role_id = role.role_id
        WHERE ';

        foreach ($keys as $key) {
            $query .= $key . " = :" . $key . " && ";
        }

        foreach ($keys_not as $key) {
            $query .= $key . " != :" . $key . " && ";
        }

        $query = trim($query, " && ");

        $data = array_merge($data, $data_not);

        $result = $this->query($query, $data);
        if ($result)
            return $result[0];

        return false;
    }



    public function add_driver($data, $files)
    {
        $data["driver_id"] = strtoupper('FMD-' . substr(uniqid(), 0, 8));
        $target_dir = "uploads/fleet_management/users/" . $data["driver_id"] . "/";
        if (!file_exists($target_dir)) {
            mkdir($target_dir, 0777, true);
        }
        $subfolders = array('documents', 'images', 'videos');
        foreach ($subfolders as $subfolder) {
            $subfolder_path = $target_dir . $subfolder . '/';
            if (!file_exists($subfolder_path)) {
                mkdir($subfolder_path, 0777, true);
            }
        }

        $target_file = $target_dir . time() . '_' . basename($_FILES["avatar_thumbnail"]["name"]);
        move_uploaded_file($data["avatar_thumbnail"]["tmp_name"], $target_file);

        $data["avatar_thumbnail"] = $target_file;
        unset($data["confirm_password"]);

        $this->insert($data);
        // print_r($data);

        // print_r($files["attachments"]["name"]);
        // print_r($files["attachments"]["tmp_name"]);

    }


    public function export_csv()
    {
        $spreadsheet = new PhpOffice\PhpSpreadsheet\Spreadsheet();
        $data = $this->fetch_all_drivers();
        $sheet = $spreadsheet->getActiveSheet();

        $data = array_map(function ($row) {
            return (array) $row;
        }, $data);

        $headers = array_keys(array_slice($data[0], 1));

        $col = 1;
        foreach ($headers as $header) {
            $sheet->setCellValueByColumnAndRow($col, 1, $header);
            $col++;
        }

        $row = 2;
        foreach ($data as $data_row) {
            $col = 1; // start from third column
            foreach (array_slice($data_row, 1) as $value) { // exclude primary key column
                $sheet->setCellValueByColumnAndRow($col, $row, $value);
                $col++;
            }
            $row++;
        }

        $writer = \PhpOffice\PhpSpreadsheet\IOFactory::createWriter($spreadsheet, 'Xlsx');
        $writer->save('test.xlsx');
    }
}
