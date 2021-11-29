<!DOCTYPE html>
<html>
    <head>
        <title>to jest PHP</title>
        <link rel="stylesheet" type="text/css" href="styles.css">
        <link rel="icon" type="image/x-icon" href="/img/icon.png">
        <script type = "text/javascript" src="javascript.js"></script>
    </head>
    <body>
        <div class="center" style="color: blue;">
            <?php echo "Hello " . $_GET["name"] . "<br>" ?>
            <?php echo "today is " . date("Y/m/d") . "<br>" ?>
        </div>
    </body>
</html>
