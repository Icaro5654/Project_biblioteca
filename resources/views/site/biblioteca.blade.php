@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
              {{--------------------------------------------------- TOPO DA PAGE-------------------------------------------------------}}       
      <form id="teste_submit" name ="teste_submit" method="post" onsubmit="return false;" action="http://localhost:8000/biblioteca">    
              <div class="shadow-lg p-3 mb-5 bg-white rounded">
                <img id="baner" class="img-fluid" src="biblioteca.png">
                  <div> 
                    <span class="border">
                      {{-- ------------------------------------------INICIO DO NAVBAR--------------------------------------- --}}

                      <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #125686;">
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
                                Serviçoss
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
                                  
                              </li>
                              </div>
                            </li>
                          </ul>
                        </div>
                      </nav>

                      {{-------------------------------------------------- FIM DO NAVBAR---------------------------------------------------------- --}}
                      
                    </span>
                    <div class="collapse" id="collapseExample">{{--<== collapse --}}
                      <div class="card card-body" style="width: 50rem;">
                        <h3 class="page-header" style="text-align:left">História da Secretaria de Estado de Saude do Amazonas </h3>
                        <br>
                        <p  align="left">Lei nº 12 de 09/05/1952, publicada em Diário Oficial de 09/05/1953: Cria a Secretaria de Educação, Cultura e Saúde.</p><br>
                        <p  align="left">Lei nº 108 de 23/12/1955: Desmembra a Saúde da Educação e cria a Secretaria de Assistência e Saúde - SAS.</p><br>
                        <p  align="left">Lei nº 233, de 18 de Junho de 1965: Estabelece nova estrutura administrativa da Secretaria. </p><br>
                        <p  align="left">Lei nº 1336 de 13/07/1979: Cria a Secretaria de Estado de Saúde - SESAU.</p><br>
                        <p  align="left">Decreto nº 8049 de 19 de Julho de 1984: Reformula estrutura da Secretaria.</p>
                        <br>
                        <p  align="left"><b>ESTRUTURAÇÃO</b></p>
                        <p  align="left">Como todo órgão institucional a Secretaria de Estado de Saúde foi criada dentro de um 
                          contexto e realidade inicial e precisou acompanhar o processo de mudanças das ações de saúde e 
                          acompanhar os preceitos federais. A instituição foi se adequando dentro da realidade do Estado, 
                          passando por vários processos de reestruturação do seu organograma a partir de 1955. Os anos de 
                          reorganização estrutural foram: 1955 / 1965 / 1967 / 1971 / 1981 / 1984 / 1990 / 1991..</p>
                      </div>
                    </div>
                        <br>
                        <br>
                         {{-- <== imagem do layout "work.png --}} 
                          <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                              <div class="carousel-item active" data-interval="1000">
                                <img src="work.png" class="d-block w-100" alt="...">
                              </div>
                              <div class="carousel-item" data-interval="2000">
                                <img src="work.png" class="d-block w-100" alt="...">
                              </div>
                              <div class="carousel-item">
                                <img src="work.png" class="d-block w-100" alt="...">
                              </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span class="sr-only">Next</span>
                            </a>
                          </div>
                  </div>  
              </div>
       </form>   
    </div>
</div>
@endsection
 
                            
                            
                            {{-- 
                               <style>
                              img{
                                margin-left: auto;
                              margin-right: auto;
                              max-width: 40em;
                          }
                              }
                            </style>
                              --}}
                            