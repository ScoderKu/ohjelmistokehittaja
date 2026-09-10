<?php
class Auto
{
    public string $merkki;
    public string $malli;
}

$auto = new Auto();
$auto->merkki = "Toyota";
$auto->malli = "Corolla";

echo "$auto->merkki $auto->malli <br>";


class Opiskelija
{
    public string $nimi;
    public string $rhyma;
}

$opiskelija_1 = new Opiskelija();
$opiskelija_1->nimi = "Jussi";
$opiskelija_1->rhyma = "IT-Sakky";

$opiskelija_2 = new Opiskelija();
$opiskelija_2->nimi = "Simo";
$opiskelija_2->rhyma = "Kokki-Saaky";

echo "Opiskelija 1: $opiskelija_1->nimi, rhymä: $opiskelija_1->rhyma <br>";
echo "Opiskelija 2: $opiskelija_2->nimi, rhymä: $opiskelija_2->rhyma";
