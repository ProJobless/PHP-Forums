<?php
echo '

            <div class="content-l">
  <div class="content-box">
    <h2 class="decorator">Create category</h2>
      <form action="/site/create_category_run" id="new_thread" method="post"><div style="margin:0;padding:0;display:inline">
    </div>
        <fieldset class="horizontal-form">


          <div class="input-category">
            <label for="thread_subject">category name</label>
            <div class="inputs">
              <input id="thread_subject" name="category_NAME" type="text" value="" maxlength="30"/>
            </div>
          </div>

          <div class="input-category">
            <label for="thread_message_content">Description</label>
            <div class="inputs">
              <textarea maxlength="70" id="thread_message_content" name="DESCRIPTION"
               onkeypress="textCounter(this,this.form.counter,70);">
</textarea>

            </div>
          </div>

               <div class="input-category">
            <label for="thread_subject">Tags</label>
            <div class="inputs">
              <input id="thread_subject" name="tags" type="text" value="" />
            </div>
          </div>
           <div class="input-category">
            <label for="thread_subject">Image link:</label>
            <div class="inputs">
              <input id="thread_subject" name="imageLink" type="text" value="http://" />
            </div>
          </div>
        </fieldset>

        <div class="form-submit">
   <input type="submit" name="CREATE_category" value="Create category">
</div>

</form>  </div>
</div>


        ';