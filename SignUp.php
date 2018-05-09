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

	        if(!empty($_POST['user_degree']))
		        $user_degree=$_POST["user_degree"];
	        else
		        $error[] = "Please select your degree";
        }
    ?>

    <!--Start Form-->
    <div class="SignUpBox">
        <img src="" class="user">
        <h1 class=""> Sign Up</h1>

        <form class="" id="Form">
            <div id="username">
                <p>Username</p>
                <div id="box1">
                    <input type="text" id="Username" name="user_name" placeholder="Create a Username">
                </div>
            </div>

            <div id="password">
                <p>Password</p>
                <div id="box2">
                    <input type="password" id="password" name="user_password" placeholder="Create a Password" >
                </div>
            </div>

            <div id="idnumber">
                <p>ID Number</p>
                <div id="box3">
                    <input type="text" id="id_number" name="user_id" placeholder="Please enter your ID number" >
                </div>
            </div>

            <div id="college">
                <p>College</p>
                <div id="box4">
                    <input type="text" id="college" placeholder="Please enter your college" name="user_college">
                </div>
            </div>

            <div id="email">
                <p>Email</p>
                <div id="box5">
                    <input type="email" id="email" placeholder="Please enter your Email" name="user_email">
                </div>
            </div>

            <div id="degree">
                <p>Academic Degree</p>
                <div class="select">
                    <select name="user_degree" id="degree">
                        <option value="bachelor">Bachelor</option>
                        <option value="master">Master</option>
                    </select>
                </div>
            </div>

            <div id="submit">
                <input type="submit" name="" value="Register">
            </div>
        </form>
    </div>
</body>
</html>
