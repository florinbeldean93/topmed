var page = 1;
var current_page = 1;
var total_page = 0;
var is_ajax_fire = 0;



manageData();


//------------------Pagination--------------------------------------------------
function manageData() {

    $.ajax({
        dataType: 'json',
        url: url,
        data: {page:page}
    }).done(function(data){
    	total_page = data.last_page;
    	current_page = data.current_page;


    	$('#pagination').twbsPagination({
	        totalPages: total_page,
	        visiblePages: current_page,
	        onPageClick: function (event, pageL) {
	        	page = pageL;
                if(is_ajax_fire != 0){
	        	  getPageData();
                }
	        }
	    });

    	manageRow(data.data);
        is_ajax_fire = 1;
    });
}

//--------------------End of pagination-----------------------------------------


$.ajaxSetup({
    headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
});

//------------------Get Page Data-----------------------------------------------
function getPageData() {
	$.ajax({
    	dataType: 'json',
    	url: url,
    	data: {page:page}
	}).done(function(data){
		manageRow(data.data);
	});
}
//-------------------End Get Page-----------------------------------------------

//-------------------Add new Appointment table row------------------------------
function manageRow(data) {
	var	rows = '';
	$.each( data, function( key, value ) {
	  	rows = rows + '<tr>';
	  	rows = rows + '<td>'+value.name+'</td>';
        rows = rows + '<td>'+value.email+'</td>';
        rows = rows + '<td>'+value.phone+'</td>';
	  	rows = rows + '<td>'+value.CNP+'</td>';
        rows = rows + '<td>'+value.birthday+'</td>';
        rows = rows + '<td>'+value.date+'</td>';
        rows = rows + '<td>'+value.speciality_id+'</td>';
        rows = rows + '<td>'+value.doctor_id+'</td>';
        rows = rows + '<td>'+value.location_id+'</td>';
        rows = rows + '<td>'+value.message+'</td>';
	  	rows = rows + '<td data-id="'+value.id+'">';
        rows = rows + '<button data-toggle="modal" data-target="#edit-item" class="btn btn-danger edit-item">Edit</button> ';
        rows = rows + '<button class="btn btn-warning remove-item">Delete</button>';
        rows = rows + '</td>';
	  	rows = rows + '</tr>';
	});
	$("tbody").html(rows);
}
//--------------------End Add---------------------------------------------------


//--------------------Create new Appointment------------------------------------
$(".crud-submit").click(function(e){
    e.preventDefault();
    var form_action = $("#create-form").attr("action");

    $.ajax({
        dataType: 'json',
        type:'POST',
        url: form_action,
        data: $("#create-form").serialize()
    }).done(function(data){
        getPageData();
        $(".modal").modal('hide');
        toastr.success('Appointment Created Successfully.', 'Success Alert');
    });
});
//------------------------End Create--------------------------------------------


//------------------------Remove Appointment------------------------------------
$("body").on("click",".remove-item",function(){
    var id = $(this).parent("td").data('id');
    var c_obj = $(this).parents("tr");

    $.ajax({
        dataType: 'json',
        type:'delete',
        url: url + '/' + id,
    }).done(function(data){
        c_obj.remove();
        toastr.success('Appointment Deleted Successfully.', 'Success Alert');
        getPageData();
    });
});
//------------------------End remove--------------------------------------------

//------------------------Edit Appointment--------------------------------------
$("body").on("click",".edit-item",function(){
    var id = $(this).parent("td").data('id');
    var name = $(this).parent("td").prev("td").prev("td").text();
    var email = $(this).parent("td").prev("td").text();
    var phone = $(this).parent("td").prev("td").text();
    var CNP = $(this).parent("td").prev("td").text();
    var birthday = $(this).parent("td").prev("td").text();
    var date = $(this).parent("td").prev("td").text();
    var message = $(this).parent("td").prev("td").text();

    $("#edit-item").find("input[name='name']").val(name);
    $("#edit-item").find("input[name='email']").val(email);
    $("#edit-item").find("input[name='phone']").val(phone);
    $("#edit-item").find("input[name='CNP']").val(CNP);
    $("#edit-item").find("input[name='birthday']").val(birthday);
    $("#edit-item").find("input[name='date']").val(date);
    $("#edit-item").find("textarea[name='message']").val(message);
    $("#edit-item").find("form").attr("action",url + '/' + id);
});
// ------------------------End Edit---------------------------------------------


//----------------------Updated Appointment-------------------------------------
$(".crud-submit-edit").click(function(e){
    e.preventDefault();
    var form_action = $("#edit-form").attr("action");
    $.ajax({
        dataType: 'json',
        type:'PUT',
        url: form_action,
        data:$("#edit-form").serialize()
    }).done(function(data){
        getPageData();
        $(".modal").modal('hide');
        toastr.success('Appointment Updated Successfully.', 'Success Alert');
    });
//-----------------------End Updated--------------------------------------------

//-----------------------Image upload-------------------------------------------
    // New test.. coming up
//---------------------End image upload-----------------------------------------
});