<?php

/**
 * Database Management system 
 */

 abstract Class Database {
    private $host = "localhost";
    private $user = "root";
    private $pass = "";
    private $db = "basic_crud";
    private $connection;

    /**
     * Database Connection
     */

     private function connection() {
        return $this->connection = new mysqli($this->host, $this->user, $this->pass, $this->db);
     }

     /**
      * Create Data
      */
      protected function create() {

      }

     /**
      * Find Data
      */
      protected function find() {

      }

     /**
      * delete Data
      */
      protected function delete() {

      }

     /**
      * Update Data
      */
      protected function update() {

      }

     /**
      * All Data
      */
      protected function all() {

      }

     /**
      * where Data
      */
      protected function where() {

      }

     /**
      * orwhere Data
      */
      protected function orWhere() {

      }


    
 } 