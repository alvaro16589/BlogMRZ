<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermisosRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permisos_roles', function (Blueprint $table) {
            $table->unsignedBigInteger('permisos_id');
            $table->foreign('permisos_id','fk_permisorol_permiso')->references('id')->on('premiso')->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedBigInteger('roles_id');
            $table->foreign('roles_id','fk_permisorol_rol')->references('id')->on('rol')->onDelete('cascade')->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('permisos_roles');
    }
}
