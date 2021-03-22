<?php require 'LoginHeader.php'?>
<div class="card container-fluid">
  <div style="background-color: white;" class="row p-2">
    <div class="col-sm-12">&nbsp;</div>
    <div class="col-lg-7 col-sm-12">
      <div class="row">
        <div class="col-sm-7 row">
          <div class="col-sm-6 pt-2">LOCATION/SYSTEM</div>
          <select id="selloc" name="Select Location/System" class="col-sm-6 p-0">
            <option value="1">Select Location/System</option>
            <option value="2">...</option>
          </select> 
        </div>
        <div class="col-sm-5"><button class="btn btn-primary" style="background-color: #4CAF50; border: white; color: white;"><i class="fa fa-plus"></i>&ensp;ADD NEW EQUIPMENT</button></div>
      </div>
    </div>
    <div class="col-lg-5 col-sm-12 row">
      <div class="container-fluid row">
        <div class="col-sm-8 pt-1">Showing 1 to 37 of 37 entries</div>
        <button class="btn btn-secondary" name="mjp" class="col-sm-4">Send to Excel</button>
      </div>
    </div>
    <div class="col-lg-7 col-sm-12">
      <div class="row">&nbsp;</div>
      <div class="row">
        <div class="col-sm-8 pt-1">Showing 1 to 33 of 33 entries</div>
        <div class="col-sm-4"><button class="btn btn-secondary" name="mjp">Send to Excel</button></div>
      </div>
      <table class="row col-sm-12 table table-responsive-sm pt-1" width="100%">
        <thead class="thead-dark col-sm-12">
          <tr>
            <th>Sl No</th>
            <th>Equipment Name</th> 
          </tr>
        </thead>
        <tbody class="col-sm-12">
          <tr>
            <td>1</td>
            <td>220 KV LINES</td>
          </tr>
          <tr>
            <td>2</td>
            <td>220KV SWITCH YARD</td>
          </tr>
          <tr>
            <td>3</td>
            <td>BUS SECTION 1</td>
          </tr>
          <tr>
            <td>4</td>
            <td>BUS SECTION 2</td>
          </tr>
        </tbody>
      </table>
    </div>
    <table class="col-lg-5 col-sm-12 row table table-responsive pt-1">
      <thead class="thead-dark">
        <tr>
          <th>Sl No</th>
          <th>Location/System Name</th>
          <th>No of Equipments</th> 
        </tr>
      </thead>
      <tr>
        <td>1</td>
        <td>220KV & 33KV</td>
        <td>33</td>
      </tr>
      <tr>
        <td>2</td>
        <td>24V & 220V DC</td>
        <td>12</td>
      </tr>
      <tr>
        <td>3</td>
        <td>6.6KV & 415V</td>
        <td>35</td>
      </tr>
      <tr>
        <td>4</td>
        <td>AHP COMMON</td>
        <td>30</td>
      </tr>
      <tr>
        <td>5</td>
        <td>AHP SG #1</td>
        <td>55</td>
      </tr>
      <tr>
        <td>6</td>
        <td>AHP SG #2</td>
        <td>56</td>
      </tr>
    </table>    
  </div>
</div>
<div class="container-fluid mt-3">
  <div class="row">
    
  </div>
</div>
<?php require 'LoginFooter.php'?>