<x-layout titulo="Professor Relatórios Alunos">
	<nav class="navbar navbar-expand-lg sticky-top"
		style="background-color:rgb(245, 101, 58); padding-top: 17px; padding-bottom: 17px;">
		<div class="container-fluid d-flex justify-content-between align-items-center">

			<!-- LOGO (Imagem responsiva) -->
			<a class="navbar-brand" href="/professorHome">
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
							type="button" id="dropdownMenuButton" data-bs-toggle="dropdown"
							aria-expanded="false">Relatórios</button>
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
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse"
						data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
						aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarNavDropdown">
						<ul class="navbar-nav">
							<li class="nav-item dropdown">
								<svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor"
									class="bi bi-person-circle" viewBox="0 0 16 16" class="nav-link dropdown-toggle" href="#"
									role="button" data-bs-toggle="dropdown" aria-expanded="false" style="margin-right: 100px;">
									<path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
									<path fill-rule="evenodd"
										d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
								</svg>
								<ul class="dropdown-menu">
									<li><a class="dropdown-item" href="{{ route('professorperfil') }}">Perfil</a></li>
									<li><a class="dropdown-item" href="/">Sair</a></li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</form>
		</div>
	</nav>

	@foreach ($alunos as $aluno)
		<h1 style="text-align: center; margin-top: 2%;">Estatísticas do Aluno {{ $aluno->nome }}</h1>

	@endforeach

	<div
		style="display: flex; flex-direction: column; align-items: center; gap: 20px; margin-top: 3%; margin-bottom: 3%;">
		<div style="display: flex; align-items: center; gap: 10px;">
			<h5 style="margin: 0; font-weight: bold;">Letras ou Números Finalizados pelo Aluno
			</h5>
			<div style="background-color: rgb(15, 229, 79); height: 20px; width: 20px; border-radius: 50%;"></div>
		</div>

		<div style="display: flex; align-items: center; gap: 10px;">
			<h5 style="margin: 0; font-weight: bold;">Letras ou Números Não Finalizados pelo
				Aluno</h5>
			<div style="background-color: rgb(229, 15, 15); height: 20px; width: 20px; border-radius: 50%;"></div>
		</div>
	</div>


	<section class="py-5" style="padding-top: 80px; text-align: center; height: 50vh;">

		<div
			style="float:left; width: 90%; height: auto; margin-left: 5%; overflow: auto;  border-style: solid; padding: 2%; border-radius: 10px; border-color: rgb(245, 101, 58);">
			@csrf


			<table class="table" style="height: auto;">

				<tbody>
					@foreach($alunos as $aluno)
						<tr>
							@if ($aluno->botaoA == 0)
								<th
									style="border-style: solid; border-width: 2px; font-size: 17px; background-color: rgb(229, 15, 15); border-color: black;">
									A</th>
							@elseif($aluno->botaoA == 1)
								<th
									style="border-style: solid; border-width: 2px; font-size: 17px;background-color: rgb(15, 229, 79); border-color: black;">
									A</th>
							@endif
							@if ($aluno->botaoB == 0)
								<th
									style="border-style: solid; border-width: 2px; font-size: 17px; background-color: rgb(229, 15, 15); border-color: black;">
									B</th>
							@elseif($aluno->botaoB == 1)
								<th
									style="border-style: solid; border-width: 2px; font-size: 17px;background-color: rgb(15, 229, 79); border-color: black;">
									B</th>
							@endif
							@if ($aluno->botaoC == 0)
								<th
									style="border-style: solid; border-width: 2px; font-size: 17px; background-color: rgb(229, 15, 15); border-color: black;">
									C</th>
							@elseif($aluno->botaoC == 1)
								<th
									style="border-style: solid; border-width: 2px; font-size: 17px;background-color: rgb(15, 229, 79); border-color: black;">
									C</th>
							@endif
							@if ($aluno->botaoD == 0)
								<th
									style="border-style: solid; border-width: 2px; font-size: 17px; background-color: rgb(229, 15, 15); border-color: black;">
									D</th>
							@elseif($aluno->botaoD == 1)
								<th
									style="border-style: solid; border-width: 2px; font-size: 17px;background-color: rgb(15, 229, 79); border-color: black;">
									D</th>
							@endif
							@if ($aluno->botaoE == 0)
								<th
									style="border-style: solid; border-width: 2px; font-size: 17px; background-color: rgb(229, 15, 15); border-color: black;">
									E</th>
							@elseif($aluno->botaoE == 1)
								<th
									style="border-style: solid; border-width: 2px; font-size: 17px;background-color: rgb(15, 229, 79); border-color: black;">
									E</th>
							@endif
							@if ($aluno->botaoF == 0)
								<th
									style="border-style: solid; border-width: 2px; font-size: 17px; background-color: rgb(229, 15, 15); border-color: black;">
									F</th>
							@elseif($aluno->botaoF == 1)
								<th
									style="border-style: solid; border-width: 2px; font-size: 17px;background-color: rgb(15, 229, 79); border-color: black;">
									F</th>
							@endif
							@if ($aluno->botaoG == 0)
								<th
									style="border-style: solid; border-width: 2px; font-size: 17px; background-color: rgb(229, 15, 15); border-color: black;">
									G</th>
							@elseif($aluno->botaoG == 1)
								<th
									style="border-style: solid; border-width: 2px; font-size: 17px;background-color: rgb(15, 229, 79); border-color: black;">
									G</th>
							@endif
							@if ($aluno->botaoH == 0)
								<th
									style="border-style: solid; border-width: 2px; font-size: 17px; background-color: rgb(229, 15, 15); border-color: black;">
									H</th>
							@elseif($aluno->botaoH == 1)
								<th
									style="border-style: solid; border-width: 2px; font-size: 17px;background-color: rgb(15, 229, 79); border-color: black;">
									H</th>
							@endif
							@if ($aluno->botaoI == 0)
								<th
									style="border-style: solid; border-width: 2px; font-size: 17px; background-color: rgb(229, 15, 15); border-color: black;">
									I</th>
							@elseif($aluno->botaoI == 1)
								<th
									style="border-style: solid; border-width: 2px; font-size: 17px;background-color: rgb(15, 229, 79); border-color: black;">
									I</th>
							@endif
							@if ($aluno->botaoJ == 0)
								<th
									style="border-style: solid; border-width: 2px; font-size: 17px; background-color: rgb(229, 15, 15); border-color: black;">
									J</th>
							@elseif($aluno->botaoJ == 1)
								<th
									style="border-style: solid; border-width: 2px; font-size: 17px;background-color: rgb(15, 229, 79); border-color: black;">
									J</th>
							@endif
							@if ($aluno->botaoK == 0)
								<th
									style="border-style: solid; border-width: 2px; font-size: 17px; background-color: rgb(229, 15, 15); border-color: black;">
									K</th>
							@elseif($aluno->botaoK == 1)
								<th
									style="border-style: solid; border-width: 2px; font-size: 17px;background-color: rgb(15, 229, 79); border-color: black;">
									K</th>
							@endif
							@if ($aluno->botaoL == 0)
								<th
									style="border-style: solid; border-width: 2px; font-size: 17px; background-color: rgb(229, 15, 15); border-color: black">
									L</th>
							@elseif($aluno->botaoL == 1)
								<th
									style="border-style: solid; border-width: 2px; font-size: 17px;background-color: rgb(15, 229, 79); border-color: black;">
									L</th>
							@endif
							@if ($aluno->botaoM == 0)
								<th
									style="border-style: solid; border-width: 2px; font-size: 17px; background-color: rgb(229, 15, 15); border-color: black;">
									M</th>
							@elseif($aluno->botaoM == 1)
								<th
									style="border-style: solid; border-width: 2px; font-size: 17px;background-color: rgb(15, 229, 79); border-color: black;">
									M</th>
							@endif
							@if ($aluno->botaoN == 0)
								<th
									style="border-style: solid; border-width: 2px; font-size: 17px; background-color: rgb(229, 15, 15); border-color: black;">
									N</th>
							@elseif($aluno->botaoN == 1)
								<th
									style="border-style: solid; border-width: 2px; font-size: 17px;background-color: rgb(15, 229, 79); border-color: black;">
									N</th>
							@endif
							@if ($aluno->botaoO == 0)
								<th
									style="border-style: solid; border-width: 2px; font-size: 17px; background-color: rgb(229, 15, 15); border-color: black;">
									O</th>
							@elseif($aluno->botaoO == 1)
								<th
									style="border-style: solid; border-width: 2px; font-size: 17px;background-color: rgb(15, 229, 79); border-color: black;">
									O</th>
							@endif
							@if ($aluno->botaoP == 0)
								<th
									style="border-style: solid; border-width: 2px; font-size: 17px; background-color: rgb(229, 15, 15); border-color: black;">
									P</th>
									@elseif($aluno->botaoP == 1)
								<th
									style="border-style: solid; border-width: 2px; font-size: 17px;background-color: rgb(15, 229, 79); border-color: black;">
									P</th>
							@endif
								@if ($aluno->botaoQ == 0)
									<th
										style="border-style: solid; border-width: 2px; font-size: 17px; background-color: rgb(229, 15, 15); border-color: black">
										Q</th>
								@elseif($aluno->botaoQ == 1)
									<th
										style="border-style: solid; border-width: 2px; font-size: 17px;background-color: rgb(15, 229, 79); border-color: black;">
										Q</th>
								@endif
								@if ($aluno->botaoR == 0)
									<th
										style="border-style: solid; border-width: 2px; font-size: 17px; background-color: rgb(229, 15, 15); border-color: black;">
										R</th>
								@elseif($aluno->botaoR == 1)
									<th
										style="border-style: solid; border-width: 2px; font-size: 17px;background-color: rgb(15, 229, 79); border-color: black;">
										R</th>
								@endif
								@if ($aluno->botaoS == 0)
									<th
										style="border-style: solid; border-width: 2px; font-size: 17px; background-color: rgb(229, 15, 15); border-color: black;">
										S</th>
								@elseif($aluno->botaoS == 1)
									<th
										style="border-style: solid; border-width: 2px; font-size: 17px;background-color: rgb(15, 229, 79); border-color: black;">
										S</th>
								@endif
								@if ($aluno->botaoT == 0)
									<th
										style="border-style: solid; border-width: 2px; font-size: 17px; background-color: rgb(229, 15, 15); border-color: black;">
										T</th>
								@elseif($aluno->botaoT == 1)
									<th
										style="border-style: solid; border-width: 2px; font-size: 17px;background-color: rgb(15, 229, 79); border-color: black;">
										T</th>
								@endif
								@if ($aluno->botaoU == 0)
									<th
										style="border-style: solid; border-width: 2px; font-size: 17px; background-color: rgb(229, 15, 15); border-color: black;">
										U</th>
								@elseif($aluno->botaoU == 1)
									<th
										style="border-style: solid; border-width: 2px; font-size: 17px;background-color: rgb(15, 229, 79); border-color: black;">
										U</th>
								@endif
								@if ($aluno->botaoV == 0)
									<th
										style="border-style: solid; border-width: 2px; font-size: 17px; background-color: rgb(229, 15, 15); border-color: black;">
										V</th>
								@elseif($aluno->botaoV == 1)
									<th
										style="border-style: solid; border-width: 2px; font-size: 17px;background-color: rgb(15, 229, 79); border-color: black;">
										V</th>
								@endif
								@if ($aluno->botaoW == 0)
									<th
										style="border-style: solid; border-width: 2px; font-size: 17px; background-color: rgb(229, 15, 15); border-color: black;">
										W</th>
								@elseif($aluno->botaoW == 1)
									<th
										style="border-style: solid; border-width: 2px; font-size: 17px;background-color: rgb(15, 229, 79); border-color: black;">
										W</th>
								@endif
								@if ($aluno->botaoX == 0)
									<th
										style="border-style: solid; border-width: 2px; font-size: 17px; background-color: rgb(229, 15, 15); border-color: black;">
										X</th>
								@elseif($aluno->botaoX == 1)
									<th
										style="border-style: solid; border-width: 2px; font-size: 17px;background-color: rgb(15, 229, 79); border-color: black;">
										X</th>
								@endif
								@if ($aluno->botaoY == 0)
									<th
										style="border-style: solid; border-width: 2px; font-size: 17px; background-color: rgb(229, 15, 15); border-color: black;">
										Y</th>
								@elseif($aluno->botaoY == 1)
									<th
										style="border-style: solid; border-width: 2px; font-size: 17px;background-color: rgb(15, 229, 79); border-color: black;">
										Y</th>
								@endif
								@if ($aluno->botaoZ == 0)
									<th
										style="border-style: solid; border-width: 2px; font-size: 17px; background-color: rgb(229, 15, 15); border-color: black;">
										Z</th>
								@elseif($aluno->botaoZ == 1)
									<th
										style="border-style: solid; border-width: 2px; font-size: 17px;background-color: rgb(15, 229, 79); border-color: black;">
										Z</th>
								@endif
						</tr>
					@endforeach
				</tbody>


				<tr>
					<td colspan="2" style="background-color: #f4f4f4; height: 10px;"></td>
				</tr>

				<tbody>
					@foreach($alunos as $aluno)
						<tr>
							@if ($aluno->botao0 == 0)
								<th
									style="border-style: solid; border-width: 2px; font-size: 17px; background-color: rgb(229, 15, 15); border-color: black;">
									0</th>
							@elseif($aluno->botao0 == 1)
								<th
									style="border-style: solid; border-width: 2px; font-size: 17px;background-color: rgb(15, 229, 79);; border-color: black;">
									0
								</th>
							@endif
							@if ($aluno->botao1 == 0)
								<th
									style="border-style: solid; border-width: 2px; font-size: 17px; background-color: rgb(229, 15, 15); border-color: black;">
									1</th>
							@elseif($aluno->botao1 == 1)
								<th
									style="border-style: solid; border-width: 2px; font-size: 17px;background-color: rgb(15, 229, 79); border-color: black;">
									1
								</th>
							@endif
							@if ($aluno->botao2 == 0)
								<th
									style="border-style: solid; border-width: 2px; font-size: 17px; background-color: rgb(229, 15, 15); border-color: black;">
									2</th>
							@elseif($aluno->botao2 == 1)
								<th
									style="border-style: solid; border-width: 2px; font-size: 17px;background-color: rgb(15, 229, 79); border-color: black;">
									2
								</th>
							@endif
							@if ($aluno->botao3 == 0)
								<th
									style="border-style: solid; border-width: 2px; font-size: 17px; background-color: rgb(229, 15, 15); border-color: black;">
									3</th>
							@elseif($aluno->botao3 == 1)
								<th
									style="border-style: solid; border-width: 2px; font-size: 17px;background-color: rgb(15, 229, 79); border-color: black;">
									3
								</th>
							@endif
							@if ($aluno->botao4 == 0)
								<th
									style="border-style: solid; border-width: 2px; font-size: 17px; background-color: rgb(229, 15, 15); border-color: black;">
									4</th>
							@elseif($aluno->botao4 == 1)
								<th
									style="border-style: solid; border-width: 2px; font-size: 17px;background-color: rgb(15, 229, 79); border-color: black;">
									4
								</th>
							@endif
							@if ($aluno->botao5 == 0)
								<th
									style="border-style: solid; border-width: 2px; font-size: 17px; background-color: rgb(229, 15, 15); border-color: black;">
									5</th>
							@elseif($aluno->botao5 == 1)
								<th
									style="border-style: solid; border-width: 2px; font-size: 17px;background-color: rgb(15, 229, 79); border-color: black;">
									5
								</th>
							@endif
							@if ($aluno->botao6 == 0)
								<th
									style="border-style: solid; border-width: 2px; font-size: 17px; background-color: rgb(229, 15, 15); border-color: black;">
									6</th>
							@elseif($aluno->botao6 == 1)
								<th
									style="border-style: solid; border-width: 2px; font-size: 17px;background-color: rgb(15, 229, 79); border-color: black;">
									6
								</th>
							@endif
							@if ($aluno->botao7 == 0)
								<th
									style="border-style: solid; border-width: 2px; font-size: 17px; background-color: rgb(229, 15, 15); border-color: black;">
									7</th>
							@elseif($aluno->botao7 == 1)
								<th
									style="border-style: solid; border-width: 2px; font-size: 17px;background-color: rgb(15, 229, 79); border-color: black;">
									7
								</th>
							@endif
							@if ($aluno->botao8 == 0)
								<th
									style="border-style: solid; border-width: 2px; font-size: 17px; background-color: rgb(229, 15, 15); border-color: black;">
									8</th>
							@elseif($aluno->botao8 == 1)
								<th
									style="border-style: solid; border-width: 2px; font-size: 17px;background-color: rgb(15, 229, 79); border-color: black;">
									8
								</th>
							@endif
							@if ($aluno->botao9 == 0)
								<th
									style="border-style: solid; border-width: 2px; font-size: 17px; background-color: rgb(229, 15, 15); border-color: black;">
									9</th>
							@elseif($aluno->botao9 == 1)
								<th
									style="border-style: solid; border-width: 2px; font-size: 17px;background-color: rgb(15, 229, 79); border-color: black;">
									9
								</th>
							@endif
							@if ($aluno->botao10 == 0)
								<th
									style="border-style: solid; border-width: 2px; font-size: 17px; background-color: rgb(229, 15, 15); border-color: black;">
									10</th>
							@elseif($aluno->botao10 == 1)
								<th
									style="border-style: solid; border-width: 2px; font-size: 17px;background-color: rgb(15, 229, 79); border-color: black;">
									10</th>
							@endif
						</tr>
					@endforeach
				</tbody>
			</table>
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