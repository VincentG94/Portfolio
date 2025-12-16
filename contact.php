<?php
if (!empty($_POST)) {
    $to = "vincent@guignon.fr";
    $subject = "Contact Portfolio";
    $message = $_POST['nom'] . " (" . $_POST['email'] . ")\n\n" . $_POST['message'];
    mail($to, $subject, $message);
    header('Location: index.html#contact');
} else {
    echo "No mail sent.";
}

?>