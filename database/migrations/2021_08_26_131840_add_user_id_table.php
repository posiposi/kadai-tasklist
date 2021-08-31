<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUserIdTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tasks', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id'); //テーブルに'user_id'を追加
            $table->foreign('user_id')->references('id')->on('users'); //'user_id'にキー制約('users'テーブルの'id'を参照)
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tasks', function (Blueprint $table) {
            $table->dropForeign('tasks_user_id_foreign'); //'user_id'のキー制約解除
            $table->dropColumn('user_id'); //'user_id'削除
        });
    }
}
