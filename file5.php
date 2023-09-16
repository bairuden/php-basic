<?php
// eikhane php script likhben.
$wrong_pass = false;
//akta variable nisi jar value disi false
if (isset($_POST['secret'])) {
    // isset diye check kori kono variable er value ase kina.
    $secret = $_POST['secret'];
   
    if ($secret == 'alu') {
        echo 'welcome ' . $_POST['name'];
        $wrong_pass = false;
    } else {
        $wrong_pass = true;
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- ei page e ki banaben?
    login form.
    prothome html likhben. -->

    <form method="post">
        <label for="">Name:</label>
        <input type="text" name="name">
        <br>
        <label for="">Password:</label>
        <input type="password" name="secret">
        <br>
        <?php if ($wrong_pass) echo "wrong credentials" ?>
        <br>
        <button>Login</button>
    </form>
</body>

</html>