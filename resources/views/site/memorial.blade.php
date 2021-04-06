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
                    <a class="nav-link" href="#">Contatos</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Creditos</a>
                  </li>   
              </ul> 
            </span>
          </div>
          <div>
             {{-- carrosssel --}}
             
          </div>
      </div> {{-- div do corpo principal --}}
    </div>
</div>
@endsection

