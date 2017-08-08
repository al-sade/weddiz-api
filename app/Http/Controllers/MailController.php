<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Mail;

class MailController extends Controller
{
    public function sendMail(Request $request)
    {
        $to = "alsade15@gmail.com";
        $subject = "בורכים הבאים ל weddiz";
        $form_data = $request->form_data;
        $suppliers = $request->suppliers;

        $message = "בורכים הבאים ל weddiz";
        foreach ($form_data as $prop) {
            $message .= $prop.'<br>';
        }
        $message .= 'הספקים הנבחרים:';
        foreach ($suppliers as $key => $supplier) {
            $message .= $supplier['address'];
            $message .= '---------';
        }


// Always set content-type when sending HTML email
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
        $headers .= 'From: <contact@weddiz.co.il>' . "\r\n";
//        $headers .= 'Cc: myboss@example.com' . "\r\n";

        if(mail($to, $subject, $message, $headers)){
            return "success";
        }else{
            return "fail";
        }

    }
}