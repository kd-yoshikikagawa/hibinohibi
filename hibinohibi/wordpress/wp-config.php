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
define('DB_NAME', 'LAA1105405-sgfq9c');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'LAA1105405');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', 'yx31Cc82');

/** MySQL のホスト名 */
define('DB_HOST', 'mysql140.phy.lolipop.lan');

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
define('AUTH_KEY', 'H=[WLpNw3}Y22ATfxK8wh]Z=($B*^Ea2)gO[:AQHyDJOE3Lgy(g)[{:iuNnH/^U=');
define('SECURE_AUTH_KEY', 'PO"Gv"uv[]chT[iv|gnNat9_XsK*m+RNgPm~N$5}Onlp/PJ~H7!owiz;jx%YB&8Z');
define('LOGGED_IN_KEY', 'Meu4pFru4guk8Vb>RL$/(DD!z~O+K!UNHSyZ@1+$16}Q<sAg3-vy2<kSq24C3S*O');
define('NONCE_KEY', 'z+)G2$`.TLfZZfbCXNWgEqcUuA?SXswPY]S1aLK:rK8Tap)AE}.5[*yOLulI_}Zq');
define('AUTH_SALT', 'qibIGnLnLDsZ=kh_nLJ_u_HcXhK+:!#Nue3^nw].V?y-.yoPV3Cl^_&Yex(}zl<%');
define('SECURE_AUTH_SALT', 'CzU[<i}||->iK=kq90KExQmhBXfE4%,8M$dXc:x)Lhc<;[P}d.mV}S4`>M-U-`A&');
define('LOGGED_IN_SALT', '&<&^_JkQ6<V$:`T<s8thJjwP_c%Fd|=$NR!%V~h.pHwMoqHuwAGaH{+;Be`MJ6$H');
define('NONCE_SALT', '7&^Q.2(GQ/N{3uY4$P)n{6xuLNg%%l.Sodd=sW@i0{P*sbWc~q`@=;gq91ig5TD*');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'wp1_';

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
define('WP_DEBUG', false);

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
  define('ABSPATH', dirname(__FILE__) . '/');
}

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
