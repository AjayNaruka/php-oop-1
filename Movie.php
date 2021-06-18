<?php 

  
  class Movie{
    private static $posGeneri = ["Action","Comedy","Romance","Sci-fi","Cartoon","Western","Cult","Horror","Historical","Documentary"];
    private static $counter=0;

    private $title;
    private $director;
    private $release_date;
    
    private $genres =[];




    /* METHODS */
    public function __construct($_director)
    {
      $this->title= $this->titleGen();
      $this->director=$_director;
      $this->setGenres();
      self::$counter++;
    }

   
    

    /* GETTERS */
    /**
     * Get the value of title
     */ 
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Get the value of director
     */ 
    public function getDirector()
    {
        return $this->director;
    }

    /**
     * Get the value of genres
     */ 
    public function getGenres()
    {
        return implode(", ",$this->genres);
    }

    /**
     * Get the value of release_date
     */ 
    public function getRelease_date()
    {
        return $this->release_date;
    }

    /**
     * Set the value of release_date
     *
     * @return  self
     */ 

     /* SETTERS */

     private function setGenres(){
      /* CARICO DUE GENERI RANDOM PER FILM  */
      while(count($this->genres)<3){
        $this->genres[] = self::$posGeneri[array_rand(self::$posGeneri)];
      }
    }
    public function setRelease_date()
    {
        $timestamp = mt_rand(1, time());
        $randomDate = date("d M Y", $timestamp);
        $this->release_date = $randomDate;
    }
    private function titleGen(){
      $length = 10;    
      return substr(str_shuffle('0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ'),1,$length);
      
    }


    /* METHODS */

    /**
     * Get the value of counter
     */ 
    public static function getCounter()
    {
        return self::$counter;
    }
  }

?>