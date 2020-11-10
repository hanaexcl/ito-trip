<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('near');
//})->name('index');
Route::resource('/', 'NearController');

//Route::get('/near', function () {
//    return view('near');
//})->name('near');

Route::resource('/story', 'MapController');

Route::resource('/near', 'NearController');

//Route::get('/', function () {
//    return view('index');
//})->name('index');
//
//Route::get('/near', function () {
//    return view('near');
//})->name('near');
//
Route::get('/nnear', function () {
    return view('nnear');
})->name('nnear');
//
//Route::get('/daily', function () {
//    return view('daily');
//})->name('daily');
//
//Route::get('/zh_tw', function(){
//    App::setLocale('zh_tw');
//    return trans('auth.failed');
//});
//
//Route::resource('/story', 'MapController');



//Route::get('/story', function () {
//    $items = [
//        [
//            'url' => 'https://cloud.culture.tw/e_new_upload/cms/image/A0/B0/C0/D13/E175/F141/2d316fba-73fd-4cba-a1a1-38931481689e.JPG',
//            'title' => '拍瀑拉文化基地',
//            'context' => '臺中市牛罵頭文化協進會自2016年7月起，受臺中市文化資產處委託經營管理牛罵頭遺址文化園區第3、4棟館舍。同年8月，成立「拍瀑拉文化基地」，運用多年來累積的經驗與專業，作為公部門與民間團體的交流平台，締造政府與民間合作的典範，同時深耕在地文化與文化主張。透過資料彙整研究、展示體驗、教育推廣、文創出版等經營管理計畫，結合周邊大學相關科系及國立自然科學博物館資源，邀請在地社區、社團及學校合作，將遺址與考古知識生活化，帶領大家深入認識中台灣的史前人類文化內涵及其相關的文化資源。'
//        ],
//        [
//            'url' => 'https://cloud.culture.tw/e_upload_ccacloud/ccacloud/image/A0/B0/C-1/D-267/E-969/F-550/1364531630547.jpg',
//            'title' => '金樹歲月',
//            'context' => '一棵金樹混夾在七棵真樹之間，它無法成長的事實，反映都會中自然與生命的無奈!隨著人行道上鑲嵌的銅葉和真實落葉的散佈，交織出一片時光變化的走廊。人們在不同造型、顏色的花崗石下約會或休憩，不僅見證光華商場的繁榮起伏，更記錄都會生活的點滴軌跡。'
//        ],
//        [
//            'url' => 'https://cloud.culture.tw/e_upload_ccacloud/ccacloud/image/A0/B0/C-1/D-267/E-965/F-65/1364531635031.jpg',
//            'title' => '女武神與時間廊',
//            'context' => '造型上，呈現迴旋穿透的簡潔概念，迴旋等於循環、巡迴，最終之運行理念達到週而復始、生生不息。「時間廊」本意是強調「時間差」，世間所有美好的事物皆存在記憶的時間差。世上萬物皆無法脫離時間的規範，但時間廊的存在，猶如人生中某一片段被暫時的停止下來。'
//        ],
//        [
//            'url' => 'https://cloud.culture.tw/e_new_upload/cms/image/A0/B0/C0/D22/E184/F83/d635ebbf-2215-44e3-915e-6bd68fc6658b.jpg',
//            'title' => '中台世界博物館',
//            'context' => '一座位於中台灣埔里的博物館-中台世界博物館。座落於台灣地理中心合歡山下的蓮花盆地，週邊群山環繞，朝暉夕霞，宛如世外化境。兼之比鄰國際性景點中台禪寺，禪風鼎盛，更顯其深厚人文與心靈靜謐內涵。博物館外觀以中式西建方式，猶如深山中的古寺。館內豐富的佛教及書畫藝術典藏，三十年來由信眾捐贈的珍品，在創辦人惟覺老和尚「藝術化世」的願力帶領下，四眾弟子精心打造，成為隱現山林的一顆明珠。2016年8月13日正式對外開放，儼然成為中台灣一座人文、心靈、休憩的亮點。'
//        ],
//        [
//            'url' => 'https://storytaiwan.tw/Upload/FileSync001/RelPic/Story/21094/s_b745e2c6-7144-46dc-a352-4303debd8ae8.jpg',
//            'title' => '父親的最愛',
//            'context' => '放四片檸檬，加點愛，加點期望，是如此的樸實無華、且枯燥。'
//        ],
//        [
//            'url' => 'https://storytaiwan.tw/Upload/FileSync001/RelPic/Story/17209/s_0bca5265-aa60-4475-b096-5ee140d41f05.jpg',
//            'title' => '難忘的味道',
//            'context' => '以前曾經去過一家非常難忘的小店，尚未走進店鋪，香味便迎面而來 非常難忘的小店'
//        ]
//    ];
//    return view('story')->with('times', $items);
//})->name('story');
