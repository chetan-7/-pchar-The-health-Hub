<!DOCTYPE html>
<html>
<head>
<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: Arial;
}

.price {
  color: grey;
  font-size: 22px;
}

.card button {
  border: none;
  outline: 0;
  padding: 12px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}
.card button:hover {
  opacity: 0.7;
}
.column {
  float: left;
  width: 33.33%;
  padding: 10px;
  height: 300px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
</style>
<title>उpchar-The Health Hub</title>
</head>
<body>

<h2 style="text-align:center;font-family:'Lucida Console','Courier New', monospace;">Available Doctors</h2>
<div class="row">
      <div class="card column">
        <img src="https://www.hhmglobal.com/wp-content/uploads/research-insight/14234/Manmeet_Ahluwalia_Cleveland_Clinic.jpg" alt="Image not available" width="276.5" height="305.54" style="width:100%">
        <h1>Sharad Shah</h1>
        <p class="price"></p>
        <p>Dr.Sharad Shah is physician having experience of 14 four years.</p>
        <p><a href="Appointement.php"><button>Book Appointement</button></a></p>
      </div> 
      <div class="card column">
        <img src="https://telemedizin.one/wp-content/uploads/2019/12/doctor07.jpg" alt="Image not available" width="276.5" height="305.54" style="width:100%">
        <h1>Defliina Nom</h1>
        <p class="price"></p>
        <p>Dr.Defliina Nom is heart specialist having experience of 4 four years.</p>
        <p><a href="Appointement.php"><button>Book Appointement</button></a></p>
      </div>
       <div class="card column">
        <img src="https://d2gr5kl7dt2z3t.cloudfront.net/blog/wp-content/uploads/2017/02/02060408/shutterstock_287380919.jpg" alt="Image not available" width="276.5" height="305.54" style="width:100%">
        <h1>Rajesh Gupta</h1>
        <p class="price"></p>
        <p>Dr.Rajesh Gupta is cancer specialist having experience of 9 four years.</p>
        <p><a href="Appointement.php"><button>Book Appointement</button></a></p>
      </div>
      <div class="card column">
        <img src="https://res.cloudinary.com/fleetnation/image/private/c_fit,w_1120/g_south,l_text:style_gothic2:%C2%A9%20Manav%20Lohia,o_20,y_10/g_center,l_watermark4,o_25,y_50/v1458042598/g6k21frl2wxymj2plm8m.jpg" alt="Image not available" width="276.5" height="305.54" style="width:100%">
        <h1>Ravi Teja</h1>
        <p class="price"></p>
        <p>Dr.Ravi Teja is gasentrologist specialist having experience of 7 four years.</p>
        <p><a href="Appointement.php"><button>Book Appointement</button></a></p>
      </div>

</div>
</body>
</html>
