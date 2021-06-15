<ul>
    <li<?php if ($currentPage=="Index") 
echo " class=\"active\""; ?>><a href="index.php">Úvod</a></li>
    <li<?php if ($currentPage=="Aplikace") 
echo " class=\"active\""; ?>> <a href="apps.php">Aplikace</a></li>
    <li<?php if ($currentPage=="Info") 
echo " class=\"active\""; ?>> <a href="info.php">O mně</a></li>
    <li<?php if ($currentPage=="Kontakt") 
echo " class=\"active\""; ?>><a href="contact.php">Kontakt</a></li>
</ul>