<?php // 10 užduotis
    function area_plot($a, $b) {
        $areaPlot = $a * $b;
        echo 'Stačiakampio kraštinių ilgiai yra ' . $a . ' ir ' . $b;
        echo "<br>";
        echo "Stačiakampio plotas yra: $areaPlot";
        echo "<br><br>";
    }
    area_plot(10, 20);  
?>

<?php // 11 užduotis
    if ($_POST['ilgis'] && $_POST['plotis']) {
        area_plot($_POST['ilgis'], $_POST['plotis']);
        ?> 

        <form action="<?php $_PHP_SELF; ?>" method="POST" id="form1">
        <button type="submit" form="form1">Skaičiuok iš naujo</button>
        </form>

        <?php
    }
    else { ?>
        <html>
        <body>
        <form action="<?php $_PHP_SELF; ?>" method="POST" id="form1">
        Ilgis: <input type="number" name="ilgis" required/><br><br>
        Plotis: <input type="number" name="plotis" required/><br><br>
        <button type="submit" form="form1">Apskaičiuoti</button>
        </form>
    </body>
</html>
  <?php  } ?>




  
  <?php // 12 užduotis
    if ($_POST['firstname'] && $_POST['lastname']) {
        if (preg_match("/^[A-Za-z'-]+$/", $_POST['firstname']) && preg_match("/^[A-Za-z'-]+$/", $_POST['lastname'])) {
            echo 'Jūsų vardas yra<strong> ' . $_POST['firstname'] . ' ' . $_POST['lastname'] . "</strong>";
        ?> 
            <form action="<?php $_PHP_SELF; ?>" method="POST" id="form2">
            <button type="submit" form="form2">Įvesk naują vardą</button>
            </form>
        <?php
        }
        else {
            echo "<strong>Neteisingas formatas</strong>";
            echo "<br><br>";
        ?>  <html>
                <body>
                    <form action="<?php $_PHP_SELF; ?>" method="POST" id="form2">
                        Vardas: <input type="text" name="firstname" required autocomplete="off"/><br><br>
                        Pavardė: <input type="text" name="lastname" required autocomplete="off"/><br><br>
                        <button type="submit" form="form2">Pateikti</button>
                    </form>
                </body>
            </html>
       <?php }  
    }
    else { ?>
        <html>
            <body>
                <form action="<?php $_PHP_SELF; ?>" method="POST" id="form2">
                    Vardas: <input type="text" name="firstname" required autocomplete="off"/><br><br>
                    Pavardė: <input type="text" name="lastname" required autocomplete="off"/><br><br>
                    <button type="submit" form="form2">Pateikti</button>
                </form>
            </body>
        </html>
<?php  } ?>





  <?php // 13 užduotis
    class Human {
        public $firstName;
        public $lastName;

        public function greet() {
            return 'O dieve! Juk Jūs esate <strong>' . $this -> firstName . ' ' . $this -> lastName . '</strong>!!! Aš esu didžiausias Jūsų gerbėjas.';
        }
    }

    $pirmas = new Human();
    $antras = new Human();

    $pirmas -> firstName = "Petras";
    $pirmas -> lastName = "Vienmarškinis";

    $antras -> firstName = "Tadas";
    $antras -> lastName = "Blinda";

    echo $pirmas -> greet();
    echo "<br><br>";
    echo $antras -> greet();

  ?>




  <?php // 14 užduotis
    echo "<br><br>";
    function metai($metai) {
        $currentYear = date('Y');
        if ($metai < $currentYear) {
            echo "&copy; $metai-$currentYear";
        }
        else {
            echo "&copy; $currentYear";
        }

    }

    metai(2023);

  ?>