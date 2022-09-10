 <html>
<style>
table.GeneratedTable {
  width: 100%;
  background-color: #ffffff;
  border-collapse: collapse;
  border-width: 2px;
  border-color: #ffcc00;
  border-style: solid;
  color: #000000;
}

table.GeneratedTable td, table.GeneratedTable th {
  border-width: 2px;
  border-color: #ffcc00;
  border-style: solid;
  padding: 3px;
}

table.GeneratedTable thead {
  background-color: #ffcc00;
}
</style>
 <body>
<table id="RepTable1"   class="GeneratedTable">
  <thead>
    <tr>
      <th width="1"> <input type="checkbox" id="chbheader" name="chbheader" /></th>
      <th>Name</th>
      <th>price 1</th>
      <th>Price 2</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><input  type="checkbox"></td>
      <td>Eranda</td>
      <td>100</td>
      <td>200</td>
    </tr>
    <tr>
      <td><input  type="checkbox"></td>
      <td>Ravinath</td>
      <td>422</td>
      <td>111</td>
    </tr>
    <tr>
      <td><input type="checkbox"></td>
      <td>Sooriyabandara</td>
      <td>300</td>
      <td>479</td>
    </tr>
    <tr>
      <td><input type="checkbox"></td>
      <td>Bandara</td>
      <td>400</td>
      <td>100</td>
    </tr>
    <tr>
      <td><input type="checkbox"></td>
      <td>Kamal</td>
      <td>221</td>
      <td>322</td>
    </tr>
  </tbody>
</table>
 <br>
  <button   onclick="save();" type="button">Save Data</button> 
  
  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
	</body>
  </html>
<script>
 
$('#chbheader').change(function () {
    $('tbody tr td input[type="checkbox"]').prop('checked', $(this).prop('checked'));
});

function save() {
	var name,price1,price2;
	var grid = document.getElementById("RepTable1");
	var checkBoxes = grid.getElementsByTagName("INPUT");
		for (var i = 1; i < checkBoxes.length; i++) {
			if (checkBoxes[i].checked) {
				var row = checkBoxes[i].parentNode.parentNode;
				name = row.cells[1].innerHTML;
				price1= row.cells[2].innerHTML;
				price2= row.cells[3].innerHTML;
					$.ajax({
					url: "insertdata.php",
					method: "post",
					data: {  getname:name,getprice1:price1,getprice2:price2  },
					success: function (data) {
				 
					}
					});	
																							
			}
		}
		
		alert('ok');
}

</script>
