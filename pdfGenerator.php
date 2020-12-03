<?php
class pdfGenerator{
 #region properties
  protected $configs = array();
  protected $pdfInstance;
#endregion

 public function __construct(){

  $this->customConfigs();
 }

 public function display(){
   var_dump($this->configs);
 }

 #region protected functions
 protected function customConfigs(){
   $this->configs = $this->getCustomConstants();
 }

 protected function removeEmptyConfigs(){
   $temp = array_filter($this->configs);
   return $temp;
 }

 protected function getCustomConstants(){
   $tempUserConstants = get_defined_constants(true);
   $returnVal = "";

   if(isset($tempUserConstants['user'])){
     $returnVal = $tempUserConstants['user'];
   }

   return $returnVal;
 }
 #endregion
}