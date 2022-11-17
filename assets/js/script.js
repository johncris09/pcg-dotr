//function to edit station
function editStation(that){
    let station_id = $(that).attr('data-id');
    let station_name = $(that).attr('data-station');

    $('#station_id').val(station_id);
    $('#station_name').val(station_name);

}

//function to edit station
function editSubStation(that){
    let id = $(that).attr('data-id');
    let station_id = $(that).attr('data-station_id');
    let sub_station = $(that).attr('data-sub_station');

    $('#sub_station_id').val(id);
    $('#station_id').val(station_id);
    $('#sub_station').val(sub_station);

}