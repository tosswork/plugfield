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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'plugfield_toss' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'plugfield_toss' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', 'pG35255plkjdasd$#' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'mysql001.centralserver.com.br:3306' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         'kha$V(V:cE4)&]3HJ/9=?CZL.A;g<&**cI(%B}&lzmm, BY!HV)x9}$7<B*L%/0@' );
define( 'SECURE_AUTH_KEY',  'z@ma@,0pTV>ZXzvDN}GuAn#;^|^W1<jazw78Lw:9XDA}>>+wRy#N<ED@#su jtM}' );
define( 'LOGGED_IN_KEY',    'cK9c4:QB1ioP.SqFKqZV%`<11KQbRP#[B/}4 Ik O?NiAwon/G4 OvRR87-.)T[m' );
define( 'NONCE_KEY',        'w0oL4q[xHY/fwjtUE)9Zj,kP,B9-C=fh_>e|)JoxW//Q!r=F?^>,#NDrG({ZneJp' );
define( 'AUTH_SALT',        '>th`tJt};K]-E9=@u[3Hy9Qa$-{<fVEEEB3t~[pW s+GJ$!q)^jF-vhlcgxSnDsV' );
define( 'SECURE_AUTH_SALT', 'rf#/~>%9y/d4y?odZlPNpyYlb{DF -qjNc~Hf2_H-V77EH6x@[c=%0Q(=U6NbcNg' );
define( 'LOGGED_IN_SALT',   'e~0&eB@9XK$Qzr`M._[@Rr6vi?7K{RbX8S,?62zILG61=aZIhXq7^]sa6;fX8[6%' );
define( 'NONCE_SALT',       '3#N}%=kU_[Ek<1kMfl;ic+qf%Z5+7WqIhvf3$N2(w85H1Paz+gSVl!>(L.A!I`7x' );

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

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
