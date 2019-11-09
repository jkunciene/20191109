<?php
require_once('db_functions.php');

$a = $_POST['name'];
$b = $_POST['email'];
$c = $_POST['subject'];
createQuestion("$a", "$b", "$c");


// print_r( $_POST );
$klientoVardas = $_POST['name'];
$klientoKlausimas = $_POST['subject'];
$klientoPastas = $_POST['email'];
// echo "  $klientoVardas  $klientoPavarde  <hr /> ";
// echo "  $klientoAntraste  <hr /> $klientoKlausimas   ";
// echo "  <hr /> $klientoPastas   ";
include_once('libs/PHPMailer-master/PHPMailerAutoload.php');

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    // papildomi PhpMailer nustatymia, jeigu neveikia su standartiniais
    $mail->SMTPOptions = array(
        'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
        )
    );
    $mail->Host = 'tls://smtp.gmail.com:587';
    $mail->SMTPSecure = 'ssl';                              // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 465;                                      // TCP port to connect to
    //Server settings
    $mail->SMTPDebug = 0;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'buhalterijaemail@gmail.com';                 // SMTP username
    $mail->Password = 'BUH159159';                          // SMTP username
    //Recipients
    $mail->setFrom( 'buhalterijaemail@gmail.com' ,  $klientoVardas);
    $mail->addReplyTo( $klientoPastas, $klientoVardas);     // Add a recipient
    $mail->addAddress( 'buhalterijaemail@gmail.com', 'Puslapiu kurejai');
    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Klausimas';
    $mail->Body    = " <b>Klientas klausia:</b>   $klientoKlausimas" ;
    $mail->AltBody = " Klientas klausia: $klientoPastas";
    $mail->send();
    echo '<div class="bg-info"> Email išsiųstas sėkmingai     </div>';
} catch (Exception $e) {
    echo '<div class="bg-danger"> neveikia     </div>' . $mail->ErrorInfo;
}


?>
<h2>Ačiū už klausimą, mes su Jumis susisieksime</h2>
<a  href="index.php" class="btn btn-outline-dark w-50 mb-5">Grįžti į pagrindinį puslapį</a>
