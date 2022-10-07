<?php

require("Interfaces/Crud.php");
require("../Utils/DatabaseConnection.php");

class AlbumsController extends DatabaseConnection implements ICrud {

    public function create($albums){

        $sql = "insert into albums values (?,?,?,?,?)";
        $stmt = $this->getConnection()->prepare($sql);
  
        $albumID = $albums->getAlbumID();
        $albumName = $albums->getAlbumName();
        $dataReleased = $albums->getDataReleased() -> format('Y-m-d H:i:s');
        $artistID = $albums->getArtistID();
        $genreID = $albums->getGenreID();

        $stmt->bind_param("issii", $albumID, $albumName, $dataReleased, $artistID, $genreID);
  
        $stmt->execute();
  
        return $stmt->get_result();

    }

    public function readAll(){

        $sql = "select * from albums";
        $stmt = $this->getConnection()->prepare($sql);
        $stmt->execute();
    
        return $stmt->get_result();

    }

    public function update($albums){

        $sql = "update albums set AlbumsName = ?, DataReleased = ?, Genre_GenreID = ?, Artist_ArtistID = ? where AlbumsID = ?";
        $stmt = $this->getConnection()->prepare($sql);
  
        $albumID = $albums->getAlbumID();
        $albumName = $albums->getAlbumName();
        $dataReleased = $albums->getDataReleased() -> format('Y-m-d H:i:s');
        $artistID = $albums->getArtistID();
        $genreID = $albums->getGenreID();

        $stmt->bind_param("ssiii", $albumName, $dataReleased, $genreID, $artistID, $albumID);
  
        $stmt->execute();
  
        return $stmt->get_result();

    }

    public function delete($id){

        $sql = "delete from albums where AlbumsID = ?";
        $stmt = $this->getConnection()->prepare($sql);
  
        $stmt->bind_param("i",$id);
  
        $stmt->execute();
  
        return $stmt->get_result();

    }
    
    public function readById($id){

        $sql = "select * from albums where AlbumsID = ?;";
        $stmt = $this->getConnection()->prepare($sql);
  
        $stmt->bind_param("i",$id);
  
        $stmt->execute();
  
        return $stmt->get_result();

    }

}

?>