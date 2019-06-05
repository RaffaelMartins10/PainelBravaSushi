<?php
namespace Models;

use \Core\Model;

class Home extends Model {

	public function getAll() {
		$array = array();

		$sql = "SELECT a.id,a.id_user,a.payment_type,b.id ,b.name,b.cpf,b.telefone,b.rua,b.numero,b.complemento,b.bairro,b.cidade,b.estado,b.cep,b.datahora
        FROM purchases a 
        INNER JOIN users b on a.id_user = b.id;";
		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0) {
			$array = $sql->fetchAll(\PDO::FETCH_ASSOC);
		}
		return $array;
	    
    }
    
    public function Pedido($id){
        $array = array();

		$sql = "SELECT p.name as product_name, d.name as category_name,c.quantity
        FROM purchases a 
      	INNER JOIN users b on a.id_user = b.id
        INNER JOIN purchases_products c on a.id = c.id_purchase
				INNER JOIN products p on c.id_product = p.id 
				INNER JOIN categories d on p.id_category = d.id
				WHERE  a.id_user = $id" ;      
				$sql = $this->db->query($sql);

		if($sql->rowCount() > 0) {
			$array = $sql->fetchAll(\PDO::FETCH_ASSOC);
		}
		return $array;
		}
		
		public function deleteUsuarios(){
			$sql = "DELETE FROM users WHERE id > 6";
			$sql = $this->db->prepare($sql);
			$sql->execute();

	}

	public function getDados($id) {
		$array = array();

		$sql = "SELECT a.id,a.id_user,a.payment_type,b.id ,b.name,b.cpf,b.telefone,b.rua,b.numero,b.complemento,b.horapedido,b.cidade,b.estado,b.cep,b.datahora
        FROM purchases a 
        INNER JOIN users b on a.id_user = b.id;";
		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0) {
			$array = $sql->fetchAll(\PDO::FETCH_ASSOC);
		}
		return $array;
	    
    }

		public function DadosUsuario($id) {
			$array = array();
	
			$sql = "SELECT b.id, b.telefone,b.cep,b.rua,b.numero,b.complemento,b.horapedido,b.cidade,b.estado,b.cpf
		 FROM users b where b.id = $id";
			$sql = $this->db->query($sql);
	
			if($sql->rowCount() > 0) {
				$array = $sql->fetchAll(\PDO::FETCH_ASSOC);
			}
			return $array;
				
			}
	

}
