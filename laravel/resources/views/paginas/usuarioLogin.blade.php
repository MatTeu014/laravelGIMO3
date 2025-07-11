<x-layout titulo="Login de Usuário">

    <nav class="navbar navbar-expand-lg" style="background-color: #f5e177; padding-top: 20px; padding-bottom: 20px;">
        <div class="container-fluid d-flex justify-content-between align-items-center">

            <!-- LOGO (Imagem responsiva) -->
            <a class="navbar-brand" href="/">
                <img src="{{URL::to('/assets/img/logo_gimo.png')}}" alt="Logo" style="width: 100px; height: auto;">
            </a>

            <!-- BOTÕES DIREITA (USUÁRIO E ADM COM LINKS) -->
            <form class="d-flex" role="search">
                <a href="usuariosconsultarescola" class="btn ms-2"
                    style="background-color: white; border: 0px solid black; border-radius: 30px; padding: 6px 18px; font-size: 20px; width: 150px; text-align: center; color: #E5CD59;">CADASTRO</a>
            </form>

        </div>
    </nav>

    <!-- Titulo Login -->
    <br><br>
    <h2 class="card-title" style="text-align: center;">Login de Usuário</h2>
    <br>

    <div class="card"
        style="width:50%; border-color: #f5e177; border-width: 2px; margin: auto; border-radius: 30px; text-align: center;">

        <div class="card-body">
            @if (session('failed'))
                <div class="alert alert-danger" role="alert">
                    {{ session('failed') }}
                </div>
            @endif
            <!-- Formulário de Login -->
            <form method="get" action="/usuarioslogin">
                @csrf <!-- Token de segurança do Laravel -->

                <!-- Input e-mail -->
                <br>
                <h3 style="text-align: center;">E-mail:</h3>
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="email" name="email" placeholder="nome@exemplo.com"
                        required
                        style="border-style: solid; border-color: #000000; border-width: 2px; border-radius: 26px;">
                    <label for="email">E-mail</label>
                </div>
                <br>

                <!-- Input senha -->
                <h3 style="text-align: center;">Senha:</h3>
                <div class="form-floating mb-3">
                    <input type="password" class="form-control" id="senha" name="senha" placeholder="Senha" required
                        style="border-style: solid; border-color: #000000; border-width: 2px; border-radius: 26px;">
                    <label for="senha">Senha</label>
                </div>
                <a href="" style="float: right; color: ##f5e177;">Esqueci a Senha</a>
                <br>

                <!-- Botão Entrar -->
                <div>
                    <button type="submit" class="btn btn-primary"
                        style="background-color: white; color: #f5e177; border-color: #000000; border-radius: 30px; border-width: 2px; font-weight: bold; font-size: 18px; margin: auto; width: 15%;">Entrar</button>
                </div>
            </form>

        </div>
    </div>
    <br>

    <!-- Footer -->
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
                        <a href="https://www.instagram.com" target="_blank"
                            class="text-reset d-flex align-items-center">
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

</x-layout>