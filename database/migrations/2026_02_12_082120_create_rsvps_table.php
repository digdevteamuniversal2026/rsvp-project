<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('rsvps', function (Blueprint $table) {
            if (!Schema::hasColumn('rsvps', 'name')) {
                $table->string('name')->after('id');
            }
            if (!Schema::hasColumn('rsvps', 'email')) {
                $table->string('email')->unique()->after('name');
            }
            if (!Schema::hasColumn('rsvps', 'guests')) {
                $table->integer('guests')->default(1)->after('email');
            }
            if (!Schema::hasColumn('rsvps', 'status')) {
                $table->string('status')->default('pending')->after('guests');
            }
            if (!Schema::hasColumn('rsvps', 'created_at')) {
                $table->timestamps();
            }
        });
    }

    public function down(): void
    {
        Schema::table('rsvps', function (Blueprint $table) {
            $table->dropColumn(['name', 'email', 'guests', 'status', 'created_at', 'updated_at']);
        });
    }
};
