<?php
    class User{
        private $db;

        public function __construct(){
            $this->db = new Database;
        }

        public function register($data){
            $this->db->query('INSERT INTO users (username, email, password) VALUES 
            (:username,:email,:password)');

            $this->db->bind(':username',$data['username']);
            $this->db->bind(':email',$data['email']);
            $this->db->bind(':password',$data['password']);

            if($this->db->execute()){
                $this->db->query('SELECT id FROM USERS WHERE username = :username');
                $this->db->bind(':username',$data['username']);
                $row = $this->db->single();
                $this->db->query('INSERT INTO profiles (user_id,username) VALUES (:user_id,:username)');
                $this->db->bind(':user_id',$row->id);
                $this->db->bind(':username',$data['username']);

                if($this->db->execute()){
                    return true;
                }else{return false;}
            }else{return false;}
        }

        public function login($username,$password){
            $this->db->query('SELECT * FROM USERS WHERE username = :username');
            
            $this->db->bind(':username',$username);
            
            $row = $this->db->single();

            $hashedPassword = $row->password;

            if(password_verify($password, $hashedPassword)){
                return $row;
            }else{
                return false;
            }
        }

        public function findUserByEmail($email){
            $this->db->query('Select * from users WHERE email = :email');
            
            $this->db->bind(':email',$email);

            $this->db->execute();

            if($this->db->rowCount() > 0){
                return true;
            }else{return false;}
        }
    }