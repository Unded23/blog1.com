<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Eloquent\Model;

class CreateForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('persons', function(Blueprint $table) {
            $table->foreign('post_id')->references('id')->on('posts')
                ->onDelete('restrict')
                ->onUpdate('restrict');
        });
        Schema::table('comments', function(Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users')
                ->onDelete('restrict')
                ->onUpdate('restrict');
        });
        Schema::table('comments', function(Blueprint $table) {
            $table->foreign('post_id')->references('id')->on('posts')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
        Schema::table('category_post', function(Blueprint $table) {
            $table->foreign('category_id')->references('id')->on('categories')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
        Schema::table('category_post', function(Blueprint $table) {
            $table->foreign('post_id')->references('id')->on('posts')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('persons', function(Blueprint $table) {
            $table->dropForeign('persons_user_id_foreign');
        });
        Schema::table('comments', function(Blueprint $table) {
            $table->dropForeign('comments_user_id_foreign');
        });
        Schema::table('comments', function(Blueprint $table) {
            $table->dropForeign('comments_post_id_foreign');
        });
        Schema::table('comments', function(Blueprint $table) {
            $table->dropForeign('comments_parent_id_foreign');
        });
        Schema::table('category_post', function(Blueprint $table) {
            $table->dropForeign('category_post_category_id_foreign');
        });
        Schema::table('category_post', function(Blueprint $table) {
            $table->dropForeign('category_post_post_id_foreign');
        });
    }
}
