<x-layout titulo="Editar Perfil de Professor">
  <nav class="navbar navbar-expand-lg sticky-top"
    style="background-color: rgb(245, 101, 58); padding-top: 20px; padding-bottom: 20px;">
    <div class="container-fluid d-flex justify-content-between align-items-center">

      <!-- LOGO (Imagem responsiva) -->
      <a class="navbar-brand" href="professorHome">
        <img src="{{URL::to('/assets/img/logo_gimo.png')}}" alt="Logo" style="width: 100px; height: auto;">
      </a>

      <!-- BOTÕES CENTRAIS -->
      <div class="d-flex justify-content-center flex-grow-1" style="padding-top:35px;">
        <ul class="navbar-nav d-flex flex-row gap-3">
          <li class="nav-item">
            <a href="/professorHome" class="btn btn-danger"
              style=" background-color:rgb(245, 101, 58); border: 2px solid black; border-radius: 30px; padding: 12px 24px; font-size: 18px; width: 160px; text-align: center;">Home</a>
          </li>
          <div class="dropdown ms-2">
            <button class="btn dropdown-toggle"
              style="background-color: rgb(245, 101, 58); border: 2px solid black; border-radius: 30px; padding: 6px 10px; font-size: 19px; width: 100%; text-align: center; color: white;"
              type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">Relatórios</button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <li><a class="dropdown-item" href="professoresseriesturmaconsultaserie">Turmas</a></li>
              <li><a class="dropdown-item" href="professorconsultarseriesalunos">Alunos</a></li>
            </ul>
          </div>
        </ul>
      </div>

      <!-- BOTÕES DIREITA (USUÁRIO) -->
      <form class="d-flex" role="search">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" fill="currentColor"
                  class="bi bi-person-circle" viewBox="0 0 16 16" class="nav-link dropdown-toggle" href="#"
                  role="button" data-bs-toggle="dropdown" aria-expanded="false" style="margin-right: 100px;">
                  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                  <path fill-rule="evenodd"
                    d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
                </svg>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="professorperfil">Perfil</a></li>
                  <li><a class="dropdown-item" href="/">Sair</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </form>
    </div>
  </nav>

  <form action="{{ route('professoratualizar2') }}" method="POST">
    @csrf
    <section class="py-5" style="padding-top: 80px;"> <!-- Ajuste o padding-top para evitar sobreposição -->
      <div class="container">
        <div class="row align-items-center">

          <!-- Bloco de Perfil  -->
          <h2 style="text-align: center;">Editar Perfil do Professor</h2>
          <div class="card"
            style="width:100%; border-color: rgb(245, 101, 58); border-width: 2px; margin: auto; border-radius: 30px; text-align: center;">
            <div class="card-body">
              <div class="row">

                <!-- Input nome -->
                <div class="col-md-6">
                  <h3 style="text-align: center;">Novo Nome:</h3>
                  <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite seu nome" required
                      style="border-style: solid; border-color: #000000; border-width: 2px; border-radius: 26px;"
                      value="{{ $professores->nome }}">
                    <label for="nome">Nome</label>
                  </div>
                </div>

                <!-- Input sobrenome -->
                <div class="col-md-6">
                  <h3 style="text-align: center;">Novo Sobrenome:</h3>
                  <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="sobrenome" name="sobrenome"
                      placeholder="Digite seu sobrenome" required
                      style="border-style: solid; border-color: #000000; border-width: 2px; border-radius: 26px;"
                      value="{{ $professores->sobrenome }}">
                    <label for="sobrenome">Sobrenome</label>
                  </div>
                </div>

                <!-- Input e-mail -->
                <div class="col-md-6">
                  <h3 style="text-align: center;">Novo E-mail:</h3>
                  <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="email" name="email" placeholder="nome@exemplo.com"
                      required
                      style="border-style: solid; border-color: #000000; border-width: 2px; border-radius: 26px;"
                      value="{{ $professores->email }}">
                    <label for="email">E-mail</label>
                  </div>
                </div>

                <!-- Input senha -->
                <div class="col-md-6">
                  <h3 style="text-align: center;">Nova Senha:</h3>
                  <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="senha" name="senha" placeholder="Senha" required
                      style="border-style: solid; border-color: #000000; border-width: 2px; border-radius: 26px;"
                      value="{{ $professores->senha }}">
                    <label for="senha">Senha</label>
                  </div>
                </div>

                <!-- Input idade -->
                <div class="col-md-6">
                  <h3 style="text-align: center;">Nova Idade:</h3>
                  <div class="form-floating mb-3">
                    <input type="number" class="form-control" id="idade" name="idade" placeholder="Idade" required
                      style="border-style: solid; border-color: #000000; border-width: 2px; border-radius: 26px;"
                      value="{{ $professores->idade }}">
                    <label for="idade">Idade</label>
                  </div>
                </div>

                <!-- Botão Editar -->
                <div class="col-12 d-flex justify-content-center" style="transform: translate(319px, -72px);">
                  <a href="professorperfil"><button type="button"
                      style="width: 100%; border-radius: 30px; font-size: 18px; padding: 12px 24px;backgorund-color:black;">
                      Voltar
                    </button></a>
                  <a href=""><button type="submit"
                      style="width: 100%; border-radius: 30px; font-size: 18px; padding: 12px 24px; margin-left: 20%;backgorund-color:black;">
                      Confirmar
                    </button></a>
                </div>


              </div>
            </div>
          </div>

        </div>
      </div>
    </section>
  </form>


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