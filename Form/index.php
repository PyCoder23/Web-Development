<!DOCTYPE html>
<html lang="en-UK">
    <head>
        <meta charset="utf8">
        <title> Form </title>

        <style>
            body{
                background-color: blue;
                padding-left: 3%;
                color:white;
                font-size: larger;
                font-weight: bold;
            }

            h1 {
                font-family:'Times New Roman', Times, serif;
            }

            form {
                font-family :Arial, Helvetica, sans-serif;
            }
            
            div {
                border-width:25px;
                text-align: left;
                background-color:blue;
                max-height: 200px;
                padding-left: 30px;
            }

        </style>
    </head>

    <body>
        <h1>
            Form
        </h1>
        <form action = "http://192.168.56.1/welcome" method="GET"> 

            <?php
                $nameV = $_GET['nameI'];
                $emailV = $_GET['emailI'];
                $genderV = $_GET['genderI'];
                $passV = $_GET['passI'];
                $dobV = $_GET['dobI'];
                $hobbyV = $_GET['hobbyI'];
                $countryV = $_GET['countryI'];
                $cityV = $_GET['cityI'];
            ?>

            <div> 
                <label style = "color:black" for="Name">Name : </label>
                <i> <label width = " for="Value"><?php echo $nameV?></label> </i>
            </div> <br>

            <div> 
                <label style = "color:black" for="Email">Email : </label>
                <i> <label for="Value"><?php echo $emailV?></label> </i>
            </div> <br>

            <div> 
                <label style = "color:black" for="Password">Password : </label>
                <i> <label for="Value"><?php echo $passV?></label> </i>
            </div> <br>

            <div> 
                <label style = "color:black" for="Gender">Gender : </label>
                <i> <label for="Value"><?php echo $genderV?></label> </i>
            </div> <br>

            <div> 
                <label style = "color:black" for="DOB">DOB : </label>
                <input type= "date" value = <?php echo $dobV?> id = "DobW" name ="dobI" readonly>
            </div> <br>

            <div> 
                <label style = "color:black" for="Hobby">Hobby : </label>
                <i> <label for="Value"><?php echo $hobbyV?></label> </i>
            </div> <br>

            <div> 
                <label style = "color:black" for="Country">Country : </label>
                <i> <label for="Value"><?php echo $countryV?></label> </i>
            </div> <br>

            <div> 
                <label style = "color:black" for="City">City : </label>
                <i> <label for="Value"><?php echo $cityV?></label> </i>
            </div> <br>


            <i> <h1 style = "color:white; font-size: larger; background-color:blue; width:fit-content;"> Registration Successful!</h1></i>
        </form>
        
        <?php
            $con = mysqli_connect("localhost", "USERNAME", "PASSWORD", "DATABASE_NAME");
            $sql = 'INSERT INTO credentials (Name, Email, Password, Gender, DOB, Hobby, Country, City) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?)';
            $conn->execute_query($sql, [$nameV, $emailV, $passV, $genderV, $dobV, $hobbyV, $countryV, $cityV]);
            mysqli_close($con);
        ?>

</html>
