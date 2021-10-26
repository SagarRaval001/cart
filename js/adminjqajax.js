$(function(){
//Ajax Request for Show All Students
function showStudent(){
    var output = "";
    var x = "";
    $.ajax({
      url: '../class/category.php',
      type: 'post',
      dataType: 'json',
      success: function(data){
        console.log(data);
        if(data.length > 0){
           x = data;
        }
        else{
          $("#catbody").html('<span style="text-align:center;">0 Categories</span>');
        }
        for (i = 0; i < x.length; i++) {
          output +=
            "<tr><td>" +
            x[i].id +
            "</td><td>" +
            x[i].name +
            "</td><td>" +
            x[i].image +
            "</td><td>" +
            x[i].description +
            "<tr><td>" +
            x[i].created_at +
            "<tr><td>" +
            x[i].updated_at +
            "</td><td> <button data-toggle='modal' data-target='#' class='btn btn-secondary btn-sm btn-view' data-id="+
            x[i].id +
            ">View</button>"+
            "<button data-toggle='modal' data-target='#' class='btn btn-warning btn-sm btn-edit' data-id=" +
            x[i].id +
            ">Edit</button><button class='btn btn-danger btn-sm btn-del' data-id=" +
            x[i].id +
            ">Delete</button></td></tr>";
        }
        $("#catbody").html(output);
      }
    });
  }
  showStudent();
});

// Insert Category
$(function(){
    $("#catbtn").on('click', function(ev){
        ev.preventDefault();
            var form_data = new FormData();
         
            // Read selected files
            var totalfiles = document.getElementById('files').files.length;
            for (var index = 0; index < totalfiles; index++) {
               form_data.append("files[]", document.getElementById('files').files[index]);
            }
            // AJAX request
            $.ajax({
              url: 'ajaxfile.php', 
              type: 'post',
              data: form_data,
              dataType: 'json',
              contentType: false,
              processData: false,
              success: function (response) {
         
                for(var index = 0; index < response.length; index++) {
                  var src = response[index];
         
                  // Add img element in <div id='preview'>
                  $('#preview').append('<img src="'+src+'" width="200px;" height="200px">');
                }
         
              }
            });
         
         });
    });
