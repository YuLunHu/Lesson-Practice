<?php
  
    echo "flag 1<br>";
    @require("MyLibrary.php"); //加了@會讓錯誤不提示，但程式依舊會停在這裡
    echo "flag 2<br>";

    // phpinfo();

?>