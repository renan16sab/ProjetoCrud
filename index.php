<?php include('menu.php');?>
<center>
<!-- <div class="card mb-12"> -->
<span style="height 10px; width:1200px;">
<img src="linkbanner.png" class="img-fluid" alt="Responsive image"> </span>
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
    <img class="card-img-top" src="test.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card col-6">
    <img class="card-img-top" src="test.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card col-6">
    <img class="card-img-top" src="test.jpg" alt="Card image cap">
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
        <form>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Nome:</label>
            <input type="text" class="form-control" id="recipient-name" placeholder="Nome">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Sobrenome:</label>
            <input type="text" class="form-control" id="recipient-name" placeholder="Sobrenome">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Email:</label>
            <input type="text" class="form-control" id="recipient-name" placeholder="bla@bla.com">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Senha:</label>
            <input type="password" class="form-control" id="recipient-name" placeholder="******">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Camcelar</button>
        <button type="button" class="btn btn-success">Enviar</button>
      </div>
    </div>
  </div>
</div>

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
        <form>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Email:</label>
            <input type="text" class="form-control" id="recipient-name" placeholder="bla@bla.com">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Senha:</label>
            <input type="password" class="form-control" id="recipient-name" placeholder="******">
          </div>         
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Camcelar</button>
        <button type="button" class="btn btn-success">Enviar</button>
      </div>
    </div>
  </div>
</div>
<!-- https://getbootstrap.com/docs/4.0/components/card/#navigation -->
  <?php include('footer.php');?>
