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

        <form method="post">
            <input type="submit", name="button1", class="button" value="Show the result">
            <input type="submit", name="button2", class="button" value="Hide the result">
        
        </form>
        <?php
            
            

            if(array_key_exists('button1', $_POST))
            {
                
                button1();
                
            }
            else if(array_key_exists('button2', $_POST))
            {
                
                button2();
                
            }

            function button1()
            {
                echo "<br><br>";
                
                $conn = oci_connect("DHRUBO015", "dhrubo015", 'localhost/XE');
                if (!$conn) 
                {
                    $e = oci_error();
                    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
                }

                $stid = oci_parse($conn, 'SELECT * FROM Victim');
                oci_execute($stid);


                echo "<table border='4'>\n";
                while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) 
                {
                    echo "<tr>\n";
                    foreach ($row as $item) 
                    {
                        echo "    <td>" . ($item !== null ? htmlentities($item, ENT_QUOTES) : "&nbsp;") . "</td>\n";
                    }
                    echo "</tr>\n";
                }
                echo "</table>\n";

                

            }
            function button2()
            {
                echo "<br>";
            }
                
        ?>

        
        
      </section>

    <section class = "footeroption">
      <h2><?php echo "www.dbprojects.com"; ?></h2>
    </section>


  </div>

  
  </body>

</html>
