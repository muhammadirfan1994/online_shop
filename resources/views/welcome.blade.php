<!DOCTYPE html>
<html lang="en">
<head>
<title>BD Online Shop</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="{{url('css/style.css')}}"/>


<style>

{
  box-sizing: border-box;
}

body {
  margin: 0;
}

.header {
  background-color: #f45064;
  padding: 5px;
  text-align: center;
}

.topnav {
  overflow: hidden;
  background-color: #red;
}

.topnav a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 20px 14px;
  text-decoration: none;
}

.topnav a:hover {
  background-color: white;
  color: red;
}
.body {
  float: right;
  padding: 30px;
}
.column.middle {
  width: 100%;
}
.row:after {
  content: "";
  display: table;
  clear: both;
}
.sidenav {
  height: 200%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 30px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #black;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}


.main_content{
  font-style: italic;
     color: blue;
     text-align: center;
}


.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
img {
   width: 100%;
}
</style>
</head>
<body>

<div class="header">

  <p><button style="float:right" class="Search">Search</button></p>
  <input type="text" style="float:right" placeholder="Type Here">
  <h1>BD Online Shop</h1>

</div>

<div class="topnav">
  <a href="#">About us</a>
  <a href="#">Cart</a>
  <a href="/sign_in">Log in</a>
  <a href="/sign_up">Sign Up</a>
  <p><button style="float:right" class="Facebook">Facebook</button></p>
  <p><button style="float:right" class="Linked-in">Instagram</button></p>
</div>
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="/watch">Watch</a>
  <a href="/shoe">Shoe</a>
  <a href="/dress">Dress</a>
  <a href="/electronics">Electronics</a>
  <a href="/toys">Toys</a>
  <a href="/grocery">Grocery</a>
</div>



<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Catagory</span>

<div class="main_content">
      <h1>This week TOP BRANDS </h1>
      <img src="images/apex.jpg" alt="Picture" style="width:100px;height:100px class="responsive";">
      <img src="images/arong.png" alt="image" style="width:100px;height:100px class="responsive";">
      <img src="images/rolex.png" alt="Picture" style="width:100px;height:100px class="responsive";">
      <img src="images/rupchanda.jpg" alt="Picture" style="width:100px;height:100px class="responsive";">
      <img src="images/batta.png" alt="Picture" style="width:100px;height:100px class="responsive";">
      <img src="images/radhuni.jpg" alt="Picture" style="width:100px;height:100px class="responsive";">
      <img src="images/lereve.png" alt="Picture" style="width:100px;height:100px class="responsive";">
      <img src="images/puma.png" alt="Picture" style="width:100px;height:100px class="responsive";">

</div>

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}

</script>

</style>
<div class="row">
<div class="column middle">

</div>


</body>
</html>
