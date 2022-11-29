<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WEB SOCKET</title>
</head>

<body>
</body>
<form action="#" method="post">
    <label for="text">Message :</label>
    <input type="text" name="text" id="text">
    <input type="submit" value="envoyer" id="btnsubmit">
</form>
<div id="chat"></div>

</html>

<script>
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
</script>