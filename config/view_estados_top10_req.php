<?php 

include 'controller_select_top10_req.php';
//include 'controller_select_top10_req_sistemas.php';

//CABECERA
		echo "<table id='example1' class='table table-bordered table-striped table-hover'>
	          	<thead class='thead-inverse'>
	                <tr>
	                  	<th>ID</th>
	                  	<th>Solicitante</th>
	                  	<th>Asunto</th>
	                  	<th>Fecha creación</th>
	                  	<th>Estado</th>
	                </tr>
	            </thead>
	            <tbody>";

//CONTENIDO
		while($row = $result->fetch_assoc()) {

			//$fila = $row['status_id'];
			//echo $row['status_id'];
			if ($row['status_id'] == 1) {
				echo "<tr class='table-danger'>";
			}
			elseif ($row['status_id'] == 6 OR $row['status_id'] == 7 OR $row['status_id'] == 8) {
				echo "<tr class='table-warning'>";
			} 
			elseif ($row['status_id'] == 2 OR $row['status_id'] == 3 OR $row['status_id'] == 4) {
				echo "<tr class='table-success'>";
			}
			else {
				echo "<tr class='table-default'>";
			}
				echo "
	                   <td>" . $row['number']. "</td>
	                   <td>" . $row['user']. "</td>
	                   <td>" . $row['subject']. "</td>
	                   <td>" . $row['created']. "</td>
	                   <td>" . $row['status']. "</td>";
     	}	

// PIE
		echo "		<tr>
				</tbody>
				<tfoot>
              	</tfoot>
            </table>";

$conn->close();
 ?>