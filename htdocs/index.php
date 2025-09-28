<?php
$files = scandir(__DIR__);

echo '<a class="phpmyadmin" href="http://localhost:8081">phpMyAdmin</a>';

foreach ($files as $file) {
    if ($file === '.' || $file === '..') continue;
    if (is_dir($file)) {
        echo "<li><b>[DIR]</b> <a href='$file'>$file</a></li>";
    }
}
echo "</ul>";
?>

<style>
body {
    background-color: #1a1b26; /* Tokyo Night background */
    color: #c0caf5; /* texte clair */
    font-family: 'Fira Code', monospace;
    padding: 20px;
}

a.phpmyadmin {
    display: inline-block;
    margin-bottom: 20px;
    padding: 5px 10px;
    border: 1px solid #7aa2f7;
    color: #7aa2f7;
    text-decoration: none;
    border-radius: 3px;
    transition: 0.2s;
}

a.phpmyadmin:hover {
    background-color: #7aa2f7;
    color: #1a1b26;
}

a {
    color: white;
    text-decoration: none;
}

a:hover {
    color: blue;
}

.file-list div {
    padding: 2px 0;
    line-height: 1.4em;
}

.dir {
    color: #9ece6a; /* vert Tokyo Night pour dossiers */
}

.file {
    color: #c0caf5; /* texte clair pour fichiers */
}

/* Optionnel: hover pour highlight */
.file-list div:hover {
    background-color: #414868;
    border-radius: 2px;
    cursor: default;
}
</style>

