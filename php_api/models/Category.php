<?php
  class Category {
    // DB Stuff
    private $conn;
    private $table = 'categories';

    // Properties
    public $id;
    public $name;
    public $created_at;

    // Constructor with DB
    public function __construct($db) {
      $this->conn = $db;
    }

    // Get categories
    
    public function read_id(){
      // Create query
      $query = 'SELECT
            id,
            name
          FROM
            ' . $this->table . '
        WHERE id = ?
        LIMIT 0,1';
  
        //Prepare statement
        $stmt = $this->conn->prepare($query);
  
        // Bind ID
        $stmt->bindParam(1, $this->id);
  
        // Execute query
        $stmt->execute();
  
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
  
        // set properties
        $this->id = $row['id'];
        $this->name = $row['name'];
    }

  
  }
