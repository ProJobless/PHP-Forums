<?php
class Posts_model extends CI_Model{


    function getPosts($thread_id,$limit=10000, $start=0)
    {
        $this->db->select()->from('posts')->where('thread_id',$thread_id)->order_by("date", "desc")->limit($limit, $start);
        $result = $this->db->get();
        return $result->result_array();
    }

    function createPost($thread_id){
        $THREAD_ID = $thread_id;
        $BODY = $this->input->post('body');
        $AUTHOR_NAME = $this->session->userdata('USERNAME');
        $AUTHOR_ID = $this->functions->getAuthorId($AUTHOR_NAME);
        $DATE = $this->functions->getCurDate();


        $this->db->insert('posts', array(
            'content' => $BODY,
            'thread_id' => $THREAD_ID,
            'author_id' => $AUTHOR_ID,
            'date' => $DATE
        ));


        redirect("/posts/index/" . $thread_id);
    }

}

