<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="white-box">
                <div class="row">
                    <div class="col-sm-6">
                        <h3 class="box-title"><?php echo $page_title; ?></h3>
                    </div>
                    <div class="col-sm-6">
                        <ul class="list-inline pull-right">
                            <li>
                                <div class="card-tools">
                                    <a href="#adduser" data-toggle="modal"
                                        class="fcbtn btn btn-outline btn-primary btn-1d btn-xs btn-rounded">
                                        <i class="fa fa-plus"></i>
                                        User Role
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Role</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($user_role as $row): ?>
                            <tr>
                                <td><?= $row->user_role_id  ?></td>
                                <td><?= $row->text ?></td>
                                <td class="text-nowrap">
                                    <a type="button" href="#edituser" data-toggle="modal" onclick="editUserRole(this)"
                                        title="Edit User" data-id="<?= $row->user_role_id ?>"
                                        data-text="<?= $row->text ?>">
                                        <i class="fa fa-pencil text-inverse m-r-10"></i> </a>
                                    <a href="<?= site_url('user_role/delete/').$row->user_role_id ?>"
                                        onclick="return confirm('Are you sure you want to delete this role?');"
                                        data-toggle="tooltip" data-original-title="Remove"> <i
                                            class="fa fa-close text-danger"></i> </a>
                                </td>
                            </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="adduser" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">×</span></button>
                <h5 class="modal-title" id="exampleModalLabel">Create User Role</h5>
            </div>
            <form method="POST" action="<?= site_url() ?>add_user_role">
                <div class="modal-body">

                    <div class="form-group">
                        <label>Role Name</label>
                        <input type="text" class="form-control" name="role" required="">
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Create</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="edituser" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">×</span></button>
                <h5 class="modal-title" id="exampleModalLabel">Edit User Role</h5>
            </div>
            <form method="POST" action="<?= site_url() ?>update_user_role">
                <div class="modal-body">

                    <div class="form-group">
                        <label>Role Name</label>
                        <input type="text" class="form-control" name="role" required="" id="role">
                    </div>
                </div>

                <div class="modal-footer">
                    <input type="hidden" name="user_role_id" id="user_role_id">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>