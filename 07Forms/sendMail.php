<?php 

// print_r($_POST);
/*
Array
(
    [name] => Landon
    [email] => landon.conover@gmail.com
    [telephone] => 801-376-7144
    [skill] => Basicly, the best!
    [age] => 26
    [url] => http://landonconover.com
    [dateStarted] => 2000-01-01
    [comments] => This is the super awesome comment!
)
*/


$name = $_POST['name'];
$email = $_POST['email'];
$telephone = $_POST['telephone'];
$skill = $_POST['skill'];
$age = $_POST['age'];
$url = $_POST['url'];
$dateStarted = $_POST['dateStarted'];
$comments = $_POST['comments'];

//email me
$to = 'landon.conover@gmail.com';
$subject = 'Comment Form';
$message = 'You have a new comment!<br><br> ' . $name . '<br>' .$email . '<br>' .$telephone . '<br>' .$skill . '<br>' .$age . '<br>' .$url . '<br>' .$dateStarted . '<br>' .$comments . '<br>';
$headers = 'From: landon.conover@gmail.com' . "\r\n" .
    'Reply-To: landon.conover@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

$headers .= 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";


$mailReturn = mail( $to, $subject, $message, $headers );

//send return for AJAX
if ( $mailReturn ) {
    echo 'Sucess';
} else {
    echo 'Fail';
}

//send mail to user
$to = $email;
$subject = 'Thank you for your Comment';
$message = 'Thank you, ' .$name. ', for your comment. You will recive a response just as quick as we can get it to you!<br><br><br>Your Comment:<br>' .$comments;
$headers = 'From: landon.conover@gmail.com' . "\r\n" .
    'Reply-To: landon.conover@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

$headers .= 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";


$mailReturn = mail( $to, $subject, $message, $headers );