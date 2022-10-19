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
              <a class="nav-link text-white active" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="aprovar_credito.php">Analise de Crédito</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="fazer_orçamento.php">Orçamento</a>
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
          <?php
            $pesquisa = $_GET["pesquisa"];
            switch ($pesquisa) {
              case 'office':
                echo "
                  <h2>Pacote Office</h2>
                  <div class='centralizado'>
                    <img src='img/office.png' class='img-fluid' alt='Office 365'>
                  </div>
                  <div class='largura-maxima'>
                    <h3>Faculdade, cursos livres e técnicos</h3>
                    <p>Mercado de trabalho disputado, empresas cada vez mais exigentes...</p>
                    <p>Tempo e Dinheiro, são fatores que ocupam e preocupam pessoas o tempo todo na atual sociedade.</p>
                    <p>Microsoft Office Essencial, apresenta a forma mais simples e rápida de aprender as principais ferramentas da Microsoft para a criação de 
                    Planilhas eletrônicas, Formatação de Textos e Criação de Apresentações com os já conhecidos e amplamente utilizados Softwares Excel, Word e 
                    Power Point.</p>
                  </div>";
                break;
              case 'negocios':
                echo "
                  <h2>Negócios Digitais</h2>
                  <div class='centralizado'>
                    <img src='img/negocios.png' class='img-fluid' alt='Dinheiro em caixa'>
                  </div>
                  <div class='largura-maxima'>
                    <h3>Já imaginou desenvolver um site e obter renda extra com isso?</h3>
                    <p>Já imaginou trabalhar como afiliado de produtos digitais, gerando renda sem ter que abandonar seu atual emprego ou atividade?</p>
                    <p>Prestar serviços de desenvolvimento de sites para empreendedores digitais, com campanhas completas de Marketing digital utilizando Google Ads, 
                    Facebook Ads?</p>
                    <p>Tornar - se um afiliado Profissional de plataformas conhecidas como Hotmart, Eduzz, Monetizze e Udemy?</p>
                    <p>Alavancar a venda de produtos físicos melhorando sua presença digital?</p>
                    <p>Se você disse sim para uma (ou todas) essas perguntas, então este curso é ideal!</p>
                  </div>";
                break;
              case 'marketing':
                echo "
                  <h2>Marketing Digital</h2>
                  <div class='centralizado'>
                    <img src='img/Ads.png' class='img-fluid' alt='ADS Facebook e Google'>
                  </div>
                  <div class='largura-maxima'>
                    <p>Uma das maiores dificuldades no início de qualquer empreendimento é a conquista dos clientes, mostrar o quanto sua ideia pode ser inovadora 
                    ou o quanto seu produto pode ser útil e sua qualidade surpreendente.</p>
                    <p>Se você é um produtor de conteúdo digital (Youtuber por exemplo) este curso vai ajudar a alavancar seus vídeos e conquistar público.</p>
                    <p>Neste curso trabalhamos com o Marketing Direto, no qual os anúncios serão totalmente objetivos levando clientes (que estajam buscando por seu 
                    produto) até a sua página de vendas, canal, loja virtual ou física e página do Facebook.</p>
                  </div>";
                break;				
              default:
                echo "Infelizmente não encontramos resposta para sua pesquisa, tente novamente usando as palavras chaves: office, negocios ou marketing.";
                break;
            }
          ?> 
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