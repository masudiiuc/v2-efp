
<div class="login-form">
    <h4>Login </h4>
    <hr/>
    <form  id="LoginForm" class="form-horizontal" method="post" action="<?php echo base_url() ?>organic/index/login">
        <div class="control-group">
            <label class="control-label" for="inputEmail">Email</label>
            <div class="controls">
                <input type="text" name="email" class="span8 required email" id="inputEmail" placeholder="Email">
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="inputPassword">Password</label>
            <div class="controls">
                <input type="password" name="password" class="span8 required" minlength="6" id="inputPassword" placeholder="Password">
            </div>
        </div>
        <div class="control-group">
            <div class="controls">
                <label class="checkbox">
                    <input type="checkbox"> Remember me
                </label>
                <input type="submit" name="login" id="login" value="Sign in">

            </div>
        </div>
    </form>
</div>