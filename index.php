<?php
$password = "abc123";
$hash = password_hash($password, PASSWORD_ARGON2I, ["time_cost" => 384]);
