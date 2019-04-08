<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="#" class="fa fa-home"></a>

  <a href="#" class="fa fa-search"></a>
  <a href="#"class="fa fa-envelope"></a>
  <a href="#" class="fa fa-globe"></a>
  <a href="#" class="fa fa-trash"></a>
</div>

<div id="main" class="jumbotron">
  <span style="font-size:30px;cursor:pointer; color:#ccfced" onclick="openNav()">&#9776; </span>
  <div class="heading">
    <center>
    <h1>Rent A Car</h1>
    <p>Get your perfect choice at door
Be safe, Save money
</p>
  </center>
  </div>
</div>


<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "100px";
    document.getElementById("main").style.marginLeft = "100px";
    document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
    document.body.style.backgroundColor = "white";
}
</script>
