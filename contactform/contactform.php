<?php 
function invia_mail() { // indirizzo di chi riceve la mail Ã¨ sottolineato ma nel codice non sottilineatelo 
if ((trim($_POST['object']) != "") && (trim($_POST['body']) != "")) { //questo fa si che se i campi "oggetto" e "messaggio" sono vuoti la form non invia nessuna mail 
$to = " \n v.pontillo92@gmail.com"; $headers = "From: " . $_POST['mail'] . "\n"; // soggetto della mail 
$subject = "Modulo proveniente da www.ingiustadetenzione.it"; // corpo messaggio 
$body = "Contenuto del modulo:\n\n"; 
$body .= "Inviata da: " . trim(stripslashes($_POST["mail"])) . "\n"; //indirizzo e-mail che manda la mail, come si vede riprende l'id del campo destinato all'inserimento della mail del mittente
$body .= "Oggetto: " . trim(stripslashes($_POST["object"])) . "\n"; //oggetto del messaggio 
$body .= "testo: " . trim(stripslashes($_POST["body"])) . "\n"; //messaggio 


// invio mail 
mail($to, $subject, $body, $headers); // SE L'INOLTRO E' ANDATO A BUON FINE...
 //echo "Il messaggio &egrave stato inviato correttamente";
 }
 else {// altrimenti 
 echo "<span style=\"color: white\">Attenzione, compilare tutti i campi per favore!</span>"; } 
 } 
 if(isset($_POST['invia_la_mail'])) invia_mail(); ?>
</div><!--fine div domanda--> 