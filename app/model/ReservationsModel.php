<?php

class ReservationsModel
{

    use Model;

    protected $table = 'log2_vr_reservations';

    public function fetch_all_reservations()
    {
        $query = 'SELECT
        log2_vr_reservations.reservation_id,
        log2_vr_reservations.vehicle_id,
        log2_vr_reservations.full_name,
        log2_vr_reservations.email_address,
        log2_vr_reservations.reason,
        log2_vr_reservations.pickup_date,
        log2_vr_reservations.return_date,
        log2_vr_reservations.date_requested,
        log2_vr_reservations.file_path,
        
        log2_fm_vehicles.make,
        log2_fm_vehicles.plate,
        log2_vr_reserve_status.status_name reservation_status,
        log2_fm_vehicle_types.type_name as vehicle_type,
        
        admin_um_accounts.display_name as requestor_name,
        admin_um_roles.role_name as requestor_role
        
        FROM log2_vr_reservations
        LEFT JOIN log2_fm_vehicles ON
        log2_vr_reservations.vehicle_id = log2_fm_vehicles.vehicle_id

        LEFT JOIN log2_vr_reserve_status ON
        log2_vr_reservations.status_id = log2_vr_reserve_status.reserve_status_id
        
        LEFT JOIN log2_fm_vehicle_types ON
        log2_fm_vehicles.vehicle_type_id = log2_fm_vehicle_types.vehicle_type_id
        
        LEFT JOIN admin_um_accounts ON
        log2_vr_reservations.requestor_id = admin_um_accounts.user_id
        
        LEFT JOIN admin_um_roles ON
        admin_um_accounts.role_id = admin_um_roles.role_id
        ';
        return $this->query($query);
    }

    public function fetch_user_reservations($data, $data_not = [])
    {
        $keys = array_keys($data);
        $keys_not = array_keys($data_not);
        $query = 'SELECT
        log2_vr_reservations.reservation_id,
        log2_vr_reservations.vehicle_id,
        log2_vr_reservations.full_name,
        log2_vr_reservations.email_address,
        log2_vr_reservations.reason,
        log2_vr_reservations.pickup_date,
        log2_vr_reservations.return_date,
        log2_vr_reservations.date_requested,
        log2_vr_reservations.file_path,
        
        log2_fm_vehicles.make,
        log2_fm_vehicles.plate,
        log2_vr_reserve_status.status_name reservation_status,
        log2_fm_vehicle_types.type_name as vehicle_type,
        
        admin_um_accounts.display_name as requestor_name,
        admin_um_roles.role_name as requestor_role
        
        FROM log2_vr_reservations
        LEFT JOIN log2_fm_vehicles ON
        log2_vr_reservations.vehicle_id = log2_fm_vehicles.vehicle_id

        LEFT JOIN log2_vr_reserve_status ON
        log2_vr_reservations.status_id = log2_vr_reserve_status.reserve_status_id
        
        LEFT JOIN log2_fm_vehicle_types ON
        log2_fm_vehicles.vehicle_type_id = log2_fm_vehicle_types.vehicle_type_id
        
        LEFT JOIN admin_um_accounts ON
        log2_vr_reservations.requestor_id = admin_um_accounts.user_id
        
        LEFT JOIN admin_um_roles ON
        admin_um_accounts.role_id = admin_um_roles.role_id WHERE ';

        foreach ($keys as $key) {
            $query .= $key . " = :" . $key . " && ";
        }

        foreach ($keys_not as $key) {
            $query .= $key . " != :" . $key . " && ";
        }

        $query = trim($query, " && ");
        $data = array_merge($data, $data_not);

        return $this->query($query, $data);
    }

    public function insert_reservation($data, $attach_file)
    {
        $prefix = "VR-";
        $date = date("ymd");
        $random_str = strtoupper(substr(str_shuffle(md5(microtime())), 0, 5)); // generate a random string of 5 characters

        $data["reservation_id"] = $prefix . $date . $random_str;
        $data["file_path"] = $attach_file["attach_file"]["name"];

        $data["requestor_id"] = $_SESSION["user"]->user_id;

        // TODO: Insert the file to the directory
        $upload_dir = "uploads/documents/vehicle_reservation/";
        $file_name = $attach_file["attach_file"]["name"];
        $file_temp = $attach_file["attach_file"]["tmp_name"];

        move_uploaded_file($file_temp, $upload_dir . $file_name);
        $this->insert($data);

        $mail = new PHPMailer\PHPMailer\PHPMailer();
        try {
            //Server settings
            $mail->SMTPDebug = 2;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = SMTP_HOST;                     //Set the SMTP server to send through
            $mail->SMTPAuth   = SMTP_AUTH;                                   //Enable SMTP authentication
            $mail->Username   = SMTP_USERNAME;                     //SMTP username
            $mail->Password   = SMTP_PASSWORD;                               //SMTP password
            $mail->SMTPSecure = SMTP_SECURE;            //Enable implicit TLS encryption
            $mail->Port       = SMTP_PORT;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            //Recipients
            $mail->setFrom('cristiangordora27@gmail.com', 'Test');
            $mail->addAddress($data["email_address"], $data["full_name"]);     //Add a recipientm');

            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'Vehicle Reservation';
            $mail->Body    = 'Hello! ' . $data["full_name"] . ', This is your reservation number <b>' . $data["reservation_id"] . '</b>';

            $mail->send();
            echo 'Message has been sent';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }

    public function insert_report($data)
    {
        $prefix = "REPORT-";
        $date = date("ymd");
        $random_str = strtoupper(substr(str_shuffle(md5(microtime())), 0, 5));

        $data["report_id"] = $prefix . $date . $random_str;

        $this->insert($data);

        print_r($data);
    }

    public function update_status($id, $status)
    {

        switch ($status) {
            case 'pending':
                $this->update($id, ["status_id" => 1], 'reservation_id');
                break;
            case 'approve':
                $this->update($id, ["status_id" => 2], 'reservation_id');
                break;
            case 'dispatch':
                $this->update($id, ["status_id" => 3], 'reservation_id');
                break;
            case 'return':
                $this->update($id, ["status_id" => 4], 'reservation_id');
                break;
            case 'decline':
                $this->update($id, ["status_id" => 5], 'reservation_id');
                break;
            case 'cancel':
                $this->update($id, ["status_id" => 6], 'reservation_id');
                break;
        }
    }

    public function update_details($id, $data){
        $this->update($id, $data, 'reservation_id');
    }
}
