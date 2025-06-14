<?php

    echo '<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input, select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color:rgb(72, 200, 78);
}
button {
  background-color: rgb(206, 0, 0);
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  width: 100%;
}
button:hover {
  background-color: rgb(240, 94, 94);
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
</head>
<body>

<div class="container">
  <form action="/action_page.php">
    <label for="fname">Name*</label>
    <input type="text" id="fname" name="firstname" placeholder="e.g. Bob">
    <label for="email">Email*</label><br>
    <input type="text" name="email" id="email" placeholder="e.g. example@example.com">
    <label for="subject">Text*</label>
    <textarea id="subject" name="subject" placeholder="e.g. I have an issue with the login page." style="height:200px"></textarea>

    <input type="submit" value="Submit"><button type="button" onclick="window.history.back();">Cancel</button>
  </form>
</div>

</body>
</html>
';
?>
