<?php 
require_once('../class/User.php');

if(isset($_POST['id_usuario'])){

    $iName = $_POST['iName'];
	$iApe = $_POST['iApe'];
	$iDNI = $_POST['iDNI'];
	$id_usuario = $_POST['id_usuario'];

	// verifico su cambio el dni del usuario
	$cambio_dni = $user->check_dni_edit($id_usuario, $iDNI);
		
	if((int)$cambio_dni == 0)
	{
		//lo cambio al dni, ahora verifico si existe

			$existDNI = $user->check_dni($iDNI);
	
				if((int)$existDNI == 1)
				{ //Ya existe el dni tiene que volver al original o poner otro
					$return['valid'] = false;
					$return['msg'] = "Verificar el Documento, no puede ser repetido";
				}
				else
				{ // cambio el dni y los detalles
					
					$saveUser = $user->edit_user($id_usuario, $iDNI, $iName, $iApe);
							if($saveUser)
							{
								$return['valid'] = true;
								$return['msg'] = "Nuevo usuario editado con éxito!";
							}
							else
							{
								$return['valid'] = false;
							}
				}
	}
	else // no cambio el dni, entonces actualizo la otra informacion
			{
				$saveUser = $user->edit_user_sin_dni($id_usuario, $iName, $iApe);
							if($saveUser)
							{
								$return['valid'] = true;
								$return['msg'] = "Nuevo usuario editado con éxito!";
							}
							else
							{
								$return['valid'] = false;
							}

			}
	
echo json_encode($return);
}

$user->Disconnect();