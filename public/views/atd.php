<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/lib/css/index.css">
    <title>ADD TO DO</title>
</head>
<body>
    <a href="/home"><input type="button" value="BACK""></a>
    <h1>ADD NEW TO DO LIST</h1>
    <div>
        <!-- <label for="todo">TODO: </label> -->
        <!-- <input type="text" id="todo" required> -->
        <textarea id="todo" placeholder="Type your to do list here..." maxlength="300" required></textarea>
    </div>
    <div>
        <label for="dtd">Date To Do: </label>
        <input type="date" id="dtd" required>
    </div>       
    <input type="button" value="ADD" onclick="addToDo()">
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="./public/lib/js/index.js"></script>
</html>