@extends('layouts.app')

@section('content')

{{------------------------ TOPO DA PAGINA-------------- --}}

<div>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #125686;">
        <a class="navbar-brand text-light disabled" href="#"><b><i>Publicações</i></b></a>
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
       </button> 
       <div class="collapse navbar-collapse" id="navbarSupportedContent">
         <ul class="navbar-nav mr-auto">
           <li class="nav-item" role="presentation">
             <a class="nav-link text-light" data-toggle="collapse" href="#collapseExample" role="tab" aria-expanded="false" aria-controls="collapseExample">Quem somos</a>
           </li>
           <li class="nav-item">
             <a class="nav-link text-light" href="http://10.200.7.15:8080/Biblivre5/ ">Biblivre - Catalago online</a>
           </li>
           <li class="nav-item">
             <a class="nav-link text-light" href="http://localhost:8000/memorial">Memorial Virtual</a>
           </li>
           <li class="nav-item">
             <a class="nav-link text-light" href="http://localhost:8000/publica%C3%A7%C3%B5es">Publicações</a>
           </li>
           <li class="nav-item">
             <a class="nav-link text-light" href="https://acervodigital.ufpr.br/">E-books</a>
           </li> 
           <li class="nav-item">
             <a class="nav-link text-light" href="https://acervodigital.ufpr.br/">Repositorio Institucional</a>
           </li> 
           <li class="nav-item" role="presentation">
             <a class="nav-link text-light" data-toggle="collapse" href="#collapseContatos" role="tab" aria-expanded="false" aria-controls="collapseContatos">Contatos</a>
           </li>
           <li class="nav-item dropdown">
             <a class="nav-link text-light dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               Serviços
             </a>
             <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: #125686;">
               <a class="dropdown-item shadow text-light" href="https://forms.gle/zNMFznNKx6A1RDig6">Ficha catalográfica ISBN</a>
               <a class="dropdown-item shadow text-light" href="#">Apoio a pesquisa</a>
               <a class="dropdown-item shadow text-light" href="https://docs.google.com/forms/d/e/1FAIpQLScHkEgKVNCQGWBrSsPctWTsJL3vHkBw3uUM41J5arcsJDUnNQ/viewform?gxids=7628">Empréstimo de obras</a>
               <a class="dropdown-item shadow text-light" href="#">Agendamento</a>
               <a class="dropdown-item shadow text-light" href="#">fontes de Informações</a>
               <div class="dropdown-divider"></div>
               <a class="nav-link text-light dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                 Produtos
               </a>
               <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: #125686;">
                 <a class="dropdown-item shadow text-light" href="#">Treinamentos</a>
                 <a class="dropdown-item shadow text-light" href="#">Resumo de Atos Normativos</a>
                 <a class="dropdown-item shadow text-light" href="#">Boletim informativo</a>
                 <a class="dropdown-item shadow text-light" href="#">Legislação</a>
             </li>
             </div>
           </li>
         </ul>
         <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
       </div>
     </nav>
</div>
{{-- --------------------LOCAL DA PUBLICAÇÕES-------------------- --}}

<div class="container">
    <div class="card-deck">
        <div class="card shadow">
          <img src="work.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
        <div class="card shadow">
          <img src="work.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
        <div class="card shadow">
          <img src="work.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
      </div>
</div>
    <br>
    <div class="container">
        <div class="card-deck">
            <div class="card shadow">
              <img src="work.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
              </div>
            </div>
            <div class="card shadow">
              <img src="work.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
              </div>
            </div>
            <div class="card shadow">
              <img src="work.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
              </div>
            </div>
          </div>
       
    </div>



@endsection