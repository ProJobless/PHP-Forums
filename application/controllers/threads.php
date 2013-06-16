<?php

class Threads extends CI_Controller {

    public function index($id)
    {
        $this->load->model('threads_model');
        $this->load->library('pagination');

        $config['total_rows'] = $this->functions->countThreads($id);
        $config["base_url"] = base_url()."/threads/index/". $id;
        $config["total_rows"] = count($this->threads_model->getThreads($id));
        $config["per_page"] = HOW_MANY_THREADS_TO_DISPLAY;
        $config["uri_segment"] = 4;
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = round($choice);
        $this->pagination->initialize($config);
        $page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
        $data["threads"] = $this->threads_model->
            getThreads($id,$config["per_page"], $page);
        $data["links"] = $this->pagination->create_links();


        $data['subcategories'] = $this->threads_model->getSubCategories($id);
        $data['main_content'] = "display_subcategories";
        $data['main_content2'] = "display_threads";
        $data['category_id'] = $id;
        $this->load->view('template',$data);
    }


    public function create_thread(){
        $data['main_content'] = "create_thread";
        $this->load->view('template',$data);
    }

    public function create_thread_run($category_id){
        $this->load->model('threads_model');
        $this->threads_model->create_thread($category_id);
    }

}

