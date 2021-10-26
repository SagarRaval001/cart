<?php
    include("include/header.php");
?>
    
<div class="container relative">
    <div class="row">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Name</th>
                <th scope="col">Image</th>
                <th scope="col">Description</th>
                <th scope="col">Created at</th>
                <th scope="col">Updated at</th>
                <th scope="col">Operatioins</th>
            </tr>
        </thead>
        <tbody id="catbody">
            
        </tbody>
     </table>
    </div>

    <div style="margin-right: 50%;">
        <button type="button" class="btn btn-primary mt-5" data-toggle="modal" data-target="#exampleModal">Add Category</button>
    </div>
   
 </div>    
 
 <!-- Add Category Modal-->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Category</h5>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form method="post" id="showCatForm" name="showCatForm" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="name" class="form-label">Add Name:</label>
            <input type="text" class="form-control" id="name">
        </div>
        <div class="mb-3">
            <label for="desc" class="form-label">Add Description</label>
            <input type="text" class="form-control" id="desc">
        </div>
        <div class="mb-3">
            <label for="img" class="form-label">Add Image</label>
            <input type="file" class="form-control" id="img" name="file[]" multiple>
        </div>
     </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button id="catbtn" type="button" class="btn btn-primary">Add</button>
      </div>
    </div>
  </div>
</div>

<?php
    include("include/footer.php");
?>