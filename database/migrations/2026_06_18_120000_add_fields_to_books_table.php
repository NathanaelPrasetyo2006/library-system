<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('books', function (Blueprint $table) {
            if (!Schema::hasColumn('books', 'isbn')) {
                $table->string('isbn')->nullable()->after('cover_url');
            }
            if (!Schema::hasColumn('books', 'stock')) {
                $table->integer('stock')->default(0)->after('isbn');
            }
            if (!Schema::hasColumn('books', 'category')) {
                $table->string('category')->nullable()->after('stock');
            }
        });
    }

    public function down(): void
    {
        Schema::table('books', function (Blueprint $table) {
            if (Schema::hasColumn('books', 'category')) {
                $table->dropColumn('category');
            }
            if (Schema::hasColumn('books', 'stock')) {
                $table->dropColumn('stock');
            }
            if (Schema::hasColumn('books', 'isbn')) {
                $table->dropColumn('isbn');
            }
        });
    }
};
