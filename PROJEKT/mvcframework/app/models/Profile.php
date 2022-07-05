<?php
class Profile{
    private $db;

    public function __construct(){
        $this->db = new Database;
    }

    public function findProfile(){
        $this->db->query('SELECT username,pfpname,pfploc FROM profiles where user_id='.$_SESSION['user_id']);

        $result = $this->db->single();

        return $result;
    }

    public function upload($data){
        $this->db->query('INSERT INTO profiles (user_id,username,pfpname) VALUES (:user_id,:username,:pfpname)');

        $this->db->bind(':user_id',$data['user_id']);
        $this->db->bind(':username',$data['username']);
        $this->db->bind(':pfpname',$data['pfpname']);

        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }

    public function updateProfile($data){
        $this->db->query('UPDATE profiles SET pfpname = :pfpname, WHERE id = :id');
        
        $this->db->bind(':id',$data['id']);
        $this->db->bind(':pfpname',$data['pfpname']);

        if($this->db->execute()){
            return true;
        }else{
            return false;
        }

    }

    /*public function deleteProfile(){
        $this->db->query('DELETE * FROM profiles WHERE id = :id');

        $this->db->bind(':id',$id);

        if($this->db->execute()){
            return true;
        }else{
            return false;
        }

    }*/



}