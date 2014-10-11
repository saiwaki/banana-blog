<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、MySQL、テーブル接頭辞、秘密鍵、言語、ABSPATH の設定を含みます。
 * より詳しい情報は {@link http://wpdocs.sourceforge.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86 
 * wp-config.php の編集} を参照してください。MySQL の設定情報はホスティング先より入手できます。
 *
 * このファイルはインストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さず、このファイルを "wp-config.php" という名前でコピーして直接編集し値を
 * 入力してもかまいません。
 *
 * @package WordPress
 */

// 注意: 
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.sourceforge.jp/Codex:%E8%AB%87%E8%A9%B1%E5%AE%A4 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define('DB_NAME', 'heroku_af9c84e3b970023');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'b8ccaa2a6b7584');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', 'caecbd73');

/** MySQL のホスト名 */
define('DB_HOST', 'us-cdbr-iron-east-01.cleardb.net');

/** データベースのテーブルを作成する際のデータベースの文字セット */
define('DB_CHARSET', 'utf8');

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define('DB_COLLATE', '');

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'zjkw1WXoP(z!iN&.Ay%GF|NF9AX+beLO-@r1Lz=p_W._aynnM;}*JhC;3-a0Kr3E');
define('SECURE_AUTH_KEY',  'I~L92E~ZXv{U8DS< >SJEB4A2)VG=*6b3#Z=h}HDEl1k^s-5MC66[7Q,1k[N]E2T');
define('LOGGED_IN_KEY',    'Ul;E;*.!@y.>jR??r^ih%rwY` )xx-34M&9r:$|gG!T+Z#9:*Oa$#f6L3%sz~R%+');
define('NONCE_KEY',        '1uQS0TT_^|?pcZgjSWscbWFtZ73>,ZxPlk*9^tHx;/^-b[=a7DN^Yyf*(3@<yduF');
define('AUTH_SALT',        '50ip IA@^Wh(8J]o1cwi|U^(hZvP!^o6P+Lx_u:Ec>I;tewh@k+B%^ZOIu)wti+a');
define('SECURE_AUTH_SALT', '~XTddeI,|Vq)lnM?y[T/..K6-0%XO^DZu-`wgil||$v<$D~%bayMJ0/zn%hvV3^i');
define('LOGGED_IN_SALT',   '1+znFIM5[Z!Ijm9tI7!GQZysVW/82syS9,N[?~_!d%21Oot|fq.E0Hp.SQ(_,}}t');
define('NONCE_SALT',       'FM4z[bb{AT|*htr6wfG/+m$LoG4TTx2zYRbF9iKCN(d<7%zz^ELLZs{)3A[v3B+=');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 */
define('WP_DEBUG', false);

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
