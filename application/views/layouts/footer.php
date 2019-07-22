
    <footer class="container-fluid py-3 bg-light border shadow-lg">
        <div class="row">
            <div class="col-12 col-md-12 text-center">
                <a href="https://www.github.com/Bittmen/CRUD-s" target="_blank" class="btn btn-social-icon btn-github">
                    <span class="fa fa-github fa-lg fa-3x"></span>
                    <p>Github</p>
                </a>
                <a href="https://www.linkedin.com/in/rodolfo-guadalupe-frías-lugo-a4810516b" target="_blank" class="btn btn-social-icon btn-linkedin">
                    <span class="fa fa-linkedin fa-lg fa-3x"></span>
                    <p>Linkedin</p>
                </a>
            </div>
        </div>
        <div class="footer-copyright text-center"> &copy; 2019 Rodolfo Frías:
            
        </div>
    </footer>

    <script
        src="https://code.jquery.com/jquery-3.4.1.js"
        integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
        crossorigin="anonymous">
    </script>
    <script 
        src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" 
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" 
        crossorigin="anonymous">
    </script>
    <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <script>let base_url = '<?=base_url()?>';</script>
    <script>let rol = '<?=$this->session->userdata("ROL")?>'</script>
</body>
</html>