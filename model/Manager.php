<?php
namespace VeyratAntoine\MyBlog\Model;

class Manager {
    // Connexion à la BDD
	protected function dbConnect() {
		$bdd = new \PDO('mysql:host=localhost; dbname=id1291378_myblog; charset=utf8', 'id1291378_admin', 'admin123');
		
		return $bdd;
    }
}