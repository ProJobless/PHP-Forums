<?php

class Functions
{

    function displayBreadCrumbs()
    {
        $ci =& get_instance();
        echo '<a href=' .$ci->config->base_url() . ' class="first">Home \</a> ';
        $id = $ci->uri->segment(3);
        if($ci->uri->segment(2) == "register"){
            echo '<a href="" class="first">Register \</a> ';
        }
        if($ci->uri->segment(1) == "threads"){
            echo '<a href="/threads/index/'.$id.'" class="first">'.$this->getCategoryName($id).' \</a> ';
        }else if($ci->uri->segment(1) == "posts"){
            echo '<a href="/threads/index/'.$this->getCategoryId($id).'" class="first">'.$this->getCategoryNameUsingThreadId($id).' \</a> ';
            echo '<a href="/posts/index/'.$id.'" class="first">'.$this->getThreadName($id).' \</a> ';
        }
    }

    function getThreadName($thread_id)
    {
        $ci =& get_instance();
        $ci->db->select()->from('threads')->where('thread_id',$thread_id);
        $result = $ci->db->get()->result_array();
        return $result[0]['title'];
    }

    function getCategoryNameUsingThreadId($thread_id)
    {
        $ci =& get_instance();
        $ci->db->select()->from('threads')->where('thread_id',$thread_id);
        $result = $ci->db->get()->result_array();
        return $this->getCategoryName($result[0]['category_id']);
    }


    function getCategoryName($category_id)
    {
        $ci =& get_instance();
        $ci->db->select()->from('categories')->where('category_id',$category_id);
        $result = $ci->db->get()->result_array();
        return $result[0]['title'];
    }



    function getAuthorName($id)
    {
        $ci =& get_instance();
        $ci->db->select()->from('users')->where('user_id',$id);
        $result = $ci->db->get()->result_array();
        return $result[0]['username'];
    }

    function getAuthorAvatar($id)
    {
        $ci =& get_instance();
        $ci->db->select()->from('users')->where('user_id',$id);
        $result = $ci->db->get()->result_array();
        return $result[0]['avatar_link'];
    }

    function getCategoryId($thread_id){
        $ci =& get_instance();
        $ci->db->select()->from('threads')->where('thread_id',$thread_id);
        $result = $ci->db->get()->result_array();
        return $result[0]['category_id'];
    }

    function getSubcategories($category_id)
    {

        $ci =& get_instance();
        $ci->db->select()->from('categories')->where('subcategory_id',$category_id);
        $result = $ci->db->get()->result_array();

        $subcategories_ids = array();
        $subcategories_names = array();
        foreach ($result as $value) {
            array_push($subcategories_ids, $value['category_id']);
            array_push($subcategories_names, $value['title']);

        }
        $subcategories_html = array();
        for ($i = 0; $i < sizeOf($subcategories_ids); $i++) {
            array_push($subcategories_html, '<a href="/threads/index/' . $subcategories_ids[$i] . '">' . $subcategories_names[$i] . ' </a>');
        }


        return $subcategories_html;
    }

    function getThreadCount($category_id)
    {
        $COUNT = 0;
        $subcategory_ids =$this->getSubCategoryIds($category_id);
        $subsubcategory_ids = array();

        //Counts threads only in first subcategories and pushes in subsubcategories
        foreach($subcategory_ids as $key=>$value){
            array_push($subsubcategory_ids,$this->getSubCategoryId($value));
            array_push($subsubcategory_ids,$this->getSubCategoryId($this->getSubCategoryId($value)));
            array_push($subsubcategory_ids,$this->getSubCategoryId($this->getSubCategoryId($this->getSubCategoryId($value))));
            array_push($subsubcategory_ids,$this->getSubCategoryId($this->getSubCategoryId($this->getSubCategoryId($this->getSubCategoryId($value)))));
            array_push($subsubcategory_ids,$this->getSubCategoryId($this->getSubCategoryId($this->getSubCategoryId($this->getSubCategoryId($this->getSubCategoryId($value))))));
            array_push($subsubcategory_ids,$this->getSubCategoryId($this->getSubCategoryId($this->getSubCategoryId($this->getSubCategoryId($this->getSubCategoryId($this->getSubCategoryId($value)))))));

            $COUNT += $this->countThreads($value);
        }
        //counts threads in all subcategories
        foreach($subsubcategory_ids as $key=>$value){
            $COUNT += $this->countThreads($value);
        }

        // Counts only threads under first category
        $COUNT += $this->countThreads($category_id);
        return $COUNT;
    }

    function countThreads($category_id){
        $ci =& get_instance();
        $ci->db->select()->from('threads')->where('category_id',$category_id);
        $thread_count_in_category = $ci->db->get();
        return $thread_count_in_category->num_rows();
    }


    function countPosts($thread_id){
        $ci =& get_instance();
        $ci->db->select()->from('posts')->where('thread_id',$thread_id);
        $post_count_in_thread = $ci->db->get();
        return $post_count_in_thread->num_rows();
    }

    function getSubCategoryIds($category_id){
        $ci =& get_instance();
        $ci->db->select()->from('categories')->where('subcategory_id',$category_id);
        $result = $ci->db->get()->result_array();
        $subcategory_ids = array();
        foreach($result as $key=>$value){
            array_push($subcategory_ids,$value['category_id']);
        }
        return (isset($subcategory_ids) ? $subcategory_ids : false);
    }

    function getSubCategoryId($category_id){
        $ci =& get_instance();
        $ci->db->select()->from('categories')->where('subcategory_id',$category_id);
        $result = $ci->db->get()->result_array();
        return (isset($result[0]['category_id']) ? $result[0]['category_id'] : false);
    }



    function postCount($thread_id)
    {
        $ci =& get_instance();
        $ci->db->select()->from('posts')->where('thread_id',$thread_id);
        $result = $ci->db->get();
        return $result->num_rows();
    }


    function countUserPosts($user_id)
    {
        $ci =& get_instance();
        $ci->db->select()->from('posts')->where('author_id',$user_id);
        $result = $ci->db->get();
        return $result->num_rows();
    }

    function countUserThreads($user_id)
    {
        $ci =& get_instance();
        $ci->db->select()->from('threads')->where('author_id',$user_id);
        $result = $ci->db->get();
        return $result->num_rows();
    }

    function getAuthorId($username)
    {
        $ci =& get_instance();
        $ci->db->select()->from('users')->where('username',$username);
        $result = $ci->db->get()->result_array();
        return $result[0]['user_id'];
    }


    function getDateName($date)
    {
        $curdate = substr(date('d-m-Y'), 0, 10);
        $dateprovided = substr($date, 0, 10);
        if ($dateprovided == $curdate) {
            return 'Today at ' . substr($date, 10);
        } else {
            return $date;
        }
    }

    function getCurDate()
    {
        return date('d-m-Y h:i:s');
    }


    function determineReplyOrReplys($id)
    {
        if ($this->postCount($id) == 1) {
            return "reply";
        } else {
            return "replys";
        }
    }

    function determineThreadOrThreads($id)
    {
        if ($this->getThreadCount($id) == 1) {
            return "thread";
        } else {
            return "threads";
        }
    }








}

