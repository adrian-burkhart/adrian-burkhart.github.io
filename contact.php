<?php


if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $mail = $_POST['mail'];
    $message = $_POST['message'];

    $mail_to = "a.burkhart@web-netz.de";
    $headers = "From: ".$mail;
    $subject = "Contact form message from: ".$name;
    $txt = "You have received a message via contact form from ".$name.".\n\n".$message;

    mail($mail_to, $subject, $txt, $headers);
    header("Location: index.html?mailsend");
}