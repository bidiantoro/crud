<?php
    //
    if(isset($_POST['Submit'])) {
        $_Name = $_POST['name'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];


        include_once("config.php");

    
        $result = mysqli_query($mysqli, "INSERT INTO users (name,email,mobile) VALUES ('$_Name','$email','$mobile')");

        echo "User added successfully. <a  href='index.php'>View Users</a>";
    }
    ?> 

<html>
<head>
    <title>Add Users</title>
</head>

<body>
    <button id="back"> <a href="index.php">Back to Home</a> </button>
    <br/><br/>

    <form action="add.php" method="post" name="form1" id="form1">
        <table width="25%" border="0">
            <tr> 
                <td>Name</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr> 
                <td>Email</td>
                <td><input type="text" name="email"></td>
            </tr>
            <tr> 
                <td>Mobile</td>
                <td><input type="text" name="mobile"></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>
    <script>
    
    // var back = document.getElementById("back");
//     var form_el = document.getElementById("form1");

// form_el.addEventListener("submit", function(evt) {
//     evt.preventDefault();
//     document.getElementById("back").style.display = "none";

// });
    </script>
</body>
</html>