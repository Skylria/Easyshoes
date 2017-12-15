function funcNome(){
            var a = document.getElementById('alteranome').innerHTML="<form method='POST' action='../useredit/editanome.php'> Novo Nome: <input type='text' name='nome'><input type='submit' value='salvar'></form>";
        }
        function funcCpf(){
            var b = document.getElementById('alteracpf').innerHTML="<form method='POST' action='../useredit/editacpf.php'> Novo Cpf: <input type='number' name='cpf'><input type='submit' value='salvar'></form>";
        }
        function funcTelefone(){
            var c = document.getElementById('alteratelefone').innerHTML="<form method='POST' action='../useredit/editatelefone.php'> Novo Telefone: <input type='number' name='telefone'><input type='submit' value='salvar'></form>";
        }
        function funcEmail(){
            var d = document.getElementById('alteraemail').innerHTML="<form method='POST' action='../useredit/editaemail.php'> Novo Email: <input type='email' name='email'><input type='submit' value='salvar'></form>";
        }
        function funcLogin(){
            var e = document.getElementById('alteralogin').innerHTML="<form method='POST' action='../useredit/editalogin.php'> Novo Login: <input type='text' name='login'><input type='submit' value='salvar'></form>";
        }
        function funcSenha(){
            var f = document.getElementById('alterasenha').innerHTML="<form method='POST' action='../useredit/editasenha.php'> Nova Senha: <input type='text' name='senha'><input type='submit' value='salvar'></form>";
        }