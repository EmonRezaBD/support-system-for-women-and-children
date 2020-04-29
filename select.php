<?php
  $fonts = "verdana";
  $bgcolor = "#444";
  $fontcolor = "#eb9234";

 ?>


<!doctype html>

<html>
  <head>
    <title>List of Victims</title>
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
        <h2><?php echo "List of Victims"; ?></h2>
      </section>

      <section class = "maincontent">
        <?php


          $conn = oci_connect("emonreza", "123654reza", 'localhost/XE');
          if (!$conn) {
            $e = oci_error();
            trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
          }

          $stid = oci_parse($conn, 'SELECT * FROM Victim');
          oci_execute($stid);


          echo "<table border='1'>\n";
          while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
            echo "<tr>\n";
            foreach ($row as $item) {
                echo "    <td>" . ($item !== null ? htmlentities($item, ENT_QUOTES) : "&nbsp;") . "</td>\n";
            }
            echo "</tr>\n";
          }
          echo "</table>\n";

          ?>
      </section>

    <section class = "footeroption">
      <h2><?php echo "www.dbprojects.com"; ?></h2>
    </section>


  </div>
  </body>

</html>
