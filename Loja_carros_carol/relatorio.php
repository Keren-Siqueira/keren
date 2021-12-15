<?php
//conexão
include_once 'php_action/bd_connect.php';
//header
include_once 'includes/header.php';
?>
<div class="selection no-pad-bot" id="index-banner">
  <div class="container">
    <br>
    <br>
    <div class="rwo center">
      <div class="col s12 m12 l12 xl12">
        <h3 class+="light">Relatório</h3>
        <form action="php_action/report.php" method="POST" target="_blank">
          <div class="col s6">
            <label for="marca">Seleciona a marca:</label>
            <select name="marcaselecionada" id="">
              <option>TODAS AS MARCAS</option>
              <?php
              $sql = "SELECT DISTINCT marca FROM estoque";
              $resultado = mysqli_query($connect, $sql);
              while ($dados = mysqli_fetch_array($resultado)) :
              ?>
                <option>
                  <?php
                  echo $dados['marca'];
                  ?>
                </option>
              <?php endwhile ?>
            </select>
          </div>
          <div class="col s6">
            <input type="submit" name="btn-relatorio" class="btn yellow" value="Selecionar">
          </div>
        </form>
      </div>
    </div>
    <br>
    <br>
  </div>
</div>


<?php
//footer
include_once 'includes/footer.php';
?>