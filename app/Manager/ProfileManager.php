<?php 
namespace Manager;

use \W\Manager\Manager;

class ProfileManager extends Manager 
{

	public function findByUserId($id) {
		
		if (!is_numeric($id)){
			return false;
		}

		$sql = "SELECT * FROM " . $this->table . " WHERE user_id = :id LIMIT 1";
		$sth = $this->dbh->prepare($sql);
		$sth->bindValue(":id", $id);
		$sth->execute();

		return $sth->fetch();		
	}

}