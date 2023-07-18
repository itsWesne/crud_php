<?php 
    $title_page = 'Menu';
    include '../models/header.php'; ?>

<body class="bg-primary-subtle bg-gradient" onselectstart="return false">
    <div class="container" style="margin-top: 40px">
        <div class="row">
            <div class="col-sm-4 mb-3 mb-sm-0 ">
                <div class="card bg-success-subtle bg-gradient shadow p-3 ">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">CADASTRAR</h5>
                        <p class="card-text ">Cadastro de produtos no estoque.</p>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <a href="register_product.php" class="btn btn-success"><i class="fa-solid fa-plus"></i> CADASTRAR</a>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-sm-4 mb-3 mb-sm-0">
                <div class="card bg-warning-subtle bg-gradient shadow p-3">
                    <div class="card-body">
                        <h5 class="card-title">ESTOQUE</h5>
                        <p class="card-text" >Gerenciar seu estoque.</p>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <a href="list_products.php" class="btn btn-warning"><i class="fa-solid fa-database"></i> GERENCIAR</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 mb-3 mb-sm-0">
                <div class="card bg-danger-subtle bg-gradient shadow p-3">
                    <div class="card-body">
                        <h5 class="card-title">VENDER</h5>
                        <p class="card-text">Faça suas vendas.</p>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <a href="#" class="btn btn-danger"><i class="fa-solid fa-basket-shopping"></i> VENDER</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include '../models/footer.php'; ?>