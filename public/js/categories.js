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

//-------------------Add new Category table row--------------------------------- 
function manageRow(data) {
    var rows = '';
    $.each( data, function( key, value ) {
        rows = rows + '<tr>';
        rows = rows + '<td>'+value.name+'</td>';
        rows = rows + '<td>'+"<img src = '"+value.image+"'height= '120' width= '120'>"+'</td>';
        rows = rows + '<td>'+value.description+'</td>';
        rows = rows + '<td data-id="'+value.id+'">';
        rows = rows + '<button data-toggle="modal" data-target="#edit-item" class="btn btn-danger edit-item">Edit</button> ';
        rows = rows + '<button class="btn btn-warning remove-item">Delete</button>';
        rows = rows + '</td>';
        rows = rows + '</tr>';
    });
    $("tbody").html(rows);
}
//--------------------End Add---------------------------------------------------


//--------------------Create new Category---------------------------------------
$(".crud-submit").click(function(e){
    e.preventDefault();
    var form_action = $("#create-form").attr("action");
    var formData = new FormData(document.getElementById('create-form'));
    $.ajax({
        dataType: 'json',
        type:'POST',
        url: form_action,
        cache:false,
        contentType: false,
        processData: false,
        data: formData
    }).done(function(data){
        getPageData();
        $(".modal").modal('hide');
        toastr.success('Category Created Successfully.', 'Success Alert');
    });
});
//------------------------End Create--------------------------------------------


//------------------------Remove Category-------------------------------------------
$("body").on("click",".remove-item",function(){
    var id = $(this).parent("td").data('id');
    var c_obj = $(this).parents("tr");

    $.ajax({
        dataType: 'json',
        type:'delete',
        url: url + '/' + id,
    }).done(function(data){
        c_obj.remove();
        toastr.success('Category Deleted Successfully.', 'Success Alert');
        getPageData();
    });
});
//------------------------End remove--------------------------------------------

//------------------------Edit Category--------------------------------------------- 
$("body").on("click",".edit-item",function(){
    var id = $(this).parent("td").data('id');
    var name = $(this).parent("td").prev("td").prev("td").text();
    var description = $(this).parent("td").prev("td").text();

    $("#edit-item").find("input[name='name']").val(name);
    $("#edit-item").find("img[name='title']").val(image);
    $("#edit-item").find("textarea[name='description']").val(description);
    $("#edit-item").find("form").attr("action",url + '/' + id);
});
// ------------------------End Edit---------------------------------------------


//----------------------Updated new Category----------------------------------------
$(".crud-submit-edit").click(function(e){
    e.preventDefault();
    var form_action = $("#edit-item").find("form").attr("action");
    var name = $("#edit-item").find("input[name='title']").val();
    var image = $("#edit-item").find("img[name='icon']").val();
    var description = $("#edit-item").find("textarea[name='details']").val();

    $.ajax({
        dataType: 'json',
        type:'PUT',
        url: form_action,
        data:$("#edit-form").serialize()
    }).done(function(data){
        getPageData();
        $(".modal").modal('hide');
        toastr.success('Post Category Successfully.', 'Success Alert');
    });
//-----------------------End Updated--------------------------------------------

//-----------------------Image upload-------------------------------------------
    // New test.. coming up
//---------------------End image upload-----------------------------------------
});
