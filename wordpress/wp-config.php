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
 * @link https://ja.wordpress.org/support/article/editing-wp-config-php/
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
define( 'DB_NAME', 'wordpress' );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', 'root' );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'aa%txQQWavk;oYvwM|isvqfiz4{G68Oa`)FiCO_Ym.Dw#BWP?9?!^]b@0s..|qWx' );
define( 'SECURE_AUTH_KEY',  'OoYG==swudD?vN-NH1q8LH~UGc1x )7[Nx{6:P9iS*_qYUq}_0&z;HosM=>SWDB8' );
define( 'LOGGED_IN_KEY',    'H6tz`tqqG0KPLH_@t+Kesyz[V<[A$};Yv)gD}}$5%7ljY^C$KO%stmMrP7x]>Ad$' );
define( 'NONCE_KEY',        'y|9f|fx$aK}>r;kOsW=SHMJV*MnzU&f1rG8qvuXCO,{g8uC9>p?_pkY?P6./`/NV' );
define( 'AUTH_SALT',        '>zO^84x9LU1SbvP<^e*9T:YJ, +t^J$cLxK,{hs)KR2_q6Gt]bqc#Iy3XuyT {p{' );
define( 'SECURE_AUTH_SALT', 'RP!mDUdGw;8gUb#S$[`HAsIA%G{[rM6O`AH2T9Fx+^f32~wJrd6Hy$l0ul(~yOjD' );
define( 'LOGGED_IN_SALT',   '9-QNf+tD[Ieqfs}K50N2Ay3n9^Hc4G,ZDF(y@O<4HU7Qh+*ME)<*#<*;`adQAw/z' );
define( 'NONCE_SALT',       '>{@TR!H0tkr@N^cHxHC] 1f>}(Mgtvd)OMif=?s5{kmomS5c>Yz}:uW3s]J3!#>b' );

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
 * その他のデバッグに利用できる定数についてはドキュメンテーションをご覧ください。
 *
 * @link https://ja.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
