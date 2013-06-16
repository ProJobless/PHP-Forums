<?php
class Categories_model extends CI_Model{


    function getCategories()
    {
        $this->db->select()->from('categories');
        $result = $this->db->get();
        return $result->result_array();
    }

    function create_category(){
        $TITLE = $this->input->post('category_NAME');
        $CONTENT = $this->input->post('DESCRIPTION');
        $AUTHOR_NAME = $this->session->userdata('USERNAME');
        $AUTHOR_ID = $this->functions->getAuthorId($AUTHOR_NAME);
        $IMAGE_LINK = $this->input->post('imageLink') == "" ? "" : $this->input->post('imageLink');
        $TAGS = $this->input->post('tags');


        $this->db->insert('categories', array(
            'title' => $TITLE,
            'content' => $CONTENT,
            'author_id' => $AUTHOR_ID,
            'image' => $IMAGE_LINK,
            'tags' => $TAGS
        ));

        redirect("/");

    }

}

