@extends('layouts.app')

@section('content')
 {{-- TOPO --}}
<div class="container">
    <div class="row justify-content-center">
      <div class="shadow-lg p-3 mb-5 bg-white rounded">{{-- div principal --}}
      
        <img class="img-fluid col-12" src="mmrl.png">
          <div>
            <span class="border">
             
              {{-- -----------------------------------------------------------------------------INICIO DO NAVBAR------------------------------------------------------------------------------------------------ --}}
              <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #125686;">
                <a class="navbar-brand text-light" href="#">Home</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button> 
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                      <a class="nav-link text-light" href="#">Projetos</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link text-light" href="#">E-books</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link text-light" href="#">Videos/Fotos</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link text-light" href="#">Entrevistas/Podcast</a>
                    </li> 
                    <li class="nav-item">
                      <a class="nav-link text-light" href="#">Faça parte de história</a>
                    </li> 
                    <li class="nav-item" role="presentation">
                      <a class="nav-link text-light" data-toggle="collapse" href="#collapseContatos" role="tab" aria-expanded="false" aria-controls="collapseContatos">Contatos</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link text-light" href="#">Creditos</a>
                    </li>
                  </ul>
                </div>
              </nav>

              {{----------------------------------------------------------------Collapse-------------------------------------------------------------}}
              <div class="collapse multi-collapse" id="collapseContatos"  style="width: 50rem;">
                <div class="card card-body">
                  <div>
                    <h3 class="page-header" style="text-align:left">Contatos</h3>{{--Inicio de Contatos--}}
                      <br>
                      <div align="center">
                      <form  method="post">
                        <label class="control-label">Setor </label>
                  
                        <select id="setor" name="setor" onchange="submit(this.form)">
                          <option selected>Selecione</option><option value='1'>Gabinete</option><option value='2'>Conselhos</option><option value='3'>Assessorias</option><option value='4'>Dep. Financeiro</option><option value='5'>Dep. Recursos Humanos</option><option value='6'>Dep. Logística</option><option value='7'>Sec. Exec. Adj. Tecnologia da Informação</option><option value='8'>Dep. Planejamento</option><option value='9'>Dep. Controle e Avaliação dos Serviços</option><option value='10'>Dep. Atenção Básica</option><option value='11'>Sec. Exec. Adj. Capital</option><option value='12'>Sec. Exec. Adj. Interior</option><option value='13'>Fundo Estadual de Saúde</option><option value='14'>Complexo Regulador</option>			</select>
                        <!--<input type="submit" name="pesquisar" value="Pesquisar" /> -->
                        </p>
                      </form>
                      <br>
                      <table align="center" class="table table-striped table-responsive" border="1">
                        <tr bgcolor="#EAEFDC">
                          <td align="center" class="titulo">Setor</td>
                          <td align="center" class="titulo">Responsável</td>
                          <td align="center" class="titulo">Telefone</td>
                          <td align="center" class="titulo">Email</td>
                        </tr>
                            </table>
                    </div>
                  </div>
                    {{--Fim de Contatos--}}
                </div>
              </div>
            </span>
          </div>
            <div class="card card-body">
              <p align="center"> <b> Mergulhe nessa história conosco!</b></p>

              A pagina do memorial virtual da Secretaria de Estado de Saúde do Amazonas foi pensada para que a historia da saude 
              <p> pública do Estado se mantenha viva, além de organizar a trajetória da historia da Secretaria de Estado de Saúde.<br>
                Lançado no dia XX de XXXX de 2021 pela SES-AM, contará com fases XXXXX.

               

            </div>
              <br>
              <h3 align="center" style="color:#05407b"> <b>Linha do tempo da saúde no Amazonas</h3>
         
      </div> {{-- div do corpo principal --}}
    </div>
</div>
@endsection