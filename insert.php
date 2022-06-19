<?php

include "config.php";
include "header.php";
include "google-api/vendor/autoload.php";
include "handle-google-login.php";


if (isset($_POST["submit"])) {

    // collecting info from form
    $name = $_POST["name"];
    $firstName = $_POST["firstName"];
    $email = $_POST["email"];
    $street = $_POST["street"];
    $zipCode = $_POST["zipCode"];
    $city = $_POST["city"];
    //creating query
    $sql = "INSERT INTO `user_data`( `name`, `firstName`, `email`, `street`, `zipCode`, `city`) 
    VALUES ('$name','$firstName','$email','$street','$zipCode','$city')";
    //excecuting query
    $result = mysqli_query($link, $sql);
    //verifying the excecuted query
    if ($result) {
        echo "RECORD ADDED SUCCESSFULL";
    } else {
        echo "Error adding record" . mysqli_error($link);
    }
}
?>


<body class="m-3 p-3 ">
    <div class="row">

        <div class="col-4 text-start">
            <i class="fa fa-user-circle-o fa-2x text-start "></i>
            <span CLASS="h4 "><?php echo $_SESSION['firstname']; ?> </span><br>
            <i class="fa fa-envelope fa-2x text-start"></i>

            <span CLASS="h4 "><?php echo $_SESSION['email'];; ?> </span>
        </div>
        <div class="col-6">
            <h1 class="">Insert the details in fill database</h1>
        </div>
        <div class="col-1">

            <a href="logout.php" class="btn btn-outline-danger "><b>LOGOUT</b></a>

        </div>
    </div>


    <form action="<?php
                    echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post" class="m-2 p-2 text-center">
        <div class="m-2 p2">
            <div class="m-2 p2">
                <label for="name">
                    <h4><b>Name:</b></h4>
                </label>
                <input type="text" name="name" required class="w-75">
            </div>
            <div class="m-2 p2">
                <label for="firstName">
                    <h4><b>First Name:</b></h4>
                </label>
                <input type="text" name="firstName" required class="w-75">
            </div>
            <div class="m-2 p2">
                <label for="email">
                    <h4><b>Email:</b></h4>
                </label>
                <input type="email" name="email" required class="w-75">
            </div>
            <div class="m-2 p2">
                <label for="street">
                    <h4><b>Street:</b></h4>
                </label>
                <input type="address" name="street" required class="w-75">
            </div>
            <div class="m-2 p2">
                <label for="zip-code">
                    <h4><b>Zip Code:</b></h4>
                </label>
                <input type="number" name="zipCode" required class="w-75">
            </div>
            <div class="m-2 p2">
                <label for="city">
                    <h4><b>City:</b></h4>
                </label>
                <select name="city" id="" class="form-selected">
                    <option value="Nairobi">Nairobi</option>
                    <option value="Mombasa">Mombasa</option>
                    <option value="Kisumu">Kisumu</option>
                    <option value="Eldoret">Eldoret</option>
                    <option value="Nakuru">Nakuru</option>
                    <option value="Kakamega">Kakamega</option>
                    <option value="Meru">Meru</option>
                    <option value="Maralal">Maralal</option>
                    <option value="Malindi">Malindi</option>
                    <option value="Kitale">Kitale</option>
                    <option value="Thika">Thika</option>
                    <option value="Machakos">Machakos</option>
                    <option value="Garissa">Garissa</option>
                    <option value="Voi">Voi</option>
                    <option value="Isiolo">Isiolo</option>
                    <option value="Busia">Busia</option>
                    <option value="Webuye">Webuye</option>
                    <option value="Nyahururu">Nyahururu</option>
                    <option value="Arthi River">Arthi River</option>
                    <option value="Kapsabet">Kapsabet</option>
                    <option value="Mumias">Mumias</option>
                    <option value="Lodwar">Lodwar</option>
                    <option value="Homa bay">Homa bay</option>
                    <option value="Narok">Narok</option>
                    <option value="Nandi Hills">Nandi Hills</option>
                    <option value="Marsabit">Marsabit</option>
                    <option value="Nanyuki">Nanyuki</option>
                    <option value="Limuru">Limuru</option>
                    <option value="Wajir">Wajir</option>
                    <option value="Taveta">Taveta</option>
                    <option value="Rumuruti">Rumuruti</option>
                    <option value="Lamu">Lamu</option>
                    <option value="Ol Kalau">Ol Kalau</option>
                    <option value="Kericho">Kericho</option>
                    <option value="Bungoma">Bungoma</option>
                    <option value="Kiambu">Kiambu</option>
                    <option value="Iten">Iten</option>
                    <option value="Kapenguria">Kapenguria</option>
                    <option value="Naivasha">Naivasha</option>
                    <option value="Nyeri">Nyeri</option>
                    <option value="Kisii">Kisii</option>
                    <option value="Kikuyu">Kikuyu</option>
                    <option value="Molo">Molo</option>
                    <option value="Bondo">Bondo</option>
                    <option value="Kahencha">Kahencha</option>
                    <option value="Mandera">Mandera</option>
                    <option value="Eldama Ravine">Eldama Ravine</option>
                    <option value="Maua">Maua</option>
                    <option value="Mariakani">Mariakani</option>
                    <option value="Oyugis">Oyugis</option>
                    <option value="Malaba">Malaba</option>
                </select>
            </div>
            <div class="m-2 p2 row text-center">
                <div class="col">
                    <input type="reset" name="reset" class="w-50 reset">

                </div>
                <div class="col">
                    <input type="submit" name="submit" class="w-50 submit">
                </div>
            </div>
        </div>
        <div class="row text-center mt-5">
            <div class="col  ">
                <div>
                    <a href="view.php" class="btn btn-outline-info w-75 a">update record in database</a>
                </div>
            </div>
            <div class="col ">
                <div>
                    <a href="view.php" class="btn btn-outline-info w-75 a">view records in database</a>
                </div>
            </div>
            <div class="col  ">
                <div>
                    <a href="view.php" class="btn btn-outline-info w-75 a">delete record in database</a>
                </div>
            </div>
        </div>

    </form>
</body>

</html>