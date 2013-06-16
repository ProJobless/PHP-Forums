<?php
class Threads_model extends CI_Model{


    function getThreads($id,$limit=10000, $start=0)
    {
        $this->db->select()->from('threads')->where('category_id',$id)->order_by("date", "desc")->limit($limit, $start);
        $result = $this->db->get();
        return $result->result_array();
    }

    function getSubCategories($category_id){
        $this->db->select()->from('categories')->where('subcategory_id',$category_id);
        $result = $this->db->get()->result_array();
        //print_r ($result);
        return $result;
    }

    function create_thread($category_id){

        $NAME = $this->input->post('name');
        $category_ID = $category_id;
        $AUTHOR_NAME = $this->session->userdata('USERNAME');
        $AUTHOR_ID = $this->functions->getAuthorId($AUTHOR_NAME);
        $DATE = $this->functions->getCurDate();
        $DESCRIPTION = $this->input->post('description');

        $this->db->insert('threads', array(
            'title' => $NAME,
            'category_id' => $category_ID,
            'author_id' => $AUTHOR_ID,
            'date' => $DATE,
            'content' => $DESCRIPTION
        ));


         $sqlRetrieveThreadId = $this->db->select()->from('threads')->where(array(
            'title' => $NAME,
            'category_id' => $category_ID,
            'author_id' => $AUTHOR_ID,
            'date' => $DATE));
        $sqlRetrieveThreadId2 = $sqlRetrieveThreadId->get()->result_array();
        $TOPIC_ID = $sqlRetrieveThreadId2[0]['thread_id'];
        $post_data = array(
            'content' => $DESCRIPTION,
            'thread_id' => $TOPIC_ID,
            'author_id' => $AUTHOR_ID,
            'date' => $DATE
        );
        $this->db->insert('posts', $post_data);



        redirect("/threads/index/" . $category_ID);
    }

}

