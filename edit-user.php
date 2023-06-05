<h1>Edit user:</h1>

<?php 
    $sql = "SELECT * FROM users WHERE id=".$_REQUEST["id"];
    $res = $conn->query($sql);

    $row = $res->fetch_object();
?>

<form action="?page=register" method="POST">
    <!-- hide input -->
    <input type="hidden" name="action" value="update">
    <input type="hidden" name="id" value="<?php print $row->id; ?>">
    
    <div class="mb-3">
        <label for="full_name">Full name</label>
        <input type="text" name="full_name" id="" value="<?php print $row->full_name ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label for="email">E-mail</label>
        <input type="email" name="email" id="" value="<?php print $row->email ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label for="date_of_birth">Date of birth</label>
        <input type="date" name="date_of_birth" id="" value="<?php print $row->date_of_birth ?>" class="form-control">
    </div>
    <div class="mb-3">
        <input type="submit" class="btn btn-primary" value="Update">
    </div>
</form>