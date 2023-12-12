<?PHP
include('config.php');
//this action is called when the Delete link is clicked
if (isset($_GET["id"]) && $_GET["id"] != "") {
    $id = $_GET["id"];
    $sql = "DELETE FROM Kpi WHERE kpiID=" . $id;
    
    if (mysqli_query($conn, $sql)) {
        $message = "Record deleted successfully<br>";
        include("./add_kpi_message.php");
    } else {
        $message = "Error deleting record: " . mysqli_error($conn) . "<br>";
        include("./add_kpi_message.php");
    }
}
mysqli_close($conn);
