<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Learning php classes & object</title>
  </head>
  <body>
    <h1>Learning php classes & object</h1>
    <?php
    class Book {
      var $title;
      var $author;
      var $pages;

    }

    $book1 = new Book("Harry Potter");
    $book1->title = "Harry Potter";
    $book1->author = "JK Rowling";
    $book1->pages = 400;

    $book2 = new Book("Lord of the Rings");
    $book2->title = "Lord of the Rings";
    $book2->author = "Tolkien";
    $book2->pages = 700;

    ?>
    <h2><?php echo $book1->title; ?></h2>
    <p>Book author: <?php echo $book1->author; ?></p>
    <p>Pages: <?php echo $book1->pages; ?></p>

    <br>
    <br>
    <h2><?php echo $book2->title; ?></h2>
    <p>Book author: <?php echo $book2->author; ?></p>
    <p>Pages: <?php echo $book2->pages; ?></p>

    <br>
    <br>
    <hr>
    <h1>Learning Constructor</h1>

    <?php
    class Book2{
      var $title;
      var $author;
      var $pages;

      function __construct($title, $author, $pages) {
        $this->title = $title;
        $this->author = $author;
        $this->pages = $pages;
      }
    }

    $book21 = new Book2("Harry Potter", "JK Rowling", 400);
    $book22 = new Book2("Lord of the Rings", "Tolkien", 700);
    ?>

    <h2><?php echo $book21->title; ?></h2>
    <p>Book author: <?php echo $book21->author; ?></p>
    <p>Pages: <?php echo $book21->pages; ?></p>

    <br>
    <br>
    <h2><?php echo $book22->title; ?></h2>
    <p>Book author: <?php echo $book22->author; ?></p>
    <p>Pages: <?php echo $book22->pages; ?></p>
  </body>
</html>
