{"filter":false,"title":"2017_03_07_110235_create_creatingFile_table--cretae=creatingFiles.php","tooltip":"/laravel/database/migrations/2017_03_07_110235_create_creatingFile_table--cretae=creatingFiles.php","undoManager":{"mark":0,"position":0,"stack":[[{"start":{"row":0,"column":0},"end":{"row":28,"column":0},"action":"remove","lines":["<?php","","use Illuminate\\Support\\Facades\\Schema;","use Illuminate\\Database\\Schema\\Blueprint;","use Illuminate\\Database\\Migrations\\Migration;","","class CreateCreatingFileTableCretae=creatingFiles extends Migration","{","    /**","     * Run the migrations.","     *","     * @return void","     */","    public function up()","    {","        //","    }","","    /**","     * Reverse the migrations.","     *","     * @return void","     */","    public function down()","    {","        //","    }","}",""],"id":3},{"start":{"row":0,"column":0},"end":{"row":35,"column":0},"action":"insert","lines":["<?php","","use Illuminate\\Support\\Facades\\Schema;","use Illuminate\\Database\\Schema\\Blueprint;","use Illuminate\\Database\\Migrations\\Migration;","","class CreateCreatingFileTable extends Migration","{","    /**","     * Run the migrations.","     *","     * @return void","     */","    public function up()","    {","        Schema::create('creatingFiles', function (Blueprint $table) {","            $table->increments('NUM');","            $table->string('background_sound');","            $table->string('effect_sound');","            $table->string('basic_moving');","            ","            $table->timestamps();","        });","    }","","    /**","     * Reverse the migrations.","     *","     * @return void","     */","    public function down()","    {","        Schema::dropIfExists('creatingFiles');","    }","}",""]}]]},"ace":{"folds":[],"scrolltop":128,"scrollleft":0,"selection":{"start":{"row":28,"column":19},"end":{"row":28,"column":19},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1488884622856,"hash":"f907121b07d17c57ace6c0fcf0d8dc4b0fbece8d"}