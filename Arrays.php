<?php
    // Array => "Variable" which can hold more than one value at a time 

    $foods = array("apple", "Orange" , "Banana" , "Coconut");
    // echo $foods[0]. "<br>";
    //  echo $foods[1]. "<br>";
    //  echo $foods[2]. "<br>";
    //  echo $foods[3]. "<br>";
    //  echo $foods[4]. "<br>";

    // Foreach loop we use for Array , we use foreach if array index is more than 10 or 100 where we won't access arrayname[100] like this , instead we use foreach for Arrays , also in "React we use Map() " for accessing array elements

    // $foods[0] = "pineapple";
    // Push function is used to add an element at the end of an array
    // array_push($foods , "Strawberry", "Kiwi");
    
    // Pop() function will remove the last element in an array 
    // array_pop($foods); 

    // Shift() => It will remove the first element in an array then shift all of the element over by one 
    // array_shift($foods);

    // TO reverse an Array

    // $foods = array_reverse($foods);

    echo count($foods);
    foreach ($foods as $food) {
        echo $food . "<br>";
    }

?>