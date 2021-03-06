<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<!-- Sidebar -->


<div class="w3-sidebar w3-bar-block w3-card w3-animate-right mt-5" style="display:none;right:0;" id="rightMenu">
  <button onclick="closeRightMenu()" class="w3-bar-item w3-button w3-large">Tancar &times;</button>
  <a href="#" class="w3-bar-item w3-button">Estudiante 1</a>
  <a href="#" class="w3-bar-item w3-button">Estudiante 2</a>
  <a href="#" class="w3-bar-item w3-button">Estudiante 3</a>

</div>

<div class="w3-teal">
  <button class="w3-button w3-teal w3-xlarge w3-right" onclick="openRightMenu()">Estudiants &#9776;</button>
</div>

<div class="w3-container">
<p>In this example, we demonstrate how to use two side navigations.</p>
<p>We have created two "menu" buttons: one to open the side navigation from the left and one to open it from the right.</p>
</div>
     
<script>

function openRightMenu() {
  document.getElementById("rightMenu").style.display = "block";
}

function closeRightMenu() {
  document.getElementById("rightMenu").style.display = "none";
}
</script>
     
     