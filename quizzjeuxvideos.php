<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8">
		<title> Quizz Jeux Vidéos </title>
	</head>
	<body>
		<form action='quizzjeuxvideosReq.php' method='POST'>		
			<label>Question 1/5 : Quel est le prénom du personnage que vous controllez dans GTA : San Andreas ?</label><br>
			<input type="radio" name="question1" value="1">Max<br>
			<input type="radio" name="question1" value="2">Trevor<br>
			<input type="radio" name="question1" value="3">Carl<br><br><br>
			
			<label>Question 2/5 : Dans the legend of Zelda, quel fragement de la triforce représente Link ?</label><br>
			<input type="radio" name="question2" value="1">La force<br>
			<input type="radio" name="question2" value="2">Le courage<br>
			<input type="radio" name="question2" value="3">La sagesse<br><br><br>
			
			<label>Question 3/5 : Lequel de ces jeux est le plus récent ?</label><br>
			<input type="radio" name="question3" value="1">League of legends<br>
			<input type="radio" name="question3" value="2">GTA V<br>
			<input type="radio" name="question3" value="3">Counter strike : global offensive<br><br><br>
			
			<label>Question 4/5 : En quoi évolue le pokemon Pikachu ?</label><br>
			<input type="radio" name="question4" value="1">Les Pikachu n'évoluent pas<br>
			<input type="radio" name="question4" value="2">Pichu<br>
			<input type="radio" name="question4" value="3">Raichu<br><br><br>
			
			<label>Question 5/5 : De quelle couleur est la salopette de Wario (personnage nintendo) ?</label><br>
			<input type="radio" name="question5" value="1">Jaune<br>
			<input type="radio" name="question5" value="2">Mauve<br>
			<input type="radio" name="question5" value="3">Vert<br><br><br>
			
			<Input type="reset" value="Effacer les réponses">
			<input type="submit" value="Voir les résultats">		
		</form>		
	</body>
</html>