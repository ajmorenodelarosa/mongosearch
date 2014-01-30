<?php 

namespace MongoSearchBundle\Services\Finder;

class Finder {


  private $collectionName;
  private $db;
  private $dm;


  public function finder($collectionName, $dm)
  {
   
    $this->dm = $dm;
    $this->collectionName = $collectionName;
    $this->db = $this->dm->getDocumentDatabase($this->collectionName);
    return $this;


  }


  public function find($query) {

   $result = $this->db->command(array("text" => end(split(":",$this->collectionName)), 'search' => $query ));
   return $result;

  }


}
