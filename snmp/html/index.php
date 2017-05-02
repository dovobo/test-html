<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>


    <?php

    $ip="1.1.1.5";
    $com="2748638";

    $syscontact = snmpget($ip,$com ,"system.SysContact.");

    echo $syscontact;
    ?>
  </body>
</html>
