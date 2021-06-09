<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DropUniqueToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // userテーブルのunique制約を削除
        // 退会後同じメールアドレスで登録できる様にする
        Schema::table('users', function (Blueprint $table) {
            // ユーザーテーブルからユニークキーを削除
            $table->dropUnique('users_email_unique');
            $table->dropUnique('users_username_unique');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            // ユニークキー追加
            $table->unique('email', 'users_email_unique');
            $table->unique('username', 'users_username_unique');
        });
    }
}
