<?php
include('header.php');
include('nav.php');
?>
<main class="py-5">
     <section id="listado" class="mb-5">
          <div class="container">
               <h2 class="mb-4">Listado de Libros</h2>

               <table class="table bg-light">
                    <thead class="bg-dark text-white">
                         <th>Id</th>
                         <th>Titulo</th>
                         <th>Autor</th>
                         <th>Genero</th>
                         <th>Formato</th>
                    </thead>
                    <tbody>
                         <tr>
                              <td>Id</td>
                              <td>Titulo</td>
                              <td>Autor</td>
                              <td>Genero</td>
                              <td>Formato</td>
                         </tr>
                         <tr>
                              <td>Id</td>
                              <td>Titulo</td>
                              <td>Autor</td>
                              <td>Genero</td>
                              <td>Formato</td>
                         </tr>                         
                    </tbody>
               </table>
          </div>
     </section>
</main>

<?php include('footer.php') ?>
