<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class MaintenanceController extends Controller
{
    /**
     * Executes the core stabilization routine.
     */
    public function runUpdates(Request $request)
    {
        try {
            $output = "";

            // 1. Run Migrations
            Artisan::call('migrate', ['--force' => true]);
            $output .= "Migrations: " . Artisan::output();

            // 2. Ensure Storage Link
            Artisan::call('storage:link');
            $output .= "Storage Link: " . Artisan::output();

            // 3. Run Essential Seeders (Idempotent)
            Artisan::call('db:seed', ['--class' => 'AdminUserSeeder', '--force' => true]);
            $output .= "AdminUserSeeder: " . Artisan::output();

            Artisan::call('db:seed', ['--class' => 'EventTypeSeeder', '--force' => true]);
            $output .= "\nEventTypeSeeder: " . Artisan::output();

            Artisan::call('db:seed', ['--class' => 'ContentSeeder', '--force' => true]);
            $output .= "\nContentSeeder: " . Artisan::output();

            if ($request->expectsJson()) {
                return response()->json([
                    'success' => true,
                    'message' => 'The Sanctum structure has been stabilized.',
                    'output' => $output
                ]);
            }

            return redirect()->back()->with('success', 'The Sanctum structure has been stabilized. All architectural facets are online.');

        } catch (\Exception $e) {
            if ($request->expectsJson()) {
                return response()->json([
                    'success' => false,
                    'message' => $e->getMessage()
                ], 500);
            }

            return redirect()->back()->with('error', 'Stabilization Failure: ' . $e->getMessage());
        }
    }
}
