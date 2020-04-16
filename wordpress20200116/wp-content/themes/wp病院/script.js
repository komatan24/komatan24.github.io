//変数が合ってるのかコンソールで表示(各変数ごとに)して確認
console.log("aaa");
var menu = document.getElementsByClassName('js-box');
var imageBox = document.getElementsByClassName('js-imageBox');

console.log(menu);
console.log(imageBox);
//配列にURLを入れる
var imageData = new Array();
var imageData = ['img/matiai.jpg','img/syujutu.jpg',
'img/kensa.jpg','img/naisikyo.jpg','img/nursstation.jpg',
'img/kekkanzoei.jpg','img/xsen.jpg','img/mri.jpg',
'img/ct.jpg','img/kyukyu.jpg'];


//menuの数だけforでまわす、即時間数対応する（触ったiが取得できなかったので）
for (var i = 0; i < menu.length; i++) (function (n) {
  //ループが合ってるかコンソルで表示して確認
  console.log("aaaaa");
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
    img.setAttribute('src', "http://localhost/wordpress20200116/wp-content/themes/wp%E7%97%85%E9%99%A2/" + imageData[n]);
    //imgをimageBoxに入れる
    imageBox[0].appendChild(img);

  });

}
)(i);

