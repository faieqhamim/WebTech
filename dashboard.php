<?php include 'admin_header.php';?>

<!--dashboard starts -->

<title>Online Garage System/dashboard</title>
<div>
<br><br>
	<table  align="center">
		<tr>
			<td>
				<div class="card">
				<span class="text-white"> Total views <br>
					1K
				</span>
				</div>
			</td>
			<td>
				<div class="card">
				<span class="text-white"> Total served <br>
					19
				</span>
				</div>
			</td>
			<td>
				<div class="card">
				<span class="text-white"> Total admins <br>
					3
				</span>
				</div>
			</td>
		</tr>
	</table>
</div>


<div class="center">
<br><br><br><br>
	<h3 class="text">Recent Sales</h3>
	<table class="table table-striped">
		<thead>
			<th>Sl#</th>
			<th>Package Name</th>
			<th>Package Price</th>
			<th>Sales Qty</th>
			<th>Sales Date</th>
		</thead>
		<tbody>
			<td>1</td>
			<td>Standard Package</td>
			<td>1000 BDT</td>
			<td>2</td>
			<td>26.09.2020</td>
		</tbody>
	</table>
</div>

<script>
	function get(id){
		return document.getElementById(id);
	}
	function fill_suggest(td){
		get("search_text").value= td.innerHTML;
		
	}
	function search(){
		var text = get("search_text").value;
		var xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange=function(){
			if(this.readyState == 4 && this.status == 200 ){
				document.getElementById("suggestion").innerHTML = this.responseText;
			}
		};
		if(text){
			xhttp.open("GET","searchcategory.php?key="+text,true);
			xhttp.send();
		}
		else{
			document.getElementById("suggestion").innerHTML="";
		}
		
	}
</script>

<!--dashboard ends -->
<?php include 'admin_footer.php';?>