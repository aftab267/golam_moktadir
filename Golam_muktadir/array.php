<?php
    
    $aftab="my name is aftab";
    echo $aftab;
    //numeric or indexed array
    $array=array('volvo','toyota','bmw');
    echo "<br><br>";
    echo $array[2];
    echo $array[0];
    echo $array[1];

    //associative array
    $data=array('fathers_name'=>'kazi mostafizur rahman',
                 'mathers_name'=>'Awlia begum');
                  echo $data['mathers_name'].$data['fathers_name'];

    //multidimentional array
                  $multi=array('fathers_name'=>'kazi mostafizur rahman','mathers_name'=>'Awlia begum','address'=>array('village'=>'kazibari','tana'=>'kazikosba','district'=>'munsigong'));
                  echo $multi['address']['tana'];
                  

    ?>