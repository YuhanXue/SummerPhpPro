<html>
<head>
	<title>practicum</title>
	<link rel="stylesheet" href="css/SignUp.css">
    <meta http-equiv = "content-type" content = "text/html; charset = utf-8" />
</head>

<body>
    <div id = "container">
        <?php
        include("includes/header_user.html");
       // include("/includes/privilege_check_admin.php");
        ?>
    </div>

    <?php
        if($_SERVER['REQUEST_METHOD']=='POST'){
	        $error = array();

	        if (!empty($_POST['user_name']))
		        $user_name= $_POST["user_name"];
	        else
		        $error[] = "Please enter username.";

	        if(!empty($_POST['user_password']))
	            $user_password=$_POST["user_password"];
	        else
	            $error[] = "Please enter password";

	        if(!empty($_POST['user_id']))
		        $user_id=$_POST["user_id"];
	        else
		        $error[] = "Please enter your id";

	        if(!empty($_POST['user_college']))
		        $user_college=$_POST["user_college"];
	        else
		        $error[] = "Please enter your college";

	        if(!empty($_POST['user_email']))
		        $user_email=$_POST["user_email"];
	        else
		        $error[] = "Please enter your email";

	        $user_degree=$_POST["user_degree"];
	        if(!empty($_POST['user_degree']))
	        {
		        if($user_degree == 'master')
			        echo "Master";
		        else if($user_degree == "bachelor")
			        echo "Bachelor";
		        else if($user_degree == "null")
                    echo "Null";
	        }
	        else
		        $error[] = "Please select your degree";

	        if (!empty($error)){
		        foreach ($error as $msg)
		        {
			        echo $msg;
			        echo '<br>';
		        }
	        }
	        else{
		        // Create connection
		        include("includes/db_connection.php");
		        $conn = new mysqli($servername, $username, $password, $db);
            }

            //check connection
            if($conn->connect_error){
	            die("Connection failed: " . $conn->connect_error);
            }

        }
    ?>

    <!--Start Form-->
    <div class="SignUpBox">
        <img src="" class="user">
        <h1 class=""> Sign Up</h1>

        <form class="" id="Form" method="post">
            <div id="username">
                <p>Username</p>
                <div id="box1">
                    <input type="text" id="Username" name="user_name" placeholder="Create a Username"
                    value=<?php if (isset($_POST['user_name'])) echo $_POST['user_name'] ?>>
                </div>
            </div>

            <div id="password">
                <p>Password</p>
                <div id="box2">
                    <input type="password" id="password" name="user_password" placeholder="Create a Password"
                    value=<?php if(isset($_POST['user_password'])) echo $_POST['user_password']?>>
                </div>
            </div>

            <div id="idnumber">
                <p>ID Number</p>
                <div id="box3">
                    <input type="text" id="id_number" name="user_id" placeholder="Please enter your ID number"
                           value=<?php if(isset($_POST['user_id'])) echo $_POST['user_id']?>>
                </div>
            </div>

            <div id="college">
                <p>College</p>
                <div id="box4">
                    <input type="text" id="college" placeholder="Please enter your college" name="user_college"
                           value=<?php if(isset($_POST['user_college'])) echo $_POST['user_college']?>>
                </div>
            </div>

            <div id="email">
                <p>Email</p>
                <div id="box5">
                    <input type="email" id="email" placeholder="Please enter your Email" name="user_email"
                           value=<?php if(isset($_POST['user_email'])) echo $_POST['user_email']?>>
                </div>
            </div>

            <div id="degree">
                <p>Academic Degree</p>
                <div class="select">
                    <select name="user_degree" id="degree" size="1">
                        <option value="null">Null</option>
                        <option value="bachelor">Bachelor</option>
                        <option value="master">Master</option>
                    </select>
                </div>

            <div id="submit">
                <input type="submit" name="" value="Register">
            </div>

        </form>
    </div>
</body>
</html>