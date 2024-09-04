<?php

// definire una classe 

class Movie {
    public $title;
    public $duration;
    public $language;
    public $target;
    public $genre = [];

    // definire un costruttore 
    public function __costructor ($_title , $_language , $_duration){
        $this-> title = $_title;
        $this-> language = $_language;
        $this-> duration = $_duration;
    }

     // aggiungo un genere 
     public function addGenre($genere){
        $this->genre[]=$genere;
    }

    // creare un metodo per aggiungere una descrizione 
    public function getDescription(){
        return 'il film ' . $this -> title . ' è recitato in ' . $this->language . ' ed ha la durata di ' . $this->duration;
    }
}

?>