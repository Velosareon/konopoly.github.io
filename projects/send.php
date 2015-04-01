 <?
$name = $_POST['name']; 
$email = $_POST['email']; 
$comment = $_POST['comment']; 

$to = "kman239@gmail.com";
$subject = "Email Via Polyashenko.me
$message = "A visiter of Polyashenko.me has submitted the following.\n\nName: $name\n\nEmail: $email\n\nComment:$comment";

mail($to,$subject,$message);

?>