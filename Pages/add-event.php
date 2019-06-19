<?php page('/partials/head'); ?>
    <header class="flex center">
        <h2> Add New Event</h2>
    </header>
    <div class=" flex center row ">
        <div class="column ">
            <div class=" content">
                <form method="post" action="save-event" style="margin: 15px; padding-bottom: 30px">
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
                            <input name="name" id="name" type="text"
                                   value="<?php echo isset($name) ? $name : ''; ?>" required/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>
                            Description
                        </label>
                        <textarea name="event_description" type="text" required rows="5">
                            <?php echo isset($event_description) ? $event_description : ''; ?>
                        </textarea>
                    </div>
                    <div class="form-group">
                        <label>
                            Date
                        </label>
                        <input name="date" value="<?php echo isset($date) ? $date : ''; ?>" type="text" required/>
                    </div>

                    <div class="form-group">
                        <div>
                            <?php if (isset($_SESSION['name']) && isset($_SESSION['email'])) { ?>
                                <?php if (isset($id)) { ?>
                                    <input type="submit" name="save" value="Edit Event" id="save" class="button"
                                           style="float: right" required/>
                                <?php } else { ?>
                                    <input type="submit" name="save" value="Add Event" id="save" class="button"
                                           style="float: right" required/>
                                <?php } ?>
                            <?php } ?>
                        </div>
                </form>
            </div>
        </div>
    </div>
<?php page('/partials/footer'); ?>