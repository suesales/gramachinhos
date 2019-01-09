<?php include "header.php"; ?>
<li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
<li class="active">Gramachinhos</li>
<li class="active">Cadastro</li>
</ol>
</section>

<!-- Main content -->
<section class="content">

<div class="row">
  <!-- left column -->
  <div class="col-md-6">
    <!-- general form elements -->
    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">Dados Principais</h3>
      </div>
      <!-- /.box-header -->
      <!-- form start -->
      <form id="formRegGram" role="form" action="registra_gramachinho.php" method="post" enctype="multipart/form-data">
        <div class="box-body">
          <div class="form-group">
            <label for="inputNome">Nome</label>
            <input type="text" class="form-control" id="inputNome" name="txtNome" placeholder="Informe o nome">
          </div>
          <div class="form-group">
            <label for="inputNomePai">Nome do Pai</label>
            <input type="text" class="form-control" id="inputNomePai" name="txtNomePai" placeholder="Informe o nome do pai">
          </div>
          <div class="form-group">
            <label for="inputNomeMae">Nome da Mãe</label>
            <input type="text" class="form-control" id="inputNomeMae" name="txtNomeMae" placeholder="Informe o nome da mãe">
          </div>
          <div class="form-group">
            <label for="inputDtNasc">Data de Nascimento</label>
            <input type="date" class="form-control" id="inputDtNasc" name="txtDtNasc">
          </div>
          <div class="form-group">
            <label for="inputPeso">Peso</label>
            <input type="number" step="any" min="0" class="form-control" id="inputPeso" name="txtPeso" placeholder="Informe o peso">
          </div>
          <div class="form-group">
            <label for="inputAltura">Altura</label>
            <input type="number" step="any" min="0" class="form-control" id="inputAltura" name="txtAltura" placeholder="Informe a altura">
          </div>
          <div class="form-group">
            <label for="inputCalcado">Calçado</label>
            <input type="number" step="1" min="0" class="form-control" id="inputCalcado" name="txtCalcado" placeholder="Informe n° calçado">
          </div>
        </div>
    </div>
    <!-- /.box -->

    <!-- Form Element sizes -->
    <div class="box box-success">
      <div class="box-header with-border">
        <h3 class="box-title">Escolaridade</h3>
      </div>
      <div class="box-body">
          <div class="box-body">
            <div class="form-group">
              <label for="inputNomeEscola">Nome da escola</label>
              <input type="text" class="form-control" id="inputNomeEscola" name="txtNomeEscola" placeholder="Informe o nome da escola">
            </div>
            <div class="form-group">
              <label for="inputSerie">Série matriculado</label>
              <input type="text" class="form-control" id="inputSerie" name="txtSerie" placeholder="Informe a série">
            </div>
          </div>
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->

    <div class="box box-default">
      <div class="box-header with-border">
        <h3 class="box-title">Autorizações</h3>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
          <!-- checkbox -->
          <div class="form-group">
            <div class="checkbox">
              <label>
                <input type="checkbox" name="txtAutoSaidaExterna">
                Autorização de saída externa
              </label>
            </div>
            <div class="checkbox">
              <label>
                <input type="checkbox" name="txtAutoImage">
                Autorização de Imagem
              </label>
            </div>
          </div>
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->

  </div>
  <!--/.col (left) -->
  <!-- right column -->
  <div class="col-md-6">
    <!-- Horizontal Form -->
    <div class="box box-info">
      <div class="box-header with-border">
        <h3 class="box-title">Foto da criança</h3>
      </div>
      <div class="box-body">
          <div class="box-body">
            <div class="form-group">
              <label for="inputFoto" class="sr-only">Foto</label>
              <input type="file" id="inputFoto" name="flFoto">
            </div>
          </div>
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
    <!-- general form elements disabled -->
    <div class="box box-warning">
      <div class="box-header with-border">
        <h3 class="box-title">Dados de Endereço</h3>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
          <!-- text input -->
          <div class="form-group">
            <label for="inputLograouro">Logradouro</label>
            <input type="text" class="form-control" id="inputLograouro" name="txtLograouro" placeholder="Informe o logradouro">
          </div>
          <div class="form-group">
            <label for="inputCep">CEP</label>
            <input type="text" class="form-control" id="inputCep" name="txtCep" placeholder="Informe o CEP">
          </div>
          <div class="form-group">
            <label for="inputBairro">Bairro</label>
            <input type="text" class="form-control" id="inputBairro" name="txtBairro" placeholder="Informe o bairro">
          </div>
          <div class="form-group">
            <label for="inputCidade">Cidade</label>
            <input type="text" class="form-control" id="inputCidade" name="txtCidade" placeholder="Informe a cidade">
          </div>
      </div>
      <!-- /.box-body -->
    </div>
    <div class="box box-danger">
      <div class="box-header with-border">
        <h3 class="box-title">Documentos</h3>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
          <!-- checkbox -->
          <div class="form-group">
            <div class="checkbox">
              <label>
                <input type="checkbox" name="txtCerNasc">
                Certidão de Nascimnto
              </label>
            </div>
            <div class="checkbox">
              <label>
                <input type="checkbox" name="txtRG">
                Registro Geral (RG)
              </label>
            </div>
            <div class="checkbox">
              <label>
                <input type="checkbox" name="txtCpf">
                Cadastro Pessoa Física (CPF)
              </label>
            </div>
          </div>
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
    <div>
      <!-- /.box-header -->
      <div class="box-body">
        <button type="submit" form="formRegGram" formmethod="post" formaction="registra_gramachinho.php" class="btn btn-lg btn-success">Registrar</button>
        </form>
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
  </div>
  <!--/.col (right) -->
</div>
<?php include "footer.php"; ?>
