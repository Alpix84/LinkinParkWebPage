<?php
class Profiles extends Controller {
    public function __construct(){
        $this->profileModel = $this->model('Profile');
    }

    public function index(){
        $profile = $this->profileModel->findProfile();
        $data = [
            'profile' => $profile
        ];
        $this->view('profiles/index',$data);
    }

    public function create(){
        $this->view('profiles/create');
    }

    public function upload(){
        $this->view('profiles/upload');

    }
}