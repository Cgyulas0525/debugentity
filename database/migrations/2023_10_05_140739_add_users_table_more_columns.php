<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        /**
         * Run the migrations.
         */
        if (Schema::hasColumn('users', 'phonenumber')) {
            return;
        }

        Schema::table('users', function (Blueprint $table) {
            $table->string('phonenumber', 25)->nullable()
                ->comment('format: +36-99-999-99-99');
            $table->string('postcode', 6)->nullable();
            $table->string('country', 50)->nullable();
            $table->string('city', 50)->nullable();
            $table->integer('role_id');
            $table->string('address', 100)->nullable();
            $table->string('description', 500)->nullable();
        });
    }

    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('phonenumber');
            $table->dropColumn('postcode');
            $table->dropColumn('country');
            $table->dropColumn('city');
            $table->dropColumn('role_id');
            $table->dropColumn('address');
            $table->dropColumn('description');
        });
    }
};
