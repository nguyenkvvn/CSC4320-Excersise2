<html>
  <head>
    <title>Excersise 2 Processor</title>
  </head>

  <body>
    <?php
      $title = $_POST['title'];
      $firstname = $_POST['firstname'];
      $lastname = $_POST['lastname'];
      $birthyear = $_POST['birthyear'];
      $address = $_POST['address'];
      $thisyear = date(Y);
      $age = $thisyear - $birthyear;
      echo "<p>Hello $title. $firstname $lastname of $address.</p>";
      echo "<p>You are $age this year.";
    ?>
  </body>

</html>
