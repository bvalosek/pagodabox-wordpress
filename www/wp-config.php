<?php

// ---------------------------------------------------------------------------------
// enviroment settings

// db
define('DB_NAME', 'charfen-labs');
define('DB_USER', 'root');
define('DB_PASSWORD', 'root');
define('DB_HOST', '127.0.0.1');
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');

// error output
define('WP_DEBUG', true);
define('WP_DEBUG_LOG', false);
define('WP_DEBUG_DISPLAY', true);

// ---------------------------------------------------------------------------------
// general setup, not environment dependent

// lock that shit down
define('DISALLOW_FILE_EDIT', true);
define('DISALLOW_FILE_MODS', true);

// Change content to root directry, hashtag hacks
define('WP_CONTENT_DIR', $_SERVER['DOCUMENT_ROOT']);
define('WP_CONTENT_URL', '');

// salt
define('AUTH_KEY',         'N<OC:7t0ufRk>yaS|G!eki:QPec!P[Ah/|t${<A2$G>G!PKx;.i;~K $[u|%M]`$');
define('SECURE_AUTH_KEY',  'g=4K19%m,5@sxD>g$k$m`J;FfvujIbo+MOl!r-` yE+t<})AuF1{)BUl_0PDq;u%');
define('LOGGED_IN_KEY',    'Q1(P]@NLh4LgVepc+/ 0?<_|9NwYQ-5N7g7|j7Nhww3)4x+G5PBw9EhTiI=Co4!Y');
define('NONCE_KEY',        'u<8c9v{VeJKKuT~F0O9vkw@@}W:h-?sxoKE<jCI_![u+of/KrnM>:TgDeB&U 5]3');
define('AUTH_SALT',        'u/ogq)!b!6d<E(!{hIHgZ+/!a)<QUoQ&-^DM+qvVsSHmX5e2MzT1zj!Tr*|Rg1hB');
define('SECURE_AUTH_SALT', '=??A-*_;31]_20GfUL]wcxE+FKIH:ZN5ox9ez4dbE)d!+xqyn!uT,pCEkp$}~YNP');
define('LOGGED_IN_SALT',   '+{V#b.9`28<mXbx4j)r966|63|*G+x`X3_O3]pHo[q>[3JN5?&gOvQN-+pfU?O-I');
define('NONCE_SALT',       '0{SVctQ+<-|-DhWOsy#FkP$So^mh:-RbCO+^{-.8TDLl-#e^7M`DhuNN2^pHARH[');

// in-db prefix
$table_prefix  = 'wp_';

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
    define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

