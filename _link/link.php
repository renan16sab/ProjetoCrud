<?php include('menu.php') ?>
<!DOCTYPE html>

<center>

<span style="height 10px; width:1200px;">
  <div class="card-body">
    <h5 class="card-title">Seus links em um só click</h5>
    <p class="card-text">Click em cima dos links para abrir em uma nova aba!</p>
    </div>
</center>

<div class="container">
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Links Salvos</h2>
        </div>
        <div class="pull-right">
<button type="button" class="btn btn-success" data-toggle="modal" data-target="#create-item">
  Adcionar Link
</button>
        </div>
    </div>
</div>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript">

$(document).ready(function(){
  // save comment to database
  $(document).on('click', '#submit_btn', function(){
    var userid = $('#userid').val();
    var nome = $('#nome').val();
    var link = $('#link').val();
    $.ajax({
      url: 'cadlink.php',
      type: 'POST',
      data: {
        'save': 1,
        'nome': nome,
        'link': link,
      },
      success: function(response){
        $('#nome').val('nome');
        $('#link').val('link');
        $('#display_area').append(response);
      }
    });
  });
});

</script>


<table class="table table-bordered">
<thead>
    <tr>
<th>Nome</th>
<th>Link</th>
<th width="200px">Opções</th>
    </tr>
</thead>
<tbody>
</tbody>
</table>





  <!-- Create Item Modal -->
    <div class="modal fade" id="create-item" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
          <h4 class="modal-title" id="myModalLabel">Create Item</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            
          </div>


          <div class="modal-body">
          <form data-toggle="validator">
          <div class="form-group">
          <input type="hidden" id="userid" name="userid" class="form-control" data-error="Please enter title." required />
          <div class="help-block with-errors"></div>
          </div>


          <div class="form-group">
          <label class="control-label" for="title">Nome:</label>
          <input type="text" id="nome" name="nome" class="form-control" data-error="Please enter title." required />
          <div class="help-block with-errors"></div>
          </div>


          <div class="form-group">
          <label class="control-label" for="title">Link:</label>
          <textarea id="link" name="link" class="form-control" data-error="Please enter description." required></textarea>
          <div class="help-block with-errors"></div>
          </div>


          <div class="form-group">
          <button type="submit" id="submit_btn" class="btn btn-success">Enviar</button>
          </div>
       </form>
      </div>
    </div>


  </div>
</div>


<!-- Edit Item Modal -->
<div class="modal fade" id="edit-item" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
        <h4 class="modal-title" id="myModalLabel">Edit Item</h4>
      </div>


      <div class="modal-body">
      <form data-toggle="validator" action="api/update.php" method="put">
      <input type="hidden" name="id" class="edit-id">


      <div class="form-group">
<label class="control-label" for="title">Title:</label>
<input type="text" name="title" class="form-control" data-error="Please enter title." required />
<div class="help-block with-errors"></div>
</div>


<div class="form-group">
<label class="control-label" for="title">Description:</label>
<textarea name="description" class="form-control" data-error="Please enter description." required></textarea>
<div class="help-block with-errors"></div>
</div>


<div class="form-group">
<button type="submit" class="btn btn-success crud-submit-edit">Submit</button>
</div>


      </form>


      </div>
    </div>
  </div>
</div>

    

    
</body>
</html>