<?php
$_url = $_SERVER['REQUEST_URI'];
$_url = rtrim($_url, '/');
$_url = filter_var($_url, FILTER_SANITIZE_URL);
$_url = explode('/', $_url);
$category_id = $_url[3];
echo '

  <div class="content-box">
    <h2 class="decorator">Start Thread</h2>
      <form action="/threads/create_thread_run/'.$category_id.'" id="new_thread" method="post"><div style="margin:0;padding:0;display:inline">
     </div>
         <fieldset class="horizontal-form">
          <div class="input-category">


          <div class="input-category">
            <label for="thread_subject">Subject</label>
            <div class="inputs">
              <input id="thread_subject" name="name" type="text" value="" />
            </div>
          </div>

          <div class="input-category">
            <label for="thread_message_content">Post</label>
            <div class="inputs">
              <textarea id="thread_message_content" name="description" style="resize: none;"></textarea>

            </div>
          </div>


        </fieldset>

        <div class="form-submit">
<button type="submit" name=CREATE_THREAD>Create Thread</button>
</div>

</form>  </div>


            ';