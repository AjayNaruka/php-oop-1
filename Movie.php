<?php 

  
  class Movie{
    private static $posGeneri = ["Action","Comedy","Romance","Sci-fi","Cartoon","Western"];
    private static $counter=0;

    private $title;
    private $director;
    private $release_date;
    
    private $genres =[];




    /* METHODS */
    public function __construct($_title,$_director)
    {
      $this->title= $this->titleGen();
      $this->director=$_director;
      $this->setGenres();
      self::$counter++;
    }

    private function setGenres(){
      while(count($this->genres)<2){
        $this->genres[] = self::$posGeneri[array_rand(self::$posGeneri)];
      }
    }
    

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
    public function setRelease_date($release_date)
    {
        $timestamp = mt_rand(1, time());
        $randomDate = date("d M Y", $timestamp);
        $this->release_date = $randomDate;
        return $this;
    }
    private function titleGen(){
      $length = 10;    
      return substr(str_shuffle('0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ'),1,$length);
      
    }

    /**
     * Get the value of counter
     */ 
    public static function getCounter()
    {
        return self::$counter;
    }
  }

?>