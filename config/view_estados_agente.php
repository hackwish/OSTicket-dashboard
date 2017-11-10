<?php 

include 'controller_select_estados.php';

//CABECERA
		echo "<table id='example1' class='table table-bordered table-striped table-hover'>
	          	<thead>
	                <tr>
	                  	<th>Estado de requerimiento</th>
	                  	<th>Total</th>
	                </tr>
	            </thead>";

//CONTENIDO
    while($row = $result->fetch_assoc()) {
        echo "<tbody>
	                <tr>
	                   <td>" . $row['name']. "</td>
	                   <td>" . $row['total']. "</td>
	                </tr>
              </tbody>";
        }

// PIE
		echo "<tfoot>
              </tfoot>
             </table>";

$conn->close();
 ?>