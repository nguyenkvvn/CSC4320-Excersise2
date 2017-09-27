<html>
  <head>
    <title>Excersise 2 Example Form</title>
  </head>

  <body>
    <form action="E2-processor.php" method="post">
      <p>Title</p>
      <p><select name="title">
        <option value = "Mr">Mr</option>
        <option value = "Mrs">Mrs</option>
        <option value = "Ms">Ms</option>
        <option value = "Dr">Dr</option>
        <option value = "Prof">Prof</option>
      </select></p>

      <p>First Name</p>
      <p><input name = "firstname" type = "text" size = "20" /></p>
      <p>Last Name</p>
      <p><input name = "lastname" type = "text" size = "20" /></p>
      <p>Birth Year</p>
      <p><input name = "birthyear" type = "text" size = "4" /></p>
      <p>Address</p>
      <p><textarea name = "address" cols = "20" rows = "4"/></textarea></p>

      <p><input type = "submit" value = "Submit" name = "submit" /></p>
    </form>
  </body>
</html>
