<!DOCTYPE html>
<html>

<head>
  <title>Reboot phone</title>

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

    <?php

        $extn=$_POST["extn"];

        $cmd="/usr/local/bin/rebootphone" . " " . $extn;

        exec($cmd, $output, $result);
        if ($result ==  0) {
            echo "<p>Sent reboot message</p>";
        }
        else
        {
            echo "<p>Failed to send reboot message</p>";
        }

    ?>

    <form action="rebootphone.php">
      <input class="button button-submit" type="submit" value="OK">
    </form>

    <br>

  </div>

  <?php include('footer.php'); ?>

</div>

</body>

</html>
