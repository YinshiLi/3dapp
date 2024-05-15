<?php

$brandName = $_GET['brand'];

try {
    // Make a connection to the drinks database
    $dbhandle = new PDO('sqlite:../../db/test1.db', 'user', 'password', array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_EMULATE_PREPARES => false,
    ));

    $sql = 'SELECT * FROM Model_3D WHERE brand = "' . $brandName . '"';
    $stmt = $dbhandle->query($sql);

    // Set up an array to return the results to the view
    $result = null;

    // Set up a variable to index each row of the array
    $i = 0;
    while ($data = $stmt->fetch()) {
        // Write the database contents to the results array for sending back to the view
        $result[$i]['brand'] = $data['brand'];
        $result[$i]['x3dModelTitle'] = $data['x3dModelTitle'];
        $result[$i]['x3dCreationMethod'] = $data['x3dCreationMethod'];
        $result[$i]['modelTitle'] = $data['modelTitle'];
        $result[$i]['modelSubtitle'] = $data['modelSubtitle'];
        $result[$i]['modelDescription'] = $data['modelDescription'];
        // Increment the row index
        $i++;
    }
}
catch (PDOException $e) {
    print new Exception($e->getMessage());
}

// Close the database connection
$dbhandle = NULL;

echo json_encode($result);
?>

