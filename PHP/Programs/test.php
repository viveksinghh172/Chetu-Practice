<?php
  
  $x = 8 - 6.4;
  $y = 1.6;
  echo gettype($x == $y);


  // String Implementation

    echo 'this is a simple string';

    echo 'You can also have embedded newlines in
    strings this way as it is
    okay to do';

    // Outputs: Arnold once said: "I'll be back"
    echo 'Arnold once said: "I\'ll be back"';

    // Outputs: You deleted C:\*.*?
    echo 'You deleted C:\\*.*?';

    // Outputs: You deleted C:\*.*?
    echo 'You deleted C:\*.*?';

    // Outputs: This will not expand: \n a newline
    echo 'This will not expand: \n a newline';

    // Outputs: Variables do not $expand $either
    echo 'Variables do not $expand $either';

?>