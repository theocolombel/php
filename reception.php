<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Titre de la page</title>
  <link rel="stylesheet" href="style.css">
  <script src="script.js"></script>
</head>
<body>
<?php $info = [
    ['nom'=>'michel','prix'=>100,'image'=>'./drucker.jpg'],
    ['nom'=>'michelle','prix'=>200,'image'=>'./polnareff.jpg'],
    [ 'nom'=>'michou','prix'=>3000000, 'image'=>'./sardou.jpg'],
];
$nom=$_GET['nom'];
foreach($info as $i){
if($i['nom'] == $nom){
    
echo '<div class="tout">';

echo '<div class="img">';
echo '<img src="' .$i['image'].'"/>';

echo '</div>';
echo '<div class ="blaze"> '.$i ['nom'].'</div>';
echo '<div class="cout"> '.'<p>'.$i ['prix'].'euros'.'</p>'.'</div>';
echo '</div>';
}
}
?>
</body>
</html>
