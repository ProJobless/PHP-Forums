<?php

echo '
        <div id="post_reply" class="content-box" >
      <h2 class="underlined" >Post Reply</h2>
        <form action="/posts/createPost/' . $this->uri->segment(3) . '" method="post">
         <fieldset class="horizontal-form">
            <div class="input-category">
              <div class="inputs">
                <textarea id="thread_reply_content" name="body"
                style="resize: none; width:725px"></textarea>
              </div>
            </div>
    <button type="submit" name=CREATE_POST>Post Reply</button>
          </fieldset>
        </form>
        </div>



        ';