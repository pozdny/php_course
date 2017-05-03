<?php

/**
 * Created by PhpStorm.
 * User: Valentina
 * Date: 03.05.2017
 * Time: 19:46
 */
interface ILang{
    public function getLang($country);
}
class ruLocale implements ILang
{
    private $langFile;
    public function getLang($country){
        echo 'Privet';
        return true;
    }
}

class enLocale implements ILang
{
    private $langFile;
    public function getLang($country){
        echo 'Hello';
        return true;
    }
}
class UserSite{
    public $country;
    public function __construct($country)
    {
        $this->country = $country;
    }
    public function createSite(){
        if($this->country == 'ru'){
            $site = new ruLocale();
            return $site->getLang($this->country);
        }
        elseif($this->country == 'en'){
            $site = new enLocale();
            return $site->getLang($this->country);
        }
    }

}
$site = new UserSite('ru');
$locale = $site->createSite();
//$myLang = $locale->getLang('ru');
//var_dump($site->createSite());
