<?php

session_start();

class Login
{

    use Controller;

    public function index()
    {

        $data = [];
        $auth_counter = isset($_SESSION['auth_counter']) ? $_SESSION['auth_counter'] : 0;
        $last_attempt_time = isset($_SESSION['last_attempt_time']) ? $_SESSION['last_attempt_time'] : null;
        $cooldown_time = 120;

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $Users = new Users;
            $arr["username"] = $_POST["username"];
            $row = $Users->findRowView($arr);

            if ($row && $row->password == $_POST["password"]) {
                if ($auth_counter >= 3 && $last_attempt_time && time() - $last_attempt_time < $cooldown_time) {
                    $remaining_time = $cooldown_time - (time() - $last_attempt_time);
                    echo "Maximum login attempts exceeded. Please try again in " . $remaining_time . " seconds";
                    return;
                } else {
                    $_SESSION["user"] = $row;
                    unset($_SESSION['auth_counter']); // reset the counter on successful login
                    unset($_SESSION['last_attempt_time']); // reset the last attempt time on successful login
                    redirect("general/dashboard");
                }
            } else {
                $now = time();
                if ($last_attempt_time && $now - $last_attempt_time < $cooldown_time) {
                    $remaining_time = $cooldown_time - ($now - $last_attempt_time);
                    echo "Too many failed attempts. Please try again in " . $remaining_time . " seconds";
                } else {
                    $auth_counter++;
                    $_SESSION['auth_counter'] = $auth_counter;
                    $_SESSION['last_attempt_time'] = $now;
                    if ($auth_counter >= 3) {
                        echo "Maximum login attempts exceeded. Please try again in " . $cooldown_time . " seconds";
                        return;
                    }
                    echo "Invalid username or password. Attempt " . $auth_counter . " of 3. Please try again in 2 minutes if unsuccessful.";
                }
            }
        }
        $this->view("auth/login", $data);
    }
}
