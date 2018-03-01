<?php

$wgLBFactoryConf = array(
	'class' => 'LBFactoryMulti',
	'sectionsByDB' => array(
		'aerosswiki' => 'c2',
		'allthetropeswiki' => 'c2',
		'aleenghawiki' => 'c2',
		'altaussieruleswiki' => 'c2',
		'arefepvawiki' => 'c2',
		'ayrshirewiki' => 'c2',
		'ballaratpubswiki' => 'c2',
		'beatstationwiki' => 'c2',
		'bpwiki' => 'c2',
		'bgowiki' => 'c2',
		'bigforestwiki' => 'c2',
		'bqwiki' => 'c2',
		'buswiki' => 'c2',
		'calexitwiki' => 'c2',
		'cargodb' => 'c2',
		'centralauth' => 'c2',
		'christipediawiki' => 'c2',
		'christianmusicwiki' => 'c2',
		'christianmusictempwiki' => 'c2',
		'ciptamediawiki' => 'c2',
		'ciudadciclistawiki' => 'c2',
		'constwiki' => 'c2',
		'cpiwiki' => 'c2',
		'ctswiki' => 'c2',
		'dariawikiwiki' => 'c2',
		'daesocialwiki' => 'c2',
		'diagnostikwiki' => 'c2',
		'diggywikipolskawiki' => 'c2',
		'emulationwiki' => 'c2',
		'encyclopaediawiki' => 'c2',
		'extloadwiki' => 'c2',
		'fcuwiki' => 'c2',
		'fourleafficswiki' => 'c2',
		'hellointernetwiki' => 'c2',
		'hirapediawiki' => 'c2',
		'houseofettlingarfreyuwiki' => 'c2',
		'jacksonheightswiki' => 'c2',
		'jawp2chwiki' => 'c2',
		'jayuwikiwiki' => 'c2',
		'karniarutheniawiki' => 'c2',
		'kingkillerwiki' => 'c2',
		'librewiki' => 'c2',
		'linenwiki' => 'c2',
		'lionhearttaleswiki' => 'c2',
		'loginwiki' => 'c2',
		'madciclistawiki' => 'c2',
		'madgendersciencewiki' => 'c2',
		'maiasongcontestwiki' => 'c2',
		'magnaversewiki' => 'c2',
		'mc2wiki' => 'c2',
		'meregoswiki' => 'c2',
		'metawiki' => 'c1',
		'mikrodevwiki' => 'c2',
		'miraewiki' => 'c2',
		'musicarchivewiki' => 'c2',
		'networksdatabasewiki' => 'c2',
		'nextlevelwikiwiki' => 'c2',
		'nonbinarywiki' => 'c2',
		'nvcwiki' => 'c2',
		'ourmxfestwiki' => 'c2',
		'ordiswiki' => 'c2',
		'pathfinderwiki' => 'c2',
		'plasticssongcontestwiki' => 'c2',
		'platprojectwiki' => 'c2',
		'pluspiwiki' => 'c2',
		'pocketmonsterswiki' => 'c2',
		'podpediawiki' => 'c2',
		'poserdazfreebieswiki' => 'c2',
		'r2wiki' => 'c2',
		'recentiawiki' => 'c2',
		'revitwiki' => 'c2',
		'scruffy2wiki' => 'c2',
		'sdiywiki' => 'c2',
		'sentrieswiki' => 'c2',
		'sidemwiki' => 'c2',
		'sirikotwiki' => 'c2',
		'songcontestswiki' => 'c2',
		'southparkfanwiki' => 'c3',
		'speleowiki' => 'c2',
		'spiralwiki' => 'c2',
		'spritopiawiki' => 'c2',
		'summerolympicswiki' => 'c2',
		'sumroletaericwiki' => 'c2',
		'templatewiki' => 'c2',
		'teriawiki' => 'c2',
		'thegreatwarwiki' => 'c2',
		'thelonsdalebattalionwiki' => 'c2',
		'tiandiwiki' => 'c2',
		'truecapitalistwiki' => 'c2',
		'ubrwikiwiki' => 'c2',
		'uncyclopediawiki' => 'c2',
		'unionwiki' => 'c2',
		'unionnorteamericanawiki' => 'c2',
		'ussewiki' => 'c2',
		'utamacrosswiki' => 'c2',
		'valentinaprojectwiki' => 'c2',
		'viagroupiawiki' => 'c2',
		'whentheycrywiki' => 'c2',
		'wiki1776wiki' => 'c2',
		'wikiversitywiki' => 'c2',
		'wikivywiki' => 'c2',
		'worldpediawiki' => 'c2',
		'ylscwiki' => 'c2',
		'yoavfreundwiki' => 'c2',
		'yourosongcontestwiki' => 'c2',
		'zendariwiki' => 'c2',
		'zhdelwiki' => 'c2',
	),
	'sectionLoads' => array(
		'DEFAULT' => array(
			'db2' => 1,
		),
		'c1' => array(
			'db2' => 1,
		),
		'c2' => array(
			'db3' => 1,
		),
		'c3' => array(
			'db4' => 1,
		),
	),
	'serverTemplate' => array(
		'dbname' => $wgDBname,
		'user' => $wgDBuser,
		'password' => $wgDBpassword,
		'type' => 'mysql',
	),
	'hostsByName' => array(
		'db2' => '81.4.125.112',
		'db3' => '81.4.127.157',
		'db4' => '81.4.109.166',
	),
	'externalLoads' => array(
		'echo' => array(
			'db2' => 1, // should echo c1
		),
	),
	'readOnlyBySection' => array(
	//	'DEFAULT' => '',
	//	'c1' => 'Maintenance ongoing on the database server.',
	//	'c2' => 'To avoid data loss, this wiki is in read-only mode.',
	//	'c3' => 'Maintenance ongoing on the database server.',
	),
);
