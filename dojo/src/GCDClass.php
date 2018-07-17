<?php

/**
 * Created by PhpStorm.
 * User: sahug
 * Date: 11/04/16
 * Time: 2:12 PM
 */
class GCDClass
{

    /**
     * GCDClass constructor.
     */
    public function __construct()
    {
    }

    public function getGCD($n1,$n2)
    {
        if($n1== $n2)
            return $n1;
        else
            return $this->GCD_Finder($n1,$n2);
    }

    public function GCD_Finder($n1,$n2)
    {
        if(($n2%$n1==0))
            return $n1;
        else{
            echo "[$n1 => ".floor($n1/2)."]";
            for($i = floor($n1/2);$i>1;$i--){
                if($n2%$i==0 && $n1%$i==0){
                    return $i;
                }
            }
            return 1;
        }
    }

}

$a = '1';
var_dump($a);

$b = &$a;
var_dump($b);
$b = "2$b";

var_dump($b);


