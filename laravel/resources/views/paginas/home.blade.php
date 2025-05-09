<x-layout titulo="Home">
  <nav class="navbar navbar-expand-lg sticky-top"
    style="background-color: #DA3E41; padding-top: 20px; padding-bottom: 20px;">
    <div class="container-fluid d-flex justify-content-between align-items-center">

      <!-- LOGO (Imagem responsiva) -->
      <a class="navbar-brand" href="/">
        <img src="{{URL::to('/assets/img/logo_gimo.png')}}" alt="Logo" style="width: 100px; height: auto;">
      </a>

      <!-- BOTÕES CENTRAIS -->
      <div class="d-flex justify-content-center flex-grow-1" style="padding-top:35px;">
        <ul class="navbar-nav d-flex flex-row gap-3">
          <li class="nav-item">
            <a href="/" class="btn btn-danger"
              style="border: 2px solid black; border-radius: 30px; padding: 12px 24px; font-size: 18px; width: 120px; text-align: center;">Home</a>
          </li>
          <li class="nav-item">
            <a href="/sobrenos" class="btn btn-danger"
              style="border: 2px solid black; border-radius: 30px; padding: 12px 24px; font-size: 18px; width: 120px; text-align: center;">Sobre</a>
          </li>
          <li class="nav-item">
            <a href="/alunoLogin" class="btn btn-danger"
              style="border: 2px solid black; border-radius: 30px; padding: 12px 10px; font-size: 18px; width: 120px; text-align: center;">Atividades</a>
          </li>
          <li class="nav-item">
            <a href="/alunoLogin" class="btn btn-danger"
              style="border: 2px solid black; border-radius: 30px; padding: 12px 24px; font-size: 18px; width: 120px; text-align: center;">Relatório</a>
          </li>
        </ul>
      </div>

      <form class="d-flex" role="search" style="margin-right: 4%">
        <!-- Dropdown -->
        <div class="dropdown ms-2">
          <button class="btn dropdown-toggle"
            style="background-color: white; border: 0px solid black; border-radius: 30px; padding: 6px 17px; font-size: 19px; width: 100px; text-align: center; color: #DA3E41;"
            type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
            LOGIN
          </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <li><a class="dropdown-item" href="alunoLogin">ALUNO</a></li>
            <li><a class="dropdown-item" href="professorLogin">PROFESSOR</a></li>
            <li><a class="dropdown-item" href="escolaLogin">ESCOLA</a></li>
          </ul>
        </div>
      </form>
    </div>
  </nav>

  <section class="py-5" style="padding-top: 80px;"> <!-- Ajuste o padding-top para evitar sobreposição -->
    <div class="container">
      <div class="row align-items-center">

        <!-- Texto à esquerda -->
        <div class="col-md-6">
          <h2 class="mb-4">Título da Seção</h2>
          <p>
            Este é um exemplo de seção com texto do lado esquerdo e uma imagem do lado direito.
            Você pode usar essa estrutura para descrever seu projeto, equipe ou qualquer outro conteúdo relevante.
          </p>
          <p>
            Adicione quantos parágrafos quiser, ou até botões se preferir. É totalmente personalizável.
          </p>
          <p>
            Este é um exemplo de seção com texto do lado esquerdo e uma imagem do lado direito.
            Você pode usar essa estrutura para descrever seu projeto, equipe ou qualquer outro conteúdo relevante.
          </p>
          <p>
            Adicione quantos parágrafos quiser, ou até botões se preferir. É totalmente personalizável.
          </p>
          <p>
            Este é um exemplo de seção com texto do lado esquerdo e uma imagem do lado direito.
            Você pode usar essa estrutura para descrever seu projeto, equipe ou qualquer outro conteúdo relevante.
          </p>
          <p>
            Adicione quantos parágrafos quiser, ou até botões se preferir. É totalmente personalizável.
          </p>
        </div>

        <!-- Imagem à direita -->
        <div class="col-md-6 text-center">
          <img src="{{URL::to('/assets/img/img_home.png')}}" alt="Imagem ilustrativa" class="img-fluid rounded">
        </div>

      </div>
    </div>
  </section>

  <!-- Footer centralizado -->
  <footer class="text-muted" style="background-color: #D3D3D3; width: 100%;">
    <div class="container py-5">
      <div class="row text-center justify-content-center">

        <!-- Projeto GIMO -->
        <div class="col-12 col-md-4 mb-4">
          <h6 class="text-uppercase fw-bold mb-3">Projeto GIMO Desenvolvido por:</h6>
          <div class="d-flex flex-column align-items-center">
            <p class="mb-2">Gisele da Hora Silva</p>
            <p class="mb-2">Isaac Sena Martins</p>
            <p class="mb-2">Mateus Albuquerque Pavani</p>
            <p class="mb-2">Otávio Fidalgo</p>
          </div>
        </div>

        <!-- LinkedIn centralizado e alinhado -->
        <div class="col-12 col-md-4 mb-4">
          <h6 class="text-uppercase fw-bold mb-3">LinkedIn</h6>
          <div class="d-flex flex-column align-items-center">
            <a href="https://www.linkedin.com/in/gisele-da-hora-silva-0313811a9/" target="_blank"
              class="text-decoration-none text-primary mb-2 d-flex align-items-center">
              <i class="fab fa-linkedin me-2"></i><span>Gisele da Hora</span>
            </a>
            <a href="https://www.linkedin.com/in/isaac-sena-74ab56224/" target="_blank"
              class="text-decoration-none text-primary mb-2 d-flex align-items-center">
              <i class="fab fa-linkedin me-2"></i><span>Isaac Sena</span>
            </a>
            <a href="https://www.linkedin.com/in/mateus-albuquerque-pavani-934598267/" target="_blank"
              class="text-decoration-none text-primary mb-2 d-flex align-items-center">
              <i class="fab fa-linkedin me-2"></i><span>Mateus Pavani</span>
            </a>
            <a href="https://www.linkedin.com/in/ot%C3%A1vio-fidalgo-8448a1217/" target="_blank"
              class="text-decoration-none text-primary mb-2 d-flex align-items-center">
              <i class="fab fa-linkedin me-2"></i><span>Otávio Fidalgo</span>
            </a>
          </div>
        </div>

        <!-- Contato e Redes Sociais centralizados -->
        <div class="col-12 col-md-4 mb-4">
          <h6 class="text-uppercase fw-bold mb-3">Contato</h6>
          <div class="d-flex flex-column align-items-center">
            <p><i class="fas fa-envelope me-2" style="color: #000;"></i>gimo.projeto@email.com</p>
            <p><i class="fas fa-map-marker-alt me-2" style="color: #000;"></i>Senac - SBC, Brasil</p>
            <a href="https://www.instagram.com" target="_blank" class="text-reset d-flex align-items-center">
              <i class="fab fa-instagram fa-lg me-2" style="color: #000;"></i><span>Instagram</span>
            </a>
          </div>
        </div>
      </div>

      <!-- Direitos Autorais -->
      <div class="row">
        <div class="col-12 text-center mt-4">
          <p class="mb-0">&copy; 2025 Projeto GIMO. Todos os direitos reservados.</p>
        </div>
      </div>
    </div>
  </footer>

  <!-- FontAwesome (caso ainda não esteja incluído) -->
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>




</x-layout>