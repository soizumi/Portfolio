//ロード時transition無効
$(window).on('load' , function() {
$("body").removeClass("preload");
//背景画像のグラデーション回転
    var angle = -45;
    function egg_gradient_rotate(){
            if( angle >= 360 ){
                angle = 0;
            }
            angle += 1;
//            console.log(angle);
            $('.background_egg svg defs linearGradient').attr('gradientTransform',"rotate("+angle+",150, 250)");
    }
    setInterval(function(){
        egg_gradient_rotate()
    },'30');
});

//スライダーの設定
$(function() {
    var img_dir_before = window.location.href + "wp-content/themes/portfolio_theme/";
    var img_dir = img_dir_before.replace("#","");
    $('.slider').slick({
        autoplay:false,
        appendArrows: $('.top_slider_pager'),
        prevArrow:"<button type='button' class='slick-prev movable_element'><img src='" + img_dir + "img/arrow_prev.svg' alt=''></button>",
        nextArrow:"<button type='button' class='slick-next movable_element'><img src='" + img_dir + "img/arrow_next.svg' alt=''></button>",
    });
    //メニューの表示・非表示、メニュー表示時スクロール無効
    function scrollStop(event) {
        event.preventDefault();
    }
    $(".menu_button ,.menu_button_close").on("click", function() {
        $('body').toggleClass('open');
        if( $("body").hasClass("open") ){
            document.addEventListener('touchmove', scrollStop, {
                passive: false
            });
            document.addEventListener('wheel', scrollStop, {
                passive: false
            });
        }else{
            document.removeEventListener('touchmove', scrollStop, {
                passive: false
            });
            document.removeEventListener('wheel', scrollStop, {
                passive: false
            });
        }
        setTimeout(function(){
            $('.menu_button_close').toggleClass('menu_button_close_fade');
            $('.menu_list li,.menu_info img').toggleClass('menu_element_fade');
            $('.accent_egg_piece').toggleClass('menu_egg_fade');
        },700);
    });
    //ページ上部へスムーススクロール
    $('.arrow_scroll_top, a[href^="#"]').click(function(){
    var current = $(window).scrollTop();
    if( current != 0 ){
        var speed = 2000;
        $("html, body").animate({scrollTop:0}, speed, "swing");
        return false;
        }
    });
});
    //PC版のhover用クラスをSP時外す
    $(window).on('load resize orientationchange', function() {
        if($(window).width() <= 640) {
            $('body').removeClass('hover_enable');
        } else {
            $('body').addClass('hover_enable');
        }
    });
    //SP版のhover用クラスの付け外し
    /* まず関数を定義 */
    function linkTouchStart(){
        var thisAnchor = $(this);
        touchPos = thisAnchor.offset().top;
        //タッチした瞬間のa要素の、上からの位置を取得。
        function moveCheck(){
            nowPos = thisAnchor.offset().top;
            if(touchPos == nowPos){
                thisAnchor.addClass("touch_sp");
                //タッチした瞬間と0.1秒後のa要素の位置が変わっていなければ hover クラスを追加。
                //リストなどでa要素が並んでいるときに、スクロールのためにタッチした部分にまでhover効果がついてしまうのを防止している。
            }
        }
        setTimeout(moveCheck,100);
        //0.1秒後にmoveCheck()を実行。
    }
    function linkTouchEnd(){
        var thisAnchor = $(this);
        function hoverRemove(){
            thisAnchor.removeClass("touch_sp");
        }
        setTimeout(hoverRemove,500);
        //0.5秒後にhoverRemove()を実行。
        //指を離した瞬間にhover効果を切るよりも、要素が変化した手応えを表現できる。
    }
    /* タッチイベントで上記の関数を呼び出す */
    $(document).on('touchstart mousedown','.movable_element',linkTouchStart);
    //a要素をタッチ、もしくはマウスクリックしたらlinkTouchStart()を実行。
    $(document).on('touchend mouseup','.movable_element',linkTouchEnd);
    //a要素から指を離す、もしくはクリックを終えたらlinkTouchEnd()を実行。
    
    //問い合わせフォーム、電話番号入力部分 数字のみ入力可能
    $(document).on("keypress","input[name='contact_phonenumber']", function(event){return leaveOnlyNumber(event);});
    
    $(document).on("blur","input[name='contact_phonenumber']", function(event){return leaveOnlyNumber(event);});

    function leaveOnlyNumber(e){
      // 数字以外の不要な文字を削除
      var st = String.fromCharCode(e.which);
      if ("0123456789-".indexOf(st,0) < 0) { return false; }
      return true;
    }
