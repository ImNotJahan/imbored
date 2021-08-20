<?php
$windows = isset($_GET["windows"]) ? $_GET["windows"] : 10;
for($k = 0; $k < $windows; $k++)
{
    echo '<img width="10%" src="https://aw930cdnprdcd.azureedge.net/-/media/andersenwindows/images/help-me-choose/100-series-picture-interior.png">';
}
?>

<html>
    <head>
       <link rel="stylesheet" href="/styles.css">
       <title>Windows <?php echo $windows; ?></title> 
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    
    <body>
        <form>
            <input type="hidden" name="windows" value="<?php echo $windows + 1; ?>">
            <input type="submit" value="Show me Windows <?php echo $windows + 1; ?>">
        </form>
    </body>
</html>
