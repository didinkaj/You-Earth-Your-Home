<?php page('/partials/head'); ?>
<header class="flex center">
    <?php if (isset($_SESSION['name']) && isset($_SESSION['email'])) { ?>
        <h2> Add New Member</h2>
    <?php } else { ?>
        <h2> Subscribe</h2>
    <?php } ?>
</header>
<div class=" flex center row ">
    <div class="column ">
        <div class="home content">
            <form method="post" action="add-member" style="margin: 15px">
                <input name="id" id="id" type="hidden"
                       value="<?php echo isset($id) ? $id : ''; ?>" required/>

                <span class="success"><?php if (isset($success)) {
                        echo $success;
                    } ?></span>
                <div class="form-group">
                    <div>
                        <label>Name :</label>
                    </div>
                    <div>
                        <input name="name" id="user_name" type="text"
                               value="<?php echo isset($name) ? $name : ''; ?>" required/>
                    </div>
                </div>

                <div class="form-group">
                    <label>Sex</label>
                    <select name="sex" required>
                        <option <?php echo isset($sex) && $sex == 'male' ? 'selected' : ''; ?> value="male">Male
                        </option>
                        <option <?php echo isset($sex) && $sex == 'female' ? 'selected' : ''; ?> value="female">
                            Female
                        </option>
                    </select>
                </div>

                <div class="form-group">
                    <label>
                        Age
                    </label>
                    <input name="age" value="<?php echo isset($age) ? $age : ''; ?>" pattern="[0-9]*" type="number"
                           required/>
                </div>
                <div class="form-group">
                    <div>
                        <label>Email Address:</label>
                    </div>
                    <div>
                        <input name="email" value="<?php echo isset($email) ? $email : ''; ?>" id="user_email"
                               type="email" required/>
                    </div>
                </div>
                <div class="form-group">
                    <label>
                        Address
                    </label>
                    <input name="address" value="<?php echo isset($address) ? $address : ''; ?>" type="text"
                           required/>
                </div>
                <div class="form-group">
                    <label>
                        Telephone Number
                    </label>
                    <input name="phone_number" value="<?php echo isset($phone_number) ? $phone_number : ''; ?>"
                           pattern="[0-9]*" type="text" required/>
                </div>

                <div class="form-group">
                    <label>
                        Password
                    </label>
                    <input name="password" value="<?php echo isset($password) ? $password : ''; ?>" type="password"
                           required/>
                </div>

                <div class="form-group">
                    <div>
                        <?php if (isset($_SESSION['name']) && isset($_SESSION['email'])) { ?>
                            <?php if (isset($id)) { ?>
                                <input type="submit" name="save" value="Edit Member" id="save" class="button"
                                       style="float: right" required/>
                            <?php } else { ?>
                                <input type="submit" name="save" value="Add Member" id="save" class="button"
                                       style="float: right" required/>
                            <?php } ?>
                        <?php } else { ?>

                        <input type="submit" name="save" value="Sign Up" id="save" class="button"
                               style="float: right" required/>
                    </div>
                    <?php } ?>
                </div>
            </form>
            <?php if (!isset($_SESSION['name']) && !isset($_SESSION['email'])) { ?>

                <div style="margin-top: 100px; text-align: center">
                    Already a member <a href="membership" class="" style="text-decoration: none">Sign In Here</a>
                </div>
            <?php } ?>
        </div>
    </div>
    <?php if (!isset($_SESSION['name']) && !isset($_SESSION['email'])) { ?>
        <div class="column ">
            <div class=" home content">
                <h4 style="text-align: center">Purpose of the website</h4>
                <img src="../images/home4.jpg" alt="Lights" style="width:100%">
                <p>
                    We are focused on minimising and reducing
                    the individual’s consumption of power,
                    water and other consumables at home and at work.
                </p>
                <p>
                    We do this by offering individual support and advice on
                    sustainability issues and environmental projects.
                </p>
                <p>
                    We believe that to save our planet,
                    we should first change ourselves.
                </p>
                <p>
                    Change starts with you.
                </p>
                <p>
                    As Mahatma Gandhi once said,
                    “Be the change you wish to see in the world.”
                </p>
            </div>
        </div>
    <?php } ?>
</div>
<?php page('/partials/footer'); ?>
