<?php
    if(isset($_POST['submit'])) {
        $vardas = trim($_POST['vardas']);
        $pavarde = trim($_POST['pavarde']);
        $telefonas = trim($_POST['telefonas']);
        $email = trim($_POST['email']);
        $message = trim($_POST['message']);
        $journey = trim($_POST['journey']);
    
        if(!empty($vardas) && !empty($pavarde) && !empty($telefonas) && !empty($email) && !empty($message) && !empty($journey)) {
            if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
                include 'db.php';
                $from = "$email";
                $to = "ricardas.stake@gmail.com";
                $subject = "Nauja žinutė";
                $autorius = 'Nuo: ' . $vardas . ', ' . $email;
                $zinute = htmlspecialchars($message);
                // mail($to, $subject, $autorius, $zinute, $from);
                // echo "<script>alert('Ačiū, gavome');</script>";
            }
        }
    }
?>