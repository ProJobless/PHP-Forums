<?php
class Register_model extends CI_Model{


    function register()
    {
        $this->load->helper('email');
        if(($this->input->post('register'))){

            $USERNAME = $this->input->post('reg_user');
            $PASSWORD = $this->input->post('reg_pw');
            $PASSWORD_CONFIRMATION = $this->input->post('reg_pw_confirm');
            $EMAIL = $this->input->post('email');;
            $EMAIL_CONFIRMATION = $this->input->post('email_confirm');;

            if (empty($USERNAME) || empty($PASSWORD) || empty($PASSWORD_CONFIRMATION)) {
                echo "You did not enter user or pw";
            } else if (($PASSWORD != $PASSWORD_CONFIRMATION)) {
                echo "Passwords did not match";
            } else if ($USERNAME == $PASSWORD) {
                echo "Username can not be the same as the password";
            }else if(!valid_email($EMAIL)){
                echo "Invalid email";
            }else if($EMAIL != $EMAIL_CONFIRMATION){
                echo "Emails do not match";
            } else {

                $this->db->select('user_id')->from('users')->where('username',$USERNAME);
                $result = $this->db->get();
                $count = $result->num_rows();
                if ($count > 0) {
                    echo "Username already taken";
                } else {
                    $data = array(
                        "username" => $USERNAME,
                        "password" => $this->encrypt->encode($PASSWORD),
                        "email" => $EMAIL
                    );
                    $this->db->insert('users',$data);
                    send_email($EMAIL, 'Registration on Aivara forums', 'You have succefully registered on Aivara forums');

                    redirect("/");
                }
            }
        }
    }

}

