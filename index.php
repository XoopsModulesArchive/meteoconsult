<?php

// ------------------------------------------------------------------------- //
//            		      Meteoconsult 1.2				                     //
//               E-Xoops France - http://www.e-xoopsfr.com                   //
//	             Adapatation pour XOOPS 2.03 par Franck Montuelle            //
//               http://www.interdetective.net                               //
// ------------------------------------------------------------------------- //
require __DIR__ . '/header.php';

if ('meteoconsult' == $xoopsConfig['startpage']) {
    $xoopsOption['show_rblock'] = 1;

    require XOOPS_ROOT_PATH . '/header.php';

    make_cblock();

    echo '<br>';
} else {
    $xoopsOption['show_rblock'] = 0;

    require XOOPS_ROOT_PATH . '/header.php';
}

function fr()
{
    global $xoopsConfig, $xoopsUser, $xoopsDB, $xoopsTheme, $xoopsLogger;

    require dirname(__DIR__, 2) . '/header.php';

    OpenTable();

    require __DIR__ . '/flags.php';

    echo '<table width="300" height="96" border="1" align="center">';

    echo '<tr>';

    echo '<td><div align="center"> ';

    echo '<tr> ';

    echo "<td width=\"50%\"> <div align=\"center\"><strong>Aujourd'hui</strong></div></td>";

    echo '<td width="50%"> <div align="center"><strong>Demain</strong></div></td>';

    echo '</tr>';

    echo '<tr> ';

    echo '<td><div align="center"><img src="http://www.meteoconsult.fr/image/meteodirect/md_france24h.gif"></div></td>';

    echo '<td><div align="center"><img src="http://www.meteoconsult.fr/image/meteodirect/md_france48h.gif"></div></td>';

    echo '</tr>';

    echo '</table>';

    CloseTable();

    require dirname(__DIR__, 2) . '/footer.php';
}

function be()
{
    global $xoopsConfig, $xoopsUser, $xoopsDB, $xoopsTheme, $xoopsLogger;

    require dirname(__DIR__, 2) . '/header.php';

    OpenTable();

    require __DIR__ . '/flags.php';

    echo '<p>&nbsp;</p><table width="70%" border="0" align="center">';

    echo '<tr> ';

    echo '<div align="center"><strong>Météo en Belgique</strong></div></tr><tr>';

    $date = date('Y-m-d');

    echo '<td><div align="center"><img src="http://www.meteoconsult.fr/image/carte/bel/bel_' . $date . '.gif"></div></td>';

    echo '</tr>';

    echo '</table>';

    CloseTable();

    require dirname(__DIR__, 2) . '/footer.php';
}

function eu()
{
    global $xoopsConfig, $xoopsUser, $xoopsDB, $xoopsTheme, $xoopsLogger;

    require dirname(__DIR__, 2) . '/header.php';

    OpenTable();

    require __DIR__ . '/flags.php';

    echo '<table width="100%" border="0" align="center">';

    echo '<tr>';

    echo '<div align="center"><strong>Météo en Europe</strong></div></tr><tr>';

    $date = date('Y-m-d');

    echo '<td><div align="center"><img src="http://www.meteoconsult.fr/image/carte/eur/eur_' . $date . '.gif"></div></td>';

    echo '</tr>';

    echo '</table>';

    CloseTable();

    require dirname(__DIR__, 2) . '/footer.php';
}

function it()
{
    global $xoopsConfig, $xoopsUser, $xoopsDB, $xoopsTheme, $xoopsLogger;

    require dirname(__DIR__, 2) . '/header.php';

    OpenTable();

    require __DIR__ . '/flags.php';

    echo '<table width="100%" border="0" align="center">';

    echo '<tr>';

    echo '<div align="center"><strong>Météo en Italie</strong></div></tr><tr>';

    $date = date('Y-m-d');

    echo '<td><div align="center"><img src="http://www.meteoconsult.fr/image/carte/ita/ita_' . $date . '.gif"></div></td>';

    echo '</tr>';

    echo '</table>';

    CloseTable();

    require dirname(__DIR__, 2) . '/footer.php';
}

function es()
{
    global $xoopsConfig, $xoopsUser, $xoopsDB, $xoopsTheme, $xoopsLogger;

    require dirname(__DIR__, 2) . '/header.php';

    OpenTable();

    require __DIR__ . '/flags.php';

    echo '<table width="100%" border="0" align="center">';

    echo '<tr>';

    echo '<div align="center"><strong>Météo en Espagne</strong></div></tr><tr>';

    $date = date('Y-m-d');

    echo '<td><div align="center"><img src="http://www.meteoconsult.fr/image/carte/esp/esp_' . $date . '.gif"></div></td>';

    echo '</tr>';

    echo '</table>';

    CloseTable();

    require dirname(__DIR__, 2) . '/footer.php';
}

function de()
{
    global $xoopsConfig, $xoopsUser, $xoopsDB, $xoopsTheme, $xoopsLogger;

    require dirname(__DIR__, 2) . '/header.php';

    OpenTable();

    require __DIR__ . '/flags.php';

    echo '<table width="100%" border="0" align="center">';

    echo '<tr>';

    echo '<div align="center"><strong>Météo en Allemagne</strong></div></tr><tr>';

    $date = date('Y-m-d');

    echo '<td><div align="center"><img src="http://www.meteoconsult.fr/image/carte/all/all_' . $date . '.gif"></div></td>';

    echo '</tr>';

    echo '</table>';

    CloseTable();

    require dirname(__DIR__, 2) . '/footer.php';
}

$op = !empty($_POST['op']) ? $_POST['op'] : $_GET['op'];

switch ($op) {
    case 'fr':
        fr();
        break;
    case 'be':
        be();
        break;
    case 'eu':
        eu();
        break;
    case 'it':
        it();
        break;
    case 'es':
        es();
        break;
    case 'de':
        de();
        break;
    default:
        eu();
        break;
}
