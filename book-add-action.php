<?php
    require_once("Config/Autoload.php");

    use Repository\BookRepository as BookRepository;
    use Model\Book as Book;

    if($_POST)
    {
        //isset determina si una variable esta definida y no es null y guarda en variables los datos post
        $id = isset($_POST["id"]) ? $_POST["id"] : "";
        $title = isset($_POST["title"]) ? $_POST["title"] : "";
        $author = isset($_POST["author"]) ? $_POST["author"] : "";
        $genre = isset($_POST["genre"]) ? $_POST["genre"] : "";
        $format = isset($_POST["format"]) ? $_POST["format"] : "";

        $Book = new Book();
        $Book->setid($id);
        $Book->settitle($title);
        $Book->setauthor($author);
        $Book->setgenre($genre);
        $Book->setformat($format);

        $BookRepository = new BookRepository();

        /* Punto donde pide validar que el ID sea unico. Preguntar
        $array = $BookRepository->GetAll();
        foreach($array as $libro){
            if ($Book->getId() == $libro->getId()){
                echo("los ID son iguales, no se puede agregar");
            }
        }*/
        
        $BookRepository->Add($Book);        
    }

    header("location:add-form.php");
?>