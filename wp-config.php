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
define('DB_NAME', '4rodas');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'q6YCP.[rOn *cTSRQw=-+/F!SVr>*X7;A1DK4<:JIeb;cykZ#%{TL%|#?q,g&LGe');
define('SECURE_AUTH_KEY',  'I!($E(!F/:%ujx%r8m 2uKEY))!/, uKQY+@pI,+8:7+jL5lZq6}Wmi%IwWmELe5');
define('LOGGED_IN_KEY',    '=Hm4|{ 4#A|aT|*Ei+vHY(/>h_UF2|%?1?]JD5*KE,-~^-Qkx[Oex*W`s|&5{K23');
define('NONCE_KEY',        '}*c2)zIw|sq280,U`|f5Czu.eoI[6,IuLtsRv_<(6lQH#Ar2bgN&[J|a-v%dx% !');
define('AUTH_SALT',        'Rr-<AT--*iX0YQ}]qi=IOO`<8uY.|-c-:p<?$#Ws|92tkGgjPIfVX;sDH2K6HzMY');
define('SECURE_AUTH_SALT', 'u:(!<;j4TV%+oT,;774K@(>]nAwOVf@. ec<|v{+<N/Enc$x3pp`^q/`z~%5v+$%');
define('LOGGED_IN_SALT',   '5RBcSkq4$!iA>EZ5ELoM5$K|=R{q{oUEoSG~Ea#s|vLuCq|dti6*5hm5CdL-8@3[');
define('NONCE_SALT',       '3 pc*ZkBj-)!(B?Bw--L-6=+(Hp_|43E+5[q$@|aewH uEnyr-n>:D@5qqUY]AEL');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'qr_';


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
