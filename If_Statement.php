<?php
    // If statement = if , if condition is true , do something , 
                    //   if , if condition is false , don't do nothing

        // $age = 101;
        // if($age >= 18)
        //     {
        //         echo "You may enter this site";
        //     }
        //     elseif($age <= 0){
        //         echo "It's not a valid age";
        //     }
        //     elseif($age >=100){
        //         echo "You are too old..";
        //     }
        //     else {
        //         echo "You are not eligible";
        //     }

        // $adult = false;
        // if($adult ==true){
        //     echo " You may enter this site";
        // }
        // else{
        //     echo "You must be adult to enter this site";
        // }

        $hours =  50;
        $rate = 15;
        $weekly_pay=null;
        
        if($hours <=0){
            $weekly_pay =0;
        }
        elseif($hours <=40){
            $weekly_pay = $hours * $rate;
        }
        else{
            $weekly_pay = ($rate * 40) + (($hours-40) * ($rate * 1.5));
        }

        echo "You made \${$weekly_pay} this week";
?>