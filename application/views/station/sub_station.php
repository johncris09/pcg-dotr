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
                                        Sub-station
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
                                <th>Sub-station ID</th>
                                <th>Sub-Station Name</th>
                                <th>Station</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($sub_station as $row): ?>
                            <tr>
                                <td><?= $row->sub_station_id ?></td>
                                <td><?= $row->sub_station ?></td>
                                <td><?= $row->station ?></td>
                                <td class="text-nowrap">
                                    <a type="button" href="#editsub" data-toggle="modal" onclick="editSubStation(this)"
                                        title="Edit Station" data-id="<?= $row->sub_station_id ?>"
                                        data-station_id="<?= $row->station_id ?>"
                                        data-sub_station="<?= $row->sub_station ?>">
                                        <i class="fa fa-pencil text-inverse m-r-10"></i> </a>

                                    <a href="<?= site_url('substation/delete/').$row->sub_station_id ?>"
                                        onclick="return confirm('Are you sure you want to delete this sub-station?');"
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
                <h5 class="modal-title" id="exampleModalLabel">Create Sub-station</h5>
            </div>
            <form method="POST" action="<?= site_url() ?>add_sub_station">
                <div class="modal-body">
                    <div class="form-group">
                        <label>Station</label>
                        <select class="form-control" required="" name="station_id">
                            <option disabled="" selected="">Select Station</option>
                            <?php foreach($station as $row): ?>
                            <option value="<?= $row->station_id ?>"><?= $row->station ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Station Name</label>
                        <input type="text" class="form-control" name="sub_station" required="">
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

<div class="modal fade" id="editsub" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">×</span></button>
                <h5 class="modal-title" id="exampleModalLabel">Edit Station</h5>
            </div>
            <form method="POST" action="<?= site_url() ?>update_sub_station">
                <div class="modal-body">
                    <div class="form-group">
                        <label>Station</label>
                        <select class="form-control" required="" name="station_id" id="station_id">
                            <option disabled="" selected="">Select Station</option>
                            <?php foreach($station as $row): ?>
                            <option value="<?= $row->station_id ?>"><?= $row->station ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Station Name</label>
                        <input type="text" class="form-control" name="sub_station" id="sub_station" required="">
                    </div>

                </div>
                <div class="modal-footer">
                    <input type="hidden" name="sub_station_id" id="sub_station_id">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>