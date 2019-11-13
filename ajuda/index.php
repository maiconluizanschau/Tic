<html>
        <head>
                <?php header("Content-Type: text/html; charset=UTF-8",true); ?>
                <title>Teste inicial CPD</title>
        </head>
        <body>
                <h2>Teste inicial CPD</h2>
                <p>Essa conta de hospedagem foi criada, mas ainda não há arquivos para exibir o site.</p>
                <p>Se você for o responsável pelo site, acesse a conta de FTP com os dados enviados por e-mail para começar a incluir arquivos.</p>
                <p>Em caso de dúvidas, contate a Divisão de Suporte do CPD.</p>
                <h2>Dados </h2>
                <?php;
                echo 'Current script owner: ' ;
                get_current_user(). '<br>';
                echo '<h4> UID: ' . getmyuid() . '</h4>';
                echo '<h4>GID:' . getmygid() . '</h4>';
                echo '<h4>PID:' . getmypid() . '</h4>';
                echo '<br>';
                echo "PHP runs under the user: [" ;
                echo  system('id') . "]<br>";
                ?>


        <body>
</html>


