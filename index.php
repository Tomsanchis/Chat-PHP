<?php
session_start();
if (isset($_SESSION['username'])) {
    header('location:chat.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat - Web Socket</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h1>Chat En Ligne</h1>
    </header>
    <main>
        <form action="connect.php" method="post" id="form_connect">
            <div class='wrapper'>
                <label for="name">Name :</label>
                <input type="text" name="name" id="name">
            </div>
            <div class='wrapper'>
                <input type="submit" value="Connection" id="btn_submit">
            </div>
            <?php
            if (isset($_GET['loged']) && $_GET['loged'] == 'denied') { ?>
                <div class='wrapper'>
                    <span class="red">Connection Incorrect</span>
                </div>
            <?php }
            ?>
        </form>
    </main>
</body>

</html>