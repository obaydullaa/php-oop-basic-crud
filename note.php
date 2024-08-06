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

    /**
     *  OOP part 19 ( data send to database )
     */


    //  index.php
    // if(isset($_POST['add'])) {
	// 	$name = $_POST['name'];
	// 	$email = $_POST['email'];
	// 	$cell = $_POST['cell'];
	// 	$uname = $_POST['uname'];

	// 	$user->userTomeJao($name, $email, $cell, $uname); // call this method
	// }


    //  User.php 
    // Class User extends Database {

    //     /**
    //      * 
    //      * User add
    //      * 
    //      */
    //     public function userTomeJao($name, $email, $cell, $uname) {
    //         parent::create("INSERT INTO users (name, email, cell, username) VALUES ('$name','$email','$cell','$uname')");
    //     }
        
    //  }

    /**
     * OOP part 20 ( data all show )
     * 
     */
    <?php
        $data = $user ->sobUserCholeAso();
        $i = 1;
        while($d = $data -> fetch_object()) :
 
    ?>
    <tr>
        <td><?php echo $i; $i++ ?></td>
        <td><?php echo $d->name ?></td>
        <td><?php echo $d->email ?></td>
        <td><?php echo $d->cell ?></td>
        <td><img src="assets/media/img/pp_photo/istockphoto-615279718-612x612.jpg" alt=""></td>
        <td>
            <a class="btn btn-sm btn-info" href="#">View</a>
            <a class="btn btn-sm btn-warning" href="#">Edit</a>
            <a class="btn btn-sm btn-danger" href="?delete_id=<?php echo $d->id ?>">Delete</a>
        </td>
    </tr>
    <?php endwhile; ?>


    /**
    * OOP part 21 ( data delete )
    */ 

    index.php 

    <a class="btn btn-sm btn-danger" href="?delete_id=<?php echo $d->id ?>">Delete</a>