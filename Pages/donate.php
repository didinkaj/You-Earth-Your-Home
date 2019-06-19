<?php page('/partials/head'); ?>
    <header class="flex center">
        <h2>Donate Today</h2>
    </header>
    <div class=" flex center row ">
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
        <div class="column ">
            <div class="home content">
                <form method="post" action="#" style="margin: 15px">
                    <div class="form-group">
                        <div>
                            <label>Name :</label>
                        </div>
                        <div>
                            <input name="name" id="user_name" type="text" v/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div>
                            <label>Email Address:</label>
                        </div>
                        <div>
                            <input name="email" id="user_email" type="email"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>
                            Credit Card Number
                        </label>
                        <input placeholder="1234 5678 9012 3456" pattern="[0-9]*" type="text">
                    </div>
                    <div class="form-group">
                        <label>
                            Expiration Date
                        </label>
                        <input placeholder="MM/YY" pattern="[0-9]*" type="text">
                    </div>
                    <div class="form-group">
                        <label>
                            CVV Number
                        </label>
                        <input placeholder="CVV" pattern="[0-9]*" type="text">
                    </div>
                    <div class="form-group">
                        <label>Billing Zip Code</label>
                        <input placeholder="ZIP" pattern="[0-9]*" type="text">
                    </div>

                    <div class="form-group">
                        <div>
                            <label>Amount:</label>
                        </div>
                        <div>
                            <input name="amount" id="user_password" type="number"/>
                        </div>
                    </div>

                    <div class="form-group">
                        <div>
                            <input type="submit" name="save" value="Donate" id="save" class="button"
                                   style="float: right"/>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php page('/partials/footer'); ?>