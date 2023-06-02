<h1>all users</h1>

<?php 

$sql = "SELECT * FROM users";
$result = $conn->query($sql);
$qtd = $result->num_rows;

if ($qtd > 0) {
    print "<table class='table table-hover table-striped'>";
    print "<tr>";
    print "<th>#</th>";
    print "<th>Name</th>";
    print "<th>Email</th>";
    print "<th>Date of birth</th>";
    print "</tr>";
    
    while ($row = $result->fetch_object()) {
        print "<tr>";
        print "<td>".$row->id."</td>";
        print "<td>".$row->full_name."</td>";
        print "<td>".$row->email."</td>";
        print "<td>".$row->date_of_birth."</td>";
    }
    print "</table>";
} else {
    print "<p class='alert alert-danger'>Nenhum resultado.</p>";
}

?>