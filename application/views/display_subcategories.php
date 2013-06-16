
<?php
foreach($subcategories as $key=>$value){


    $SUBCATEGORY_ID = $value['subcategory_id'];
    $ID = $value['category_id'];
    $NAME = $value['title'];
    $DESCRIPTION = $value['content'];
    $AUTHOR = $this->functions->getAuthorName($value['author_id']);
    $IMAGE_LINK = $value['image'];
    $AUTHOR_AVATAR = $this->functions->getAuthorAvatar($value['author_id']);
    $USERNAME_ID = 0;
    if ($this->session->userdata('loggedIn')) {
        $USERNAME = $this->session->userdata('USERNAME');
        $USERNAME_ID = $this->functions->getAuthorId($USERNAME);
    }
    $SUBCATEGORIES_ARRAY = $this->functions->getSubcategories($ID);
    $SUBCATEGORIES = null;
    foreach ($SUBCATEGORIES_ARRAY as $val) {
        $SUBCATEGORIES .= $val . " ";
    }

    if ($this->uri->segment(3) == $SUBCATEGORY_ID) {


        echo '
<li class="thread">
    <div class="thread__poster-thumbs">
        <img src="' . $IMAGE_LINK . '" width="80" height="80"/>

        <img class="thread__poster-thumbs__latest-replied" height="40"
             src="' . $AUTHOR_AVATAR . '"
             width="40"/>
    </div>

    <div class="thread__content">
        <h4 class="thread__title">

            ' . "<a href='/threads/index/$ID'>$NAME</a>" . '

        </h4>

        <p>
            ' . $DESCRIPTION . '


        </p>
        <p> <strong>Subcategories: </strong>  ' . $SUBCATEGORIES . ' </p>
    </div>

    <div class="thread__meta">

          <span>
            <strong>' . $this->functions->getThreadCount($ID) . '</strong>
            <small>' . $this->functions->determineThreadOrThreads($ID) . '</small>
          </span>
    </div>


</li>

   ';
    }

}
?>
<br>