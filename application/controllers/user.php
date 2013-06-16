<?php

class User extends CI_Controller {



     function login(){
        $this->load->model('login_model');
        $this->login_model->login();
    }

     function logout(){
         $this->session->sess_destroy();
         header("Location: /");
     }

    function register_run(){
        $this->load->model('register_model');
        $this->register_model->register();
    }
     function register(){
         $data['main_content'] = 'register';
         $this->load->view('template',$data);
     }

}

