function Record(){
    var name=document.getElementById("fname").value;
    var dob=document.getElementById("dobu").value;
    var blood_group=document.getElementById("bgroup").value;
    var last_donate_date=document.getElementById("ldd").value;
    if(last_donate_date==""){
        last_donate_date="NOT DONATED BEFORE";
    }
    var mobile_num=document.getElementById("mnum").value;
    var address=document.getElementById("addrr").value;
    var pincode=document.getElementById("apin").value;
    document.write("<h3>Thanks!! Your response has been recorded <em>"
                    +name+"</em><br>Your date of birth : <em> "
                    +dob+"</em><br>Your blood group is <em>"+
                    blood_group+"</em><br/>Mobile Number is : <em>"+
                    mobile_num+"</em><br/>Last Donated at <em>"+
                    last_donate_date+"</em><br/></h3>");
    //alert("Jaishreebalaji!");
    let obj={
            DateofBirth : dob,
            BloodGroup  : blood_group,
            LastDonateDate : last_donate_date,
            PhoneNumber : mobile_num,
            Address : address,
            Name:name,
            Pincode:pincode
    };
    //alert(obj);
    firebase.database().ref('Donors/'+name).set(obj);


    /*var detail=window.prompt("Enter blood group : ");
    firebase.database().ref('Donors/'+detail).on('value',(snap)=>{
        console.log(snap.val());
    });*/
}