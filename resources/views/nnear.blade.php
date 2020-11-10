@extends('layouts.index')

@section('title', '拉麵文化')
@section('nnear', 'active')

@section('nav')
    @parent

    <ul class="navbar-nav">
        <li class="nav-item @yield('near')">
            <a href="{{ route('near.index') }}" class="nav-link">
                附近店家
            </a>
        </li>
        <li class="nav-item @yield('story')">
            <a href="{{ route('story.index') }}" class="nav-link">
                拉麵圖鑑
            </a>
        </li>
        <li class="nav-item @yield('nnear')">
            <a href="{{ route('nnear') }}" class="nav-link">
                <i class="ea ea-reman"></i> 拉麵文化
            </a>
        </li>
    </ul>
@endsection


@section('content')
    <section class="content-header">
        <div class="container">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">歷史</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <p class="card-text">
                                日本最早關於中國麵條的記載是明朝遺臣朱舜水流亡到日本後，用麵條來款待日本江戶時代的大名——水戶藩藩主德川光圀，但並未普及。</br>
                                </br>
                                日語外來語片假名「ラーメン」（Ramen）的名稱來自漢語的「拉麵」發音，所以日語也可以直接借用漢字寫做「拉麺」。日文漢字寫法另有「老麺」、「柳麺」或者「滷麵」，但比較少見，可能為日語片假名ramen借音反寫漢字。</br>
                                </br>
                                在明治時代早期，拉麵是橫濱中華街常見的食品。1900年代，來自上海和廣東的中國人在日本賣切麵，配以簡單的湯底和配料。在昭和年間，拉麵在日本開始流行。那時拉麵被叫做「支那そば」或「南京そば」。日語以中國都市命名食品乃強調其為中國產，而非特指其來自南京。一說當時許多華人到日本留學，但求學為求經濟常租屋住一起食住，甚致留學生會揉麵糰再拉麵條線，久而久之，日人稱之為拉麵</br>
                                </br>
                                第二次世界大戰之後，來自美國的廉價麵粉和從中國戰場回來的士兵使得中國風味的麵條大行其道。同時日本政府官方禁止使用一切關於「支那」的詞彙，故民間習慣稱呼改為「中華そば」。「そば」是日本使用蕎麥製作的蕎麥麵條。</br>
                                </br>
                                1910年出生於大日本帝國台灣嘉義廳的安藤百福，在1958年發明的泡麵（即食麵）叫「拉麵」，創立日清食品公司。拉麵成為流行的方便食品。由此「拉麵」這個詞的使用也超過了其他的名稱的使用。1980年代，日本拉麵成了日本飲食文化的代表之一，日本各地都有人研發出別具地方風味的拉麵。</br>
                                </br>
                                近年來，由於對狂牛病的恐懼，日本人對和拉麵的顧客層相同之另一快餐食品「牛丼」的消費明顯下降，拉麵成了上班族的第一午餐選擇。[來源請求]</br>
                                </br>
                                而全球第一間取得米其林一星的拉麵店「蔦」亦創新地以松露醬配搭拉麵，把別具特色的拉麵帶給世界。
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
