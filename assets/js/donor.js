function Record(){
  var name=document.getElementById("Input1").value;
  var dob=document.getElementById("Input2").value;
  var blood_group=document.getElementById("Input3").value;
  var last_donate_date=document.getElementById("Input4").value;
  var mobile_num=document.getElementById("Input5").value;
  var address=document.getElementById("Input6").value;
  firebase.database().ref('Donars/'+name).set({
      DateofBirth : dob,
      BloodGroup : blood_group,
      LastDonateDate : last_donate_date,
      PhoneNumber : mobile_num,
      Address : address
    });
  
} 