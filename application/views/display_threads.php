<?php
echo "<p style='text-align:right'>$links</p>";
foreach($threads as $value) {
    $THREAD_ID = $value['thread_id'];
    $NAME = $value['title'];
    $DESCRIPTION = $value['content'];
    $AUTHOR = $this->functions->getAuthorName($value['author_id']);
    $AUTHOR_AVATAR = $this->functions->getAuthorAvatar($value['author_id']);
    $DATE = $value['date'];
    $THREAD_category_ID = $category_id;


    echo '

            <li class="post2">
    <div class="post2__poster-thumbs">
        <img src="' . $AUTHOR_AVATAR . '" width="60" height="60"/>


    </div>

    <div class="post2__content">
        <h4 class="post2__title">

             <a href=/posts/index/' . $THREAD_ID . '>' . $NAME . '</a>

            </h4>

        <p>
           Started by ' . $AUTHOR . ', ' . $this->functions->getDateName($DATE) . '


    </p>
    </div>

    <div class="post2_meta">
          <span>
            <strong>' . $this->functions->postCount($THREAD_ID) . '</strong>
            <small>' . $this->functions->determineReplyOrReplys($THREAD_ID) . '</small>
          </span>
    </div>


</li>

    ';
}

echo "<p style='text-align:right'>$links</p>"

?>
