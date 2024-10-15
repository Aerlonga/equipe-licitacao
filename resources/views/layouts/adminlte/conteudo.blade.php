 <!-- Conteúdo da Página -->
 <div class="content-wrapper">
     <!-- Cabeçalho de Conteúdo -->
     <div class="content-header">
         <div class="container">
             <div class="row mb-2">
                 <div class="col-sm-6">
                     <h1 class="m-0"> @yield('titulo-pagina') </h1>
                 </div>
             </div>
         </div>
     </div>
     <!-- Conteúdo Principal -->
     <section class="content">
         <div class="container">
             @yield('conteudo-pagina')
         </div>
     </section>
 </div>
