<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/flexboxgrid.min.css">
    <title>Github profile finder</title>
</head>
<body>
    <div class="cover">  
    <header id="mainhead" class="center-xs middle-xs">
        <h1>Search for Profile .. </h1>
    </header>
    <form id="inputform" class="center-xs" action="view.php" method="post">
        <input type="text" placeholder="enter profile id .. " name="id" id="pinput">
        <button type="submit" name="submit">Search</button>
    </form>
</div>
    <!-- JavaScript -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.10/js/all.js" integrity="sha384-slN8GvtUJGnv6ca26v8EzVaR9DC58QEwsIk9q1QXdCU8Yu8ck/tL/5szYlBbqmS+"
        crossorigin="anonymous"></script>
    <script src="js/main.js"></script>
</body>
</html>