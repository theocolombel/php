<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css"/>
<title>article</title>
</head>

<body>
<h1 style="text-align:center">La boutique à michel</h1>
<?php 
$info = [
    ['nom'=>'michel','prix'=>100,'image'=>'./drucker.jpg'],
    ['nom'=>'michelle','prix'=>200,'image'=>'./polnareff.jpg'],
    [ 'nom'=>'michou','prix'=>3000000, 'image'=>'./sardou.jpg'],
];
foreach($info as $i){
    
echo '<div class="tout">';
echo"<a href='reception.php?nom=".$i['nom']."'>";
echo '<div class="img">';
echo '<img src="' .$i['image'].'"/>';
echo '</div>';
echo "</a>";
echo '<div class ="blaze"> '.$i ['nom'].'</div>';
echo '<div class="cout"> '.'<p>'.$i ['prix'].'euros'.'</p>'.'</div>';
echo '</div>';
}
?>



</body>

</html>