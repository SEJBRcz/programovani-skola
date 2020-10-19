<?php

declare(strict_types=1);

class User
{
    /**
     * zde je atributy
     * 4 x private, 3 x protected, 8 x public
     * no a tohle je viceradkovy
     */

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

   

    /**
     * @author Vít Voráček
     * @param int $ageVítVoráček
     * @return void
     */

    public function setAgeVítVoráček(int $ageVítVoráček)
    {
        $this->ageVítVoráček = $ageVítVoráček;
    }

    /**
     * @author Vít Voráček
     * @param string $sizeVítVoráček
     * @return void
     */

    public function setSizeVítVoráček(string $sizeVítVoráček)
    {
        $this->sizeRenatPancisin = $sizeVítVoráček;
    }
     /**
     * @author VítVoráček   
     * @param string $classVítVoráček
     * @return void
     */

    public function setClassVítVoráček(string $classVítVoráček)
    {
        $this->classRenatPancisin = $classVítVoráček;
    }
    
    /**
     * @author Vít Voráček
     * @param int $birthdayVítVoráček
     * @return void
     */

    public function setBirthdayVítVoráček(int $birthdayVítVoráček)
    {
        $this->birthdayRenatPancisin = $birthdayVítVoráček;
    }

    /**
     * @author VítVoráček
     * @return string
     */

    public function getGameVítVoráček(): string
    {
        return $this->gameVítVoráček;
    }

    /**
     * @author Vít Voráček
     * @return string
     */
    
    public function getTridaVítVoráček(): string
    {
        return $this->tridaVítVoráček;
    }

    /**
     * @author Vít Voráček
     * @return string
     */
    
    public function getHairVítVoráček(): string
    {
        return $this->hairVítVoráček;
    }

    /**
     * @author VítVoráček
     * @return string
     */
    
    public function getLastnameVítVoráček(): string
    {
        return $this->lastnameVítVoráček;
    }

    /**
     * @author VítVoráček
     * @return string
     */
    
     public function getAnimeVítVoráček(): string
    {
        return $this->animeVítVoráček;
    }
    /**
     * @author VítVoráček
     * @return string
     */

    public function getNameVítVoráček(): string
    {
        return $this->nameVítVoráček;
    }
    
    /**
     * @author Vít Voráček
     * @return string
     */
    
    public function getMangaVítVoráček(): string
    {
        return $this->mangaVítVoráček;
    }

    /**
     * @author Vít Voráček
     * @return string
     */
    
    public function getNamedogVítVoráček(): string
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
