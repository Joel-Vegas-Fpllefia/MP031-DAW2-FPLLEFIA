<?php
    include('../data/productos.php');

    function generate_table_products($productos){
            foreach($productos as $producto => $data){
            echo "<div class='producto-card'>
                    <div class='producto-nombre'>".$data['nombre']."</div>
                    <div class='producto-categoria'>".$data['categoria']."</div>
                    <div class='producto-descripcion'>".$data['descripcion']."</div>
                    <div class='producto-precio'>".$data['precio']."€</div>
                    <div class='producto-stock'>Stock: ".$data['stock']." unidades</div>
                </div>
                ";
        }
    }
   generate_table_products($productos);
?>