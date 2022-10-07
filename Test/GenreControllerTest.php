<?php

/* Imports */
require("../Models/Genre.php");
require("../Controllers/GenreController.php");

/* Variables */ /*-*/ /* Arrange */
$genreObjectCreate = new Genre(2,"Metal");
$genreObjectUpdate = new Genre(1,"Rock");
$genreController = new GenreController();

/* Controller - All stament [Passed] */ /*-*/ /* Act */

// Create stament
$genreController -> create($genreObjectCreate);

// List all stament
$result = $genreController -> readAll();
while ($fila = $result -> fetch_assoc()){
    echo "GenreID:".$fila['GenreID']." | Genre: ".$fila['Genre']."<br>";
}

// Update stament
$genreController -> update($genreObjectUpdate);

// Delete stament
$genreController -> delete(1);

// List by id stament
$result = $genreController -> readById(2);
while ($fila = $result -> fetch_assoc()){
    echo "GenreID:".$fila['GenreID']." | Genre: ".$fila['Genre']."<br>";
}

?>