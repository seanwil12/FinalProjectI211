<?php
/*
 * Author: Louie Zhu
 * Date: 3/28/2022
 * Name: index.class.php
 * Description: This class defines a method called "display", which displays all movies.
 */
class MovieIndex extends MovieIndexView {
    /*
     * the display method accepts an array of movie objects and displays
     * them in a grid.
     */

    public function display($movies) {
        //display page header
        parent::displayHeader("List All Movies");
        ?>
        <div id="main-header"> Movies in the Library</div>

        <div class="grid-container">
            <?php
            if ($movies === 0) {
                echo "No movie was found.<br><br><br><br><br>";
            } else {
                //display movies in a grid; six movies per row
                foreach ($movies as $movie) {
                    $id = $movie->getId();
                    $title = $movie->getTitle();
                    $rating = $movie->getRating();
                    $release_date = new \DateTime($movie->getRelease_date());
                    $image = $movie->getImage();
                    if (strpos($image, "http://") === false AND strpos($image, "https://") === false) {
                        $image = BASE_URL . "/" . MOVIE_IMG . $image;
                    }

                    echo "<div class='item'><p><a href='", BASE_URL, "/movie/detail/$id'><img src='" . $image .
                    "'></a><span>$title<br>Rated $rating<br>" . $release_date->format('m-d-Y') . "</span></p></div>";

                }
            }
            ?>  
        </div>
       
        <?php
        //display page footer
        parent::displayFooter();
    } //end of display method
}
