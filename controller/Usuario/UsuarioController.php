<?php
    include_once '../model/Usuario/UsuarioModel.php';

    class UsuarioController {        
        public function lista() {
            $obj = new UsuarioModel();

            $sql = "SELECT Usu.Usu_Id,Usu.Usu_Nombre,Usu.Usu_Apellido,Usu.Usu_Telefono,Usu.Usu_Direccion,Usu.Usu_Num_Identificacion,Usu.Usu_Correo,Usu.Usu_Imagen,Usu.Tipo_Id,Usu.Rol_Id, Tip.Tipo_Id,Tip.Tipo_Nombre, Rol.Rol_Id,Rol.Rol_Nombre FROM Rol Rol, Tipo_Id Tip, Usuario Usu WHERE Usu.Rol_Id = Rol.Rol_Id AND Usu.Tipo_Id = Tip.Tipo_Id ORDER BY Usu.Usu_Nombre,Usu.Usu_Apellido,Usu.Usu_Id";
            $usuarios = $obj->consult($sql);

            $sql = "SELECT Rol_Id,Rol_Nombre FROM Rol";
            $roles = $obj->consult($sql);

            $sql = "SELECT Tipo_Id, Tipo_Nombre From Tipo_Id ORDER BY Tipo_Nombre";
            $tipo_identificacion = $obj->consult($sql);

            include_once '../view/Usuario/Usuario.php';
        }

        public function getInsert() {
            $obj = new UsuarioModel();
            
            $sql = "SELECT Rol_Id,Rol_Nombre FROM Rol";
            $roles = $obj->consult($sql);

            $sql = "SELECT Tipo_Id, Tipo_Nombre From Tipo_Id ORDER BY Tipo_Nombre";
            $tipo_identificacion = $obj->consult($sql);

            include_once '../view/Usuario/insertModal.php';
        }

        public function postInsert() {
            $obj = new UsuarioModel();

            $Id = $obj->autoincrement("Usuario","Usu_Id");
            $Nombre = $_POST['Usu_Nombre'];
            $Apellido = $_POST['Usu_Apellido'];
            $Telefono = $_POST['Usu_Telefono'];           
            $Direccion = $_POST['Usu_Direccion'];
            $Num_Identificacion = $_POST['Usu_Num_Identificacion'];
            $Correo = $_POST['Usu_Correo'];    
            $Clave = $_POST['Usu_Clave'];     
            $Tipo_Id = $_POST['Tipo_Id'];     
            $Rol_Id = $_POST['Rol_Id'];

            if (isset($_FILES['Usu_Imagen'])) {
                if ($_FILES['Usu_Imagen']['name'] == "") {
                    
                    $ruta = "";
                } else {
                    $Usu_Imagen = $_FILES['Usu_Imagen']['name'];
                    $ruta = "images/Usuarios/$Nombre"."_".$Apellido."_"."$Id.jpg";
    
                    move_uploaded_file($_FILES['Usu_Imagen']['tmp_name'],"$ruta");
                }

                $sql = "INSERT INTO Usuario VALUES($Id,'$Nombre','$Apellido','$Telefono','$Direccion',$Num_Identificacion,'$Correo','$Clave','$ruta','$Tipo_Id',$Rol_Id)";            
            } else {
                $sql = "INSERT INTO Usuario VALUES($Id,'$Nombre','$Apellido','$Telefono','$Direccion',$Num_Identificacion,'$Correo','$Clave',Null,'$Tipo_Id',$Rol_Id)";                
            }

            $ejecutar = $obj->insert($sql);

            if ($ejecutar) {
                redirect(getUrl("Usuario","Usuario","lista"));
            } else {
                echo "Ha ocurrido un error al ingresar datos.";
            }
        }

        public function getUpdate() {
            $obj = new UsuarioModel();

            $id = $_POST['id'];

            $sql = "SELECT Usu.Usu_Id,Usu.Usu_Nombre,Usu.Usu_Apellido,Usu.Usu_Telefono,Usu.Usu_Direccion,Usu.Usu_Num_Identificacion,Usu.Usu_Correo,Usu.Usu_Imagen,Usu.Tipo_Id,Usu.Rol_Id, Tip.Tipo_Id,Tip.Tipo_Nombre, Rol.Rol_Id,Rol.Rol_Nombre FROM Rol Rol, Tipo_Id Tip, Usuario Usu WHERE Usu.Rol_Id = Rol.Rol_Id AND Usu.Tipo_Id = Tip.Tipo_Id AND Usu.Usu_Id = $id";
            $usuario = $obj->consult($sql);
            
            $sql = "SELECT Rol_Id,Rol_Nombre FROM Rol";
            $roles = $obj->consult($sql);

            $sql = "SELECT Tipo_Id, Tipo_Nombre From Tipo_Id ORDER BY Tipo_Nombre";
            $tipo_identificacion = $obj->consult($sql);

            include_once '../view/Usuario/updateModal.php';
        }

        public function postUpdate() {
            $obj = new UsuarioModel();

            $Id = $_POST['Usu_Id'];
            $Nombre = $_POST['Usu_Nombre'];
            $Nombre_Viejo = $_POST['Nombre_Viejo'];
            $Apellido = $_POST['Usu_Apellido'];

            $Telefono = $_POST['Usu_Telefono'];           
            $Direccion = $_POST['Usu_Direccion'];
            $Num_Identificacion = $_POST['Usu_Num_Identificacion'];
            $Correo = $_POST['Usu_Correo'];

            $Tipo_Id = $_POST['Tipo_Id'];     
            $Rol_Id = $_POST['Rol_Id'];

            if (isset($_FILES['Usu_Imagen']) || ($Nombre != $Nombre_Viejo)) {

                
                $ruta = "images/Usuarios/$Nombre"."_".$Apellido."_"."$Id.jpg";
                
                if (isset($_FILES['Usu_Imagen'])) {
                    $imagenVieja = $_POST['imagenVieja'];
                    if ($imagenVieja != "" || $imagenVieja != Null) {
                        unlink($imagenVieja);
                    }
                    $Usu_Imagen = $_FILES['Usu_Imagen']['name'];
                    move_uploaded_file($_FILES['Usu_Imagen']['tmp_name'],$ruta);

                } else {
                    $imagenVieja = $_POST['imagenVieja'];
                    rename("$imagenVieja","$ruta");
                }
                
                $sql = "UPDATE Usuario SET Usu_Id = $Id, Usu_Nombre = '$Nombre', Usu_Apellido = '$Apellido', Usu_Telefono = '$Telefono', Usu_Direccion = '$Direccion', Usu_Num_Identificacion = $Num_Identificacion, Usu_Correo = '$Correo', Usu_Imagen = '$ruta', Tipo_Id = $Tipo_Id, Rol_Id = $Rol_Id  WHERE Usu_Id = $Id";
            } else {
                $sql = "UPDATE Usuario SET Usu_Id = $Id, Usu_Nombre = '$Nombre', Usu_Apellido = '$Apellido', Usu_Telefono = '$Telefono', Usu_Direccion = '$Direccion', Usu_Num_Identificacion = $Num_Identificacion, Usu_Correo = '$Correo', Tipo_Id = $Tipo_Id, Rol_Id = $Rol_Id  WHERE Usu_Id = $Id";
            }
            
            $ejecutar = $obj->update($sql);

            if ($ejecutar) {
                redirect(getUrl("Usuario","Usuario","lista"));
            } else {
                echo "Ha ocurrido un error al actualizar, intente de nuevo";
                echo "<a style='margin-top:100px' class='btn btn-danger' href='".getUrl("Usuario","Usuario","lista")."'>Volver</a>";
            }
        }

        public function getDelete() {
            $obj = new UsuarioModel();

            $id = $_POST['id'];

            $sql = "SELECT Usu.Usu_Id,Usu.Usu_Nombre,Usu.Usu_Apellido,Usu.Usu_Telefono,Usu.Usu_Direccion,Usu.Usu_Num_Identificacion,Usu.Usu_Correo,Usu.Usu_Imagen,Usu.Tipo_Id,Usu.Rol_Id, Tip.Tipo_Id,Tip.Tipo_Nombre, Rol.Rol_Id,Rol.Rol_Nombre FROM Rol Rol, Tipo_Id Tip, Usuario Usu WHERE Usu.Rol_Id = Rol.Rol_Id AND Usu.Tipo_Id = Tip.Tipo_Id AND Usu.Usu_Id = $id";
            $usuario = $obj->consult($sql);           

            if ($usuario) {
                include_once '../view/Usuario/deleteModal.php';
            } else {
                echo "Ha ocurrido un error al traer los datos";
            }

        }

        public function postDelete() {
            $obj = new UsuarioModel();

            $Id = $_POST['Usu_Id'];
            $Imagen = $_POST['Usu_Imagen'];

            $sql = "DELETE FROM Usuario WHERE Usu_Id = $Id";
            $ejecutar = $obj->delete($sql);

            if ($ejecutar) {
                unlink($Imagen);
                redirect(getUrl("Usuario","Usuario","lista"));
            } else {
                echo "Ha ocurrido un error al eliminar, intente de nuevo";
                echo "<a class='btn btn-danger mt-5' href='".getUrl("Usuario","Usuario","lista")."'>Volver</a>";
            }
        }
    }
?>