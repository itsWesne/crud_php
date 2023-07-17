<?php
$title_page = 'Login';
    include 'source/modals/header.php';
?>

<body class="bg-primary-subtle bg-gradient" onselectstart="return false">
    <div class="container col-md-3">

        <div class="card" style="margin-top: 66%;">
            <div class="card-header text-center text-bg-primary">
                .:: LOGIN ::.
            </div>
            <div class="card-body">
                <form action="source\database\authenticator.php" method="POST">
                    <div class="input-group mb-3">
                        <span class="input-group-text text-bg-primary"><i class="fa-solid fa-user"></i></span>
                        <div class="form-floating">
                            <input type="text" class="form-control" id="floatingInputGroup1" name="username" placeholder="Usuario" value="admin" autocomplete="off" required>
                            <label for="floatingInputGroup1">Usuario</label>
                        </div>

                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text text-bg-primary"><i class="fa-solid fa-key"></i></span>
                        <div class="form-floating">
                            <input type="password" class="form-control" id="floatingInputGroup1" name="password" placeholder="Senha" value="admin"  autocomplete="off" required>
                            <label for="floatingInputGroup1">Senha</label>
                        </div>
                    </div>

                    <div class="d-grid gap-2 d-md-flex justify-content-md-end input-group mb-3">
                        <button type="submit" class="btn btn-primary"><i class="fa-solid fa-right-to-bracket"></i> ENTRAR</button>
                    </div>

                    <?php
                    if (isset($_GET['msg'])) {
                    ?>
                        <div class="card-footer input-group mb-3 text-bg-danger">
                            Usuario ou senha incorretos!<br>
                            Tente admin/admin
                        </div>
                    <?php
                    };
                    ?>
                </form>
            </div>
        </div>
    </div>
   
    <?php 
        include 'source/modals/footer.php';
    ?>
