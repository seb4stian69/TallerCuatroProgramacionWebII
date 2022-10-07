<?php

/* Imports */
require("../Models/Artist.php");
require("../Controllers/ArtistController.php");

/* Variables */ /*-*/ /* Arrange */
$artistObjectCreate = new Artist(2,"Juan Luis Guerra");
$artistObjectUpdate = new Artist(2,"Shakira");
$artistController = new artistController();

/* Controller - All stament [Passed] */ /*-*/ /* Act */

// Create stament
$artistController -> create($artistObjectCreate);

// List all stament
$result = $artistController -> readAll();
while ($fila = $result -> fetch_assoc()){
    echo "Id:".$fila['ArtistID']." | Name: ".$fila['ArtistName']."<br>";
}

// Update stament
$artistController -> update($artistObjectUpdate);

// Delete stament
$artistController -> delete(2);

// List by id stament
$result = $artistController -> readById(2);
while ($fila = $result -> fetch_assoc()){
    echo "Id:".$fila['ArtistID']." | Name: ".$fila['ArtistName']."<br>";
}

?>