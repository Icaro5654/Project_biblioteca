@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h3><b>Bem vindo ao Biblivre</b></h3></div>

                <body class="text-center">
    
                    <main class="form-signin">
                      <form>
                        <img class="mb-4" src="SES-AM.png" alt="" width="72" height="57">
                        <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
                        <label for="inputEmail" class="visually-hidden">Email address</label>
                        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
                        <label for="inputPassword" class="visually-hidden">Password</label>
                        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                        <div class="checkbox mb-3">
                          <label>
                            <input type="checkbox" value="remember-me"> Remember me 
                          </label>
                        </div>
                        <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
                        <p class="mt-5 mb-3 text-muted">&copy;2021</p>
                      </form>
                    </main>
                    
                    
                        
                      </body>


                      
            </div>


        </div>
    </div>
</div>
@endsection
