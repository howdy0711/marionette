{"filter":false,"title":"2017_03_07_110211_create_usermario_table--cretae=usermarios.php","tooltip":"/laravel/database/migrations/2017_03_07_110211_create_usermario_table--cretae=usermarios.php","undoManager":{"mark":2,"position":2,"stack":[[{"start":{"row":0,"column":0},"end":{"row":28,"column":0},"action":"remove","lines":["<?php","","use Illuminate\\Support\\Facades\\Schema;","use Illuminate\\Database\\Schema\\Blueprint;","use Illuminate\\Database\\Migrations\\Migration;","","class CreateUsermarioTableCretae=usermarios extends Migration","{","    /**","     * Run the migrations.","     *","     * @return void","     */","    public function up()","    {","        //","    }","","    /**","     * Reverse the migrations.","     *","     * @return void","     */","    public function down()","    {","        //","    }","}",""],"id":2},{"start":{"row":0,"column":0},"end":{"row":44,"column":0},"action":"insert","lines":["<?php","","use Illuminate\\Support\\Facades\\Schema;","use Illuminate\\Database\\Schema\\Blueprint;","use Illuminate\\Database\\Migrations\\Migration;","","class CreateUsermarioTable extends Migration","{","    /**","     * Run the migrations.","     *","     * @return void","     */","    public function up()","    {","        Schema::create('usermarios', function (Blueprint $table) {","","          $table->increments('NUM');","                   $table->string('user_id');","                   $table->foreign('user_id')->references('user_id')->on('users')->onUpdate('cascade')->onDelete('cascade');","                   $table->string('cont_category');","                   $table->string('cont_name');","                   $table->string('cont_price');","                   $table->string('cont_detail');","                   $table->string('cont_effect_sound')->nullable();","                   $table->string('cont_background_sound')->nullable();","                   $table->string('cont_voice')->nullable();","                   $table->string('cont_moving')->nullable();","                   $table->string('cont_image');","                   $table->string('cont_info'); ///구매한 것인지 직접만든것인지 확인","                   $table->timestamps();","        });","    }","","    /**","     * Reverse the migrations.","     *","     * @return void","     */","    public function down()","    {","        Schema::dropIfExists('usermarios');","    }","}",""]}],[{"start":{"row":29,"column":69},"end":{"row":30,"column":0},"action":"insert","lines":["",""],"id":3},{"start":{"row":30,"column":0},"end":{"row":30,"column":19},"action":"insert","lines":["                   "]}],[{"start":{"row":30,"column":19},"end":{"row":30,"column":60},"action":"insert","lines":["$table->string('cont_video')->nullable();"],"id":4}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":27,"column":61},"end":{"row":27,"column":61},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1488884674425,"hash":"95797d3436323b8ce183290c7c6b9f9f72c65a21"}