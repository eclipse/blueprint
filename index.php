<?php
/*******************************************************************************
 * Copyright (c) 2009 Eclipse Foundation and others.
 * All rights reserved. This program and the accompanying materials
 * are made available under the terms of the Eclipse Public License v1.0
 * which accompanies this distribution, and is available at
 * http://www.eclipse.org/legal/epl-v10.html
 *
 * Contributors:
 *    Costin Leau - VMware
 *******************************************************************************/

	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	
	
	$App 	= new App();	
	$Nav	= new Nav();	
	$Menu 	= new Menu();		
	
	include($App->getProjectCommon());
	
	# Define these here, or in _projectCommon.php for site-wide values
	$pageTitle 		= "Eclipse Gemini Blueprint - Home";
	
	// # Paste your HTML content between the EOHTML markers!
	$html = file_get_contents('home/_index.html');

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);

?>