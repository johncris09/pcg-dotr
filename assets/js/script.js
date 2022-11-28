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

//function to edit user
function editUser(that){ 
 
    let user_id = $(that).attr('data-id');
    let username = $(that).attr('data-username');
    let firstname = $(that).attr('data-firstname');
    let lastname = $(that).attr('data-lastname');
    let email = $(that).attr('data-email');  

    $('#user_id').val(user_id);
    $('#username').val(username);
    $('#firstname').val(firstname);
    $('#lastname').val(lastname);
    $('#email').val(email);  
}