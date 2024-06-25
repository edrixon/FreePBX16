<!DOCTYPE html>
<html>

<head>

  <title>Phone line configuration</title>

  <link rel="stylesheet" href="styles.css"

</head>

<body>

<div class="all">

  <hr>
  <div class="header"><h2>Yealink phone configuration</h2></div>
  <hr>

  <?php include('buttons.php'); ?> 

  <div class="main">

    <br>
    <br>
    <form action="save.php" method="POST">
      <td>
        <label for="mac">MAC address</label>
        <input type="text" id="mac" name="mac">
      </td>
      <br><br>
      <td>
        <label for="phonetype">Phone type</label>
        <input type="text" id="phonetype" name="phonetype" value="T33G">
      </td>
      <br><br>
      <td>
        <label for="firmware">Firmware</label>
        <input type="text" id="firmware" name="firmware" value="124.86.0.75">
      </td>
      <br><br>
      <td>
        <label for="extn1">Phone number 1</label>
        <input type="text" id="extn1" name="extn1">
      </td>
      <br><br>
      <td>
        <label for="extn2">Phone number 2</label>
        <input type="text" id="extn1" name="extn2">
      </td>
      <br><br>
      <input class="button button-submit" type="submit" name="genConfig" value="Generate configuration file">
    </form>
    <br>

  </div>

  <?php include('footer.php'); ?>

</div>

</body>

</html>
