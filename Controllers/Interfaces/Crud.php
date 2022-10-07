<?php

interface ICrud {

    public function create($object);
    public function readAll();
    public function update($object);
    public function delete($id);
    public function readById($id);

}

?>