<style>

    .box {
        padding: 5px 25px 0 25px;
    }

    .box .box_title h2 {
        color: #252525;
        font-size: 17px;
        font-weight: normal;
        margin: 0 10px 0 0;
        padding: 0;
        float: left;
    }

    .box h2 {
        width: 75px;
        color: #252525;
        font-size: 17px;
        font-weight: normal;
        margin: 20px 5px 0 10px;
        padding: 0;
        float: left;
    }

    .box .box_inner {
        background-color: #f5f5f5;
        border: 1px solid #fff;
        padding: 10px;
    }

    .box_inner strong.user {
        display: block;
        margin-left: 20px;
        margin-top: 8px;
    }

    .box .box_inner2 {
        background-color: #e0e0e0;
        border: 1px solid #fff;
        padding: 10px;
    }

    .p {
        padding: 10px 10px 10px 40px;
    }

        /* FORM LIST */
    dl.form-list {
        padding: 0;
    }

    dl.form-list dt {
        width: 120px;
        display: block;
        margin-top: 10px;
        float: left;
        clear: both;
        line-height: 37px;
    }

    dl.form-list dt.small {
        width: 120px;
    }

    dl.form-list dt.large {
        width: 130px;
    }

    dl.form-list dd {
        width: 550px;
        display: block;
        margin-top: 10px;
        float: left;
    }

    dl.form-list dd.small {
        width: 420px;
    }

    dl.form-list dd.ssmall {
        width: 380px;
    }

    dl.form-list dd.middle {
        width: 450px;
    }

    dl.form-list dd small {
        display: block;
        font-style: italic;
        font-size: 11px;
        margin-top: 5px;
    }

    dl.form-list dd input.input, dl.form-list dd textarea, dl.form-list dd select {
        width: 500px;
        border: 1px solid #9a9a9a;
        color: #7c7c7c;
        font-size: 12px;
        font-family: Tahoma;
    }

    dl.form-list dd select {
        width: 516px;
    }

    dl.form-list dd.small input.input, dl.form-list dd.small textarea, dl.form-list dd.small select {
        width: 390px;
    }

    dl.form-list dd.ssmall input.input, dl.form-list dd.ssmall textarea, dl.form-list dd.ssmall select {
        width: 350px;
    }

    dl.form-list dd.small select {
        width: 408px;
        height: 25px;
        padding-top: 2px;
        border-radius: 0px;
    }

    dl.form-list dd.middle input.input, dl.form-list dd.middle textarea, dl.form-list dd.middle select {
        width: 420px;
    }

    .step {
        position: absolute;
        margin: 0 0 0 -30px;
    }

    .clr {
        clear: both;
        line-height: 0;
    }
</style>


<div class="box">
    <div class="box_inner">
        <form action="/user/register_run" method="post">
            <img src="/images/1.png" class="step" alt="Step 1" height="40" width="40"/>

            <div class="p">
                <strong>PROFILE DETAILS</strong>
                <dl class="form-list">
                    <dt>Name</dt>
                    <dd class="ssmall">
                        <input type="text" id="user_firstname" name="firstname" value="" class="input big"/><br/>
                    </dd>
                    <dt>Last name</dt>
                    <dd class="ssmall">
                        <input type="text" id="user_surname" name="lastname" value="" class="input big"/><br/>
                    </dd>
                    <dt>E-mail</dt>
                    <dd class="ssmall">
                        <input type="text" id="user_email" name="email" value="" class="big input"/>
                    </dd>
                    <dt>Retype</dt>
                    <dd class="ssmall">
                        <input type="text" name="email_confirm" value="" class="big input"/>
                    </dd>
                </dl>
                <div class="clr"></div>
            </div>

            <img src="/images/2.png" class="step" alt="Step 2" height="40" width="40"/>

            <div class="p">
                <strong>ACCOUNT INFORMATION</strong>
                <dl class="form-list">
                    <dt>Username</dt>
                    <dd class="ssmall">
                        <input type="text" name="reg_user"/><br/>
                    </dd>


                    <dt>Password</dt>
                    <dd id="password-dd" class="ssmall">
                        <input type="password" name="reg_pw"/>
                    </dd>

                    <dt>Retype</dt>
                    <dd class="ssmall">
                        <input type="password" name="reg_pw_confirm"/>
                    </dd>
                </dl>
                <div class="clr"></div>
            </div>


            <br/>
            <input type=submit name=register value=Register>

        </form>
    </div>
</div>

