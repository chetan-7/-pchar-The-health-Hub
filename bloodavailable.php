<!DOCTYPE html>
<html>
<head>
  <style type="text/css">
    select{
      width: 111px;
      font-size: 0.7em;
    }
    input{
      font-size: 0.7em;
      width: 111px;
    }
    body{
      font-family: Monospace;
      font-size: 1.5em;
    }
    button{
      background-color: #4CAF50;
      border: none;
      color: white;
      padding: 7px 7px;
      text-align: center;
      display: inline-block;
      font-size: 0.7em;
      transition-duration: 0.4s;
      cursor: pointer;
    }
    button:hover{
        background-color: #038CBA;
        color: white;
    }
  </style>
  <title>Information</title>
</head>
<body>
    <div style="text-align: center">
    <img src="assets/images/logo.png" width="110" height="50">
    </div>
<form method="POST">
  <label>Enter blood type: </label>
    <select id="group">
      <option value="A+">A+</option>
      <option value="A-">A-</option>
      <option value="B+">B+</option>
      <option value="B-">B-</option>
      <option value="AB+">AB+</option>
      <option value="AB-">AB-</option>
      <option value="O+">O+</option>
      <option value="O-">O-</option>     
    </select><br/><br/>
  <div>
  <label>Enter pin code  :</label>
      <input type="tel" maxlength="6" pattern="[0-9]{6}" placeholder="Enter pincode" id="apin">
    </div>
</form><br/>
<button onclick="fetchAllData()">Check Availability</button>

<ul id="list">
  
</ul>
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

  var entNo=0;
  function AddItemtoList(name,DOB,BloodGroup,PhoneNumber,LDD,address,pin){
        var ul=document.getElementById("list");
        var header=document.createElement('h2');

        var _name=document.createElement('li');
        var _DOB=document.createElement('li');
        var _BloodGroup=document.createElement('li');
        var _PhoneNumber=document.createElement('li');
        var _LDD=document.createElement('li');
        var _address=document.createElement('li');
        var _pincode=document.createElement('li');

        header.innerHTML='Donor details '+(++entNo);

        _name.innerHTML='Name : '+name;
        _DOB.innerHTML='Date of Birth : '+DOB;
        _BloodGroup.innerHTML='Blood Group : '+BloodGroup;
        _PhoneNumber.innerHTML='Phone number is : '+PhoneNumber;
        _LDD.innerHTML='Last Donate Date is : '+LDD;
        _address.innerHTML='Address is : '+address;
        _pincode.innerHTML='Pincode is : '+pin;

        ul.appendChild(header);
        ul.appendChild(_name);
        ul.appendChild(_DOB);
        ul.appendChild(_BloodGroup);
        ul.appendChild(_PhoneNumber);
        ul.appendChild(_LDD);
        ul.appendChild(_address);
        ul.appendChild(_pincode);
  }
  function fetchAllData(){
    //location.reload();
    var gr=document.getElementById("group").value;
    var pn=document.getElementById("apin").value;

    firebase.database().ref('Donors').once('value',function(snapshot){
      snapshot.forEach(
        function(ChildSnapshot){
          let name=ChildSnapshot.val().Name;
          let address=ChildSnapshot.val().Address;
          let BGroup=ChildSnapshot.val().BloodGroup;
          let DBirth=ChildSnapshot.val().DateofBirth;
          let lastdonate=ChildSnapshot.val().LastDonateDate;
          let Phonenum=ChildSnapshot.val().PhoneNumber;
          let pincode=ChildSnapshot.val().Pincode;
          if(BGroup==gr && pincode==pn)
                AddItemtoList(name,DBirth,BGroup,Phonenum,lastdonate,address,pincode);
        });
    });
  }
  //window.onload(fetchAllData());

</script>

</html>