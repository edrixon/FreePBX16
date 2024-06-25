<!DOCTYPE html>
<html>

<head>

  <title>Reboot Yealink phone</title>

  <link rel="stylesheet" href="styles.css"

</head>

<body>

<div class="all">

  <hr>
  <div class="header"><h2>Reboot Yealink phone</h2></div>
  <hr>

  <?php include('buttons.php'); ?> 

  <div class="main">

    <br>
    <br>
    <form action="reboot.php" method="POST">
      <td>
        <label for="extn">Phone number (or 'all')</label>
        <input type="text" id="extn" name="extn">
      </td>
      <br><br>
      <td>
      <br><br>
      <input class="button button-submit" type="submit" name="reboot" value="Reboot now">
    </form>
    <br>

  </div>

  <?php include('footer.php'); ?>

</div>

</body>

</html>
