<?php 
namespace App\Models;


use DB;

class User {

    public $id;
    public $first_name;
    public $last_name;
    public $email;
    public $phone;

    /**
     * Save (Call Insert or Update)
     */
    public function save() {
        if (empty($this->id)) {
            $this->insert();
        } else {
            $this->update();
        }
    }

    /**
     * Create
     */
    private function insert() {

        // SQL
        $sql = "
            INSERT INTO user (first_name, last_name, email, phone)
            VALUES (:first_name, :last_name, :email, :phone)
            ";

        // Execute
        DB::insert($sql, [
                'first_name' => $this->first_name, 
                'last_name' => $this->last_name, 
                'email' => $this->email,
                'phone' => $this->phone
            ]);
    }

    /**
     * Update User
     */
    private function update() {
        // SQL
        $sql = "update user set first_name = :first_name, last_name = :last_name, email = :email, phone = :phone where id = :id";
        // Execute
        DB::update($sql, [
            'first_name' => $this->first_name,
            'last_name' => $this->last_name, 
            'email' => $this->email,
            'phone' => $this->phone,
            'id' => $this->id
            ]);
    }

    /**
     * Delete
     */
    public static function delete($id) {
        // SQL
        $sql = "delete from user where id = :id";
        // Execute
        $row = DB::delete($sql, ['id' => $id]);
    }

    /**
     * Get User
     */
    public static function get($id) {

        // SQL
        $sql = "SELECT * FROM user WHERE id = :id";

        // Execute
        $row = DB::selectOne($sql, ['id' => $id]);
        // Start a new User Object
        return User::createUserFromRow($row);
    }

    // Get All Users
    public static function getAll() {
        // SQL
        $sql = "select * from user";
        // Execute
        $rows = DB::select($sql);

        $users = [];
        foreach($rows as $row){
            $users[]= User::createUserFromRow($row);
        }
        return $users;
    }

    protected static function createUserFromRow($row){
        $user = new User();
            $user->id = $row['id'];
            $user->first_name = $row['first_name'];
            $user->last_name = $row['last_name'];
            $user->email = $row['email'];
            $user->phone = $row['phone'];
            return $user;
    }

}
