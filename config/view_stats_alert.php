<?php 

include 'controller_select_stats_alert.php';
include 'controller_select_atrasados.php';
// include 'controller_select_stats_alert_sistemas.php';

//CONTENIDO
    while($row = $result_atrasados->fetch_assoc()) {
    	if ($row['ticket']==0) {
    		echo "      
	        <div class='col'>
		          <div class='alert alert-info' role='alert'>
		              <h5 class='alert-heading'>ATRASADOS</h5>
		              <p class='mb-0'>TOTAL</p>
		              <h1>" . $row['ticket']. "</h1>
		          </div>
	        </div>";
    	}
    	else{
    		echo "      
	        <div class='col'>
		          <div class='alert alert-danger' role='alert'>
		              <h5 class='alert-heading'>ATRASADOS</h5>
		              <p class='mb-0'>TOTAL</p>
		              <h1>" . $row['ticket']. "</h1>
		              <hr>
		            	<table id='example1' class='table table-sm table-responsive'>";

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
					    </table>

				  </div>
			</div>";
	    	}

    }

    while($row = $result_abiertos_hoy->fetch_assoc()) {
       	echo "      
	        <div class='col'>
		          <div class='alert alert-warning' role='alert'>
		              <h5 class='alert-heading'>ABIERTOS</h5>
		              <h1>" . $row['ticket']. "</h1>
		              <p>HOY</p>
		              <hr>";
		          }
		              while($row = $result_abiertos->fetch_assoc()) {
       					echo "
       					<p class='mb-0'>TOTAL</p>
       					<h2>" . $row['ticket']. "</h2>
		          </div>
	        </div>";
    }


    while($row = $result_cerrados_hoy->fetch_assoc()) {
       	echo "      
	        <div class='col'>
		          <div class='alert alert-success' role='alert'>
		              <h5 class='alert-heading'>CERRADOS</h5>
		              <h1>" . $row['ticket']. "</h1>
		              <p>HOY</p>
		              <hr>";
		          }
		              while($row = $result_cerrados->fetch_assoc()) {
       					echo "
       					<p class='mb-0'>TOTAL</p>
       					<h2>" . $row['ticket']. "</h2>
		          </div>
	        </div>";
    }

    while($row = $result_total_hoy->fetch_assoc()) {
       	echo "      
	        <div class='col'>
		          <div class='alert alert-primary' role='alert'>
		              <h5 class='alert-heading'>TOTAL</h5>
		              <h1>" . $row['ticket']. "</h1>
		              <p>HOY</p>
		              <hr>";
		          }
		              while($row = $result_total->fetch_assoc()) {
       					echo "
       					<p class='mb-0'>TOTAL</p>
       					<h2>" . $row['ticket']. "</h2>
		          </div>
	        </div>";
    }


$conn->close();
 ?>