<?php


if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $mail_to = "ab@flanke7.de";
    $subject = "Contact form message from: ".$name;
    $txt = "You have received a message via contact form from ".$name.".\n\n".$message;

    mail($mail_to, $subject, $txt);
    header("Location: index.php?mailsend");
}