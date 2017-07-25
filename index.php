<?php

// Table of content
// 1. factory method



// 1 . Factory Design Pattern
// =====================================================================================================================================
echo "This is test for Factory Design Pattern \n";

//first abstract Class
abstract class AbstractFactoryMethod {
    abstract function foodToEat($param);
}

//concrete class that extends the abstract class
class PizzaFoodAbstract extends AbstractFactoryMethod {
    private $context = "Wheat";  
    function foodToEat($param) {
    $food = NULL;   
        switch ($param) {
            case "young":
                $food = new PizzaFood;
            break;
            case "old":
                $food = new PotatoFood;
            break;
            default:
                $food = new PizzaFood;
            break;        
        }     
    return $food;
    }
}

//concrete class that extends the abstract class
class PotatoFoodFactoryMethod extends AbstractFactoryMethod {
    private $context = "Potato";
    function foodToEat($param) {
        $food = NULL;
        switch ($param) {
            case "young":
                $food = new PotatoFood;
            break;      
            case "old":
                $food = new PizzaFood;
            break;
            case "older":
                $food = new SeaFood;
            break;
            default:
                $food = new PotatoFood;
            break;    
        }     
        return $food;
    }
}

abstract class Abstractfood {
    abstract function getType();
    abstract function getOrigin();
}

abstract class AbstractPHPfood {
    private $subject = "PHP";
}

class PizzaFood extends AbstractPHPfood {
    private $type;
    private $origin;
    private static $oddOrEven = 'odd';
    function __construct() {
        //alternate between 2 foods
        if ('odd' == self::$oddOrEven) {
            $this->type = 'Marinara:';
            $this->origin  = 'Italy';
            self::$oddOrEven = 'even';
        } else {
            $this->type = 'Margherita';
            $this->origin  = 'Austria'; 
            self::$oddOrEven = 'odd';
        }  
    }
    function getType() {return $this->type;}
    function getOrigin() {return $this->origin;}
}

class PotatoFood extends AbstractPHPfood {
    private $type;
    private $origin;
    function __construct() {
        //alternate randomly between 2 foods
        mt_srand((double)microtime()*10000000);
        $rand_num = mt_rand(0,1);      
 
        if (1 > $rand_num) {
            $this->type = 'chips';
            $this->origin  = 'kinangop';
        } else {
            $this->type = 'matoke';
            $this->origin  = 'Tanzania'; 
        }  
    }
    function getType() {return $this->type;}
    function getOrigin() {return $this->origin;}
}

class SeaFood extends AbstractPHPfood {
    private $type;
    private $origin;
    function __construct() {
      $this->type = 'sushi';
      $this->origin  = 'Japanese';
    }
    function getType() {return $this->type;}
    function getOrigin() {return $this->origin;}
}

  writeln('START TESTING FACTORY METHOD PATTERN');
  writeln('');

  writeln('testing PizzaFoodAbstract');
  $factoryMethodInstance = new PizzaFoodAbstract;
  testFactoryMethod($factoryMethodInstance);
  writeln('');

  writeln('testing PotatoFoodFactoryMethod');
  $factoryMethodInstance = new PotatoFoodFactoryMethod;
  testFactoryMethod($factoryMethodInstance);
  writeln('');

  writeln('END TESTING FACTORY METHOD PATTERN');
  writeln('');

  function testFactoryMethod($factoryMethodInstance) {
    $phpyoung = $factoryMethodInstance->foodToEat("young");
    writeln('young people food type: '.$phpyoung->getType());
    writeln('young  origin: '.$phpyoung->getOrigin());

    $phpyoung = $factoryMethodInstance->foodToEat("old");
    writeln('old php type: '.$phpyoung->getType());
    writeln('old php origin: '.$phpyoung->getOrigin());
 
    $phpyoung = $factoryMethodInstance->foodToEat("older");
    writeln('old php type: '.$phpyoung->getType());
    writeln('old php origin: '.$phpyoung->getOrigin());
  }

  function writeln($line_in) {
    echo $line_in."<br/>";
  }
?>


