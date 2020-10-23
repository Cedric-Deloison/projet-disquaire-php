<?php

include "classes/page.php";
include "inc/config.php";


$ma_page = new Page();


$ma_page->prepare();

echo $ma_page;
