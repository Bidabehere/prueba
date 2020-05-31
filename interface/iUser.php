<?php 
interface iUser{
	public function all_user();
	public function check_dni($iDNI);
	public function add_user($iDNI, $iNombre, $iApellido);
	public function get_user($id_usuario);
	public function edit_user($id_usuario, $iDNI, $iNombre, $iApellido);
	


}//end iUser