<?php
  $fonts = "verdana";
  $bgcolor = "#444";
  $fontcolor = "#eb9234";

 ?>


<!doctype html>

<html>
  <head>
    <title>Victim Registration</title>
    <style>
      body{
        font-family: <?php echo $fonts; ?>
      }

      .phpcoding{
        width: 900px; margin:0 auto; background: <?php echo "#ddd" ?>;
      }

      .headeroption, .footeroption{
        background: <?php echo $bgcolor; ?>; color: <?php echo $fontcolor; ?>; text-align: center; padding: 20px;
      }

      .headeroption h2, .footeroption h2{
        margin: 0;
      }

      .maincontent{
        min-height: 400px;
        padding: 20px;
      }

    </style>

  </head>
  <body>
    <div class = "phpcoding">

      <section class = "headeroption">
        <h2><?php echo "Victim Registration"; ?></h2>
      </section>

      <section class = "maincontent">

          <form method="POST">
            <p>Enter victim id :</p>
            <input type="text" name="name"><br/>
            <p>Enter name of the victim:</p>
            <input type="text" name="data1"><br/>
            <p>Enter location of the victim:</p>
            <input type="text" name="data2"><br/><br/>

            <input type="submit" name="submit_button" value="Submit">
          </form>
          <?php
          session_start();
          $conn = oci_connect("emonreza", "123654reza", "localhost/XE");
          if (!$conn) {
            $e = oci_error();
            trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
          } else {
            if (isset($_POST['submit_button'])) {
              if (!empty($_POST['name'])) {
                $id = $_POST["name"];
                $data = $_POST["data1"];
                $data2 = $_POST["data2"];

                $sql = "INSERT INTO Victim (id, name, location) VALUES('$id','$data','$data2')";
                $stid = oci_parse($conn, $sql);
                if (oci_execute($stid)) {
                  print "One row inserted";
                } else {
                  echo "Error!";
                }
                oci_free_statement($stid);
                oci_close($conn);
                exit();
              }
            }
          }
        ?>

      </section>

    <section class = "footeroption">
      <h5><?php echo "&copy; Copyright 2020"; ?></h5>
    </section>


  </div>
  </body>

</html>
