<?php

session_start();

class Vendor_login
{
    use Controller;

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
                        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
                        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                        $mail->Username   = 'cristiangordora27@gmail.com';                     //SMTP username
                        $mail->Password   = 'qsbjpjjuzkxjaovc';                               //SMTP password
                        $mail->SMTPSecure = 'tls';         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
                        $mail->Port       = 587;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

                        //Recipients
                        $mail->setFrom('cristiangordora27@gmail.com', 'Chan');
                        $mail->addAddress('gcristianber@gmail.com', 'Gcristianber');     //Add a recipient

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
                }


            }
        }

        $this->view('vendor_portal/vendor/login');
    }
}
