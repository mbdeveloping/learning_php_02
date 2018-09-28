<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Learning php classes & object</title>
  </head>
  <body>
    <h1>Books</h1>
    <?php
    class Book {
      var $title;
      var $author;
      var $pages;
    }

    $book1 = new Book;
    $book1->title = "Harry Potter";
    $book1->author = "JK Rowling";
    $book1->pages = 400;

    $book2 = new Book;
    $book2->title = "Lord of the Rings";
    $book2->author = "Tolken";
    $book2->pages = 700;
    //
    // echo $book1->title;
    // echo "<br>";
    // echo $book2->title;
    ?>
    <h2><?php echo $book1->title; ?></h2>
    <p>Book author: <?php echo $book1->author; ?></p>
    <p>Pages: <?php echo $book1->pages; ?></p>

    <br>
    <br>
    <h2><?php echo $book2->title; ?></h2>
    <p>Book author: <?php echo $book2->author; ?></p>
    <p>Pages: <?php echo $book2->pages; ?></p>
  </body>
</html>
