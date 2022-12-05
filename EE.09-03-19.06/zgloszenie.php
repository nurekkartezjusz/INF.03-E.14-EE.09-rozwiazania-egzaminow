<?php
$polaczenie = mysqli_connect('localhost', 'root', "", 'wedkarstwo');
$zapytanie = "INSERT INTO wedkarstwo.zawody_wedkarskie(karty_wedkarskie_id, lowisko_id, data_zawodow, sedzia) VALUES (0, ".$_POST['lowisko'].", '".$_POST['data']."', '".$_POST['sedzia']."')";
mysqli_query($polaczenie, $zapytanie);
mysqli_close($polaczenie);
?>