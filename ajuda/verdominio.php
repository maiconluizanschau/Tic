<html>
        <head>
                <?php header("Content-Type: text/html; charset=UTF-8",true); ?>
                <title>Teste inicial CPD</title>
        </head>
        <body>
                <h2>Seu Dominio: 
		  <?php;
		    $hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);
		    echo $hostname;
		  ?>
                </h2>
 		<br>
                <p>Em caso de dúvidas, contate a Divisão de Suporte do CPD.</p>
                <br>


        <body>
</html>


