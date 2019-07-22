<?php 
if( $this->session->userdata('ROL') == "USUARIO")
{
    $form = "_animeForm.php";
    $title = "Animes";
}
else
{
    $form = "_userForm.php";
    $title = "Users";
}
?>

<div class="modal fade" id="modalAdd<?=$title?>" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Registro</h5>
                <button class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
               <div class="row">
                  <?php include($form) ?>
               </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button class="btn btn-primary" id="save<?=$title?>">Save <?=$title?></button>
            </div>
        </div>
    </div>
</div>