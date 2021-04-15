<?php 
    if(!empty($_POST['correo'])&& !empty($_POST['contra'])){
        $correo = $_POST['correo'];
        $contra = $_POST['contra'];
            if($correo == 'abc@admin.com' && $contra == '1234'){
                $error = 'Ok';
                header("Location:admin/index.php");
            }else{
                $error = 'incorrecto';
                header("Location:login.php?error=$error");
                echo 'Usuario o contraseña no valida';
            }
            if($correo == 'abc@secre.com' && $contra == 'abcd'){
                $error = 'Ok';
                header("Location:secretaria/index.php");
            }
    }
  
    else{
        $error = 'vacio';
        header("Location:login.php?error=$error");
        echo 'Los datos están vacíos';
    }

?>