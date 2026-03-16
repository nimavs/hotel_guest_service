 <div class="container12">
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<h2>Guest Details</h2><br>
                <form action="" method="POST">
                  
                   <div class="row">
                    <div class="col-25">
                      <label for="description">Guest Name</label>
                    </div>
                    <div class="col-75">
                    <input type="text" id="name" name="gname" value='$gname' size="50px">
                    </div>
                  </div>

                    <div class="row">
                    <div class="col-25">
                      <label for="cname">Address</label>
                    </div>
                    <div class="col-75">
                    <textarea id="address" name="address" style="height:100px" style="width:200px"></textarea>
                    </div>
                  </div>

                   <div class="row">
                    <div class="col-25">
                      <label for="description">Gender</label>
                    </div>
                    <div class="col-75">
                   <input type="radio" id="male" name="gender" value="male">
                   <label for="male">Male</label><br>
                   <input type="radio" id="female" name="gender" value="female">
                   <label for="female">Female</label><br>
                   </div>
                  </div>

                  <div class="row">
                    <div class="col-25">
                      <label for="vacancy">Phone Number</label>
                    </div>
                    <div class="col-75">
                      <input type="text" id="phoneno" name="phoneno" size="50px">
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-25">
                      <label for="description">Email id</label>
                    </div>
                    <div class="col-75">
                    <input type="text" id="emailid" name="emailid" size="50px">
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-25">
                      <label for="description">ID Proof Type</label>
                    </div>
                    <div class="col-75">
                    <select name="idproof" id="idproof">
                    <option value="select">--Select--</option>
                    <option value="Aadhaar">Aadhaar</option>
                    <option value="Passport">Passport</option>
                    <option value="Driving License">Driving License</option>
                    <option value="Voter ID">Voter ID</option>
                    </select>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-25">
                      <label for="description">ID Proof NO</label>
                    </div>
                    <div class="col-75">
                    <input type="text" id="idno" name="idno" size="50px">
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-25">
                      <label for="description">Check-in Date</label>
                    </div>
                    <div class="col-75">
                    <input type="date" id="checkin" name="checkin" size="50px">
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-25">
                      <label for="description">Check-out Date</label>
                    </div>
                    <div class="col-75">
                    <input type="date" id="checkout" name="checkout" size="50px">
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-25">
                      <label for="description">Room NO</label>
                    </div>
                    <div class="col-75">
                    <input type="text" id="rno" name="rno" size="50px">
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-25">
                      <label for="description">Room Type</label>
                    </div>
                    <div class="col-75">
                    <select name="rtype" id="rtype">
                    <option value="select">--Select--</option>
                    <option value="Single">Single</option>
                    <option value="Double">Double</option>
                    <option value="Deluxe">Deluxe</option>
                    </select>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-25">
                      <label for="description">No of Guest</label>
                    </div>
                    <div class="col-75">
                    <input type="text" id="noguest" name="noguest" size="50px">
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-25">
                      <label for="description">Payment Method</label>
                    </div>
                    <div class="col-75">
                    <input type="checkbox" id="pmethod1" name="pmethod1" value="cash">
                    <label for="pmethod1"> Cash</label><br>
                    <input type="checkbox" id="pmethod2" name="pmethod1" value="Card">
                    <label for="pmethod2"> Card</label><br>
                    <input type="checkbox" id="pmethod3" name="pmethod1" value="UPI">
                    <label for="pmethod3"> UPI</label><br><br>
  
                    </div>
                  </div>
 
                  <div class="row">
                    <div class="col-25">
                      <label for="cname">Special Request</label>
                    </div>
                    <div class="col-75">
                    <textarea id="srequest" name="srequest" style="height:100px" style="width:200px"></textarea>
                    </div>
                  </div>
 
                  
                  <div class="row">
                   <div class="col-75">
                     
                     <td><button type="submit" name="action" value="save"> Submit </button></td>
                     
                  </div>
                 
                 </div>
                </form>
              </div>

<?php
include 'config.php';
$sql = "UPDATE guest SET gname = ?, address = ?, gender =?, phoneno =?, emailid =?, idproof =?, idno =?, checkin =?, checkout =?, rno =?, rtype =?, noguest =?, pmethod1 =?, srequest =? WHERE gid = ?";
$stmt = $conn->prepare($sql);


// Execute and check for errors
if ($stmt->execute()) {
    echo "Record updated successfully";
} else {
    echo "Error: " . $stmt->error;
}

// Close statement and connection
$stmt->close();
$conn->close();
?>              
