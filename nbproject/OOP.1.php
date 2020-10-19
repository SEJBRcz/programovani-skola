<?php


class User

{
  

    public $gameVítVoráček = 'rysis';

    public $tridaVítVoráček = 'ZT3B';

    public $hairVítVoráček = 'Black';

    public $nameVítVoráček = 'Vít';

    public $animeVítVoráček = 'TenseiShiraiSlimeDataKen';

    public $lastnameVítVoráček = 'Voráček';

    public $mangaVítVoráček = ' mahoshoujo';

    public $namedogVítVoráček = 'grinch';

    private $ageVítVoráček;

    private $classVítVoráček;

    private $sizeVítVoráček;

    private $birthdayVítVoráček;

    protected $loginVítVoráček;

    protected $passwordVítVoráček;

    protected $pincodeVítVoráček;

    public function __construct()
    {

    }

   

    public function setAgeVítVoráček( $ageVítVoráček)
    {
        $this->ageVítVoráček = $ageVítVoráček;
    }

   
    public function setSizeVítVoráček( $sizeVítVoráček)
    {
        $this->sizeRenatPancisin = $sizeVítVoráček;
    }
   
    public function setClassVítVoráček( $classVítVoráček)
    {
        $this->classRenatPancisin = $classVítVoráček;
    }
    
    
    public function setBirthdayVítVoráček( $birthdayVítVoráček)
    {
        $this->birthdayRenatPancisin = $birthdayVítVoráček;
    }

   
    public function getGameVítVoráček()
    {
        return $this->gameVítVoráček;
    }

    
    public function getTridaVítVoráček()
    {
        return $this->tridaVítVoráček;
    }

    
    public function getHairVítVoráček()
    {
        return $this->hairVítVoráček;
    }

  
    public function getLastnameVítVoráček()
    {
        return $this->lastnameVítVoráček;
    }

    
     public function getAnimeVítVoráček()
              {
        return $this->animeVítVoráček;
    }
  

    public function getNameVítVoráček()
    {
        return $this->nameVítVoráček;
    }
  
    
    public function getMangaVítVoráček()
    {
        return $this->mangaVítVoráček;
    }

  
    
    public function getNamedogVítVoráček()
             {
        return $this->namedogVítVoráček;
    }
}

$user = new User();

$user->setClassVítVoráček('PRG/PS');

$user->setAgeVítVoráček(18);

$user->setSizeVítVoráček('179');

$user->setBirthdayVítVoráček(2002);

echo $user->getGameVítVoráček();

echo $user->getTridaVítVoráček();

echo $user->getHairVítVoráček();

echo $user->getNameVítVoráček();

echo $user->getLastnameVítVoráček();

echo $user->getAnimeVítVoráček();

echo $user->getMangaVítVoráček();

echo $user->getNamedogVítVoráček();

var_dump($user);

