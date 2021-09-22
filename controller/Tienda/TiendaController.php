<?php
    include_once '../model/Tienda/TiendaModel.php';

    class TiendaController {

        public function catalogo() {
            $obj = new TiendaModel();

            $sql = "SELECT Pro.Pro_Id,Pro.Pro_Nombre,Pro.Pro_Cantidad,Pro.Pro_Precio,Pro.Pro_Imagen,Pro.Pro_Descuento,Pro.Col_Id,Pro.Cat_Id,Col.Col_Id,Col.Col_Nombre,Cat.Cat_Id,Cat.Cat_Nombre FROM Producto Pro, Color Col, Categoria_Pro Cat WHERE Pro.Col_Id = Col.Col_Id AND Pro.Cat_Id = Cat.Cat_Id ORDER BY Cat.Cat_Nombre, Pro.Pro_Nombre";
            $productos = $obj->consult($sql);

            include_once '../view/Tienda/catalogo.php';
        }
    }
?>