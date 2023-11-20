<?php
//O processa_cad será bastante usado para diferenciarmos os arquivos de CADASTROS para os que vão levar e trazer informações
	include_once("conn.php");
	$nome = $_POST['txtNome'];
	$pos = $_POST['selectPosicao'];
	$idade = $_POST['txtIdade'];
	$altura = $_POST['txtAltura'];
	$peso = $_POST['txtPeso'];
	$result_jogador = "INSERT INTO tbjogador(nomeJogador,codPosicao, idadeJogador,alturaJogador, pesoJogador) VALUES ('$nome','$pos','$idade','$altura','$peso')";
	$resultado_jog = mysqli_query($conn, $result_jogador);
	if(mysqli_affected_rows($conn) != 0){
				echo "
					<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=cadJogador.php'>
					<script type=\"text/javascript\">
						alert(\"Jogador cadastrado com Sucesso.\");
					</script>
				";	
			}else{
				echo "
					<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=cadJogador.php'>
					<script type=\"text/javascript\">
						alert(\"Erro ao cadastrar!\");
					</script>
				";	
			}
?>
