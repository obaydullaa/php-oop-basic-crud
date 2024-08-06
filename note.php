/**
*****5 August 2024
*****====================*****
* Crud Applications
 */


 /**
  * OOP part 16 ( Database class design )
  * Create Database folder app and -> create 2 folder Controller and Support .
  
 
  Controller ->
    Staff.php
    Student.php
    Teacher.php
    User.php

Support.php ->
    Auth.php
    Database.php

*/
<?php 

/**
 * OOP part 16 ( Database class design )
 */

//  Database.php  
 
//  abstract Class Database {
//     private $host = "localhost";
//     private $user = "root";
//     private $pass = "";
//     private $db = "basic_crud";
//     private $connection;

//     /**
//      * Database Connection
//      */

//      private function connection() {
//         return $this->connection = new mysqli($this->host, $this->user, $this->pass, $this->db);
//      }

//      /**
//       * Create Data
//       */
//       protected function create() {

//       }

//      /**
//       * Find Data
//       */
//       protected function find() {

//       }

//      /**
//       * delete Data
//       */
//       protected function delete() {

//       }

//      /**
//       * Update Data
//       */
//       protected function update() {

//       }

//      /**
//       * All Data
//       */
//       protected function all() {

//       }

//      /**
//       * where Data
//       */
//       protected function where() {

//       }

//      /**
//       * orwhere Data
//       */
//       protected function orWhere() {

//       }

//  } 


/**
 * OOP part 17 ( Add form design )
 * Done
 */

 /**
  * OOP part 18 ( Data send to controller )
  */


//   index.php 

// <?php
// 	include_once "autoload.php";
// 	$user = new User();
// 


	/**
	 * Isseting Form
	 */

	// if(isset($_POST['add'])) {
	// 	$name = $_POST['name'];
	// 	$email = $_POST['email'];
	// 	$cell = $_POST['cell'];
	// 	$uname = $_POST['uname'];

	// 	$user->userTomeJao($name, $email, $cell, $uname);
	// } 

    // User.php ->
    //------------------------
    
    // Class User {

    //     /**
    //      * 
    //      * User add
    //      * 
    //      */
    //     public function userTomeJao($name, $email, $cell, $uname) {
    //         echo "My name is " . $name;
    //     }
        
    //  }