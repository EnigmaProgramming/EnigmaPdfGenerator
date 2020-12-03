<?php

require_once 'tools.php';

class pdfGenerator{
 #region properties
  protected $configs = [];
  protected $pdfInstance = null;
  protected $currentDisplayString = null;
  protected $cachePath;
  protected $savePath;
  protected $fileName;

#endregion

#region Constructor
 public function __construct(string $cachePath = "", string $savePath = "", string $fileName = ""){
  $this->customConfigs();
  $this->pdfInstance = $this->createInstance();
  empty($cachePath) ? null : $this->cachePath = $cachePath;
  empty($savePath) ? null : $this->savePath = $savePath;
  empty($fileName) ? null : $this->fileName = $fileName;
 }
#endregion

#region public methods
 public function display(){
   var_dump($this->configs);
 }

 #region Setters
 public function setConfigs(array $configs){
   foreach($this->configs as $k => $v){
     if($v != $configs[$k]){
       $this->setSingleConfig($k,$configs[$k]);
     }
   }
 }

 public function setSingleConfig(string $configKey, string $configValue){
   $this->configs[$configKey] = $configValue;
 }

 public function setInstance(pdfGenerator $instance){
   is_null($instance) ? $this->pdfInstance = $instance : null;
 }

 public function setDisplayString(string $displayString){
   is_null($displayString) ? $this->currentDisplayString = $displayString : null;
 }

 public function setCachePath(string $cachePath){
   is_null($cachePath) ? $this->cachePath = $cachePath : null;
 }

 public function setSavePath(string $savePath){
   is_null($savePath) ? $this->savePath = $savePath : null;
 }

 public function setFileName(string $fileName){
   is_null($fileName) ? $this->fileName = $fileName : null;
 }
 #endregion

 #region Getters
 public function getSingleConfig(string $configKey){
   return $this->configs[$configKey];
 }

 public function getInstance(){
   return $this->pdfInstance;
 }

 public function getDisplayString(){
   return $this->currentDisplayString;
 }

 public function getCachePath(){
   return $this->cachePath;
 }

 public function getSavePath(){
   return $this->savePath;
 }

 public function getFileName(){
   return $this->fileName;
 }
 #endregion
 #endregion

 #region protected functions
 protected function customConfigs(){
   $this->configs = $this->getCustomConstants();
 }

 protected function getCustomConstants(){
   $tempUserConstants = get_defined_constants(true);
   $returnVal = [];

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

 protected function createInstance(){

 }
 #endregion
}