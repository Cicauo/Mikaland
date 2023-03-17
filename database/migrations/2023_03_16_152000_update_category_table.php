<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('category', function (Blueprint $table) {
            $table->renameColumn('name', 'tbl_title_category');
            $table->renameColumn('image', 'tbl_header_image_category');
            $table->renameColumn('location', 'tbl_location_category');
            $table->renameColumn('about', 'tbl_about_category');
            $table->dropColumn('press_list');
            $table->renameColumn('brosur', 'tbl_browsur');
            $table->renameColumn('slogan', 'tbl_slogan_category');
            $table->string('tbl_title_about_project')->after('tbl_about_category');
            $table->text('tbl_usp')->after('tbl_title_about_project');
            $table->string('tbl_image_category')->after('tbl_usp');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('category', function (Blueprint $table) {
            $table->renameColumn('tbl_title_category', 'name');
            $table->renameColumn('tbl_header_image_category', 'image');
            $table->renameColumn('tbl_location_category', 'location');
            $table->renameColumn('tbl_about_category', 'about');
            $table->string('press_list');
            $table->renameColumn('tbl_browsur', 'brosur');
            $table->renameColumn('tbl_slogan_category', 'slogan');
            $table->dropColumn('tbl_title_about_project');
            $table->dropColumn('tbl_usp');
            $table->dropColumn('tbl_image_category');
        });
    }
}