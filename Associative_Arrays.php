<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="Associative_Arrays.php" method="post">
        <label>Enter a country</label>
        <input type="text" name="country">
        <input type="submit">
    </form>
</body>
</html>

<?php
    // Associative array = An array made of key => Value pairs

    // Countries => Capitals
    // id = username
    // item = price

    $capitals = array("USA"=>"Washington D.C.", 
                      "Japan"=>"Kyoto", 
                      "South Korea"=>"Seoul", 
                      "India"=>"New Delhi");

           
           $capital =  $capitals[$_POST["country"]]; 
            echo "The capital is  {$capital}";


        // Updting key value pair
        // $capitals["USA"] = "Las Vegas";

        // To add a new key value pair we will access our associative array add a set of square brackets "" then place a new key within the set of quotes within the square brackets 
        // $capitals["China"] = "Beijing";

        // POP() function will remove the last element of an array 
        // array_pop($capitals);

        // Shift() = > it will remove the first element
        // array_shift($capitals);

        // Note : "If you ever need all of these keys present inside associative array there is an Array keys function"

        // $keys = array_keys($capitals);

        // foreach($keys as $key){
        //     // echo $key . "<br>";
        //     echo "{$key} <br>";
        // }

        // $values = array_values($capitals);
        //     foreach($values as $value){
        //         echo $value . "<br>";
                    // echo "{$value} <br>";
        //     }

        // You can flip the keys and values by using flip()
        // $flips = array_flip($capitals);
        // foreach($flips as $key => $value){
        //     echo "{$key} => {$value} <br>";
        // }

        // Reverse() = >If you need to use reverse order of your pairs , then you will need to use Reverse()

        // $capitals = array_reverse($capitals);
        // foreach ($capitals as $key => $value) {
        //     echo "{$key}=>{$value} <br>";
        // }

        // If you need the amount of key value pairs , then you can use count()
                // echo count($capitals);





    // echo $capitals["India"];
    // To print all the key value paris of Associative Array we use foreach loop


    // Here suppose if we have not used Associative array then foreach syntax would be foreach($capitals as $capital){
            // echo $capital }

    // Hence we have used here Associative array so syntax would be foreach($capitals as $key => $value){
    // echo "{$key}=>{$value} <br>"}

    // foreach($capitals as $key => $value){
    //             echo "{$key} =>{$value} <br>";
    // }
?>