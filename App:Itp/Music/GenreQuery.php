<?php
 	namespace Itp\Music;
	// require_once __DIR__ . '/Database.php';
	
	use \Itp\Base\Database;
	use \PDO;

	class GenreQuery extends Database {

		public function getAll() {

			$sql = " 
				SELECT *
				FROM genres
				ORDER BY genre
				";

			$statement = static::$pdo->prepare($sql);
			$statement->execute();
			while($result = $statement->fetch(PDO::FETCH_ASSOC)) {
				$id = $result['id'];
				$name = $result['genre'];
				echo "<option value='$id'>$name</option>";
			}
		}

	}



?>