<?php 
    include 'db.php';

    $Dvd_BD = isset($_POST['DVD']) ? $_POST['DVD'] : null;
    $Book_BD = isset($_POST['BOOK']) ? $_POST['BOOK'] : null;   
    $Furniture_BD = isset($_POST['FURNITURE']) ? $_POST['FURNITURE'] : null;
    
    if ($Dvd_BD <> null) {
        foreach ($Dvd_BD as $value) {
            $query = "DELETE FROM dvd WHERE ID_DVD = $value";
            mysqli_query($conection, $query);
        }
    }
    if ($Book_BD <> null) {
        foreach ($Book_BD as $value) {
            $query = "DELETE FROM book WHERE ID_BOOK = $value";
            mysqli_query($conection, $query);
        }
    }
    if ($Furniture_BD <> null) {
        foreach ($Furniture_BD as $value) {
            $query = "DELETE FROM furniture WHERE ID_FORNITURE = $value";
            mysqli_query($conection, $query);        
        }
    }

    Header('location:index.php?pagina=home');   
?>

