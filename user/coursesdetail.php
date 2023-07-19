<?php
include '../connect.php';

if (isset($_GET['id'])) {
    $id = mysqli_real_escape_string($con, $_GET['id']);
    $query = "SELECT * FROM course WHERE course_id = '$id'";
    $result = mysqli_query($con, $query);

    if ($result) {
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $sn=1;

            echo "<table>";
            echo "<tr><th>SN</th><th>Name</th><th>PDF</th><th>Description</th></tr>";
            echo "<tr>";
            echo "<td>" .$sn++. "</td>";
            echo "<td>" . $row['course_name'] . "</td>";
            echo "<td><div class='pdf-container'><iframe class='pdf-iframe' width='1200px' height='800px' src='" . $row['pdf'] . "'></iframe></div></td>";
            echo "<td>" . $row['course_description'] . "</td>";
            echo "</tr>";
            echo "</table>";
        } else {
            echo "No course found with the provided ID.";
        }
    } else {
        echo "Error executing the query: " . mysqli_error($con);
    }
} else {
    echo "Invalid ID parameter.";
}

mysqli_close($con);
?>

<a href="user.php">Back to Home</a>
