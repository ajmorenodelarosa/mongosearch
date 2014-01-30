<?php
namespace MongoSearch;
require 'Finder.php';

$finder = new Finder('User', 'contact_center');
print_r($finder->find('test'));
print_r($finder->find('admin'));

?>
