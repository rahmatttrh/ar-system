<?php

namespace App\Helpers;

class LayoutHelper
{
    public static function getMainLayout()
    {
        $role = auth()->user()?->roles->name;

        return match ($role) {
            'Superuser' => 'super_user.layouts.app',
            'Account_Receivable' => 'account_receivable.layouts.app',
            'General_Manager' => 'general_manager.layouts.app',
            'Pajak' => 'pajak.layouts.app',
            default => 'layouts.app', // fallback
        };
    }
}
