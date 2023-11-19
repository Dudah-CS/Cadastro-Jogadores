<?php
//O processa_cad será bastante usado para diferenciarmos os arquivos de CADASTROS para os que vão levar e trazer informações

	include_once("conn.php");
	$pos = $_POST['txtstatus'];
	$result_pos = "INSERT INTO tbstatus(status) VALUES ('$pos')";

	$resultado_pos = mysqli_query($conn, $result_pos);
	
	if(mysqli_affected_rows($conn) != 0){
				echo "
					<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=cadStatus.html'>
					<script type=\"text/javascript\">
						alert(\"Status cadastrada com Sucesso.\");
					</script>
				";	
			}else{
				echo "
					<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=cadStatus.html'>
					<script type=\"text/javascript\">
						alert(\"Erro ao cadastrar!\");
					</script>
				";	
			}
?>
