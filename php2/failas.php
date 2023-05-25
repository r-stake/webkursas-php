<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
       $filename = 'text.txt';
       $file = fopen($filename, "r"); // sukuriame failą

       $filesize = filesize($filename); // filesize() nuskaito failo dydį
       $filetext = fread($file, $filesize); // fread() skaito failo turinį
       fclose($file); // fclose() uždaro failą, parametras - pointeris į failą

       echo "Failo dydis: $filesize B";
       echo "<pre>$filetext</pre>";

       /*
            Turinio nematysime, kol nepakeisime w+ į r
            Taip pat turime įkelti kokį nors tekstą į naujai sukurtą failą ir išsaugotį.
        */
    ?></p>
</body>
</html>

<p><?php
       
?></p>