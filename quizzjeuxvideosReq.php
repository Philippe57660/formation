<?php

	echo "<br><strong>VOICI LES RESULTATS DU QUIZZ :</strong><br><br>";
	$note=0;
	//Q1
	
	
	if($_POST["question1"]=="3")
	{
		echo "Question 1 : C'est une bonne réponse ! Vous jouez le personnage Carl Johnson dans GTA San Andreas.<br>";
		$note++;
	}
	else
	{
		echo "Question 1 : C'est une mauvaise réponse..<br>";
	}
	
	//Q2
	if($_POST["question2"]=="2")
	{
		echo "Question 2 : C'est une bonne réponse ! Ganondorf possède le fragement de la force et Zelda celui de la sagesse.<br>";
		$note++;
	}
	else
	{
		echo "Question 2 : C'est une mauvaise réponse..<br>";
	}
	
	//Q3
	if($_POST["question3"]=="2")
	{
		echo "Question 3 : C'est une bonne réponse ! League of legends est sorti en 2009, Counter Strike en 2012 et GTA V en 2013<br>";
		$note++;
	}
	else
	{
		echo "Question 3 : C'est une mauvaise réponse..<br>";
	}
	
	//Q4
	if($_POST["question4"]=="3")
	{
		echo "Question 4 : C'est une bonne réponse ! Pichu évolue en Pikachu qui lui évolue en Reichu.<br>";
		$note++;
	}
	else
	{
		echo "Question 4 : C'est une mauvaise réponse..<br>";
	}
	
	//Q5
	if($_POST["question5"]=="2")
	{
		echo "Question 5 : C'est une bonne réponse ! Wario porte une salopette mauve sur des habits jaunes.<br>";
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