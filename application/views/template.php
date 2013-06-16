<?php

$this->load->view('inc/header');
if(isset($main_content)){
    $this->load->view($main_content);
}
if(isset($main_content2)){
    $this->load->view($main_content2);
}
$this->load->view('inc/footer');
