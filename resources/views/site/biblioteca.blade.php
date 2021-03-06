@extends('layouts.app')

@section('content')
<div class="container">
              {{--------------------------------------------------- TOPO DA PAGE-------------------------------------------------------}}       
      <form id="teste_submit" name ="teste_submit" method="post" onsubmit="return false;" action="http://localhost:8000/biblioteca">    
              <div class="shadow-lg p-3 mb-5 bg-white rounded">
                <img id="baner" class="img-fluid" src="biblioteca.png" width="100%">
                  <div> 
                    <span class="border">
                      {{-- ------------------------------------------INICIO DO NAVBAR--------------------------------------- --}}

                      <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #125686;">
                         <a class="navbar-brand text-light" href="#">Home</a>
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
                              <a class="nav-link text-light" href="http://localhost:8000/publica%C3%A7%C3%B5es">Publica????es</a>
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
                                Servi??os
                              </a>
                              <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: #125686;">
                                <a class="dropdown-item shadow text-light" href="https://forms.gle/zNMFznNKx6A1RDig6">Ficha catalogr??fica ISBN</a>
                                <a class="dropdown-item shadow text-light" href="#">Apoio a pesquisa</a>
                                <a class="dropdown-item shadow text-light" href="https://docs.google.com/forms/d/e/1FAIpQLScHkEgKVNCQGWBrSsPctWTsJL3vHkBw3uUM41J5arcsJDUnNQ/viewform?gxids=7628">Empr??stimo de obras</a>
                                <a class="dropdown-item shadow text-light" href="#">Agendamento</a>
                                <a class="dropdown-item shadow text-light" href="#">fontes de Informa????es</a>
                                <div class="dropdown-divider"></div>
                                <a class="nav-link text-light dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  Produtos
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: #125686;">
                                  <a class="dropdown-item shadow text-light" href="#">Treinamentos</a>
                                  <a class="dropdown-item shadow text-light" href="#">Resumo de Atos Normativos</a>
                                  <a class="dropdown-item shadow text-light" href="#">Boletim informativo</a>
                                  <a class="dropdown-item shadow text-light" href="#">Legisla????o</a>
                                </div>
                              </div>
                            </li>
                          </ul>
                        </div>
                      </nav>
                      {{------------------------------------------COLLAPSE DE CONTATOS--------------------------------------------}}

                      <div class="collapse multi-collapse" id="collapseContatos"  style="width: 100%">
                        <div class="card card-body">
                          <div>
                            <h3 class="page-header" style="text-align:left">Contatos</h3>
                              <br>
                              <div align="center">
                              <form  method="post">
                                <label class="control-label">Setor </label>
                          
                                <select id="setor" name="setor" onchange="submit(this.form)">
                                  <option selected>Selecione</option><option value='1'>Gabinete</option><option value='2'>Conselhos</option><option value='3'>Assessorias</option><option value='4'>Dep. Financeiro</option><option value='5'>Dep. Recursos Humanos</option><option value='6'>Dep. Log??stica</option><option value='7'>Sec. Exec. Adj. Tecnologia da Informa????o</option><option value='8'>Dep. Planejamento</option><option value='9'>Dep. Controle e Avalia????o dos Servi??os</option><option value='10'>Dep. Aten????o B??sica</option><option value='11'>Sec. Exec. Adj. Capital</option><option value='12'>Sec. Exec. Adj. Interior</option><option value='13'>Fundo Estadual de Sa??de</option><option value='14'>Complexo Regulador</option>			</select>
                                <!--<input type="submit" name="pesquisar" value="Pesquisar" /> -->
                                </p>
                              </form>
                              <br>
                              <table align="center" class="table table-striped table-responsive" border="1">
                                <tr bgcolor="#EAEFDC">
                                  <td align="center" class="titulo">Setor</td>
                                  <td align="center" class="titulo">Respons??vel</td>
                                  <td align="center" class="titulo">Telefone</td>
                                  <td align="center" class="titulo">Email</td>
                                </tr>
                                    </table>
                            </div>
                          </div>
                        </div>
                      </div>

                      {{-------------------------------------------------- FIM DO NAVBAR---------------------------------------------------------- --}}
                      
                    </span>
                    <div class="collapse" id="collapseExample">{{--<== collapse --}}
                      <div class="card card-body" style="width: 50rem;">
                        <h3 class="page-header" style="text-align:left">**Aqui conta sobre a Biblioteca da SES-AM e seus funionarios**</h3>
                        <br>
                        <p  align="left"> O site da biblioteca da Secretaria de Estado de Sa??de do Amazonas foi pensada para que a historia da saude 
                          <p> p??blica do Estado se mantenha viva, al??m de organizar a trajet??ria da historia da Secretaria de Estado de Sa??de.<br></p><br>
                        
                        <p  align="left"><b>ESTRUTURA????O</b></p>
                        <p  align="left">Como todo ??rg??o institucional a Secretaria de Estado de Sa??de foi criada dentro de um 
                          contexto e realidade inicial e precisou acompanhar o processo de mudan??as das a????es de sa??de e 
                          acompanhar os preceitos federais. A institui????o foi se adequando dentro da realidade do Estado, 
                          passando por v??rios processos de reestrutura????o do seu organograma a partir de 1955. Os anos de 
                          reorganiza????o estrutural foram: 1955 / 1965 / 1967 / 1971 / 1981 / 1984 / 1990 / 1991..</p>
                      </div>
                    </div>
                    
                        <br>
                        <br>
                        
                         {{--------------------------------CARROSEL COM IMAGEM -------------------------------}} 
                          <div id="carouselExampleInterval" class="carousel slide " data-ride="carousel">
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
@endsection      