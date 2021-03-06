<?php

/**
 * The 'auctions' routeprefix
 *
 * @package 		XenAuction
 * @author 			Nathan Rijksen <nathan@naatan.com>
 * @copyright		2012 Naatan.com
 */
class XenAuction_RoutePrefix_Auctions
{

	/**
	 * Nothing fancy going on here, just a standard controller pointer
	 * 
	 * @param string                      	$routePath 
	 * @param Zend_Controller_Request_Http	$request   
	 * @param XenForo_Router               	$router    
	 * 
	 * @return parent::getRouteMatch 		XenAuction_ControllerPublic_Auction
	 */
	public function match($routePath, Zend_Controller_Request_Http $request, XenForo_Router $router)
	{
		return $router->getRouteMatch('XenAuction_ControllerPublic_Auction', $routePath, 'auctions');
	}


}