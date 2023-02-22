<html>
   <head>
      <title>Stock d'images</title>
   </head>
   <body>
      <?php
         include ("config.php");
         $req = "SELECT img_nom, img_id " .
                "FROM images ORDER BY img_nom";
        $ret=$conn->query($req) or  die($conn->error);
        while($col = mysqli_fetch_array($ret)  )
         {
             echo "<center><a href=\"apercu.php?id=" . $col[1] . "\">" . $col[0] . "</a><br /></center>";
         }
      ?>
   </body>
</html>