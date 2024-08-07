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
    ------------------------ 
    
	if(isset($_GET['delete_id'])) {
		$id = $_GET['delete_id'];
		$user->userDhonso($id);
		// header("location:index.php");
	}

    <a class="btn btn-sm btn-danger" href="?delete_id=<?php echo $d->id ?>">Delete</a>

    User class 
    ------------------------ 
    
   public function userDhonso($id) {
      parent::delete('users', $id);
   }


   Database.php 
   ------------------- 
   protected function delete($table, $id) {
        $this->connection()->query("DELETE FROM $table WHERE id='$id'");
      }


      /**
      *  OOP part 22 ( Quarity string dev )
      */
      Namespace  -> নেমস্পেস মুলত ডিরেক্টরি বা ফাইলের লোকেশন ।
আমাদের প্রজেক্টে একই নামের কয়েকটা ক্লাস থাকতে পারে, একটা ক্লাসের সাথে আরেকোটা ক্লাস ফ্লাস না হয়ে  যায় এই জন্য Namespace ব্যাবহার করতে হয় । 

একাধিক function , class , interface , constant , trait , abstract  থাকতে পারে একটা  আরেকোটার সাথে ফ্লাস না হয় এই জন্য Namespace ব্যাবহার করতে হয় । 

laravel এর একটি ফাইল একটা নেমস্পেস হবে । বাকি গুলা use ব্যবহার করে নেমস্পেশ দেখাতে হয়  ।

আপানার লারাভেল প্যাকেজে বা অন্য যেকোনো পি এইচ পি ডেভেলপমেন্ট প্রোজেক্ট এ যদি একই নামে একাধিক function , class , interface , constant , trait , abstract থাকে তখন সমস্যা সৃষ্টি হবে । কোন টা ব্য্যবহার হচ্ছে সেটা ফিক্স করা সম্ভব না । এই সমস্যা সমাধানের জন্য নেমস্পেস ব্যবহার করা হয় ।

নেমস্পেসের মাধ্যমে ইমপোর্ট করা হয় use operator দিয়ে ।

একই নামের ২ টা ক্লাস থকলে Alias user করতে হবে  alias user kora hoi as diye।

use App\Controller\Student;
use AppSupport\Student\Student as MyStudent

$stu = new MyStudent;

      /**
      * OOP part 23 ( Namespace )
      */