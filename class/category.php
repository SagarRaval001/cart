<?php

	Class Category
	{
		private $host = 'localhost';
		private $username = 'root';
		private $password = 'Admin@123';
		private $database = 'cart';
		private $connection;

		//create connection
		public function __construct()
		{
			try 
			{
				$this->connection = new mysqli($this->host, $this->database, $this->username, $this->password);
			} 
			catch (Exception $e) 
			{
				echo "Connection error " . $e->getMessage();
			}
		}

		// insert new category into database and handle ajax request
		public function insert()
		{
            
		}

		//fetch all category from database and handle ajax request 
		public function fetchAllCat()
		{
			
			$data = array();

			$allCat = $this->connection->query('SELECT * FROM category');
			
			if($allCat->num_rows > 0){
                while($cat = mysqli_fetch_assoc($allCat)){
                    $data[] = $cat;
                }
            }
			return $data;
		}

		//delete category from database and handle ajax request
		public function deleteRecords()
		{
		}

		//fetch category from database and handle ajax request
		public function edit()
		{
		}

		//update category and handle ajax request
		public function update($data)
		{
		}
	}
 ?>