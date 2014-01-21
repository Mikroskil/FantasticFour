<?php
class Stock{

public function ProIdFaktur($IdFaktur){
	$Result = mysql_query("select * from cart where idfaktur=".$IdFaktur);
	while($Data=mysql_fetch_array($Result)){
		$SisaStock = $this->SisaStock($Data['id_produk']);
		$this->UpdateStock($SisaStock,$Data['jumlah'],$Data['id_produk']);
	}
}

public function SisaStock($id_produk){
	$Result = mysql_query("select * from produk where id = ".$id_produk);
	$Data=mysql_fetch_array($Result);
	
	return $Data['stok'];
}

public function UpdateStock($SisaStock,$JmlhDiBeli,$id_produk){
		$NewStock = $SisaStock - $JmlhDiBeli;
		$q=mysql_query("update produk set stok = ".$NewStock." where id = ".$id_produk);
}

}
?>