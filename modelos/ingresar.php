<?php

include_once '../controladores/conexion.php';
session_start();

if (isset($_SESSION['rol'])&& $_SESSION['nombres']&& $_SESSION['id']&& $_SESSION['grupo']){

    switch($_SESSION['rol'] && $_SESSION['nombres'] && $_SESSION['id']&& $_SESSION['grupo']){
        case 1:
            header('location: ../vistas/administrador/admin.php');
            break;

            case 2:
                header('location: ../index.php');
            break;

            case 3:
                header('location: ../vistas/administradoresreal/administradores.php');
            break;

                default;
    }
    
   }
    if(isset($_POST['correo']) && isset($_POST['pass'])){

        $correo = $_POST['correo'];
        $pass = $_POST['pass'];

        $db = new Database();
        $query = $db->connect()->prepare('SELECT * FROM login1 WHERE correo = :correo AND contrasena = :pass' );
        $query->execute(['correo' => $correo, 'pass' => $pass]);

        $row = $query->fetch(PDO::FETCH_NUM);
        
        if($row == true){
            //validar usuario

            $name= $row[1];
            $_SESSION['nombres'] = $name;
            $rol = $row[7];
            $_SESSION['rol'] = $rol;

            $id_alumno = $row[0];
            $_SESSION['id'] = $id_alumno;

            $id_grupo = $row[8];
            $_SESSION['grupo'] = $id_grupo;

            


        
            switch($_SESSION['rol']){
                case 1:
                    header('location: ../vistas/administrador/admin.php');
                    break;
        
                    case 2:
                        header('location: ../index.php');
                    break;

                    case 3:
                        header('location: ../vistas/administradoresreal/administradores.php');
                    break;
        
                        default;
                          }

            }else{
            // no existe el usuario
            $db = new Database();
            $query = $db->connect()->prepare('SELECT * FROM maestros WHERE correo = :correo AND contrasena = :pass' );
            $query->execute(['correo' => $correo, 'pass' => $pass]);
    
            $row = $query->fetch(PDO::FETCH_NUM);


            
            if($row == true){
                //validar usuario
    
                $name= $row[1];
                $_SESSION['nombres'] = $name;
                $rol = $row[6];
                $_SESSION['rol'] = $rol;

                // Obtener el ID del maestro desde la consulta
                $id_maestro = $row[0]; // Asumiendo que la posición 0 contiene el ID del maestro

                // Almacenar el ID del maestro en $_SESSION['id']
                $_SESSION['id'] = $id_maestro;



                
                switch($_SESSION['rol']){
                    case 1:
                        header('location: ../vistas/administrador/admin.php');
                        break;
            
                        case 2:
                            header('location: ../index.php');
                        break;

                        case 3:
                            header('location: ../vistas/administradoresreal/administradores.php');
                        break;
            
                            default;
                              }
            

                }else{
                    // no existe el usuario
                    $db = new Database();
                    $query = $db->connect()->prepare('SELECT * FROM admini WHERE correo = :correo AND contrasena = :pass' );
                    $query->execute(['correo' => $correo, 'pass' => $pass]);
            
                    $row = $query->fetch(PDO::FETCH_NUM);
                    
                    if($row == true){
                        //validar usuario
            
                        $name= $row[1];
                        $_SESSION['nombres'] = $name;
                        $rol = $row[6];
                        $_SESSION['rol'] = $rol ;
                        switch($_SESSION['rol']){
                            case 1:
                                header('location: ../vistas/administrador/admin.php');
                                break;
                    
                                case 2:
                                    header('location: ../index.php');
                                break;
        
                                case 3:
                                    header('location: ../vistas/administradoresreal/administradores.php');
                                break;
                    
                                    default;
                                      }
                        
                
                
            }else{
                // no existe el usuario
                header('location: ../Login/index.php');
    
            }

        }
        

    }
    }

?>