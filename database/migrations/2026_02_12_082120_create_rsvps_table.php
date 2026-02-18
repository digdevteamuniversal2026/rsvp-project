<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('rsvps', function (Blueprint $table) {
            $table->string('name')->after('id');
            $table->string('email')->unique()->after('name');
            $table->integer('guests')->default(1)->after('email');
            $table->string('status')->default('pending')->after('guests');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::table('rsvps', function (Blueprint $table) {
            $table->dropColumn([
                'name',
                'email',
                'guests',
                'status',
                'created_at',
                'updated_at'
            ]);
        });
    }
};
