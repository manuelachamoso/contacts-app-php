<?php
require "database.php";

$id = $_GET["id"];

$statement = $connection->prepare("DELETE FROM contacts WHERE id = :id");
$statement->bindParam(":id", $id);
$statement->execute([":id" => $id]);

header("Location: index.php");

