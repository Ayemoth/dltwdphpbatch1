<?php
echo "<title>Greeting</title>";

$hr=20;


?>
<html>
<head></head>
<body>
<?php
if ($hr<12){
    echo "Good Morning";
}elseif ($hr<18){
    echo "Good Afternoon";
}elseif ($hr<22){
    echo "Good Evening";
}else{
    echo "Good Night";
}
?>

<?php
echo "
<div id='top'>
<a href='#p1'>Paragraph1</a><a href='#p2'>Paragraph2</a><a href='#p3'>Paragraph3</a><a href='#p4'>Paragraph4</a><a href='#p5'>Paragraph5</a><a href='#p6'>Paragraph6</a>
</div>
<div>
<h3 id='p1'>Paragraph1</h3>
<p>
Lorem Ipsum is simply dummy text of the printing and typesetting industry.
Lorem Ipsum is simply dummy text of the printing and typesetting industry.
Lorem Ipsum is simply dummy text of the printing and typesetting industry.
</p><br/>
<h3 id='p2'>Paragraph2</h3>
<p>
Lorem Ipsum is simply dummy text of the printing and typesetting industry.
Lorem Ipsum is simply dummy text of the printing and typesetting industry.
Lorem Ipsum is simply dummy text of the printing and typesetting industry.
</p><br/>
<h3 id='p3'>Paragraph3</h3>
<p>
Lorem Ipsum is simply dummy text of the printing and typesetting industry.
Lorem Ipsum is simply dummy text of the printing and typesetting industry.
Lorem Ipsum is simply dummy text of the printing and typesetting industry.
</p><br/>
<h3 id='p4'>Paragraph4</h3>
<p>
Lorem Ipsum is simply dummy text of the printing and typesetting industry.
Lorem Ipsum is simply dummy text of the printing and typesetting industry.
Lorem Ipsum is simply dummy text of the printing and typesetting industry.
</p><br/>
<h3 id='p5'>Paragraph5</h3>
<p>
Lorem Ipsum is simply dummy text of the printing and typesetting industry.
Lorem Ipsum is simply dummy text of the printing and typesetting industry.
Lorem Ipsum is simply dummy text of the printing and typesetting industry.
</p><br/>
<h3 id='p6'>Paragraph6</h3>
<p>
Lorem Ipsum is simply dummy text of the printing and typesetting industry.
Lorem Ipsum is simply dummy text of the printing and typesetting industry.
Lorem Ipsum is simply dummy text of the printing and typesetting industry.
</p><br/>
<a href='#top'>Go Top</a>
</div>"



?>
</body>
<footer></footer>
</html>