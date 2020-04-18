<?php

	function loadUsers($filename) {
		$users = [];
		
		$file = fopen($filename, "r");
		
		while(($next = fgets($file)) !== false) {
			$users[] = unserialize($next);
		}
		
		fclose($file);
		
		return $users;
	}
	
	function saveUser($filename, $user) {
		$file = fopen($filename, "a");
		
		fwrite($file, serialize($user)."\n");
		
		fclose($file);
	}

?>