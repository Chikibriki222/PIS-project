<?php
if (isset($_POST["name"]) && isset($_POST["author"]) && isset($_POST["album"]) && isset($_POST["time"]) && isset($_POST["image"])) {
    $conn = mysqli_connect("localhost", "t988368n_muz", "Danil115155!", "t988368n_muz");
    if (!$conn) {
        die("Ошибка: " . mysqli_connect_error());
    }
    $name = mysqli_real_escape_string($conn, $_POST["name"]);
    $author = mysqli_real_escape_string($conn, $_POST["author"]);
    $album = mysqli_real_escape_string($conn, $_POST["album"]);
    $time = mysqli_real_escape_string($conn, $_POST["time"]);
    $image = mysqli_real_escape_string($conn, $_POST["image"]);
    $sql = "INSERT INTO song (Name, Author, Album, Time, Image) VALUES ('$name', '$author', '$album', '$time', '$image')";
        if(mysqli_query($conn, $sql)){
        header("Location: add.php");
    } else{
        echo "Ошибка: " . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>