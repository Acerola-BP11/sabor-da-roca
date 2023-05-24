@extends('layouts.main')
@section('content')
<!-- Start Reservation section -->

<section id="mu-reservation">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-reservation-area">
            <div class="mu-title">
              <h2>Cadastrar</h2>
              <h2>Marmitex</h2>
              <i class="fa fa-spoon"></i>              
              <span class="mu-title-bar"></span>
            </div>
            <div class="mu-reservation-content">
              <p>Insira os campos abaixo para concluir o cadastro do marmitex</p>
              <form class="mu-reservation-form">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">                       
                      <input type="number" class="form-control" placeholder="Preço">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <select class="form-control">
                        <option value="0">Tamanho</option>
                        <option value="1 Person">Pequeno</option>
                        <option value="2 People">Medio</option>
                        <option value="3 People">Grande</option>
                        <option value="4 People">Todos</option>
                      </select>                      
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">                        
                      <input type="number" class="form-control" placeholder="Tara">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <input type="text" class="form-control" id="datepicker" placeholder="Data">              
                    </div>
                  </div>
                  <div class="col-md-12">
                  <select class="js-example-basic-multiple" name="states[]" multiple="multiple">
                    <option value="batata">Batata</option>
                    <option value="maça">Maça</option>
                  </select>
                  </div>
                  <button type="submit" class="mu-readmore-btn">Cadastrar Marmitex</button>
                </div>
              </form>      
            </div>
          </div>
        </div>
      </div>
    </div>
    <script type='text/javascript' src='/js/select.js'></script>
  </section>  
  <!-- End Reservation section -->
  @endsection