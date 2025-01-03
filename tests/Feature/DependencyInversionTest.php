<?php

namespace Tests\Feature;

use App\Services\Password\PasswordReminderService;
use App\Services\PasswordRefactored\DBConnection;
use App\Services\PasswordRefactored\PasswordReminderRefactoredService;
use Illuminate\Database\MySqlConnection;
use Tests\TestCase;

class DependencyInversionTest extends TestCase
{
    public function test_password_reminder(): void
    {
        $reminder = new PasswordReminderService(new MySqlConnection('localhost', 'solid'));

        $this->assertInstanceOf(PasswordReminderService::class, $reminder);
    }
    public function test_password_reminder_refactored(): void
    {
        $reminder = new PasswordReminderRefactoredService(new DBConnection('localhost', 'solid'));

        $this->assertInstanceOf(PasswordReminderRefactoredService::class, $reminder);
    }
}
