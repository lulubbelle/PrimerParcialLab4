<?php
include('header.php');
include('nav.php');

//proteger el resto de las paginas
session_start();
if(!isset($_SESSION["loggedUser"]))
     header("location:index.php");
?>

<main class="py-5">
     <section id="listado" class="mb-5">
          <form action="book-add-action.php" method="post">
          <div class="container">
               <h3 class="mb-3">Agregar Libro</h3>

               <div class="bg-light p-4">
                    <div class="row">
                         <div class="col-lg-4">
                              <label for="">Id</label>
                              <input type="number" name="id" class="form-control form-control-ml" required value="">
                         </div>                         

                         <div class="col-lg-4">
                              <label for="">Titulo</label>
                              <input type="text" name="title" class="form-control form-control-ml" required value="">
                         </div>

                         <div class="col-lg-4">
                              <label for="">Autor</label>
                              <input type="text" name="author" class="form-control form-control-ml" required value="">
                         </div>

                         <div class="col-lg-4" >
                              <label for="">Genero</label>

                              <div class="form-group">
                                   <select name="genre" id="genre"  class="custom-select" required>
                                        <option>Informática</option>
                                        <option>Novela</option>
                                        <option>Historia</option>
                                   </select>
                              </div>                              
                         </div>                         

                         <div class="col-lg-4">
                              <label for="">Formato</label>
                              <div class="form-group">
                                   <label class="radio-inline">
                                        <input type="radio" name="format" value="Papel" checked required> Papel
                                   <label class="radio-inline">
                                   <label class="radio-inline">
                                        <input type="radio" name="format" value="Digital" required> Digital
                                   <label class="radio-inline">
                                   <label class="radio-inline">
                                        <input type="radio" name="format" value="Ambos" required> Ambos
                                   <label class="radio-inline">
                              </div>         
                         </div>

                         <div class="col-lg-4">
                              <span>&nbsp;</span>
                              <button type="submit" name="" class="btn btn-primary ml-auto d-block">Agregar</button>
                         </div>

                    </div>                    
               </div>
          </div>
          </form>
     </section>
</main>
<?php include('footer.php') ?>
