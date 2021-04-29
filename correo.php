<?php
    if(isset($_POST['Send'])){
        if(!empty($_POST['Name']) && !empty($_POST['Age']) &&!empty($_POST['LastName']) && !empty($_POST['Email']) && !empty($_POST['Message'])){
            $name=$_POST['Name'];
            $age=$_POST['Age'];
            $lastName=$_POST['LastName'];
            $msg=$_POST['Message'];
            $email=$_POST['Email'];     
            $header = "From: omarjoeltene@gmail.com" . "\r\n";
            $header. = "Reply-To: mywar1752@gmail.com" . "\r\n"; 
            $header. = "X-Mailer: PHP/".  phpversion();
            $mail = @mail($email,$name,$msg,$header);
            if($mail){
                echo "<h2>Correo enviado</h2>";
            }
        }
    }
?>