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
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'wv' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         'Ia[Y?Axn~7.OvxBP|t4SmeEsQa!<~jE&Lv*yP;eJ?PGMwXzIWJbwPwrFcZkoa q_' );
define( 'SECURE_AUTH_KEY',  'QVEN>E[:m6oW_*WOkW/F@tBi2d/LZ2UC}t~W[5|yyD:^0n1<`YB6 jYP,<%|RXV%' );
define( 'LOGGED_IN_KEY',    '.b@tEUPvC[d{M]n!*rh/F`NE> VcCf^~f4u1DZzQ(YsYhmfBg&$ $W.[$1I70hJJ' );
define( 'NONCE_KEY',        'K!5}*::Nj900ykG`Hp*%A,^5{pT#aC#S/N~xc|nZV8@2V*Wjvm,)9<D+^$Cst2li' );
define( 'AUTH_SALT',        'Y~2It#&+@lYR=}!Mi%kv%cFT6mkJ}ytctIs>WyZ:l[>q7]*Fk{iX+F9=`uMTh7[-' );
define( 'SECURE_AUTH_SALT', 'z/K?wQ6xmP.,tSb`<:e^s@Z|_mXog?el<Qi|uCeOIF-m&QQ)w1caDkFeS*7=Q>Ml' );
define( 'LOGGED_IN_SALT',   '<!wCXI:^_Ad7F}O5}xN7WDOf$D&z*[4goP8rAY(r2EB_[]E[Wf+i{,)re`AXJj5T' );
define( 'NONCE_SALT',       'l!_^Ih)/[#Oe#<io<e I<w]q3jz8q.AZcy?$%h$X`]V::zS5[TJEwtB^wCV$.1!0' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
