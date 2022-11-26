
<h1>Resultado de Búsqueda</h1>


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