<?php page('/partials/head'); ?>
    <header class="flex center">
        <h2>Membership</h2>
    </header>
    <div class=" flex center row ">
        <div class="column ">
            <div class="home content">
                <h4 style="text-align: center">Log In</h4>
                <form method="post" action="sign-in" style="margin: 15px">
                    <span class="success"><?php if(isset($success)){echo $success; } ?></span>
                    <span class="error"><?php if(isset($error)){echo $error; } ?></span>

                    <div class="form-group">
                        <div>
                            <label>Email Address:</label>
                        </div>
                        <div>
                            <input name="email" id="user_email" type="email" required/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>
                            Password
                        </label>
                        <input name ="password" type="password" required />
                    </div>

                    <div class="form-group">
                        <div>
                            <input type="submit" name="save" value="Sign In" id="save" class="button"
                                   style="float: right" required/>
                        </div>
                    </div>
                </form>
                <div style="margin-top: 100px; text-align: center">
                    Don't have an account  <a href="subscribe" class="" style="text-decoration: none">Register</a>
                </div>

            </div>

        </div>

        <div class="column">
            <div class="home content">
                <h4 style="text-align: center">Sustainability sites include:</h4>
                <img src="../images/home3.jpg" alt="Nature" style="width:100%">
                <ol>
                    <li>http://www.earthhour.org</li>
                    <li>http://www.greenpeace.org</li>
                    <li>http://www.wwf.org.au/</li>
                </ol>

            </div>
        </div>
    </div>
<?php page('/partials/footer'); ?>

