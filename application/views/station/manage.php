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
                                    <a href="#addstation" data-toggle="modal"
                                        class="fcbtn btn btn-outline btn-primary btn-1d btn-xs btn-rounded">
                                        <i class="fa fa-plus"></i>
                                        Station
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
                                <th>Station Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($station as $row): ?>
                            <tr>
                                <td><?= $row->station_id ?></td>
                                <td><?= $row->station ?></td>
                                <td class="text-nowrap">
                                    <a type="button" href="#editstation" data-toggle="modal" onclick="editStation(this)"
                                        title="Edit Station" data-id="<?= $row->station_id ?>"
                                        data-station="<?= $row->station ?>">
                                        <i class="fa fa-pencil text-inverse m-r-10"></i> </a>

                                    <a href="<?= site_url('station/delete/').$row->station_id ?>"
                                        onclick="return confirm('Are you sure you want to delete this station?');"
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

<div class="modal fade" id="addstation" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">×</span></button>
                <h5 class="modal-title" id="exampleModalLabel">Create Station</h5>
            </div>
            <form method="POST" action="<?= site_url() ?>add_station">
                <div class="modal-body">

                    <div class="form-group">
                        <label>Station Name</label>
                        <input type="text" class="form-control" name="station" required="">
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

<div class="modal fade" id="editstation" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">×</span></button>
                <h5 class="modal-title" id="exampleModalLabel">Edit Station</h5>
            </div>
            <form method="POST" action="<?= site_url() ?>update_station">
                <div class="modal-body">

                    <div class="form-group">
                        <label>Station Name</label>
                        <input type="text" class="form-control" name="station" id="station_name" required="">
                    </div>

                </div>
                <div class="modal-footer">
                    <input type="hidden" name="station_id" id="station_id">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>