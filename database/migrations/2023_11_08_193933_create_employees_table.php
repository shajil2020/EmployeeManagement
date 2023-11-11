<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id(); // Auto-incremental primary key
            $table->string('first_name');
            $table->string('last_name');
            $table->unsignedBigInteger('company_id'); // Foreign key to Companies table
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->timestamps(); // Created_at and updated_at timestamps
    
            // Define the foreign key constraint for the 'company_id' field
            $table->foreign('company_id')->references('id')->on('companies')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
};
