<?php
  foreach ($alertas as $key => $mensajes):
    foreach($mensajes as $mensaje):
?>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../src/css/style_incio.css">
</head>
<body>
  <div class="alertas <?php echo $key; ?>">
    <?php echo $mensaje ?>
  </div>

  <!--<script class="alertas" type="text/javascript">alert("<?php$key; ?>
    <?php  $mensaje ?>");

</script>-->

</body>

<?php
    endforeach;
  endforeach;
?>