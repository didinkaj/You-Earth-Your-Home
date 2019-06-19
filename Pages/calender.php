<?php page('/partials/head'); ?>
    <header class="flex center">
        <h2>Calender Events</h2>
    </header>
<?php if (isset($_SESSION['name']) && isset($_SESSION['email'])) { ?>
    <div class=" flex center row">
        <div class="full flex center content">
            <div class="full flex center content">
                <a href="add-event" class="button" style="text-decoration: none">Add Event</a>
            </div>
            <span class="success"><?php if (isset($success)) {
                    echo $success;
                } ?></span>
            <span class="error"><?php if (isset($error)) {
                    echo $error;
                } ?></span>
        </div>
    </div>
<?php } ?>

    <div class=" flex center row ">
        <?php if (isset($events)) { ?>

            <?php foreach ($events as $event) { ?>
                <div class="column ">
                    <div class=" content">
                        <div class="flex center" style="justify-content: space-between;align-items: flex-end">
                            <h4 style="text-align: center"><?php echo $event['date'] ?></h4>
                            <form action="book-event" method="post">
                                <input name="event_id" type="hidden" value="<?php echo $event['id'] ?>">
                                <button class="button" style="align-items: center" type="submit">Book</button>

                            </form>
                        </div>

                        <img src="<?php echo $event['image'] ?>" alt="event" style="width:100%">
                        <p>
                            <?php echo $event['name'] ?>
                        </p>

                    </div>
                </div>
            <?php } ?>
        <?php } ?>

        <div class="column ">
            <div class=" content">
                <div class="flex center" style="justify-content: space-between;align-items: flex-end">
                    <h4 style="text-align: center">August 12, 2019</h4>
                    <button class="button" style="align-items: center">Book</button>
                </div>

                <img src="../images/home4.jpg" alt="Lights" style="width:100%">
                <p>
                    Soap-making from organic ingredients
                </p>

            </div>
        </div>

        <div class="column ">
            <div class=" content">
                <div class="flex center" style="justify-content: space-between;align-items: flex-end">
                    <h4 style="text-align: center">September 20, 2019</h4>
                    <button class="button" style="align-items: center">Book</button>
                </div>

                <img src="../images/home4.jpg" alt="Lights" style="width:100%">
                <p>
                    Setting up a solar-panel workshop
                </p>

            </div>
        </div>

    </div>

    <div class=" flex center row ">
        <div class="column ">
            <div class=" content">
                <div class="flex center" style="justify-content: space-between;align-items: flex-end">
                    <h4 style="text-align: center">October 3, 2019</h4>
                    <button class="button" style="align-items: center">Book</button>
                </div>

                <img src="../images/home4.jpg" alt="Lights" style="width:100%">
                <p>
                    Reducing power consumption seminar
                </p>

            </div>
        </div>

        <div class="column ">
            <div class=" content">
                <div class="flex center" style="justify-content: space-between;align-items: flex-end">
                    <h4 style="text-align: center">November 14, 2019</h4>
                    <button class="button" style="align-items: center">Book</button>
                </div>

                <img src="../images/home4.jpg" alt="Lights" style="width:100%">
                <p>
                    Reducing your carbon footprint
                </p>

            </div>
        </div>

        <div class="column ">
            <div class=" content">
                <div class="flex center" style="justify-content: space-between;align-items: flex-end">
                    <h4 style="text-align: center">December 1, 2019</h4>
                    <button class="button" style="align-items: center">Book</button>
                </div>

                <img src="../images/home4.jpg" alt="Lights" style="width:100%">
                <p>
                    Planning your first sustainable Christmas (Seminar)
                </p>

            </div>
        </div>

    </div>
<?php page('/partials/footer'); ?>
