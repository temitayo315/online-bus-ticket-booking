$(document).ready(function () {
	
	 //=======================Admin Backend Functionality=================
 $("#addOperator").on('submit',function(event){
    event.preventDefault();
    
    var formData = $("#addOperator").serialize();
    $.ajax({
        url: "store",
        method: "POST",
        data: {formData},
        success:function(response){
            alert('New Operator Added!');
            console.log(response);
            document.getElementById('addOperator').reset();
        },
        error:function(error){
            alert('Oops! Something went wrong');
            console.log(error);
        }

    });
 });

 $(document).on('click','.delete',function(){

    var id = $(this).attr('id');
    
    if (confirm("Are you sure to delete?")) {
        $.ajax({

            url: "destroy/"+id,
            method: "get",
            data:{id},
            success:function(response){
                ('.alert-danger').html("<p class='text-danger'>Operator deleted</p>");
            },
            error:function(error){
                alert("Something went wrong");
            }
        });
    }

 });

  //$(".selectpicker").selectpicker();

 // var todayDate = new Date();
 // $("#datepicker").datepicker({
 //    //format:"dd-MM-yy",
 //    minDate:'0',
 //    });

 //$("#myDatatable").DataTable();
 
 $("#operator").on("change",function(){

    var id = $(this).val();
    $.ajax({
        url: "getBus/"+id,
        type: "GET",
        dataType: "json",
        success:function(data){
            $("#bus").empty();
            $.each(data,function(key,value){
                $("#bus").append("<option value='"+key+"'>"+value+"</option>");
            });
            console.log(data);
        },
        error:function(data){
            console.log(data);
        }
    });
 });

 $("#city").on("change",function(){

    var id = $(this).val();
    $.ajax({
        url: "getDestination/"+id,
        type: "GET",
        dataType: "json",
        success:function(data){
           // $("#destination").empty();
            $.each(data,function(key,value){
                $("#destination").append("<option value='"+key+"'>"+value+"</option>");
            });
            console.log(data);
        },
        error:function(data){
            console.log(data);
        }
    });
 });

//this code handles suspending a trip. A pop up sweet alert for confirmation is used
 $('.suspend').on('click',function(){
    var id = $(this).attr('id');
    console.log(id);
    swal({
        title: "Are you sure?",
        text: "This will move to suspended bus section and users will not be able to book for this trip",
        type: 'warning',
        showCancelButton: true,
        confirmButtonText: "Yes! Suspend trip",
        cancelButtonText: "No! keep it"                        
    },function(isConfirm) {
        if (isConfirm) {
        $.ajax({
        url: "trip/suspend/"+id,
        method:"GET",
        success:function(data){
            swal('Trip suspended!','You have successfully suspended this trip','success');
            $('.suspend').parent().fadeOut("slow");
        }
    });
        }else{
            swal('Canceled!','You canceled suspension','error');
        }
    });
    });
    
    //this code suggest query matches when typing a search value
     $("#search").on("keyup",function(){

    $("#result").html('');
    var searchField = $("#search").val();
    if (searchField == '') {

         $("#result").html('');
    }else{
    $.ajax({
        url: "searchTrip",
        method: "GET",
        data: {'searchField':searchField},
        dataType: "json",
        success:function(data){
           // $("#destination").empty();
            // $.each(data,function(key,value){

            //      $("#result").append("<li class='list-group-item sList'>"+value.state+"("+value.city+")"+"</li>");
                
            // });
            console.log(data);
        },
        error:function(data){
            console.log(data);
        }
    });
    }
 });
//end auto suggest query

$("#number").prop('disabled',false);
$("#proceed").hide();
$("#travelers_section").hide();
//$("#go_to_payment").hide();
$('#self').click(function(){
    if ($(this).prop("checked")== true) {
        $("#number").prop('disabled', true).val('');

        var fare = $(".hidden").val();
        $("#self_amount").html("Trip fare for this Journey is "+"#"+fare);
        $("#self_amount").show();
        $("#proceed").show().text("Proceed to Payment");
        $("#travelers_section").hide();
        $("#createform").empty();


     }else if ($(this).prop("checked")== false) {
        $("#number").prop("disabled", false);
        $("#proceed").hide();
        $("#createform").empty();

    }
});

$("#number").on({
    "keyup":function(){
    if ($(this).val() < 1) {
        $("#travelers_section").hide();
        $("#createform").empty();
        alert("Please enter a valid number");
    }
  else if ($(this).val()=='') { 
        $("#travelers_section").hide();
        $("#self_amount").hide();
        $("#createform").empty();
    }
else{
        var no_of_travelers = $(this).val();
        var tripFare = $(".hidden").val();
        var totalFare = no_of_travelers * tripFare;
     $("#self_amount").html("Trip fare for "+no_of_travelers+" people is "+"#"+totalFare);
        $("#self_amount").show();
        $("#travelers_section").show();
        for (var i = 1; i <=no_of_travelers; i++) {
                
                inputField();
        }
        $("#createform").append("<a href='' class='btn btn-outline-primary btn-lg'>Proceed to Payment <i class='fas fa-long-arrow-alt-right'></i></a>");
    }
},
    "keydown":function(){
        if ($("#number").val()=='') {
        //$("#travelers_section").hide();
        $("#self_amount").hide();
    }
    }
    });

    function inputField(){
        //var counter =1;
        var html = '';
        html += "<div class='card'>";
        html += "<div class='card-body'>";
        //html += "<p>Traveller"+ counter++ +"</p>";
        html += "<div class='row'>";
        html += "<div class='col-md-3'><div class='form-group'><input type='text' class='form-control' placeholder='Firstname'></div></div>";
        html += "<div class='col-md-3'><div class='form-group'><input type='text' class='form-control' placeholder='Lastname'></div></div>";
        html += "<div class='col-md-3'><div class='form-group'><input type='number' class='form-control' placeholder='phone number'></div></div>";
        html += "<div class='col-md-3'><div class='form-group'><label class='input-label'>Gender</label> <input type='checkbox'></div></div></div>";
        html += "<div class='row'>";
        html += "<div class='col-md-4'><div class='form-group'><input type='text' class='form-control' placeholder='Fullname of Next of kin'></div></div>";
        html += "<div class='col-md-4'><div class='form-group'><input type='text' class='form-control' placeholder='Address of Next of kin'></div></div>";
        html += "<div class='col-md-4'><div class='form-group'><input type='number' class='form-control' placeholder='phone number of next of kin'><div></div></div>";
        html += "</div></div>";

        $("#createform").prepend(html);
        
    }

    $(".newPass").click(function(){
        var current = $(".currentPass").val();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url:"checkcurrent",
            method:"POST",
            data:{'current':current},
        success:function(response){
            if (response=='Match') {
            $('.help-block').html("<p class='text-success'>Current Password Match!</p>");
            }else if(response=='notMatch'){
            $('.help-block').html("<p class='text-danger'>Your Current Password do not Match!</p>");
            }
        },
        error:function(response){
            console.log(response);
        }
        })
    })

});