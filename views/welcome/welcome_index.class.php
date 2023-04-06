<?php
/*
 * Author: Louie Zhu
 * Date: 3/28/2022
 * Name: index.class.php
 * Description: This class defines the method "display" that displays the home page.
 */

class WelcomeIndex extends IndexView {

    public function display() {
        //display page header
        parent::displayHeader("Kung Fu Panda Media Library Home");
        ?>    
        <div id="main-header">Welcome to KUNG FU PANDA Media Library!</div>
        <p>This application is designed to demonstrate the popular software design pattern named MVC. The application hosts four different media types: movie, book, music cd, and game. The movie library is complete. The partially completed book, cd, and game libraries are to show how easy it is to host additional media objects. The application is meant to be flexible and extensible.</p>
        <br>
        <table style="border: none; width: 700px; margin: 5px auto">
            <tr>
                <td colspan="2" style="text-align: center"><strong>Major features include:</strong></td>
            </tr>
            <tr>
                <td style="text-align: left">
                    <ul>
                        <li>List all media</li>
                        <li>Display details of specific media</li>
                        <li>Update or delete existing media</li>
                        <li>Add new media</li>
                    </ul>
                </td>
                <td style="text-align: left">
                    <ul>
                        <li>Search for media</li>
                        <li>Autosuggestion</li>
                        <li>Filter media</li>
                        <li>Sort media</li>
                        <li>Pagination</li>
                    </ul></td>
            </tr>
        </table>

        <br>

        <div id="thumbnails" style="text-align: center; border: none">
            <p>Click an image below to explore a library. Click the logo in the banner to come back to this page.</p>

            <a href="<?= BASE_URL ?>/movie/index">
                <img src="<?= BASE_URL ?>/www/img/movies.jpg" title="Movie Library"/>
            </a>
            <a href="<?= BASE_URL ?>/book/index">
                <img src="<?= BASE_URL ?>/www/img/books.jpg" title="Book Library"/>
            </a>
            <a href="#">
                <img src="<?= BASE_URL ?>/www/img/games.jpg" title="Game Library" />
            </a>
            <a href="#">
                <img src="<?= BASE_URL ?>/www/img/music.jpg" title="Music Library (Under Construction)" />
            </a>
        </div>
        <br>
        <p style="text-align: center; color: red; font-weight: bold">Disclaimer</p>
        <p style="font-style: italic">This application is created as a course project for I211. It is solely for teaching and learning purposes. As a course project, the goal is to learn how to do things, but not to get things done. Therefore, the code used in this project may not be most efficient or most effective. Furthermore, the code has not been tested in any production environment. If you want to use any code in this project in any production environment, use it at your own risk.</p><br>
        <p >Please email <a href="mailto:louizhu@iupui.edu?Subject=Thank%20you">Louie Zhu</a> or call (317) 278-9536 for questions, comments, or reporting bugs. </p>

        <?php
        //display page footer
        parent::displayFooter();
    }

}
