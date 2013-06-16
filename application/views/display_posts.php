<?php
echo "<p style='text-align:right'>$links</p>";
foreach ($posts as $value) {

    $BODY = $value['content'];
    $AUTHOR = $this->functions->getAuthorName($value['author_id']);
    $AUTHOR_AVATAR = $this->functions->getAuthorAvatar($value['author_id']);

    $DATE = $value['date'];
    $POST_TOPIC_ID = $thread_id;

    echo '

<div class="forums">
    <div id="808743" class="user-post">
      <div class="user-post__poster">
  <div class="post-avatar">
    <div class="post-avatar__image">
<div class="avatar-wrapper tooltip--advanced">
    <a href="" class="avatar" title="">
  <img class="" height="80" src="' . $AUTHOR_AVATAR . '" width="80" />
</a>
</div>
    </div>
    <small class="post-avatar__count">' . ($this->functions->countUserPosts($value['author_id'])). ' posts </small>
      <div class="post-avatar__badges">
        <ul class="badges">




   </ul>
      </div>
  </div>
</div>
      <div class="user-post__post" id="message_content_808743">
        <div class="user-post__edit-container">
  <div class="user-post-header">
    <a href="">' . $AUTHOR . '</a>
    <small>says</small>
  </div>


  <div class="user-html"><p>' . $BODY . '</p></div>
<div class="user-post-footer">
  <a href="">' . $this->functions->getDateName($DATE) . '</a>
</div>
<div class="insert-partial-container"></div>
        </div>
      </div>
    </div>
</div>

';

}
echo "<p style='text-align:right'>$links</p>";



