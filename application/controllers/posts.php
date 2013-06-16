<?php

class Posts extends CI_Controller {

    public function index($thread_id)
    {
        $this->load->model('posts_model');
        $this->load->library('pagination');

        $config['total_rows'] = $this->functions->countPosts($thread_id);
        $config["base_url"] = base_url()."/posts/index/". $thread_id;
        $config["total_rows"] = count($this->posts_model->getPosts($thread_id));
        $config["per_page"] = HOW_MANY_POSTS_TO_DISPLAY;
        $config["uri_segment"] = 4;
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = round($choice);
        $this->pagination->initialize($config);
        $page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
        $data["posts"] = $this->posts_model->
            getPosts($thread_id,$config["per_page"], $page);
        $data["links"] = $this->pagination->create_links();


        $data['main_content'] = "display_posts";
        $data['main_content2'] = "create_post";
        $data['thread_id'] = $thread_id;
        $this->load->view('template',$data);

    }

    public function createPost($thread_id){
        $this->load->model('posts_model');
        $this->posts_model->createPost($thread_id);
    }
}

