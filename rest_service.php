<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 07.10.2018
 * Time: 23:39
 */
function numbers()
{

    $n = $_POST['name'];

    $variants =  array();
    // $n = null;
    // $k = null;

    for( $i=0;$i<=$n/10;$i++)
        for( $j=0;$j<=$n/5;$j++)
            for( $c=0;$c<=$n/2;$c++)
                for( $d=0;$d<=$n;$d++)
                    if(10*$i+5*$j+2*$c+$d==$n)
                    {

                        $k++;
// echo 10*$i.' '.'+'.' '. 5*$j.'+'. 2*$c.'+'.$d;

                        
                        $stroka =  $k.' Номер решения'.'. '. ' Нужно '.$i.' Ведер по 10 литров'.'+ '.' '.$j.' Ведер по 5 литров'.' '.'+ '.$c.' Ведер по 2 литров'.' '.'+ '.$d.' Ведер по 1 литру'.'<br>';
                        $variants[$k] = $stroka;
// echo $stroka.'<br>';

                    }


//    echo "Вариантов решения данной задачи ".$k;
    $json = json_encode($variants);
    return $json;



}
echo numbers($_GET['name'].'<br>');


//numbers($k);

