<?php

$to      = "info@beroniagro.com";
$subject = $_POST['subject'];
$message = '
          <div>
              <h2>New Email</h2>
              <br/>
              <ul style="font-size: 1.17em;">
                  <li><span>Name: </span><span>' . $_POST['name'] . '</span></li>
                  <li><span>Email: </span><span>' . $_POST['email'] . '</span></li>
                  <li><span>Subject: </span><span>' . $_POST['subject'] . '</span></li>
              </ul>

              <p>
             '. $_POST['message'] .'
              </P>
          </div>
      ';

$headers =  'MIME-Version: 1.0' . "\r\n";
$headers .= 'From: Beroni Agro Mailing System' . "\r\n";
$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";

if (mail($to, $subject, $message, $headers)) {
    echo "successful";
} else {
    echo "error";
}
