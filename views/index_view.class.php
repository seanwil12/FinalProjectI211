<?php
/*
 * Author: Louie Zhu
 * Date: 3/28/2022
 * Name: index_view.class.php
 * Description: the parent class for all view classes. The two functions display page header and footer.
 */

class IndexView {

    //this method displays the page header
    static public function displayHeader($page_title) {
        ?>
       <!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link type="text/css" rel="stylesheet" href="www/css/bookstorestyle.css" />
        <title><?php echo $page_title; ?></title>
    </head>
    <body>
        <div id="wrapper">
            <div class="topnav">
                <a href="index.php">Home</a>
                <a href="listbooks.php">Catalog</a>
                <a href="loans.php">Past Loans</a>
                <div class="topnav-right">
                    <?php
                    if (isset($_SESSION['permissions_id'])) {
                        if($_SESSION['permissions_id'] == 4){
                            echo "<a href=\"admin.php\">Admin</a>";
                        }
                    }
                    ?>
                    <a href="cart.php">Cart <?php if($count > 0) {echo "(", $count, ")";} ?></a>
                    <?php
                    if ($_SESSION['login_status'] == 1) {
                    echo "<a href=\"loginform.php\">Logged in as: ", $_SESSION['login_id'], "</a>";
                    } else {
                        echo "<a href=\"registerform.php\">Register</a>";
                    }
                    ?>
                </div>
            </div>
            <table id="banner">
                <tr>
                    <td>
                        <img src="www/img/logo.png" alt="Bookstore">
                    </td>
                    <td class="title" align="left">
                        <div id="maintitle"></div>
                        <div id="subtitle"></div>
                    </td>
                    <td class="search" align="right">
                        <div class="search-container">
                            <form name="search" method="get" action="booksearch.php">
                                <input type="text" placeholder="Search our library.." name="search">
                                <input type="image" src="www/img/buttons/btnsearch.png" alt="Add Book" />
                            </form>
                        </div>
                    </td>
                </tr>
            </table>
            <!-- main content body starts -->
            <div id="mainbody">
                    <?php
                }//end of displayHeader function
                
                //this method displays the page footer
                public static function displayFooter() {
                    ?>
                    </div>
                    <div id="footer">
                        &copy <?php echo date("Y") ?> PHP Library System. All Rights Reserved.
                    </div>
                    </div>

                    </body>
                    </html>
        <?php
    } //end of displayFooter function
}
