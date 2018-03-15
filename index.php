<?php include('./_include/menu.php');?>
<center>
<!-- <div class="card mb-12"> -->
<span style="height 10px; width:1200px;">
<img src="./img/linkbanner.png" class="img-fluid" alt="Responsive image"> </span>
  <div class="card-body">
    <h5 class="card-title">Deseja favoritar os seus links prediletos com apeanas um click?</h5>
    <p class="card-text">Cadastre-se agora e conheça a ferramenta LinkIzi.</p>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Cadastre-se</button>
    </div>
<!-- </div> -->
</center>

<!-- <div class="card text-center">
<div class="card-body">
    <h5 class="card-title">Deseja favoritar os seus links prediletos com apeanas um click?</h5>
    <p class="card-text">Cadastre-se agora e conheça a ferramenta LinkIzi.</p>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Cadastre-se</button>
    </div>
</div> -->
<div style="margin-top:50px;" class="card-deck">
  <div class="card col-6">
    <img class="card-img-top" src="./img/test.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card col-6">
    <img class="card-img-top" src="./img/test.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card col-6">
    <img class="card-img-top" src="./img/test.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
</div>




<!-- Inicio Modal Cadastro -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Crie sua conta</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
           <div class="modal-body">
        <form method="POST" action="cadastro.php">
          <div class="form-group">
            <label for="nome" class="col-form-label">Nome:</label>
            <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome">
          </div>
          <div class="form-group">
            <label for="sobrenome" class="col-form-label">Sobrenome:</label>
            <input type="text" class="form-control" name="sobrenome" id="sobrenome" placeholder="Sobrenome">
          </div>
          <div class="form-group">
            <label for="email" class="col-form-label">Email:</label>
            <input type="text" class="form-control" name="email" id="email" placeholder="bla@bla.com">
          </div>
          <div class="form-group">
            <label for="senha" class="col-form-label">Senha:</label>
            <input type="password" class="form-control" name="senha"  id="senha" placeholder="******">
          </div>
        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-success">Enviar</button>
        </div>
        </form>
    </div>
  </div>
</div>

<!-- Modal Login -->

<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel2">Faça seu login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
           <div class="modal-body">
        <form method="POST" action="session.php">
        <!-- <input type="hidden" class="form-control" name="userid" id="recipient-name" placeholder="bla@bla.com"> -->
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Email:</label>
            <input type="text" class="form-control" name="email" id="recipient-name" placeholder="bla@bla.com">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Senha:</label>
            <input type="password" class="form-control" name = "senha" id="recipient-name" placeholder="******">
          </div>         
        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Camcelar</button>
        <button type="submit" class="btn btn-success">Enviar</button>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- https://getbootstrap.com/docs/4.0/components/card/#navigation -->
<!-- https://forum.imasters.com.br/topic/558367-enviar-id-através-do-modal/ -->
  <?php include('footer.php');?>
