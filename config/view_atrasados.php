<?php 

include 'controller_select_atrasados.php';

//CABECERA
		echo "<table id='example1' class='table table-bordered table-striped table-hover'>";

//CONTENIDO
    while($row = $result_atrasados_users->fetch_assoc()) {
        echo "<tbody>
	                <tr>
	                   <td>" . $row['username']. "</td>
	                   <td>" . $row['cant']. "</td>
	                </tr>
              </tbody>";
        }

// PIE
		echo "<tfoot>
              </tfoot>
             </table>";

$conn->close();
 ?>