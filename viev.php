
<?php
session_start();
$mysqli = mysqli_connect("localhost", "t988368n_muz", "Danil115155!", "t988368n_muz");
if (mysqli_connect_errno()) {
    echo "Подключение невозможно: ".mysqli_connect_error();
}
$sql = "SELECT * FROM song"; 

$result = $mysqli->query($sql);
echo "<div class='block-left'>";

while($row = $result->fetch_assoc()) { 
    echo "<div class='info'>
        <div class='test' id='da'>
            <div>
            </div>
        </div>
        <div class='test' >
        <img src=".$row["Image"].">
    </div>
        <div class='test'>
            <div>Название: ".$row["Name"]."</div>
            <div>Автор: ".$row["Author"]."</div>
            <div>Альбом: ".$row["Album"]."</div>
            <div>Длительность: ".$row["Time"]."</div>
            <div>ID: ".$row["SongID"]."</div>
            
        </div>
        <form action='delete.php' method='post'>
        <input type='hidden' name='id' value='" . $row["SongID"] . "' />
        <input type='submit' value='Удалить' class='btn'>
    </form>
    <br class='clearBoth' />
    </div>
    ";
}



$mysqli->close();
?>
