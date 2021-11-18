<?php

$input = array(2,1,1,2,2,3,4,5,5);

echo "<br>INITIAL ARRAY...:";

print_r($input);
echo "<hr>";
simpleWay_array_unique($input);
echo "<hr>";
simpleWay_loop($input);
echo "<hr>";

// SIMPLE WAY TO REMOVE DUPLICATES - USING ARRAY_UNIQUE FUNCTION
function simpleWay_array_unique($input){
    echo "USING ARRAY UNIQUE:";

    print_r(array_unique($input)); 
}

// SIMPLE WAY TO REMOVE DUPLICATES - USING LOOPING
function simpleWay_loop($input){
    echo "USING LOOP:";

    $result = array();

    foreach ($input as $key => $value){

      echo "<p style='color:red'>REMOVE:</a>" .  $value . "\n</p>";

      if(!in_array($value, $result))
        $result[$key]=$value;
        if(!$result[$key] == null){
            echo "<p style='color:blue'> OK:" .  $result[$key] . "\n</p>";
        }
    }
    print_r($result); 

}

?>