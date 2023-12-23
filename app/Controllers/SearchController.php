<?php
namespace App\Controllers;
use App\Models\UserModel;
use App\Models\Job;
class SearchController{
   
     public function search(){
      $search= new Job();
      
if(isset($_GET["key"])|| isset($_GET["company"])||isset($_GET["location"])){
   $result= $search->search($_GET["key"],$_GET["company"],$_GET["location"]);
     $search->search($_GET["key"],$_GET["company"],$_GET["location"]);
     echo json_encode($result);
   }
    
}
}
?>