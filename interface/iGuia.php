<?php 
interface iGuia{
	public function all_guias();
	public function check_guia($guia);
	public function add_guia($nro_guia, $iCant, $idProducto, $iDetalle);
					


}//end iItem