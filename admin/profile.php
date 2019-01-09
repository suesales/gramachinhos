<?php
  include "header.php";
  include "funcoes.php";

  if(isset($_GET['id'])) {
    $profile = getKidById($_GET['id']);
  } else {
    $profile = array();
  }
?>
<li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
<li class="active">Gramachinhos</li>
<li class="active">Perfil</li>
</ol>
</section>

<!-- Main content -->
<section class="content">
        <div class="row">
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="fotos/<?= $profile['foto'] ?>" alt="User profile picture">

              <h3 class="profile-username text-center"><?= $profile['nome'] ?></h3>

              <p class="text-muted text-center"><i class="text-success">Ativo</i></p>

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>Data de Nascimnto</b> <a class="pull-right"><?= date_format(date_create($profile["dtNasc"]), 'd/m/Y') ?></a>
                </li>
                <li class="list-group-item">
                  <b>Altura</b> <a class="pull-right"><?= $profile['altura'] ?></a>
                </li>
                <li class="list-group-item">
                  <b>Peso</b> <a class="pull-right"><?= $profile['peso'] ?>kg</a>
                </li>
                <li class="list-group-item">
                  <b>Calçado</b> <a class="pull-right"><?= $profile['calcado'] ?></a>
                </li>
              </ul>

              <a href="#" class="btn btn-primary btn-block"><b>Editar</b></a>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- About Me Box -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Dados</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <strong><i class="fa fa-users margin-r-5"></i> Filiação</strong>

              <p class="text-muted">
                <i class="fas fa-male"></i> <?= $profile['nomePai'] ?>
              </p>
              <p class="text-muted">
                <i class="fas fa-female"></i> <?= $profile['nomeMae'] ?>
              </p>

              <hr>

              <strong><i class="fa fa-map-marker margin-r-5"></i> Endereço</strong>

              <p class="text-muted"><?= $profile['lograouro'] ?>, <?= $profile['bairro'] ?>, <?= $profile['cidade'] ?> - <?= $profile['cep'] ?></p>

              <hr>

              <strong><i class="fa fa-pencil margin-r-5"></i> Documentos</strong>

              <p>
                 <span class="label label-<?= ($profile['cerNasc'] == 1) ? 'success' : 'danger' ?>">Certidão de Nascimento</span>
                 <span class="label label-<?= ($profile['rg'] == 1) ? 'success' : 'danger' ?>">RG</span>
                 <span class="label label-<?= ($profile['cpf'] == 1) ? 'success' : 'danger' ?>">CPF</span>
              </p>

              <hr>

              <strong><i class="fa fa-file-text-o margin-r-5"></i> Autorizações</strong>

              <p><span class="label label-<?= ($profile['autoImage'] == 1) ? 'success' : 'danger' ?>">Autorização de Imagem</span></p>
              <p><span class="label label-<?= ($profile['autoSaidaExterna'] == 1) ? 'success' : 'danger' ?>">Autorização para Atividades externa</span></p>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#activity" data-toggle="tab">Histórico</a></li>
              <li><a href="#timeline" data-toggle="tab">Atividades</a></li>
              <li><a href="#settings" data-toggle="tab">Observações</a></li>
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="activity">
                <!-- Post -->
                <div class="post">
                  <div class="user-block">
                        <span class="username">
                          <a href="#">Lorem Ipsum</a>
                          <a href="#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>
                        </span>
                    <span class="description">08/01/2019 - 7:30 PM</span>
                  </div>
                  <!-- /.user-block -->
                  <p>
                    Lorem ipsum represents a long-held tradition for designers,
                    typographers and the like. Some people hate it and argue for
                    its demise, but others ignore the hate as they create awesome
                    tools to help create filler text for everyone from bacon lovers
                    to Charlie Sheen fans.
                  </p>
                </div>
                <!-- /.post -->
                <!-- Post -->
                <div class="post clearfix">
                  <div class="post">
                    <div class="user-block">
                          <span class="username">
                            <a href="#">Lorem Ipsum</a>
                            <a href="#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>
                          </span>
                      <span class="description">08/01/2019 - 7:30 PM</span>
                    </div>
                    <!-- /.user-block -->
                    <p>
                      Lorem ipsum represents a long-held tradition for designers,
                      typographers and the like. Some people hate it and argue for
                      its demise, but others ignore the hate as they create awesome
                      tools to help create filler text for everyone from bacon lovers
                      to Charlie Sheen fans.
                    </p>
                  </div>
                </div>
                <!-- /.post -->


              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="timeline">
                <!-- The timeline -->
                <ul class="timeline timeline-inverse">
                  <!-- timeline time label -->
                  <li class="time-label">
                        <span class="bg-red">
                          10 Feb. 2014
                        </span>
                  </li>
                  <!-- /.timeline-label -->
                  <!-- timeline item -->
                  <li>
                    <i class="fa fa-envelope bg-blue"></i>

                    <div class="timeline-item">
                      <span class="time"><i class="fa fa-clock-o"></i> 12:05</span>

                      <h3 class="timeline-header"><a href="#">Support Team</a> sent you an email</h3>

                      <div class="timeline-body">
                        Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,
                        weebly ning heekya handango imeem plugg dopplr jibjab, movity
                        jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle
                        quora plaxo ideeli hulu weebly balihoo...
                      </div>
                      <div class="timeline-footer">
                        <a class="btn btn-primary btn-xs">Read more</a>
                        <a class="btn btn-danger btn-xs">Delete</a>
                      </div>
                    </div>
                  </li>
                  <!-- END timeline item -->
                  <!-- timeline item -->
                  <li>
                    <i class="fa fa-user bg-aqua"></i>

                    <div class="timeline-item">
                      <span class="time"><i class="fa fa-clock-o"></i> 5 mins ago</span>

                      <h3 class="timeline-header no-border"><a href="#">Sarah Young</a> accepted your friend request
                      </h3>
                    </div>
                  </li>
                  <!-- END timeline item -->
                  <!-- timeline item -->
                  <li>
                    <i class="fa fa-comments bg-yellow"></i>

                    <div class="timeline-item">
                      <span class="time"><i class="fa fa-clock-o"></i> 27 mins ago</span>

                      <h3 class="timeline-header"><a href="#">Jay White</a> commented on your post</h3>

                      <div class="timeline-body">
                        Take me to your leader!
                        Switzerland is small and neutral!
                        We are more like Germany, ambitious and misunderstood!
                      </div>
                      <div class="timeline-footer">
                        <a class="btn btn-warning btn-flat btn-xs">View comment</a>
                      </div>
                    </div>
                  </li>
                  <!-- END timeline item -->
                  <!-- timeline time label -->
                  <li class="time-label">
                        <span class="bg-green">
                          3 Jan. 2014
                        </span>
                  </li>
                  <!-- /.timeline-label -->
                  <!-- timeline item -->
                  <li>
                    <i class="fa fa-camera bg-purple"></i>

                    <div class="timeline-item">
                      <span class="time"><i class="fa fa-clock-o"></i> 2 days ago</span>

                      <h3 class="timeline-header"><a href="#">Mina Lee</a> uploaded new photos</h3>

                      <div class="timeline-body">
                        <img src="http://placehold.it/150x100" alt="..." class="margin">
                        <img src="http://placehold.it/150x100" alt="..." class="margin">
                        <img src="http://placehold.it/150x100" alt="..." class="margin">
                        <img src="http://placehold.it/150x100" alt="..." class="margin">
                      </div>
                    </div>
                  </li>
                  <!-- END timeline item -->
                  <li>
                    <i class="fa fa-clock-o bg-gray"></i>
                  </li>
                </ul>
              </div>
              <!-- /.tab-pane -->

              <div class="tab-pane" id="settings">
                <form class="form-horizontal">
                  <div class="form-group">
                    <label for="inputObservacao" class="col-sm-2 control-label">Titulo</label>

                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="inputObservacao" placeholder="Informe o titulo da observação">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputTipo" class="col-sm-2 control-label">Tipo</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputTipo" placeholder="Informe o tipo da observação">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputData" class="col-sm-2 control-label">Data</label>

                    <div class="col-sm-10">
                      <input type="date" class="form-control" id="inputData">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputDescricao" class="col-sm-2 control-label">Descrição</label>

                    <div class="col-sm-10">
                      <textarea class="form-control" id="inputDescricao" placeholder="Descreva a observação"></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-danger">Registrar</button>
                    </div>
                  </div>
                </form>
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
<?php include "footer.php"; ?>
