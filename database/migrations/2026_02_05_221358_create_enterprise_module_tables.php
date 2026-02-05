<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //Tabla principal de Empresa
        Schema::create('empresas', function (Blueprint $table) {
           $table->id('id');
            $table->string('nombre', 100);
            $table->text('descripcion')->nullable();
            $table->string('sector', 50)->nullable();
            $table->enum('tamano', ['Startup', 'Pequeña', 'Mediana', 'Grande'])->nullable();
            $table->string('direccion', 200)->nullable();
            $table->string('telefono', 20)->nullable();
            $table->string('email', 100)->nullable();
            $table->string('sitio_web', 100)->nullable();
            $table->enum('estado', ['Activa', 'Inactiva'])->default('Activa');
            $table->timestamp('fecha_registro')->useCurrent();
        });

         // USUARIOS DEL SISTEMA
        Schema::create('usuarios_sistema', function (Blueprint $table) {
            $table->id('id');
            $table->string('nombre', 80);
            $table->string('apellido', 80);
            $table->string('email', 100)->unique();
            $table->string('password_hash', 255);
            $table->string('telefono', 20)->nullable();
            $table->timestamp('fecha_registro')->useCurrent();
            $table->timestamp('ultimo_acceso')->nullable();
            $table->enum('estado', ['Activo', 'Inactivo', 'Suspendido'])->default('Activo');
        });


        // DEPARTAMENTOS
        Schema::create('departamentos', function (Blueprint $table) {
            $table->id('id');
            $table->foreignId('id_empresa')->constrained('empresas')->onDelete('cascade');
            $table->string('nombre', 80);
            $table->text('descripcion')->nullable();
            $table->integer('jefe_departamento_id')->nullable();
            $table->decimal('presupuesto_anual', 12, 2)->nullable();
        });


        // ROLES

        Schema::create('roles', function (Blueprint $table) {
            $table->id('id');
            $table->string('nombre', 50);
            $table->text('descripcion')->nullable();
            $table->integer('nivel_acceso')->default(1);
        });


        // PERMISOS
        Schema::create('permisos', function (Blueprint $table) {
            $table->id('id');
            $table->string('nombre', 50);
            $table->text('descripcion')->nullable();
            $table->string('modulo', 30)->nullable();
        });


        // USUARIO - ROLES - EMPRESA
        Schema::create('usuario_roles', function (Blueprint $table) {
            $table->foreignId('id_usuario')->constrained('usuarios_sistema')->onDelete('cascade');
            $table->foreignId('id_rol')->constrained('roles')->onDelete('cascade');
            $table->foreignId('id_empresa')->constrained('empresas')->onDelete('cascade');
            $table->timestamp('fecha_asignacion')->useCurrent();
            $table->primary(['id_usuario', 'id_rol', 'id_empresa']);
        });




    }


    public function down(): void
    {
       Schema::dropIfExists('usuario_roles');
        Schema::dropIfExists('permisos');
        Schema::dropIfExists('roles');
        Schema::dropIfExists('departamentos');
        Schema::dropIfExists('usuarios_sistema');
        Schema::dropIfExists('empresas');
}
};
