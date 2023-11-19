<?php
//O processa_cad será bastante usado para diferenciarmos os arquivos de CADASTROS para os que vão levar e trazer informações

	include_once("conn.php");
	$data= $_POST['txtData'];
	$hora = $_POST['txtHorario'];
    $pos1 = $_POST['selectJogador'];
    $pos2 = $_POST['selectTime'];
    $pos3 = $_POST['selectStatus'];
	$result_jogador = "INSERT INTO tbjogadortime(horaCadastro,dataCadastro,codJogador,codTime,codStatus) VALUES ('$data','$hora','$pos1','$pos2',$pos3)";
	$resultado_jog = mysqli_query($conn, $result_jogador);
	if(mysqli_affected_rows($conn) != 0){
				echo "
					<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=cadDataHorario.html'>
					<script type=\"text/javascript\">
						alert(\"Jogador cadastrado com Sucesso.\");
					</script>
				";	
			}else{
				echo "
					<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=cadDataHorario.html'>
					<script type=\"text/javascript\">
						alert(\"Erro ao cadastrar!\");
					</script>
				";	
			}
?>




