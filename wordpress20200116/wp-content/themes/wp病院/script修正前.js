// jQuery

$(function(){
    // ドロップダウンメニュー
  $(".top-nav li").hover(function(){
      $(".nav-content:not(:animated)",this).slideDown();
  },function(){
      $(".nav-content",this).slideUp();
  });
});

// $(function(){
//   // ホバーしたら画像を表示
//   $(".box").hover(function(){
//     $(".img-area").show();
//   });

//   $(".item02-txt").hover(function(){
//       $(".item01-img").hide().show('.item02-img');
//   });
// });

// ホバーしたら画像を表示.外したら非表示
// $(function(){
//     $('.box').hover(function(){
//         $('.img-area').toggleClass();
//     });
// });

$(function(){
  // ホバーしたら画像を表示
  // 〇
  $(".box").hover(function(){
    $(".imageBox").show();
  },function(){
      $(".imageBox").hide();
  });
});

// .item01_txtをクリックしたら.item01_imgを表示(.show)
// .item02_txtをクリックしたら.item01_imgをhideして.item02_imgを表示(.show)
// ×
// $(function(){
//     $(".item02_txt").click(function(){
//         $(".item01_txt").hide();
//     },function(){
//         $(".item02_img").show();
//     });
// });

// ×表示して消せるけど1回きり‥
// $(function(){
//     $(".item02_txt").hover(function(){
//         $(".item01_img img").attr("src","img/syujutu.jpg");
//     },function(){
//         $(".item01_img img").hide();
//     });

//     $("item03_txt").hover(function(){
//         $(".item01_img img").attr("src","img/kensa.jpg");
//     },function(){
//         $(".item01_img img").hide();
//     });
// });


// ↓効くやん(js確認用)
// $(function(){
//     $(".box").hover(function(){
//         alert ("Hello,world!");
//     });
// });

// $(function(){
//     var menu = document.getElementsByClassName('js-box');
//     var imgBox = document.getElementsByClassName('js-imageBox');

//     var imageData = new Array();
    // var imageData = ['img/matiai.jpg','img/syujutu.jpg',
    //     'img/kensa.jpg','img/naisikyo.jpg','nursstation.jpg',
    //     'img/kekkanzoei.jpg','img/xsen.jpg','img/mri.jpg',
    //     'img/ct.jpg','img/kyukyu.jpg'];

//         for (var i = 0; i < menu.length; i++)(function(){
//             menu[n].addEventListener('mouseover',function(){
//                 if(imgBox[0].firstChild != null){
//                     imgBox[0].removeChild(imgBox[0].firstChild);
//                 }

//                 var img = document.createElement('img');
//                 img.setAttribute('src',imageData[n]);
//                 imgBox[0].appendChild(img);
//             });
//         })(i);
// });

var menu = document.getElementsByClassName('js-box');
var imageBox = document.getElementsByClassName('js-imageBox');
//配列にURLを入れる
var imageData = new Array();
var imageData = ['img/matiai.jpg','img/syujutu.jpg',
'img/kensa.jpg','img/naisikyo.jpg','img/nursstation.jpg',
'img/kekkanzoei.jpg','img/xsen.jpg','img/mri.jpg',
'img/ct.jpg','img/kyukyu.jpg'];

//menuの数だけforでまわす、即時間数対応する（触ったiが取得できなかったので）
for (var i = 0; i < menu.length; i++) (function (n) {
  //どれかのmenuに触れた時
  menu[n].addEventListener('mouseover', function () {
    //まず、imageBoxに画像があったら(nullではなかった場合)削除
    if (imageBox[0].firstChild != null) {　//firstChildツリー上での、ノードの最初の子要素を返す
      imageBox[0].removeChild(imageBox[0].firstChild);
    }
    //imgタグの作成
    var img = document.createElement('img');
    // console.log(n);
    //imgタグにURLを付与。この際、先ほど作ったarrayとmenu番号を紐づけておくとシンプル
    img.setAttribute('src', imageData[n]);
    //imgをimageBoxに入れる
    imageBox[0].appendChild(img);

  });

}
)(i);

