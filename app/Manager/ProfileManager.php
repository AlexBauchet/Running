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


/* Check si le profil est dans la base, si non le créer */


		public function emailExists($email)
		{
			// if ( isset($_SESSION['id']) ) { }

			//    $app = getApp();

			//    $sql = "SELECT ".$app->getConfig('security_email_property')." FROM " . $app->getConfig('security_user_table') .
			//            " WHERE " . $app->getConfig('security_email_property') . " = :email LIMIT 1";
			//    $dbh = ConnectionManager::getDbh();
			//    $sth = $dbh->prepare($sql);
			//    $sth->bindValue(":email", $email);
			//    if ($sth->execute()){
			//        $foundUser = $sth->fetch();
			//        if ($foundUser){
			//            return true;
			//        }
			//    }
			    // else {
			   	//	$sql = "SELECT * FROM". $this->table. " SET "  }
			 


		}
}