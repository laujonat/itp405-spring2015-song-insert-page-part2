<?php 
	namespace Itp\Music;
	// require_once __DIR__ . '/Database.php';

	use \Itp\Base\Database;
	use \PDO;


	class ArtistQuery extends Database {

		public function getAll() {
			$sql = " 
				SELECT *
				FROM artists
				ORDER BY artist_name
				";

			$statement = static::$pdo->prepare($sql);
			$statement->execute();
			// $check = $statement->fetch(PDO::FETCH_ASSOC);
			// echo "<select>";

			while($result = $statement->fetch(PDO::FETCH_ASSOC)) {
				$id = $result['id'];
				$name = $result['artist_name'];
				echo "<option value='$id'>$name</option>";
			}

			// echo "</select>";


		}


	}



?>