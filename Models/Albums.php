<?php

class Albums {

    /* + -------------- + Attributes + -------------- + */

    private int $albumID;
    private string $albumName;
    private datetime $dataReleased;
    private int $artistID;
    private int $genreID;

    /* + -------------- + Constructor Method + -------------- + */

    public function __construct($albumID,$albumName,$dataReleased,$artistID,$genreID) {
        $this -> albumID = $albumID;
        $this -> albumName = $albumName;
        $this -> dataReleased = $dataReleased;
        $this -> artistID = $artistID;
        $this -> genreID = $genreID;
    }

    /* + -------------- + Access Methods + -------------- + */

    /**
     * Get the value of albumID
     */
    public function getAlbumID(): int
    {
        return $this->albumID;
    }

    /**
     * Set the value of albumID
     */
    public function setAlbumID(int $albumID): self
    {
        $this->albumID = $albumID;

        return $this;
    }

    /**
     * Get the value of albumName
     */
    public function getAlbumName(): string
    {
        return $this->albumName;
    }

    /**
     * Set the value of albumName
     */
    public function setAlbumName(string $albumName): self
    {
        $this->albumName = $albumName;

        return $this;
    }

    /**
     * Get the value of dataReleased
     */
    public function getDataReleased(): datetime
    {
        return $this->dataReleased;
    }

    /**
     * Set the value of dataReleased
     */
    public function setDataReleased(datetime $dataReleased): self
    {
        $this->dataReleased = $dataReleased;

        return $this;
    }

    /**
     * Get the value of artistID
     */
    public function getArtistID(): int
    {
        return $this->artistID;
    }

    /**
     * Set the value of artistID
     */
    public function setArtistID(int $artistID): self
    {
        $this->artistID = $artistID;

        return $this;
    }

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
    
}

?>