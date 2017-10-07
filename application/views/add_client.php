<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    #success_message{
      display:none;
    }
  </style>
</head>

<div class="container">

  <?php echo form_open_multipart('saveClient',array('id'=>"save-client",'class'=>"well form-horizontal",'name'=>"save-client" )); ?> 
    <fieldset>

    <!-- Form Name -->
    <legend><center><h2><b>Add Client</b></h2></center></legend><br>

    <!-- Text input-->

      <div class="form-group">
        <label class="col-md-4 control-label">First Name</label>  
        <div class="col-md-4 inputGroupContainer">
        <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
        <input  name="first_name" placeholder="First Name" class="form-control"  type="text">
          </div>
        </div>
      </div>

      <!-- Text input-->

      <div class="form-group">
        <label class="col-md-4 control-label" >Last Name</label> 
          <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
        <input name="last_name" placeholder="Last Name" class="form-control"  type="text">
          </div>
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-4 control-label" >Project Title</label> 
          <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
        <input name="project" placeholder="Title" class="form-control"  type="text">
          </div>
        </div>
      </div>

      <div class="form-group"> 
        <label class="col-md-4 control-label">Project Type</label>
          <div class="col-md-4 selectContainer">
          <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
          <select name="department" class="form-control selectpicker">
            <option value="">Please select project type</option>
            <option value="web">Website/Web Portal</option>
            <option value="app">Mobile App</option>
            <option value="both">Mobile App and Website</option>
          </select>
        </div>
      </div>
      </div>
        
      <!-- Text input-->

      <div class="form-group">
        <label class="col-md-4 control-label">Project Remarks</label>  
        <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
            <input  name="remarks" placeholder="Remarks" class="form-control"  type="textarea">
          </div>
        </div>
      </div>

      <!-- Text input-->

      <div class="form-group"> 
        <label class="col-md-4 control-label">Project Status</label>
          <div class="col-md-4 selectContainer">
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
              <select name="status" class="form-control selectpicker">
                <option value="">Select Status</option>
                <option value="1">Active</option>
                <option value="0">Inactive</option>
              </select>
            </div>
        </div>
      </div>

      <!-- Text input-->

      


      <!-- Text input-->
      
      <div class="form-group">
        <label class="col-md-4 control-label" >Upload files</label> 
          <div class="col-md-4 inputGroupContainer">
            <div class="input-group">
              <input id="input-1a" name='userfile' type="file" class="file" data-show-preview="true">
            </div>
        </div>
      </div>

      <div class="form-group">
      <label class="col-md-4 control-label">Project Progress</label>  
        <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            <input  name="progress" placeholder="Please Enter Progress in Percent" class="form-control"  type="text">
          </div>
        </div>
      </div>

<!-- Text input-->


      <!-- Select Basic -->

      <!-- Success message -->
      <div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Success!.</div>

      <!-- Button -->
      <div class="form-group">
        <label class="col-md-4 control-label"></label>
        <div class="col-md-4"><br>
          &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button type="submit" name="submit" class="btn btn-warning" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSUBMIT <span class="glyphicon glyphicon-send"></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</button>
        </div>
      </div>

    </fieldset>
  </form>
</div>
  