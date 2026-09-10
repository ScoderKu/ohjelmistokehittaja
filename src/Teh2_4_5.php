<?php
class Auto
{
    public function __construct(
        public string $nimi,
        public string $malli
    ){}

    public function naytto(): string
    {
        return "$this->nimi $this->malli";
    }    
}

$auto = new Auto("Toyota", "Yaris");
echo $auto->naytto();


class Opiskelija
{
    public function __construct(
        public string $nimi,
        public string $rhyma
    ){}

    public function esittele(): string
    {
        return "Opiskelija: $this->nimi, rhymä: $this->rhyma";
    }    
}

$opiskelija = new Opiskelija("Anne", "IT-Sakky");
echo $opiskelija->esittele();

echo "<br>";

class Kirja
{
    public function __construct(
        public string $nimi,
        public string $kirjailija,
        public int $sivumaara
    ){}

    public function esittele(): string
    {
        return "\"$this->nimi\" <br> Kirjailija: <b>$this->kirjailija</b> <br> Sivumäärä: $this->sivumaara";
    }    
}

$kirja = new Kirja("Les Miserables", "Victor Hugo", 2125);
echo $kirja->esittele();