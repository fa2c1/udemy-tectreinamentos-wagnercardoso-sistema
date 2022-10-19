<!doctype html>
<html lang="pt-br">
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
					<?php
						$data = $_POST["data"];
						$garantia = $_POST["garantia"];
						$servico = $_POST["servico"];
						$produto = $_POST["produto"];
						$marca = $_POST["marca"];

						echo "<br><br><br>";
						echo "<h1>Orçamento</h1><hr>";
						echo "<p><strong>Data do Orçamento:</strong> $data - Valores Válidos até 15 dias após a solicitação, podendo ser alterado após o prazo</p>";
						echo "<p><strong>Garantia após a Entrega do Serviço:</strong> $garantia<br>
						<strong>Serviço a ser Executado:</strong> $servico</p>";

						switch ($servico) {
							case 'Concerto':
								echo "<p>Valor do Serviço R$ 70,00 mais R$ 30,00 de Garantia, totalizando R$ 100,00</p>";
								break;
							case 'Formatação':
								echo "<p>Valor do Serviço R$ 90,00 mais R$ 90,00 de Garantia, totalizando R$ 180,00</p>";
								break;
							case 'Outros':
								echo "<p>Valor do Serviço R$ 50,00 mais R$ 10,00 de Garantia, totalizando R$ 60,00</p>";
								break;	
							default:
								echo "<p>Não cobrimos este tipo de Serviço</p>";
								break;					
						}

						echo "<p><strong>Produto a ser Reparado:</strong> $produto da <strong>Marca</strong> $marca</p>";
					?>
				<br>
				<p style="text-align:center">________________________________________<br>
				Nome Completo</p>
				<p style="text-align:center">________________________________________<br>
				Assinatura</p>
				<p>Data: ____/____/________<br>
				Celular: (__)_________________<br></p>
				<p>Ao entregar a folha assinada, declaro concordar com os termos de Seriço.</p>
				</div>
				<div class="centralizado">
				<form>
				<input class="btn btn-outline-primary" type="button" value="Imprimir Orçamento" onClick="window.print()"/>
				</form><br>
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