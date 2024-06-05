<?php include("connection.php"); ?>
<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width-device-width, initial-scale=1.0">
        <title>All Products - Redstore</title>
        <link rel="stylesheet" href="style.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
        <!--added a cdn link by searching font awesome4 cdn and getting this link from https://www.bootstrapcdn.com/fontawesome/ this url*/-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    </head>


    <body>
        <!--<div class ="header">-->
        <div class="container">
            <div class="navbar">
                <div class="logo">
                    <a href="index.html"><img src="images/logo.png" width="125px"></a>
                </div>
                 <nav>
                    <ul id="MenuItems">
                        <li><a href="index.html">Home</a></li>
                         <li><a href="products.html">Products</a></li>
                         <li><a href="">About</a></li>
                         <li><a href="">Contact</a></li>
                         <li><a href="account.html">Account</a></li>

                    </ul>
                </nav>
                <a href="cart.html"><img src="images/cart.png" width="30px" height="30px"></a>
                <img src="images/menu.png" class="menu-icon" onClick="menutoggle()" >
            </div>
           
        </div>
    <!--</div>-->
    
        
        <!------------------------------ account-page details------------------------------>


        <div class="account-page">
            <div class="container">
                <div class="row">
                    <div class="col-2">
                        <img src="images/image1.png" width="100%">
                    </div>
                    <div class="col-2">
                        <div class="form-container">
                            <div class="form-btn">
                                <span onclick="login()">Login</span>
                                <span onclick="register()">Register</span>
                                <hr id="Indicator">
                            </div>
                            <form id="LoginForm">
                                <input type="text" placeholder="username">
                                <input type="password" placeholder="password">
                                <button type="submit" class="btn">Login</button>
                                <a href="">Forgot password</a>
                            </form>
                            
                            <form action="#" method="POST" onsubmit="return validateForm()">
        <input type="text" id="Name" name="fullname" placeholder="Name">
        <p class="error" id="nameerror"></p>
        <input type="text" id="email_id" name="email" placeholder="Email">
        <p class="error" id="emailerror"></p>
        <input type="password" id="pwd" name="password" placeholder="Password">
        <p class="error" id="passerror"></p>
        <input type="password" id="confirmPassword" name="cpassword" placeholder="Confirm Password">
        <p class="error" id="confirmpasserror"></p>
        <br>
        <button type="submit" name="register">Sign Up</button>
        <p>Already have an account? <a href="signin.html">Sign In</a></p>
        <a href="hompage.html">Go back to Home</a>
        </form>
                        </div>
                    </div>
                </div>
                    
            </div>
        </div>




    <!----------------------------------footer------------------------------------->




    <div class ="footer">
        <div class="container">
            
            <div class="row">
                <div class="footer-col-2">
                    <img src="images/logo-white.png">
                    <p>Our Purpose Is To Sustainably Make the Pleasure and Benefits of Sports Accessible to the Many.</p>
                </div>
                <div class="footer-col-3">
                    <h3>Useful Links</h3>
                   <ul>
                       <li>Coupons</li>
                       <li>Blog Post</li>
                       <li>Return Policy</li>
                       <li>Join Affiliate</li>
                    </ul>
                </div>
                <div class="footer-col-4">
                    <h3>Follow us</h3>
                   <ul>
                       <li>Facebook</li>
                       <li>Twitter</li>
                       <li>Instagram</li>
                       <li>Youtube</li>
                    </ul>
                </div>
                
            </div>
            
            <hr><!--horizontal line-->
            
        </div>
    </div>
        


        
        <!-----------------------------------js for toggle menu-------------------------------------->
    
    
    
    
    <script>
            var menuItems=document.getElementById("MenuItems");
            
            MenuItems.style.maxHeight="0px";
            function menutoggle(){
                if(MenuItems.style.maxHeight == "0px"){
                    MenuItems.style.maxHeight="200px";
                }
                else{
                    MenuItems.style.maxHeight="0px";
                }
            }
        </script>

    <script>
        
        function validateForm() {
            document.getElementById("nameerror").innerHTML = "";
            document.getElementById("emailerror").innerHTML = "";
            document.getElementById("passerror").innerHTML = "";
            document.getElementById("confirmpasserror").innerHTML = "";

            var email = document.getElementById("email_id").value;
            var email_arr = email.split("@");

            var name_entered = document.getElementById("Name").value;
            var name_arr = name_entered.split("");

            if (name_arr.length === 0) {
                document.getElementById("nameerror").innerHTML = "Name cannot be left empty!";
                return false;
            }

            for (var i = 0; i < name_arr.length; i++) {
                if (!(name_arr[i] >= 'A' && name_arr[i] <= 'Z' || name_arr[i] >= 'a' && name_arr[i] <= 'z'||name_arr[i]==" ")) {
                    document.getElementById("nameerror").innerHTML = "Name can contain only letters, not digits or symbols!";
                    return false;
                }
            }

            if(email.split("")==""||email.split("")==null){
                document.getElementById("emailerror").innerHTML = "Email cannot be left empty!";
                return false;

            }
            
            if (email_arr.length === 2) {
                var email_name = email_arr[0];
                var email_name_arr = email_name.split("");
                for (var i = 0; i < email_name_arr.length; i++) {
                    if (!(email_name_arr[i] >= 'A' && email_name_arr[i] <= 'Z' || email_name_arr[i] >= 'a' && email_name_arr[i] <= 'z' || email_name_arr[i] >= '0' && email_name_arr[i] <= '9' || email_name_arr[i] === '.')) {
                        document.getElementById("emailerror").innerHTML = "Email name can contain only letters, digits or '.', not special characters!";
                        return false;
                    }
                }

                var domain = email_arr[1];
                var domain_arr = domain.split('.');

                if (domain_arr.length >= 2) {
                    for (var i = 0; i < domain_arr.length; i++) {
                        if (domain_arr[i] === "" || domain_arr[i] === null) {
                            document.getElementById("emailerror").innerHTML = "Domain cannot be blank!";
                            return false;
                        } else {
                            var domain_part = domain_arr[i];
                            var domain_part_arr = domain_part.split("");
                            for (var j = 0; j < domain_part_arr.length; j++) {
                                if (!(domain_part_arr[j] >= 'A' && domain_part_arr[j] <= 'Z' || domain_part_arr[j] >= 'a' && domain_part_arr[j] <= 'z')) {
                                    document.getElementById("emailerror").innerHTML = "Domain parts can only contain letters!";
                                    return false;
                                }
                            }
                        }
                    }
                } else {
                    document.getElementById("emailerror").innerHTML = "Domain name must contain at least 2 parts separated by a dot!";
                    return false;
                }
            } else {
                document.getElementById("emailerror").innerHTML = "Email can contain only 2 parts separated by an @!";
                return false;
            }

            var password = document.getElementById("pwd").value;
            var password_arr = password.split("");
            var letter_counter = 0;
            var num_counter = 0;
            var capital_counter = 0;

            if (password_arr === "" || password_arr === null) {
                document.getElementById("passerror").innerHTML = "Password cannot be empty!";
                return false;
            }

            if (password_arr.length >= 8) {
                for (var i = 0; i < password_arr.length; i++) {
                    if (!(password_arr[i] >= 'A' && password_arr[i] <= 'Z' || password_arr[i] >= 'a' && password_arr[i] <= 'z' || password_arr[i] >= '0' && password_arr[i] <= '9')) {
                        document.getElementById("passerror").innerHTML = "Password can only contain letters and digits, not special characters!";
                        return false;
                    }

                    if (password_arr[i] >= 'A' && password_arr[i] <= 'Z' || password_arr[i] >= 'a' && password_arr[i] <= 'z') {
                        letter_counter++;
                        if (password_arr[i] >= 'A' && password_arr[i] <= 'Z') {
                            capital_counter++;
                        }
                    } else if (password_arr[i] >= '0' && password_arr[i] <= '9') {
                        num_counter++;
                    }
                }

                if (capital_counter === 0 || num_counter === 0 || letter_counter === 0) {
                    document.getElementById("passerror").innerHTML = "Password must be alphanumeric and must contain at least 1 capital letter";
                    return false;
                }
            } else {
                document.getElementById("passerror").innerHTML = "Password must contain at least 8 characters!";
                return false;
            }

            var confirmPassword = document.getElementById("confirmPassword").value;

            if (confirmPassword !== password) {
                document.getElementById("confirmpasserror").innerHTML = "Passwords do not match!";
                return false;
            }

            return true; 
        }
   
        
    </script>



</body>
</html>

<?php
if(isset($_POST['register'])) {
    // Check if form fields are set and not empty
    if(isset($_POST['fullname'], $_POST['email'], $_POST['password'], $_POST['cpassword']) &&
        !empty($_POST['fullname']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['cpassword'])) {

        // Assign form data to variables
        $fname = $_POST['fullname'];
        $email = $_POST['email'];
        $pwd = $_POST['password'];
        $cpwd = $_POST['cpassword'];

        // Add your JavaScript validation here

        // Prepare and bind SQL statement
        $query = "INSERT INTO form (fname, email, pwd, cpwd) VALUES (?, ?, ?, ?)";
        $stmt = $connect->prepare($query);
        $stmt->bind_param("ssss", $fname, $email, $pwd, $cpwd);

        // Execute the statement
        if ($stmt->execute()) {
            echo "Data inserted";
        } else {
            echo "Data not inserted";
        }

        // Close statement and connection
        $stmt->close();
    } else {
        echo "All fields are required.";
    }
}
?>
