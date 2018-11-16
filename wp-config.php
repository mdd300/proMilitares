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
define('DB_NAME', 'bd_pro');

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
define('AUTH_KEY',         '#]ge3:.8FQ~>k&ge9_eL@i:8cZaEt[Qz+?AU3k{?w$?o4w`3,OyaMznLS<Ws]1R/');
define('SECURE_AUTH_KEY',  'B3M|aJ}q[w67C*x)Sbwc(jNRD0(l?qS$0}4^*KI^8sU9L`FV:{j1=UZfBN?Ki[`Q');
define('LOGGED_IN_KEY',    'kNHK;!VdI$(qfD3A?up-ibCRm;.0xC?SuBUC_Pm|.N{I@_%dTL}2>SLUkl DV}v,');
define('NONCE_KEY',        'rHrZ,oTTD(S6ucKoT9+I,ackr<$g%d=F40tn2]V5qj9{#}+u]{r;=Av_xOz |>FH');
define('AUTH_SALT',        'l;&5?so0T#i{>[-|Gje1QVyzm630pD*G 6^43|s6<zr3M1SS54[6#SLRn]>lQrLj');
define('SECURE_AUTH_SALT', ',CEZkyu cw]!oy1Z:b;y*;CBrS,GQ#8~~!uv)<{=qO3<fuZW+o<}(}@u$rrlx<E]');
define('LOGGED_IN_SALT',   'cRaCJ7o?c(`4y#GVG(vws<q4=:&`eYVA)J}W_?Knk/?I7cL8QF<TMVQMBQ9A+fN>');
define('NONCE_SALT',       '.Ss72A^fy<q:z%KT<SYDk=KMHr_drObcQh]ZPv`V(cE}Q)gl3HO!XZr4NQ&uw8u{');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

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
