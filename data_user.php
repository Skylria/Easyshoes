<?php
    include 'bd/conexao_mysqli.php';
    $l = $_SESSION['usuario'];
    $sql = "SELECT * FROM cadastro";
    $resultado = mysqli_query($strcon, $sql) or die('Erro ao tentar cadastrar registro');
    $name = mysqli_query($strcon, "SELECT U_NOME, U_CPF, U_TELEFONE, U_EMAIL, U_LOGIN, U_SENHA, U_Foto FROM cadastro WHERE U_LOGIN = '$l'") or die(mysqli_error($strcon));
    $re = mysqli_fetch_array($name);

    $nome = $re['U_NOME'];
    $cpf = $re['U_CPF'];
    $telefone = $re['U_TELEFONE'];
    $email = $re['U_EMAIL'];
    $login = $re['U_LOGIN'];
    $foto = $re['U_Foto'];
?>

    <section id="services">
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto text-center">
                <h2 class="section-heading text-white">Dados do usuário: <?= $_SESSION['usuario']?></h2>
                <img src="uploads/<?=$foto?>" class="img-circle" width="250px">
              </div>
            </div>
          </div>
    </section>

    <section>
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <p id="profile-name" class="profile-name-card"></p>
            <form name="frm-jcrop" id="frm-jcrop" action="aboutuser2.php" method="POST" enctype="multipart/form-data"><br>
              Trocar Foto de Perfil: <input type="file" name="imagem">
              <button  type="submit"><i class="fa fa-2x fa-upload sr-icons" title="Upload"></i></button>
            </form><br>
            <h2 class="section-heading"> Nome: </h2>
            <p><?=$nome?></p>
            <h2 class="section-heading"> Cpf: </h2>
            <p><?=$cpf?></i></p>
            <h2 class="section-heading"> Telefone: </h2>
            <p><?=$telefone?></p>
            <h2 class="section-heading"> Email: </h2>
            <p><?= $email?></p>
            <h2 class="section-heading"> Login:</h2>
            <p><?=$login?></p>
          </div>
        </div>
      </div>
    </section>
    <?php mysqli_close($strcon); ?>