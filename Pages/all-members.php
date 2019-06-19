<?php page('/partials/head'); ?>
    <header class="flex center">
        <h2>All Members</h2>
    </header>
    <div class=" flex center row">
        <div class="full flex center content">
            <a href="subscribe" class="button" style="text-decoration: none">Add Member</a>
            <span style="width: 10%;"></span>
            <span class="success"><?php if (isset($success)) {
                    echo $success;
                } ?></span>
            <span class="error"><?php if (isset($error)) {
                    echo $error;
                } ?></span>
        </div>
    </div>
    <div class=" flex center row ">
        <div class="full content">
            <table class="table">
                <thead>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Date</th>
                <th>Action</th>
                </thead>
                <tbody>
                <?php ?>
                <?php foreach($users as $user) { ?>
                    <tr>
                        <td><?php echo $user['id'] ?></td>
                        <td><?php echo $user['name'] ?></td>
                        <td><?php echo $user['email'] ?></td>
                        <td><?php echo $user['reg_date'] ?></td>
                        <td>
                            <form method="post" action="delete-member">
                                <input type="hidden" name="user_id" value="<?php echo $user['id']; ?>"/>
                                <input type="submit" name="delete" value="Delete"/>
                            </form>
                            <form method="post" action="view-member">
                                <input type="hidden" name="user_id" value="<?php echo $user['id']; ?>"/>
                                <input type="submit" name="view" value="view"/>
                            </form>
                            <form method="post" action="view-member">
                                <input type="hidden" name="user_id" value="<?php echo $user['id']; ?>"/>
                                <input type="submit" name="edit" value="Edit"/>
                            </form>

                        </td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>

        </div>
    </div>
<?php page('/partials/footer'); ?>