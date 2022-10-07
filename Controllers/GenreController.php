<?php

require("Interfaces/Crud.php");
require("../Utils/DatabaseConnection.php");

class GenreController extends DatabaseConnection implements ICrud {

    public function create($genre){

        $sql = "insert into genre values (?,?)";
        $stmt = $this->getConnection()->prepare($sql);
  
        $genreID = $genre->getGenreID();
        $genreName = $genre->getGenre();

        $stmt->bind_param("is", $genreID, $genreName);
  
        $stmt->execute();
  
        return $stmt->get_result();

    }

    public function readAll(){

        $sql = "select * from genre";
        $stmt = $this->getConnection()->prepare($sql);
        $stmt->execute();
    
        return $stmt->get_result();

    }

    public function update($genre){

        $sql = "update genre set Genre = ? where GenreID = ?";
        $stmt = $this->getConnection()->prepare($sql);
  
        $genreID = $genre->getGenreID();
        $genreName = $genre->getGenre();

        $stmt->bind_param("si", $genreName, $genreID);
  
        $stmt->execute();
  
        return $stmt->get_result();

    }

    public function delete($id){

        $sql = "delete from genre where GenreID = ?";
        $stmt = $this->getConnection()->prepare($sql);
  
        $stmt->bind_param("i",$id);
  
        $stmt->execute();
  
        return $stmt->get_result();

    }
    
    public function readById($id){

        $sql = "select * from genre where GenreID = ?;";
        $stmt = $this->getConnection()->prepare($sql);
  
        $stmt->bind_param("i",$id);
  
        $stmt->execute();
  
        return $stmt->get_result();

    }

}

?>