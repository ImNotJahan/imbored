<!-- I know it's not spelt cofe -->

<html>
  <head>
    <link rel="stylesheet" href="/styles.css">
    <title>cofe</title>
  </head>
  
  <body>
    <h3>cofe</h3>
    <img width="10%" src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/45/A_small_cup_of_coffee.JPG/1200px-A_small_cup_of_coffee.JPG">
    <iframe width=90% height=90% src="cofe.php?q=<?php echo min((isset($_GET["q"])?$_GET["q"]:1)+1, 33)?>>"/>
  </body>
</html>
