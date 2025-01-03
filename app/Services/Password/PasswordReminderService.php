<?php

namespace App\Services\Password;

use Illuminate\Database\MySqlConnection;

class PasswordReminderService
{
    public function __construct(
        private MySqlConnection $dbConnection
    ) {}
}
