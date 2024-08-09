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
      *  OOP part 24 ( autoload )
      */

      index.php
      -------------------

      autoload.php 
      -------------------
        /**
        * Class Loading System
        */

        spl_autoload_register(function ($class_name) {
            include_once $class_name .".php";
        });




      <?php 
        include_once "autoload.php";


        use App\Controllers\Staff;
        use App\Support\Student\Student;

        $stu = new Staff;
        $user = new Student;
        $stu->staff();
        echo "<br>";
        $user->info();

        /**
         * OOP part 25 ( psr 4 part 1 )
         * pacagists website for package management 
         */

         1. Dwonload Composer
         2. Composer init
         2. Github user name  -> Obaydullaa/oopname
            package descriptions -> this is test project
            Minimum Stability -> stable
         4. licence MIT


         psr 4 
         -------- 
         PSR-4 stands for "PHP Standards Recommendation 4". It is a standard developed by the PHP Framework Interoperability Group (FIG) that describes a specification for autoloading classes from file paths. The goal of PSR-4 is to provide a standardized way to load PHP classes automatically without having to manually include them.

         auto crate comoser.json
         {
            "name": "obaydulla/ooptest",
            "description": "This is a test project.",
            "type": "project",
            "license": "MIT",
            "minimum-stability": "stable",
            "require": {}
            "autoload": {
                "psr-4": {
                    "App\\": "app";
                }
            }
        }
        

         /**
          * OOP part 26 ( psr 4 part 2 )
          */
            Discus with composer. 




            /**
             *  OOP part 27 ( interface, implements )
             */
            * interface
            -------------------
            ইন্টারফেস ক্লাস (Interface Class) : এর আগে এবস্ট্রাক্ট ক্লাস সম্পর্কে আলোচনা হয়েছে।এবস্ট্রাক্ট ক্লাস আর ইন্টারফেস ক্লাস হুবহু একই শুধু পার্থক্য হচ্ছে এবস্ট্রাক্ট ক্লাসে এবস্ট্রাক্ট মেথড ছাড়াও অন্য মেথড থাকতে পারে এবং এই মেথডের ভিতর কোড থাকতে পারে (সাধারনত এটাকে মেথড বডি বলে) আর ইন্টারফেস ক্লাসে কোন মেথডে বডি থাকতে পারবেনা।
            
            interface onno onno class ke baddo kore kaj korar jonno...... aikhane method mody thakbe na eta implements  korte hoi not extends
             example....
            interface Student {
                public function dev($name, $age);
            }

            class Users implements Student {
                function dev($name, $age) {
                    echo "I am " .$name . $age;
                }
            }

            $dev = new Users;

            $dev->dev('interface', 20);

            /**
             * OOP part 28 ( Trait )
             */

multiple inheretence kora jai. php te multiple inheretence nai ........ ja class a dorkar sekhane  use keword diye extend korte hoi.

Example:- 
 Trait A {
    public function dev() {
        return "I am from Dev A";
    }
    public function play() {
        return "I am love to Play A";
    }
    public function game() {
        return "I am play game to A";
    }
 }

 class B {
    public function food() {
        return "I am food from B";
    }
 }

 class C extends B {
    use A;
 }

 $c = new C;
 echo $c->play();


 /**
  * OOP part 29 ( method chain )
  */

  class Student {

    private $name = "Obaydulla";
    private $age = 5;
    private $dev = "Laravel Developer";


    /**
     * Set Student name
     */
     public function setName($name) {
        $this-> name = $name;
        return  $this;
     }

    /**
     * Set Student age
     */

     public function setAge($age) {
        $this-> age = $age;
        return  $this;
     }

     
    /**
     * Set Student name
     */
    public function setDev($dev) {
        $this-> dev = $dev;
        return  $this;
     }

    /**
     * info methods
     */
    public function info() {
        return "My name is ". $this->name ." & I am ". $this->age ." years old and I am a " . $this->dev ;
    }
 }

 $student = new Student;

 echo $student -> setDev("Java Developer") -> setName("Refat")->setAge(150)->info();


/**
 * OOP part 30 ( magic method )
 *   1. __construct() & __destruct() method call korte hoi na automatic load hoye jai. ader before dubble under score thake.
 * * __get() -> ja property golo nai or private kora sei property golo dorte pare.. eta only propery ar magic method
 * __set() holo amon ekta method jeta nai or provate kora setar value dore amra kaj korte parbo. example echo $a -> name = 'Refat'; value set kore dilam 
 * __call() holo ja method golo nai sei golo dora jai... its call __call() method
 */

 // __get() & __set() method
//  class A {
//     private $name = "Obaydulla";
//     public $age = 20;
//     public $job = "Laravel Developer";

//     public function info() {

//     }

//     public function __get($property) {
//         echo $property . " Property is Invalid";
//     }

//     public function __set($propery, $value) {
        
//     }

//  }

//  $a = new A;

//  echo $a -> name; // get 
//  echo $a -> name = "Refat"; // set


// __call() method holo ja method golo nai sei colo catch korte pare.
//  class A {
//     private $name = "Obaydulla";
//     public $age = 20;
//     public $job = "Laravel Developer";

 

//     public function __call($method, $agrs) {
//         echo $method . " method is invalid";
//     }

//  }

//  $a = new A;

// //  echo $a -> name = 'Refat'; // __set() exmamples 

//  echo $a -> play();  