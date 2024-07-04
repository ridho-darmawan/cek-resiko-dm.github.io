<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $n1 = htmlspecialchars($_POST['n1']);
    $n2 = htmlspecialchars($_POST['n2']);
    $n3 = htmlspecialchars($_POST['n3']);
    $n4 = htmlspecialchars($_POST['n4']);
    $n5 = htmlspecialchars($_POST['n5']);
    $n6 = htmlspecialchars($_POST['n6']);
    $n7 = htmlspecialchars($_POST['n7']);
    $n8 = htmlspecialchars($_POST['n8']);
    $n9 = htmlspecialchars($_POST['n9']);
    $n10 = htmlspecialchars($_POST['n10']);

    // Hitung skor
    $skor = $n1 + $n2 + $n3 + $n4 + $n5 + $n6 + $n7 + $n8 + $n9 + $n10;

    // Alamat email tujuan
    $to = "ridhodarmawan255@gmail.com"; // Ganti dengan alamat email Anda
    $subject = "New Form Submission";
    $body = "1. Apakah Nafsu Makan Anda Meningkat akhir-akhir ini?: $n1\n" .
            "2. Apakah Anda Lebih Sering Buang Air Kecil?: $n2\n" .
            "3. Apakah Anda Sering Merasa Haus?: $n3\n" .
            "4. Apakah Berat Badan Anda Menurun Meskipun nafsu Makan Besar?: $n4\n" .
            "5. Apakah Belakangan Ini Anda Merasa lelah Sepanjang Hari?: $n5\n" .
            "6. Apakah Anda Merasa Kesemutan di kaki dan Jari-jari atau ada sensasi mati rasa?: $n6\n" .
            "7. Apakah Anda Mengalami infeksi lebih sering daripada sebelumnya?: $n7\n" .
            "8. Apakah Penglihatan Anda menjadi Kabur?: $n8\n" .
            "9. Apakah Luka Tubuh Badan Anda Lama Sembuh?: $n9\n" .
            "10. Apakah Anda Sering Uring-uringan atau depresi Akhir-akhir Ini?: $n10\n\n" .
            "Total Skor: $skor";

    // Header email
    $headers = "From: no-reply@example.com";

    // Kirim email
    if (mail($to, $subject, $body, $headers)) {
        echo "Email successfully sent to $to";
    } else {
        echo "Email sending failed...";
    }
} else {
    echo "Invalid request";
}
?>
