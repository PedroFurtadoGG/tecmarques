<?php
/** 
 * As configurações básicas do WordPress.
 *
 * Esse arquivo contém as seguintes configurações: configurações de MySQL, Prefixo de Tabelas,
 * Chaves secretas, Idioma do WordPress, e ABSPATH. Você pode encontrar mais informações
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. Você pode obter as configurações de MySQL de seu servidor de hospedagem.
 *
 * Esse arquivo é usado pelo script ed criação wp-config.php durante a
 * instalação. Você não precisa usar o site, você pode apenas salvar esse arquivo
 * como "wp-config.php" e preencher os valores.
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar essas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'tecma713_2016');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'tecma713_2016');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'tec@next');

/** nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer cookies existentes. Isto irá forçar todos os usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'p{$:8!Hx{n15qaIj+IK58yShYTV%IN@kP,l>g b@M=Eiw`C/D0>`Q0Jnll63}/NB');
define('SECURE_AUTH_KEY',  'y6tO*ibddPb2r$c{Oi3xR.J(zX.o_Dn?H</,|Y08C59mu,C6dI,O5o#UQUJD%1v+');
define('LOGGED_IN_KEY',    '>RRF@:oiWL2y+[t9*ZDt`fqu*A[`4B#`8#K,)~i?Yw$sW85p,Ni+yDZI,@[<=X`c');
define('NONCE_KEY',        'N)QT3C`.3E^$&3dzBwJ:z7-;%*.HZKxs>j,hu?|2$o|~K0y/_ 7MWcuiX~%IDv C');
define('AUTH_SALT',        '?5048=|7DG  )E+7vke=4Ov;MC!rxd5bS?V[1~xaEgA_vh349f7+72BE>gIGY!=Y');
define('SECURE_AUTH_SALT', 'f><QHS?@|#9OZuWS-LS])YNG;XTzO<J(`3TkiSs,)i5Bt^hP5rh+r^uADd{M*JLX');
define('LOGGED_IN_SALT',   '5si19u=9hRe}R7H=+;ukEYq`;GK{T(L,0gQH@@Q]%q@!#kKuf[Bu)i*vuv3j>y{r');
define('NONCE_SALT',       ' nJ*1RI8^DboWpW{k[*vgpI3c-Jpxk!Ae4Jd|(;f+4cg=/(T-fL$&E+OdgjpCM>$');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';


/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * altere isto para true para ativar a exibição de avisos durante o desenvolvimento.
 * é altamente recomendável que os desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');
