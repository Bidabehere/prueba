<?php 
interface iUser{
	public function all_user();
	public function check_dni($iDNI);
	public function add_user($iDNI, $iNombre, $iApellido);
	public function get_user($id_usuario);
	public function edit_user($id_usuario, $iDNI, $iNombre, $iApellido);
	public function check_dni_edit($idUser, $iDNI);
	public function	edit_user_sin_dni($id_usuario, $iNombre, $iApellido);

}//end iUser