<html>
<head> <title> Oracle demo </title></head>

<body>
     <?php
      $conn=oci_connect("system","123654reza","localhost/XE");
      if(!$conn)
            echo 'Failed';
      else
            echo 'Success. Alhamdulliah';

oci_close($conn);
?>

</body>
</html>