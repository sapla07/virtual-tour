<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<style>
html{
font-family: "Snell Roundhand",cursive;
}

#Btn, #myBtn{
background-color: #47BB5E;
    border: none;
    color: white;
    padding: 5px 5px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 15px;
    margin: 2px 2px;
    cursor: pointer;
}

#Btn:hover, #myBtn:hover{
	box-shadow: 2px 2px 2px grey;
	}
.modal
{
	display: none;
	position: fixed;
	z-index: 1;
	padding-top: 100px;
	left: 0;
	top: 0;
	width: 100%;
	height: 100%;
	overflow: auto;
	background-color: rgb(0,0,0);
	background-color: rgba(0,0,0,0.4);
}

.modal-content
{
	background-color: white;
	margin: auto;
	padding: 0px 0px 20px 20px;
	border: 1px solid grey;
	border-radius: 10px;
	width: 20%;
}
.close {
    color: #aaaaaa;
    float: right;
    font-size: 22px;
    font-weight: bold;
	padding-right: 10px;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}
#hide_btn{
		display : none;
}
</style>
</head>

<body>
<button id="myBtn">Report</button>
<div id="myModal" class="modal">
	<div class="modal-content">
	  <span class="close">&times;</span>
	  <h3 style="color:#F48A12">Report</h3>
	  
	  <form id="form"  method="post" action="myform.php">
	      <input type="checkbox" id="1" name="category[]" value="1">Sexual content<br> 
	      <input type="checkbox" id="2" name="category[]" value="2">Violent or repulsive content<br>
		  <input type="checkbox" id="3" name="category[]" value="3">Hateful or abusive content<br>
		  <input type="checkbox" id="4" name="category[]" value="4">Harmful dangerous acts<br>
		  <input type="checkbox" id="5" name="category[]"  value="5">Child abuse<br>
		  <input type="checkbox" id="6" name="category[]"  value="6">Infringes my rights<br>
		  <input type="checkbox" id="7" name="category[]"  value="7">Spam or misleading<br><br>
		  <input type="submit" id="hide_btn" value="Report">
	  </form>
	  <button type="button" id="Btn" onclick="checkit()">Report</button>
	</div>
</div>

<script type="text/javascript">
var modal = document.getElementById('myModal');

var btn = document.getElementById("myBtn");

var span = document.getElementsByClassName("close")[0];

btn.onclick = function() {
    modal.style.display = "block";
}



window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

span.onclick = function() {
    modal.style.display = "none";
}

	
function checkit(){
	
	
	var c = $("input[type=checkbox]:checked").length;

	if(c>0)
	{
			$("#hide_btn").click();
	}
	else{
			alert("Please select atleast one category.");
	}
}
	
</script>
</body>
</html>
