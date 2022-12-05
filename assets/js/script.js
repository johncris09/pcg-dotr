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
    let user_role = $(that).attr('data-user-role');    
 

    $('#user_id').val(user_id);
    $('#username').val(username);
    $('#firstname').val(firstname);
    $('#lastname').val(lastname)
    $('#email').val(email) 
    $('#user_role_id  option[value="'+user_role+'"]').prop("selected", true); 
    $('#user_role_id  option[value="'+user_role+'"]').prop("selected", true); 
}


//function to edit user
function changePassword(that){ 
 
    let user_id = $(that).attr('data-id');  
    console.info(user_id) 
    $('#changePassword #user_id').val(user_id);   
}
 

// Add Marep


$('select#station').on('change', function(e){
    e.preventDefault();
    var text = $(this).find(':selected').text() 
    var station_id = $(this).val() 

    var text = text.replace('CGS ', ""); 

    $('#station-text').text(text)

    if(station_id != ""){
    
        $.ajax({
            url: BASE_URL + 'substation/get_substation_by_station/' + station_id,
            type: 'POST',  
            dataType: 'JSON',
            success: function(data){  
                $('#toggle-hidden').removeClass('hidden')
                $("#sub-station").empty();
                $("#sub-station").append(new Option("Select", "" ))
                $.each(data , function(index, val) { 
                    $("#sub-station").append(new Option(val.sub_station, val.sub_station_id ));
                });
            },
            error: function(xhr, textStatus, error){
                console.info(xhr.responseText);
            }
    
        });

    }else{
        $('#toggle-hidden').addClass('hidden')
        $("#sub-station").empty();

    }


})


$('select#report-selection').on('change', function(e){
    e.preventDefault(); 
    var id = $(this).val();
    console.info(id)
    $('.toggle-show').css({"display": "none" });
    $('.toggle-show#' + id).css({"display": "block" }); 

})


$('select#report-type').on('change', function(e){
    e.preventDefault(); 
    var report_type = $(this).val(); 
    $('.toggle-show').css({"display": "none" });
    $('.toggle-show[data-value="'+report_type+'"]').css({"display": "block" }); 

})





var navListItems = $('div.setup-panel div a'),
    allWells = $('.setup-content'),
    allNextBtn = $('.nextBtn');

allWells.hide();

navListItems.click(function (e) {
    e.preventDefault();
    var $target = $($(this).attr('href')),
        $item = $(this);

    if (!$item.hasClass('disabled')) {
        navListItems.removeClass('btn-success').addClass('btn-default');
        $item.addClass('btn-success');
        allWells.hide();
        $target.show();
        $target.find('input:eq(0)').focus();
    }
});

allNextBtn.click(function () {
    var curStep = $(this).closest(".setup-content"),
        curStepBtn = curStep.attr("id"),
        nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
        // curInputs = curStep.find("select,input[type='text'],input[type='url']"),
        curInputs = curStep.find(""),
        isValid = true;

    $(".form-group").removeClass("has-error");
    for (var i = 0; i < curInputs.length; i++) {
        if (!curInputs[i].validity.valid) {
            isValid = false;
            $(curInputs[i]).closest(".form-group").addClass("has-error");
        }
    }

    if (isValid) nextStepWizard.removeAttr('disabled').trigger('click');
});

$('div.setup-panel div a.btn-success').trigger('click'); 

 
//function to edit user role
function editUserRole(that){ 
 
    let user_role_id = $(that).attr('data-id');  
    let user_role = $(that).attr('data-text');  
    $('#role').val(user_role);   
    $('#user_role_id').val(user_role_id);   
} 
