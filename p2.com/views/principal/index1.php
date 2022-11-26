<?php
if (session_status() == 1) session_start();
require_once("models/producto.php");
require_once("controllers/producto_controller.php");
?>

<center>
    <h1>Productos</h1>
</center>
<hr>
<hr>
<div class="row w-100">
<?php

if (isset($_GET["id"])) {
    $obj = new producto($_GET["id"]);
    $resultado = $obj->valida_producto();
    $n = 8;

    foreach ($resultado as $r) {
        if(count($resultado) == $n){
            $n = 8;

        
?>
                    <div class="col">
                <div class="card" style="width:18rem;">
                    <img src="imágenes/p<?php echo $resultado["id_producto"]?>.jpg" alt="ImgIphone13" width="250" height="250">
                    <div class="card-body">
                    <h3><?php echo $resultado["descripcion"] ?></h3>
                        <p class="card-text">
                            Datos del producto
                        </p>
                        <h3><?php echo $resultado["costo"] ?></h3>
                        <button class="btn btn-success">COMPRAR</button>
                    </div>
                </div>
            </div>
<?php
    }

    }
} else {
    $resultado = producto::estemismo();
    foreach ($resultado as $r) {

    ?>
    
        
            <div class="col">
                <div class="card" style="width:18rem;">
                    <img src="imágenes/p<?php echo $r["id_producto"]?>.jpg" alt="ImgIphone13" width="250" height="250">
                    <div class="card-body">
                    <h3><?php echo $r["descripcion"] ?></h3>
                       <p class="card-text">
                            Datos del producto
                        </p>
                        <h3><?php echo $r["costo"] ?></h3>
                        <button class="btn btn-success">COMPRAR</button>
                    </div>
                </div>
            </div>
        

<?php
    }
}
?>
</div>
