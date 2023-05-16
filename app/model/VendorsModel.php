<?php

class VendorsModel
{

    use Model;

    protected $table = 'log2_vp_vendors';

    public function fetch_all_vendors()
    {
        $query = 'SELECT 
        vendor.vendor_id,
        vendor.email_address,
        vendor.password,
        vendor.fullname,
        vendor.display_name,
        vendor.location,
        vendor.otp,
        admin_um_roles.role_name as user_role,

        supply_category.supply_category_name,
        company_type.company_type_name,
        user_status.user_status_name

        
        FROM log2_vp_vendors vendor
        LEFT JOIN log2_vp_supply_category supply_category ON
        vendor.supply_category_id = supply_category.category_id

        LEFT JOIN log2_vp_company_types company_type ON
        vendor.company_type_id = company_type.company_type_name

        LEFT JOIN log2_vp_user_status user_status ON
        vendor.status_id = user_status.status_id

        LEFT JOIN admin_um_roles ON
        vendor.role_id = admin_um_roles.role_id
        ';

        return $this->query($query);
    }

    public function fetch_vendor($data, $data_not = [])
    {
        $keys = array_keys($data);
        $keys_not = array_keys($data_not);
        $query = 'SELECT 
        vendor.vendor_id,
        vendor.email_address,
        vendor.password,
        vendor.fullname,
        vendor.display_name,
        vendor.location,
        vendor.otp,
        admin_um_roles.role_name as user_role,

        supply_category.supply_category_name,
        company_type.company_type_name,
        user_status.user_status_name

        
        FROM log2_vp_vendors vendor
        LEFT JOIN log2_vp_supply_category supply_category ON
        vendor.supply_category_id = supply_category.category_id

        LEFT JOIN log2_vp_company_types company_type ON
        vendor.company_type_id = company_type.company_type_name

        LEFT JOIN log2_vp_user_status user_status ON
        vendor.status_id = user_status.status_id

        LEFT JOIN admin_um_roles ON
        vendor.role_id = admin_um_roles.role_id
        WHERE ';

        foreach ($keys as $key) {
            $query .= $key . " = :" . $key . " && ";
        }

        foreach ($keys_not as $key) {
            $query .= $key . " != :" . $key . " && ";
        }

        $query = trim($query, " && ");

        $query .= " limit $this->limit offset $this->offset";
        $data = array_merge($data, $data_not);

        $result = $this->query($query, $data);

        if ($result)
            return $result[0];

        return false;
    }

    public function send_otp($data)
    {
        $otp = rand(1000, 9999);

        $this->update($data->vendor_id, ["otp" => $otp], 'vendor_id');

        $mail = new PHPMailer\PHPMailer\PHPMailer();
        try {
            //Server settings
            $mail->SMTPDebug = 0;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = SMTP_HOST;                     //Set the SMTP server to send through
            $mail->SMTPAuth   = SMTP_AUTH;                                   //Enable SMTP authentication
            $mail->Username   = SMTP_USERNAME;                     //SMTP username
            $mail->Password   = SMTP_PASSWORD;                               //SMTP password
            $mail->SMTPSecure = SMTP_SECURE;            //Enable implicit TLS encryption
            $mail->Port       = SMTP_PORT;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            //Recipients
            $mail->setFrom('cristiangordora27@gmail.com', 'Vendor Portal');
            $mail->addAddress($data->email_address, $data->company_name);     //Add a recipientm');

            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'Vendor Portal';
            $mail->Body    = 'Hello! ' . $data->company_name . ', This is your OTP <b>' . $otp . '</b>';

            $mail->send();
        } catch (Exception $e) {
            return "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
}
