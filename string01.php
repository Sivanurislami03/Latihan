<?php
echo 'this is a simple string';

echo 'You can also have embedded newlines in
strings this way as it is 
okay to do';

//outputs: Arnold once said: "I'll be back"
echo 'Arnold once said: "I\'ll be back"';

//outputs: You delected C:\*.*?
echo 'You delected C:\\*.*?';

//outputs: You delected C:\*.*?
echo 'You delected C:\*.*?';

//outpust: This will not expand: \n a newline
echo 'This will not expand: " \n a newline';

//outputs: Variables do not $expand $either
echo 'Variables do not $expand $either';
?>