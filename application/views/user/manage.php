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
                                        User
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
                                <th>Username</th>
                                <th>Name</th>
                                <th>Email</th> 
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($user as $row): ?>
                            <?php $name = $row->first_name . " " . $row->last_name; ?>
                            <tr>
                                <td><?= $row->user_id ?></td>
                                <td><?= $row->username ?></td>
                                <td><?= ucwords($name) ?></td> 
                                <td><?= $row->email ?></td> 
                                <td class="text-nowrap">
                                    <a type="button" href="#edituser" data-toggle="modal" onclick="editUser(this)"
                                        title="Edit User" 
                                        data-id="<?= $row->user_id ?>"
                                        data-username="<?= $row->username ?>"  
                                        data-firstname="<?= $row->first_name ?>"
                                        data-lastname="<?= $row->last_name ?>" 
                                        data-email="<?= $row->email ?>"  
                                        >
                                        <i class="fa fa-pencil text-inverse m-r-10"></i> </a>

                                    <a href="<?= site_url('user/delete/').$row->user_id ?>"
                                        onclick="return confirm('Are you sure you want to delete this user?');"
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

<div class="modal fade" id="adduser" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">×</span></button>
                <h5 class="modal-title" id="exampleModalLabel">Create User</h5>
            </div>
            <form method="POST" action="<?= site_url() ?>add_user">
                <div class="modal-body">
                    
                    <div class="form-group">
                        <label>First Name</label>
                        <input type="text" class="form-control" name="firstname" id="firstname" required="">
                    </div>

                    <div class="form-group">
                        <label>Last Name</label>
                        <input type="text" class="form-control" name="lastname" id="lastname" required="">
                    </div>
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" class="form-control" name="username" id="username" required="">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" name="email" id="email" required="">
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
                <h5 class="modal-title" id="exampleModalLabel">Edit User</h5>
            </div>
            <form method="POST" action="<?= site_url() ?>update_user">
                <div class="modal-body">

                    <div class="form-group">
                        <label>First Name</label>
                        <input type="text" class="form-control" name="firstname" id="firstname" required="">
                    </div>

                    <div class="form-group">
                        <label>Last Name</label>
                        <input type="text" class="form-control" name="lastname" id="lastname" required="">
                    </div>
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" class="form-control" name="username" id="username" required="">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" name="email" id="email" required="">
                    </div>

                </div>
                <div class="modal-footer">
                    <input type="text" name="user_id" id="user_id">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>