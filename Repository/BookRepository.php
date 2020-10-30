<?php
    namespace Repository;

    use Repository\IRepository as IRepository;
    use Model\Book as Book;

    class BookRepository implements IRepository
    {
        private $bookList = array();
        private $fileName = "Data/Books.json";
        
        public function Add(Book $book)
        {
            $this->Retrieve();

            $this->AddOrdered1($book);

            $this->Save();
        }

        public function GetAll()
        {
            $this->Retrieve();

            return $this->bookList;
        }

        private function AddOrdered1(Book $book)
        {
            array_push($this->bookList, $book);
                        
            usort($this->bookList, function (Book $a, Book $b)
            {
                return strcmp(strtolower($a->getID()), strtolower($b->getID()));
            });
        }

        private function Save()
        {
            $arrayToEncode = array();
            
            foreach($this->bookList as $book)
            {                
                $valuesArray = array();
                $valuesArray["id"] = $book->getId();
                $valuesArray["title"] = $book->getTitle();
                $valuesArray["author"] = $book->getAuthor();
                $valuesArray["genre"] = $book->getGenre();
                $valuesArray["format"] = $book->getFormat();
                array_push($arrayToEncode, $valuesArray);
            }

            $jsonContent = json_encode($arrayToEncode, JSON_PRETTY_PRINT);

            file_put_contents($this->fileName, $jsonContent);
        }

        private function Retrieve()
        {
            $this->bookList = array();
            
            if(file_exists($this->fileName))
            {
                $jsonContent = file_get_contents($this->fileName);

                $arrayToDecode = ($jsonContent) ? json_decode($jsonContent, true) : array();

                foreach($arrayToDecode as $valuesArray)
                {
                    $book = new Book();
                    $book->setId($valuesArray["id"]);
                    $book->setTitle($valuesArray["title"]);
                    $book->setAuthor($valuesArray["author"]);
                    $book->setGenre($valuesArray["genre"]);
                    $book->setFormat($valuesArray["format"]);

                    array_push($this->bookList, $book);
                }
            }
        }
    }
?>