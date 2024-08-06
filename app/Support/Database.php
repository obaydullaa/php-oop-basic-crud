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
      protected function create($sql) {
        $this->connection()->query($sql);
      }

     /**
      * Find Data
      */
      protected function find() {

      }

     /**
      * delete Data
      */
      protected function delete($table, $id) {
        $this->connection()->query("DELETE FROM $table WHERE id='$id'");
      }

     /**
      * Update Data
      */
      protected function update() {

      }

     /**
      * All Data
      */
      protected function all($table, $order= "DESC") {
        return $this->connection()-> query("SELECT * FROM $table ORDER by id $order");
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