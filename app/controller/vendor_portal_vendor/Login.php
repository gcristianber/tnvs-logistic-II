<?php

session_start();

class Login
{
    use Controller;

    protected $attempts = 0;
    protected $max_attempts = 4;

    public function index()
    {
        $VPVendors = new VPVendors;
        

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $arr["vendor_id"] = $_POST["vendor_id"];
            $row = $VPVendors->searchViewByCriteria($arr);
          

            if ($row) {
                if ($row->password == $_POST["password"]) {
                    $mail = new PHPMailer\PHPMailer\PHPMailer();

                    $id = $_POST["vendor_id"];
                    $otp = rand(100000, 999999);

                    $VPVendors->update($id, ["otp" => $otp], 'vendor_id');
                    try {
                        //Server settings
                        $mail->SMTPDebug = 2;                      //Enable verbose debug output
                        $mail->isSMTP();                                            //Send using SMTP
                        $mail->Host       = SMTP_HOST;                     //Set the SMTP server to send through
                        $mail->SMTPAuth   = SMTP_AUTH;                                   //Enable SMTP authentication
                        $mail->Username   = SMTP_USERNAME;                     //SMTP username
                        $mail->Password   = SMTP_PASSWORD;                               //SMTP password
                        $mail->SMTPSecure = SMTP_SECURE;         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
                        $mail->Port       = SMTP_PORT;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

                        //Recipients
                        $mail->setFrom('cristiangordora27@gmail.com', 'LULAN TNVS - LOGISTIC 2');
                        $mail->addAddress($row->email_address, $row->display_name);     //Add a recipient

                        //Content
                        $mail->isHTML(true);                                  //Set email format to HTML
                        $mail->Subject = 'OTP';
                        $mail->Body    = 'Your otp is '.$otp;

                        $mail->send();

                        $_SESSION["user"] = $row;

                        echo 'Message has been sent';
                        redirect("vendor_portal_vendor/verify_otp");

                    } catch (Exception $e) {
                        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                    }
                }else{
                    $this->attempts++;

                    if($this->attempts >= $this->max_attempts){
                        echo "Attempt max";
                    }else{
                        echo $this->attempts;
                        echo 'Incorrect password. Please try again.';
                    }
                }

                

            }

        }

        $this->view('vendor_portal/vendor/login');
    }
}
