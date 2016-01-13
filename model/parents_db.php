<?php
function get_parent() {
    global $db;
    $query = 'SELECT * FROM parents
              ORDER BY parent_id';
    $result = $db->query($query);
    return $result;
}

function get_parent_name($parent_id) {
    global $db;
    $query = "SELECT * FROM parents
              WHERE parent_id = $parent_id";
    $parent = $db->query($query);
    $parent = $parent->fetch();
    $parent_name = $parent['fname'] . " " . $parent['lname'];
    return $parent_name;
}

function add_parent($id, $student_id, $fname, $lname, $userName, $password) {
    global $db;
    $query = "INSERT INTO parents (parent_id, s_id, fname, lname)
              VALUES ('$id', '$student_id', '$fname', '$lname')";
    $db->exec($query);
	$query = "INSERT INTO user_login(username, password, userID, userType)
			  VALUES ('$userName', '$password', '$id', 'parent')";
	$db->exec($query);
}

function delete_parent($parent_id) {
    global $db;
    $query = "DELETE FROM parents
              WHERE parent_id = '$parent_id'";
    $db->exec($query);
	$query = "DELETE FROM user_login
			  WHERE userID = '$parent_id'";
	$db->exec($query);
}
?>