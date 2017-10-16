<?php

setCookie("panier[cookie1]", 0, time()+3600);
setCookie("panier[cookie2]", 0, time()+3600);
setCookie("panier[cookie3]", 0, time()+3600);
setCookie("panier[cookie4]", 0, time()+3600);

header("location: index.php");