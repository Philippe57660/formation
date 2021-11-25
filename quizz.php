<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8">
		<title> Quizz </title>
	</head>
	<body>
		<form action='quizztraitement.php' method='POST'>
		
		<label>Question 1/5 : Quel est le nom du créateur de Mario ?</label><br>
		<input type="radio" name="question1" value="Nagazaki">Nagazaki<br>
		<input type="radio" name="question1" value="Yamamoto">Yamamoto<br>
		<input type="radio" name="question1" value="Miyamoto">Miyamoto<br><br><br>
		
		<label>Question 2/5 : Quel est la capitale de la Turquie ?</label><br>
		<input type="radio" name="question2" value="Istanbul">Istanbul<br>
		<input type="radio" name="question2" value="Ankara">Ankara<br>
		<input type="radio" name="question2" value="Beroj">Beroj<br><br><br>
		
		<label>Question 3/5 : Quel est le point culminant de l'Europe ?</label><br>
		<input type="radio" name="question3" value="L'Everest">L'Everest<br>
		<input type="radio" name="question3" value="Le Mont Blanc">Le Mont Blanc<br>
		<input type="radio" name="question3" value="L'Elbrouz">L'Elbrouz<br><br><br>
		
		<label>Question 4/5 : Dans la mythologie Nordique, comment s'appelle l'arbre monde ?</label><br>
		<input type="radio" name="question4" value="Yggdrasil">Yggdrasil<br>
		<input type="radio" name="question4" value="Mjöllnir">Mjöllnir<br>
		<input type="radio" name="question4" value="Jörmungand">Jörmungand<br><br><br>
		
		<label>Question 5/5 : Combien de pattes possède une araignée ?</label><br>
		<input type="radio" name="question5" value="Six">Six<br>
		<input type="radio" name="question5" value="Huit">Huit<br>
		<input type="radio" name="question5" value="Dix">Dix<br><br><br>
		
		<Input type="reset" value="Effacer les réponses">
		<input type="submit" value="Voir les résultats">
		
		</form>		
	</body>
</html>