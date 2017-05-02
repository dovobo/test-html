<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php $syscontact = snmpget("1.1.1.5", "flsblu", "system.SysContact."); ?>
    <?php echo $syscontact ?>
  </body>
</html>
