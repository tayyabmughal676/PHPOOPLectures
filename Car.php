<?php
/**
 * Copyright (c)  by Mr. Tayyab Mughal
 * Contact me:
 * Github : https://www.github.com/tayyabmughal676
 *  Email: tayyabmughal676@gmail.com
 *  Fiverr: https://www.fiverr.com/mrtayyabmughal
 *
 * 2020.
 */


/**
 * Topics
 * Class...
 * Class is a blueprint of doSomething in and reusable Code.
 * THIS Keyword
 * This keyword represent our current class/fun/method/etc. This help to access instance of class
 * and also variables/methods/other existence stuff
 * Encapsulation...
 *Getter and Setter is an example of encapsulation...
 *In Class we need to use variables or members function/method as private or protected.
 */
class Car
{

    private $mColor = 'Red';
    public $mWeight;
    public $mYear;
    private $isAvailable = [
        'Red', 'Green', 'Blue', 'White', 'Yellow'
    ];

//    Constructor & Destructor
   public function __construct()
   {
       // TODO: Implement __construct() method.
       echo "I'm from Synthetic Race ";

   }

    public function __destruct()
    {
        // TODO: Implement __destruct() method.
    }

    /**
     * @param mixed $mColor
     */
    public function setMColor($mColor): void
    {
        if (in_array($mColor, $this->isAvailable)) {
            $this->mColor = $mColor;
        }
    }

    /**
     * @return mixed
     */
    public function getMColor()
    {
        return $this->mColor;
    }

    /**
     * @param mixed $mYear
     */
    public function setMYear($mYear): void
    {
        $this->mYear = $mYear;
    }

    /**
     * @return mixed
     */
    public function getMYear()
    {
        return $this->mYear;
    }

}

$myCar = new Car();
$myCar->setMColor('');
$carColor = $myCar->getMColor();

//var_dump($myCar);

echo $carColor;

