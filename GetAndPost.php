<!-- $_Get , $_Post = Special variables used to collect data from an HTML form
                       data is sent to the file in the action attribute of <form>
                         <form action = "Some_file.php" method = "get"</form> -->

<!-- $_Get = Data is appended to the Url 
             NOT Secure 
             Char Limit 
             Bookmark is Possible w/ values
             GET requests can be cached
             Better for a Search page -->

<!-- $_POST = Data is packed inside the body of the HTTP request
              MORE SECURE 
              No Data limit 
              Cannot bookmark
              GET Requests are not cached
              Better for submitting credentials -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <form action="GetAndPost.php" method="post">
            <label>username:</label> <br>
            <input type="text" name="username"> <br>
            <label>password:</label> <br>
            <input type="password" name="password"> <br>
            <input type="submit" value="Log in">
    </form> -->
    <form action="GetAndPost.php" method="post">
        <label>Quantity : </label><br>
        <input type="text" name="Quantity">
        <input type="Submit" value="total">

    </form>
</body>
</html>

<?php
    // echo "{$_POST["username"]} <br>" ;
    // echo "{$_POST["password"]} <br>" ;
    $item = "Lemon Paneer";
    $price = "150";
    $quanity = $_POST["Quantity"];  
    $total = null;
    $total = $quanity * $price;
    echo "You have ordered {$quanity} * {$item}s <br>";
    echo "Your total is : \${$total}";
?>