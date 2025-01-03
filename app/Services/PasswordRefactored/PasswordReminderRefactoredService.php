<?php

namespace App\Services\PasswordRefactored;

class PasswordReminderRefactoredService
{
    public function __construct(
        private ConnectionInterface $dbConnection
    ) {}
}
