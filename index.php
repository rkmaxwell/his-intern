
<meta http-equiv="Cache-control" content="no-cache">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

          <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
  

<style>

  label{font-size:14px!important}
  body{background:#f1f2f7}

</style>


<div class="container  col-md-9">


<br>
<h3>Patient Registration Form</h3>

<form method="post" id="mform">
 
  
  <div class="form-group">
    <label for="inputAddress2">Name</label>
    <input type="text" class="form-control" id="fname" name="fname" placeholder="Apartment, studio, or floor">
  </div>

   <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Date of Birth</label>
      <input type="date" class="form-control" id="dob" name="dob" placeholder="Email">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">ID number</label>
      <input type="number" class="form-control" id="idno" name="idno" placeholder="12234">
    </div>
  </div>

  <div class="form-group">
    <label for="inputAddress">Address</label>
    <input type="text" class="form-control" id="inputAddress" name="inputAddress" placeholder="Nairobi">
  </div>

<div class="form-row">
  <div class="form-group col-md-6">
      <label for="inputEmail4">County</label>
      <input type="text" class="form-control" id="county" name="county" placeholder="County">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Sub county</label>
      <input type="text" class="form-control" id="subcounty" name="subcounty" placeholder="Subcounty">
    </div>
  </div>


  <div class="form-row">
  <div class="form-group col-md-6">
      <label for="inputEmail4">Telephone</label>
      <input type="text" class="form-control" id="telephone" name="telephone" placeholder="7737373">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Email</label>
      <input type="text" class="form-control" id="email" name="email" placeholder="doe@g.com">
    </div>
  </div>


  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Gender</label>
      <input type="text" class="form-control" name="gender" id="gender">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">Marital status</label>
      <select id="inputState" class="form-control" name="marital" id="marital">
        <option selected>Choose...</option>
        <option value="male">Single</option>
        <option value="male">Married</option>
        <option value="male">Divorced</option>
      </select>
    </div>
    


  </div>
 
<h3>Next of kin</h3>



  <div class="form-group">
    <label for="inputAddress2">Name</label>
    <input type="text" class="form-control" id="kinname" name="kinname" placeholder="James">
  </div>

   <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Date of Birth</label>
      <input type="date" class="form-control" id="dobkin" name="dobkin" placeholder="Email">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">ID number</label>
      <input type="number" class="form-control" id="kinid" name="kinid" placeholder="12234">
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Gender</label>
       
      <select id="inputState" class="form-control" name="fgender" id="fgender">
        <option selected>Choose...</option>
        <option value="male">Male</option>
        <option value="male">Female</option>
      </select>
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Relationship</label>
      <input type="text" class="form-control" id="relationship" name="relationship" placeholder="Father">
    </div>
  </div>
</form>

  <button type="button" onclick="submiData()" class="btn btn-primary">Save Details</button>



<br>
<br>
</div>

<script src="js/mscript.js"></script>