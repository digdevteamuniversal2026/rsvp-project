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
                $table->string('name');
            }

            if (!Schema::hasColumn('rsvps', 'email')) {
                $table->string('email')->unique();
            }

            if (!Schema::hasColumn('rsvps', 'guests')) {
                $table->integer('guests')->default(1);
            }

            if (!Schema::hasColumn('rsvps', 'status')) {
                $table->string('status')->default('pending');
            }

            if (!Schema::hasColumn('rsvps', 'created_at')) {
                $table->timestamps();
            }
        });
    }

    public function down(): void
    {
        //
    }
};
