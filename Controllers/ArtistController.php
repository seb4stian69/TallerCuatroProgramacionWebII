<?php

require("Interfaces/Crud.php");
require("../Utils/DatabaseConnection.php");

class ArtistController extends DatabaseConnection implements ICrud {

    public function create($artist){

        $sql = "insert into artist values (?,?)";
        $stmt = $this->getConnection()->prepare($sql);
  
        $artistID = $artist->getArtistID();
        $artistName = $artist->getArtistName();

        $stmt->bind_param("is", $artistID, $artistName);
  
        $stmt->execute();
  
        return $stmt->get_result();

    }

    public function readAll(){

        $sql = "select * from artist";
        $stmt = $this->getConnection()->prepare($sql);
        $stmt->execute();
    
        return $stmt->get_result();

    }

    public function update($artist){

        $sql = "update artist set ArtistName = ? where ArtistID = ?";
        $stmt = $this->getConnection()->prepare($sql);
  
        $artistID = $artist->getArtistID();
        $artistName = $artist->getArtistName();

        $stmt->bind_param("si", $artistName, $artistID);
  
        $stmt->execute();
  
        return $stmt->get_result();

    }

    public function delete($id){

        $sql = "delete from artist where ArtistID = ?";
        $stmt = $this->getConnection()->prepare($sql);
  
        $stmt->bind_param("i",$id);
  
        $stmt->execute();
  
        return $stmt->get_result();

    }
    
    public function readById($id){

        $sql = "select * from artist where ArtistID = ?;";
        $stmt = $this->getConnection()->prepare($sql);
  
        $stmt->bind_param("i",$id);
  
        $stmt->execute();
  
        return $stmt->get_result();

    }

}

?>