<nav class="menu">
    <?php echo '<p class="welcome">Witaj <b> '.$actualUser->imie.'</b>!</p>' ?>
    <?php echo '<a class="logout" href="php/wyloguj.php">wyloguj</a>' ?>
    <ul>
        <li><a href="index.php">Strona główna</a></li>
        <li><a href="add_note.php">Dodaj notatke</a></li>
        <li><a href="notes_list.php">Lista notatek</a></li>
        <li> <a>Poradniki</a>
            <ul>
                <li><a href="about.html">z HTMLa</a></li>
                <li><a href="css_test.html">z CSSa</a></li>
                <li><a href="notes.php">z Javascriptu</a></li>
            </ul>
        </li>
        <li><a href="edit-user.php">Edytuj dane</a></li>
        <li><a href="settings.php">Ustawienia</a></li>
    </ul>
</nav>