<div class="container-fluid">
    <div class="white-box">
        <h3 class="box-title m-b-0">LIST OF DATA ENTERED</h3>
        <table class="table  table-responsive table-bordered">
            <thead class="thead-inverse">
                <tr>
                    <th>REPORT SELECTION</th>
                    <th>CREATED DATE</th>
                    <th>View</th>
                    <th>ACTIONS</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($marep as $row): ?>
                <tr>
                    <td scope="row"><?php echo $row->report_selection ?></td>
                    <td><?php echo date('F d, Y \a\t\ H:i', strtotime($row->date_created )) ?></td>
                    <td><a href="">View</a></td>
                    <td><a href="">Edit/Details</a></td>
                </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>