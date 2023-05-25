<?php
    class Car {
        public $bakas;

        // pridedame litrus į degalų baką
        public function degaluKiekis($litrai) {
            $this -> bakas += $litrai;
            return $this;
        }

        // atimame degalų litrus iš bako, priklausomai nuo nuvažiuoto atstumo
        public function atstumas($distancija) {
            $km = $distancija;
            $litrai = $km * 0.05;
            $this -> bakas -= $litrai;
            return $this;
        }
    }

    $bmv = new Car();

    // kiek turėsime degalų bake, jei įpylėme 10L, o nuvažiavome 40 km?
    $bakas = $bmv -> degaluKiekis(10) -> atstumas (40) -> bakas;
    echo 'Bake bus likę: ' . $bakas . ' L.';
?>

<?php
    echo "<br><br>";
    $data1 = new DateTime();
    $data2 = new DateTime();
    $data3 = new DateTime();

    $losangeles = new DateTimeZone('America/Los_Angeles');
    $vilnius = new DateTimeZone('Europe/Vilnius');
    $mordoras = new DateTimeZone('Europe/Moscow');

    $data1 -> setTimezone($losangeles);
    $data2 -> setTimezone($vilnius);
    $data3 -> setTimezone($mordoras);

    echo 'Laikas Los Andžele: ' . $data1 -> format('g:ia, l, F j, Y') . '<br>';
    echo 'Laikas Vilniuje: ' . $data2 -> format('g:ia, l, F j, Y') . '<br>';
    echo 'Laikas Mordore: ' . $data3 -> format('g:ia, l, F j, Y') . '<br>';
?>

