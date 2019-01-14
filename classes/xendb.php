<?php

class XenDB {
  public function __construct() {

  }

  private $statesdb = array();

  public function ReadDB() {

    $this->statesdb = simplexml_load_file(__DIR__ . "/../data/state.db");

    $json = json_encode($this->statesdb);
    $this->statesdb = json_decode($json, true);

    return $this->statesdb;
  }
}

?>
