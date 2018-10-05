<?php 
	include('db.php');
	class users extends db{
		public function getUsers($keyword){
			if($keyword)
			{
				$sql = 'SELECT * FROM users WHERE username LIKE "%'.$keyword.'%"';
			}
			else{
				$sql = 'SELECT * FROM users';
			}
			$users = $this->select($sql);
			return $users;
		}

		public function deleteUser($id){
		    $sql = 'DELETE FROM users WHERE id = '.$id;
		    $this->query($sql);
        }

        public function insertUser($data){
		    $sql = 'INSERT INTO users(`username`, `password`)'.'VALUE ("'.$data['username'].'", "'.$data['username'].'")';
		    $this->query($sql);
        }

	}
 ?>