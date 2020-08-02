<?php
/* === WELCOME TO ORBIT NEXT FRAMEWORK  ===
 *                     
 *	  By :
 *
 *     ██████╗ ██████╗ ██████╗ ██╗████████╗    ████████╗██╗   ██╗██████╗ ███╗   ██╗███████╗██████╗ 
 *    ██╔═══██╗██╔══██╗██╔══██╗██║╚══██╔══╝    ╚══██╔══╝██║   ██║██╔══██╗████╗  ██║██╔════╝██╔══██╗
 *    ██║   ██║██████╔╝██████╔╝██║   ██║          ██║   ██║   ██║██████╔╝██╔██╗ ██║█████╗  ██████╔╝
 *    ██║   ██║██╔══██╗██╔══██╗██║   ██║          ██║   ██║   ██║██╔══██╗██║╚██╗██║██╔══╝  ██╔══██╗
 *    ╚██████╔╝██║  ██║██████╔╝██║   ██║          ██║   ╚██████╔╝██║  ██║██║ ╚████║███████╗██║  ██║
 *     ╚═════╝ ╚═╝  ╚═╝╚═════╝ ╚═╝   ╚═╝          ╚═╝    ╚═════╝ ╚═╝  ╚═╝╚═╝  ╚═══╝╚══════╝╚═╝  ╚═╝
 *          
 *  AUTHOR : MOHAMED GUEYE [Orbit Turner] - Email: orbitturner@gmail.com - Country: Senegal
 */
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager,
    Doctrine\ORM\Configuration;
use Orbit\libs\engine\Err_Manager;

require_once "vendor/autoload.php";
require "config/db.conf.php";
/**
 * Dev Mode
 */
$cache = new \Doctrine\Common\Cache\ArrayCache;
/**
 * Prod Mode
 */
//$cache = new \Doctrine\Common\Cache\ApcCache;

$config = new Configuration;
$config->setMetadataCacheImpl($cache);
$driverImpl = $config->newDefaultAnnotationDriver(__DIR__."/src/entities/");
$config->setMetadataDriverImpl($driverImpl);
$config->setQueryCacheImpl($cache);
$config->setProxyDir(__DIR__.'/cache/proxies/');
$config->setProxyNamespace('Orbit\Proxies');
/**
 * Dev Mode
 */
$config->setAutoGenerateProxyClasses(true);

/**
 * Prod Mode
 */
//$config->setAutoGenerateProxyClasses(false);

$entityManager = EntityManager::create($orm, $config);

try {
    $entityManager->getConnection()->connect();
} catch (\Throwable $err) {
    $error = new Err_Manager();
    $message = $err->getMessage();
    $error->messageError($message);
}
