<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link http://wpdocs.osdn.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define( 'DB_NAME', 'wordpress20200116' );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', 'root' );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', 'root' );

/** MySQL のホスト名 */
define( 'DB_HOST', 'localhost' );

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8mb4' );

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define( 'DB_COLLATE', '' );

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '5|lkj&wk%{i8IJH2PX7[i~J*vYlVV6kFa;IeMDdJb?D~+`4#Rupd[2I]kXp)/x/U' );
define( 'SECURE_AUTH_KEY',  '@Jk}wX;t$m*P1GZqjq:W7>e{TU5I>UmA71L|*_aD(omZLE=R*rVOKBG,T|-j I~p' );
define( 'LOGGED_IN_KEY',    '(M3vPGuv4{(>=V pYY.`vS({c0T&t[X+Z1$fIpV5Mn$S:hzL}9DDOxrlib`f6QB!' );
define( 'NONCE_KEY',        '|y/S?y)O7h9V`1Q]nMhO{Pv#xo_c 7to>3PNB,Y8TtI^10 lzwZa=HCy+nS(S(C*' );
define( 'AUTH_SALT',        'S^Xkwic|b`olnMafrshyG.^*V0y e6h*gLM2JqlH<i<E+dA#fahNY-5tJ)gK?!#X' );
define( 'SECURE_AUTH_SALT', 'z3]$Z1N^ugm[|^(>t=OP|7o8}!p-hTMU~t!(Bg~3)69-1[?:LrVtkAC_E5JZUY|g' );
define( 'LOGGED_IN_SALT',   'V#<3|*].Vcy?H<fzCy=gAjP-|Ae`hPO(DA6!jbK)Sj@N] k`f40bb)14:BGp}$gg' );
define( 'NONCE_SALT',       'b>qS?8/>BqeCk04D8KW)UOUpku$W]~U48^%B?k!GV?M=Hw3<<gkdm[Yl6.vGBAl|' );

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数については Codex をご覧ください。
 *
 * @link http://wpdocs.osdn.jp/WordPress%E3%81%A7%E3%81%AE%E3%83%87%E3%83%90%E3%83%83%E3%82%B0
 */
define( 'WP_DEBUG', false );

/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
