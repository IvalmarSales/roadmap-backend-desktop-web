<!-- Tag ?php -->
<?php 
    //seu codigo aqui.
?>

<!--   Separador de instruções  -->
<?php 
    //uso do ponto e virgula no final da linda fechando o codigo
    $variavel; 
 ?>

<!--  Comentários - Linha, Bloco e Region  -->
<?php
    // Este comentario começa com // nao podendo ser ultrapassado para a proxima linha.
    
    /*  
        Este comentario começa com / * podendo ser constuidos 
        blocos de notas maiores ultrapassando linhas.
        Ao final deve ser fechado com * / 
    */
    
    #region           
                
    /*  Os Region começam com # e a palavra reservado region,
        os mesmos nao invalidan o conteudo dentro, 
        servem como bloco de area para localizaçao 
        e esconder uma parte do seu em tempo de desenvolvimento.   */   
        
        $variavel = "O region nao me invalidou!";
    #endregion
?>

<!--  Imprimindo em html (print, echo, ?=)  -->
<?php 
    // imprima codigos html ou textos atraves de comandos PHP

    // O print fará a impresso da frase "Hello World!"
    print('"Hello World!"'); 

    //Echo é similar ao print, é mais recomendado para impresao de textos e tags HTML.  
    echo '<br>'; 
?>

<!-- A ?= é usado dentro de tags HTML e so pode ser usada para exibiçao simples de textos. -->
<?= 
    $variavel 
?>
<!-- No exemplo acima ele ira imprimir o valor da variavel que se encontra atribuida no region -->