<?php 
namespace Manager;

use \W\Manager\Manager;

class User_runningManager extends Manager
{

	public function findWithUser($id) {
		
		if (!is_numeric($id)){
			return false;
		}

		$sql = "SELECT runnings.*, profiles.firstname, profiles.id as profile_id FROM " . $this->table . " INNER JOIN profiles ON runnings.user_id = profiles.user_id WHERE runnings.id = :id LIMIT 1";
		$sth = $this->dbh->prepare($sql);
		$sth->bindValue(":id", $id);
		$sth->execute();

		return $sth->fetch();		
	}

	public function findWithUserAndRun($userId, $runningId) {
		
		if (!is_numeric($userId) || !is_numeric($runningId)){
			return false;
		}

		$sql = "SELECT * FROM " . $this->table . " WHERE running_id = :runningId AND user_id = :userId LIMIT 1";
		$sth = $this->dbh->prepare($sql);
		$sth->bindValue(":userId", $userId);
		$sth->bindValue(":runningId", $runningId);
		$sth->execute();

		return $sth->fetch();		
	}


}