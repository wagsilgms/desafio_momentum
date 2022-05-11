<?php

class dados extends model {

    public function __construct() {
		parent::__construct();
	}

    public function getdados() {
		$sql = $this->db->query('SELECT * FROM dados');

        if ($sql->rowCount() > 0) {
            $array = $sql->fetch();
        }
        
        return $array;
    }

    public function gravanome($nome) {
        $sql = "UPDATE dados SET nome = :nome WHERE id = '1'";
		$sql = $this->db->prepare($sql);
				$sql->bindValue(":nome", $nome);
		$sql->execute();
    }
}

?>