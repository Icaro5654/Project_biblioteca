@extends('layouts.app')

@section('content')
 {{-- TOPO --}}
<div class="container">
    <div class="row justify-content-center">
      <div class="shadow-lg p-3 mb-5 bg-white rounded">
        <img class="img-fluid col-12" src="mmrl.png">
          <div>
            <span class="border">
              <ul class="nav justify-content-center"  style="background-color: #011931;">{{-- abas do layout --}}
                <li class="nav-item">
                  <a class="nav-link active" href="#">Projetos</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">E-books</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Videos/Fotos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Entrevistas/Podcast</a>  
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Faça parte dessa história</a>    
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#collapseContatos" role="tab" aria-expanded="false" aria-controls="collapseContatos">Contatos</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Creditos</a>
                  </li>   
              </ul> 
              <div class="collapse multi-collapse" id="collapseContatos"  style="width: 50rem;">{{--Segundo Collapse--}}
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
         
      </div> {{-- div do corpo principal --}}
    </div>
</div>
@endsection

