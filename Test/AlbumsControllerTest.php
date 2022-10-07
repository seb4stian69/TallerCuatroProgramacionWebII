<?php

/* Imports */
require("../Models/Albums.php");
require("../Controllers/AlbumsController.php");

/* Utils */
$date = date_create();

/* Variables */ /*-*/ /* Arrange */
$albumsObjectCreate = new Albums(1,"JuanLuisGuerra y 440", $date, 2, 2);
$albumsObjectUpdate = new Albums(1,"JuanLuisGuerra y 445", $date, 2, 2);
$albumsController = new AlbumsController();

/* Controller - All stament [Passed] */ /*-*/ /* Act */

// Create stament
$albumsController -> create($albumsObjectCreate);

// List all stament
$result = $albumsController -> readAll();
while ($fila = $result -> fetch_assoc()){
    echo "Id:".$fila['AlbumsID']." | Name: ".$fila['AlbumsName']." | DataReleased: ".$fila["DataReleased"]." | GenreID: ".$fila["Genre_GenreID"]." | ArtistID: ".$fila["Artist_ArtistID"]."<br>";
}

// Update stament
$albumsController -> update($albumsObjectUpdate);

// Delete stament
$albumsController -> delete(1);

// List by id stament
$result = $albumsController -> readById(1);
while ($fila = $result -> fetch_assoc()){
    echo "Id:".$fila['AlbumsID']." | Name: ".$fila['AlbumsName']." | DataReleased: ".$fila["DataReleased"]." | GenreID: ".$fila["Genre_GenreID"]." | ArtistID: ".$fila["Artist_ArtistID"]."<br>";
}

?>