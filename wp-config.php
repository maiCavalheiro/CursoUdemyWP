<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'wpdatabase');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'h{6Z(P4jpc.Wi1rX^@uHuT{4&^EQSf~CPEqD_R*lJ lO$^F/3p(9]xI #L*(1J(@');
define('SECURE_AUTH_KEY',  '2n8+(yG79^iR&}~b%#H}SLb2cC; 3u[9}jbC-F<zl{w?Ww WG#`^HugC2Pp+~wN(');
define('LOGGED_IN_KEY',    'c5;<@]$C[iN(:-)GGS B-|.=X!FPQz2iU8^n/.J{`8lEBY4Su UnIWv1Dm$(0t^#');
define('NONCE_KEY',        'u(=g4Kd+rMl2ci/?/C:v|S xp#3$K?kA.&t]B`)6^Ka:FcXt>=;2S9,zZLl:id5H');
define('AUTH_SALT',        'vj%oyKXy`4.2Bu*bD0D|cYqb$lK!te*!lY_/fT6` wWeya(r(6vc$lH;1`:ctAa&');
define('SECURE_AUTH_SALT', 'gTjD/5{iFH= WqS.fGv:3xKOVYYumSPy[Gm(adU<VE{A{m|L&MW4fWb^S@#]>?pR');
define('LOGGED_IN_SALT',   '{5AXyyp5Aoo,$&nKrJ=7mkVm[w57`cUuD(&KF^nFo)wn!MP=2}4J)FW,0syES>:U');
define('NONCE_SALT',       'G+/a{Xd@VOa{==$FX X$YS@om%lJ87&r.(@],mOoStpcdLz@$+X.]mYR*{&Y@<6Y');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wpcrs_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
