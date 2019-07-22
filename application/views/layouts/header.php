<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->session->userdata('ROL') == "USUARIO" ? $title = "Animes" : $title = "Users";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Principal</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.18/css/jquery.dataTables.min.css">
</head>

<style>

    footer
    {
        position: absolute;
        bottom: 0;
    }

</style>

<body>

    <header class="shadow-lg">
        <nav class="navbar navbar-dark bg-dark mb-4">
            <a href="#" class="navbar-brand">CRUD with codeigniter</a>
            <div class="btn-group dropleft">
                <a href="#" class="btn btn-outline-warning dropdown-toggle my-2 -my-sm-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Menú</a>
                <div class="dropdown-menu">
                    <button class="dropdown-item" id="btnAdd<?=$title?>">Add new <?=$title?></button>
                    <a href="<?=base_url();?>Crud/logout" class="dropdown-item">Logout</a>
                </div>
            </div>
        </nav>
    </header>

<?php include('modals.php') ?>