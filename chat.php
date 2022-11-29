<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('location:index.php?loged=denied');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat En Ligne</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h1>Welcome <?php echo "<span class='white'>" . $_SESSION['username'] . "</span>"; ?> to the chat !</h1>
        <a id='btn_disconnect' href="disconnect.php">Disconnect</a>
    </header>
    <main>
        <div id="chat">
            <p>test</p>
            <p>test</p>
            <p>test</p>
            <p>test</p>
            <p>test</p>
        </div>
    </main>
</body>

</html>