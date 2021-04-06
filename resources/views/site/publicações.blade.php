@extends('layouts.app')

@section('content')
<body>
  <img id="baner" class="img-fluid"src="biblioteca.png" width="100%">
                  <div> {{-- abas do layout --}}
                      <div class="row justify-content-center">
                        <ul class="nav nav-pills tabs-light" id="myTab" role="tablist" style="background-color: #011931;">
                          <li class="nav-item" role="presentation">
                            <a class="nav-link" data-toggle="collapse" href="#collapseExample" role="tab" aria-expanded="false" aria-controls="collapseExample">Quem somos</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="http://10.200.7.15:8080/Biblivre5/ ">Biblivre - Catalago online</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="http://localhost:8000/memorial">Memorial Virtual</a>
                          </li> 
                          <li class="nav-item">
                            <a class="nav-link" href="http://localhost:8000/publica%C3%A7%C3%B5es">Publicações</a>
                          </li> 
                          <li class="nav-item" role="presentation">
                            <a class="nav-link" id="books-tab" data-toggle="tab" href="#books" role="tab" aria-controls="books" aria-selected="false">E-books</a>
                          </li>
                          <li class="nav-item" role="presentation">
                            <a class="nav-link"id="repository-tab" data-toggle="tab" href="#repository" role="tab" aria-controls="repository" aria-selected="false">Repositorio Institucional</a>
                          </li>
                          <li class="nav-item" role="presentation">
                            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="true">Contatos</a>
                          </li>
                      </ul>
                      </div>
                    <div class="collapse" id="collapseExample">{{--<== collapse --}}
                      <div class="card card-body">
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
                        <div class="btn-group" role="group">
                          <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Serviços
                          </button>
                          <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                            <a class="dropdown-item" href="#">Ficha catalográfica ISBN</a>
                            <a class="dropdown-item" href="#">Apoio à pesquisa</a>
                            <a class="dropdown-item" href="#">Empréstimo de obras</a>
                            <a class="dropdown-item" href="#">Agendamento de horário para sala sala de estudo/reunião</a>
                            <a class="dropdown-item" href="#">Fontes de informação</a>
                          </div>
                        </div>
                        <br>
                        <br>
                        <div class="btn-group" role="group">
                          <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Produtos
                          </button>
                          <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                            <a class="dropdown-item" href="#">Treinamentos</a>
                            <a class="dropdown-item" href="#">Resumo de Atos Normativos</a>
                            <a class="dropdown-item" href="#">Boletim iformativo</a>
                          </div>
                        </div>
                        <div class="row justify-content-center">
                          <img class="card col-8" src="work.png"> {{-- <== imagem do layout --}} 
                        </div>
                  </div>   
  

</body>
@endsection
