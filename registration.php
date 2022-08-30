<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Registarion Form</title>
</head>

<body>
    <section>
        <div class="imgBx">
            <img src="images/bg.jpg">
        </div>
        <div class="contentBx">
            <div class="formBx">
                <h2>Registarion</h2>
                
                <form action="function.php" method="POST">
                    <div class="inputBx">
                        <span>First Name</span>
                        <input type="text" name="fname">
                    </div>
                    <div class="inputBx">
                        <span>Last Name</span>
                        <input type="text" name="lname">
                    </div>
                    <div class="inputBx">
                        <span>Email</span>
                        <input type="email" name="email">
                    </div>
                    <div class="inputBx">
                        <span>Password</span>
                        <input type="password" name="pass">
                    </div>
                    <div class="inputBx">
                        <input type="submit" value="Submit">
                    </div>
                    <div class="inputBx">
                        <p>Alredy have an account? <a href="#">Sign In</a></p>
                    </div>
                </form>

            </div>
        </div>
    </section>
</body>
</html>