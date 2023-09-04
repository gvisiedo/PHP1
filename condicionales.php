<?php

 $se_hablo_de_bruno = false;
?>;

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionales</title>
</head>
<body>


<!-- Esto no se debe hacer -->
<?php 
    if($se_hablo_de_bruno){

        echo "Si se hablo";
    }else{
        echo "No se hablo";
    }

?>;
    
<!-- Esto es aceptable -->

<?php if ($se_hablo_de_bruno) { ?>

     <b>🙂</b>
<?php } else{ ?> 
    
    <b>🤫</b>
    <?php } ?>;

<!-- Deberia hacerlo asi -->

<?php if($se_hablo_de_bruno): ?>
    <b>🙂</b>
<?php else: ?>
    <b>🤫</b>
<?php endif; ?>



</body>
</html>