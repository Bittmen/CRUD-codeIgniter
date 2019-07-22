<?php include('layouts/header.php') ?>

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-10 col-md-10 ">
            <table class="table table-dark table-hover table-striped table-bordered">
                <thead class="bg-light text-dark">
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Edad</th>
                        <th>Sexo</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody id="showUsers">
                
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php include('layouts/footer.php') ?>
<script src="<?php echo base_url()?>assets/js/main.js"></script>
