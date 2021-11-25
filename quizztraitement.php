<?php

	echo "<br><strong>VOICI LES RESULTATS DU QUIZZ :</strong><br><br>";
	$note=0;
	//Q1
	if($_POST["question1"]=="Miyamoto")
	{
		echo "Question 1 : C'est une bonne réponse ! Miyamoto est bien le créateur de Mario (ainsi que Zelda, Donkey Kong et d'autres personnages Nintendo.)<br>";
		$note++;
	}
	else
	{
		echo "Question 1 : C'est une mauvaise réponse..<br>";
	}
	
	//Q2
	if($_POST["question2"]=="Ankara")
	{
		echo "Question 2 : C'est une bonne réponse ! Ankara est bien la capitale de la Turquie (et non pas Istanbul !)<br>";
		$note++;
	}
	else
	{
		echo "Question 2 : C'est une mauvaise réponse..<br>";
	}
	
	//Q3
	if($_POST["question3"]=="L'Elbrouz")
	{
		echo "Question 3 : C'est une bonne réponse ! Eh oui c'est bien L'Elbrouz contrairement à ce que l'on croit.<br>";
		$note++;
	}
	else
	{
		echo "Question 3 : C'est une mauvaise réponse..<br>";
	}
	
	//Q4
	if($_POST["question4"]=="Yggdrasil")
	{
		echo "Question 4 : C'est une bonne réponse ! Mjöllnir est le marteau à manche court de Thor et Jörmungand est un gigantesque serpent de mer.<br>";
		$note++;
	}
	else
	{
		echo "Question 4 : C'est une mauvaise réponse..<br>";
	}
	
	//Q5
	if($_POST["question5"]=="Huit")
	{
		echo "Question 5 : C'est une bonne réponse ! Les arachnides ont 8 pattes alors que les insectes en ont 6.<br>";
		$note++;
	}
	else
	{
		echo "Question 5 : C'est une mauvaise réponse..<br>";
	}
	
	//Résultat
	echo "<strong><br><br>Ton résultat est de $note/5 ! <strong>";
	if($note=="0")
	{
		echo "Tu es vraiment nul ou tu as fait expres ?";
	}
	
	if($note=="1")
	{
		echo "C'est pas très bon..";
	}
	
	if($note=="2")
	{
		echo "Franchement bof ..";
	}
	
	if($note=="3")
	{
		echo "Au moins c'est la moyenne..";
	}
	
	if($note=="4")
	{
		echo "Pas mal..";
	}
	
	if($note=="5")
	{
		echo "Tu as forcément triché pour avoir répondu juste à toutes les questions !";
	}
	
?>