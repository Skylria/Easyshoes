 </head>
 <body>
   <div class="login">
  <center>
    <h2 style="color:white">Cadastro de Sapato</h2>
  </center>
    <form method="post" action="conexao_produtos.php">
        <input type="number" name="numero" placeholder="Número" required="required" />
          <input type="text" name="cor" placeholder="Cor" required="required" />
          <input type="text" name="marca" placeholder="Marca" required="required" />
          <input type="number" name="setor" placeholder="Setor" required="required" />
          <input type="number" name="quantidade" placeholder="Quantidade" required="required" />
          <input type="submit" class="btn btn-primary btn-block btn-large" value="Cadastrar">
      </form>
   </div>
 </body>
</html>

