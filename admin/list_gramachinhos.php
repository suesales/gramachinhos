<?php
  include "header.php";
  include "funcoes.php";
?>

<li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
<li class="active">Gramachinhos</li>
<li class="active">Lista</li>
</ol>
</section>

<!-- Main content -->
  <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Lista de Gramachinhos</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Nome</th>
                  <th>Data Nasc.</th>
                  <th>Peso</th>
                  <th>Altura</th>
                  <th>Calçado</th>
                  <th>Autorizações e Documentos</th>
                  <th>Escolaridade</th>
                  <th>Endereço</th>
                </tr>
                </thead>
                <tbody>
                <?php
                  if($list = getKids()) :
                    foreach ($list as $row):
                ?>
                <tr>
                  <td class="text-center"><a href="profile.php?id=<?= $row["id"] ?>"><?= $row["nome"] ?></></td>
                  <td class="text-center"><?= date_format(date_create($row["dtNasc"]), 'd/m/Y') ?></td>
                  <td class="text-center"><?= $row["peso"] ?></td>
                  <td class="text-center"><?= $row["altura"] ?></td>
                  <td class="text-center"><?= $row["calcado"] ?></td>
                  <td class="text-center"><a href="" class="modalButton" data-toggle="modal" modal-title="Autorizações e Documentos" data-target="#modal-documentos" data-screen="aut_doc" data-cerNasc="<?= $row['cerNasc'] ?>" data-rg="<?= $row['rg'] ?>" data-cpf="<?= $row['cpf'] ?>" data-autoImage="<?= $row['autoImage']  ?>" data-autoSaidaExterna="<?= $row['autoSaidaExterna'] ?>"><i class="fas fa-id-card"></i> Acessar</i></a></td>
                  <td class="text-center"><a href="" class="modalButton" data-toggle="modal" modal-title="Escolaridade" data-target="#modal-escolaridade" data-screen="escola" data-escola="<?= $row['nomeEscola'] ?>" data-serie="<?= $row['serie'] ?>"><i class="fas fa-graduation-cap"></i> Acessar</i></a></td>
                  <td class="text-center"><a href="" class="modalButton" data-toggle="modal" modal-title="Endereço" data-target="#modal-endereco" data-screen="endereco" data-lograouro="<?= $row['lograouro'] ?>" data-cep="<?= $row['cep'] ?>" data-bairro="<?= $row['bairro'] ?>" data-cidade="<?= $row['cidade'] ?>"><i class="fas fa-home"> Acessar</i></a></td>
                </tr>
                <?php
                    endforeach;
                  endif;
                ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>Nome</th>
                  <th>Data Nasc.</th>
                  <th>Peso</th>
                  <th>Altura</th>
                  <th>Calçado</th>
                  <th>Autorizações e Documentos</th>
                  <th>Escolaridade</th>
                  <th>Endereço</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <!-- /.modal -->
      <div class="modal fade" id="modal-documentos">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title">Autorizações e Documentos</h4>
            </div>
            <div class="modal-body text-center">
              <div class="box-body">
                <div class="form-group">
                  <label>
                    <input id="inputCerNasc" type="checkbox" class="minimal" disabled>
                    Certidão de Nascimento
                  </label>
                  <label>
                    <input id="inputRG" type="checkbox" class="minimal" disabled>
                    Registro Geral (RG)
                  </label>
                  <label>
                    <input id="inputCPF" type="checkbox" class="minimal" disabled>
                    Cadastro de Pessoa Física (CPF)
                  </label>
                </div>
                <div class="form-group">
                  <label>
                    <input id="inputAutoImage" type="checkbox" class="minimal" disabled>
                    Autorização de Imagem
                  </label>
                  <label>
                    <input id="inputAutoSaidaExterna" type="checkbox" class="minimal" disabled>
                    Autorização para Atividades externa
                  </label>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
      <div class="modal fade" id="modal-escolaridade">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title">Escolaridade</h4>
            </div>
            <div class="modal-body">
              <div class="box-body">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="inputNomeEscola">Nome da escola</label>
                      <input type="text" class="form-control" id="inputNomeEscola" name="txtNomeEscola" placeholder="Informe o nome da escola" readonly>
                    </div>
                    <div class="form-group">
                      <label for="inputSerie">Série matriculado</label>
                      <input type="text" class="form-control" id="inputSerie" name="txtSerie" placeholder="Informe a série" readonly>
                    </div>
                  </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->

      <div class="modal fade" id="modal-endereco">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title">Endereço</h4>
            </div>
            <div class="modal-body">
              <div class="box-body">
                  <!-- text input -->
                  <div class="form-group">
                    <label for="inputLograouro">Logradouro</label>
                    <input type="text" class="form-control" id="inputLograouro" name="txtLograouro" placeholder="Informe o logradouro" readonly>
                  </div>
                  <div class="form-group">
                    <label for="inputCep">CEP</label>
                    <input type="text" class="form-control" id="inputCep" name="txtCep" placeholder="Informe o CEP" readonly>
                  </div>
                  <div class="form-group">
                    <label for="inputBairro">Bairro</label>
                    <input type="text" class="form-control" id="inputBairro" name="txtBairro" placeholder="Informe o bairro" readonly>
                  </div>
                  <div class="form-group">
                    <label for="inputCidade">Cidade</label>
                    <input type="text" class="form-control" id="inputCidade" name="txtCidade" placeholder="Informe a cidade" readonly>
                  </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->

    </section>

<?php include "footer.php"; ?>
<!-- page script -->
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
