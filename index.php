<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Learning php classes & object</title>
    <style media="screen">
    body {
      text-align: center;
    }
      h1 {
        background: lightgrey;
      }
    </style>
  </head>
  <body>
    <h1>Learning php classes & object</h1>
    <?php
    class Book {
      public $title;
      public $author;
      public $pages;

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
      public $title;
      public $author;
      public $pages;

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

    <br>
    <br>
    <hr>

    <h1>Learning Object Functions</h1>

    <?php
      class Student{
        public $name;
        public $major;
        public $gpa;

        function __construct($name, $major, $gpa) {
          $this->name = $name;
          $this->major - $major;
          $this->gpa = $gpa;
        }

        function hasHonors() {
          if ($this->gpa > 3.5) {
            return "has honors";
          }
          else {
            return "doesnt have honors";
          }
        }
      }

      $student1 = new Student("Ranjan", "Business", 4.2);
      $student2 = new Student("Tom", "Art", 3.2);
     ?>
     <p>Student <?php echo $student1->name . " " .$student1->hasHonors() . ".";?></p>
     <p>Student <?php echo $student2->name . " " .$student2->hasHonors() . ".";?></p>

     <br>
     <br>
     <hr>

     <h1>Learning Getters & Setters</h1>
     <?php
       class Movie {
         public $title;
         private $rating;

         function __construct($title, $rating) {
           $this->title = $title;
           $this->setRating($rating);
         }

         function getRating() {
           return $this->rating;
         }

         function setRating($rating) {
           if ($rating === "G" ||  $rating === "PG" || $rating === "PG-13" || $rating === "R" || $rating === "NR") {
             $this->rating = $rating;
           }else {
             $this->rating = "NR (Not Rated)";
           }
         }
       }

       function checkVal() {
         if (isset($_GET['submit'])) {
           return $_GET['rate'];
         }else {
           return "Dog";
         }
       }
       $avengers = new Movie("Avengers", checkVal());
      ?>
      <h2>Rate <u>Avengers</u> movie</h2>
      <p>Ratings:  G, PG, PG-13, R, NR</p>

      <form  action="index.php" method="get">
        Rate: <input type="text" name="rate">
        <input type="submit" name="submit" value="Submit">
      </form>
      <p><?php echo "Your rating is: ".$avengers->getRating();?></p>

  </body>
</html>
