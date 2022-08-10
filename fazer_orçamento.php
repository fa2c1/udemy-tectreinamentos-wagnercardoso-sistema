<!doctype html>
<html lang="en">
  <head>
    <title>.::F4C Sistemas::.</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"  integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-primary">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">
          <img src="img/logo.png" alt="Logo"/>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link text-white" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="aprovar_credito.php">Analise de Crédito</a>
            </li>
            <li class="nav-item">
              <a class="nav-link bg-light text-primary active" aria-current="page" href="fazer_orçamento.php">Orçamento</a>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li class="nav-item">
              <a class="nav-link text-white" href="logar.php">Entrar</a>
            </li>
          </ul>
          <form class="d-flex" role="search" method="get" action="recebe.php">
            <input class="form-control me-2" type="search" name="pesquisa" placeholder="Pesquise aqui" aria-label="Search">
            <button class="btn btn-outline-light" type="submit">Pesquisar</button>
          </form>
        </div>
      </div>
    </nav>
    <!-- Header -->
    <header>
      <div class="container-xxl bg-primary text-white topo">
        <img src="img/topo_aula.png" class="img-fluid" alt="Imagens de dispositivos eletronicos">
      </div>
    </header>
    <!-- Section -->
    <section class="conteudo">
      <div class="container-sm text-dark">
        <br><br><br><br>
				<h1>PROGRAMAÇÃO WEB COM PHP</h1>
	    	<hr>
        <h2>Introdução ao Formulário de Orçamento</h2>
					<p>O formulário abaixo usaremos para realizar um orçamento de serviços.<br>
						Nesta simulação vamos apresentar uma opção de impressão da página de orçamentos.</p>
					<fieldset class="largura-maxima">
						<legend><h3>Faça seu Orçamento</h3></legend>
							<br>
							<form method="post" action="orcamento.php">
								<div class="mb-3">
									<label for="date" class="form-label">Data do Orçamento</label>  
									<input class="form-control" type="date" name="data" placeholder="Escolha uma data">
								</div>
								<div class="mb-3">
									<label for="garantia" class="form-label">Tempo de Garantia (em meses)</label> 
									<input class="form-control"  type="number" name="garantia" min="1" max="6" placeholder="Escolha o tempo de garantia de 1 a 6">
								</div>
								<div class="mb-3">
									<label for="servico" class="form-label">Escolha um tipo de serviço</label> 
									<select class="form-select" name="servico" aria-label="Escolha um tipo de serviço">
										<option selected>Tipo do serviço</option>
										<option value="Concerto">Conserto</option>
										<option value="Formatação">Formatação</option>
										<option value="Outros">Outros</option>
									</select>
								</div>
								<div class="mb-3">
									<label for="garantia" class="form-label">Produto</label>
									<input class="form-control" type="text" name="produto" placeholder="Digite o tipo do produto"></p>
								</div>
								<div class="mb-3">
									<label for="marca" class="form-label">Marca</label>
									<input class="form-control" type="text" name="marca" placeholder="Digite a marca"></p>
								</div>
								<div  class="centralizado">
									<input class="btn btn-primary" type="submit" name="enviar" value="Realizar orçamento">
								</div>
							</form>
					</fieldset>
      </div>
    </section>
    <!-- Footer -->
    <footer class="rodape">
      <div class="container-xxl bg-primary text-white">
				<span>Programação web com PHP</span><br>
				<span>Todos os direitos reservados Desenvolvido por Fernando Coutinho</span>
      </div>
    </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
  </body>
</html>