<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Contact extends CI_Controller
{
    public function index()
    {
        if (isset($_POST['submit'])) {
            $name       = $_POST['name'];
            $email      = $_POST['email'];
            $subject    = $_POST['subject'];
            $message    = $_POST['message'];
            $noWa       = $_POST['noWa'];
            header("location:https://api.whatsapp.com/send?phone=$noWa&text=Name%20:%20%2A$name%2A%20%0AEmail%20:%20$email%20%0A%0ASubject%20:%20$subject%20%0A%0AMessage%20:%0A$message");
        } else {
            echo "
                <script>
                window.location=history.go(-1);
                </script>
            ";
        }

        //API
        // $token = "NtAR6BnmH1rdgJ_z5VXi";
        // $target = "6281235625266";

        // $curl = curl_init();

        // curl_setopt_array($curl, array(
        //     CURLOPT_URL => 'https://api.fonnte.com/send',
        //     CURLOPT_RETURNTRANSFER => true,
        //     CURLOPT_ENCODING => '',
        //     CURLOPT_MAXREDIRS => 10,
        //     CURLOPT_TIMEOUT => 0,
        //     CURLOPT_FOLLOWLOCATION => true,
        //     CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        //     CURLOPT_CUSTOMREQUEST => 'POST',
        //     CURLOPT_POSTFIELDS => array(
        //         'target' => $target,
        //         'message' => 'test message',
        //         'countryCode' => '62', //optional
        //     ),
        //     CURLOPT_HTTPHEADER => array(
        //         "Authorization: $token" //change TOKEN to your actual token
        //     ),
        // ));

        // $response = curl_exec($curl);

        // curl_close($curl);
        // echo $response;
    }
}
