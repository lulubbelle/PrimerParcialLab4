<?php
    namespace Repository;

    use Model\Book as Book;

    interface IRepository
    {
        function Add(Book $value);
        function GetAll();
    }
?>