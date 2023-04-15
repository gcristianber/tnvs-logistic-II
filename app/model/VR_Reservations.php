<?php

class VR_Reservations
{

    use Model;
    

    protected $table = "log2_vr_reservations";
    protected $view_table = "log2_vr_reservations_view";

    public function insert_request($data, $attach_file)
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

        $this->send_email($data["email_address"], $data["full_name"], $data["reservation_id"]);
    }

    public function send_email($target_email, $full_name, $reservation_id)
    {
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
            $mail->addAddress($target_email, $full_name);     //Add a recipientm');

            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'Vehicle Reservation';
            $mail->Body    = 'Hello! '. $full_name. ', This is your reservation number <b>'. $reservation_id . '</b>';

            $mail->send();
            echo 'Message has been sent';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }


    public function renderView()
    {
        $query = "select * from $this->view_table";

        return $this->query($query);
    }

    public function renderViewByCriteria($data, $data_not = [])
    {
        $keys = array_keys($data);
        $keys_not = array_keys($data_not);
        $query = "select * from $this->view_table where ";

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

    public function findRowView($data, $data_not = [])
    {
        $keys = array_keys($data);
        $keys_not = array_keys($data_not);
        $query = "select * from $this->view_table where ";

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

    public function countAllView()
    {
        $query = "select count(*) as count from $this->view_table";
        return $this->query($query);
    }

    public function countByCriteria($data, $data_not = [])
    {
        $keys = array_keys($data);
        $keys_not = array_keys($data_not);
        $query = "select count(*) as count from $this->view_table where";
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
}
