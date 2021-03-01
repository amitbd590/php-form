<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- bootstrap -->
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <?php

$name=$age=$email=$website=$gender="";
$errName=$errAge=$errWebsite=$errGender=$errEmail="";

if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(empty($_POST["name"])){
        $errName = "Name Is Required!";
    }else{
       $name=valid($_POST["name"]); 
    }
    if(empty($_POST["age"])){
        $errAge = "Age is Required!";
    }else{
        $age=valid($_POST["age"]);
    }
    if(empty($_POST["email"])){
        $errEmail = "Email is Required!";
    }else{
        $email=valid($_POST["email"]);
    }
    if(empty($_POST["website"])){
        $errWebsite = "Website site is Required!";
    }else{
        $website=valid($_POST["website"]);
    }
    if(empty($_POST["gender"])){
        $errGender = "Gender is Required!";
    }else{
        $gender=valid($_POST["gender"]);
    }
    
    
    
    
}

function valid ($data){
    $data= trim($data);
    $data= stripslashes($data);
    $data= htmlspecialchars($data);
    return $data;
}

?>



    <section class="container">
        <nav>
            <h2>This is PHP Form</h2>
            <p>This is our all form control option!</p>
            <hr>
        </nav>
        <div>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                <table>
                    <tr>
                        <td>Name :</td>
                        <td><input type="text" name="name"><span style="color:red"><?php echo " ".$errName?></span></td>
                    </tr>
                    <tr>
                        <td>Age :</td>
                        <td><input type="text" name="age"><span style="color:red"><?php echo " ".$errAge?></span></td>
                    </tr>
                    <tr>
                        <td>Email :</td>
                        <td><input type="text" name="email"><span style="color:red"><?php echo " ".$errEmail?></span></td>
                    </tr>
                    <tr>
                        <td>Website :</td>
                        <td><input type="text" name="website"><span style="color:red"><?php echo " ".$errWebsite?></span></td>
                    </tr>
                    <tr>
                        <td>Gender :</td>
                        <td><input type="radio" name="gender" value="female">Female
                            <input type="radio" name="gender" value="male">Male
                            <span style="color:red"><?php echo " ".$errGender?></span>  <td/>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <!-- <p class="btn btn-button btn-success" type="submit" value="submit" name="submit">Submit</p> -->
                            <input class="btn btn-success" type="submit" value="submit" name="submit">
                            
                        </td>
                    </tr>
                </table>
            </form>
        </div>
        <div>
            <h4>You are provide this data :</h4>
            <?php 
            echo $name ."<br/>";
            echo $age ."<br/>";
            echo $email ."<br/>";
            echo $website ."<br/>";
            echo $gender ."<br/>";
        ?>
        </div>
    </section>



    <!-- bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>
    <!-- bootstrap -->
</body>

</html>