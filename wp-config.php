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
define('DB_NAME', 'wordpress4');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'root');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', 'root');

/** MySQL のホスト名 */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'x dsrh<*iCM.WTw7 |a((!^&(-c$l:HdWBc~3e&gHbq[%n8+!UM_<BQ=#aS h5+8');
define('SECURE_AUTH_KEY',  'j:p-wtW$?6Lqp+]t<4Q@`m_-+rF(0*y8)5-7XZ2MS~k*?V#h8*p6a$<Y+;y,GcK5');
define('LOGGED_IN_KEY',    'f-}|MWRb]}@K0-)8$FWFJgra6:Fb(=L:F~Ym|}d:.mG_DWFP6+6MmI3^-WFH,Vh+');
define('NONCE_KEY',        'Y%tO_t,b,=?6u$d ?WRZn@Y6;tgg/,c0h)2>>]C_8m3@zJM:(Kncz!ank8bQA`wV');
define('AUTH_SALT',        ']d39YW}=0$^+pa$.m.2xk7c3+eP{pvVF|-,/<i6fejU{oc3xV?_^|c@*Ypt^KSni');
define('SECURE_AUTH_SALT', 'Zi#43B$9O8T$-*n.:*8#n]]ij+fN+)scR^5%F p_/oCO5D:@`A$BW8WS:YI|#oMk');
define('LOGGED_IN_SALT',   '3Z$:N2oZ4%<H4e`&YxPnr!p^M7r6OoV@Q7HoyccxAD(I,-t~^h:hP;,Iu7hH@;vP');
define('NONCE_SALT',       'vAHa90;%pKEvqu+hU.mBzd9{*~*9H[G@]Aq3i2-EUX|D6O}uYo~w8;0a{6YYcz!+');

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