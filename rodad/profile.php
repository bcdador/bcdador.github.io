<?php

    require "functions.php";

    check_login();

?>
<!DOCTYPE html>
<html>  
<head>  
    <title>Profile - my website</title>
</head>
<body>  

   <?php include "header.php";?>

   <div style="margin: auto; max-width: 600px">

    <h2 style="text-align: center;">User Profile</h2>
    
    <table style="text-align: center;">
        <tr>
            <td><img src="img.jg" style="width: 150px; height: 150px; object-fit: cover;"></td>
        </tr>

        <tr>
            <td><?php echo $_SESSION['info']['username']?></td>
        </tr>
        <tr>
            <td><?php echo $_SESSION['info']['email']?></td>
        </tr>
    </table>
    <hr>
    <h5>Create a post</h5>
   <form method="post" style="margin: auto;padding:10px;">

    <textarea name="post" rows="8"></textarea><br>

   <button>Post</button>

   </form>
   
   <?php include "footer.php";?>

</body>
</html>
