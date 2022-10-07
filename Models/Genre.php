<?php

class Genre {

    /* + -------------- + Attributes + -------------- + */

    private int $genreID;
    private string $genre;

    /* + -------------- + Constructor Method + -------------- + */

    public function __construct($genreID, $genre) {
        $this -> genreID = $genreID;
        $this -> genre = $genre;
    }

    /* + -------------- + Access Methods + -------------- + */

    /**
     * Get the value of genreID
     */
    public function getGenreID(): int
    {
            return $this->genreID;
    }
    /**
     * Set the value of genreID
     */
    public function setGenreID(int $genreID): self
    {
            $this->genreID = $genreID;
            return $this;
    }
    /**
     * Get the value of genre
     */
    public function getGenre(): string
    {
            return $this->genre;
    }
    /**
     * Set the value of genre
     */
    public function setGenre(string $genre): self
    {
            $this->genre = $genre;
            return $this;
    }
    
}

?>