{"filter":false,"title":"myMarioShortMovingDetail.blade.php","tooltip":"/laravel/resources/views/account/myMarioShortMovingDetail.blade.php","ace":{"folds":[],"scrolltop":300,"scrollleft":16,"selection":{"start":{"row":39,"column":19},"end":{"row":39,"column":27},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":115,"mode":"ace/mode/php"}},"hash":"3693e39ece361652f026b0e3ea39cb3506970a24","undoManager":{"mark":23,"position":23,"stack":[[{"start":{"row":0,"column":0},"end":{"row":123,"column":11},"action":"insert","lines":["@extends('layouts.master2')","","@section('assets')","<script src=\"{{secure_asset('js/turn.js')}}\"></script>","@endsection","","@section('lnb')","","@endsection","","<style type=\"text/css\">","    #book div img{","        width:100%;","        height:100%;","        margin:0;","        padding:0;","    }","</style>","","@section('content')","<div class=\"row container\">","    <div class=\"col s12 contentTitle\">","        <h4 class=\"center\">{{$content->cont_name}}</h4>","        <hr>","    </div>","    <div class=\"col s12 contentMain\">","        ","        <div class=\"\" id=\"book\">","            <div class=\"hard\"><img src=\"{{$content->cont_image}}\"></img></div>","            <div class=\"hard\">","\t\t\t\t<table  width = \"60%\" cellpadding=\"0\" cellspacing=\"20\" rules = none>","\t\t\t\t\t<tr>","\t\t\t\t\t\t<td style=\"font-family:돋음; font-size:15\" height=\"16\" align=\"center\">","\t\t\t\t\t\t\t<div align=\"center\"><h2></h2></div>","\t\t\t\t\t\t</td>","\t\t\t\t\t</tr>","\t\t\t\t\t<tr>","\t\t\t\t\t\t<td style=\"font-family:돋음; font-size:15\" height=\"16\">","\t\t\t\t\t\t\t<div align=\"left\">카테고리:{{$content->cont_category}}</div>","\t\t\t\t\t\t</td>","\t\t\t\t\t</tr>","\t\t\t\t\t<tr>","\t\t\t\t\t\t<td style=\"font-family:돋음; font-size:15\" height=\"16\">","\t\t\t\t\t\t\t<div align=\"left\">가격:{{$content->cont_price}}</div>","\t\t\t\t\t\t</td>","\t\t\t\t\t</tr>","\t\t\t\t\t<tr>","\t\t\t\t\t\t<td style=\"font-family:돋음; font-size:15\">","\t\t\t\t\t\t<div align=\"left\">제품설명:{{$content->cont_detail}}</div>","\t\t\t\t\t\t</td>","\t\t\t\t\t</tr>","\t\t\t\t</table>","            </div>","            <div class=\"\"><img src=\"{{secure_asset('image/fairytale0.jpg')}}\"></img></div>","            <div class=\"\"><img src=\"{{secure_asset('image/fairytale1-1.jpg')}}\"></img></div>","            <div class=\"\"><img src=\"{{secure_asset('image/fairytale1.jpg')}}\"></img></div>","            <div class=\"\"><img src=\"{{secure_asset('image/fairytail2.JPG')}}\"></img></div>","            <div class=\"\"><img src=\"{{secure_asset('image/fairytail2-1.JPG')}}\"></img></div>","","","      ","\t\t\t\t","\t\t\t\t<!--<div>-->","\t\t\t\t<!--    <video width=\"100%\" height=\"100%\" controls=\"controls\">-->","\t\t  <!--          <source src=\"{{$content->cont_video}}\" type=\"video/mp4\" />-->","\t\t  <!--          </video>-->","\t\t\t\t<!--</div>-->","            <div class=\"hard\"><img src=\"{{$content->cont_image}}\"></img></div>","        </div>","        ","    </div>","    <div class=\"col s12 contentMenu\">","        <hr>","        ","        <a href=\"{{secure_url('/')}}\" class=\"btn right\">목록으로</a>","\t\t","\t\t<!-- Modal Trigger -->","\t\t  <a class=\"waves-effect waves-light btn left\" href=\"#down\">다운로드</a>","\t\t","\t\t  <!-- Modal Structure -->","\t\t  <div id=\"down\" class=\"modal\">","\t\t    <div class=\"modal-content\">","\t\t      <h4>다운로드 확인창</h4>","\t\t      <p>정말로 다운로드 하시겠습니까?</p>","\t\t    </div>","\t\t    <div class=\"modal-footer\">","\t\t    \t<a href=\"#!\" class=\"modal-action modal-close waves-effect waves-green btn-flat\">아니오</a>","\t\t      \t<a href=\"/download?name={{$content->cont_name}}\" class=\"modal-action modal-close waves-effect waves-green btn-flat\">네</a>","\t\t    </div>","\t\t  </div>","        ","        @if($content->cont_info == \"mycreate\")","        ","        <a class=\"waves-effect waves-light btn left\" href=\"#sellApply\">판매신청</a>","\t\t","\t\t  <!-- Modal Structure -->","\t\t  <div id=\"sellApply\" class=\"modal\">","\t\t    <div class=\"modal-content\">","\t\t      <h4>신청 확인창</h4>","\t\t      <p>정말로 신청 하시겠습니까?</p>","\t\t    </div>","\t\t    <div class=\"modal-footer\">","\t\t    \t<a href=\"#!\" class=\"modal-action modal-close waves-effect waves-green btn-flat\">아니오</a>","\t\t      \t<a href=\"/sellApply?name={{$content->cont_name}}\" class=\"modal-action modal-close waves-effect waves-green btn-flat\">네</a>","\t\t    </div>","\t\t  </div>","        @endif"," \t\t<a class=\"waves-effect waves-light btn left\" href=\"#delProduct\">상품삭제</a>","\t\t","\t\t  <!-- Modal Structure -->","\t\t  <div id=\"delProduct\" class=\"modal\">","\t\t    <div class=\"modal-content\">","\t\t      <h4>삭제 확인창</h4>","\t\t      <p>정말로 삭제 하시겠습니까?</p>","\t\t    </div>","\t\t    <div class=\"modal-footer\">","\t\t    \t<a href=\"#!\" class=\"modal-action modal-close waves-effect waves-green btn-flat\">아니오</a>","\t\t      \t<a href=\"/createDel?name={{$content->cont_name}}\" class=\"modal-action modal-close waves-effect waves-green btn-flat\">네</a>","\t\t    </div>","\t\t  </div>","        ","    </div>","</div>","@endsection"],"id":1}],[{"start":{"row":20,"column":0},"end":{"row":70,"column":10},"action":"remove","lines":["<div class=\"row container\">","    <div class=\"col s12 contentTitle\">","        <h4 class=\"center\">{{$content->cont_name}}</h4>","        <hr>","    </div>","    <div class=\"col s12 contentMain\">","        ","        <div class=\"\" id=\"book\">","            <div class=\"hard\"><img src=\"{{$content->cont_image}}\"></img></div>","            <div class=\"hard\">","\t\t\t\t<table  width = \"60%\" cellpadding=\"0\" cellspacing=\"20\" rules = none>","\t\t\t\t\t<tr>","\t\t\t\t\t\t<td style=\"font-family:돋음; font-size:15\" height=\"16\" align=\"center\">","\t\t\t\t\t\t\t<div align=\"center\"><h2></h2></div>","\t\t\t\t\t\t</td>","\t\t\t\t\t</tr>","\t\t\t\t\t<tr>","\t\t\t\t\t\t<td style=\"font-family:돋음; font-size:15\" height=\"16\">","\t\t\t\t\t\t\t<div align=\"left\">카테고리:{{$content->cont_category}}</div>","\t\t\t\t\t\t</td>","\t\t\t\t\t</tr>","\t\t\t\t\t<tr>","\t\t\t\t\t\t<td style=\"font-family:돋음; font-size:15\" height=\"16\">","\t\t\t\t\t\t\t<div align=\"left\">가격:{{$content->cont_price}}</div>","\t\t\t\t\t\t</td>","\t\t\t\t\t</tr>","\t\t\t\t\t<tr>","\t\t\t\t\t\t<td style=\"font-family:돋음; font-size:15\">","\t\t\t\t\t\t<div align=\"left\">제품설명:{{$content->cont_detail}}</div>","\t\t\t\t\t\t</td>","\t\t\t\t\t</tr>","\t\t\t\t</table>","            </div>","            <div class=\"\"><img src=\"{{secure_asset('image/fairytale0.jpg')}}\"></img></div>","            <div class=\"\"><img src=\"{{secure_asset('image/fairytale1-1.jpg')}}\"></img></div>","            <div class=\"\"><img src=\"{{secure_asset('image/fairytale1.jpg')}}\"></img></div>","            <div class=\"\"><img src=\"{{secure_asset('image/fairytail2.JPG')}}\"></img></div>","            <div class=\"\"><img src=\"{{secure_asset('image/fairytail2-1.JPG')}}\"></img></div>","","","      ","\t\t\t\t","\t\t\t\t<!--<div>-->","\t\t\t\t<!--    <video width=\"100%\" height=\"100%\" controls=\"controls\">-->","\t\t  <!--          <source src=\"{{$content->cont_video}}\" type=\"video/mp4\" />-->","\t\t  <!--          </video>-->","\t\t\t\t<!--</div>-->","            <div class=\"hard\"><img src=\"{{$content->cont_image}}\"></img></div>","        </div>","        ","    </div>"],"id":2}],[{"start":{"row":10,"column":0},"end":{"row":17,"column":8},"action":"remove","lines":["<style type=\"text/css\">","    #book div img{","        width:100%;","        height:100%;","        margin:0;","        padding:0;","    }","</style>"],"id":3}],[{"start":{"row":13,"column":0},"end":{"row":14,"column":0},"action":"insert","lines":["",""],"id":4}],[{"start":{"row":14,"column":0},"end":{"row":15,"column":0},"action":"insert","lines":["",""],"id":5}],[{"start":{"row":15,"column":0},"end":{"row":16,"column":0},"action":"insert","lines":["",""],"id":6}],[{"start":{"row":15,"column":0},"end":{"row":25,"column":12},"action":"insert","lines":["        <hr>","        <h4 class=\"center\">{{$content->cont_name}}</h4>","        <center>","        <img src=\"{{secure_asset('short_moving_img/cat1.jpg')}}\"width=\"250px\" height=\"350px\"></img>","        <img src=\"{{secure_asset('short_moving_img/dog1.jpg')}}\"width=\"250px\" height=\"350px\"></img>","        <img src=\"{{secure_asset('short_moving_img/tiger1.jpg')}}\" width=\"250px\" height=\"350px\"></img>","        </center>","","      <div class=\"col s12 contentMenu\">","        <hr>","        <br>"],"id":7}],[{"start":{"row":27,"column":4},"end":{"row":27,"column":37},"action":"remove","lines":["<div class=\"col s12 contentMenu\">"],"id":8}],[{"start":{"row":27,"column":4},"end":{"row":28,"column":0},"action":"remove","lines":["",""],"id":9}],[{"start":{"row":27,"column":4},"end":{"row":27,"column":8},"action":"remove","lines":["    "],"id":10}],[{"start":{"row":26,"column":0},"end":{"row":26,"column":1},"action":"insert","lines":["\\"],"id":11},{"start":{"row":26,"column":0},"end":{"row":26,"column":1},"action":"remove","lines":["\\"]}],[{"start":{"row":25,"column":12},"end":{"row":26,"column":0},"action":"remove","lines":["",""],"id":12}],[{"start":{"row":26,"column":0},"end":{"row":27,"column":8},"action":"remove","lines":["        <hr>","        "],"id":14}],[{"start":{"row":26,"column":0},"end":{"row":27,"column":0},"action":"remove","lines":["",""],"id":15}],[{"start":{"row":74,"column":6},"end":{"row":75,"column":0},"action":"insert","lines":["",""],"id":16}],[{"start":{"row":75,"column":0},"end":{"row":75,"column":1},"action":"insert","lines":["<"],"id":17}],[{"start":{"row":75,"column":1},"end":{"row":75,"column":2},"action":"insert","lines":["b"],"id":18}],[{"start":{"row":75,"column":2},"end":{"row":75,"column":3},"action":"insert","lines":["r"],"id":19}],[{"start":{"row":75,"column":3},"end":{"row":75,"column":4},"action":"insert","lines":[">"],"id":20}],[{"start":{"row":75,"column":4},"end":{"row":76,"column":0},"action":"insert","lines":["",""],"id":21}],[{"start":{"row":76,"column":0},"end":{"row":76,"column":1},"action":"insert","lines":["<"],"id":22}],[{"start":{"row":76,"column":1},"end":{"row":76,"column":2},"action":"insert","lines":["b"],"id":23}],[{"start":{"row":76,"column":2},"end":{"row":76,"column":3},"action":"insert","lines":["r"],"id":24}],[{"start":{"row":76,"column":3},"end":{"row":76,"column":4},"action":"insert","lines":[">"],"id":25}]]},"timestamp":1501813407813}