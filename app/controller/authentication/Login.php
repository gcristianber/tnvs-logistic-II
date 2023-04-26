<?php

session_start();

class Login
{

    use Controller;

    public function index()
    {

        $data = [];

        if (!empty($_POST)) {
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $arr["username"] = $_POST["username"];
                $arr["password"] = $_POST["password"];

                $Users = new AccountsModel;
                $row = $Users->fetch_user($arr);

                if ($row && $row->password == $_POST["password"]) {
                    $_SESSION["user"] = $row;

                    redirect("general/dashboard");
                    exit();
                }
            }
        }

        $this->view("auth/login", $data);
    }

    public function authenticate()
    {
        $arr["username"] = $_POST["username"];
        $arr["password"] = $_POST["password"];

        $Users = new AccountsModel;
        $row = $Users->fetch_user($arr);

        if ($row && $row->password == $_POST["password"]) {
            $_SESSION["user"] = $row;

            // Construct dashboard URL using ROOT constant
            $dashboardUrl = ROOT . "general/dashboard";

            // Send redirect response
            header("Location: $dashboardUrl");
            exit();
        } else {
            // Authentication failed, display error message
            $response = array("status" => "error", "message" => "Authentication failed.");
            header('Content-Type: application/json');
            echo json_encode($response);
        }
    }
}
