<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        tr {
            height: 40px;
            text-align: center;
        }

        td {
            width: 60px;
        }
    </style>
</head>
<body>
    <p>&copy; <?php echo date("Y.m.d"); ?></p>
    <?php
        $name = "Tomas";
        echo $name;
    ?>
    <br>
    <?php echo "$name miau"; ?> 
    <br>
    <?php
        $metai = 2017;
        if ($metai >= 2017) { ?>
            <p>Nauji laikai</p>
     <?php   } else { ?>
            <h3>Bla bla bla</h3>
     <?php   } ?>

        <?php // Pirma užduotis
            $country = 'Lietuva';
            $city = 'Vilnius';
            $population = 574221;
        ?>

        <ul>
            <li><?php echo $country; ?></li>
            <li><?php echo $city; ?></li>
            <li><?php echo $population; ?></li>
        </ul>

    <?php // Antra užduotis
        echo $city . ' - Lietuvos sostinė';
    ?><br>
    <?php
        echo "$city ir $country sparčiai auga";
    ?><br>
    <?php
        $largest_population = true;
        echo $largest_population;
    ?><br>

    <?php //trečia užduotis
        $x = 10;
        $y = 7;

        $z = $x + $y;
        echo "$x + $y = $z";
    ?><br>
    <?php
        $z = $x - $y;
        echo "$x - $y = $z";
    ?><br>
    <?php
        $z = $x * $y;
        echo "$x * $y = $z";
    ?><br>
    <?php
        $z = $x / $y;
        echo "$x / $y = $z";
    ?><br>
    <?php
        $z = $x % $y;
        echo "$x % $y = $z";
    ?><br>

    <?php
        $darbuotojai = ["Tomas,", "Darius", "Giedrius"];
        print_r($darbuotojai);
        $darbuotojai[] = "Rasa";
        print_r($darbuotojai);
        $darbuotojai[1] = "Andrius";
        print_r($darbuotojai);
        echo $darbuotojai[1];
    ?><br>

    <?php
        // Daugybos lentelė
        echo "<table border=\"1\">";

        // Sukuriame daugybos lentelę skaičiams 1-10.
        // Pradedame nuo eilučių.
        for ($row = 1; $row <= 10; $row++) {
            echo "<tr>\n";

            // Kiekvienam skaičiui eilutėje sukuriame stulpelį.
            for ($col = 1; $col <= 10; $col++) {
                $x = $col * $row;

                // Siunčiame rezultatą į atitinkamą stulpelį.
                echo "<td>$x</td>\n";
            }
            echo "</tr>";
        }
        echo "</table>";
    ?>

    <p><?php // Ketvirta užduotis
        $cities = ['Berlynas', 'Roma', 'Londonas'];
        $cities[] = 'Tokijas';
        print_r($cities);
    ?>

    <ul>
        <li><?php echo $cities[1]; ?></li>
    </ul>
    
    <p><?php
        $cities2 = [
            'Tokijas' => 13.6,
            'Vašingtonas' => 0.6,
            'Mordoras' => 11.5
        ];
        print_r($cities2);
        $cities2['Londonas'] = 8.6;
    ?></p>

    <p><?php
        print_r($cities2);
    ?></p>


    <p><?php
        echo "<ul>\n";
        foreach ($cities2 as $city) {
            echo "<li>Gyventojų skaičius: $city mln.</li>\n";
        }
        echo "</ul>";
    ?></p>
    
    <p><?php // Penkta užduotis
        $cities3 = [
            'Tokijas' => [13.6, 1868, "Japonija"],
            'Vašingtonas' => [0.6, 1790, "JAV"],
            'Mordoras' => [11.5, 1147, "Middle Earth"]
        ];
        print_r($cities3);
        $cities3['Londonas'] = [8.6, 43, "Anglija"];
    ?></p>

    <p><?php
        print_r($cities3);
    ?></p>

    <p><?php
        echo "<ul>\n";
        foreach ($cities3['Londonas'] as $city_value) {
            echo "<li>$city_value</li>\n";
        }
        echo "</ul>";
    ?></p>


    <ul>
        <li><?php echo "Gyventojų skaičius:  {$cities3['Londonas'][0]} mln.";?></li>
        <li><?php echo "Įkurtas: {$cities3['Londonas'][1]} m.";?></li>
        <li><?php echo "Šalis: {$cities3['Londonas'][2]}";?></li>
    </ul>

 
    <p><?php // Šešta užduotis
        $metai = 1774;
        if ($metai >= $cities3['Vašingtonas'][1]) {
            echo "Vašingtonas yra JAV sostinė";
        }
        elseif ($metai == 1774) {
            echo "JAV sostinė vis dar Filadelfijoje";
        }
        else {
            // echo "Liko {($cities3['Vašingtonas'][1] - $metai)} metai (-ų) iki Vašingtono įkūrimo"; nev
            echo 'Liko ' . $cities3['Vašingtonas'][1] - $metai . ' metai (-ų) iki Vašingtono įkūrimo';
        }
    ?></p>

    <p><?php // Septinta užduotis
       $cities4 = ['Tokijas', 'Vasingtas', 'Mordoras', 'Londonas'];
       echo "<ul>\n";
       for ($i = 0; $i < count($cities4); $i++) {
            echo "<li>$cities4[$i]</li>\n";
       }
       echo "</ul>";
    ?></p>
    
    <p><?php // Aštunta užduotis
       $temp = [-4, 3, 9, 19, 19, 9, 12, 20, 24, 20, 12, 14, 18, 21, 20, 23, 16, 16, 15, 19, 19, 17, 17, 15, 12, 13, 13, 15, 19, 21];
       $average = 0;
       // Temperatūrų sumos apskaičiavimas
       foreach ($temp as $temp_value) {
        $average += $temp_value;
        echo "$average<br>";
       }
       // Temperatūrų vidurkio apskaičiavimas
       $average /= count($temp);
       echo "$average<br><br>";
       // Temperatūros vidurkio suapvalinimas
       echo round($average);
       // Masyvo išrūšiavimas mažėjančios temperatūros tvarka
       rsort($temp);
       print_r($temp);
       echo "<br>";
       // Penkios šilčiaucios temperatūros
       $silciausios = array_slice($temp, 0 ,5);
       echo "<br>";
       echo "Šilčiausios temperatūros: ";
       print_r($silciausios);
       // Penkios šalčiausios temperatūros
       $dracula = array_slice($temp, -5, 5);
       echo "<br><br>";
       echo "Šalčiausios temperatūros: ";
       print_r($dracula);

       // Šilčiausios
       echo "<br><br>";
       foreach($silciausios as $silciausia) {
        echo "Šilciausios temperatūros: $silciausia <br>";
       }

       echo "<br>";
       foreach($dracula as $dracula) {
        echo "Šalčiausios temperatūros: $dracula <br>";
       }

       // Juokelis
       echo "<br>";
       echo count($dracula);
    ?></p>


</body>
</html>

    
    <p><?php
       
    ?></p>
    
    <!-- echo "<br><br>"; -->