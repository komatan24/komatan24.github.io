<?php
ini_set('display_errors', "On");
ini_set('error_reporting', E_ALL);


// <!-- カスタムヘッダー画像の設置(今回は必要なし) -->
// $custom_header_defaults=array(
//   'default-image'=>get_bloginfo('template_url').'/img/hospital_icon.png',
//   // <!-- ↑ヘッダー画像上にテキストをかぶせる -->
// );
// <!-- カスタムヘッダー機能を有効にする -->
// add_theme_support('custom-header', $custom_header_defaults);

// カスタムメニュー用
register_nav_menu('mainmenu','メインメニュー');

//ページネーション
function pagenation($pages = '', $range = 2){
    $showitems = ($range * 2)+1; //表示するページ数(5ページを表示)

    global $paged; //現在のページ値
    if(empty($paged)) $paged = 1; //デフォルトのページ

    if($pages == ''){
        global $wp_query;
        $pages = $wp_query->max_num_pages;
        if(!$pages){
            $pages = 1;
        }
    }

    if(1 != $pages){
        echo "<div class=\"pagenation\">\n";
        echo "<ul>\n";
        if($paged > 1) echo "<li class=\"prev\"><a href='".get_pagenum_link($paged - 1)."'>Prev</a></li>\n";

        for($i=1; $i<=$pages; $i++){
            if(1 != $pages && (!($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems)){
                echo($paged == $i)? "<li class=\"active\">".$i."</li>\n":"<li><a href='".get_pagenum_link($i)."'>".$i."</a></li>\n";
            }
        }
    }

    if($paged < $pages) echo "<li class=\"next\"><a href=\"".get_pagenum_link($paged + 1)."\">Next</a></li>\n";
    echo "</ul>\n";
    echo "</div>\n";

}

// //カスタムフィールド
// //投稿ページへ表示するカスタムボックスを定義する
// add_action('admin_menu','add_custom_inputbox');
// //追加した表示項目のデータ更新・保存のためのアクションフック
// add_action('save_post','save_custom_postdata');

// //入力項目がどの投稿タイプのページに表示されるのかの設定6:00~
// function add_custom_inputbox(){
//     //第一引数：編集画面のhtmlに挿入されるid属性名
//     //第二引数：管理画面に表示されるカスタムフィールド名
//     //第三引数：メタボックスの中に出力される関数名
//     //第四引数：管理画面に表示するカスタムフィールドの場所（postなら投稿、pageなら固定ページ）
//     //第五引数：配置される順序
//     add_meta_box('about_id','ABOUT入力欄','custom_area','page','normal');
// }

// //管理画面に表示される内容
// function custom_area(){
//     global $post;

//     echo 'お知らせ　：<textarea cols="50" rows="5" name="about_msg">'.get_post_meta($post->ID,'about',true).'</textarea><br>';
// }

// //投稿ボタンを押した際のデータ更新と保存
// function save_custom_postdata($post_id){
//     // var_dump($about_msg);

//     $about_msg = '';

//     //カスタムフィールドに入力された情報を取り出す
//     if(isset($_POST['about_msg'])){
//         $about_msg = $_POST['about_msg'];
//     }

//     //内容が変わっていた場合、保存していた情報を更新する
//     if($about_msg != get_post_meta($post_id,'about',true)){
//         update_post_meta($post_id,'about',$about_msg);
//     }elseif($about_msg == ''){
//         delete_post_meta($post_id,'about',get_post_meta($post_id,'about',true));
//     }
// }


//カスタムウィジェット
//ウィジェットエリアを作成する関数がどれなのかを登録する
add_action('widgets_init',function(){  //非推奨'my_widgets_area');
//ウィジェット自体の作成する関数がどれなのか登録する
register_widget('my_widgets_item1');  //非推奨add_action('widgets_init',create_function('','return register_widget("my_widgets_item1");'));
});

//ウィジェットエリアを作成する
if(function_exists('register_sidebar')){

    register_sidebar(array(
        'name' => 'インフォエリア',
        'id' => 'widget_merit',
        'before_wiget' => '<div>',
        'after_wiget' => '</div>'
    ));
}

//ウィジェット自体を作成
class my_widgets_item1 extends WP_Widget{  //class名はadd_actionで登録したもの/exteds~ ~というクラスを継承
    
    //初期化(管理画面で表示するウィジェットの名前を設定する) //定型
    function my_widgets_item1(){ //←初期化用のメソッドはクラス名と同じ名前に
        parent::WP_Widget(false, $name = 'インフォウィジェット'); //parent::~ 継承した~のコンストラクタを呼び出せる /第二引数には管理画面で表示させるウィジェットの名前を指定
    }

    //ウィジェットの入力項目を作成する処理
    function form($instance){ //formメソッド→wordpressから自動的に入力された除法がわたってくるのでそれを入れる値を引数に指定
        //入力された情報をサニタイズして変数へ格納
        $title = esc_attr($instance['title']); //esc_attrでhtmlのタグを取り除く
        $body = esc_attr($instance['body']);
    ?>
        <p>
          <label for="<?php echo $this->get_field_id('title'); ?>"><!--ウィジェットのtitleという入力項目のidを取得 -->
            <?php echo 'タイトル：'; ?>
          </label>
          <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text"
                value="<?php echo $title; ?>" /> <!--このinputのphp一文でDBに保存された情報が表示できる-->
        </p>
        <p>
          <label for="<?php echo $this->get_field_id('body'); ?>">
            <?php echo '内容'; ?>
          </label>
          <textarea class="widefat" cols="20" rows="16" id="<?php echo $this->get_field_id('body'); ?>" 
                    name="<?php echo $this->get_field_name('body'); ?>"><?php echo $body; ?></textarea>
        </p>
        <?php
    }

    //ウィジェットに入力された情報を保存する処理
    function update($new_instance,$old_instance){ //メソッドupdate,引数に新しく入力された情報と、DBに元々保存されてた情報二つ呼び出す
        $instance = $old_instance; //新しく作った変数にDBから引っ張ってきた古い情報を格納
        $instance['title'] = strip_tags($new_instance['title']); //strip_tagsサニタイズ、phpやhtmlタグを取り除く/DBに保存された情報は配列形式で渡ってくるので、キー(値)を指定してあげてその配列内に、新しく入力された情報というのを格納してあげます。
        $instance['body'] = trim($new_instance['body']); //trimサニタイズ、先頭と最後尾の空白を取り除く

        return $instance;
    }

    //管理画面から入力されたウィジェットを画面に表示する処理
    function widget($args,$instance){ //メソッドwidget,第一引数にはウィジェットエリア自体の情報が、配列の形式で渡ってくる。「register_sidebar()」の関数を使って渡した配列、この連想配列が、そのままこの中に入ってきます。第二引数の方に、データベースに保存された情報が渡ってくる
        //配列を変数に展開
        extract($args);

        //ウィジェットから入力された情報を取得
        $title = apply_filters('widget_title',$instance['title']);
        $body = apply_filters('widget_body',$instance['body']);

        //ウィジェットから入力された除法がある場合、htmlを表示する
        if($title){
?>
          <section class="panel">
            <h2><?php echo $title; ?></h2>
            <p>
              <?php echo $body; ?>
            </p>
          </section>
<?php
        }
    }
}
?>
