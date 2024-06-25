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

    <?php

        $mac=$_POST["mac"];
        $extn1=$_POST["extn1"];
        $extn2=$_POST["extn2"];
        $phone=$_POST["phonetype"];
        $fw=$_POST["firmware"];

        $cmd="/usr/local/bin/mkphone" . " " . $mac . " " . $phone . " " . $fw . " " . $extn1 . " " . $extn2;

        exec($cmd, $output, $result);
        if ($result ==  0) {
            echo "<p>Generated configuration file</p>";
        }
        else
        {
            echo "<p>Failed to generate configuration file</p>";
        }

    ?>

    <form action="phoneconfig.php">
      <input class="button button-submit" type="submit" value="OK">
    </form>

    <br>

  </div>

  <?php include('footer.php'); ?>

</div>

</body>

</html>
