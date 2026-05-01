<?php
// Looping for
for($x=10; $x>=1; $x--){
    echo "<br>$x";
}

for($x=1; $x<=10; $x++){
    echo "<br>$x";
}
echo "<hr>";
// looping while
$y=1;
while($y<=10){
    echo "<br>$y";
    $y++;
}

echo "<hr>";
?>

<form>
    Jumlah Anak:
    <?php
    for ($i = 1; $i <= 10; $i++) {
        echo "<input type='radio' name='jumlah' value=$i'>";
    }
    ?>
</form>