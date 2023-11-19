<!DOCTYPE html>
<html>
	<head>
		<title> Cadastro</title>
		<meta charset="utf-8">
	</head>
	</body>

	<?php
		include_once("conn.php");
	?>
	<center>
	<h1>Cadastro do Horario e Data da Saida ou Entrada do Jodador</h1>
        <form method="POST" action="processa_cadDataHorario.php">
                <select name="selectJogador">
				<option>Selecione o jogador</option>
					<?php
						$result_pos = "SELECT * FROM tbjogador";
						$resultado_sel_pos = mysqli_query($conn, $result_pos);
						while($row_pos = mysqli_fetch_assoc($resultado_sel_pos)){ ?>
							<option value="<?php echo $row_pos['codJogador']; ?>"><?php echo $row_pos['nomeJogador']; ?></option> <?php
						}
					?>
				</select><br><br>
                
                <select name="selectTime">
				 <option>Selecione o Time</option>
					<?php
						$result_pos = "SELECT * FROM tbtime";
						$resultado_sel_pos = mysqli_query($conn, $result_pos);
						while($row_pos = mysqli_fetch_assoc($resultado_sel_pos)){ ?>
							<option value="<?php echo $row_pos['codTime']; ?>"><?php echo $row_pos['nomeTime']; ?></option> <?php
						}
					?>
				</select><br><br>

                <select name="selectStatus">

                    <option>Selecione o Status do Jogador</option>
                         <?php
                            $result_pos = "SELECT * FROM tbstatus";
                            $resultado_sel_pos = mysqli_query($conn, $result_pos);
                            while($row_pos = mysqli_fetch_assoc($resultado_sel_pos)){ ?>
                             <option value="<?php echo $row_pos['codStatus']; ?>"><?php echo $row_pos['status']; ?></option> <?php
                                }
                            ?>
				</select><br><br>
                   
                   
                Horario: <input type="text" name="txtHorario"><br><br>
		        Data: <input type="text" name="txtData"><br><br>


			<input type="submit" value="Cadastrar">
		</form>
	</center>	
	</body>
</html>

