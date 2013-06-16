<?php
class Login_model extends CI_Model{


    function login(){
        $USERNAME = $this->input->post('username');
        $PASSWORD = $this->input->post('password');
        if (empty($PASSWORD) || empty($USERNAME)) {
            header('location: /');
        } else {

            $this->db->select('user_id')->from('users')->where('username',$USERNAME)->where('password',$this->encrypt->decode($PASSWORD));
            $result = $this->db->get();
            if ($result->num_rows() > 0) {
                // login
                $this->session->set_userdata('loggedIn', true);
                $this->session->set_userdata('USERNAME', $USERNAME);
             }
            redirect($_SERVER['HTTP_REFERER']);
        }
    }



}

