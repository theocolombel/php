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
    ['nom'=>'michel','prix'=>100,'image'=>'https://upload.wikimedia.org/wikipedia/commons/thumb/b/b7/Michel_Cremades.jpg/220px-Michel_Cremades.jpg'],
    ['nom'=>'michelle','prix'=>200,'image'=>'https://resize-pdm.francedimanche.ladmedia.fr/rcrop/635,500/img/2019-12/bestimage-00452755-000012.jpg?version=v1'],
    [ 'nom'=>'michou','prix'=>3000000, 'image'=>"https://fac.img.pmdstatic.net/fit/http.3A.2F.2Fprd2-bone-image.2Es3-website-eu-west-1.2Eamazonaws.2Ecom.2Ffac.2F2019.2F09.2F11.2F1ff4639c-ed14-4cd0-aa9c-6466ed01f854.2Ejpeg/737x415/quality/90/crop-from/center/focus-point/1480%2C1802/michel-cymes-un-ex-confrere-balance-sur-le-medecin-prefere-des-francais.jpeg"],
];
foreach($info as $i){
    echo '<table>';
echo '<tr>';
echo '<img src="' .$i['image'].'"/>';
echo '<td> '.$i ['nom'].'</td>';
echo '<td> '.'<p>'.$i ['prix'].'euros'.'</p>'.'</td>';
echo '</tr>';
}
?>

</body>

</html>