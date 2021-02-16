<<<<<<< HEAD
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Query\Expression;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema; //class un po' inutile
use Modules\Forum\Models\Forum as MyModel;

class CreateForumsTable extends Migration {
    public function getTable() {
        return with(new MyModel())->getTable();
    }

    public function up() {
        if (! Schema::hasTable($this->getTable())) {
            Schema::create($this->getTable(), function (Blueprint $table) {
                //$table->increments('id');
                $table->increments('post_id'); //->primary();
                $table->nullableMorphs('parent');
                $table->integer('pos')->nullable();
                $table->string('updated_by', 255)->nullable();
                $table->string('created_by', 255)->nullable();
                $table->timestamps();
            });
        }
        Schema::table($this->getTable(), function (Blueprint $table) {
            if (! Schema::hasColumn($this->getTable(), 'updated_by')) {
                $table->string('updated_by', 255)->nullable()->after('updated_at');
            }
            if (! Schema::hasColumn($this->getTable(), 'created_by')) {
                $table->string('created_by', 255)->nullable()->after('created_at');
            }
            if (! Schema::hasColumn($this->getTable(), 'parent_id')) {
                $table->nullableMorphs('parent');
            }
            if (! Schema::hasColumn($this->getTable(), 'pos')) {
                $table->integer('pos')->nullable();
            }
            if (! Schema::hasColumn($this->getTable(), 'auth_user_id')) {
                $table->integer('auth_user_id')->index()->nullable();
                /*
                $db = DB::connection('liveuser_general')->getDatabaseName();
                $db = 'liveuser_general';
                $table->foreign('auth_user_id')->references('auth_user_id')->on(new Expression($db.'.liveuser_users'));
                */
            }

            if (! Schema::hasColumn($this->getTable(), 'type')) {
                $table->string('type', 255)->nullable()->after('post_id'); //question or answer or something else
            }
        });
    }

    public function down() {
        Schema::dropIfExists($this->getTable());
    }
}
=======
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Query\Expression;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema; //class un po' inutile
use Modules\Forum\Models\Forum as MyModel;

class CreateForumsTable extends Migration {
    public function getTable() {
        return with(new MyModel())->getTable();
    }

    public function up() {
        if (! Schema::hasTable($this->getTable())) {
            Schema::create($this->getTable(), function (Blueprint $table) {
                //$table->increments('id');
                $table->increments('post_id'); //->primary();
                $table->nullableMorphs('parent');
                $table->integer('pos')->nullable();
                $table->string('updated_by', 255)->nullable();
                $table->string('created_by', 255)->nullable();
                $table->timestamps();
            });
        }
        Schema::table($this->getTable(), function (Blueprint $table) {
            if (! Schema::hasColumn($this->getTable(), 'updated_by')) {
                $table->string('updated_by', 255)->nullable()->after('updated_at');
            }
            if (! Schema::hasColumn($this->getTable(), 'created_by')) {
                $table->string('created_by', 255)->nullable()->after('created_at');
            }
            if (! Schema::hasColumn($this->getTable(), 'parent_id')) {
                $table->nullableMorphs('parent');
            }
            if (! Schema::hasColumn($this->getTable(), 'pos')) {
                $table->integer('pos')->nullable();
            }
            if (! Schema::hasColumn($this->getTable(), 'auth_user_id')) {
                $table->integer('auth_user_id')->index()->nullable();
                /*
                $db = DB::connection('liveuser_general')->getDatabaseName();
                $db = 'liveuser_general';
                $table->foreign('auth_user_id')->references('auth_user_id')->on(new Expression($db.'.liveuser_users'));
                */
            }

            if (! Schema::hasColumn($this->getTable(), 'type')) {
                $table->string('type', 255)->nullable()->after('post_id'); //question or answer or something else
            }
        });
    }

    public function down() {
        Schema::dropIfExists($this->getTable());
    }
}
>>>>>>> 2247733 (first)
