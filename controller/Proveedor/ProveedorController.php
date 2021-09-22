<?php
    include_once '../model/Proveedor/ProveedorModel.php';

    class ProveedorController {        
        public function lista() {
            $obj = new ProveedorModel();

            $sql = "SELECT Prov.Prov_Id,Prov.Prov_Nombre,Prov.Prov_Razon_Social,Prov.Prov_Direccion,Prov.Prov_Correo,Prov.Prov_Telefono,Prov.Prov_Fecha_Registro, Usu.Usu_Id,Prov.Usu_Id,Usu.Usu_Nombre,Usu.Usu_Apellido FROM Proveedor Prov,Usuario Usu WHERE Prov.Usu_Id = Usu.Usu_Id GROUP BY Prov.Prov_Id ORDER BY Prov.Prov_Nombre";
            $proveedores = $obj->consult($sql);

            $sql = "SELECT Pro.Pro_Id,Pro.Pro_Nombre,Pro.Pro_Cantidad,Pro.Pro_Costo,Pro.Prov_Id FROM Producto Pro";
            $productos = $obj->consult($sql);

            $sql = "Select Prov_Id,Count(Prov_Id) as Cantidad From Producto Group By Prov_Id";
            $cantidades = $obj->consult($sql);

            include_once '../view/Proveedor/Proveedor.php';
        }

        public function getInsert() {
            $obj = new ProveedorModel();

            include_once '../view/Proveedor/insertModal.php';
        }

        public function postInsert() {
            $obj = new ProveedorModel();

            $Id = $obj->autoincrement("Proveedor","Prov_Id");
            $Nombre = $_POST['Prov_Nombre'];           
            $Razon_Social = $_POST['Prov_Razon_Social'];           
            $Direccion = $_POST['Prov_Direccion'];
            $Correo = $_POST['Prov_Correo'];           
            $Telefono = $_POST['Prov_Telefono'];           
            
            date_default_timezone_set("America/Bogota");
            $Fecha = date("d-m-Y h:ia");
            $Usuario = 1;

            $sql = "INSERT INTO Proveedor VALUES($Id,'$Nombre','$Razon_Social','$Direccion','$Correo','$Telefono','$Fecha',$Usuario)";
            $ejecutar = $obj->insert($sql);

            if ($ejecutar) {
                redirect(getUrl("Proveedor","Proveedor","lista"));
            } else {
                echo "Ha ocurrido un error al ingresar datos.";
            }
        }

        public function getUpdate() {
            $obj = new ProveedorModel();

            $id = $_POST['id'];

            $sql = "SELECT Prov.Prov_Id,Prov.Prov_Nombre,Prov.Prov_Razon_Social,Prov.Prov_Direccion,Prov.Prov_Correo,Prov.Prov_Telefono,Prov.Prov_Fecha_Registro, Usu.Usu_Id,Prov.Usu_Id,Usu.Usu_Nombre,Usu.Usu_Apellido FROM Proveedor Prov,Usuario Usu WHERE Prov.Usu_Id = Usu.Usu_Id AND Prov.Prov_Id = $id";
            $proveedor = $obj->consult($sql);

            include_once '../view/Proveedor/updateModal.php';
        }

        public function postUpdate() {
            $obj = new ProveedorModel();

            $Id = $_POST['Prov_Id'];
            $Nombre = $_POST['Prov_Nombre'];           
            $Razon_Social = $_POST['Prov_Razon_Social'];           
            $Direccion = $_POST['Prov_Direccion'];
            $Correo = $_POST['Prov_Correo'];           
            $Telefono = $_POST['Prov_Telefono'];
            
            $sql = "UPDATE Proveedor SET Prov_Nombre = '$Nombre', Prov_Razon_Social = '$Razon_Social', Prov_Direccion = '$Direccion', Prov_Correo = '$Correo', Prov_Telefono = '$Telefono' WHERE Prov_Id = $Id";
            $ejecutar = $obj->update($sql);

            if ($ejecutar) {
                redirect(getUrl("Proveedor","Proveedor","lista"));
            } else {
                echo "Ha ocurrido un error al actualizar, intente de nuevo";
                echo "<a style='margin-top:100px' class='btn btn-danger' href='".getUrl("Proveedor","Proveedor","lista")."'>Volver</a>";
            }
        }

        public function getDelete() {
            $obj = new ProveedorModel();

            $id = $_POST['id'];

            $sql = "SELECT Prov.Prov_Id,Prov.Prov_Nombre,Prov.Prov_Razon_Social,Prov.Prov_Direccion,Prov.Prov_Correo,Prov.Prov_Telefono,Prov.Prov_Fecha_Registro, Usu.Usu_Id,Prov.Usu_Id,Usu.Usu_Nombre,Usu.Usu_Apellido FROM Proveedor Prov,Usuario Usu WHERE Prov.Usu_Id = Usu.Usu_Id AND Prov.Prov_Id = $id";
            $proveedor = $obj->consult($sql);           

            if ($proveedor) {
                include_once '../view/Proveedor/deleteModal.php';
            } else {
                echo "Ha ocurrido un error al traer los datos";
            }

        }

        public function postDelete() {
            $obj = new ProveedorModel();

            $Id = $_POST['Prov_Id'];

            $sql = "DELETE FROM Proveedor WHERE Prov_Id = $Id";
            $ejecutar = $obj->delete($sql);

            if ($ejecutar) {
                redirect(getUrl("Proveedor","Proveedor","lista"));
            } else {
                echo "Ha ocurrido un error al eliminar, intente de nuevo";
                echo "<a class='btn btn-danger' href='".getUrl("Proveedor","Proveedor","lista")."'>Volver</a>";
            }
        }
    }
?>