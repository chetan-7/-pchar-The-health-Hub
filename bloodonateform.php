<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="Donateform.css">
    <title>Blood Donate Form</title>
</head>
<body>

<form method="POST">
  <div class="mb-3">
    <div style="text-align: center">
    <img src="assets/images/logo.png" width="110" height="50"><br>
    </div>
    <div class="mb-3">
    <label for="Firstname" class="form-label">Full name</label>
    <input type="text" class="form-control" id="fname" placeholder="Enter your name"earia-describedby="emailHelp" style="width: 70%;" required>
    </div>
    <div class="mb-3">
    <label for="Input2" class="form-label">Date of Birth</label>
    <input type="date" class="form-control" id="dobu" style="width:30%;" required>
    </div>
    <div class="mb-3">
    <label for="Input3" class="form-label">Blood Group</label>
    <select class="form-select" id="bgroup" name="Input3" style="width:30%;">
        <option value="A+">A+</option>
        <option value="A-">A-</option>
        <option value="B+">B+</option>
        <option value="B-">B-</option>
        <option value="O+">O+</option>
        <option value="O-">O-</option>        
        <option value="AB+">AB+</option>
        <option value="AB-">AB-</option>    
    </select>
    </div>
    <div class="mb-3">
    <label for="Input4" class="form-label">Last Donate Date</label>
    <input type="date" class="form-control" id="ldd" style="width:30%;">
    </div>    
    <div class="mb-3">
    <label for="Input5" class="form-label">Mobile Number</label>
    <input type="tel" maxlength="10" pattern="[0-9]{10}" class="form-control" id="mnum" placeholder="Enter mobile number" style="width: 30%;" required>
    </div>
    <div class="mb-3">
    <label for="Input6" class="form-label" >Address</label>
    <input type="text" class="form-control" placeholder="Please enter your permanent address" id="addrr" style="width:50%;" required>   
    </div>
    <div class="mb-3">
    <label for="Input7" class="form-label">Pin code </label>
    <input type="tel" maxlength="6" pattern="[0-9]{6}" class="form-control" id="apin" placeholder="Enter your pin code" style="width: 30%;" required>
    </div>
  <button type="submit" class="btn btn-primary" onclick="Record()">Submit</button>
</form>
</body>
<script src="https://www.gstatic.com/firebasejs/8.6.1/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.6.1/firebase-auth.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.6.1/firebase-database.js"></script>

<script src="https://www.gstatic.com/firebasejs/8.6.1/firebase-analytics.js"></script>
  <script>
    // Initialize Firebase
  var firebaseConfig = {
    apiKey: "AIzaSyBYtI-A55BouY-akI88YezmC1_XEsimI5s",
    authDomain: "fir-491cb.firebaseapp.com",
    projectId: "fir-491cb",
    storageBucket: "fir-491cb.appspot.com",
    messagingSenderId: "605853319210",
    appId: "1:605853319210:web:86ee5cb96b6572067ac353",
    measurementId: "G-2M33Q4G91T",
    databaseURL:"https://fir-491cb-default-rtdb.asia-southeast1.firebasedatabase.app",
  };
  firebase.initializeApp(firebaseConfig);
  </script>
  <script type="text/javascript" src="blooddetailstore.js"></script>
</html>