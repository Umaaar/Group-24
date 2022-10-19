<!DOCTYPE html>

<head>
  <meta charset="utf-8">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
  <nav>
    <ul>
      <li style="margin-left:50px;"><a class="active" href="view.php">View</a></li>
      <li><a href="update.php">Edit</a></li>

      <li style="margin-left:170px;"><a href="index.php">Login</a></li>
      <li><a href="register.php">Register</a></li>
<?php
if (isset($_POST['submit'])) {
    $title = $_POST['text'];
    echo '<script> alert("Searching...");
    window.location.replace("view.php?keyprogramming='.$title.");</script>";
}
?>
     <form class="search" action="search.php" method="GET" style="max-width:300px;margin:auto;">
     <input type="text" placeholder="Search..." name="searchbar">
     <button id="searchbutton" name="searchbutton" type="submit"><a href="search.php?keyprogramming='.$_POST['text'].'">Search</a></button>
    </form>



    </ul>


  </nav>
</body>

</html>
