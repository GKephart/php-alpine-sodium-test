<?php
$password = "abc123";
$hash = password_hash("abc123", PASSWORD_ARGON2I, ["time_cost" => 384]);
