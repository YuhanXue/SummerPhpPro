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

	        if (!empty($_POST['uname']))
		        $uname = $_POST["uname"];
	        else
		        $error[] = "Please enter username.";
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
                    <input type="text" id="college" placeholder="Please enter your college" name="college">
                </div>
            </div>

            <div id="email">
                <p>Email</p>
                <div id="box5">
                    <input type="email" id="email" placeholder="Please enter your Email" name="email">
                </div>
            </div>

            <div id="degree">
                <p>Academic Degree</p>
                <div class="select">
                    <select name="degree" id="degree">
                        <option value="Bachelor">Bachelor</option>
                        <option value="Master">Master</option>
                        <option value="Phd">Phd</option>
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