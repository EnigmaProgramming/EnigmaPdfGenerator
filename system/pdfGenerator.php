<?php

require_once 'tools.php';

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
     $tArray = [];
     foreach($tempUserConstants['user'] as $k => $v){
       if(Tools::startsWith($k,'pdf_')){
         $tArray[substr($k,4)] = $v;
       }
     }
     $returnVal = $tArray;
   }
   return $returnVal;
 }
 #endregion
}