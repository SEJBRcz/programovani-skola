<?php


class User

{
  

    public $gameVitVoracek = 'rysis';

    public $tridaVitVoracek = 'ZT3B';

    public $hairVitVoracek = 'Black';

    public $nameVitVoracek = 'Vít';

    public $animeVitVoracek = 'TenseiShiraiSlimeDataKen';

    public $lastnameVitVoracek = 'Voráček';

    public $mangaVitVoracek = ' mahoshoujo';

    public $namedogVitVoracek = 'grinch';

    private $ageVitVoracek;

    private $classVitVoracek;

    private $sizeVitVoracek;

    private $birthdayVitVoracek;

    protected $loginVitVoracek;

    protected $passwordVitVoracek;

    protected $pincodeVitVoracek;

    public function __construct()
    {

    }

   

    public function setAgeVitVoracek( $ageVitVoracek)
    {
        $this->ageVitVoracek = $ageVitVoracek;
    }

   
    public function setSizeVítVoráček( $sizeVitVoracek)
    {
        $this->sizeVitVoracek = $sizVitVoracek;
    }
   
    public function setClassVitVoracek( $classVitVoracek)
    {
        $this->classVitVoracek = $classVitVoracek;
    }
    
    
    public function setBirthdayVitVoracek( $birthdayVitVoracek)
    {
        $this->birthdayVitVoracek = $birthdayVitVoracek;
    }

   
    public function getGameVitVoracek()
    {
        return $this->gameVitVoracek;
    }

    
    public function getTridaVitVoracek()
    {
        return $this->tridaVitVoracek;
    }

    
    public function getHairVitVoracek()
    {
        return $this->hairVitVoracek;
    }

  
    public function getLastnameVitVoracek()
    {
        return $this->lastnameVitVoracek;
    }

    
     public function getAnimeVitVoracek()
              {
        return $this->animeVitVoracek;
    }
  

    public function getNameVitVoracek()
    {
        return $this->nameVitVoracek;
    }
  
    
    public function getMangaVitVoracek()
    {
        return $this->mangaVitVoracek;
    }

  
    
    public function getNamedogVitVoracek()
             {
        return $this->namedogVitVoracek;
    }
}

$user = new User();

$user->setClassVitVoracek('PRG/PS');

$user->setAgeVitVoracek(18);

$user->setSizeVitVoracek('179');

$user->setBirthdayVitVoracek(2002);

echo $user->getGameVitVoracek();

echo $user->getTridaVitVoracek();

echo $user->getHairVitVoracek();

echo $user->getNameVitVoracek();

echo $user->getLastnameVitVoracek();

echo $user->getAnimeVitVoracek();

echo $user->getMangaVitVoracek();

echo $user->getNamedogVitVoracek();

var_dump($user);

