<?php

function cowsay($message) {
    $bubbleLines = wordwrap($message, 40, "\n   ", true);

    $cow = "
         < $bubbleLines >
          \ /
           V
        / \\__
       (    @\\___
       /         O
      /   (_____/
     /_____/   U
    /       /      
   /      /
   ______/
    ";

    echo "$cow";
}

$message = readline(" ");
cowsay($message);
