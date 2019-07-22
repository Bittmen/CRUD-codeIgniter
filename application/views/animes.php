<?php 
      include('layouts/header.php');
      if( $this->session->userdata('ROL') == "USUARIO")
      {
        $text = "<h1 class='text-center'>!Recomiendame un anime!</h1>";
        $tableId = "idAnimes";
      }
      else
      {
        $tableId = "idUsers";
      }
?>

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-10 col-md-10 ">
            <?=$text?>
            <table id="<?=$tableId?>" class="table table-light table-hover table-striped table-bordered">
                <thead class="bg-light text-dark">
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Genero</th>
                        <th>Link</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody id="showAnimes">
                
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php include('layouts/footer.php') ?>
<script src="<?php echo base_url()?>assets/js/main.js"></script>