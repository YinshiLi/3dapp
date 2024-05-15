<?php

class Model
{
    // Property declaration, in this case we are declaring a variable or handler that points to the database connection,
    // this will become a PDO object
    public $dbhandle;

    // Method to create database connection using PHP Data Objects (PDO) as the interface to SQLite
    public function __construct()
    {
        // Set up the database source name (DSN)
        $dsn = 'sqlite:./db/test1.db';

        try {
            // Change connection string for different databases, currently using SQLite
            $this->dbhandle = new PDO($dsn, 'user', 'password', array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES => false,
            ));
            // echo"Database connection created<br><br>";
        } catch (PDOException $e) {
            echo "I'm sorry, Martin. I'm afraid I can't connect to the database!";
            // Generate an error message if the connection fails
            print new Exception($e->getMessage());
        }
    }

    public function dbCreateTable()
    {
        try {
            // Attempt to execute the SQL statement to create a table
            $this->dbhandle->exec("CREATE TABLE Model_3D (
                Id INTEGER PRIMARY KEY, 
                brand TEXT,
                x3dModelTitle TEXT, 
                x3dCreationMethod TEXT, 
                modelTitle TEXT, 
                modelSubtitle TEXT, 
                modelDescription TEXT
            )");

            // If successful, return a success message
            return "Model_3D table is successfully created inside test.db file";
        } catch (PDOException $e) {
            // Catch any exceptions thrown during the table creation process
            print new Exception($e->getMessage());
            // Set the database handle to NULL in case of error
            $this->dbhandle = NULL;
        }
    }

    public function dbInsertData()
    {
        try {
            // Execute SQL statements to insert data into the Model_3D table
            $this->dbhandle->exec("INSERT INTO Model_3D(Id, brand, x3dModelTitle, x3dCreationMethod, modelTitle, modelSubtitle, modelDescription)
        VALUES(1, 'Coke', 'string_1','string_2','string_3','string_4','string_5');");
            $this->dbhandle->exec("INSERT INTO Model_3D(Id, brand, x3dModelTitle, x3dCreationMethod, modelTitle, modelSubtitle, modelDescription)
        VALUES(2, 'Coke Light', 'string_1','string_2','string_3','string_4','string_5');");
            $this->dbhandle->exec("INSERT INTO Model_3D(Id, brand, x3dModelTitle, x3dCreationMethod, modelTitle, modelSubtitle, modelDescription)
        VALUES(3, 'Coke Zero', 'string_1','string_2','string_3','string_4','string_5');");
            $this->dbhandle->exec("INSERT INTO Model_3D(Id, brand, x3dModelTitle, x3dCreationMethod, modelTitle, modelSubtitle, modelDescription)
        VALUES(4, 'Sprite', 'string_1','string_2','string_3','string_4','string_5');");
            $this->dbhandle->exec("INSERT INTO Model_3D(Id, brand, x3dModelTitle, x3dCreationMethod, modelTitle, modelSubtitle, modelDescription)
        VALUES(5, 'Dr Pepper', 'string_1','string_2','string_3','string_4','string_5');");
            $this->dbhandle->exec("INSERT INTO Model_3D(Id, brand, x3dModelTitle, x3dCreationMethod, modelTitle, modelSubtitle, modelDescription)
        VALUES(6, 'Fanta', 'string_1','string_2','string_3','string_4','string_5');");

            return "3D model data inserted successfully inside test.db";
        } catch (PDOException $e) {
            // Generate an error message if the database operation fails
            print new Exception($e->getMessage());
            // Close the database connection
            $this->dbhandle = NULL;
        }
    }

    public function dbGetData()
    {
        try {
            // Prepare a statement to get all records from the Model_3D table
            $sql = 'SELECT * FROM Model_3D';
            // Use PDO query() to query the database with the prepared SQL statement
            $stmt = $this->dbhandle->query($sql);
            // Set up an array to return the results to the view
            $result = array();
            // Set up a variable to index each row of the array
            $i = 0;
            // Use PDO fetch() to retrieve the results from the database using a while loop
            while ($data = $stmt->fetch()) {
                // Write the database contents to the results array for sending back to the view
                $result[$i]['x3dModelTitle'] = $data['x3dModelTitle'];
                $result[$i]['x3dCreationMethod'] = $data['x3dCreationMethod'];
                $result[$i]['modelTitle'] = $data['modelTitle'];
                $result[$i]['modelSubtitle'] = $data['modelSubtitle'];
                $result[$i]['modelDescription'] = $data['modelDescription'];
                // Increment the row index
                $i++;
            }
            // Send the response back to the view
            return $result;
        } catch (PDOException $e) {
            // Generate an error message if the database operation fails
            print new Exception($e->getMessage());
            // Close the database connection
            $this->dbhandle = NULL;
        }
    }

    public function dbGetBrand()
    {
        // Return the Brand Names
        return array("_", "Coke", "Coke Light", "Coke Zero", "Sprite", "Dr Pepper", "Fanta");
    }

}

?>