<?php
     include('header.php');
     include('nav.php');

     require_once("Config/Autoload.php");

     session_start();

     if(!isset($_SESSION["loggedUser"]))
          header("location:index.php");

     use Repository\BookRepository as BookRepository;
     use Model\Book as Book;

     $bookRepository = new BookRepository();

     $bookList = $bookRepository->GetAll();
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
                         <?php
                              foreach($bookList as $book)
                              {
                                   ?>
                                        <tr>
                                             <td><?php echo $book->getId() ?></td>
                                             <td><?php echo $book->getTitle() ?></td>
                                             <td><?php echo $book->getAuthor() ?></td>
                                             <td><?php echo $book->getGenre() ?></td>
                                             <td><?php echo $book->getFormat() ?></td>
                                        </tr>
                                   <?php
                              }
                         ?>                         
                    </tbody>
               </table>
          </div>
     </section>
</main>

<?php include('footer.php') ?>
