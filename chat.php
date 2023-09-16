<?php
    session_start(); // starting a new session. so we can store the messsges.
    //$msgArray = []; // empty array
    
    if (isset($_POST['username'])) {
        $_SESSION['user'] = $_POST['username'];
    }

    if (isset($_SESSION['user'])) { // isset diye variable set kora ki na ta check kori.
        if (isset($_POST['msg'])) { // client msg send korse kina.
            $_SESSION['messeges'][] = $_POST['msg']; // msg array te client theke asha msg store koresi
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
    <?php 
        if(!isset($_SESSION['user'])){
            echo '<form action="" method="post"><input type="text" name="username" id=""><button>Set Name</button></form>';
        }else{
            echo "<h1>Hello " . $_SESSION['user'] . "</h1>";
        }
    ?>
    <div>
        <?php 
        if (isset($_SESSION['user'])) { // isset diye variable set kora ki na ta check kori.
            foreach($_SESSION['messeges'] as $msg){ // msg array print korlam.
                echo '<p>';// result ta paragraph style e asbe
                echo $_SESSION['user'] . ': ';
                echo "$msg"; // msg variable print koresi
                echo '</p>'; //paragraph
            }
        }
        ?>
    </div>
    <div>
<label for="chat">Id name</label>
<input type="text" name="msg">
    </div>
    <form method="post"> <!-- this form will send the msg to server -->
        <input type="text" name="msg">
        <button>Send</button>
    </form>
</body>
</html>