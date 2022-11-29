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
        <h1>Welcome <?php echo "<span class='white'>" . htmlentities($_SESSION['username'], ENT_QUOTES) . "</span>"; ?> to the chat !</h1>
        <a id='btn_disconnect' href="disconnect.php">Disconnect</a>
    </header>
    <main>
        <div id="chat">
            <div id="messages"></div>
            <form action="#" method="post">
                <label for="text">Message :</label>
                <input type="text" name="text" id="text">
                <input type="submit" value="Envoyer" id="btnsubmit">
            </form>
        </div>
    </main>
</body>

</html>



<script>
    var conn = new WebSocket('ws://localhost:8080');
    conn.onopen = function(e) {
        console.log("Connection established!");
    };

    conn.onmessage = function(e) {
        if (e.data !== undefined) {
            document.querySelector('#messages').innerHTML += `<p>${e.data}</p>`;
        }
    };

    document.querySelector('#btnsubmit').addEventListener('click', (e) => {
        e.preventDefault()
        const text = document.querySelector('#text').value
        if (text !== "") {
            let name = `<?php echo $_SESSION['username'] ?>`;
            let text_content = '<p>' + name + ': ' + `${text}</p>`;
            const sender = document.querySelector('#messages').innerHTML += text_content;
            conn.send(text_content)
        }
    })
</script>