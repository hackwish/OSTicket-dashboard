<?php 

include 'controller_select_tipo_req.php';
//include 'controller_select_tipo_req_sistemas.php';

//CABECERA
		echo "<table id='example1' class='table table-bordered table-striped'>
	          	<thead  class='thead-inverse'>
	                <tr>
	                  	<th>Tipo de Requerimiento</th>
	                  	<th>Total</th>
	                </tr>
	            </thead>";

//CONTENIDO
    while($row = $result->fetch_assoc()) {
        echo "<tbody>
	                <tr>
	                   <td>" . $row['topic']. "</td>
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