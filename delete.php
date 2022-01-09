<?php
if(isset($_POST["id"]))
{
    $conn = mysqli_connect("localhost", "t988368n_muz", "Danil115155!", "t988368n_muz");
    if (!$conn) {
        die("Ошибка: " . mysqli_connect_error());
    }
    $userid = mysqli_real_escape_string($conn, $_POST["id"]);
    $sql = "DELETE FROM song WHERE SongID = '$userid'";
    if(mysqli_query($conn, $sql)){
        header("Location: index.php");
    } else{
        echo "Ошибка: " . mysqli_error($conn);
    }
    mysqli_close($conn);    
}
?>