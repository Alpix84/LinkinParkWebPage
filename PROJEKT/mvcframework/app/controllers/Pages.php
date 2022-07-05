<?php
class Pages extends Controller {
    public function __construct(){
        $this->userModel = $this->model('User');
    }

    public function index(){

        //$users = $this->userModel->getUsers();

        $data = [
            'title' => 'Home page',
        ];
        $this->view('pages/index',$data);
    }

    public function albums(){
        $this->view('pages/albums');
    }

    public function songs(){
        $this->view('pages/songs');
    }

}