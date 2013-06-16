<?php

class Site extends CI_Controller {

	public function index()
	{
        $this->load->model('categories_model');
        $data['categories'] = $this->categories_model->getCategories();
        $data['main_content'] = "display_categories";
        $this->load->view('template',$data);
	}

    public function create_category(){
        $data['main_content'] = "create_category";
        $this->load->view('template',$data);
    }

    public function create_category_run(){
        $this->load->model('categories_model');
        $this->categories_model->create_category();
    }


}

