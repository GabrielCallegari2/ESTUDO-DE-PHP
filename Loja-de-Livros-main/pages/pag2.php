<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTRAR-SE</title>
</head>
<body>
    
    <main>
        <form action="" method="post">
            <label for="nome">NOME</label>
            <br>
            <input type="text" name="nome"  minlength="3" required value="<?php echo htmlspecialchars($nome ?? '');?>">
            <br>
            <br>

            <label for="email">EMAIL</label>
            <br>
            <input type="text" name="email"  minlength="10" required value="<?php echo htmlspecialchars($email ?? '');?>">
            <br>
            <br>

            <label for="tel">TELEFONE</label>
            <br>
            <input type="text" name="tel"   minlength="10" required value="<?php echo htmlspecialchars($tel ?? '');?>">
            <br>
            <br>

            <label for="senha">SENHA</label>
            <br>
            <input type="password" name="senha"  minlength="6" required>
            <br>
            <br>
            <label for="Csenha">COMFIRME SENHA</label>
            <br>
            
            <input type="password" name="Csenha"   minlength="6" required>
            <br>
            <br>

            <button id="i1" type="submit">REGISTRAR-SE</button>
            

        </form>
    </main>

    <?php
        //informaçoes sobre o banco
        $dbname="PROJETINHO";
        $host="127.0.0.1";
        $nome="root";
        $senha="222";
        //banco conetado
        try {
            $pdo= new PDO("mysql:dbname=$dbname;host:$host","$nome","$senha");
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            
        }catch (PDOException$e) {
            echo "erro banco";
        }

        //verifica dados de post
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nome= $_POST['nome'];
            $email= $_POST['email'];
            $telefone= $_POST['tel'];
            $senha= $_POST['senha'];
            $senha2= $_POST['Csenha'];

            //verifica se tem algo dentro das variaveis
            if (empty($nome) || empty($email) || empty($senha) || empty($telefone)) {
                echo "<p style='color:red;'>Preencha todos os campos!</p>";
            } elseif (strlen($email) < 3) {
                echo "<p style='color:red;'>EMAIL INVÁLIDO.</p>";
            } elseif (strlen($nome) < 3) {
                echo "<p style='color:red;'>Nome deve ter no mínimo 3 letras.</p>";
            }elseif (!preg_match('/^\d{10,}$/', $telefone)) {
                echo "<p style='color:red;'>Telefone inválido. Digite apenas números e no mínimo 10 dígitos.</p>";
            }elseif (strlen($senha) < 6) {
                echo "<p style='color:red;'>Senha deve ter no mínimo 6 caracteres.</p>";
            } else {
                //ve se o email é valido
                try {
                    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                        throw new Exception("EMAIL INVÁLIDO!", 1);
                    }
                    //ve se as senhas colidem
                    if ($senha !== $senha2) {
                        echo "<p style='color:red;'>As senhas não coincidem!</p>";
                    } else {
                        // Verificar se email já existe
                        $cmd = $pdo->prepare("SELECT COUNT(*) FROM loginn WHERE email = :email");
                        $cmd->bindValue(":email", $email);
                        $cmd->execute();
                        $emailExists = $cmd->fetchColumn();

                        if ($emailExists) {
                            echo "<p style='color:red;'>Este email já está cadastrado. Por favor, escolha outro ou faça login.</p>";
                        } else {
                            // Aqui seria interessante usar hash na senha (mais seguro)
                            

                            // Inserir no banco
                            $cmd = $pdo->prepare("INSERT INTO loginn (nome, email, telefone, senha) VALUES (:nome, :email, :telefone, :senha)");
                            $cmd->bindValue(":nome", $nome);
                            $cmd->bindValue(":email", $email);
                            $cmd->bindValue(":telefone", $telefone);
                            $cmd->bindValue(":senha", $senha);
                            $cmd->execute();

                            echo "<p style='color:green;'>Registrado com sucesso!</p>";
                            echo "<a href='pag3.php'><button id='i1' type='button'>ENTRAR</button></a>";
                        }
                    }
                } catch (Exception $e) {
                    printf("<br>MENSSAGEM: %s", $e->getMessage());
                    echo "<br>CODIGO: ". $e->getCode();
                }
            }
        }


            


    ?>

</body>
</html>
