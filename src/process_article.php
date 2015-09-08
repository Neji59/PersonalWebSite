<?php
	$link = mysql_connect('localhost','root','');
	if(!$link){
		die('Connexion à la BDD échouée :'.mysql_error());
	}
	else{
		print('Connexion réussi !');
		$linkBD = mysql_select_db('personalwebsite');
		if(!$linkBD){
			die('Connexion à la base échouée :'.mysql_error());
		}
		else{
			print('Connexion a la base réussi !');
			$resultTest = mysql_query('SELECT * FROM article');
			
			echo '<div class="panel panel-info">';
			
			while($row = mysql_fetch_assoc($resultTest)){
				echo '<div class="panel-heading">';
				echo $row['article_name'].' '.$row['article_date'];
				echo '</div>';
				echo '<div class="panel-footer">';
				echo $row['article_content'];
				echo "</div>";
			}

			echo '</div>';
			
			mysql_free_result($resultTest);
		}
	}
	
	mysql_close($link);
?>
