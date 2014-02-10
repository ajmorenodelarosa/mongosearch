<?php 

namespace MongoSearchBundle\Services\Finder;
use Doctrine\Common\Collections\ArrayCollection;

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


  public function find($query, $limit=10, $offset=0, $filter=array()) {

   $splitedName=split(":",$this->collectionName);
   $result = $this->db->command(array("text" => end($splitedName), 'search' => $query , 'filter'=>$filter));
   $page = array_slice($result['results'], $offset, $limit);
   $collection = new ArrayCollection();
   $repository = $this->dm->getRepository($this->collectionName);
   foreach ($page as $element) {
    
      $collection->add($repository->find($element['obj']['_id']));
 
   }


   return $collection;

  }


}
