<!--
	TIPOS DE DADOS E VARIAVEIS
-->

<!-- Variáveis -->
<?php 
/*
	As variaveis em PHP tem sua utilizaçao como espaço temporario na memoria,
	sendo utilizadas apenas em tempo de execução da aplicação.
	Sao fundamentais para a construçao da logica/codigo em qualquer linguagem de Programçao.
	Em PHP, as variaveis sempre começam com o simbolo de $ Cifrao, 
	sendo obrigado o uso de uma nomeclatura seguindo certos padroes. 
*/

	$variavel_de_exmplo;	
?>

<!-- Nomeando variáveis -->
<?php
/*
	Ao criar variaveis, devemos ter alguns cuidados quanto a nomeclaturas,
	apos o cifrao, é obrigatorio usar caracteres de Aa ao Zz 
	ou Traço _ seguido dos caracteres sugeridos anteriormente,
	em seguida pode se usar quaisquer caracteres entre Aa ao Zz ou 0 a 9.
	
	Em se tratando de nomeclatura de variaveis no PHP, existe difenças de CASE SENSITIVE 
	entre maiusculas e menusculas, por tanto VARIAVEL é diferente de Variavel.
*/
	$variavel = 'com letras minusculas';
	$VARIAVEL = 'COM LETRAS MAIUSCULAS';
	$varIavel = 'Unica impressa das variveis com Case Sensitive.';
	$VARiavel = 'MAIUSCULAS & minusculas';

	echo $varIavel; //echo de impressao para teste.
	
/*
	Em se tratando de normas, devemos nos atentar ao uso de padroes como,
	camelCase, kabab_case, lazycase e muitas outras.. 
*/
?>
<br>----------------------------------------<br>
<!-- 	Tipos de dados  -->
<?php
/*
	As variaveis armazena dados de todos os tipos que vao de simples textos e numeros, 
	chegando a complexos arrays multidimensionais.	 
	Os tipos de dados em variaveis sao atribuidos de forma automatica pelo PHP,
	as variaveis assumem sua tipagem com base no valor atribuidos a elas.
	As atribuiçoes de valores sao feitas atraves do Operador de igualdade =.  
*/

	//exemplos

	// uso de aspas simples ou duplas para atribuiçao de textos 'Strings'
	$variavel_texto = "Aqui é um texto! HELLO WORLD!"; 

	// uso direto de numerais sem aspas para adicionar inteiros ou numeros reais.
	$variavel_inteiro = 1; // adição de um valor INT - Inteiro sem casa decimais
	$variavel_decimal = 1.1; // adiçao de valores decimais padrao ingles de separaçao.
	// uso direto da palavra reservada true Verdadeiro ou false Falso.
	$variavel_booleana = true;

	echo "<b>Texto:</b> {$variavel_texto} <br>";
	echo  "<b>Inteiro:</b> {$variavel_inteiro} <br>";
	echo "<b>Verdadeiro:</b> <i>{$variavel_booleana} ?</i><b> .Não será impresso 'TRUE' ou 'FALSE', Somente 0 ou 1</b>";
?>