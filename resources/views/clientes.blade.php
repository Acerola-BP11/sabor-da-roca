@extends('layouts.main')
@section('content')
  <!-- Start Latest News -->
  <section id="mu-latest-news">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-latest-news-area">
            <div class="mu-title">
              <span class="mu-subtitle">Nossos Clientes</span>
              <h2>NOSSOS PRINCIPAIS CLIENTES</h2>
              <i class="fa fa-spoon"></i>              
              <span class="mu-title-bar"></span>
            </div>
            <div class="mu-latest-news-content">
              <div class="row">
                <!-- start single blog -->
                <div class="col-md-6">
                  <article class="mu-news-single">
                    <h3><a href="#">Americanas</a></h3>
                    <figure class="mu-news-img">
                      <a href="https://empresas.americanas.com.br/"><img src="/img/news/1.png" alt="img"></a>                      
                    </figure>
                    <div class="mu-news-single-content">                      
                      <ul class="mu-meta-nav">
                        <li>By Admin</li>
                        <li>Date: May 10 2016</li>
                      </ul>
                      <p>As Lojas Americanas são uma rede varejista popular no Brasil, conhecida por sua variedade de produtos, preços competitivos e conveniência.</p>
                      <div class="mu-news-single-bottom">
                        <a href="https://empresas.americanas.com.br/" class="mu-readmore-btn">Leia Mais</a>
                      </div>
                    </div>                   
                  </article>
                </div>
                <!-- start single blog -->
                <div class="col-md-6">
                  <article class="mu-news-single">
                    <h3><a href="https://www.casasbahia.com.br/">Casas Bahia</a></h3>
                    <figure class="mu-news-img">
                      <a href="#"><img src="/img/news/2.png" alt="img"></a>                      
                    </figure>
                    <div class="mu-news-single-content">                      
                      <ul class="mu-meta-nav">
                        <li>By Admin</li>
                        <li>Date: May 10 2016</li>
                      </ul>
                      <p>As Casas Bahia são uma rede varejista tradicional no Brasil, conhecida por sua variedade de produtos, preços acessíveis e serviços de entrega e montagem.</p>
                      <div class="mu-news-single-bottom">
                        <a href="https://www.casasbahia.com.br/" class="mu-readmore-btn">Leia Mais</a>
                      </div>
                    </div>                   
                  </article>
                </div>
              </div>
         
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Latest News -->

@endsection