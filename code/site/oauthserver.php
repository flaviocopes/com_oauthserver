<?
/**
 * @version		0.1.0
 * @package		com_oauthserver
 * @copyright	Copyright (C) 2010 Joocode. All rights reserved.
 * @license		GNU GPLv2 <http://www.gnu.org/licenses/old-licenses/gpl-2.0.html>
 * @link        http://www.joocode.com
 */

KFactory::get('site::com.oauthserver.dispatcher')->dispatch(KRequest::get('get.view', 'cmd'));