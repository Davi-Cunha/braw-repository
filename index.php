<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home</title>
    <?php include("./includes/link-paths-include.php"); ?>
    <link href="./general.css">
</head>
<body>

<!-- LOGIN OR REGISTER FORM -->

<div class="container">
    <div class="row">
        <div class="login-signin-box text-center">
            <form method="post" action="./homepage/homepage.php">
                <input type="email" placeholder="E-mail">
                <input type="password" placeholder="Password">
                <button type="submit">Submit</button>
            </form>
        </div>
    </div>
</div>


</body>
</html>
