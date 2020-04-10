<?php //namespace par defaut

namespace App;

class Math{

  //fonction qui retourne le double d’un nombre
  public static function double($nombre)
  {
     return $nombre * 2;
  }

  public static function ttc($nombre)
  {
     return $nombre * 1.2;
  }

  public static function pareil($nombre1, $nombre2)
  {
    if($nombre1 == $nombre2){
        return true;
      }else{
        return false;
    }
  }

  public static function plus($nombre1, $nombre2)
  {
    if($nombre1 >= $nombre2){
        return true;
      }
      return false;
  }
 }

?>
