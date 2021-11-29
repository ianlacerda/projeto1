<?php 
    include("conexao.php") ;
    try{
        $sql = "insert into tbl_clientes (email,senha,nome,cpf,telefone,pais,estado,cidade,endereco,cep,id_pedido, data_acesso) values(:email,:senha,:nome,:cpf,:telefone,:pais,:estado,:cidade,:endereco,:cep,:id_pedido,:data_acesso)";
        $stmt = $con->prepare($sql);
        $stmt->bindValue(":email", $_POST["email"]);
        $stmt->bindValue(":senha", $_POST["senha"]);
        $stmt->bindValue(":nome", $_POST["nome"]);
        $stmt->bindValue(":cpf", $_POST["cpf"]);
        $stmt->bindValue(":telefone", $_POST["telefone"]);
        $stmt->bindValue(":pais", $_POST["pais"]);
        $stmt->bindValue(":estado", $_POST["estado"]);
        $stmt->bindValue(":cidade", $_POST["cidade"]);
        $stmt->bindValue(":endereco", $_POST["endereco"]);
        $stmt->bindValue(":cep", $_POST["cep"]);
        $stmt->bindValue(":id_pedido", $_POST["id_pedido"]);
        $stmt->bindValue(":data_acesso", $_POST["data_acesso"]);
        $stmt->execute();

    } catch(PDOException $e){
        echo "Não Cadastrou. ".$e->getCode();

    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Clientes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

            <!--  Início Navbar-->
            <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
                <div class="container-fluid">
                  <a class="navbar-brand" href="#">Menu Principal</a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="clientes.php">Clientes</a>
                      </li>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="funcionarios.php">Funcionários</a>
                      </li>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="itens.php">Itens</a>
                      </li>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="pedidos.php">Pedidoss</a>
                      </li>
                      <!-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Cadastrar
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <li><a class="dropdown-item" href="#">Cadastrar Clientes</a></li>
                          <li><a class="dropdown-item" href="#">Cadastrar Produtos</a></li>
                          <li><a class="dropdown-item" href="#">Cadastrar Vendedores</a></li>
                          <li><a class="dropdown-item" href="#">Cadastrar Vendas</a></li>
                        </ul>
                      </li> -->
                      <!-- <li class="nav-item">
                        <a class="nav-link disabled">Disabled</a>
                      </li> -->
                    </ul>
                    <form class="d-flex">
                      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                      <button class="btn btn-outline-success" type="submit">Buscar</button>
                    </form>
                  </div>
                </div>
              </nav>
            
            <!-- Fim Navbar-->
    <!-- Menu Principal
    <hr>
    <a href="fmrclientes.php">Clientes </a>-
    <a href="produtos.php"> Produtos </a>-
    <a href="vendedores.php"> Vendedores </a>-
    <a href="vendas.php"> Vendas</a> -->


    <div class="container">
    <h1>Cadastro de Clientes</h1>
    <form method="post">
    <div class="row">
    <label class="form-label">Email</label><input type="email" name="email" class="form-control" id="exampleInputEmail1"><br>
    </div>
    <br>
    <div class="row">
    <label class="form-label">Senha</label><input type="password" name="senha" class="form-control"><br>
    </div>
    <br>
    <div class="row">
    <label class="form-label">Nome</label><input type="text" name="nome" class="form-control"><br>
    </div>
    <br>
    <div class="row">
    <label class="form-label">CPF</label><input type="text" name="cpf" class="form-control"><br>
    </div>
    <br>
    <div class="row">
    <label class="form-label">Telefone</label><input type="text" name="telefone" class="form-control"><br>
    </div>
    <br>
    <div class="row">
    <label class="form-label">País</label><input type="text" name="pais" class="form-control"><br>
    </div>
    <br>
    <div class="row">
    <label class="form-label">Estado</label><input type="text" name="estado" class="form-control"><br>
    </div>
    <br>
    <div class="row">
    <label class="form-label">Cidade</label><input type="text" name="cidade" class="form-control"><br>
    </div>
    <br>
    <div class="row">
    <label class="form-label">Endereço</label><input type="text" name="endereco" class="form-control"><br>
    </div>
    <br>
    <div class="row">
    <label class="form-label">CEP</label><input type="text" name="cep" class="form-control"><br>
    </div>
    <br>
    <div class="row">
    <label class="form-label">ID do Pedido</label><input type="number" name="id_pedido" class="form-control"><br>
    </div>
    <br>
    <div class="row">
    <label class="form-label">Data de Acesso</label><input type="date" name="data_acesso" class="form-control"><br>
    </div>
    <br>
    <br>
    <div class="row">
    <input type="submit" value="Cadastrar" type="submit" class="btn btn-primary">
    </div>
    </form>
    </div>


</body>




</html>