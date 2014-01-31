About MongoSearchBundle
=======================



Installation:
-------------


How you actually download the bundle is entirely up to you.  The easiest way is to grab it from [packagist.org](http://packagist.org/).

[https://packagist.org/packages/ajmorenodelarosa/mongosearch](https://packagist.org/packages/ajmorenodelarosa/mongosearch)


Usage examples:
---------------

The most basic search would be:

``` php
$db = $this->get('doctrine_mongodb')->getManager();
$finder = $this->get('mongosearch.finder')->finder('UserManagementBundle:User',$db);
$finder->find("test");
```

We will create a finder object using finder method of our service which will allow us find into our collection using any string. 
You can also perform paginated searches, such as:

``` php
$limit = 10;
$offset = $current_page*$limit;
$db = $this->get('doctrine_mongodb')->getManager();
$finder = $this->get('mongosearch.finder')->finder('UserManagementBundle:User',$db);
$finder->find("test", $limit, $offset);
```

We will work to allow performe more advanced searches in future releases



License:
--------

```
Copyright (c) 2014, Antonio José Moreno de la Rosa
All rights reserved.

Redistribution and use in source and binary forms, with or without
modification, are permitted provided that the following conditions are met: 

1. Redistributions of source code must retain the above copyright notice, this
   list of conditions and the following disclaimer. 
2. Redistributions in binary form must reproduce the above copyright notice,
   this list of conditions and the following disclaimer in the documentation
   and/or other materials provided with the distribution. 

THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND
ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED
WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE
DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT OWNER OR CONTRIBUTORS BE LIABLE FOR
ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES
(INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES;
LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND
ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
(INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS
SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
```
