<?php
echo "<title>Include & Require Statement";

include "continuestatement.php";

echo "<hr/>";
echo "This is about the Include & Require Statement.<br/>";
echo "The difference between include and require is <strong><u>the way they handle errors.</u></strong><br/>"; 
echo "<br/>";
echo "Use <strong>require</strong> when the file is required for the application to run.<br/>";
echo "<br/>";
echo "Use <strong>include</strong> when the file is not required. The application should continue, even when the file is not found. <br/>";
echo "<br/>";
echo "require က error တက်ရင်ဆက်မလုပ်ဘူး<br/>";
echo "include က error တက်ခဲ့ရင်တောင်ဆက်လုပ်တယ်<br/>";

?>