<?php 
interface iProducto{
	public function all_productos();
	public function get_producto($id_producto);
	public function edit_producto($id_producto, $iCant, $iName);
	public function add_producto($iCant, $iName);

	
}//end 