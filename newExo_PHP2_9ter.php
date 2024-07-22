<?php
// afficherRadio($nomsRadio){
//     echo
// }
?>
<h1>Affichage</h1>
<input type="radio" name="gender"
<?php if (isset($gender) && $gender=="Masculin") echo "checked";?>
value="Masculin">Male<br>

<input type="radio" name="gender"
<?php if (isset($gender) && $gender=="male") echo "checked";?>
value="Féminin">Female<br>

<input type="radio" name="gender"
<?php if (isset($gender) && $gender=="other") echo "checked";?>
value="Autre">Other



<!--                                        A VOIR

 https://www.homeandlearn.co.uk/php/php4p10.html
https://www.webcodegeeks.com/php/php-radio-button-example/
-->