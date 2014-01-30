<?php 

namespace MongoSearch;

class Finder {


  private $collectionName;
  private $db;
  private $client;

  public function __construct($collectionName, $dbName)
  {
   
    $this->collectionName = $collectionName;
    $m = new \MongoClient(); // connect
    $this->client = $m;
    $this->db = $m->selectDB($dbName);

  }


  public function find($query) {

   $result = $this->db->command(array("text" => $this->collectionName, 'search' => $query ));
   return $result;

  }


}
