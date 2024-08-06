<?php

/**
 * User Management system 
 */

 Class User extends Database {

    /**
     * 
     * User add
     * 
     */
    public function userTomeJao($name, $email, $cell, $uname) {
        parent::create("INSERT INTO users (name, email, cell, username) VALUES ('$name','$email','$cell','$uname')");
    }


    /**
     * 
     * All User
     *      
     * */
    public function sobUserCholeAso() {
       return  parent::all('users');
    }


    /**
     * Delete User Account
     */

   public function userDhonso($id) {
      parent::delete('users', $id);
   }
    
 }



