<?php

class Artist{

    /* + -------------- + Attributes + -------------- + */

    private int $artistID;
    private string $artistName;

    /* + -------------- + Constructor Method + -------------- + */

    public function __construct($artistID, $artistName){
        $this -> artistID = $artistID;
        $this -> artistName = $artistName;
    }

    /* + -------------- + Access Methods + -------------- + */

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
     * Get the value of artistName
     */
    public function getArtistName(): string
    {
        return $this->artistName;
    }

    /**
     * Set the value of artistName
     */
    public function setArtistName(string $artistName): self
    {
        $this->artistName = $artistName;

        return $this;
    }
    
}

?>