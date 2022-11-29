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

<!-- <script>
    var conn = new WebSocket('ws://localhost:8080');
    conn.onopen = function(e) {
        console.log("Connection established!");
    };

    conn.onmessage = function(e) {
        if (e.data !== undefined) {
            document.querySelector('#chat').innerHTML += `<p>${e.data}</p>`;
        }
    };

    document.querySelector('#btnsubmit').addEventListener('click', (e) => {
        e.preventDefault()
        const text = document.querySelector('#text').value
        if (text !== "") {
            document.querySelector('#chat').innerHTML += `<p>${text}</p>`;
            conn.send(text)
        }
    })
</script> -->