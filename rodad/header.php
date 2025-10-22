 <style>
        *{
            padding: 0px;
            margin: 0px;
            box-sizing: border-box;
        }
        a{
            text-decoration: none;
        }
        body{
            background-color: #4CAF50;
            font-family: Tahoma;
        }
        header div{
            padding: 20px;
        }
        header a{
            color: white;
        }
        header{
            background-color: green;
            display: flex;
            color: white;
            justify-content: center;
            align-items: center;
        }
        footer{
            padding: 10px;
            text-align: center;
            background-color: forestgreen;
        }
        input{
            margin: 4px;
            padding: 8px;
            width: 100%
        }
         textarea{
            margin: 4px;
            padding: 8px;
            width: 100%
        }
        button{
            padding: 10px ;
        }

    </style>

    <header>
        <div><a href="index.php">Home</a></div>
        <div><a href="profile.php">Profile</a></div>

        <?php if(empty($_SESSION['info'])):?>
            <div><a href="login.php">Login</a></div>
            <div><a href="logout.php">Logout</a></div>
        <?php else:?>
            <div><a href="signup.php">Signup</a></div>
        <?php endif;?>
    </header>