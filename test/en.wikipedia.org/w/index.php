<!DOCTYPE html>
<html class="client-nojs vector-feature-language-in-header-enabled vector-feature-language-in-main-page-header-disabled vector-feature-page-tools-pinned-disabled vector-feature-toc-pinned-clientpref-1 vector-feature-main-menu-pinned-disabled vector-feature-limited-width-clientpref-1 vector-feature-limited-width-content-enabled vector-feature-custom-font-size-clientpref-1 vector-feature-appearance-pinned-clientpref-1 vector-feature-night-mode-enabled skin-theme-clientpref-day vector-sticky-header-enabled vector-toc-available" lang="en" dir="ltr">
<head>
<meta charset="UTF-8">
<title>Line search - Wikipedia</title>
<script>(function(){var className="client-js vector-feature-language-in-header-enabled vector-feature-language-in-main-page-header-disabled vector-feature-page-tools-pinned-disabled vector-feature-toc-pinned-clientpref-1 vector-feature-main-menu-pinned-disabled vector-feature-limited-width-clientpref-1 vector-feature-limited-width-content-enabled vector-feature-custom-font-size-clientpref-1 vector-feature-appearance-pinned-clientpref-1 vector-feature-night-mode-enabled skin-theme-clientpref-day vector-sticky-header-enabled vector-toc-available";var cookie=document.cookie.match(/(?:^|; )enwikimwclientpreferences=([^;]+)/);if(cookie){cookie[1].split('%2C').forEach(function(pref){className=className.replace(new RegExp('(^| )'+pref.replace(/-clientpref-\w+$|[^\w-]+/g,'')+'-clientpref-\\w+( |$)'),'$1'+pref+'$2');});}document.documentElement.className=className;}());RLCONF={"wgBreakFrames":false,"wgSeparatorTransformTable":["",""],"wgDigitTransformTable":["",""],"wgDefaultDateFormat":"dmy","wgMonthNames":["","January","February","March","April","May","June","July","August","September","October","November","December"],"wgRequestId":"0d06cc42-cf33-4116-b869-48111bfd91bd","wgCanonicalNamespace":"","wgCanonicalSpecialPageName":false,"wgNamespaceNumber":0,"wgPageName":"Line_search","wgTitle":"Line search","wgCurRevisionId":1239715615,"wgRevisionId":1239715615,"wgArticleId":1537058,"wgIsArticle":true,"wgIsRedirect":false,"wgAction":"view","wgUserName":null,"wgUserGroups":["*"],"wgCategories":["Articles with short description","Short description matches Wikidata","Optimization algorithms and methods"],"wgPageViewLanguage":"en","wgPageContentLanguage":"en","wgPageContentModel":"wikitext","wgRelevantPageName":"Line_search","wgRelevantArticleId":1537058,"wgIsProbablyEditable":true,"wgRelevantPageIsProbablyEditable":true,"wgRestrictionEdit":[],"wgRestrictionMove":[],"wgNoticeProject":"wikipedia","wgCiteReferencePreviewsActive":false,"wgFlaggedRevsParams":{"tags":{"status":{"levels":1}}},"wgMediaViewerOnClick":true,"wgMediaViewerEnabledByDefault":true,"wgPopupsFlags":0,"wgVisualEditor":{"pageLanguageCode":"en","pageLanguageDir":"ltr","pageVariantFallbacks":"en"},"wgMFDisplayWikibaseDescriptions":{"search":true,"watchlist":true,"tagline":false,"nearby":true},"wgWMESchemaEditAttemptStepOversample":false,"wgWMEPageLength":9000,"wgMetricsPlatformUserExperiments":{"active_experiments":[],"overrides":[],"enrolled":[],"assigned":[],"subject_ids":[],"sampling_units":[]},"wgEditSubmitButtonLabelPublish":true,"wgULSPosition":"interlanguage","wgULSisCompactLinksEnabled":false,"wgVector2022LanguageInHeader":true,"wgULSisLanguageSelectorEmpty":false,"wgWikibaseItemId":"Q3278015","wgCheckUserClientHintsHeadersJsApi":["brands","architecture","bitness","fullVersionList","mobile","model","platform","platformVersion"],"GEHomepageSuggestedEditsEnableTopics":true,"wgGESuggestedEditsTaskTypes":{"taskTypes":["copyedit","link-recommendation"],"unavailableTaskTypes":[]},"wgGETopicsMatchModeEnabled":false,"wgGELevelingUpEnabledForUser":false};
RLSTATE={"ext.globalCssJs.user.styles":"ready","site.styles":"ready","user.styles":"ready","ext.globalCssJs.user":"ready","user":"ready","user.options":"loading","mediawiki.codex.messagebox.styles":"ready","ext.math.styles":"ready","ext.cite.styles":"ready","skins.vector.search.codex.styles":"ready","skins.vector.styles":"ready","skins.vector.icons":"ready","jquery.makeCollapsible.styles":"ready","ext.wikimediamessages.styles":"ready","ext.visualEditor.desktopArticleTarget.noscript":"ready","ext.uls.interlanguage":"ready","wikibase.client.init":"ready"};RLPAGEMODULES=["ext.xLab","ext.cite.ux-enhancements","site","mediawiki.page.ready","jquery.makeCollapsible","mediawiki.toc","skins.vector.js","ext.centralNotice.geoIP","ext.centralNotice.startUp","ext.gadget.ReferenceTooltips","ext.gadget.switcher","ext.urlShortener.toolbar","ext.centralauth.centralautologin","mmv.bootstrap","ext.popups","ext.visualEditor.desktopArticleTarget.init","ext.visualEditor.targetLoader","ext.echo.centralauth","ext.eventLogging","ext.wikimediaEvents","ext.navigationTiming","ext.uls.interface","ext.cx.eventlogging.campaigns","ext.cx.uls.quick.actions","wikibase.client.vector-2022","ext.checkUser.clientHints","ext.quicksurveys.init","ext.growthExperiments.SuggestedEditSession"];</script>
<script>(RLQ=window.RLQ||[]).push(function(){mw.loader.impl(function(){return["user.options@12s5i",function($,jQuery,require,module){mw.user.tokens.set({"patrolToken":"+\\","watchToken":"+\\","csrfToken":"+\\"});
}];});});</script>
<link rel="stylesheet" href="/w/load.php?lang=en&amp;modules=ext.cite.styles%7Cext.math.styles%7Cext.uls.interlanguage%7Cext.visualEditor.desktopArticleTarget.noscript%7Cext.wikimediamessages.styles%7Cjquery.makeCollapsible.styles%7Cmediawiki.codex.messagebox.styles%7Cskins.vector.icons%2Cstyles%7Cskins.vector.search.codex.styles%7Cwikibase.client.init&amp;only=styles&amp;printable=1&amp;skin=vector-2022">
<script async="" src="/w/load.php?lang=en&amp;modules=startup&amp;only=scripts&amp;printable=1&amp;raw=1&amp;skin=vector-2022"></script>
<meta name="ResourceLoaderDynamicStyles" content="">
<link rel="stylesheet" href="/w/load.php?lang=en&amp;modules=site.styles&amp;only=styles&amp;printable=1&amp;skin=vector-2022">
<meta name="generator" content="MediaWiki 1.45.0-wmf.13">
<meta name="referrer" content="origin">
<meta name="referrer" content="origin-when-cross-origin">
<meta name="robots" content="noindex,follow,max-image-preview:standard">
<meta name="format-detection" content="telephone=no">
<meta name="viewport" content="width=1120">
<meta property="og:title" content="Line search - Wikipedia">
<meta property="og:type" content="website">
<link rel="preconnect" href="//upload.wikimedia.org">
<link rel="alternate" media="only screen and (max-width: 640px)" href="//en.m.wikipedia.org/wiki/Line_search">
<link rel="alternate" type="application/x-wiki" title="Edit this page" href="/w/index.php?title=Line_search&amp;action=edit">
<link rel="apple-touch-icon" href="/static/apple-touch/wikipedia.png">
<link rel="icon" href="/static/favicon/wikipedia.ico">
<link rel="search" type="application/opensearchdescription+xml" href="/w/rest.php/v1/search" title="Wikipedia (en)">
<link rel="EditURI" type="application/rsd+xml" href="//en.wikipedia.org/w/api.php?action=rsd">
<link rel="canonical" href="https://en.wikipedia.org/wiki/Line_search">
<link rel="license" href="https://creativecommons.org/licenses/by-sa/4.0/deed.en">
<link rel="alternate" type="application/atom+xml" title="Wikipedia Atom feed" href="/w/index.php?title=Special:RecentChanges&amp;feed=atom">
<link rel="dns-prefetch" href="//meta.wikimedia.org" />
<link rel="dns-prefetch" href="auth.wikimedia.org">
</head>
<body class="skin--responsive skin-vector skin-vector-search-vue mediawiki ltr sitedir-ltr mw-hide-empty-elt ns-0 ns-subject mw-editable page-Line_search rootpage-Line_search skin-vector-2022 action-view"><a class="mw-jump-link" href="#bodyContent">Jump to content</a>
<div class="vector-header-container">
	<header class="vector-header mw-header no-font-mode-scale">
		<div class="vector-header-start">
			<nav class="vector-main-menu-landmark" aria-label="Site">
				
<div id="vector-main-menu-dropdown" class="vector-dropdown vector-main-menu-dropdown vector-button-flush-left vector-button-flush-right"  title="Main menu" >
	<input type="checkbox" id="vector-main-menu-dropdown-checkbox" role="button" aria-haspopup="true" data-event-name="ui.dropdown-vector-main-menu-dropdown" class="vector-dropdown-checkbox "  aria-label="Main menu"  >
	<label id="vector-main-menu-dropdown-label" for="vector-main-menu-dropdown-checkbox" class="vector-dropdown-label cdx-button cdx-button--fake-button cdx-button--fake-button--enabled cdx-button--weight-quiet cdx-button--icon-only " aria-hidden="true"  ><span class="vector-icon mw-ui-icon-menu mw-ui-icon-wikimedia-menu"></span>

<span class="vector-dropdown-label-text">Main menu</span>
	</label>
	<div class="vector-dropdown-content">


				<div id="vector-main-menu-unpinned-container" class="vector-unpinned-container">
		
<div id="vector-main-menu" class="vector-main-menu vector-pinnable-element">
	<div
	class="vector-pinnable-header vector-main-menu-pinnable-header vector-pinnable-header-unpinned"
	data-feature-name="main-menu-pinned"
	data-pinnable-element-id="vector-main-menu"
	data-pinned-container-id="vector-main-menu-pinned-container"
	data-unpinned-container-id="vector-main-menu-unpinned-container"
>
	<div class="vector-pinnable-header-label">Main menu</div>
	<button class="vector-pinnable-header-toggle-button vector-pinnable-header-pin-button" data-event-name="pinnable-header.vector-main-menu.pin">move to sidebar</button>
	<button class="vector-pinnable-header-toggle-button vector-pinnable-header-unpin-button" data-event-name="pinnable-header.vector-main-menu.unpin">hide</button>
</div>

	
<div id="p-navigation" class="vector-menu mw-portlet mw-portlet-navigation"  >
	<div class="vector-menu-heading">
		Navigation
	</div>
	<div class="vector-menu-content">
		
		<ul class="vector-menu-content-list">
			
			<li id="n-mainpage-description" class="mw-list-item"><a href="/wiki/Main_Page" title="Visit the main page [z]" accesskey="z"><span>Main page</span></a></li><li id="n-contents" class="mw-list-item"><a href="/wiki/Wikipedia:Contents" title="Guides to browsing Wikipedia"><span>Contents</span></a></li><li id="n-currentevents" class="mw-list-item"><a href="/wiki/Portal:Current_events" title="Articles related to current events"><span>Current events</span></a></li><li id="n-randompage" class="mw-list-item"><a href="/wiki/Special:Random" title="Visit a randomly selected article [x]" accesskey="x"><span>Random article</span></a></li><li id="n-aboutsite" class="mw-list-item"><a href="/wiki/Wikipedia:About" title="Learn about Wikipedia and how it works"><span>About Wikipedia</span></a></li><li id="n-contactpage" class="mw-list-item"><a href="//en.wikipedia.org/wiki/Wikipedia:Contact_us" title="How to contact Wikipedia"><span>Contact us</span></a></li>
		</ul>
		
	</div>
</div>

	
	
<div id="p-interaction" class="vector-menu mw-portlet mw-portlet-interaction"  >
	<div class="vector-menu-heading">
		Contribute
	</div>
	<div class="vector-menu-content">
		
		<ul class="vector-menu-content-list">
			
			<li id="n-help" class="mw-list-item"><a href="/wiki/Help:Contents" title="Guidance on how to use and edit Wikipedia"><span>Help</span></a></li><li id="n-introduction" class="mw-list-item"><a href="/wiki/Help:Introduction" title="Learn how to edit Wikipedia"><span>Learn to edit</span></a></li><li id="n-portal" class="mw-list-item"><a href="/wiki/Wikipedia:Community_portal" title="The hub for editors"><span>Community portal</span></a></li><li id="n-recentchanges" class="mw-list-item"><a href="/wiki/Special:RecentChanges" title="A list of recent changes to Wikipedia [r]" accesskey="r"><span>Recent changes</span></a></li><li id="n-upload" class="mw-list-item"><a href="/wiki/Wikipedia:File_upload_wizard" title="Add images or other media for use on Wikipedia"><span>Upload file</span></a></li><li id="n-specialpages" class="mw-list-item"><a href="/wiki/Special:SpecialPages"><span>Special pages</span></a></li>
		</ul>
		
	</div>
</div>

</div>

				</div>

	</div>
</div>

		</nav>
			
<a href="/wiki/Main_Page" class="mw-logo">
	<img class="mw-logo-icon" src="/static/images/icons/wikipedia.png" alt="" aria-hidden="true" height="50" width="50">
	<span class="mw-logo-container skin-invert">
		<img class="mw-logo-wordmark" alt="Wikipedia" src="/static/images/mobile/copyright/wikipedia-wordmark-en.svg" style="width: 7.5em; height: 1.125em;">
		<img class="mw-logo-tagline" alt="The Free Encyclopedia" src="/static/images/mobile/copyright/wikipedia-tagline-en.svg" width="117" height="13" style="width: 7.3125em; height: 0.8125em;">
	</span>
</a>

		</div>
		<div class="vector-header-end">
			
<div id="p-search" role="search" class="vector-search-box-vue  vector-search-box-collapses vector-search-box-show-thumbnail vector-search-box-auto-expand-width vector-search-box">
	<a href="/wiki/Special:Search" class="cdx-button cdx-button--fake-button cdx-button--fake-button--enabled cdx-button--weight-quiet cdx-button--icon-only search-toggle" title="Search Wikipedia [f]" accesskey="f"><span class="vector-icon mw-ui-icon-search mw-ui-icon-wikimedia-search"></span>

<span>Search</span>
	</a>
	<div class="vector-typeahead-search-container">
		<div class="cdx-typeahead-search cdx-typeahead-search--show-thumbnail cdx-typeahead-search--auto-expand-width">
			<form action="/w/index.php" id="searchform" class="cdx-search-input cdx-search-input--has-end-button">
				<div id="simpleSearch" class="cdx-search-input__input-wrapper"  data-search-loc="header-moved">
					<div class="cdx-text-input cdx-text-input--has-start-icon">
						<input
							class="cdx-text-input__input mw-searchInput" autocomplete="off"
							 type="search" name="search" placeholder="Search Wikipedia" aria-label="Search Wikipedia" autocapitalize="sentences" spellcheck="false" title="Search Wikipedia [f]" accesskey="f" id="searchInput"
							>
						<span class="cdx-text-input__icon cdx-text-input__start-icon"></span>
					</div>
					<input type="hidden" name="title" value="Special:Search">
				</div>
				<button class="cdx-button cdx-search-input__end-button">Search</button>
			</form>
		</div>
	</div>
</div>

			<nav class="vector-user-links vector-user-links-wide" aria-label="Personal tools">
	<div class="vector-user-links-main">
	
<div id="p-vector-user-menu-preferences" class="vector-menu mw-portlet emptyPortlet"  >
	<div class="vector-menu-content">
		
		<ul class="vector-menu-content-list">
			
			
		</ul>
		
	</div>
</div>

	
<div id="p-vector-user-menu-userpage" class="vector-menu mw-portlet emptyPortlet"  >
	<div class="vector-menu-content">
		
		<ul class="vector-menu-content-list">
			
			
		</ul>
		
	</div>
</div>

	<nav class="vector-appearance-landmark" aria-label="Appearance">
		
<div id="vector-appearance-dropdown" class="vector-dropdown "  title="Change the appearance of the page&#039;s font size, width, and color" >
	<input type="checkbox" id="vector-appearance-dropdown-checkbox" role="button" aria-haspopup="true" data-event-name="ui.dropdown-vector-appearance-dropdown" class="vector-dropdown-checkbox "  aria-label="Appearance"  >
	<label id="vector-appearance-dropdown-label" for="vector-appearance-dropdown-checkbox" class="vector-dropdown-label cdx-button cdx-button--fake-button cdx-button--fake-button--enabled cdx-button--weight-quiet cdx-button--icon-only " aria-hidden="true"  ><span class="vector-icon mw-ui-icon-appearance mw-ui-icon-wikimedia-appearance"></span>

<span class="vector-dropdown-label-text">Appearance</span>
	</label>
	<div class="vector-dropdown-content">


			<div id="vector-appearance-unpinned-container" class="vector-unpinned-container">
				
			</div>
		
	</div>
</div>

	</nav>
	
<div id="p-vector-user-menu-notifications" class="vector-menu mw-portlet emptyPortlet"  >
	<div class="vector-menu-content">
		
		<ul class="vector-menu-content-list">
			
			
		</ul>
		
	</div>
</div>

	
<div id="p-vector-user-menu-overflow" class="vector-menu mw-portlet"  >
	<div class="vector-menu-content">
		
		<ul class="vector-menu-content-list">
			<li id="pt-sitesupport-2" class="user-links-collapsible-item mw-list-item user-links-collapsible-item"><a data-mw="interface" href="https://donate.wikimedia.org/?wmf_source=donate&amp;wmf_medium=sidebar&amp;wmf_campaign=en.wikipedia.org&amp;uselang=en" class=""><span>Donate</span></a>
</li>
<li id="pt-createaccount-2" class="user-links-collapsible-item mw-list-item user-links-collapsible-item"><a data-mw="interface" href="/w/index.php?title=Special:CreateAccount&amp;returnto=Line+search&amp;returntoquery=printable%3Dyes" title="You are encouraged to create an account and log in; however, it is not mandatory" class=""><span>Create account</span></a>
</li>
<li id="pt-login-2" class="user-links-collapsible-item mw-list-item user-links-collapsible-item"><a data-mw="interface" href="/w/index.php?title=Special:UserLogin&amp;returnto=Line+search&amp;returntoquery=printable%3Dyes" title="You&#039;re encouraged to log in; however, it&#039;s not mandatory. [o]" accesskey="o" class=""><span>Log in</span></a>
</li>

			
		</ul>
		
	</div>
</div>

	</div>
	
<div id="vector-user-links-dropdown" class="vector-dropdown vector-user-menu vector-button-flush-right vector-user-menu-logged-out"  title="Log in and more options" >
	<input type="checkbox" id="vector-user-links-dropdown-checkbox" role="button" aria-haspopup="true" data-event-name="ui.dropdown-vector-user-links-dropdown" class="vector-dropdown-checkbox "  aria-label="Personal tools"  >
	<label id="vector-user-links-dropdown-label" for="vector-user-links-dropdown-checkbox" class="vector-dropdown-label cdx-button cdx-button--fake-button cdx-button--fake-button--enabled cdx-button--weight-quiet cdx-button--icon-only " aria-hidden="true"  ><span class="vector-icon mw-ui-icon-ellipsis mw-ui-icon-wikimedia-ellipsis"></span>

<span class="vector-dropdown-label-text">Personal tools</span>
	</label>
	<div class="vector-dropdown-content">


		
<div id="p-personal" class="vector-menu mw-portlet mw-portlet-personal user-links-collapsible-item"  title="User menu" >
	<div class="vector-menu-content">
		
		<ul class="vector-menu-content-list">
			
			<li id="pt-sitesupport" class="user-links-collapsible-item mw-list-item"><a href="https://donate.wikimedia.org/?wmf_source=donate&amp;wmf_medium=sidebar&amp;wmf_campaign=en.wikipedia.org&amp;uselang=en"><span>Donate</span></a></li><li id="pt-createaccount" class="user-links-collapsible-item mw-list-item"><a href="/w/index.php?title=Special:CreateAccount&amp;returnto=Line+search&amp;returntoquery=printable%3Dyes" title="You are encouraged to create an account and log in; however, it is not mandatory"><span class="vector-icon mw-ui-icon-userAdd mw-ui-icon-wikimedia-userAdd"></span> <span>Create account</span></a></li><li id="pt-login" class="user-links-collapsible-item mw-list-item"><a href="/w/index.php?title=Special:UserLogin&amp;returnto=Line+search&amp;returntoquery=printable%3Dyes" title="You&#039;re encouraged to log in; however, it&#039;s not mandatory. [o]" accesskey="o"><span class="vector-icon mw-ui-icon-logIn mw-ui-icon-wikimedia-logIn"></span> <span>Log in</span></a></li>
		</ul>
		
	</div>
</div>

<div id="p-user-menu-anon-editor" class="vector-menu mw-portlet mw-portlet-user-menu-anon-editor"  >
	<div class="vector-menu-heading">
		Pages for logged out editors <a href="/wiki/Help:Introduction" aria-label="Learn more about editing"><span>learn more</span></a>
	</div>
	<div class="vector-menu-content">
		
		<ul class="vector-menu-content-list">
			
			<li id="pt-anoncontribs" class="mw-list-item"><a href="/wiki/Special:MyContributions" title="A list of edits made from this IP address [y]" accesskey="y"><span>Contributions</span></a></li><li id="pt-anontalk" class="mw-list-item"><a href="/wiki/Special:MyTalk" title="Discussion about edits from this IP address [n]" accesskey="n"><span>Talk</span></a></li>
		</ul>
		
	</div>
</div>

	
	</div>
</div>

</nav>

		</div>
	</header>
</div>
<div class="mw-page-container">
	<div class="mw-page-container-inner">
		<div class="vector-sitenotice-container">
			<div id="siteNotice"><!-- CentralNotice --></div>
		</div>
		<div class="vector-column-start">
			<div class="vector-main-menu-container">
		<div id="mw-navigation">
			<nav id="mw-panel" class="vector-main-menu-landmark" aria-label="Site">
				<div id="vector-main-menu-pinned-container" class="vector-pinned-container">
				
				</div>
		</nav>
		</div>
	</div>
	<div class="vector-sticky-pinned-container">
				<nav id="mw-panel-toc" aria-label="Contents" data-event-name="ui.sidebar-toc" class="mw-table-of-contents-container vector-toc-landmark">
					<div id="vector-toc-pinned-container" class="vector-pinned-container">
					<div id="vector-toc" class="vector-toc vector-pinnable-element">
	<div
	class="vector-pinnable-header vector-toc-pinnable-header vector-pinnable-header-pinned"
	data-feature-name="toc-pinned"
	data-pinnable-element-id="vector-toc"
	
	
>
	<h2 class="vector-pinnable-header-label">Contents</h2>
	<button class="vector-pinnable-header-toggle-button vector-pinnable-header-pin-button" data-event-name="pinnable-header.vector-toc.pin">move to sidebar</button>
	<button class="vector-pinnable-header-toggle-button vector-pinnable-header-unpin-button" data-event-name="pinnable-header.vector-toc.unpin">hide</button>
</div>


	<ul class="vector-toc-contents" id="mw-panel-toc-list">
		<li id="toc-mw-content-text"
			class="vector-toc-list-item vector-toc-level-1">
			<a href="#" class="vector-toc-link">
				<div class="vector-toc-text">(Top)</div>
			</a>
		</li>
		<li id="toc-One-dimensional_line_search"
		class="vector-toc-list-item vector-toc-level-1 vector-toc-list-item-expanded">
		<a class="vector-toc-link" href="#One-dimensional_line_search">
			<div class="vector-toc-text">
				<span class="vector-toc-numb">1</span>
				<span>One-dimensional line search</span>
			</div>
		</a>
		
			<button aria-controls="toc-One-dimensional_line_search-sublist" class="cdx-button cdx-button--weight-quiet cdx-button--icon-only vector-toc-toggle">
				<span class="vector-icon mw-ui-icon-wikimedia-expand"></span>
				<span>Toggle One-dimensional line search subsection</span>
			</button>
		
		<ul id="toc-One-dimensional_line_search-sublist" class="vector-toc-list">
			<li id="toc-Zero-order_methods"
			class="vector-toc-list-item vector-toc-level-2">
			<a class="vector-toc-link" href="#Zero-order_methods">
				<div class="vector-toc-text">
					<span class="vector-toc-numb">1.1</span>
					<span>Zero-order methods</span>
				</div>
			</a>
			
			<ul id="toc-Zero-order_methods-sublist" class="vector-toc-list">
			</ul>
		</li>
		<li id="toc-First-order_methods"
			class="vector-toc-list-item vector-toc-level-2">
			<a class="vector-toc-link" href="#First-order_methods">
				<div class="vector-toc-text">
					<span class="vector-toc-numb">1.2</span>
					<span>First-order methods</span>
				</div>
			</a>
			
			<ul id="toc-First-order_methods-sublist" class="vector-toc-list">
			</ul>
		</li>
		<li id="toc-Curve-fitting_methods"
			class="vector-toc-list-item vector-toc-level-2">
			<a class="vector-toc-link" href="#Curve-fitting_methods">
				<div class="vector-toc-text">
					<span class="vector-toc-numb">1.3</span>
					<span>Curve-fitting methods</span>
				</div>
			</a>
			
			<ul id="toc-Curve-fitting_methods-sublist" class="vector-toc-list">
			</ul>
		</li>
	</ul>
	</li>
	<li id="toc-Multi-dimensional_line_search"
		class="vector-toc-list-item vector-toc-level-1 vector-toc-list-item-expanded">
		<a class="vector-toc-link" href="#Multi-dimensional_line_search">
			<div class="vector-toc-text">
				<span class="vector-toc-numb">2</span>
				<span>Multi-dimensional line search</span>
			</div>
		</a>
		
		<ul id="toc-Multi-dimensional_line_search-sublist" class="vector-toc-list">
		</ul>
	</li>
	<li id="toc-Overcoming_local_minima"
		class="vector-toc-list-item vector-toc-level-1 vector-toc-list-item-expanded">
		<a class="vector-toc-link" href="#Overcoming_local_minima">
			<div class="vector-toc-text">
				<span class="vector-toc-numb">3</span>
				<span>Overcoming local minima</span>
			</div>
		</a>
		
		<ul id="toc-Overcoming_local_minima-sublist" class="vector-toc-list">
		</ul>
	</li>
	<li id="toc-See_also"
		class="vector-toc-list-item vector-toc-level-1 vector-toc-list-item-expanded">
		<a class="vector-toc-link" href="#See_also">
			<div class="vector-toc-text">
				<span class="vector-toc-numb">4</span>
				<span>See also</span>
			</div>
		</a>
		
		<ul id="toc-See_also-sublist" class="vector-toc-list">
		</ul>
	</li>
	<li id="toc-References"
		class="vector-toc-list-item vector-toc-level-1 vector-toc-list-item-expanded">
		<a class="vector-toc-link" href="#References">
			<div class="vector-toc-text">
				<span class="vector-toc-numb">5</span>
				<span>References</span>
			</div>
		</a>
		
		<ul id="toc-References-sublist" class="vector-toc-list">
		</ul>
	</li>
	<li id="toc-Further_reading"
		class="vector-toc-list-item vector-toc-level-1 vector-toc-list-item-expanded">
		<a class="vector-toc-link" href="#Further_reading">
			<div class="vector-toc-text">
				<span class="vector-toc-numb">6</span>
				<span>Further reading</span>
			</div>
		</a>
		
		<ul id="toc-Further_reading-sublist" class="vector-toc-list">
		</ul>
	</li>
</ul>
</div>

					</div>
		</nav>
			</div>
		</div>
		<div class="mw-content-container">
			<main id="content" class="mw-body">
				<header class="mw-body-header vector-page-titlebar no-font-mode-scale">
					<nav aria-label="Contents" class="vector-toc-landmark">
						
<div id="vector-page-titlebar-toc" class="vector-dropdown vector-page-titlebar-toc vector-button-flush-left"  title="Table of Contents" >
	<input type="checkbox" id="vector-page-titlebar-toc-checkbox" role="button" aria-haspopup="true" data-event-name="ui.dropdown-vector-page-titlebar-toc" class="vector-dropdown-checkbox "  aria-label="Toggle the table of contents"  >
	<label id="vector-page-titlebar-toc-label" for="vector-page-titlebar-toc-checkbox" class="vector-dropdown-label cdx-button cdx-button--fake-button cdx-button--fake-button--enabled cdx-button--weight-quiet cdx-button--icon-only " aria-hidden="true"  ><span class="vector-icon mw-ui-icon-listBullet mw-ui-icon-wikimedia-listBullet"></span>

<span class="vector-dropdown-label-text">Toggle the table of contents</span>
	</label>
	<div class="vector-dropdown-content">


							<div id="vector-page-titlebar-toc-unpinned-container" class="vector-unpinned-container">
			</div>
		
	</div>
</div>

					</nav>
					<h1 id="firstHeading" class="firstHeading mw-first-heading"><span class="mw-page-title-main">Line search</span></h1>
							
<div id="p-lang-btn" class="vector-dropdown mw-portlet mw-portlet-lang"  >
	<input type="checkbox" id="p-lang-btn-checkbox" role="button" aria-haspopup="true" data-event-name="ui.dropdown-p-lang-btn" class="vector-dropdown-checkbox mw-interlanguage-selector" aria-label="Go to an article in another language. Available in 10 languages"   >
	<label id="p-lang-btn-label" for="p-lang-btn-checkbox" class="vector-dropdown-label cdx-button cdx-button--fake-button cdx-button--fake-button--enabled cdx-button--weight-quiet cdx-button--action-progressive mw-portlet-lang-heading-10" aria-hidden="true"  ><span class="vector-icon mw-ui-icon-language-progressive mw-ui-icon-wikimedia-language-progressive"></span>

<span class="vector-dropdown-label-text">10 languages</span>
	</label>
	<div class="vector-dropdown-content">

		<div class="vector-menu-content">
			
			<ul class="vector-menu-content-list">
				
				<li class="interlanguage-link interwiki-de mw-list-item"><a href="https://de.wikipedia.org/wiki/Liniensuchverfahren" title="Liniensuchverfahren – German" lang="de" hreflang="de" data-title="Liniensuchverfahren" data-language-autonym="Deutsch" data-language-local-name="German" class="interlanguage-link-target"><span>Deutsch</span></a></li><li class="interlanguage-link interwiki-es mw-list-item"><a href="https://es.wikipedia.org/wiki/B%C3%BAsqueda_lineal_(matem%C3%A1ticas)" title="Búsqueda lineal (matemáticas) – Spanish" lang="es" hreflang="es" data-title="Búsqueda lineal (matemáticas)" data-language-autonym="Español" data-language-local-name="Spanish" class="interlanguage-link-target"><span>Español</span></a></li><li class="interlanguage-link interwiki-fa mw-list-item"><a href="https://fa.wikipedia.org/wiki/%D8%AC%D8%B3%D8%AA%D8%AC%D9%88%DB%8C_%D8%AE%D8%B7" title="جستجوی خط – Persian" lang="fa" hreflang="fa" data-title="جستجوی خط" data-language-autonym="فارسی" data-language-local-name="Persian" class="interlanguage-link-target"><span>فارسی</span></a></li><li class="interlanguage-link interwiki-fr mw-list-item"><a href="https://fr.wikipedia.org/wiki/Recherche_lin%C3%A9aire_(optimisation)" title="Recherche linéaire (optimisation) – French" lang="fr" hreflang="fr" data-title="Recherche linéaire (optimisation)" data-language-autonym="Français" data-language-local-name="French" class="interlanguage-link-target"><span>Français</span></a></li><li class="interlanguage-link interwiki-ko mw-list-item"><a href="https://ko.wikipedia.org/wiki/%EC%A7%81%EC%84%A0_%ED%83%90%EC%83%89" title="직선 탐색 – Korean" lang="ko" hreflang="ko" data-title="직선 탐색" data-language-autonym="한국어" data-language-local-name="Korean" class="interlanguage-link-target"><span>한국어</span></a></li><li class="interlanguage-link interwiki-ja mw-list-item"><a href="https://ja.wikipedia.org/wiki/%E7%9B%B4%E7%B7%9A%E6%8E%A2%E7%B4%A2" title="直線探索 – Japanese" lang="ja" hreflang="ja" data-title="直線探索" data-language-autonym="日本語" data-language-local-name="Japanese" class="interlanguage-link-target"><span>日本語</span></a></li><li class="interlanguage-link interwiki-pt mw-list-item"><a href="https://pt.wikipedia.org/wiki/Pesquisa_linear" title="Pesquisa linear – Portuguese" lang="pt" hreflang="pt" data-title="Pesquisa linear" data-language-autonym="Português" data-language-local-name="Portuguese" class="interlanguage-link-target"><span>Português</span></a></li><li class="interlanguage-link interwiki-sl mw-list-item"><a href="https://sl.wikipedia.org/wiki/Minimizacija_v_dani_smeri" title="Minimizacija v dani smeri – Slovenian" lang="sl" hreflang="sl" data-title="Minimizacija v dani smeri" data-language-autonym="Slovenščina" data-language-local-name="Slovenian" class="interlanguage-link-target"><span>Slovenščina</span></a></li><li class="interlanguage-link interwiki-uk mw-list-item"><a href="https://uk.wikipedia.org/wiki/%D0%9B%D1%96%D0%BD%D1%96%D0%B9%D0%BD%D0%B8%D0%B9_%D0%BF%D0%BE%D1%88%D1%83%D0%BA_%D0%B2_%D0%BE%D0%BF%D1%82%D0%B8%D0%BC%D1%96%D0%B7%D0%B0%D1%86%D1%96%D1%97" title="Лінійний пошук в оптимізації – Ukrainian" lang="uk" hreflang="uk" data-title="Лінійний пошук в оптимізації" data-language-autonym="Українська" data-language-local-name="Ukrainian" class="interlanguage-link-target"><span>Українська</span></a></li><li class="interlanguage-link interwiki-zh mw-list-item"><a href="https://zh.wikipedia.org/wiki/%E7%BA%BF%E6%90%9C%E7%B4%A2" title="线搜索 – Chinese" lang="zh" hreflang="zh" data-title="线搜索" data-language-autonym="中文" data-language-local-name="Chinese" class="interlanguage-link-target"><span>中文</span></a></li>
			</ul>
			<div class="after-portlet after-portlet-lang"><span class="wb-langlinks-edit wb-langlinks-link"><a href="https://www.wikidata.org/wiki/Special:EntityPage/Q3278015#sitelinks-wikipedia" title="Edit interlanguage links" class="wbc-editpage">Edit links</a></span></div>
		</div>

	</div>
</div>
</header>
				<div class="vector-page-toolbar vector-feature-custom-font-size-clientpref--excluded">
					<div class="vector-page-toolbar-container">
						<div id="left-navigation">
							<nav aria-label="Namespaces">
								
<div id="p-associated-pages" class="vector-menu vector-menu-tabs mw-portlet mw-portlet-associated-pages"  >
	<div class="vector-menu-content">
		
		<ul class="vector-menu-content-list">
			
			<li id="ca-nstab-main" class="selected vector-tab-noicon mw-list-item"><a href="/wiki/Line_search" title="View the content page [c]" accesskey="c"><span>Article</span></a></li><li id="ca-talk" class="vector-tab-noicon mw-list-item"><a href="/wiki/Talk:Line_search" rel="discussion" title="Discuss improvements to the content page [t]" accesskey="t"><span>Talk</span></a></li>
		</ul>
		
	</div>
</div>

								
<div id="vector-variants-dropdown" class="vector-dropdown emptyPortlet"  >
	<input type="checkbox" id="vector-variants-dropdown-checkbox" role="button" aria-haspopup="true" data-event-name="ui.dropdown-vector-variants-dropdown" class="vector-dropdown-checkbox " aria-label="Change language variant"   >
	<label id="vector-variants-dropdown-label" for="vector-variants-dropdown-checkbox" class="vector-dropdown-label cdx-button cdx-button--fake-button cdx-button--fake-button--enabled cdx-button--weight-quiet" aria-hidden="true"  ><span class="vector-dropdown-label-text">English</span>
	</label>
	<div class="vector-dropdown-content">


					
<div id="p-variants" class="vector-menu mw-portlet mw-portlet-variants emptyPortlet"  >
	<div class="vector-menu-content">
		
		<ul class="vector-menu-content-list">
			
			
		</ul>
		
	</div>
</div>

				
	</div>
</div>

							</nav>
						</div>
						<div id="right-navigation" class="vector-collapsible">
							<nav aria-label="Views">
								
<div id="p-views" class="vector-menu vector-menu-tabs mw-portlet mw-portlet-views"  >
	<div class="vector-menu-content">
		
		<ul class="vector-menu-content-list">
			
			<li id="ca-view" class="selected vector-tab-noicon mw-list-item"><a href="/wiki/Line_search"><span>Read</span></a></li><li id="ca-edit" class="vector-tab-noicon mw-list-item"><a href="/w/index.php?title=Line_search&amp;action=edit" title="Edit this page [e]" accesskey="e"><span>Edit</span></a></li><li id="ca-history" class="vector-tab-noicon mw-list-item"><a href="/w/index.php?title=Line_search&amp;action=history" title="Past revisions of this page [h]" accesskey="h"><span>View history</span></a></li>
		</ul>
		
	</div>
</div>

							</nav>
				
							<nav class="vector-page-tools-landmark" aria-label="Page tools">
								
<div id="vector-page-tools-dropdown" class="vector-dropdown vector-page-tools-dropdown"  >
	<input type="checkbox" id="vector-page-tools-dropdown-checkbox" role="button" aria-haspopup="true" data-event-name="ui.dropdown-vector-page-tools-dropdown" class="vector-dropdown-checkbox "  aria-label="Tools"  >
	<label id="vector-page-tools-dropdown-label" for="vector-page-tools-dropdown-checkbox" class="vector-dropdown-label cdx-button cdx-button--fake-button cdx-button--fake-button--enabled cdx-button--weight-quiet" aria-hidden="true"  ><span class="vector-dropdown-label-text">Tools</span>
	</label>
	<div class="vector-dropdown-content">


									<div id="vector-page-tools-unpinned-container" class="vector-unpinned-container">
						
<div id="vector-page-tools" class="vector-page-tools vector-pinnable-element">
	<div
	class="vector-pinnable-header vector-page-tools-pinnable-header vector-pinnable-header-unpinned"
	data-feature-name="page-tools-pinned"
	data-pinnable-element-id="vector-page-tools"
	data-pinned-container-id="vector-page-tools-pinned-container"
	data-unpinned-container-id="vector-page-tools-unpinned-container"
>
	<div class="vector-pinnable-header-label">Tools</div>
	<button class="vector-pinnable-header-toggle-button vector-pinnable-header-pin-button" data-event-name="pinnable-header.vector-page-tools.pin">move to sidebar</button>
	<button class="vector-pinnable-header-toggle-button vector-pinnable-header-unpin-button" data-event-name="pinnable-header.vector-page-tools.unpin">hide</button>
</div>

	
<div id="p-cactions" class="vector-menu mw-portlet mw-portlet-cactions emptyPortlet vector-has-collapsible-items"  title="More options" >
	<div class="vector-menu-heading">
		Actions
	</div>
	<div class="vector-menu-content">
		
		<ul class="vector-menu-content-list">
			
			<li id="ca-more-view" class="selected vector-more-collapsible-item mw-list-item"><a href="/wiki/Line_search"><span>Read</span></a></li><li id="ca-more-edit" class="vector-more-collapsible-item mw-list-item"><a href="/w/index.php?title=Line_search&amp;action=edit" title="Edit this page [e]" accesskey="e"><span>Edit</span></a></li><li id="ca-more-history" class="vector-more-collapsible-item mw-list-item"><a href="/w/index.php?title=Line_search&amp;action=history"><span>View history</span></a></li>
		</ul>
		
	</div>
</div>

<div id="p-tb" class="vector-menu mw-portlet mw-portlet-tb"  >
	<div class="vector-menu-heading">
		General
	</div>
	<div class="vector-menu-content">
		
		<ul class="vector-menu-content-list">
			
			<li id="t-whatlinkshere" class="mw-list-item"><a href="/wiki/Special:WhatLinksHere/Line_search" title="List of all English Wikipedia pages containing links to this page [j]" accesskey="j"><span>What links here</span></a></li><li id="t-recentchangeslinked" class="mw-list-item"><a href="/wiki/Special:RecentChangesLinked/Line_search" rel="nofollow" title="Recent changes in pages linked from this page [k]" accesskey="k"><span>Related changes</span></a></li><li id="t-upload" class="mw-list-item"><a href="//en.wikipedia.org/wiki/Wikipedia:File_Upload_Wizard" title="Upload files [u]" accesskey="u"><span>Upload file</span></a></li><li id="t-permalink" class="mw-list-item"><a href="/w/index.php?title=Line_search&amp;oldid=1239715615" title="Permanent link to this revision of this page"><span>Permanent link</span></a></li><li id="t-info" class="mw-list-item"><a href="/w/index.php?title=Line_search&amp;action=info" title="More information about this page"><span>Page information</span></a></li><li id="t-cite" class="mw-list-item"><a href="/w/index.php?title=Special:CiteThisPage&amp;page=Line_search&amp;id=1239715615&amp;wpFormIdentifier=titleform" title="Information on how to cite this page"><span>Cite this page</span></a></li><li id="t-urlshortener" class="mw-list-item"><a href="/w/index.php?title=Special:UrlShortener&amp;url=https%3A%2F%2Fen.wikipedia.org%2Fw%2Findex.php%3Ftitle%3DLine_search%26printable%3Dyes"><span>Get shortened URL</span></a></li><li id="t-urlshortener-qrcode" class="mw-list-item"><a href="/w/index.php?title=Special:QrCode&amp;url=https%3A%2F%2Fen.wikipedia.org%2Fw%2Findex.php%3Ftitle%3DLine_search%26printable%3Dyes"><span>Download QR code</span></a></li>
		</ul>
		
	</div>
</div>

<div id="p-coll-print_export" class="vector-menu mw-portlet mw-portlet-coll-print_export"  >
	<div class="vector-menu-heading">
		Print/export
	</div>
	<div class="vector-menu-content">
		
		<ul class="vector-menu-content-list">
			
			<li id="coll-download-as-rl" class="mw-list-item"><a href="/w/index.php?title=Special:DownloadAsPdf&amp;page=Line_search&amp;action=show-download-screen" title="Download this page as a PDF file"><span>Download as PDF</span></a></li>
		</ul>
		
	</div>
</div>

<div id="p-wikibase-otherprojects" class="vector-menu mw-portlet mw-portlet-wikibase-otherprojects"  >
	<div class="vector-menu-heading">
		In other projects
	</div>
	<div class="vector-menu-content">
		
		<ul class="vector-menu-content-list">
			
			<li id="t-wikibase" class="wb-otherproject-link wb-otherproject-wikibase-dataitem mw-list-item"><a href="https://www.wikidata.org/wiki/Special:EntityPage/Q3278015" title="Structured data on this page hosted by Wikidata [g]" accesskey="g"><span>Wikidata item</span></a></li>
		</ul>
		
	</div>
</div>

</div>

									</div>
				
	</div>
</div>

							</nav>
						</div>
					</div>
				</div>
				<div class="vector-column-end no-font-mode-scale">
					<div class="vector-sticky-pinned-container">
						<nav class="vector-page-tools-landmark" aria-label="Page tools">
							<div id="vector-page-tools-pinned-container" class="vector-pinned-container">
				
							</div>
		</nav>
						<nav class="vector-appearance-landmark" aria-label="Appearance">
							<div id="vector-appearance-pinned-container" class="vector-pinned-container">
				<div id="vector-appearance" class="vector-appearance vector-pinnable-element">
	<div
	class="vector-pinnable-header vector-appearance-pinnable-header vector-pinnable-header-pinned"
	data-feature-name="appearance-pinned"
	data-pinnable-element-id="vector-appearance"
	data-pinned-container-id="vector-appearance-pinned-container"
	data-unpinned-container-id="vector-appearance-unpinned-container"
>
	<div class="vector-pinnable-header-label">Appearance</div>
	<button class="vector-pinnable-header-toggle-button vector-pinnable-header-pin-button" data-event-name="pinnable-header.vector-appearance.pin">move to sidebar</button>
	<button class="vector-pinnable-header-toggle-button vector-pinnable-header-unpin-button" data-event-name="pinnable-header.vector-appearance.unpin">hide</button>
</div>


</div>

							</div>
		</nav>
					</div>
				</div>
				<div id="bodyContent" class="vector-body" aria-labelledby="firstHeading" data-mw-ve-target-container>
					<div class="vector-body-before-content">
							<div class="mw-indicators">
		</div>

						<div id="siteSub" class="noprint">From Wikipedia, the free encyclopedia</div>
					</div>
					<div id="contentSub"><div id="mw-content-subtitle"></div></div>
					
					
					<div id="mw-content-text" class="mw-body-content"><div class="cdx-message--warning cdx-message cdx-message--block"><span class="cdx-message__icon"></span><div class="cdx-message__content">The printable version is no longer supported and may have rendering errors. Please update your browser bookmarks and please use the default browser print function instead.</div></div><div class="mw-content-ltr mw-parser-output" lang="en" dir="ltr"><div class="shortdescription nomobile noexcerpt noprint searchaux" style="display:none">Optimization algorithm</div>
<style data-mw-deduplicate="TemplateStyles:r1236090951">.mw-parser-output .hatnote{font-style:italic}.mw-parser-output div.hatnote{padding-left:1.6em;margin-bottom:0.5em}.mw-parser-output .hatnote i{font-style:normal}.mw-parser-output .hatnote+link+.hatnote{margin-top:-0.5em}@media print{body.ns-0 .mw-parser-output .hatnote{display:none!important}}</style><div role="note" class="hatnote navigation-not-searchable">Not to be confused with <a href="/wiki/Linear_search" title="Linear search">linear search</a>.</div>
<p>In <a href="/wiki/Optimization_(mathematics)" class="mw-redirect" title="Optimization (mathematics)">optimization</a>, <b>line search</b> is a basic <a href="/wiki/Iteration" title="Iteration">iterative</a> approach to find a <a href="/wiki/Maxima_and_minima" class="mw-redirect" title="Maxima and minima">local minimum</a> <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML"  alttext="{\displaystyle \mathbf {x} ^{*}}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <msup>
          <mrow class="MJX-TeXAtom-ORD">
            <mi mathvariant="bold">x</mi>
          </mrow>
          <mrow class="MJX-TeXAtom-ORD">
            <mo>&#x2217;<!-- ∗ --></mo>
          </mrow>
        </msup>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle \mathbf {x} ^{*}}</annotation>
  </semantics>
</math></span><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/7854cd1cbbc521a6d45d17d621a9e4286ced0ddf" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.338ex; width:2.465ex; height:2.343ex;" alt="{\displaystyle \mathbf {x} ^{*}}"></span> of an <a href="/wiki/Objective_function" class="mw-redirect" title="Objective function">objective function</a> <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML"  alttext="{\displaystyle f:\mathbb {R} ^{n}\to \mathbb {R} }">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <mi>f</mi>
        <mo>:</mo>
        <msup>
          <mrow class="MJX-TeXAtom-ORD">
            <mi mathvariant="double-struck">R</mi>
          </mrow>
          <mrow class="MJX-TeXAtom-ORD">
            <mi>n</mi>
          </mrow>
        </msup>
        <mo stretchy="false">&#x2192;<!-- → --></mo>
        <mrow class="MJX-TeXAtom-ORD">
          <mi mathvariant="double-struck">R</mi>
        </mrow>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle f:\mathbb {R} ^{n}\to \mathbb {R} }</annotation>
  </semantics>
</math></span><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/306c097f43c91dce633d12cde024948d39e73752" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.671ex; width:11.404ex; height:2.676ex;" alt="{\displaystyle f:\mathbb {R} ^{n}\to \mathbb {R} }"></span>. It first finds a <a href="/wiki/Descent_direction" title="Descent direction">descent direction</a> along which the objective function <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML"  alttext="{\displaystyle f}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <mi>f</mi>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle f}</annotation>
  </semantics>
</math></span><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/132e57acb643253e7810ee9702d9581f159a1c61" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.671ex; width:1.279ex; height:2.509ex;" alt="{\displaystyle f}"></span> will be reduced, and then computes a step size that determines how far <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML"  alttext="{\displaystyle \mathbf {x} }">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <mrow class="MJX-TeXAtom-ORD">
          <mi mathvariant="bold">x</mi>
        </mrow>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle \mathbf {x} }</annotation>
  </semantics>
</math></span><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/32adf004df5eb0a8c7fd8c0b6b7405183c5a5ef2" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.338ex; width:1.411ex; height:1.676ex;" alt="{\displaystyle \mathbf {x} }"></span> should move along that direction. The descent direction can be computed by various methods, such as <a href="/wiki/Gradient_descent" title="Gradient descent">gradient descent</a> or <a href="/wiki/Quasi-Newton_method" title="Quasi-Newton method">quasi-Newton method</a>. The step size can be determined either exactly or inexactly.
</p>
<meta property="mw:PageProp/toc" />
<div class="mw-heading mw-heading2"><h2 id="One-dimensional_line_search">One-dimensional line search</h2></div>
<p>Suppose <i>f</i> is a one-dimensional function, <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML"  alttext="{\displaystyle f:\mathbb {R} \to \mathbb {R} }">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <mi>f</mi>
        <mo>:</mo>
        <mrow class="MJX-TeXAtom-ORD">
          <mi mathvariant="double-struck">R</mi>
        </mrow>
        <mo stretchy="false">&#x2192;<!-- → --></mo>
        <mrow class="MJX-TeXAtom-ORD">
          <mi mathvariant="double-struck">R</mi>
        </mrow>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle f:\mathbb {R} \to \mathbb {R} }</annotation>
  </semantics>
</math></span><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/1e3a10a3ad05781f5cf9c2d875a02227e21a8448" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.671ex; width:10.186ex; height:2.509ex;" alt="{\displaystyle f:\mathbb {R} \to \mathbb {R} }"></span>, and assume that it is <a href="/wiki/Unimodal" class="mw-redirect" title="Unimodal">unimodal</a>, that is, contains exactly one local minimum <i>x</i>* in a given interval [<i>a</i>,<i>z</i>]. This means that <i>f</i> is strictly decreasing in [a,x*] and strictly increasing in [x*,<i>z</i>]. There are several ways to find an (approximate) minimum point in this case.<sup id="cite_ref-:0_1-0" class="reference"><a href="#cite_note-:0-1"><span class="cite-bracket">&#91;</span>1<span class="cite-bracket">&#93;</span></a></sup><sup class="reference nowrap"><span title="Location: sec.5">&#58;&#8202;sec.5&#8202;</span></sup>
</p>
<div class="mw-heading mw-heading3"><h3 id="Zero-order_methods">Zero-order methods</h3></div>
<p>Zero-order methods use only function evaluations (i.e., a <a href="/wiki/Value_oracle" class="mw-redirect" title="Value oracle">value oracle</a>) - not derivatives:<sup id="cite_ref-:0_1-1" class="reference"><a href="#cite_note-:0-1"><span class="cite-bracket">&#91;</span>1<span class="cite-bracket">&#93;</span></a></sup><sup class="reference nowrap"><span title="Location: sec.5">&#58;&#8202;sec.5&#8202;</span></sup>
</p>
<ul><li><a href="/wiki/Ternary_search" title="Ternary search">Ternary search</a>: pick some two points <i>b,c</i> such that <i>a</i>&lt;<i>b</i>&lt;<i>c</i>&lt;<i>z</i>. If f(<i>b</i>)≤f(<i>c</i>), then x* must be in [<i>a</i>,<i>c</i>]; if f(<i>b</i>)≥f(<i>c</i>), then x* must be in [<i>b</i>,<i>z</i>]. In both cases, we can replace the search interval with a smaller one. If we pick <i>b</i>,<i>c</i> very close to the interval center, then the interval shrinks by ~1/2 at each iteration, but we need two function evaluations per iteration. Therefore, the method has <a href="/wiki/Linear_convergence" class="mw-redirect" title="Linear convergence">linear convergence</a> with rate <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML"  alttext="{\displaystyle {\sqrt {0.5}}\approx 0.71}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <mrow class="MJX-TeXAtom-ORD">
          <msqrt>
            <mn>0.5</mn>
          </msqrt>
        </mrow>
        <mo>&#x2248;<!-- ≈ --></mo>
        <mn>0.71</mn>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle {\sqrt {0.5}}\approx 0.71}</annotation>
  </semantics>
</math></span><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/f433c1dafe5943d58cd51d860ae5b11966761d6d" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.671ex; width:12.14ex; height:2.843ex;" alt="{\displaystyle {\sqrt {0.5}}\approx 0.71}"></span>. If we pick b,c such that the partition a,b,c,z has three equal-length intervals, then the interval shrinks by 2/3 at each iteration, so the method has <a href="/wiki/Linear_convergence" class="mw-redirect" title="Linear convergence">linear convergence</a> with rate <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML"  alttext="{\displaystyle {\sqrt {2/3}}\approx 0.82}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <mrow class="MJX-TeXAtom-ORD">
          <msqrt>
            <mn>2</mn>
            <mrow class="MJX-TeXAtom-ORD">
              <mo>/</mo>
            </mrow>
            <mn>3</mn>
          </msqrt>
        </mrow>
        <mo>&#x2248;<!-- ≈ --></mo>
        <mn>0.82</mn>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle {\sqrt {2/3}}\approx 0.82}</annotation>
  </semantics>
</math></span><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/b3588ce9f6ef2754be1c75e001bd6fcccfd73e81" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -1.838ex; width:13.044ex; height:4.843ex;" alt="{\displaystyle {\sqrt {2/3}}\approx 0.82}"></span>.</li>
<li>Fibonacci search: This is a variant of ternary search in which the points <i>b</i>,<i>c</i> are selected based on the <a href="/wiki/Fibonacci_sequence" title="Fibonacci sequence">Fibonacci sequence</a>. At each iteration, only one function evaluation is needed, since the other point was already an endpoint of a previous interval. Therefore, the method has linear convergence with rate <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML"  alttext="{\displaystyle 1/\varphi \approx 0.618}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <mn>1</mn>
        <mrow class="MJX-TeXAtom-ORD">
          <mo>/</mo>
        </mrow>
        <mi>&#x03C6;<!-- φ --></mi>
        <mo>&#x2248;<!-- ≈ --></mo>
        <mn>0.618</mn>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle 1/\varphi \approx 0.618}</annotation>
  </semantics>
</math></span><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/ee2956736e09abd4c4d71925d61a4979d14025d2" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.838ex; width:12.24ex; height:2.843ex;" alt="{\displaystyle 1/\varphi \approx 0.618}"></span> .</li>
<li><a href="/wiki/Golden-section_search" title="Golden-section search">Golden-section search</a>: This is a variant in which the points <i>b</i>,<i>c</i> are selected based on the <a href="/wiki/Golden_ratio" title="Golden ratio">golden ratio</a>. Again, only one function evaluation is needed in each iteration, and the method has linear convergence with rate <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML"  alttext="{\displaystyle 1/\varphi \approx 0.618}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <mn>1</mn>
        <mrow class="MJX-TeXAtom-ORD">
          <mo>/</mo>
        </mrow>
        <mi>&#x03C6;<!-- φ --></mi>
        <mo>&#x2248;<!-- ≈ --></mo>
        <mn>0.618</mn>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle 1/\varphi \approx 0.618}</annotation>
  </semantics>
</math></span><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/ee2956736e09abd4c4d71925d61a4979d14025d2" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.838ex; width:12.24ex; height:2.843ex;" alt="{\displaystyle 1/\varphi \approx 0.618}"></span> . This ratio is optimal among the zero-order methods.</li></ul>
<p>Zero-order methods are very general - they do not assume differentiability or even continuity.
</p>
<div class="mw-heading mw-heading3"><h3 id="First-order_methods">First-order methods</h3></div>
<p>First-order methods assume that <i>f</i> is continuously differentiable, and that we can evaluate not only <i>f</i> but also its derivative.<sup id="cite_ref-:0_1-2" class="reference"><a href="#cite_note-:0-1"><span class="cite-bracket">&#91;</span>1<span class="cite-bracket">&#93;</span></a></sup><sup class="reference nowrap"><span title="Location: sec.5">&#58;&#8202;sec.5&#8202;</span></sup>
</p>
<ul><li>The <a href="/wiki/Bisection_method" title="Bisection method">bisection method</a> computes the derivative of <i>f</i> at the center of the interval, <i>c</i>: if f'(c)=0, then this is the minimum point; if f'(<i>c</i>)&gt;0, then the minimum must be in [<i>a</i>,<i>c</i>]; if f'(<i>c</i>)&lt;0, then the minimum must be in [<i>c</i>,<i>z</i>]. This method has linear convergence with rate 0.5.</li></ul>
<div class="mw-heading mw-heading3"><h3 id="Curve-fitting_methods">Curve-fitting methods</h3></div>
<p>Curve-fitting methods try to attain <a href="/wiki/Superlinear_convergence" class="mw-redirect" title="Superlinear convergence">superlinear convergence</a> by assuming that <i>f</i> has some analytic form, e.g. a polynomial of finite degree. At each iteration, there is a set of "working points" in which we know the value of <i>f</i> (and possibly also its derivative). Based on these points, we can compute a polynomial that fits the known values, and find its minimum analytically. The minimum point becomes a new working point, and we proceed to the next iteration:<sup id="cite_ref-:0_1-3" class="reference"><a href="#cite_note-:0-1"><span class="cite-bracket">&#91;</span>1<span class="cite-bracket">&#93;</span></a></sup><sup class="reference nowrap"><span title="Location: sec.5">&#58;&#8202;sec.5&#8202;</span></sup>
</p>
<ul><li><a href="/wiki/Newton%27s_method_in_optimization" title="Newton&#39;s method in optimization">Newton's method</a> is a special case of a curve-fitting method, in which the curve is a degree-two polynomial, constructed using the first and second derivatives of <i>f</i>. If the method is started close enough to a non-degenerate local minimum (= with a positive second derivative), then it has <a href="/wiki/Quadratic_convergence" class="mw-redirect" title="Quadratic convergence">quadratic convergence</a>.</li>
<li><a href="/wiki/Regula_falsi" title="Regula falsi">Regula falsi</a> is another method that fits the function to a degree-two polynomial, but it uses the first derivative at two points, rather than the first and second derivative at the same point. If the method is started close enough to a non-degenerate local minimum, then it has superlinear convergence of order <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML"  alttext="{\displaystyle \varphi \approx 1.618}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <mi>&#x03C6;<!-- φ --></mi>
        <mo>&#x2248;<!-- ≈ --></mo>
        <mn>1.618</mn>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle \varphi \approx 1.618}</annotation>
  </semantics>
</math></span><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/189ccc899fdcac3803990b85f63187e26335351e" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.838ex; width:9.915ex; height:2.676ex;" alt="{\displaystyle \varphi \approx 1.618}"></span>.</li>
<li><i>Cubic fit</i> fits to a degree-three polynomial, using both the function values and its derivative at the last two points. If the method is started close enough to a non-degenerate local minimum, then it has <a href="/wiki/Quadratic_convergence" class="mw-redirect" title="Quadratic convergence">quadratic convergence</a>.</li></ul>
<p>Curve-fitting methods have superlinear convergence when started close enough to the local minimum, but might diverge otherwise. <i>Safeguarded curve-fitting methods</i> simultaneously execute a linear-convergence method in parallel to the curve-fitting method. They check in each iteration whether the point found by the curve-fitting method is close enough to the interval maintained by safeguard method; if it is not, then the safeguard method is used to compute the next iterate.<sup id="cite_ref-:0_1-4" class="reference"><a href="#cite_note-:0-1"><span class="cite-bracket">&#91;</span>1<span class="cite-bracket">&#93;</span></a></sup><sup class="reference nowrap"><span title="Location: 5.2.3.4">&#58;&#8202;5.2.3.4&#8202;</span></sup>
</p>
<div class="mw-heading mw-heading2"><h2 id="Multi-dimensional_line_search">Multi-dimensional line search</h2></div>
<p>In general, we have a multi-dimensional <a href="/wiki/Objective_function" class="mw-redirect" title="Objective function">objective function</a> <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML"  alttext="{\displaystyle f:\mathbb {R} ^{n}\to \mathbb {R} }">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <mi>f</mi>
        <mo>:</mo>
        <msup>
          <mrow class="MJX-TeXAtom-ORD">
            <mi mathvariant="double-struck">R</mi>
          </mrow>
          <mrow class="MJX-TeXAtom-ORD">
            <mi>n</mi>
          </mrow>
        </msup>
        <mo stretchy="false">&#x2192;<!-- → --></mo>
        <mrow class="MJX-TeXAtom-ORD">
          <mi mathvariant="double-struck">R</mi>
        </mrow>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle f:\mathbb {R} ^{n}\to \mathbb {R} }</annotation>
  </semantics>
</math></span><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/306c097f43c91dce633d12cde024948d39e73752" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.671ex; width:11.404ex; height:2.676ex;" alt="{\displaystyle f:\mathbb {R} ^{n}\to \mathbb {R} }"></span>. The line-search method first finds a <a href="/wiki/Descent_direction" title="Descent direction">descent direction</a> along which the objective function <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML"  alttext="{\displaystyle f}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <mi>f</mi>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle f}</annotation>
  </semantics>
</math></span><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/132e57acb643253e7810ee9702d9581f159a1c61" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.671ex; width:1.279ex; height:2.509ex;" alt="{\displaystyle f}"></span> will be reduced, and then computes a step size that determines how far <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML"  alttext="{\displaystyle \mathbf {x} }">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <mrow class="MJX-TeXAtom-ORD">
          <mi mathvariant="bold">x</mi>
        </mrow>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle \mathbf {x} }</annotation>
  </semantics>
</math></span><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/32adf004df5eb0a8c7fd8c0b6b7405183c5a5ef2" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.338ex; width:1.411ex; height:1.676ex;" alt="{\displaystyle \mathbf {x} }"></span> should move along that direction. The descent direction can be computed by various methods, such as <a href="/wiki/Gradient_descent" title="Gradient descent">gradient descent</a> or <a href="/wiki/Quasi-Newton_method" title="Quasi-Newton method">quasi-Newton method</a>. The step size can be determined either exactly or inexactly. Here is an example gradient method that uses a line search in step 5:
</p>
<ol><li>Set iteration counter <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML"  alttext="{\displaystyle k=0}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <mi>k</mi>
        <mo>=</mo>
        <mn>0</mn>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle k=0}</annotation>
  </semantics>
</math></span><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/6307c8a99dad7d0bcb712352ae0a748bd99a038b" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.338ex; width:5.472ex; height:2.176ex;" alt="{\displaystyle k=0}"></span> and make an initial guess <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML"  alttext="{\displaystyle \mathbf {x} _{0}}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <msub>
          <mrow class="MJX-TeXAtom-ORD">
            <mi mathvariant="bold">x</mi>
          </mrow>
          <mrow class="MJX-TeXAtom-ORD">
            <mn>0</mn>
          </mrow>
        </msub>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle \mathbf {x} _{0}}</annotation>
  </semantics>
</math></span><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/799c59f89751f24a2719c4da95f1acdd3e2faf52" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.671ex; width:2.465ex; height:2.009ex;" alt="{\displaystyle \mathbf {x} _{0}}"></span> for the minimum. Pick <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML"  alttext="{\displaystyle \epsilon }">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <mi>&#x03F5;<!-- ϵ --></mi>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle \epsilon }</annotation>
  </semantics>
</math></span><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/c3837cad72483d97bcdde49c85d3b7b859fb3fd2" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.338ex; width:0.944ex; height:1.676ex;" alt="{\displaystyle \epsilon }"></span> a tolerance.</li>
<li>Loop:
<ol><li>Compute a <a href="/wiki/Descent_direction" title="Descent direction">descent direction</a> <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML"  alttext="{\displaystyle \mathbf {p} _{k}}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <msub>
          <mrow class="MJX-TeXAtom-ORD">
            <mi mathvariant="bold">p</mi>
          </mrow>
          <mrow class="MJX-TeXAtom-ORD">
            <mi>k</mi>
          </mrow>
        </msub>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle \mathbf {p} _{k}}</annotation>
  </semantics>
</math></span><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/06b38cae31fcc9a4db19b6ac10e053f708135b9c" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.838ex; width:2.574ex; height:2.176ex;" alt="{\displaystyle \mathbf {p} _{k}}"></span>.</li>
<li>Define a one-dimensional function <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML"  alttext="{\displaystyle h(\alpha _{k})=f(\mathbf {x} _{k}+\alpha _{k}\mathbf {p} _{k})}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <mi>h</mi>
        <mo stretchy="false">(</mo>
        <msub>
          <mi>&#x03B1;<!-- α --></mi>
          <mrow class="MJX-TeXAtom-ORD">
            <mi>k</mi>
          </mrow>
        </msub>
        <mo stretchy="false">)</mo>
        <mo>=</mo>
        <mi>f</mi>
        <mo stretchy="false">(</mo>
        <msub>
          <mrow class="MJX-TeXAtom-ORD">
            <mi mathvariant="bold">x</mi>
          </mrow>
          <mrow class="MJX-TeXAtom-ORD">
            <mi>k</mi>
          </mrow>
        </msub>
        <mo>+</mo>
        <msub>
          <mi>&#x03B1;<!-- α --></mi>
          <mrow class="MJX-TeXAtom-ORD">
            <mi>k</mi>
          </mrow>
        </msub>
        <msub>
          <mrow class="MJX-TeXAtom-ORD">
            <mi mathvariant="bold">p</mi>
          </mrow>
          <mrow class="MJX-TeXAtom-ORD">
            <mi>k</mi>
          </mrow>
        </msub>
        <mo stretchy="false">)</mo>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle h(\alpha _{k})=f(\mathbf {x} _{k}+\alpha _{k}\mathbf {p} _{k})}</annotation>
  </semantics>
</math></span><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/773b5e7e24ca489eb1c1b7163abae9041821c448" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.838ex; width:22.401ex; height:2.843ex;" alt="{\displaystyle h(\alpha _{k})=f(\mathbf {x} _{k}+\alpha _{k}\mathbf {p} _{k})}"></span>, representing the function value on the descent direction given the step-size.</li>
<li>Find an <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML"  alttext="{\displaystyle \displaystyle \alpha _{k}}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <mstyle displaystyle="true" scriptlevel="0">
          <msub>
            <mi>&#x03B1;<!-- α --></mi>
            <mrow class="MJX-TeXAtom-ORD">
              <mi>k</mi>
            </mrow>
          </msub>
        </mstyle>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle \displaystyle \alpha _{k}}</annotation>
  </semantics>
</math></span><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/a1cf71ffaddbc2ccc62d247dcf3ff5d05111b57a" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.671ex; width:2.576ex; height:2.009ex;" alt="{\displaystyle \displaystyle \alpha _{k}}"></span> that minimizes <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML"  alttext="{\displaystyle h}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <mi>h</mi>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle h}</annotation>
  </semantics>
</math></span><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/b26be3e694314bc90c3215047e4a2010c6ee184a" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.338ex; width:1.339ex; height:2.176ex;" alt="{\displaystyle h}"></span> over <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML"  alttext="{\displaystyle \alpha _{k}\in \mathbb {R} _{+}}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <msub>
          <mi>&#x03B1;<!-- α --></mi>
          <mrow class="MJX-TeXAtom-ORD">
            <mi>k</mi>
          </mrow>
        </msub>
        <mo>&#x2208;<!-- ∈ --></mo>
        <msub>
          <mrow class="MJX-TeXAtom-ORD">
            <mi mathvariant="double-struck">R</mi>
          </mrow>
          <mrow class="MJX-TeXAtom-ORD">
            <mo>+</mo>
          </mrow>
        </msub>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle \alpha _{k}\in \mathbb {R} _{+}}</annotation>
  </semantics>
</math></span><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/9ba78b43d4f8a98d0fed30318bce3d0d663a49b0" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.671ex; width:8.606ex; height:2.509ex;" alt="{\displaystyle \alpha _{k}\in \mathbb {R} _{+}}"></span>.</li>
<li>Update <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML"  alttext="{\displaystyle \mathbf {x} _{k+1}=\mathbf {x} _{k}+\alpha _{k}\mathbf {p} _{k}}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <msub>
          <mrow class="MJX-TeXAtom-ORD">
            <mi mathvariant="bold">x</mi>
          </mrow>
          <mrow class="MJX-TeXAtom-ORD">
            <mi>k</mi>
            <mo>+</mo>
            <mn>1</mn>
          </mrow>
        </msub>
        <mo>=</mo>
        <msub>
          <mrow class="MJX-TeXAtom-ORD">
            <mi mathvariant="bold">x</mi>
          </mrow>
          <mrow class="MJX-TeXAtom-ORD">
            <mi>k</mi>
          </mrow>
        </msub>
        <mo>+</mo>
        <msub>
          <mi>&#x03B1;<!-- α --></mi>
          <mrow class="MJX-TeXAtom-ORD">
            <mi>k</mi>
          </mrow>
        </msub>
        <msub>
          <mrow class="MJX-TeXAtom-ORD">
            <mi mathvariant="bold">p</mi>
          </mrow>
          <mrow class="MJX-TeXAtom-ORD">
            <mi>k</mi>
          </mrow>
        </msub>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle \mathbf {x} _{k+1}=\mathbf {x} _{k}+\alpha _{k}\mathbf {p} _{k}}</annotation>
  </semantics>
</math></span><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/d0f5e232bb17280f8f4283662122a495e26af47a" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.838ex; width:18.189ex; height:2.509ex;" alt="{\displaystyle \mathbf {x} _{k+1}=\mathbf {x} _{k}+\alpha _{k}\mathbf {p} _{k}}"></span>, and <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML" alttext="{\textstyle k=k+1}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="false" scriptlevel="0">
        <mi>k</mi>
        <mo>=</mo>
        <mi>k</mi>
        <mo>+</mo>
        <mn>1</mn>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\textstyle k=k+1}</annotation>
  </semantics>
</math></span><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/b3849a006cd2d99c2d43959c3731d819581e6cce" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.505ex; width:9.524ex; height:2.343ex;" alt="{\textstyle k=k+1}"></span></li></ol></li>
<li>Until <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML"  alttext="{\displaystyle \|\nabla f(\mathbf {x} _{k+1})\|&lt;\epsilon }">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <mo fence="false" stretchy="false">&#x2016;<!-- ‖ --></mo>
        <mi mathvariant="normal">&#x2207;<!-- ∇ --></mi>
        <mi>f</mi>
        <mo stretchy="false">(</mo>
        <msub>
          <mrow class="MJX-TeXAtom-ORD">
            <mi mathvariant="bold">x</mi>
          </mrow>
          <mrow class="MJX-TeXAtom-ORD">
            <mi>k</mi>
            <mo>+</mo>
            <mn>1</mn>
          </mrow>
        </msub>
        <mo stretchy="false">)</mo>
        <mo fence="false" stretchy="false">&#x2016;<!-- ‖ --></mo>
        <mo>&lt;</mo>
        <mi>&#x03F5;<!-- ϵ --></mi>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle \|\nabla f(\mathbf {x} _{k+1})\|&lt;\epsilon }</annotation>
  </semantics>
</math></span><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/4745a06540e649c42d4153f507cc79546c7ae8b6" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.838ex; width:15.991ex; height:2.843ex;" alt="{\displaystyle \|\nabla f(\mathbf {x} _{k+1})\|&lt;\epsilon }"></span></li></ol>
<p>At the line search step (2.3), the algorithm may minimize <i>h</i> <i>exactly</i>, by solving <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML"  alttext="{\displaystyle h'(\alpha _{k})=0}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <msup>
          <mi>h</mi>
          <mo>&#x2032;</mo>
        </msup>
        <mo stretchy="false">(</mo>
        <msub>
          <mi>&#x03B1;<!-- α --></mi>
          <mrow class="MJX-TeXAtom-ORD">
            <mi>k</mi>
          </mrow>
        </msub>
        <mo stretchy="false">)</mo>
        <mo>=</mo>
        <mn>0</mn>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle h'(\alpha _{k})=0}</annotation>
  </semantics>
</math></span><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/a8d861a7502b6228c2f4d2191d743bb5308a9311" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.838ex; width:10.67ex; height:3.009ex;" alt="{\displaystyle h&#039;(\alpha _{k})=0}"></span>, or <i>approximately</i>, by using one of the one-dimensional line-search methods mentioned above. It can also be solved <i>loosely</i>, by asking for a sufficient decrease in <i>h</i> that does not necessarily approximate the optimum. One example of the former is <a href="/wiki/Conjugate_gradient_method" title="Conjugate gradient method">conjugate gradient method</a>. The latter is called inexact line search and may be performed in a number of ways, such as a <a href="/wiki/Backtracking_line_search" title="Backtracking line search">backtracking line search</a> or using the <a href="/wiki/Wolfe_conditions" title="Wolfe conditions">Wolfe conditions</a>.
</p>
<div class="mw-heading mw-heading2"><h2 id="Overcoming_local_minima">Overcoming local minima</h2></div>
<p>Like other optimization methods, line search may be combined with <a href="/wiki/Simulated_annealing" title="Simulated annealing">simulated annealing</a> to allow it to jump over some <a href="/wiki/Local_minimum" class="mw-redirect" title="Local minimum">local minima</a>.
</p>
<div class="mw-heading mw-heading2"><h2 id="See_also">See also</h2></div>
<ul><li><a href="/wiki/Trust_region" title="Trust region">Trust region</a> - a dual approach for finding a local minimum: it first computes a step size, and then determines the descent direction.</li>
<li><a href="/wiki/Grid_search" class="mw-redirect" title="Grid search">Grid search</a></li>
<li><a href="/wiki/Learning_rate" title="Learning rate">Learning rate</a></li>
<li><a href="/wiki/Pattern_search_(optimization)" title="Pattern search (optimization)">Pattern search (optimization)</a></li>
<li><a href="/wiki/Secant_method" title="Secant method">Secant method</a></li></ul>
<div class="mw-heading mw-heading2"><h2 id="References">References</h2></div>
<style data-mw-deduplicate="TemplateStyles:r1239543626">.mw-parser-output .reflist{margin-bottom:0.5em;list-style-type:decimal}@media screen{.mw-parser-output .reflist{font-size:90%}}.mw-parser-output .reflist .references{font-size:100%;margin-bottom:0;list-style-type:inherit}.mw-parser-output .reflist-columns-2{column-width:30em}.mw-parser-output .reflist-columns-3{column-width:25em}.mw-parser-output .reflist-columns{margin-top:0.3em}.mw-parser-output .reflist-columns ol{margin-top:0}.mw-parser-output .reflist-columns li{page-break-inside:avoid;break-inside:avoid-column}.mw-parser-output .reflist-upper-alpha{list-style-type:upper-alpha}.mw-parser-output .reflist-upper-roman{list-style-type:upper-roman}.mw-parser-output .reflist-lower-alpha{list-style-type:lower-alpha}.mw-parser-output .reflist-lower-greek{list-style-type:lower-greek}.mw-parser-output .reflist-lower-roman{list-style-type:lower-roman}</style><div class="reflist">
<div class="mw-references-wrap"><ol class="references">
<li id="cite_note-:0-1"><span class="mw-cite-backlink">^ <a href="#cite_ref-:0_1-0"><sup><i><b>a</b></i></sup></a> <a href="#cite_ref-:0_1-1"><sup><i><b>b</b></i></sup></a> <a href="#cite_ref-:0_1-2"><sup><i><b>c</b></i></sup></a> <a href="#cite_ref-:0_1-3"><sup><i><b>d</b></i></sup></a> <a href="#cite_ref-:0_1-4"><sup><i><b>e</b></i></sup></a></span> <span class="reference-text"><style data-mw-deduplicate="TemplateStyles:r1238218222">.mw-parser-output cite.citation{font-style:inherit;word-wrap:break-word}.mw-parser-output .citation q{quotes:"\"""\"""'""'"}.mw-parser-output .citation:target{background-color:rgba(0,127,255,0.133)}.mw-parser-output .id-lock-free.id-lock-free a{background:url("//upload.wikimedia.org/wikipedia/commons/6/65/Lock-green.svg")right 0.1em center/9px no-repeat}.mw-parser-output .id-lock-limited.id-lock-limited a,.mw-parser-output .id-lock-registration.id-lock-registration a{background:url("//upload.wikimedia.org/wikipedia/commons/d/d6/Lock-gray-alt-2.svg")right 0.1em center/9px no-repeat}.mw-parser-output .id-lock-subscription.id-lock-subscription a{background:url("//upload.wikimedia.org/wikipedia/commons/a/aa/Lock-red-alt-2.svg")right 0.1em center/9px no-repeat}.mw-parser-output .cs1-ws-icon a{background:url("//upload.wikimedia.org/wikipedia/commons/4/4c/Wikisource-logo.svg")right 0.1em center/12px no-repeat}body:not(.skin-timeless):not(.skin-minerva) .mw-parser-output .id-lock-free a,body:not(.skin-timeless):not(.skin-minerva) .mw-parser-output .id-lock-limited a,body:not(.skin-timeless):not(.skin-minerva) .mw-parser-output .id-lock-registration a,body:not(.skin-timeless):not(.skin-minerva) .mw-parser-output .id-lock-subscription a,body:not(.skin-timeless):not(.skin-minerva) .mw-parser-output .cs1-ws-icon a{background-size:contain;padding:0 1em 0 0}.mw-parser-output .cs1-code{color:inherit;background:inherit;border:none;padding:inherit}.mw-parser-output .cs1-hidden-error{display:none;color:var(--color-error,#d33)}.mw-parser-output .cs1-visible-error{color:var(--color-error,#d33)}.mw-parser-output .cs1-maint{display:none;color:#085;margin-left:0.3em}.mw-parser-output .cs1-kern-left{padding-left:0.2em}.mw-parser-output .cs1-kern-right{padding-right:0.2em}.mw-parser-output .citation .mw-selflink{font-weight:inherit}@media screen{.mw-parser-output .cs1-format{font-size:95%}html.skin-theme-clientpref-night .mw-parser-output .cs1-maint{color:#18911f}}@media screen and (prefers-color-scheme:dark){html.skin-theme-clientpref-os .mw-parser-output .cs1-maint{color:#18911f}}</style><cite id="CITEREFNemirovsky_and_Ben-Tal2023" class="citation web cs1">Nemirovsky and Ben-Tal (2023). <a rel="nofollow" class="external text" href="http://www2.isye.gatech.edu/~nemirovs/OPTIIILN2023Spring.pdf">"Optimization III: Convex Optimization"</a> <span class="cs1-format">(PDF)</span>.</cite><span title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Abook&amp;rft.genre=unknown&amp;rft.btitle=Optimization+III%3A+Convex+Optimization&amp;rft.date=2023&amp;rft.au=Nemirovsky+and+Ben-Tal&amp;rft_id=http%3A%2F%2Fwww2.isye.gatech.edu%2F~nemirovs%2FOPTIIILN2023Spring.pdf&amp;rfr_id=info%3Asid%2Fen.wikipedia.org%3ALine+search" class="Z3988"></span></span>
</li>
</ol></div></div>
<div class="mw-heading mw-heading2"><h2 id="Further_reading">Further reading</h2></div>
<ul><li><link rel="mw-deduplicated-inline-style" href="mw-data:TemplateStyles:r1238218222" /><cite id="CITEREFDennisSchnabel1983" class="citation book cs1">Dennis, J. E. Jr.; Schnabel, Robert B. (1983). "Globally Convergent Modifications of Newton's Method". <i>Numerical Methods for Unconstrained Optimization and Nonlinear Equations</i>. Englewood Cliffs: Prentice-Hall. pp.&#160;<span class="nowrap">111–</span>154. <a href="/wiki/ISBN_(identifier)" class="mw-redirect" title="ISBN (identifier)">ISBN</a>&#160;<a href="/wiki/Special:BookSources/0-13-627216-9" title="Special:BookSources/0-13-627216-9"><bdi>0-13-627216-9</bdi></a>.</cite><span title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Abook&amp;rft.genre=bookitem&amp;rft.atitle=Globally+Convergent+Modifications+of+Newton%27s+Method&amp;rft.btitle=Numerical+Methods+for+Unconstrained+Optimization+and+Nonlinear+Equations&amp;rft.place=Englewood+Cliffs&amp;rft.pages=111-154&amp;rft.pub=Prentice-Hall&amp;rft.date=1983&amp;rft.isbn=0-13-627216-9&amp;rft.aulast=Dennis&amp;rft.aufirst=J.+E.+Jr.&amp;rft.au=Schnabel%2C+Robert+B.&amp;rfr_id=info%3Asid%2Fen.wikipedia.org%3ALine+search" class="Z3988"></span></li>
<li><link rel="mw-deduplicated-inline-style" href="mw-data:TemplateStyles:r1238218222" /><cite id="CITEREFNocedalWright1999" class="citation book cs1">Nocedal, Jorge; Wright, Stephen J. (1999). "Line Search Methods". <i>Numerical Optimization</i>. New York: Springer. pp.&#160;<span class="nowrap">34–</span>63. <a href="/wiki/ISBN_(identifier)" class="mw-redirect" title="ISBN (identifier)">ISBN</a>&#160;<a href="/wiki/Special:BookSources/0-387-98793-2" title="Special:BookSources/0-387-98793-2"><bdi>0-387-98793-2</bdi></a>.</cite><span title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Abook&amp;rft.genre=bookitem&amp;rft.atitle=Line+Search+Methods&amp;rft.btitle=Numerical+Optimization&amp;rft.place=New+York&amp;rft.pages=34-63&amp;rft.pub=Springer&amp;rft.date=1999&amp;rft.isbn=0-387-98793-2&amp;rft.aulast=Nocedal&amp;rft.aufirst=Jorge&amp;rft.au=Wright%2C+Stephen+J.&amp;rfr_id=info%3Asid%2Fen.wikipedia.org%3ALine+search" class="Z3988"></span></li>
<li><link rel="mw-deduplicated-inline-style" href="mw-data:TemplateStyles:r1238218222" /><cite id="CITEREFSunYuan2006" class="citation book cs1">Sun, Wenyu; Yuan, Ya-Xiang (2006). "Line Search". <i>Optimization Theory and Methods: Nonlinear Programming</i>. New York: Springer. pp.&#160;<span class="nowrap">71–</span>117. <a href="/wiki/ISBN_(identifier)" class="mw-redirect" title="ISBN (identifier)">ISBN</a>&#160;<a href="/wiki/Special:BookSources/0-387-24975-3" title="Special:BookSources/0-387-24975-3"><bdi>0-387-24975-3</bdi></a>.</cite><span title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Abook&amp;rft.genre=bookitem&amp;rft.atitle=Line+Search&amp;rft.btitle=Optimization+Theory+and+Methods%3A+Nonlinear+Programming&amp;rft.place=New+York&amp;rft.pages=71-117&amp;rft.pub=Springer&amp;rft.date=2006&amp;rft.isbn=0-387-24975-3&amp;rft.aulast=Sun&amp;rft.aufirst=Wenyu&amp;rft.au=Yuan%2C+Ya-Xiang&amp;rfr_id=info%3Asid%2Fen.wikipedia.org%3ALine+search" class="Z3988"></span></li></ul>
<div class="navbox-styles"><style data-mw-deduplicate="TemplateStyles:r1129693374">.mw-parser-output .hlist dl,.mw-parser-output .hlist ol,.mw-parser-output .hlist ul{margin:0;padding:0}.mw-parser-output .hlist dd,.mw-parser-output .hlist dt,.mw-parser-output .hlist li{margin:0;display:inline}.mw-parser-output .hlist.inline,.mw-parser-output .hlist.inline dl,.mw-parser-output .hlist.inline ol,.mw-parser-output .hlist.inline ul,.mw-parser-output .hlist dl dl,.mw-parser-output .hlist dl ol,.mw-parser-output .hlist dl ul,.mw-parser-output .hlist ol dl,.mw-parser-output .hlist ol ol,.mw-parser-output .hlist ol ul,.mw-parser-output .hlist ul dl,.mw-parser-output .hlist ul ol,.mw-parser-output .hlist ul ul{display:inline}.mw-parser-output .hlist .mw-empty-li{display:none}.mw-parser-output .hlist dt::after{content:": "}.mw-parser-output .hlist dd::after,.mw-parser-output .hlist li::after{content:" · ";font-weight:bold}.mw-parser-output .hlist dd:last-child::after,.mw-parser-output .hlist dt:last-child::after,.mw-parser-output .hlist li:last-child::after{content:none}.mw-parser-output .hlist dd dd:first-child::before,.mw-parser-output .hlist dd dt:first-child::before,.mw-parser-output .hlist dd li:first-child::before,.mw-parser-output .hlist dt dd:first-child::before,.mw-parser-output .hlist dt dt:first-child::before,.mw-parser-output .hlist dt li:first-child::before,.mw-parser-output .hlist li dd:first-child::before,.mw-parser-output .hlist li dt:first-child::before,.mw-parser-output .hlist li li:first-child::before{content:" (";font-weight:normal}.mw-parser-output .hlist dd dd:last-child::after,.mw-parser-output .hlist dd dt:last-child::after,.mw-parser-output .hlist dd li:last-child::after,.mw-parser-output .hlist dt dd:last-child::after,.mw-parser-output .hlist dt dt:last-child::after,.mw-parser-output .hlist dt li:last-child::after,.mw-parser-output .hlist li dd:last-child::after,.mw-parser-output .hlist li dt:last-child::after,.mw-parser-output .hlist li li:last-child::after{content:")";font-weight:normal}.mw-parser-output .hlist ol{counter-reset:listitem}.mw-parser-output .hlist ol>li{counter-increment:listitem}.mw-parser-output .hlist ol>li::before{content:" "counter(listitem)"\a0 "}.mw-parser-output .hlist dd ol>li:first-child::before,.mw-parser-output .hlist dt ol>li:first-child::before,.mw-parser-output .hlist li ol>li:first-child::before{content:" ("counter(listitem)"\a0 "}</style><style data-mw-deduplicate="TemplateStyles:r1236075235">.mw-parser-output .navbox{box-sizing:border-box;border:1px solid #a2a9b1;width:100%;clear:both;font-size:88%;text-align:center;padding:1px;margin:1em auto 0}.mw-parser-output .navbox .navbox{margin-top:0}.mw-parser-output .navbox+.navbox,.mw-parser-output .navbox+.navbox-styles+.navbox{margin-top:-1px}.mw-parser-output .navbox-inner,.mw-parser-output .navbox-subgroup{width:100%}.mw-parser-output .navbox-group,.mw-parser-output .navbox-title,.mw-parser-output .navbox-abovebelow{padding:0.25em 1em;line-height:1.5em;text-align:center}.mw-parser-output .navbox-group{white-space:nowrap;text-align:right}.mw-parser-output .navbox,.mw-parser-output .navbox-subgroup{background-color:#fdfdfd}.mw-parser-output .navbox-list{line-height:1.5em;border-color:#fdfdfd}.mw-parser-output .navbox-list-with-group{text-align:left;border-left-width:2px;border-left-style:solid}.mw-parser-output tr+tr>.navbox-abovebelow,.mw-parser-output tr+tr>.navbox-group,.mw-parser-output tr+tr>.navbox-image,.mw-parser-output tr+tr>.navbox-list{border-top:2px solid #fdfdfd}.mw-parser-output .navbox-title{background-color:#ccf}.mw-parser-output .navbox-abovebelow,.mw-parser-output .navbox-group,.mw-parser-output .navbox-subgroup .navbox-title{background-color:#ddf}.mw-parser-output .navbox-subgroup .navbox-group,.mw-parser-output .navbox-subgroup .navbox-abovebelow{background-color:#e6e6ff}.mw-parser-output .navbox-even{background-color:#f7f7f7}.mw-parser-output .navbox-odd{background-color:transparent}.mw-parser-output .navbox .hlist td dl,.mw-parser-output .navbox .hlist td ol,.mw-parser-output .navbox .hlist td ul,.mw-parser-output .navbox td.hlist dl,.mw-parser-output .navbox td.hlist ol,.mw-parser-output .navbox td.hlist ul{padding:0.125em 0}.mw-parser-output .navbox .navbar{display:block;font-size:100%}.mw-parser-output .navbox-title .navbar{float:left;text-align:left;margin-right:0.5em}body.skin--responsive .mw-parser-output .navbox-image img{max-width:none!important}@media print{body.ns-0 .mw-parser-output .navbox{display:none!important}}</style></div><div role="navigation" class="navbox" aria-labelledby="Optimization:_Algorithms,_methods,_and_heuristics381" style="padding:3px"><table class="nowraplinks hlist mw-collapsible uncollapsed navbox-inner" style="border-spacing:0;background:transparent;color:inherit"><tbody><tr><th scope="col" class="navbox-title" colspan="3"><link rel="mw-deduplicated-inline-style" href="mw-data:TemplateStyles:r1129693374" /><style data-mw-deduplicate="TemplateStyles:r1239400231">.mw-parser-output .navbar{display:inline;font-size:88%;font-weight:normal}.mw-parser-output .navbar-collapse{float:left;text-align:left}.mw-parser-output .navbar-boxtext{word-spacing:0}.mw-parser-output .navbar ul{display:inline-block;white-space:nowrap;line-height:inherit}.mw-parser-output .navbar-brackets::before{margin-right:-0.125em;content:"[ "}.mw-parser-output .navbar-brackets::after{margin-left:-0.125em;content:" ]"}.mw-parser-output .navbar li{word-spacing:-0.125em}.mw-parser-output .navbar a>span,.mw-parser-output .navbar a>abbr{text-decoration:inherit}.mw-parser-output .navbar-mini abbr{font-variant:small-caps;border-bottom:none;text-decoration:none;cursor:inherit}.mw-parser-output .navbar-ct-full{font-size:114%;margin:0 7em}.mw-parser-output .navbar-ct-mini{font-size:114%;margin:0 4em}html.skin-theme-clientpref-night .mw-parser-output .navbar li a abbr{color:var(--color-base)!important}@media(prefers-color-scheme:dark){html.skin-theme-clientpref-os .mw-parser-output .navbar li a abbr{color:var(--color-base)!important}}@media print{.mw-parser-output .navbar{display:none!important}}</style><div class="navbar plainlinks hlist navbar-mini"><ul><li class="nv-view"><a href="/wiki/Template:Optimization_algorithms" title="Template:Optimization algorithms"><abbr title="View this template">v</abbr></a></li><li class="nv-talk"><a href="/wiki/Template_talk:Optimization_algorithms" title="Template talk:Optimization algorithms"><abbr title="Discuss this template">t</abbr></a></li><li class="nv-edit"><a href="/wiki/Special:EditPage/Template:Optimization_algorithms" title="Special:EditPage/Template:Optimization algorithms"><abbr title="Edit this template">e</abbr></a></li></ul></div><div id="Optimization:_Algorithms,_methods,_and_heuristics381" style="font-size:114%;margin:0 4em"><a href="/wiki/Mathematical_optimization" title="Mathematical optimization">Optimization</a>: <a href="/wiki/Optimization_algorithm" class="mw-redirect" title="Optimization algorithm">Algorithms</a>, <a href="/wiki/Iterative_method" title="Iterative method">methods</a>, and <a href="/wiki/Heuristic_algorithm" class="mw-redirect" title="Heuristic algorithm">heuristics</a></div></th></tr><tr><td colspan="2" class="navbox-list navbox-odd" style="width:100%;padding:0"><div style="padding:0 0.25em"></div><table class="nowraplinks mw-collapsible uncollapsed navbox-subgroup" style="border-spacing:0"><tbody><tr><th scope="col" class="navbox-title" colspan="2"><div id="Unconstrained_nonlinear381" style="font-size:114%;margin:0 4em"><a href="/wiki/Nonlinear_programming" title="Nonlinear programming">Unconstrained nonlinear</a></div></th></tr><tr><td colspan="2" class="navbox-list navbox-odd" style="width:100%;padding:0"><div style="padding:0 0.25em"></div><table class="nowraplinks navbox-subgroup" style="border-spacing:0"><tbody><tr><th scope="row" class="navbox-group" style="width:1%"><a href="/wiki/Function_(mathematics)" title="Function (mathematics)">Functions</a></th><td class="navbox-list-with-group navbox-list navbox-odd" style="width:100%;padding:0"><div style="padding:0 0.25em">
<ul><li><a href="/wiki/Golden-section_search" title="Golden-section search">Golden-section search</a></li>
<li><a href="/wiki/Powell%27s_method" title="Powell&#39;s method">Powell's method</a></li>
<li><a class="mw-selflink selflink">Line search</a></li>
<li><a href="/wiki/Nelder%E2%80%93Mead_method" title="Nelder–Mead method">Nelder–Mead method</a></li>
<li><a href="/wiki/Successive_parabolic_interpolation" title="Successive parabolic interpolation">Successive parabolic interpolation</a></li></ul>
</div></td></tr><tr><th scope="row" class="navbox-group" style="width:1%"><a href="/wiki/Gradient" title="Gradient">Gradients</a></th><td class="navbox-list-with-group navbox-list navbox-odd" style="width:100%;padding:0"><div style="padding:0 0.25em"></div><table class="nowraplinks navbox-subgroup" style="border-spacing:0"><tbody><tr><th scope="row" class="navbox-group" style="width:1%"><a href="/wiki/Local_convergence" title="Local convergence">Convergence</a></th><td class="navbox-list-with-group navbox-list navbox-even" style="width:100%;padding:0"><div style="padding:0 0.25em">
<ul><li><a href="/wiki/Trust_region" title="Trust region">Trust region</a></li>
<li><a href="/wiki/Wolfe_conditions" title="Wolfe conditions">Wolfe conditions</a></li></ul>
</div></td></tr><tr><th scope="row" class="navbox-group" style="width:1%"><a href="/wiki/Quasi-Newton_method" title="Quasi-Newton method">Quasi–Newton</a></th><td class="navbox-list-with-group navbox-list navbox-odd" style="width:100%;padding:0"><div style="padding:0 0.25em">
<ul><li><a href="/wiki/Berndt%E2%80%93Hall%E2%80%93Hall%E2%80%93Hausman_algorithm" title="Berndt–Hall–Hall–Hausman algorithm">Berndt–Hall–Hall–Hausman</a></li>
<li><a href="/wiki/Broyden%E2%80%93Fletcher%E2%80%93Goldfarb%E2%80%93Shanno_algorithm" title="Broyden–Fletcher–Goldfarb–Shanno algorithm">Broyden–Fletcher–Goldfarb–Shanno</a> and <a href="/wiki/Limited-memory_BFGS" title="Limited-memory BFGS">L-BFGS</a></li>
<li><a href="/wiki/Davidon%E2%80%93Fletcher%E2%80%93Powell_formula" title="Davidon–Fletcher–Powell formula">Davidon–Fletcher–Powell</a></li>
<li><a href="/wiki/Symmetric_rank-one" title="Symmetric rank-one">Symmetric rank-one (SR1)</a></li></ul>
</div></td></tr><tr><th scope="row" class="navbox-group" style="width:1%"><a href="/wiki/Iterative_method" title="Iterative method">Other methods</a></th><td class="navbox-list-with-group navbox-list navbox-even" style="width:100%;padding:0"><div style="padding:0 0.25em">
<ul><li><a href="/wiki/Nonlinear_conjugate_gradient_method" title="Nonlinear conjugate gradient method">Conjugate gradient</a></li>
<li><a href="/wiki/Gauss%E2%80%93Newton_algorithm" title="Gauss–Newton algorithm">Gauss–Newton</a></li>
<li><a href="/wiki/Gradient_descent" title="Gradient descent">Gradient</a></li>
<li><a href="/wiki/Mirror_descent" title="Mirror descent">Mirror</a></li>
<li><a href="/wiki/Levenberg%E2%80%93Marquardt_algorithm" title="Levenberg–Marquardt algorithm">Levenberg–Marquardt</a></li>
<li><a href="/wiki/Powell%27s_dog_leg_method" title="Powell&#39;s dog leg method">Powell's dog leg method</a></li>
<li><a href="/wiki/Truncated_Newton_method" title="Truncated Newton method">Truncated Newton</a></li></ul>
</div></td></tr></tbody></table><div></div></td></tr><tr><th scope="row" class="navbox-group" style="width:1%"><a href="/wiki/Hessian_matrix" title="Hessian matrix">Hessians</a></th><td class="navbox-list-with-group navbox-list navbox-odd" style="width:100%;padding:0"><div style="padding:0 0.25em">
<ul><li><a href="/wiki/Newton%27s_method_in_optimization" title="Newton&#39;s method in optimization">Newton's method</a></li></ul>
</div></td></tr></tbody></table><div></div></td></tr></tbody></table><div></div></td><td class="noviewer navbox-image" rowspan="5" style="width:1px;padding:0 0 0 2px"><div><figure class="mw-halign-right" typeof="mw:File"><a href="/wiki/File:Max_paraboloid.svg" class="mw-file-description" title="Optimization computes maxima and minima."><img alt="Graph of a strictly concave quadratic function with unique maximum." src="//upload.wikimedia.org/wikipedia/commons/thumb/7/72/Max_paraboloid.svg/250px-Max_paraboloid.svg.png" decoding="async" width="150" height="120" class="mw-file-element" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/7/72/Max_paraboloid.svg/330px-Max_paraboloid.svg.png 2x" data-file-width="700" data-file-height="560" /></a><figcaption>Optimization computes maxima and minima.</figcaption></figure></div></td></tr><tr><td colspan="2" class="navbox-list navbox-odd" style="width:100%;padding:0"><div style="padding:0 0.25em"></div><table class="nowraplinks mw-collapsible mw-collapsed navbox-subgroup" style="border-spacing:0"><tbody><tr><th scope="col" class="navbox-title" colspan="2"><div id="Constrained_nonlinear381" style="font-size:114%;margin:0 4em"><a href="/wiki/Nonlinear_programming" title="Nonlinear programming">Constrained nonlinear</a></div></th></tr><tr><td colspan="2" class="navbox-list navbox-odd" style="width:100%;padding:0"><div style="padding:0 0.25em"></div><table class="nowraplinks navbox-subgroup" style="border-spacing:0"><tbody><tr><th scope="row" class="navbox-group" style="width:1%">General</th><td class="navbox-list-with-group navbox-list navbox-odd" style="width:100%;padding:0"><div style="padding:0 0.25em">
<ul><li><a href="/wiki/Barrier_function" title="Barrier function">Barrier methods</a></li>
<li><a href="/wiki/Penalty_method" title="Penalty method">Penalty methods</a></li></ul>
</div></td></tr><tr><th scope="row" class="navbox-group" style="width:1%">Differentiable</th><td class="navbox-list-with-group navbox-list navbox-even" style="width:100%;padding:0"><div style="padding:0 0.25em">
<ul><li><a href="/wiki/Augmented_Lagrangian_method" title="Augmented Lagrangian method">Augmented Lagrangian methods</a></li>
<li><a href="/wiki/Sequential_quadratic_programming" title="Sequential quadratic programming">Sequential quadratic programming</a></li>
<li><a href="/wiki/Successive_linear_programming" title="Successive linear programming">Successive linear programming</a></li></ul>
</div></td></tr></tbody></table><div></div></td></tr></tbody></table><div></div></td></tr><tr><td colspan="2" class="navbox-list navbox-odd" style="width:100%;padding:0"><div style="padding:0 0.25em"></div><table class="nowraplinks mw-collapsible mw-collapsed navbox-subgroup" style="border-spacing:0"><tbody><tr><th scope="col" class="navbox-title" colspan="2"><div id="Convex_optimization381" style="font-size:114%;margin:0 4em"><a href="/wiki/Convex_optimization" title="Convex optimization">Convex optimization</a></div></th></tr><tr><td colspan="2" class="navbox-list navbox-odd" style="width:100%;padding:0"><div style="padding:0 0.25em"></div><table class="nowraplinks navbox-subgroup" style="border-spacing:0"><tbody><tr><th scope="row" class="navbox-group" style="width:1%"><a href="/wiki/Convex_minimization" class="mw-redirect" title="Convex minimization">Convex<br /> minimization</a></th><td class="navbox-list-with-group navbox-list navbox-odd" style="width:100%;padding:0"><div style="padding:0 0.25em">
<ul><li><a href="/wiki/Cutting-plane_method" title="Cutting-plane method">Cutting-plane method</a></li>
<li><a href="/wiki/Frank%E2%80%93Wolfe_algorithm" title="Frank–Wolfe algorithm">Reduced gradient (Frank–Wolfe)</a></li>
<li><a href="/wiki/Subgradient_method" title="Subgradient method">Subgradient method</a></li></ul>
</div></td></tr><tr><th scope="row" class="navbox-group" style="width:1%"><a href="/wiki/Linear_programming" title="Linear programming">Linear</a> and<br /><a href="/wiki/Quadratic_programming" title="Quadratic programming">quadratic</a></th><td class="navbox-list-with-group navbox-list navbox-odd" style="width:100%;padding:0"><div style="padding:0 0.25em"></div><table class="nowraplinks navbox-subgroup" style="border-spacing:0"><tbody><tr><th scope="row" class="navbox-group" style="width:1%"><a href="/wiki/Linear_programming#Interior_point" title="Linear programming">Interior point</a></th><td class="navbox-list-with-group navbox-list navbox-even" style="width:100%;padding:0"><div style="padding:0 0.25em">
<ul><li><a href="/wiki/Affine_scaling" title="Affine scaling">Affine scaling</a></li>
<li><a href="/wiki/Ellipsoid_method" title="Ellipsoid method">Ellipsoid algorithm of Khachiyan</a></li>
<li><a href="/wiki/Karmarkar%27s_algorithm" title="Karmarkar&#39;s algorithm">Projective algorithm of Karmarkar</a></li></ul>
</div></td></tr><tr><th scope="row" class="navbox-group" style="width:1%"><a href="/wiki/Matroid" title="Matroid">Basis-</a><a href="/wiki/Exchange_algorithm" class="mw-redirect" title="Exchange algorithm">exchange</a></th><td class="navbox-list-with-group navbox-list navbox-odd" style="width:100%;padding:0"><div style="padding:0 0.25em">
<ul><li><a href="/wiki/Simplex_algorithm" title="Simplex algorithm">Simplex algorithm of Dantzig</a></li>
<li><a href="/wiki/Revised_simplex_method" title="Revised simplex method">Revised simplex algorithm</a></li>
<li><a href="/wiki/Criss-cross_algorithm" title="Criss-cross algorithm">Criss-cross algorithm</a></li>
<li><a href="/wiki/Lemke%27s_algorithm" title="Lemke&#39;s algorithm">Principal pivoting algorithm of Lemke</a></li>
<li><a href="/wiki/Active-set_method" title="Active-set method">Active-set method</a></li></ul>
</div></td></tr></tbody></table><div></div></td></tr></tbody></table><div></div></td></tr></tbody></table><div></div></td></tr><tr><td colspan="2" class="navbox-list navbox-odd" style="width:100%;padding:0"><div style="padding:0 0.25em"></div><table class="nowraplinks mw-collapsible mw-collapsed navbox-subgroup" style="border-spacing:0"><tbody><tr><th scope="col" class="navbox-title" colspan="2"><div id="Combinatorial381" style="font-size:114%;margin:0 4em"><a href="/wiki/Combinatorial_optimization" title="Combinatorial optimization">Combinatorial</a></div></th></tr><tr><td colspan="2" class="navbox-list navbox-odd" style="width:100%;padding:0"><div style="padding:0 0.25em"></div><table class="nowraplinks navbox-subgroup" style="border-spacing:0"><tbody><tr><th scope="row" class="navbox-group" style="width:1%">Paradigms</th><td class="navbox-list-with-group navbox-list navbox-odd" style="width:100%;padding:0"><div style="padding:0 0.25em">
<ul><li><a href="/wiki/Approximation_algorithm" title="Approximation algorithm">Approximation algorithm</a></li>
<li><a href="/wiki/Dynamic_programming" title="Dynamic programming">Dynamic programming</a></li>
<li><a href="/wiki/Greedy_algorithm" title="Greedy algorithm">Greedy algorithm</a></li>
<li><a href="/wiki/Integer_programming" title="Integer programming">Integer programming</a>
<ul><li><a href="/wiki/Branch_and_bound" title="Branch and bound">Branch and bound</a>/<a href="/wiki/Branch_and_cut" title="Branch and cut">cut</a></li></ul></li></ul>
</div></td></tr><tr><th scope="row" class="navbox-group" style="width:1%"><a href="/wiki/Graph_algorithm" class="mw-redirect" title="Graph algorithm">Graph<br /> algorithms</a></th><td class="navbox-list-with-group navbox-list navbox-odd" style="width:100%;padding:0"><div style="padding:0 0.25em"></div><table class="nowraplinks navbox-subgroup" style="border-spacing:0"><tbody><tr><th id="Minimum_spanning_tree52" scope="row" class="navbox-group" style="width:1%"><a href="/wiki/Minimum_spanning_tree" title="Minimum spanning tree">Minimum<br /> spanning tree</a></th><td class="navbox-list-with-group navbox-list navbox-even" style="width:100%;padding:0"><div style="padding:0 0.25em">
<ul><li><a href="/wiki/Bor%C5%AFvka%27s_algorithm" title="Borůvka&#39;s algorithm">Borůvka</a></li>
<li><a href="/wiki/Prim%27s_algorithm" title="Prim&#39;s algorithm">Prim</a></li>
<li><a href="/wiki/Kruskal%27s_algorithm" title="Kruskal&#39;s algorithm">Kruskal</a></li></ul>
</div></td></tr></tbody></table><div>
    </div><table class="nowraplinks navbox-subgroup" style="border-spacing:0"><tbody><tr><th id="Shortest_path39" scope="row" class="navbox-group" style="width:1%"><a href="/wiki/Shortest_path_problem" title="Shortest path problem">Shortest path</a></th><td class="navbox-list-with-group navbox-list navbox-odd" style="width:100%;padding:0"><div style="padding:0 0.25em">
<ul><li><a href="/wiki/Bellman%E2%80%93Ford_algorithm" title="Bellman–Ford algorithm">Bellman–Ford</a>
<ul><li><a href="/wiki/Shortest_Path_Faster_Algorithm" class="mw-redirect" title="Shortest Path Faster Algorithm">SPFA</a></li></ul></li>
<li><a href="/wiki/Dijkstra%27s_algorithm" title="Dijkstra&#39;s algorithm">Dijkstra</a></li>
<li><a href="/wiki/Floyd%E2%80%93Warshall_algorithm" title="Floyd–Warshall algorithm">Floyd–Warshall</a></li></ul>
</div></td></tr></tbody></table><div></div></td></tr><tr><th scope="row" class="navbox-group" style="width:1%"><a href="/wiki/Flow_network" title="Flow network">Network flows</a></th><td class="navbox-list-with-group navbox-list navbox-even" style="width:100%;padding:0"><div style="padding:0 0.25em">
<ul><li><a href="/wiki/Dinic%27s_algorithm" title="Dinic&#39;s algorithm">Dinic</a></li>
<li><a href="/wiki/Edmonds%E2%80%93Karp_algorithm" title="Edmonds–Karp algorithm">Edmonds–Karp</a></li>
<li><a href="/wiki/Ford%E2%80%93Fulkerson_algorithm" title="Ford–Fulkerson algorithm">Ford–Fulkerson</a></li>
<li><a href="/wiki/Push%E2%80%93relabel_maximum_flow_algorithm" title="Push–relabel maximum flow algorithm">Push–relabel maximum flow</a></li></ul>
</div></td></tr></tbody></table><div></div></td></tr></tbody></table><div></div></td></tr><tr><td colspan="2" class="navbox-list navbox-odd" style="width:100%;padding:0"><div style="padding:0 0.25em"></div><table class="nowraplinks mw-collapsible mw-collapsed navbox-subgroup" style="border-spacing:0"><tbody><tr><th scope="col" class="navbox-title" colspan="2"><div id="Metaheuristics381" style="font-size:114%;margin:0 4em"><a href="/wiki/Metaheuristic" title="Metaheuristic">Metaheuristics</a></div></th></tr><tr><td colspan="2" class="navbox-list navbox-odd" style="width:100%;padding:0"><div style="padding:0 0.25em">
<ul><li><a href="/wiki/Evolutionary_algorithm" title="Evolutionary algorithm">Evolutionary algorithm</a></li>
<li><a href="/wiki/Hill_climbing" title="Hill climbing">Hill climbing</a></li>
<li><a href="/wiki/Local_search_(optimization)" title="Local search (optimization)">Local search</a></li>
<li><a href="/wiki/Parallel_metaheuristic" title="Parallel metaheuristic">Parallel metaheuristics</a></li>
<li><a href="/wiki/Simulated_annealing" title="Simulated annealing">Simulated annealing</a></li>
<li><a href="/wiki/Spiral_optimization_algorithm" title="Spiral optimization algorithm">Spiral optimization algorithm</a></li>
<li><a href="/wiki/Tabu_search" title="Tabu search">Tabu search</a></li></ul>
</div></td></tr></tbody></table><div></div></td></tr><tr><td class="navbox-abovebelow" colspan="3"><div>
<ul><li><a href="/wiki/Comparison_of_optimization_software" title="Comparison of optimization software">Software</a></li></ul>
</div></td></tr></tbody></table></div>
<!-- 
NewPP limit report
Parsed by mw‐web.eqiad.main‐5f99d748c‐7z2rx
Cached time: 20250728150647
Cache expiry: 2592000
Reduced expiry: false
Complications: [vary‐revision‐sha1, show‐toc]
CPU time usage: 0.418 seconds
Real time usage: 0.545 seconds
Preprocessor visited node count: 2108/1000000
Revision size: 8820/2097152 bytes
Post‐expand include size: 65636/2097152 bytes
Template argument size: 838/2097152 bytes
Highest expansion depth: 16/100
Expensive parser function count: 2/500
Unstrip recursion depth: 1/20
Unstrip post‐expand size: 21285/5000000 bytes
Lua time usage: 0.250/10.000 seconds
Lua memory usage: 4908171/52428800 bytes
Number of Wikibase entities loaded: 0/500
-->
<!--
Transclusion expansion time report (%,ms,calls,template)
100.00%  427.129      1 -total
 26.62%  113.714      1 Template:Reflist
 22.13%   94.536      1 Template:Cite_web
 22.01%   94.024      1 Template:Optimization_algorithms
 21.45%   91.600      1 Template:Navbox_with_collapsible_groups
 20.62%   88.084      1 Template:Short_description
 15.10%   64.508      5 Template:Rp
 13.37%   57.109      5 Template:R/superscript
 11.75%   50.176      2 Template:Pagetype
  6.98%   29.834      3 Template:Cite_book
-->

<!-- Saved in parser cache with key enwiki:pcache:1537058:|#|:idhash:canonical and timestamp 20250728150647 and revision id 1239715615. Rendering was triggered because: page-view
 -->
</div><noscript><img src="https://en.wikipedia.org/wiki/Special:CentralAutoLogin/start?type=1x1&amp;usesul3=1" alt="" width="1" height="1" style="border: none; position: absolute;"></noscript>
<div class="printfooter" data-nosnippet="">Retrieved from "<a dir="ltr" href="https://en.wikipedia.org/w/index.php?title=Line_search&amp;oldid=1239715615">https://en.wikipedia.org/w/index.php?title=Line_search&amp;oldid=1239715615</a>"</div></div>
					<div id="catlinks" class="catlinks" data-mw="interface"><div id="mw-normal-catlinks" class="mw-normal-catlinks"><a href="/wiki/Help:Category" title="Help:Category">Category</a>: <ul><li><a href="/wiki/Category:Optimization_algorithms_and_methods" title="Category:Optimization algorithms and methods">Optimization algorithms and methods</a></li></ul></div><div id="mw-hidden-catlinks" class="mw-hidden-catlinks mw-hidden-cats-hidden">Hidden categories: <ul><li><a href="/wiki/Category:Articles_with_short_description" title="Category:Articles with short description">Articles with short description</a></li><li><a href="/wiki/Category:Short_description_matches_Wikidata" title="Category:Short description matches Wikidata">Short description matches Wikidata</a></li></ul></div></div>
				</div>
			</main>
			
		</div>
		<div class="mw-footer-container">
			
<footer id="footer" class="mw-footer" >
	<ul id="footer-info">
	<li id="footer-info-lastmod"> This page was last edited on 11 August 2024, at 01:59<span class="anonymous-show">&#160;(UTC)</span>.</li>
	<li id="footer-info-copyright">Text is available under the <a href="/wiki/Wikipedia:Text_of_the_Creative_Commons_Attribution-ShareAlike_4.0_International_License" title="Wikipedia:Text of the Creative Commons Attribution-ShareAlike 4.0 International License">Creative Commons Attribution-ShareAlike 4.0 License</a>;
additional terms may apply. By using this site, you agree to the <a href="https://foundation.wikimedia.org/wiki/Special:MyLanguage/Policy:Terms_of_Use" class="extiw" title="foundation:Special:MyLanguage/Policy:Terms of Use">Terms of Use</a> and <a href="https://foundation.wikimedia.org/wiki/Special:MyLanguage/Policy:Privacy_policy" class="extiw" title="foundation:Special:MyLanguage/Policy:Privacy policy">Privacy Policy</a>. Wikipedia® is a registered trademark of the <a rel="nofollow" class="external text" href="https://wikimediafoundation.org/">Wikimedia Foundation, Inc.</a>, a non-profit organization.</li>
</ul>

	<ul id="footer-places">
	<li id="footer-places-privacy"><a href="https://foundation.wikimedia.org/wiki/Special:MyLanguage/Policy:Privacy_policy">Privacy policy</a></li>
	<li id="footer-places-about"><a href="/wiki/Wikipedia:About">About Wikipedia</a></li>
	<li id="footer-places-disclaimers"><a href="/wiki/Wikipedia:General_disclaimer">Disclaimers</a></li>
	<li id="footer-places-contact"><a href="//en.wikipedia.org/wiki/Wikipedia:Contact_us">Contact Wikipedia</a></li>
	<li id="footer-places-wm-codeofconduct"><a href="https://foundation.wikimedia.org/wiki/Special:MyLanguage/Policy:Universal_Code_of_Conduct">Code of Conduct</a></li>
	<li id="footer-places-developers"><a href="https://developer.wikimedia.org">Developers</a></li>
	<li id="footer-places-statslink"><a href="https://stats.wikimedia.org/#/en.wikipedia.org">Statistics</a></li>
	<li id="footer-places-cookiestatement"><a href="https://foundation.wikimedia.org/wiki/Special:MyLanguage/Policy:Cookie_statement">Cookie statement</a></li>
	<li id="footer-places-mobileview"><a href="//en.m.wikipedia.org/w/index.php?title=Line_search&amp;printable=yes&amp;mobileaction=toggle_view_mobile" class="noprint stopMobileRedirectToggle">Mobile view</a></li>
</ul>

	<ul id="footer-icons" class="noprint">
	<li id="footer-copyrightico"><a href="https://www.wikimedia.org/" class="cdx-button cdx-button--fake-button cdx-button--size-large cdx-button--fake-button--enabled"><picture><source media="(min-width: 500px)" srcset="/static/images/footer/wikimedia-button.svg" width="84" height="29"><img src="/static/images/footer/wikimedia.svg" width="25" height="25" alt="Wikimedia Foundation" lang="en" loading="lazy"></picture></a></li>
	<li id="footer-poweredbyico"><a href="https://www.mediawiki.org/" class="cdx-button cdx-button--fake-button cdx-button--size-large cdx-button--fake-button--enabled"><picture><source media="(min-width: 500px)" srcset="/w/resources/assets/poweredby_mediawiki.svg" width="88" height="31"><img src="/w/resources/assets/mediawiki_compact.svg" alt="Powered by MediaWiki" lang="en" width="25" height="25" loading="lazy"></picture></a></li>
</ul>

</footer>

		</div>
	</div> 
</div> 
<div class="vector-header-container vector-sticky-header-container no-font-mode-scale">
	<div id="vector-sticky-header" class="vector-sticky-header">
		<div class="vector-sticky-header-start">
			<div class="vector-sticky-header-icon-start vector-button-flush-left vector-button-flush-right" aria-hidden="true">
				<button class="cdx-button cdx-button--weight-quiet cdx-button--icon-only vector-sticky-header-search-toggle" tabindex="-1" data-event-name="ui.vector-sticky-search-form.icon"><span class="vector-icon mw-ui-icon-search mw-ui-icon-wikimedia-search"></span>

<span>Search</span>
			</button>
		</div>
			
		<div role="search" class="vector-search-box-vue  vector-search-box-show-thumbnail vector-search-box">
			<div class="vector-typeahead-search-container">
				<div class="cdx-typeahead-search cdx-typeahead-search--show-thumbnail">
					<form action="/w/index.php" id="vector-sticky-search-form" class="cdx-search-input cdx-search-input--has-end-button">
						<div  class="cdx-search-input__input-wrapper"  data-search-loc="header-moved">
							<div class="cdx-text-input cdx-text-input--has-start-icon">
								<input
									class="cdx-text-input__input mw-searchInput" autocomplete="off"
									
									type="search" name="search" placeholder="Search Wikipedia">
								<span class="cdx-text-input__icon cdx-text-input__start-icon"></span>
							</div>
							<input type="hidden" name="title" value="Special:Search">
						</div>
						<button class="cdx-button cdx-search-input__end-button">Search</button>
					</form>
				</div>
			</div>
		</div>
		<div class="vector-sticky-header-context-bar">
				<nav aria-label="Contents" class="vector-toc-landmark">
						
					<div id="vector-sticky-header-toc" class="vector-dropdown mw-portlet mw-portlet-sticky-header-toc vector-sticky-header-toc vector-button-flush-left"  >
						<input type="checkbox" id="vector-sticky-header-toc-checkbox" role="button" aria-haspopup="true" data-event-name="ui.dropdown-vector-sticky-header-toc" class="vector-dropdown-checkbox "  aria-label="Toggle the table of contents"  >
						<label id="vector-sticky-header-toc-label" for="vector-sticky-header-toc-checkbox" class="vector-dropdown-label cdx-button cdx-button--fake-button cdx-button--fake-button--enabled cdx-button--weight-quiet cdx-button--icon-only " aria-hidden="true"  ><span class="vector-icon mw-ui-icon-listBullet mw-ui-icon-wikimedia-listBullet"></span>

<span class="vector-dropdown-label-text">Toggle the table of contents</span>
						</label>
						<div class="vector-dropdown-content">
					
						<div id="vector-sticky-header-toc-unpinned-container" class="vector-unpinned-container">
						</div>
					
						</div>
					</div>
			</nav>
				<div class="vector-sticky-header-context-bar-primary" aria-hidden="true" ><span class="mw-page-title-main">Line search</span></div>
			</div>
		</div>
		<div class="vector-sticky-header-end" aria-hidden="true">
			<div class="vector-sticky-header-icons">
				<a href="#" class="cdx-button cdx-button--fake-button cdx-button--fake-button--enabled cdx-button--weight-quiet cdx-button--icon-only" id="ca-talk-sticky-header" tabindex="-1" data-event-name="talk-sticky-header"><span class="vector-icon mw-ui-icon-speechBubbles mw-ui-icon-wikimedia-speechBubbles"></span>

<span></span>
			</a>
			<a href="#" class="cdx-button cdx-button--fake-button cdx-button--fake-button--enabled cdx-button--weight-quiet cdx-button--icon-only" id="ca-subject-sticky-header" tabindex="-1" data-event-name="subject-sticky-header"><span class="vector-icon mw-ui-icon-article mw-ui-icon-wikimedia-article"></span>

<span></span>
			</a>
			<a href="#" class="cdx-button cdx-button--fake-button cdx-button--fake-button--enabled cdx-button--weight-quiet cdx-button--icon-only" id="ca-history-sticky-header" tabindex="-1" data-event-name="history-sticky-header"><span class="vector-icon mw-ui-icon-wikimedia-history mw-ui-icon-wikimedia-wikimedia-history"></span>

<span></span>
			</a>
			<a href="#" class="cdx-button cdx-button--fake-button cdx-button--fake-button--enabled cdx-button--weight-quiet cdx-button--icon-only mw-watchlink" id="ca-watchstar-sticky-header" tabindex="-1" data-event-name="watch-sticky-header"><span class="vector-icon mw-ui-icon-wikimedia-star mw-ui-icon-wikimedia-wikimedia-star"></span>

<span></span>
			</a>
			<a href="#" class="cdx-button cdx-button--fake-button cdx-button--fake-button--enabled cdx-button--weight-quiet cdx-button--icon-only" id="ca-edit-sticky-header" tabindex="-1" data-event-name="wikitext-edit-sticky-header"><span class="vector-icon mw-ui-icon-wikimedia-wikiText mw-ui-icon-wikimedia-wikimedia-wikiText"></span>

<span></span>
			</a>
			<a href="#" class="cdx-button cdx-button--fake-button cdx-button--fake-button--enabled cdx-button--weight-quiet cdx-button--icon-only" id="ca-ve-edit-sticky-header" tabindex="-1" data-event-name="ve-edit-sticky-header"><span class="vector-icon mw-ui-icon-wikimedia-edit mw-ui-icon-wikimedia-wikimedia-edit"></span>

<span></span>
			</a>
			<a href="#" class="cdx-button cdx-button--fake-button cdx-button--fake-button--enabled cdx-button--weight-quiet cdx-button--icon-only" id="ca-viewsource-sticky-header" tabindex="-1" data-event-name="ve-edit-protected-sticky-header"><span class="vector-icon mw-ui-icon-wikimedia-editLock mw-ui-icon-wikimedia-wikimedia-editLock"></span>

<span></span>
			</a>
		</div>
			<div class="vector-sticky-header-buttons">
				<button class="cdx-button cdx-button--weight-quiet mw-interlanguage-selector" id="p-lang-btn-sticky-header" tabindex="-1" data-event-name="ui.dropdown-p-lang-btn-sticky-header"><span class="vector-icon mw-ui-icon-wikimedia-language mw-ui-icon-wikimedia-wikimedia-language"></span>

<span>10 languages</span>
			</button>
			<a href="#" class="cdx-button cdx-button--fake-button cdx-button--fake-button--enabled cdx-button--weight-quiet cdx-button--action-progressive" id="ca-addsection-sticky-header" tabindex="-1" data-event-name="addsection-sticky-header"><span class="vector-icon mw-ui-icon-speechBubbleAdd-progressive mw-ui-icon-wikimedia-speechBubbleAdd-progressive"></span>

<span>Add topic</span>
			</a>
		</div>
			<div class="vector-sticky-header-icon-end">
				<div class="vector-user-links">
				</div>
			</div>
		</div>
	</div>
</div>
<div class="mw-portlet mw-portlet-dock-bottom emptyPortlet" id="p-dock-bottom">
	<ul>
		
	</ul>
</div>
<script>(RLQ=window.RLQ||[]).push(function(){mw.config.set({"wgHostname":"mw-web.eqiad.main-5f84f56cbb-8qtqc","wgBackendResponseTime":149,"wgPageParseReport":{"limitreport":{"cputime":"0.418","walltime":"0.545","ppvisitednodes":{"value":2108,"limit":1000000},"revisionsize":{"value":8820,"limit":2097152},"postexpandincludesize":{"value":65636,"limit":2097152},"templateargumentsize":{"value":838,"limit":2097152},"expansiondepth":{"value":16,"limit":100},"expensivefunctioncount":{"value":2,"limit":500},"unstrip-depth":{"value":1,"limit":20},"unstrip-size":{"value":21285,"limit":5000000},"entityaccesscount":{"value":0,"limit":500},"timingprofile":["100.00%  427.129      1 -total"," 26.62%  113.714      1 Template:Reflist"," 22.13%   94.536      1 Template:Cite_web"," 22.01%   94.024      1 Template:Optimization_algorithms"," 21.45%   91.600      1 Template:Navbox_with_collapsible_groups"," 20.62%   88.084      1 Template:Short_description"," 15.10%   64.508      5 Template:Rp"," 13.37%   57.109      5 Template:R/superscript"," 11.75%   50.176      2 Template:Pagetype","  6.98%   29.834      3 Template:Cite_book"]},"scribunto":{"limitreport-timeusage":{"value":"0.250","limit":"10.000"},"limitreport-memusage":{"value":4908171,"limit":52428800}},"cachereport":{"origin":"mw-web.eqiad.main-5f99d748c-7z2rx","timestamp":"20250728150647","ttl":2592000,"transientcontent":false}}});});</script>
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@type":"Article","name":"Line search","url":"https:\/\/en.wikipedia.org\/wiki\/Line_search","sameAs":"http:\/\/www.wikidata.org\/entity\/Q3278015","mainEntity":"http:\/\/www.wikidata.org\/entity\/Q3278015","author":{"@type":"Organization","name":"Contributors to Wikimedia projects"},"publisher":{"@type":"Organization","name":"Wikimedia Foundation, Inc.","logo":{"@type":"ImageObject","url":"https:\/\/www.wikimedia.org\/static\/images\/wmf-hor-googpub.png"}},"datePublished":"2005-02-16T16:26:40Z","dateModified":"2024-08-11T01:59:50Z","headline":"optimization algorithm"}</script>
</body>
</html>ef="/w/index.php?title=Line_search&amp;diff=prev&amp;oldid=1098956643" class="mw-history-histlinks-previous" title="Difference with preceding revision">prev</a></span></span><input type="radio" value="1098956643" name="oldid" id="mw-oldid-1098956643"><input type="radio" value="1098956643" name="diff" id="mw-diff-1098956643"> <bdi dir="ltr"><span class="mw-changeslist-time">08:38</span><bdi dir="ltr"><a href="/w/index.php?title=Line_search&amp;oldid=1098956643" class="mw-changeslist-date" title="Line search">08:38, 18 July 2022</a></bdi></bdi> <span class='history-user'><a href="/wiki/User:The_Anome" class="mw-userlink" title="User:The Anome" data-mw-revid="1098956643"><bdi>The Anome</bdi></a> <span class="mw-usertoollinks mw-changeslist-links"><span><a href="/wiki/User_talk:The_Anome" class="mw-usertoollinks-talk" title="User talk:The Anome">talk</a></span> <span><a href="/wiki/Special:Contributions/The_Anome" class="mw-usertoollinks-contribs" title="Special:Contributions/The Anome">contribs</a></span></span></span> <span class="mw-changeslist-separator"></span> <span class="history-size mw-diff-bytes" data-mw-bytes="4320">4,320 bytes</span> <span dir="ltr" class="mw-plusminus-null mw-diff-bytes" title="4,320 bytes after change of this size">0</span> <span class="mw-changeslist-separator"></span>  <span class="comment comment--without-parentheses"><span class="autocomment"><a href="/wiki/Line_search#Example_use" title="Line search">→<bdi dir="ltr">Example use</bdi></a>: </span> fix equation</span> <span class="mw-changeslist-links mw-pager-tools"><span><span class="mw-history-undo"><a href="/w/index.php?title=Line_search&amp;action=edit&amp;undoafter=1098955026&amp;undo=1098956643" title="Line search">undo</a></span></span></span> <span class="mw-tag-markers"><a href="/wiki/Special:Tags" title="Special:Tags">Tag</a>: <span class="mw-tag-marker mw-tag-marker-visualeditor-wikitext"><a href="https://www.mediawiki.org/wiki/Special:MyLanguage/2017_wikitext_editor">2017 wikitext editor</a></span></span></li>
<li data-mw-revid="1098955026" class="mw-tag-shortdesc_helper"><span class="mw-history-histlinks mw-changeslist-links"><span><a href="/w/index.php?title=Line_search&amp;diff=1239715615&amp;oldid=1098955026" class="mw-history-histlinks-current" title="Difference with latest revision">cur</a></span><span><a href="/w/index.php?title=Line_search&amp;diff=prev&amp;oldid=1098955026" class="mw-history-histlinks-previous" title="Difference with preceding revision">prev</a></span></span><input type="radio" value="1098955026" name="oldid" id="mw-oldid-1098955026"><input type="radio" value="1098955026" name="diff" id="mw-diff-1098955026"> <bdi dir="ltr"><span class="mw-changeslist-time">08:25</span><bdi dir="ltr"><a href="/w/index.php?title=Line_search&amp;oldid=1098955026" class="mw-changeslist-date" title="Line search">08:25, 18 July 2022</a></bdi></bdi> <span class='history-user'><a href="/wiki/User:The_Anome" class="mw-userlink" title="User:The Anome" data-mw-revid="1098955026"><bdi>The Anome</bdi></a> <span class="mw-usertoollinks mw-changeslist-links"><span><a href="/wiki/User_talk:The_Anome" class="mw-usertoollinks-talk" title="User talk:The Anome">talk</a></span> <span><a href="/wiki/Special:Contributions/The_Anome" class="mw-usertoollinks-contribs" title="Special:Contributions/The Anome">contribs</a></span></span></span> <span class="mw-changeslist-separator"></span> <span class="history-size mw-diff-bytes" data-mw-bytes="4320">4,320 bytes</span> <span dir="ltr" class="mw-plusminus-pos mw-diff-bytes" title="4,320 bytes after change of this size">+45</span> <span class="mw-changeslist-separator"></span>  <span class="comment comment--without-parentheses">Adding <a href="/wiki/Wikipedia:Short_description" title="Wikipedia:Short description">short description</a>: &quot;Optimization algorithm&quot;</span> <span class="mw-changeslist-links mw-pager-tools"><span><span class="mw-history-undo"><a href="/w/index.php?title=Line_search&amp;action=edit&amp;undoafter=972991967&amp;undo=1098955026" title="Line search">undo</a></span></span></span> <span class="mw-tag-markers"><a href="/wiki/Special:Tags" title="Special:Tags">Tag</a>: <span class="mw-tag-marker mw-tag-marker-shortdesc_helper"><a href="/wiki/Wikipedia:Shortdesc_helper" title="Wikipedia:Shortdesc helper">Shortdesc helper</a></span></span></li>
</ul><h4 class="mw-index-pager-list-header">14 August 2020</h4><ul class="mw-contributions-list">
<li data-mw-revid="972991967"><span class="mw-history-histlinks mw-changeslist-links"><span><a href="/w/index.php?title=Line_search&amp;diff=1239715615&amp;oldid=972991967" class="mw-history-histlinks-current" title="Difference with latest revision">cur</a></span><span><a href="/w/index.php?title=Line_search&amp;diff=prev&amp;oldid=972991967" class="mw-history-histlinks-previous" title="Difference with preceding revision">prev</a></span></span><input type="radio" value="972991967" name="oldid" id="mw-oldid-972991967"><input type="radio" value="972991967" name="diff" id="mw-diff-972991967"> <bdi dir="ltr"><span class="mw-changeslist-time">20:46</span><bdi dir="ltr"><a href="/w/index.php?title=Line_search&amp;oldid=972991967" class="mw-changeslist-date" title="Line search">20:46, 14 August 2020</a></bdi></bdi> <span class='history-user'><a href="/wiki/User:Bender235" class="mw-userlink" title="User:Bender235" data-mw-revid="972991967"><bdi>Bender235</bdi></a> <span class="mw-usertoollinks mw-changeslist-links"><span><a href="/wiki/User_talk:Bender235" class="mw-usertoollinks-talk" title="User talk:Bender235">talk</a></span> <span><a href="/wiki/Special:Contributions/Bender235" class="mw-usertoollinks-contribs" title="Special:Contributions/Bender235">contribs</a></span></span></span> <span class="mw-changeslist-separator"></span> <span class="history-size mw-diff-bytes" data-mw-bytes="4275">4,275 bytes</span> <span dir="ltr" class="mw-plusminus-pos mw-diff-bytes" title="4,275 bytes after change of this size">+238</span> <span class="mw-changeslist-separator"></span>  <span class="comment comment--without-parentheses"><span class="autocomment"><a href="/wiki/Line_search#Further_reading" title="Line search">→<bdi dir="ltr">Further reading</bdi></a></span></span> <span class="mw-changeslist-links mw-pager-tools"><span><span class="mw-history-undo"><a href="/w/index.php?title=Line_search&amp;action=edit&amp;undoafter=962615157&amp;undo=972991967" title="Line search">undo</a></span></span></span></li>
</ul><h4 class="mw-index-pager-list-header">15 June 2020</h4><ul class="mw-contributions-list">
<li data-mw-revid="962615157"><span class="mw-history-histlinks mw-changeslist-links"><span><a href="/w/index.php?title=Line_search&amp;diff=1239715615&amp;oldid=962615157" class="mw-history-histlinks-current" title="Difference with latest revision">cur</a></span><span><a href="/w/index.php?title=Line_search&amp;diff=prev&amp;oldid=962615157" class="mw-history-histlinks-previous" title="Difference with preceding revision">prev</a></span></span><input type="radio" value="962615157" name="oldid" id="mw-oldid-962615157"><input type="radio" value="962615157" name="diff" id="mw-diff-962615157"> <bdi dir="ltr"><span class="mw-changeslist-time">02:29</span><bdi dir="ltr"><a href="/w/index.php?title=Line_search&amp;oldid=962615157" class="mw-changeslist-date" title="Line search">02:29, 15 June 2020</a></bdi></bdi> <span class='history-user'><a href="/wiki/User:Bender235" class="mw-userlink" title="User:Bender235" data-mw-revid="962615157"><bdi>Bender235</bdi></a> <span class="mw-usertoollinks mw-changeslist-links"><span><a href="/wiki/User_talk:Bender235" class="mw-usertoollinks-talk" title="User talk:Bender235">talk</a></span> <span><a href="/wiki/Special:Contributions/Bender235" class="mw-usertoollinks-contribs" title="Special:Contributions/Bender235">contribs</a></span></span></span> <span class="mw-changeslist-separator"></span> <span class="history-size mw-diff-bytes" data-mw-bytes="4037">4,037 bytes</span> <span dir="ltr" class="mw-plusminus-neg mw-diff-bytes" title="4,037 bytes after change of this size">−45</span> <span class="mw-changeslist-separator"></span>  <span class="comment comment--without-parentheses"><span class="autocomment"><a href="/wiki/Line_search#See_also" title="Line search">→<bdi dir="ltr">See also</bdi></a></span></span> <span class="mw-changeslist-links mw-pager-tools"><span><span class="mw-history-undo"><a href="/w/index.php?title=Line_search&amp;action=edit&amp;undoafter=962613748&amp;undo=962615157" title="Line search">undo</a></span></span></span></li>
<li data-mw-revid="962613748"><span class="mw-history-histlinks mw-changeslist-links"><span><a href="/w/index.php?title=Line_search&amp;diff=1239715615&amp;oldid=962613748" class="mw-history-histlinks-current" title="Difference with latest revision">cur</a></span><span><a href="/w/index.php?title=Line_search&amp;diff=prev&amp;oldid=962613748" class="mw-history-histlinks-previous" title="Difference with preceding revision">prev</a></span></span><input type="radio" value="962613748" name="oldid" id="mw-oldid-962613748"><input type="radio" value="962613748" name="diff" id="mw-diff-962613748"> <bdi dir="ltr"><span class="mw-changeslist-time">02:17</span><bdi dir="ltr"><a href="/w/index.php?title=Line_search&amp;oldid=962613748" class="mw-changeslist-date" title="Line search">02:17, 15 June 2020</a></bdi></bdi> <span class='history-user'><a href="/wiki/User:Bender235" class="mw-userlink" title="User:Bender235" data-mw-revid="962613748"><bdi>Bender235</bdi></a> <span class="mw-usertoollinks mw-changeslist-links"><span><a href="/wiki/User_talk:Bender235" class="mw-usertoollinks-talk" title="User talk:Bender235">talk</a></span> <span><a href="/wiki/Special:Contributions/Bender235" class="mw-usertoollinks-contribs" title="Special:Contributions/Bender235">contribs</a></span></span></span> <span class="mw-changeslist-separator"></span> <span class="history-size mw-diff-bytes" data-mw-bytes="4082">4,082 bytes</span> <strong dir="ltr" class="mw-plusminus-pos mw-diff-bytes" title="4,082 bytes after change of this size">+536</strong> <span class="mw-changeslist-separator"></span> <span class="comment mw-comment-none">No edit summary</span> <span class="mw-changeslist-links mw-pager-tools"><span><span class="mw-history-undo"><a href="/w/index.php?title=Line_search&amp;action=edit&amp;undoafter=924710216&amp;undo=962613748" title="Line search">undo</a></span></span></span></li>
</ul><h4 class="mw-index-pager-list-header">5 November 2019</h4><ul class="mw-contributions-list">
<li data-mw-revid="924710216" class="mw-tag-visualeditor"><span class="mw-history-histlinks mw-changeslist-links"><span><a href="/w/index.php?title=Line_search&amp;diff=1239715615&amp;oldid=924710216" class="mw-history-histlinks-current" title="Difference with latest revision">cur</a></span><span><a href="/w/index.php?title=Line_search&amp;diff=prev&amp;oldid=924710216" class="mw-history-histlinks-previous" title="Difference with preceding revision">prev</a></span></span><input type="radio" value="924710216" name="oldid" id="mw-oldid-924710216"><input type="radio" value="924710216" name="diff" id="mw-diff-924710216"> <bdi dir="ltr"><span class="mw-changeslist-time">13:35</span><bdi dir="ltr"><a href="/w/index.php?title=Line_search&amp;oldid=924710216" class="mw-changeslist-date" title="Line search">13:35, 5 November 2019</a></bdi></bdi> <span class='history-user'><a href="/wiki/Special:Contributions/141.22.193.120" class="mw-userlink mw-anonuserlink" title="Special:Contributions/141.22.193.120" data-mw-revid="924710216"><bdi>141.22.193.120</bdi></a> <span class="mw-usertoollinks mw-changeslist-links"><span><a href="/w/index.php?title=User_talk:141.22.193.120&amp;action=edit&amp;redlink=1" class="mw-usertoollinks-talk new" title="User talk:141.22.193.120 (page does not exist)">talk</a></span></span></span> <span class="mw-changeslist-separator"></span> <span class="history-size mw-diff-bytes" data-mw-bytes="3546">3,546 bytes</span> <span dir="ltr" class="mw-plusminus-pos mw-diff-bytes" title="3,546 bytes after change of this size">+4</span> <span class="mw-changeslist-separator"></span>  <span class="comment comment--without-parentheses">Gradient at new variable will be evaluatet</span> <span class="mw-changeslist-links mw-pager-tools"><span><span class="mw-history-undo"><a href="/w/index.php?title=Line_search&amp;action=edit&amp;undoafter=917672355&amp;undo=924710216" title="Line search">undo</a></span></span></span> <span class="mw-tag-markers"><a href="/wiki/Special:Tags" title="Special:Tags">Tag</a>: <span class="mw-tag-marker mw-tag-marker-visualeditor"><a href="/wiki/Wikipedia:VisualEditor">Visual edit</a></span></span></li>
</ul><h4 class="mw-index-pager-list-header">24 September 2019</h4><ul class="mw-contributions-list">
<li data-mw-revid="917672355"><span class="mw-history-histlinks mw-changeslist-links"><span><a href="/w/index.php?title=Line_search&amp;diff=1239715615&amp;oldid=917672355" class="mw-history-histlinks-current" title="Difference with latest revision">cur</a></span><span><a href="/w/index.php?title=Line_search&amp;diff=prev&amp;oldid=917672355" class="mw-history-histlinks-previous" title="Difference with preceding revision">prev</a></span></span><input type="radio" value="917672355" name="oldid" id="mw-oldid-917672355"><input type="radio" value="917672355" name="diff" id="mw-diff-917672355"> <bdi dir="ltr"><span class="mw-changeslist-time">22:26</span><bdi dir="ltr"><a href="/w/index.php?title=Line_search&amp;oldid=917672355" class="mw-changeslist-date" title="Line search">22:26, 24 September 2019</a></bdi></bdi> <span class='history-user'><a href="/wiki/Special:Contributions/152.3.43.47" class="mw-userlink mw-anonuserlink" title="Special:Contributions/152.3.43.47" data-mw-revid="917672355"><bdi>152.3.43.47</bdi></a> <span class="mw-usertoollinks mw-changeslist-links"><span><a href="/wiki/User_talk:152.3.43.47" class="mw-usertoollinks-talk" title="User talk:152.3.43.47">talk</a></span></span></span> <span class="mw-changeslist-separator"></span> <span class="history-size mw-diff-bytes" data-mw-bytes="3542">3,542 bytes</span> <span dir="ltr" class="mw-plusminus-pos mw-diff-bytes" title="3,542 bytes after change of this size">+31</span> <span class="mw-changeslist-separator"></span> <span class="comment mw-comment-none">No edit summary</span> <span class="mw-changeslist-links mw-pager-tools"><span><span class="mw-history-undo"><a href="/w/index.php?title=Line_search&amp;action=edit&amp;undoafter=905897927&amp;undo=917672355" title="Line search">undo</a></span></span></span></li>
</ul><h4 class="mw-index-pager-list-header">12 July 2019</h4><ul class="mw-contributions-list">
<li data-mw-revid="905897927" class="mw-tag-mw-undo"><span class="mw-history-histlinks mw-changeslist-links"><span><a href="/w/index.php?title=Line_search&amp;diff=1239715615&amp;oldid=905897927" class="mw-history-histlinks-current" title="Difference with latest revision">cur</a></span><span><a href="/w/index.php?title=Line_search&amp;diff=prev&amp;oldid=905897927" class="mw-history-histlinks-previous" title="Difference with preceding revision">prev</a></span></span><input type="radio" value="905897927" name="oldid" id="mw-oldid-905897927"><input type="radio" value="905897927" name="diff" id="mw-diff-905897927"> <bdi dir="ltr"><span class="mw-changeslist-time">06:18</span><bdi dir="ltr"><a href="/w/index.php?title=Line_search&amp;oldid=905897927" class="mw-changeslist-date" title="Line search">06:18, 12 July 2019</a></bdi></bdi> <span class='history-user'><a href="/wiki/User:Cherrysu" class="mw-userlink" title="User:Cherrysu" data-mw-revid="905897927"><bdi>Cherrysu</bdi></a> <span class="mw-usertoollinks mw-changeslist-links"><span><a href="/wiki/User_talk:Cherrysu" class="mw-usertoollinks-talk" title="User talk:Cherrysu">talk</a></span> <span><a href="/wiki/Special:Contributions/Cherrysu" class="mw-usertoollinks-contribs" title="Special:Contributions/Cherrysu">contribs</a></span></span></span> <abbr class="minoredit" title="This is a minor edit">m</abbr> <span class="mw-changeslist-separator"></span> <span class="history-size mw-diff-bytes" data-mw-bytes="3511">3,511 bytes</span> <span dir="ltr" class="mw-plusminus-pos mw-diff-bytes" title="3,511 bytes after change of this size">+182</span> <span class="mw-changeslist-separator"></span>  <span class="comment comment--without-parentheses">Undid revision 905893760 by <a href="/wiki/Special:Contributions/103.206.105.69" title="Special:Contributions/103.206.105.69">103.206.105.69</a> (<a href="/wiki/User_talk:103.206.105.69" title="User talk:103.206.105.69">talk</a>)</span> <span class="mw-changeslist-links mw-pager-tools"><span><span class="mw-history-undo"><a href="/w/index.php?title=Line_search&amp;action=edit&amp;undoafter=905893760&amp;undo=905897927" title="Line search">undo</a></span></span></span> <span class="mw-tag-markers"><a href="/wiki/Special:Tags" title="Special:Tags">Tag</a>: <span class="mw-tag-marker mw-tag-marker-mw-undo"><a href="/wiki/Wikipedia:Undo" class="mw-redirect" title="Wikipedia:Undo">Undo</a></span></span></li>
<li data-mw-revid="905893760"><span class="mw-history-histlinks mw-changeslist-links"><span><a href="/w/index.php?title=Line_search&amp;diff=1239715615&amp;oldid=905893760" class="mw-history-histlinks-current" title="Difference with latest revision">cur</a></span><span><a href="/w/index.php?title=Line_search&amp;diff=prev&amp;oldid=905893760" class="mw-history-histlinks-previous" title="Difference with preceding revision">prev</a></span></span><input type="radio" value="905893760" name="oldid" id="mw-oldid-905893760"><input type="radio" value="905893760" name="diff" id="mw-diff-905893760"> <bdi dir="ltr"><span class="mw-changeslist-time">05:16</span><bdi dir="ltr"><a href="/w/index.php?title=Line_search&amp;oldid=905893760" class="mw-changeslist-date" title="Line search">05:16, 12 July 2019</a></bdi></bdi> <span class='history-user'><a href="/wiki/Special:Contributions/103.206.105.69" class="mw-userlink mw-anonuserlink" title="Special:Contributions/103.206.105.69" data-mw-revid="905893760"><bdi>103.206.105.69</bdi></a> <span class="mw-usertoollinks mw-changeslist-links"><span><a href="/wiki/User_talk:103.206.105.69" class="mw-usertoollinks-talk" title="User talk:103.206.105.69">talk</a></span></span></span> <span class="mw-changeslist-separator"></span> <span class="history-size mw-diff-bytes" data-mw-bytes="3329">3,329 bytes</span> <span dir="ltr" class="mw-plusminus-neg mw-diff-bytes" title="3,329 bytes after change of this size">−182</span> <span class="mw-changeslist-separator"></span> <span class="comment mw-comment-none">No edit summary</span> <span class="mw-changeslist-links mw-pager-tools"><span><span class="mw-history-undo"><a href="/w/index.php?title=Line_search&amp;action=edit&amp;undoafter=891572128&amp;undo=905893760" title="Line search">undo</a></span></span></span></li>
</ul><h4 class="mw-index-pager-list-header">8 April 2019</h4><ul class="mw-contributions-list">
<li data-mw-revid="891572128"><span class="mw-history-histlinks mw-changeslist-links"><span><a href="/w/index.php?title=Line_search&amp;diff=1239715615&amp;oldid=891572128" class="mw-history-histlinks-current" title="Difference with latest revision">cur</a></span><span><a href="/w/index.php?title=Line_search&amp;diff=prev&amp;oldid=891572128" class="mw-history-histlinks-previous" title="Difference with preceding revision">prev</a></span></span><input type="radio" value="891572128" name="oldid" id="mw-oldid-891572128"><input type="radio" value="891572128" name="diff" id="mw-diff-891572128"> <bdi dir="ltr"><span class="mw-changeslist-time">20:24</span><bdi dir="ltr"><a href="/w/index.php?title=Line_search&amp;oldid=891572128" class="mw-changeslist-date" title="Line search">20:24, 8 April 2019</a></bdi></bdi> <span class='history-user'><a href="/wiki/User:Michael_Hardy" class="mw-userlink" title="User:Michael Hardy" data-mw-revid="891572128"><bdi>Michael Hardy</bdi></a> <span class="mw-usertoollinks mw-changeslist-links"><span><a href="/wiki/User_talk:Michael_Hardy" class="mw-usertoollinks-talk" title="User talk:Michael Hardy">talk</a></span> <span><a href="/wiki/Special:Contributions/Michael_Hardy" class="mw-usertoollinks-contribs" title="Special:Contributions/Michael Hardy">contribs</a></span></span></span> <span class="mw-changeslist-separator"></span> <span class="history-size mw-diff-bytes" data-mw-bytes="3511">3,511 bytes</span> <span dir="ltr" class="mw-plusminus-null mw-diff-bytes" title="3,511 bytes after change of this size">0</span> <span class="mw-changeslist-separator"></span> <span class="comment mw-comment-none">No edit summary</span> <span class="mw-changeslist-links mw-pager-tools"><span><span class="mw-history-undo"><a href="/w/index.php?title=Line_search&amp;action=edit&amp;undoafter=891572074&amp;undo=891572128" title="Line search">undo</a></span></span></span></li>
<li data-mw-revid="891572074"><span class="mw-history-histlinks mw-changeslist-links"><span><a href="/w/index.php?title=Line_search&amp;diff=1239715615&amp;oldid=891572074" class="mw-history-histlinks-current" title="Difference with latest revision">cur</a></span><span><a href="/w/index.php?title=Line_search&amp;diff=prev&amp;oldid=891572074" class="mw-history-histlinks-previous" title="Difference with preceding revision">prev</a></span></span><input type="radio" value="891572074" name="oldid" id="mw-oldid-891572074"><input type="radio" value="891572074" name="diff" id="mw-diff-891572074"> <bdi dir="ltr"><span class="mw-changeslist-time">20:23</span><bdi dir="ltr"><a href="/w/index.php?title=Line_search&amp;oldid=891572074" class="mw-changeslist-date" title="Line search">20:23, 8 April 2019</a></bdi></bdi> <span class='history-user'><a href="/wiki/User:Michael_Hardy" class="mw-userlink" title="User:Michael Hardy" data-mw-revid="891572074"><bdi>Michael Hardy</bdi></a> <span class="mw-usertoollinks mw-changeslist-links"><span><a href="/wiki/User_talk:Michael_Hardy" class="mw-usertoollinks-talk" title="User talk:Michael Hardy">talk</a></span> <span><a href="/wiki/Special:Contributions/Michael_Hardy" class="mw-usertoollinks-contribs" title="Special:Contributions/Michael Hardy">contribs</a></span></span></span> <span class="mw-changeslist-separator"></span> <span class="history-size mw-diff-bytes" data-mw-bytes="3511">3,511 bytes</span> <span dir="ltr" class="mw-plusminus-pos mw-diff-bytes" title="3,511 bytes after change of this size">+21</span> <span class="mw-changeslist-separator"></span> <span class="comment mw-comment-none">No edit summary</span> <span class="mw-changeslist-links mw-pager-tools"><span><span class="mw-history-undo"><a href="/w/index.php?title=Line_search&amp;action=edit&amp;undoafter=824794118&amp;undo=891572074" title="Line search">undo</a></span></span></span></li>
</ul><h4 class="mw-index-pager-list-header">9 February 2018</h4><ul class="mw-contributions-list">
<li data-mw-revid="824794118"><span class="mw-history-histlinks mw-changeslist-links"><span><a href="/w/index.php?title=Line_search&amp;diff=1239715615&amp;oldid=824794118" class="mw-history-histlinks-current" title="Difference with latest revision">cur</a></span><span><a href="/w/index.php?title=Line_search&amp;diff=prev&amp;oldid=824794118" class="mw-history-histlinks-previous" title="Difference with preceding revision">prev</a></span></span><input type="radio" value="824794118" name="oldid" id="mw-oldid-824794118"><input type="radio" value="824794118" name="diff" id="mw-diff-824794118"> <bdi dir="ltr"><span class="mw-changeslist-time">15:00</span><bdi dir="ltr"><a href="/w/index.php?title=Line_search&amp;oldid=824794118" class="mw-changeslist-date" title="Line search">15:00, 9 February 2018</a></bdi></bdi> <span class='history-user'><a href="/wiki/User:Marcocapelle" class="mw-userlink" title="User:Marcocapelle" data-mw-revid="824794118"><bdi>Marcocapelle</bdi></a> <span class="mw-usertoollinks mw-changeslist-links"><span><a href="/wiki/User_talk:Marcocapelle" class="mw-usertoollinks-talk" title="User talk:Marcocapelle">talk</a></span> <span><a href="/wiki/Special:Contributions/Marcocapelle" class="mw-usertoollinks-contribs" title="Special:Contributions/Marcocapelle">contribs</a></span></span></span> <span class="mw-changeslist-separator"></span> <span class="history-size mw-diff-bytes" data-mw-bytes="3490">3,490 bytes</span> <span dir="ltr" class="mw-plusminus-neg mw-diff-bytes" title="3,490 bytes after change of this size">−39</span> <span class="mw-changeslist-separator"></span>  <span class="comment comment--without-parentheses">removed parent category of <a href="/wiki/Category:Optimization_algorithms_and_methods" title="Category:Optimization algorithms and methods">Category:Optimization algorithms and methods</a></span> <span class="mw-changeslist-links mw-pager-tools"><span><span class="mw-history-undo"><a href="/w/index.php?title=Line_search&amp;action=edit&amp;undoafter=808362885&amp;undo=824794118" title="Line search">undo</a></span></span></span></li>
</ul><h4 class="mw-index-pager-list-header">2 November 2017</h4><ul class="mw-contributions-list">
<li data-mw-revid="808362885"><span class="mw-history-histlinks mw-changeslist-links"><span><a href="/w/index.php?title=Line_search&amp;diff=1239715615&amp;oldid=808362885" class="mw-history-histlinks-current" title="Difference with latest revision">cur</a></span><span><a href="/w/index.php?title=Line_search&amp;diff=prev&amp;oldid=808362885" class="mw-history-histlinks-previous" title="Difference with preceding revision">prev</a></span></span><input type="radio" value="808362885" name="oldid" id="mw-oldid-808362885"><input type="radio" value="808362885" name="diff" id="mw-diff-808362885"> <bdi dir="ltr"><span class="mw-changeslist-time">12:24</span><bdi dir="ltr"><a href="/w/index.php?title=Line_search&amp;oldid=808362885" class="mw-changeslist-date" title="Line search">12:24, 2 November 2017</a></bdi></bdi> <span class='history-user'><a href="/wiki/Special:Contributions/129.31.213.166" class="mw-userlink mw-anonuserlink" title="Special:Contributions/129.31.213.166" data-mw-revid="808362885"><bdi>129.31.213.166</bdi></a> <span class="mw-usertoollinks mw-changeslist-links"><span><a href="/w/index.php?title=User_talk:129.31.213.166&amp;action=edit&amp;redlink=1" class="mw-usertoollinks-talk new" title="User talk:129.31.213.166 (page does not exist)">talk</a></span></span></span> <span class="mw-changeslist-separator"></span> <span class="history-size mw-diff-bytes" data-mw-bytes="3529">3,529 bytes</span> <span dir="ltr" class="mw-plusminus-pos mw-diff-bytes" title="3,529 bytes after change of this size">+24</span> <span class="mw-changeslist-separator"></span>  <span class="comment comment--without-parentheses"><span class="autocomment"><a href="/wiki/Line_search#Example_use" title="Line search">→<bdi dir="ltr">Example use</bdi></a></span></span> <span class="mw-changeslist-links mw-pager-tools"><span><span class="mw-history-undo"><a href="/w/index.php?title=Line_search&amp;action=edit&amp;undoafter=786179856&amp;undo=808362885" title="Line search">undo</a></span></span></span></li>
</ul><h4 class="mw-index-pager-list-header">17 June 2017</h4><ul class="mw-contributions-list">
<li data-mw-revid="786179856"><span class="mw-history-histlinks mw-changeslist-links"><span><a href="/w/index.php?title=Line_search&amp;diff=1239715615&amp;oldid=786179856" class="mw-history-histlinks-current" title="Difference with latest revision">cur</a></span><span><a href="/w/index.php?title=Line_search&amp;diff=prev&amp;oldid=786179856" class="mw-history-histlinks-previous" title="Difference with preceding revision">prev</a></span></span><input type="radio" value="786179856" name="oldid" id="mw-oldid-786179856"><input type="radio" value="786179856" name="diff" id="mw-diff-786179856"> <bdi dir="ltr"><span class="mw-changeslist-time">20:04</span><bdi dir="ltr"><a href="/w/index.php?title=Line_search&amp;oldid=786179856" class="mw-changeslist-date" title="Line search">20:04, 17 June 2017</a></bdi></bdi> <span class='history-user'><a href="/wiki/Special:Contributions/2601:644:8002:FC00:79B5:DC39:A4B3:522A" class="mw-userlink mw-anonuserlink" title="Special:Contributions/2601:644:8002:FC00:79B5:DC39:A4B3:522A" data-mw-revid="786179856"><bdi>2601:644:8002:fc00:79b5:dc39:a4b3:522a</bdi></a> <span class="mw-usertoollinks mw-changeslist-links"><span><a href="/w/index.php?title=User_talk:2601:644:8002:FC00:79B5:DC39:A4B3:522A&amp;action=edit&amp;redlink=1" class="mw-usertoollinks-talk new" title="User talk:2601:644:8002:FC00:79B5:DC39:A4B3:522A (page does not exist)">talk</a></span></span></span> <span class="mw-changeslist-separator"></span> <span class="history-size mw-diff-bytes" data-mw-bytes="3505">3,505 bytes</span> <span dir="ltr" class="mw-plusminus-neg mw-diff-bytes" title="3,505 bytes after change of this size">−1</span> <span class="mw-changeslist-separator"></span>  <span class="comment comment--without-parentheses"><span class="autocomment"><a href="/wiki/Line_search#Example_use" title="Line search">→<bdi dir="ltr">Example use</bdi></a></span></span> <span class="mw-changeslist-links mw-pager-tools"><span><span class="mw-history-undo"><a href="/w/index.php?title=Line_search&amp;action=edit&amp;undoafter=697249148&amp;undo=786179856" title="Line search">undo</a></span></span></span></li>
</ul><h4 class="mw-index-pager-list-header">29 December 2015</h4><ul class="mw-contributions-list">
<li data-mw-revid="697249148"><span class="mw-history-histlinks mw-changeslist-links"><span><a href="/w/index.php?title=Line_search&amp;diff=1239715615&amp;oldid=697249148" class="mw-history-histlinks-current" title="Difference with latest revision">cur</a></span><span><a href="/w/index.php?title=Line_search&amp;diff=prev&amp;oldid=697249148" class="mw-history-histlinks-previous" title="Difference with preceding revision">prev</a></span></span><input type="radio" value="697249148" name="oldid" id="mw-oldid-697249148"><input type="radio" value="697249148" name="diff" id="mw-diff-697249148"> <bdi dir="ltr"><span class="mw-changeslist-time">06:45</span><bdi dir="ltr"><a href="/w/index.php?title=Line_search&amp;oldid=697249148" class="mw-changeslist-date" title="Line search">06:45, 29 December 2015</a></bdi></bdi> <span class='history-user'><a href="/w/index.php?title=User:Bgwhite&amp;action=edit&amp;redlink=1" class="mw-userlink new" title="User:Bgwhite (page does not exist)" data-mw-revid="697249148"><bdi>Bgwhite</bdi></a> <span class="mw-usertoollinks mw-changeslist-links"><span><a href="/wiki/User_talk:Bgwhite" class="mw-usertoollinks-talk" title="User talk:Bgwhite">talk</a></span> <span><a href="/wiki/Special:Contributions/Bgwhite" class="mw-usertoollinks-contribs" title="Special:Contributions/Bgwhite">contribs</a></span></span></span> <span class="mw-changeslist-separator"></span> <span class="history-size mw-diff-bytes" data-mw-bytes="3506">3,506 bytes</span> <span dir="ltr" class="mw-plusminus-neg mw-diff-bytes" title="3,506 bytes after change of this size">−53</span> <span class="mw-changeslist-separator"></span>  <span class="comment comment--without-parentheses">Do <a href="/wiki/Wikipedia:GENFIXES" class="mw-redirect" title="Wikipedia:GENFIXES">general fixes</a> and cleanup. - using <a href="/wiki/Wikipedia:AWB" class="mw-redirect" title="Wikipedia:AWB">AWB</a> (11756)</span> <span class="mw-changeslist-links mw-pager-tools"><span><span class="mw-history-undo"><a href="/w/index.php?title=Line_search&amp;action=edit&amp;undoafter=697104340&amp;undo=697249148" title="Line search">undo</a></span></span></span></li>
</ul><h4 class="mw-index-pager-list-header">28 December 2015</h4><ul class="mw-contributions-list">
<li data-mw-revid="697104340"><span class="mw-history-histlinks mw-changeslist-links"><span><a href="/w/index.php?title=Line_search&amp;diff=1239715615&amp;oldid=697104340" class="mw-history-histlinks-current" title="Difference with latest revision">cur</a></span><span><a href="/w/index.php?title=Line_search&amp;diff=prev&amp;oldid=697104340" class="mw-history-histlinks-previous" title="Difference with preceding revision">prev</a></span></span><input type="radio" value="697104340" name="oldid" id="mw-oldid-697104340"><input type="radio" value="697104340" name="diff" id="mw-diff-697104340"> <bdi dir="ltr"><span class="mw-changeslist-time">07:49</span><bdi dir="ltr"><a href="/w/index.php?title=Line_search&amp;oldid=697104340" class="mw-changeslist-date" title="Line search">07:49, 28 December 2015</a></bdi></bdi> <span class='history-user'><a href="/wiki/Special:Contributions/134.191.232.72" class="mw-userlink mw-anonuserlink" title="Special:Contributions/134.191.232.72" data-mw-revid="697104340"><bdi>134.191.232.72</bdi></a> <span class="mw-usertoollinks mw-changeslist-links"><span><a href="/wiki/User_talk:134.191.232.72" class="mw-usertoollinks-talk" title="User talk:134.191.232.72">talk</a></span></span></span> <span class="mw-changeslist-separator"></span> <span class="history-size mw-diff-bytes" data-mw-bytes="3559">3,559 bytes</span> <span dir="ltr" class="mw-plusminus-neg mw-diff-bytes" title="3,559 bytes after change of this size">−2</span> <span class="mw-changeslist-separator"></span> <span class="comment mw-comment-none">No edit summary</span> <span class="mw-changeslist-links mw-pager-tools"><span><span class="mw-history-undo"><a href="/w/index.php?title=Line_search&amp;action=edit&amp;undoafter=697104319&amp;undo=697104340" title="Line search">undo</a></span></span></span></li>
<li data-mw-revid="697104319"><span class="mw-history-histlinks mw-changeslist-links"><span><a href="/w/index.php?title=Line_search&amp;diff=1239715615&amp;oldid=697104319" class="mw-history-histlinks-current" title="Difference with latest revision">cur</a></span><span><a href="/w/index.php?title=Line_search&amp;diff=prev&amp;oldid=697104319" class="mw-history-histlinks-previous" title="Difference with preceding revision">prev</a></span></span><input type="radio" value="697104319" name="oldid" id="mw-oldid-697104319"><input type="radio" value="697104319" name="diff" id="mw-diff-697104319"> <bdi dir="ltr"><span class="mw-changeslist-time">07:49</span><bdi dir="ltr"><a href="/w/index.php?title=Line_search&amp;oldid=697104319" class="mw-changeslist-date" title="Line search">07:49, 28 December 2015</a></bdi></bdi> <span class='history-user'><a href="/wiki/Special:Contributions/134.191.232.72" class="mw-userlink mw-anonuserlink" title="Special:Contributions/134.191.232.72" data-mw-revid="697104319"><bdi>134.191.232.72</bdi></a> <span class="mw-usertoollinks mw-changeslist-links"><span><a href="/wiki/User_talk:134.191.232.72" class="mw-usertoollinks-talk" title="User talk:134.191.232.72">talk</a></span></span></span> <span class="mw-changeslist-separator"></span> <span class="history-size mw-diff-bytes" data-mw-bytes="3561">3,561 bytes</span> <span dir="ltr" class="mw-plusminus-neg mw-diff-bytes" title="3,561 bytes after change of this size">−2</span> <span class="mw-changeslist-separator"></span> <span class="comment mw-comment-none">No edit summary</span> <span class="mw-changeslist-links mw-pager-tools"><span><span class="mw-history-undo"><a href="/w/index.php?title=Line_search&amp;action=edit&amp;undoafter=697104263&amp;undo=697104319" title="Line search">undo</a></span></span></span></li>
<li data-mw-revid="697104263"><span class="mw-history-histlinks mw-changeslist-links"><span><a href="/w/index.php?title=Line_search&amp;diff=1239715615&amp;oldid=697104263" class="mw-history-histlinks-current" title="Difference with latest revision">cur</a></span><span><a href="/w/index.php?title=Line_search&amp;diff=prev&amp;oldid=697104263" class="mw-history-histlinks-previous" title="Difference with preceding revision">prev</a></span></span><input type="radio" value="697104263" name="oldid" id="mw-oldid-697104263"><input type="radio" value="697104263" name="diff" id="mw-diff-697104263"> <bdi dir="ltr"><span class="mw-changeslist-time">07:48</span><bdi dir="ltr"><a href="/w/index.php?title=Line_search&amp;oldid=697104263" class="mw-changeslist-date" title="Line search">07:48, 28 December 2015</a></bdi></bdi> <span class='history-user'><a href="/wiki/Special:Contributions/134.191.232.72" class="mw-userlink mw-anonuserlink" title="Special:Contributions/134.191.232.72" data-mw-revid="697104263"><bdi>134.191.232.72</bdi></a> <span class="mw-usertoollinks mw-changeslist-links"><span><a href="/wiki/User_talk:134.191.232.72" class="mw-usertoollinks-talk" title="User talk:134.191.232.72">talk</a></span></span></span> <span class="mw-changeslist-separator"></span> <span class="history-size mw-diff-bytes" data-mw-bytes="3563">3,563 bytes</span> <span dir="ltr" class="mw-plusminus-pos mw-diff-bytes" title="3,563 bytes after change of this size">+66</span> <span class="mw-changeslist-separator"></span> <span class="comment mw-comment-none">No edit summary</span> <span class="mw-changeslist-links mw-pager-tools"><span><span class="mw-history-undo"><a href="/w/index.php?title=Line_search&amp;action=edit&amp;undoafter=616422203&amp;undo=697104263" title="Line search">undo</a></span></span></span></li>
</ul><h4 class="mw-index-pager-list-header">10 July 2014</h4><ul class="mw-contributions-list">
<li data-mw-revid="616422203"><span class="mw-history-histlinks mw-changeslist-links"><span><a href="/w/index.php?title=Line_search&amp;diff=1239715615&amp;oldid=616422203" class="mw-history-histlinks-current" title="Difference with latest revision">cur</a></span><span><a href="/w/index.php?title=Line_search&amp;diff=prev&amp;oldid=616422203" class="mw-history-histlinks-previous" title="Difference with preceding revision">prev</a></span></span><input type="radio" value="616422203" name="oldid" id="mw-oldid-616422203"><input type="radio" value="616422203" name="diff" id="mw-diff-616422203"> <bdi dir="ltr"><span class="mw-changeslist-time">19:30</span><bdi dir="ltr"><a href="/w/index.php?title=Line_search&amp;oldid=616422203" class="mw-changeslist-date" title="Line search">19:30, 10 July 2014</a></bdi></bdi> <span class='history-user'><a href="/wiki/User:Gameboy97q" class="mw-userlink" title="User:Gameboy97q" data-mw-revid="616422203"><bdi>Gameboy97q</bdi></a> <span class="mw-usertoollinks mw-changeslist-links"><span><a href="/wiki/User_talk:Gameboy97q" class="mw-usertoollinks-talk" title="User talk:Gameboy97q">talk</a></span> <span><a href="/wiki/Special:Contributions/Gameboy97q" class="mw-usertoollinks-contribs" title="Special:Contributions/Gameboy97q">contribs</a></span></span></span> <abbr class="minoredit" title="This is a minor edit">m</abbr> <span class="mw-changeslist-separator"></span> <span class="history-size mw-diff-bytes" data-mw-bytes="3497">3,497 bytes</span> <span dir="ltr" class="mw-plusminus-neg mw-diff-bytes" title="3,497 bytes after change of this size">−1</span> <span class="mw-changeslist-separator"></span>  <span class="comment comment--without-parentheses">Typo fix</span> <span class="mw-changeslist-links mw-pager-tools"><span><span class="mw-history-undo"><a href="/w/index.php?title=Line_search&amp;action=edit&amp;undoafter=616422125&amp;undo=616422203" title="Line search">undo</a></span></span></span></li>
<li data-mw-revid="616422125"><span class="mw-history-histlinks mw-changeslist-links"><span><a href="/w/index.php?title=Line_search&amp;diff=1239715615&amp;oldid=616422125" class="mw-history-histlinks-current" title="Difference with latest revision">cur</a></span><span><a href="/w/index.php?title=Line_search&amp;diff=prev&amp;oldid=616422125" class="mw-history-histlinks-previous" title="Difference with preceding revision">prev</a></span></span><input type="radio" value="616422125" name="oldid" id="mw-oldid-616422125"><input type="radio" value="616422125" name="diff" id="mw-diff-616422125"> <bdi dir="ltr"><span class="mw-changeslist-time">19:30</span><bdi dir="ltr"><a href="/w/index.php?title=Line_search&amp;oldid=616422125" class="mw-changeslist-date" title="Line search">19:30, 10 July 2014</a></bdi></bdi> <span class='history-user'><a href="/wiki/User:Gameboy97q" class="mw-userlink" title="User:Gameboy97q" data-mw-revid="616422125"><bdi>Gameboy97q</bdi></a> <span class="mw-usertoollinks mw-changeslist-links"><span><a href="/wiki/User_talk:Gameboy97q" class="mw-usertoollinks-talk" title="User talk:Gameboy97q">talk</a></span> <span><a href="/wiki/Special:Contributions/Gameboy97q" class="mw-usertoollinks-contribs" title="Special:Contributions/Gameboy97q">contribs</a></span></span></span> <span class="mw-changeslist-separator"></span> <span class="history-size mw-diff-bytes" data-mw-bytes="3498">3,498 bytes</span> <span dir="ltr" class="mw-plusminus-pos mw-diff-bytes" title="3,498 bytes after change of this size">+33</span> <span class="mw-changeslist-separator"></span>  <span class="comment comment--without-parentheses">Changed &quot;Newton&#039;s method&quot; link, which in this context should refer to &quot;Newton&#039;s method in optimization&quot;, since it is concerned with finding local minima.</span> <span class="mw-changeslist-links mw-pager-tools"><span><span class="mw-history-undo"><a href="/w/index.php?title=Line_search&amp;action=edit&amp;undoafter=608599697&amp;undo=616422125" title="Line search">undo</a></span></span></span></li>
</ul><h4 class="mw-index-pager-list-header">14 May 2014</h4><ul class="mw-contributions-list">
<li data-mw-revid="608599697"><span class="mw-history-histlinks mw-changeslist-links"><span><a href="/w/index.php?title=Line_search&amp;diff=1239715615&amp;oldid=608599697" class="mw-history-histlinks-current" title="Difference with latest revision">cur</a></span><span><a href="/w/index.php?title=Line_search&amp;diff=prev&amp;oldid=608599697" class="mw-history-histlinks-previous" title="Difference with preceding revision">prev</a></span></span><input type="radio" value="608599697" name="oldid" id="mw-oldid-608599697"><input type="radio" value="608599697" name="diff" id="mw-diff-608599697"> <bdi dir="ltr"><span class="mw-changeslist-time">21:06</span><bdi dir="ltr"><a href="/w/index.php?title=Line_search&amp;oldid=608599697" class="mw-changeslist-date" title="Line search">21:06, 14 May 2014</a></bdi></bdi> <span class='history-user'><a href="/wiki/User:BarrelProof" class="mw-userlink" title="User:BarrelProof" data-mw-revid="608599697"><bdi>BarrelProof</bdi></a> <span class="mw-usertoollinks mw-changeslist-links"><span><a href="/wiki/User_talk:BarrelProof" class="mw-usertoollinks-talk" title="User talk:BarrelProof">talk</a></span> <span><a href="/wiki/Special:Contributions/BarrelProof" class="mw-usertoollinks-contribs" title="Special:Contributions/BarrelProof">contribs</a></span></span></span> <abbr class="minoredit" title="This is a minor edit">m</abbr> <span class="mw-changeslist-separator"></span> <span class="history-size mw-diff-bytes" data-mw-bytes="3465">3,465 bytes</span> <span dir="ltr" class="mw-plusminus-null mw-diff-bytes" title="3,465 bytes after change of this size">0</span> <span class="mw-changeslist-separator"></span>  <span class="comment comment--without-parentheses"><span class="autocomment"><a href="/wiki/Line_search#See_also" title="Line search">→<bdi dir="ltr">See also</bdi></a>: </span> Capitalization consistency</span> <span class="mw-changeslist-links mw-pager-tools"><span><span class="mw-history-undo"><a href="/w/index.php?title=Line_search&amp;action=edit&amp;undoafter=576584545&amp;undo=608599697" title="Line search">undo</a></span></span></span></li>
</ul><h4 class="mw-index-pager-list-header">10 October 2013</h4><ul class="mw-contributions-list">
<li data-mw-revid="576584545"><span class="mw-history-histlinks mw-changeslist-links"><span><a href="/w/index.php?title=Line_search&amp;diff=1239715615&amp;oldid=576584545" class="mw-history-histlinks-current" title="Difference with latest revision">cur</a></span><span><a href="/w/index.php?title=Line_search&amp;diff=prev&amp;oldid=576584545" class="mw-history-histlinks-previous" title="Difference with preceding revision">prev</a></span></span><input type="radio" value="576584545" name="oldid" id="mw-oldid-576584545"><input type="radio" value="576584545" name="diff" id="mw-diff-576584545"> <bdi dir="ltr"><span class="mw-changeslist-time">13:33</span><bdi dir="ltr"><a href="/w/index.php?title=Line_search&amp;oldid=576584545" class="mw-changeslist-date" title="Line search">13:33, 10 October 2013</a></bdi></bdi> <span class='history-user'><a href="/wiki/User:AndrewKay" class="mw-userlink" title="User:AndrewKay" data-mw-revid="576584545"><bdi>AndrewKay</bdi></a> <span class="mw-usertoollinks mw-changeslist-links"><span><a href="/wiki/User_talk:AndrewKay" class="mw-usertoollinks-talk" title="User talk:AndrewKay">talk</a></span> <span><a href="/wiki/Special:Contributions/AndrewKay" class="mw-usertoollinks-contribs" title="Special:Contributions/AndrewKay">contribs</a></span></span></span> <span class="mw-changeslist-separator"></span> <span class="history-size mw-diff-bytes" data-mw-bytes="3465">3,465 bytes</span> <span dir="ltr" class="mw-plusminus-pos mw-diff-bytes" title="3,465 bytes after change of this size">+20</span> <span class="mw-changeslist-separator"></span>  <span class="comment comment--without-parentheses"><span class="autocomment"><a href="/wiki/Line_search#Direct_search_methods" title="Line search">→<bdi dir="ltr">Direct search methods</bdi></a>: </span> fixed error in description of bracketing</span> <span class="mw-changeslist-links mw-pager-tools"><span><span class="mw-history-undo"><a href="/w/index.php?title=Line_search&amp;action=edit&amp;undoafter=560403622&amp;undo=576584545" title="Line search">undo</a></span></span></span></li>
</ul><h4 class="mw-index-pager-list-header">18 June 2013</h4><ul class="mw-contributions-list">
<li data-mw-revid="560403622"><span class="mw-history-histlinks mw-changeslist-links"><span><a href="/w/index.php?title=Line_search&amp;diff=1239715615&amp;oldid=560403622" class="mw-history-histlinks-current" title="Difference with latest revision">cur</a></span><span><a href="/w/index.php?title=Line_search&amp;diff=prev&amp;oldid=560403622" class="mw-history-histlinks-previous" title="Difference with preceding revision">prev</a></span></span><input type="radio" value="560403622" name="oldid" id="mw-oldid-560403622"><input type="radio" value="560403622" name="diff" id="mw-diff-560403622"> <bdi dir="ltr"><span class="mw-changeslist-time">05:48</span><bdi dir="ltr"><a href="/w/index.php?title=Line_search&amp;oldid=560403622" class="mw-changeslist-date" title="Line search">05:48, 18 June 2013</a></bdi></bdi> <span class='history-user'><a href="/wiki/Special:Contributions/129.60.194.204" class="mw-userlink mw-anonuserlink" title="Special:Contributions/129.60.194.204" data-mw-revid="560403622"><bdi>129.60.194.204</bdi></a> <span class="mw-usertoollinks mw-changeslist-links"><span><a href="/w/index.php?title=User_talk:129.60.194.204&amp;action=edit&amp;redlink=1" class="mw-usertoollinks-talk new" title="User talk:129.60.194.204 (page does not exist)">talk</a></span></span></span> <span class="mw-changeslist-separator"></span> <span class="history-size mw-diff-bytes" data-mw-bytes="3445">3,445 bytes</span> <span dir="ltr" class="mw-plusminus-pos mw-diff-bytes" title="3,445 bytes after change of this size">+31</span> <span class="mw-changeslist-separator"></span>  <span class="comment comment--without-parentheses"><span class="autocomment"><a href="/wiki/Line_search#See_also" title="Line search">→<bdi dir="ltr">See also</bdi></a></span></span> <span class="mw-changeslist-links mw-pager-tools"><span><span class="mw-history-undo"><a href="/w/index.php?title=Line_search&amp;action=edit&amp;undoafter=554205181&amp;undo=560403622" title="Line search">undo</a></span></span></span></li>
</ul><h4 class="mw-index-pager-list-header">8 May 2013</h4><ul class="mw-contributions-list">
<li data-mw-revid="554205181"><span class="mw-history-histlinks mw-changeslist-links"><span><a href="/w/index.php?title=Line_search&amp;diff=1239715615&amp;oldid=554205181" class="mw-history-histlinks-current" title="Difference with latest revision">cur</a></span><span><a href="/w/index.php?title=Line_search&amp;diff=prev&amp;oldid=554205181" class="mw-history-histlinks-previous" title="Difference with preceding revision">prev</a></span></span><input type="radio" value="554205181" name="oldid" id="mw-oldid-554205181"><input type="radio" value="554205181" name="diff" id="mw-diff-554205181"> <bdi dir="ltr"><span class="mw-changeslist-time">23:18</span><bdi dir="ltr"><a href="/w/index.php?title=Line_search&amp;oldid=554205181" class="mw-changeslist-date" title="Line search">23:18, 8 May 2013</a></bdi></bdi> <span class='history-user'><a href="/wiki/Special:Contributions/77.80.49.96" class="mw-userlink mw-anonuserlink" title="Special:Contributions/77.80.49.96" data-mw-revid="554205181"><bdi>77.80.49.96</bdi></a> <span class="mw-usertoollinks mw-changeslist-links"><span><a href="/w/index.php?title=User_talk:77.80.49.96&amp;action=edit&amp;redlink=1" class="mw-usertoollinks-talk new" title="User talk:77.80.49.96 (page does not exist)">talk</a></span></span></span> <span class="mw-changeslist-separator"></span> <span class="history-size mw-diff-bytes" data-mw-bytes="3414">3,414 bytes</span> <span dir="ltr" class="mw-plusminus-pos mw-diff-bytes" title="3,414 bytes after change of this size">+28</span> <span class="mw-changeslist-separator"></span>  <span class="comment comment--without-parentheses"><span class="autocomment"><a href="/wiki/Line_search#See_also" title="Line search">→<bdi dir="ltr">See also</bdi></a></span></span> <span class="mw-changeslist-links mw-pager-tools"><span><span class="mw-history-undo"><a href="/w/index.php?title=Line_search&amp;action=edit&amp;undoafter=548880967&amp;undo=554205181" title="Line search">undo</a></span></span></span></li>
</ul><h4 class="mw-index-pager-list-header">5 April 2013</h4><ul class="mw-contributions-list">
<li data-mw-revid="548880967"><span class="mw-history-histlinks mw-changeslist-links"><span><a href="/w/index.php?title=Line_search&amp;diff=1239715615&amp;oldid=548880967" class="mw-history-histlinks-current" title="Difference with latest revision">cur</a></span><span><a href="/w/index.php?title=Line_search&amp;diff=prev&amp;oldid=548880967" class="mw-history-histlinks-previous" title="Difference with preceding revision">prev</a></span></span><input type="radio" value="548880967" name="oldid" id="mw-oldid-548880967"><input type="radio" value="548880967" name="diff" id="mw-diff-548880967"> <bdi dir="ltr"><span class="mw-changeslist-time">19:16</span><bdi dir="ltr"><a href="/w/index.php?title=Line_search&amp;oldid=548880967" class="mw-changeslist-date" title="Line search">19:16, 5 April 2013</a></bdi></bdi> <span class='history-user'><a href="/w/index.php?title=User:AhmedHan&amp;action=edit&amp;redlink=1" class="mw-userlink new" title="User:AhmedHan (page does not exist)" data-mw-revid="548880967"><bdi>AhmedHan</bdi></a> <span class="mw-usertoollinks mw-changeslist-links"><span><a href="/wiki/User_talk:AhmedHan" class="mw-usertoollinks-talk" title="User talk:AhmedHan">talk</a></span> <span><a href="/wiki/Special:Contributions/AhmedHan" class="mw-usertoollinks-contribs" title="Special:Contributions/AhmedHan">contribs</a></span></span></span> <abbr class="minoredit" title="This is a minor edit">m</abbr> <span class="mw-changeslist-separator"></span> <span class="history-size mw-diff-bytes" data-mw-bytes="3386">3,386 bytes</span> <span dir="ltr" class="mw-plusminus-neg mw-diff-bytes" title="3,386 bytes after change of this size">−3</span> <span class="mw-changeslist-separator"></span> <span class="comment mw-comment-none">No edit summary</span> <span class="mw-changeslist-links mw-pager-tools"><span><span class="mw-history-undo"><a href="/w/index.php?title=Line_search&amp;action=edit&amp;undoafter=543475082&amp;undo=548880967" title="Line search">undo</a></span></span></span></li>
</ul><h4 class="mw-index-pager-list-header">11 March 2013</h4><ul class="mw-contributions-list">
<li data-mw-revid="543475082"><span class="mw-history-histlinks mw-changeslist-links"><span><a href="/w/index.php?title=Line_search&amp;diff=1239715615&amp;oldid=543475082" class="mw-history-histlinks-current" title="Difference with latest revision">cur</a></span><span><a href="/w/index.php?title=Line_search&amp;diff=prev&amp;oldid=543475082" class="mw-history-histlinks-previous" title="Difference with preceding revision">prev</a></span></span><input type="radio" value="543475082" name="oldid" id="mw-oldid-543475082"><input type="radio" value="543475082" name="diff" id="mw-diff-543475082"> <bdi dir="ltr"><span class="mw-changeslist-time">19:10</span><bdi dir="ltr"><a href="/w/index.php?title=Line_search&amp;oldid=543475082" class="mw-changeslist-date" title="Line search">19:10, 11 March 2013</a></bdi></bdi> <span class='history-user'><a href="/wiki/User:Michael9422" class="mw-userlink" title="User:Michael9422" data-mw-revid="543475082"><bdi>Michael9422</bdi></a> <span class="mw-usertoollinks mw-changeslist-links"><span><a href="/wiki/User_talk:Michael9422" class="mw-usertoollinks-talk" title="User talk:Michael9422">talk</a></span> <span><a href="/wiki/Special:Contributions/Michael9422" class="mw-usertoollinks-contribs" title="Special:Contributions/Michael9422">contribs</a></span></span></span> <abbr class="minoredit" title="This is a minor edit">m</abbr> <span class="mw-changeslist-separator"></span> <span class="history-size mw-diff-bytes" data-mw-bytes="3389">3,389 bytes</span> <span dir="ltr" class="mw-plusminus-pos mw-diff-bytes" title="3,389 bytes after change of this size">+3</span> <span class="mw-changeslist-separator"></span> <span class="comment mw-comment-none">No edit summary</span> <span class="mw-changeslist-links mw-pager-tools"><span><span class="mw-history-undo"><a href="/w/index.php?title=Line_search&amp;action=edit&amp;undoafter=542560361&amp;undo=543475082" title="Line search">undo</a></span></span></span></li>
</ul><h4 class="mw-index-pager-list-header">7 March 2013</h4><ul class="mw-contributions-list">
<li data-mw-revid="542560361"><span class="mw-history-histlinks mw-changeslist-links"><span><a href="/w/index.php?title=Line_search&amp;diff=1239715615&amp;oldid=542560361" class="mw-history-histlinks-current" title="Difference with latest revision">cur</a></span><span><a href="/w/index.php?title=Line_search&amp;diff=prev&amp;oldid=542560361" class="mw-history-histlinks-previous" title="Difference with preceding revision">prev</a></span></span><input type="radio" value="542560361" name="oldid" id="mw-oldid-542560361"><input type="radio" value="542560361" name="diff" id="mw-diff-542560361"> <bdi dir="ltr"><span class="mw-changeslist-time">10:37</span><bdi dir="ltr"><a href="/w/index.php?title=Line_search&amp;oldid=542560361" class="mw-changeslist-date" title="Line search">10:37, 7 March 2013</a></bdi></bdi> <span class='history-user'><a href="/wiki/User:Addbot" class="mw-userlink" title="User:Addbot" data-mw-revid="542560361"><bdi>Addbot</bdi></a> <span class="mw-usertoollinks mw-changeslist-links"><span><a href="/wiki/User_talk:Addbot" class="mw-redirect mw-usertoollinks-talk" title="User talk:Addbot">talk</a></span> <span><a href="/wiki/Special:Contributions/Addbot" class="mw-usertoollinks-contribs" title="Special:Contributions/Addbot">contribs</a></span></span></span> <abbr class="minoredit" title="This is a minor edit">m</abbr> <span class="mw-changeslist-separator"></span> <span class="history-size mw-diff-bytes" data-mw-bytes="3386">3,386 bytes</span> <span dir="ltr" class="mw-plusminus-neg mw-diff-bytes" title="3,386 bytes after change of this size">−81</span> <span class="mw-changeslist-separator"></span>  <span class="comment comment--without-parentheses"><a href="/wiki/User:Addbot" title="User:Addbot">Bot:</a> Migrating 3 interwiki links, now provided by <a href="/wiki/Wikipedia:Wikidata" title="Wikipedia:Wikidata">Wikidata</a> on <a href="https://www.wikidata.org/wiki/q3278015" class="extiw" title="d:q3278015">d:q3278015</a></span> <span class="mw-changeslist-links mw-pager-tools"><span><span class="mw-history-undo"><a href="/w/index.php?title=Line_search&amp;action=edit&amp;undoafter=528888601&amp;undo=542560361" title="Line search">undo</a></span></span></span></li>
</ul><h4 class="mw-index-pager-list-header">20 December 2012</h4><ul class="mw-contributions-list">
<li data-mw-revid="528888601"><span class="mw-history-histlinks mw-changeslist-links"><span><a href="/w/index.php?title=Line_search&amp;diff=1239715615&amp;oldid=528888601" class="mw-history-histlinks-current" title="Difference with latest revision">cur</a></span><span><a href="/w/index.php?title=Line_search&amp;diff=prev&amp;oldid=528888601" class="mw-history-histlinks-previous" title="Difference with preceding revision">prev</a></span></span><input type="radio" value="528888601" name="oldid" id="mw-oldid-528888601"><input type="radio" value="528888601" name="diff" id="mw-diff-528888601"> <bdi dir="ltr"><span class="mw-changeslist-time">01:21</span><bdi dir="ltr"><a href="/w/index.php?title=Line_search&amp;oldid=528888601" class="mw-changeslist-date" title="Line search">01:21, 20 December 2012</a></bdi></bdi> <span class='history-user'><a href="/wiki/User:Harshhpareek" class="mw-userlink" title="User:Harshhpareek" data-mw-revid="528888601"><bdi>Harshhpareek</bdi></a> <span class="mw-usertoollinks mw-changeslist-links"><span><a href="/w/index.php?title=User_talk:Harshhpareek&amp;action=edit&amp;redlink=1" class="mw-usertoollinks-talk new" title="User talk:Harshhpareek (page does not exist)">talk</a></span> <span><a href="/wiki/Special:Contributions/Harshhpareek" class="mw-usertoollinks-contribs" title="Special:Contributions/Harshhpareek">contribs</a></span></span></span> <abbr class="minoredit" title="This is a minor edit">m</abbr> <span class="mw-changeslist-separator"></span> <span class="history-size mw-diff-bytes" data-mw-bytes="3467">3,467 bytes</span> <span dir="ltr" class="mw-plusminus-pos mw-diff-bytes" title="3,467 bytes after change of this size">+25</span> <span class="mw-changeslist-separator"></span>  <span class="comment comment--without-parentheses">Added the words &quot;inexact line search&quot;</span> <span class="mw-changeslist-links mw-pager-tools"><span><span class="mw-history-undo"><a href="/w/index.php?title=Line_search&amp;action=edit&amp;undoafter=484155685&amp;undo=528888601" title="Line search">undo</a></span></span></span></li>
</ul><h4 class="mw-index-pager-list-header">27 March 2012</h4><ul class="mw-contributions-list">
<li data-mw-revid="484155685"><span class="mw-history-histlinks mw-changeslist-links"><span><a href="/w/index.php?title=Line_search&amp;diff=1239715615&amp;oldid=484155685" class="mw-history-histlinks-current" title="Difference with latest revision">cur</a></span><span><a href="/w/index.php?title=Line_search&amp;diff=prev&amp;oldid=484155685" class="mw-history-histlinks-previous" title="Difference with preceding revision">prev</a></span></span><input type="radio" value="484155685" name="oldid" id="mw-oldid-484155685"><input type="radio" value="484155685" name="diff" id="mw-diff-484155685"> <bdi dir="ltr"><span class="mw-changeslist-time">10:17</span><bdi dir="ltr"><a href="/w/index.php?title=Line_search&amp;oldid=484155685" class="mw-changeslist-date" title="Line search">10:17, 27 March 2012</a></bdi></bdi> <span class='history-user'><a href="/wiki/User:Z%C3%A9roBot" class="mw-userlink" title="User:ZéroBot" data-mw-revid="484155685"><bdi>ZéroBot</bdi></a> <span class="mw-usertoollinks mw-changeslist-links"><span><a href="/wiki/User_talk:Z%C3%A9roBot" class="mw-redirect mw-usertoollinks-talk" title="User talk:ZéroBot">talk</a></span> <span><a href="/wiki/Special:Contributions/Z%C3%A9roBot" class="mw-usertoollinks-contribs" title="Special:Contributions/ZéroBot">contribs</a></span></span></span> <abbr class="minoredit" title="This is a minor edit">m</abbr> <span class="mw-changeslist-separator"></span> <span class="history-size mw-diff-bytes" data-mw-bytes="3442">3,442 bytes</span> <span dir="ltr" class="mw-plusminus-pos mw-diff-bytes" title="3,442 bytes after change of this size">+20</span> <span class="mw-changeslist-separator"></span>  <span class="comment comment--without-parentheses">r2.7.1) (Robot: Adding <a href="https://ja.wikipedia.org/wiki/%E7%9B%B4%E7%B7%9A%E6%8E%A2%E7%B4%A2" class="extiw" title="ja:直線探索">ja:直線探索</a></span> <span class="mw-changeslist-links mw-pager-tools"><span><span class="mw-history-undo"><a href="/w/index.php?title=Line_search&amp;action=edit&amp;undoafter=474032463&amp;undo=484155685" title="Line search">undo</a></span></span></span></li>
</ul><h4 class="mw-index-pager-list-header">30 January 2012</h4><ul class="mw-contributions-list">
<li data-mw-revid="474032463"><span class="mw-history-histlinks mw-changeslist-links"><span><a href="/w/index.php?title=Line_search&amp;diff=1239715615&amp;oldid=474032463" class="mw-history-histlinks-current" title="Difference with latest revision">cur</a></span><span><a href="/w/index.php?title=Line_search&amp;diff=prev&amp;oldid=474032463" class="mw-history-histlinks-previous" title="Difference with preceding revision">prev</a></span></span><input type="radio" value="474032463" name="oldid" id="mw-oldid-474032463"><input type="radio" value="474032463" name="diff" id="mw-diff-474032463"> <bdi dir="ltr"><span class="mw-changeslist-time">13:47</span><bdi dir="ltr"><a href="/w/index.php?title=Line_search&amp;oldid=474032463" class="mw-changeslist-date" title="Line search">13:47, 30 January 2012</a></bdi></bdi> <span class='history-user'><a href="/wiki/User:A._Pichler" class="mw-userlink" title="User:A. Pichler" data-mw-revid="474032463"><bdi>A. Pichler</bdi></a> <span class="mw-usertoollinks mw-changeslist-links"><span><a href="/wiki/User_talk:A._Pichler" class="mw-usertoollinks-talk" title="User talk:A. Pichler">talk</a></span> <span><a href="/wiki/Special:Contributions/A._Pichler" class="mw-usertoollinks-contribs" title="Special:Contributions/A. Pichler">contribs</a></span></span></span> <abbr class="minoredit" title="This is a minor edit">m</abbr> <span class="mw-changeslist-separator"></span> <span class="history-size mw-diff-bytes" data-mw-bytes="3422">3,422 bytes</span> <span dir="ltr" class="mw-plusminus-pos mw-diff-bytes" title="3,422 bytes after change of this size">+27</span> <span class="mw-changeslist-separator"></span>  <span class="comment comment--without-parentheses"><span class="autocomment"><a href="/wiki/Line_search#See_also" title="Line search">→<bdi dir="ltr">See also</bdi></a></span></span> <span class="mw-changeslist-links mw-pager-tools"><span><span class="mw-history-undo"><a href="/w/index.php?title=Line_search&amp;action=edit&amp;undoafter=465609138&amp;undo=474032463" title="Line search">undo</a></span></span></span></li>
</ul><div class="mw-history-compareselectedversions"><input class="historysubmit mw-history-compareselectedversions-button cdx-button" title="See the differences between the two selected revisions of this page [v]" accesskey="v" type="submit" value="Compare selected revisions">
</div></section></form><div class="mw-pager-navigation-bar">(<span class="mw-firstlink">newest</span> | <a href="/w/index.php?title=Line_search&amp;action=history&amp;dir=prev" class="mw-lastlink">oldest</a>) View (<span class="mw-prevlink">newer 50</span> |  <a href="/w/index.php?title=Line_search&amp;action=history&amp;offset=20120130134713%7C474032463" rel="next" class="mw-nextlink">older 50</a>) (<a href="/w/index.php?title=Line_search&amp;action=history&amp;offset=&amp;limit=20" class="mw-numlink">20</a> | <span class="mw-numlink">50</span> | <a href="/w/index.php?title=Line_search&amp;action=history&amp;offset=&amp;limit=100" class="mw-numlink">100</a> | <a href="/w/index.php?title=Line_search&amp;action=history&amp;offset=&amp;limit=250" class="mw-numlink">250</a> | <a href="/w/index.php?title=Line_search&amp;action=history&amp;offset=&amp;limit=500" class="mw-numlink">500</a>)</div><noscript><img src="https://en.wikipedia.org/wiki/Special:CentralAutoLogin/start?type=1x1&amp;usesul3=1" alt="" width="1" height="1" style="border: none; position: absolute;"></noscript>
<div class="printfooter" data-nosnippet="">Retrieved from "<a dir="ltr" href="https://en.wikipedia.org/wiki/Line_search">https://en.wikipedia.org/wiki/Line_search</a>"</div></div>
					<div id="catlinks" class="catlinks catlinks-allhidden" data-mw="interface"></div>
				</div>
			</main>
			
		</div>
		<div class="mw-footer-container">
			
<footer id="footer" class="mw-footer" >
	<ul id="footer-info">
</ul>

	<ul id="footer-places">
	<li id="footer-places-privacy"><a href="https://foundation.wikimedia.org/wiki/Special:MyLanguage/Policy:Privacy_policy">Privacy policy</a></li>
	<li id="footer-places-about"><a href="/wiki/Wikipedia:About">About Wikipedia</a></li>
	<li id="footer-places-disclaimers"><a href="/wiki/Wikipedia:General_disclaimer">Disclaimers</a></li>
	<li id="footer-places-contact"><a href="//en.wikipedia.org/wiki/Wikipedia:Contact_us">Contact Wikipedia</a></li>
	<li id="footer-places-wm-codeofconduct"><a href="https://foundation.wikimedia.org/wiki/Special:MyLanguage/Policy:Universal_Code_of_Conduct">Code of Conduct</a></li>
	<li id="footer-places-developers"><a href="https://developer.wikimedia.org">Developers</a></li>
	<li id="footer-places-statslink"><a href="https://stats.wikimedia.org/#/en.wikipedia.org">Statistics</a></li>
	<li id="footer-places-cookiestatement"><a href="https://foundation.wikimedia.org/wiki/Special:MyLanguage/Policy:Cookie_statement">Cookie statement</a></li>
	<li id="footer-places-mobileview"><a href="//en.m.wikipedia.org/w/index.php?title=Line_search&amp;action=history&amp;mobileaction=toggle_view_mobile" class="noprint stopMobileRedirectToggle">Mobile view</a></li>
</ul>

	<ul id="footer-icons" class="noprint">
	<li id="footer-copyrightico"><a href="https://www.wikimedia.org/" class="cdx-button cdx-button--fake-button cdx-button--size-large cdx-button--fake-button--enabled"><picture><source media="(min-width: 500px)" srcset="/static/images/footer/wikimedia-button.svg" width="84" height="29"><img src="/static/images/footer/wikimedia.svg" width="25" height="25" alt="Wikimedia Foundation" lang="en" loading="lazy"></picture></a></li>
	<li id="footer-poweredbyico"><a href="https://www.mediawiki.org/" class="cdx-button cdx-button--fake-button cdx-button--size-large cdx-button--fake-button--enabled"><picture><source media="(min-width: 500px)" srcset="/w/resources/assets/poweredby_mediawiki.svg" width="88" height="31"><img src="/w/resources/assets/mediawiki_compact.svg" alt="Powered by MediaWiki" lang="en" width="25" height="25" loading="lazy"></picture></a></li>
</ul>

</footer>

		</div>
	</div> 
</div> 
<div class="vector-header-container vector-sticky-header-container no-font-mode-scale">
	<div id="vector-sticky-header" class="vector-sticky-header">
		<div class="vector-sticky-header-start">
			<div class="vector-sticky-header-icon-start vector-button-flush-left vector-button-flush-right" aria-hidden="true">
				<button class="cdx-button cdx-button--weight-quiet cdx-button--icon-only vector-sticky-header-search-toggle" tabindex="-1" data-event-name="ui.vector-sticky-search-form.icon"><span class="vector-icon mw-ui-icon-search mw-ui-icon-wikimedia-search"></span>

<span>Search</span>
			</button>
		</div>
			
		<div role="search" class="vector-search-box-vue  vector-search-box-show-thumbnail vector-search-box">
			<div class="vector-typeahead-search-container">
				<div class="cdx-typeahead-search cdx-typeahead-search--show-thumbnail">
					<form action="/w/index.php" id="vector-sticky-search-form" class="cdx-search-input cdx-search-input--has-end-button">
						<div  class="cdx-search-input__input-wrapper"  data-search-loc="header-moved">
							<div class="cdx-text-input cdx-text-input--has-start-icon">
								<input
									class="cdx-text-input__input mw-searchInput" autocomplete="off"
									
									type="search" name="search" placeholder="Search Wikipedia">
								<span class="cdx-text-input__icon cdx-text-input__start-icon"></span>
							</div>
							<input type="hidden" name="title" value="Special:Search">
						</div>
						<button class="cdx-button cdx-search-input__end-button">Search</button>
					</form>
				</div>
			</div>
		</div>
		<div class="vector-sticky-header-context-bar">
				<div class="vector-sticky-header-context-bar-primary" aria-hidden="true" >Line search: Revision history</div>
			</div>
		</div>
		<div class="vector-sticky-header-end" aria-hidden="true">
			<div class="vector-sticky-header-icons">
				<a href="#" class="cdx-button cdx-button--fake-button cdx-button--fake-button--enabled cdx-button--weight-quiet cdx-button--icon-only" id="ca-talk-sticky-header" tabindex="-1" data-event-name="talk-sticky-header"><span class="vector-icon mw-ui-icon-speechBubbles mw-ui-icon-wikimedia-speechBubbles"></span>

<span></span>
			</a>
			<a href="#" class="cdx-button cdx-button--fake-button cdx-button--fake-button--enabled cdx-button--weight-quiet cdx-button--icon-only" id="ca-subject-sticky-header" tabindex="-1" data-event-name="subject-sticky-header"><span class="vector-icon mw-ui-icon-article mw-ui-icon-wikimedia-article"></span>

<span></span>
			</a>
			<a href="#" class="cdx-button cdx-button--fake-button cdx-button--fake-button--enabled cdx-button--weight-quiet cdx-button--icon-only" id="ca-history-sticky-header" tabindex="-1" data-event-name="history-sticky-header"><span class="vector-icon mw-ui-icon-wikimedia-history mw-ui-icon-wikimedia-wikimedia-history"></span>

<span></span>
			</a>
			<a href="#" class="cdx-button cdx-button--fake-button cdx-button--fake-button--enabled cdx-button--weight-quiet cdx-button--icon-only mw-watchlink" id="ca-watchstar-sticky-header" tabindex="-1" data-event-name="watch-sticky-header"><span class="vector-icon mw-ui-icon-wikimedia-star mw-ui-icon-wikimedia-wikimedia-star"></span>

<span></span>
			</a>
			<a href="#" class="cdx-button cdx-button--fake-button cdx-button--fake-button--enabled cdx-button--weight-quiet cdx-button--icon-only" id="ca-edit-sticky-header" tabindex="-1" data-event-name="wikitext-edit-sticky-header"><span class="vector-icon mw-ui-icon-wikimedia-wikiText mw-ui-icon-wikimedia-wikimedia-wikiText"></span>

<span></span>
			</a>
			<a href="#" class="cdx-button cdx-button--fake-button cdx-button--fake-button--enabled cdx-button--weight-quiet cdx-button--icon-only" id="ca-ve-edit-sticky-header" tabindex="-1" data-event-name="ve-edit-sticky-header"><span class="vector-icon mw-ui-icon-wikimedia-edit mw-ui-icon-wikimedia-wikimedia-edit"></span>

<span></span>
			</a>
			<a href="#" class="cdx-button cdx-button--fake-button cdx-button--fake-button--enabled cdx-button--weight-quiet cdx-button--icon-only" id="ca-viewsource-sticky-header" tabindex="-1" data-event-name="ve-edit-protected-sticky-header"><span class="vector-icon mw-ui-icon-wikimedia-editLock mw-ui-icon-wikimedia-wikimedia-editLock"></span>

<span></span>
			</a>
		</div>
			<div class="vector-sticky-header-buttons">
				<a href="#" class="cdx-button cdx-button--fake-button cdx-button--fake-button--enabled cdx-button--weight-quiet cdx-button--action-progressive" id="ca-addsection-sticky-header" tabindex="-1" data-event-name="addsection-sticky-header"><span class="vector-icon mw-ui-icon-speechBubbleAdd-progressive mw-ui-icon-wikimedia-speechBubbleAdd-progressive"></span>

<span>Add topic</span>
			</a>
		</div>
			<div class="vector-sticky-header-icon-end">
				<div class="vector-user-links">
				</div>
			</div>
		</div>
	</div>
</div>
<div class="mw-portlet mw-portlet-dock-bottom emptyPortlet" id="p-dock-bottom">
	<ul>
		
	</ul>
</div>
<script>(RLQ=window.RLQ||[]).push(function(){mw.config.set({"wgHostname":"mw-web.eqiad.main-5f84f56cbb-9dcxb","wgBackendResponseTime":707});});</script>
</body>
</html>444">.mw-parser-output .ambox{border:1px solid #a2a9b1;border-left:10px solid #36c;background-color:#fbfbfb;box-sizing:border-box}.mw-parser-output .ambox+link+.ambox,.mw-parser-output .ambox+link+style+.ambox,.mw-parser-output .ambox+link+link+.ambox,.mw-parser-output .ambox+.mw-empty-elt+link+.ambox,.mw-parser-output .ambox+.mw-empty-elt+link+style+.ambox,.mw-parser-output .ambox+.mw-empty-elt+link+link+.ambox{margin-top:-1px}html body.mediawiki .mw-parser-output .ambox.mbox-small-left{margin:4px 1em 4px 0;overflow:hidden;width:238px;border-collapse:collapse;font-size:88%;line-height:1.25em}.mw-parser-output .ambox-speedy{border-left:10px solid #b32424;background-color:#fee7e6}.mw-parser-output .ambox-delete{border-left:10px solid #b32424}.mw-parser-output .ambox-content{border-left:10px solid #f28500}.mw-parser-output .ambox-style{border-left:10px solid #fc3}.mw-parser-output .ambox-move{border-left:10px solid #9932cc}.mw-parser-output .ambox-protection{border-left:10px solid #a2a9b1}.mw-parser-output .ambox .mbox-text{border:none;padding:0.25em 0.5em;width:100%}.mw-parser-output .ambox .mbox-image{border:none;padding:2px 0 2px 0.5em;text-align:center}.mw-parser-output .ambox .mbox-imageright{border:none;padding:2px 0.5em 2px 0;text-align:center}.mw-parser-output .ambox .mbox-empty-cell{border:none;padding:0;width:1px}.mw-parser-output .ambox .mbox-image-div{width:52px}@media(min-width:720px){.mw-parser-output .ambox{margin:0 10%}}@media print{body.ns-0 .mw-parser-output .ambox{display:none!important}}</style><table class="box-Unreferenced_section plainlinks metadata ambox ambox-content ambox-Unreferenced" role="presentation"><tbody><tr><td class="mbox-image"><div class="mbox-image-div"><span typeof="mw:File"><a href="/wiki/File:Question_book-new.svg" class="mw-file-description"><img alt="" src="//upload.wikimedia.org/wikipedia/en/thumb/9/99/Question_book-new.svg/60px-Question_book-new.svg.png" decoding="async" width="50" height="39" class="mw-file-element" srcset="//upload.wikimedia.org/wikipedia/en/thumb/9/99/Question_book-new.svg/120px-Question_book-new.svg.png 1.5x" data-file-width="512" data-file-height="399" /></a></span></div></td><td class="mbox-text"><div class="mbox-text-span">This section <b>does not <a href="/wiki/Wikipedia:Citing_sources" title="Wikipedia:Citing sources">cite</a> any <a href="/wiki/Wikipedia:Verifiability" title="Wikipedia:Verifiability">sources</a></b>.<span class="hide-when-compact"> Please help <a href="/wiki/Special:EditPage/Dynamic_programming" title="Special:EditPage/Dynamic programming">improve this section</a> by <a href="/wiki/Help:Referencing_for_beginners" title="Help:Referencing for beginners">adding citations to reliable sources</a>. Unsourced material may be challenged and <a href="/wiki/Wikipedia:Verifiability#Burden_of_evidence" title="Wikipedia:Verifiability">removed</a>.</span>  <span class="date-container"><i>(<span class="date">May 2013</span>)</i></span><span class="hide-when-compact"><i> (<small><a href="/wiki/Help:Maintenance_template_removal" title="Help:Maintenance template removal">Learn how and when to remove this message</a></small>)</i></span></div></td></tr></tbody></table>
<p>Consider the problem of assigning values, either zero or one, to the positions of an <span class="texhtml"><var>n</var> &#215; <var>n</var></span> matrix, with <span class="texhtml"><var>n</var></span> even, so that each row and each column contains exactly <span class="texhtml"><var>n</var> / 2</span> zeros and <span class="texhtml"><var>n</var> / 2</span> ones. We ask how many different assignments there are for a given <span class="texhtml mvar" style="font-style:italic;">n</span>. For example, when <span class="texhtml"><var>n</var> = 4</span>, five possible solutions are
</p>
<dl><dd><span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML"  alttext="{\displaystyle {\begin{bmatrix}0&amp;1&amp;0&amp;1\\1&amp;0&amp;1&amp;0\\0&amp;1&amp;0&amp;1\\1&amp;0&amp;1&amp;0\end{bmatrix}}{\text{ and }}{\begin{bmatrix}0&amp;0&amp;1&amp;1\\0&amp;0&amp;1&amp;1\\1&amp;1&amp;0&amp;0\\1&amp;1&amp;0&amp;0\end{bmatrix}}{\text{ and }}{\begin{bmatrix}1&amp;1&amp;0&amp;0\\0&amp;0&amp;1&amp;1\\1&amp;1&amp;0&amp;0\\0&amp;0&amp;1&amp;1\end{bmatrix}}{\text{ and }}{\begin{bmatrix}1&amp;0&amp;0&amp;1\\0&amp;1&amp;1&amp;0\\0&amp;1&amp;1&amp;0\\1&amp;0&amp;0&amp;1\end{bmatrix}}{\text{ and }}{\begin{bmatrix}1&amp;1&amp;0&amp;0\\1&amp;1&amp;0&amp;0\\0&amp;0&amp;1&amp;1\\0&amp;0&amp;1&amp;1\end{bmatrix}}.}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <mrow class="MJX-TeXAtom-ORD">
          <mrow>
            <mo>[</mo>
            <mtable rowspacing="4pt" columnspacing="1em">
              <mtr>
                <mtd>
                  <mn>0</mn>
                </mtd>
                <mtd>
                  <mn>1</mn>
                </mtd>
                <mtd>
                  <mn>0</mn>
                </mtd>
                <mtd>
                  <mn>1</mn>
                </mtd>
              </mtr>
              <mtr>
                <mtd>
                  <mn>1</mn>
                </mtd>
                <mtd>
                  <mn>0</mn>
                </mtd>
                <mtd>
                  <mn>1</mn>
                </mtd>
                <mtd>
                  <mn>0</mn>
                </mtd>
              </mtr>
              <mtr>
                <mtd>
                  <mn>0</mn>
                </mtd>
                <mtd>
                  <mn>1</mn>
                </mtd>
                <mtd>
                  <mn>0</mn>
                </mtd>
                <mtd>
                  <mn>1</mn>
                </mtd>
              </mtr>
              <mtr>
                <mtd>
                  <mn>1</mn>
                </mtd>
                <mtd>
                  <mn>0</mn>
                </mtd>
                <mtd>
                  <mn>1</mn>
                </mtd>
                <mtd>
                  <mn>0</mn>
                </mtd>
              </mtr>
            </mtable>
            <mo>]</mo>
          </mrow>
        </mrow>
        <mrow class="MJX-TeXAtom-ORD">
          <mtext>&#xA0;and&#xA0;</mtext>
        </mrow>
        <mrow class="MJX-TeXAtom-ORD">
          <mrow>
            <mo>[</mo>
            <mtable rowspacing="4pt" columnspacing="1em">
              <mtr>
                <mtd>
                  <mn>0</mn>
                </mtd>
                <mtd>
                  <mn>0</mn>
                </mtd>
                <mtd>
                  <mn>1</mn>
                </mtd>
                <mtd>
                  <mn>1</mn>
                </mtd>
              </mtr>
              <mtr>
                <mtd>
                  <mn>0</mn>
                </mtd>
                <mtd>
                  <mn>0</mn>
                </mtd>
                <mtd>
                  <mn>1</mn>
                </mtd>
                <mtd>
                  <mn>1</mn>
                </mtd>
              </mtr>
              <mtr>
                <mtd>
                  <mn>1</mn>
                </mtd>
                <mtd>
                  <mn>1</mn>
                </mtd>
                <mtd>
                  <mn>0</mn>
                </mtd>
                <mtd>
                  <mn>0</mn>
                </mtd>
              </mtr>
              <mtr>
                <mtd>
                  <mn>1</mn>
                </mtd>
                <mtd>
                  <mn>1</mn>
                </mtd>
                <mtd>
                  <mn>0</mn>
                </mtd>
                <mtd>
                  <mn>0</mn>
                </mtd>
              </mtr>
            </mtable>
            <mo>]</mo>
          </mrow>
        </mrow>
        <mrow class="MJX-TeXAtom-ORD">
          <mtext>&#xA0;and&#xA0;</mtext>
        </mrow>
        <mrow class="MJX-TeXAtom-ORD">
          <mrow>
            <mo>[</mo>
            <mtable rowspacing="4pt" columnspacing="1em">
              <mtr>
                <mtd>
                  <mn>1</mn>
                </mtd>
                <mtd>
                  <mn>1</mn>
                </mtd>
                <mtd>
                  <mn>0</mn>
                </mtd>
                <mtd>
                  <mn>0</mn>
                </mtd>
              </mtr>
              <mtr>
                <mtd>
                  <mn>0</mn>
                </mtd>
                <mtd>
                  <mn>0</mn>
                </mtd>
                <mtd>
                  <mn>1</mn>
                </mtd>
                <mtd>
                  <mn>1</mn>
                </mtd>
              </mtr>
              <mtr>
                <mtd>
                  <mn>1</mn>
                </mtd>
                <mtd>
                  <mn>1</mn>
                </mtd>
                <mtd>
                  <mn>0</mn>
                </mtd>
                <mtd>
                  <mn>0</mn>
                </mtd>
              </mtr>
              <mtr>
                <mtd>
                  <mn>0</mn>
                </mtd>
                <mtd>
                  <mn>0</mn>
                </mtd>
                <mtd>
                  <mn>1</mn>
                </mtd>
                <mtd>
                  <mn>1</mn>
                </mtd>
              </mtr>
            </mtable>
            <mo>]</mo>
          </mrow>
        </mrow>
        <mrow class="MJX-TeXAtom-ORD">
          <mtext>&#xA0;and&#xA0;</mtext>
        </mrow>
        <mrow class="MJX-TeXAtom-ORD">
          <mrow>
            <mo>[</mo>
            <mtable rowspacing="4pt" columnspacing="1em">
              <mtr>
                <mtd>
                  <mn>1</mn>
                </mtd>
                <mtd>
                  <mn>0</mn>
                </mtd>
                <mtd>
                  <mn>0</mn>
                </mtd>
                <mtd>
                  <mn>1</mn>
                </mtd>
              </mtr>
              <mtr>
                <mtd>
                  <mn>0</mn>
                </mtd>
                <mtd>
                  <mn>1</mn>
                </mtd>
                <mtd>
                  <mn>1</mn>
                </mtd>
                <mtd>
                  <mn>0</mn>
                </mtd>
              </mtr>
              <mtr>
                <mtd>
                  <mn>0</mn>
                </mtd>
                <mtd>
                  <mn>1</mn>
                </mtd>
                <mtd>
                  <mn>1</mn>
                </mtd>
                <mtd>
                  <mn>0</mn>
                </mtd>
              </mtr>
              <mtr>
                <mtd>
                  <mn>1</mn>
                </mtd>
                <mtd>
                  <mn>0</mn>
                </mtd>
                <mtd>
                  <mn>0</mn>
                </mtd>
                <mtd>
                  <mn>1</mn>
                </mtd>
              </mtr>
            </mtable>
            <mo>]</mo>
          </mrow>
        </mrow>
        <mrow class="MJX-TeXAtom-ORD">
          <mtext>&#xA0;and&#xA0;</mtext>
        </mrow>
        <mrow class="MJX-TeXAtom-ORD">
          <mrow>
            <mo>[</mo>
            <mtable rowspacing="4pt" columnspacing="1em">
              <mtr>
                <mtd>
                  <mn>1</mn>
                </mtd>
                <mtd>
                  <mn>1</mn>
                </mtd>
                <mtd>
                  <mn>0</mn>
                </mtd>
                <mtd>
                  <mn>0</mn>
                </mtd>
              </mtr>
              <mtr>
                <mtd>
                  <mn>1</mn>
                </mtd>
                <mtd>
                  <mn>1</mn>
                </mtd>
                <mtd>
                  <mn>0</mn>
                </mtd>
                <mtd>
                  <mn>0</mn>
                </mtd>
              </mtr>
              <mtr>
                <mtd>
                  <mn>0</mn>
                </mtd>
                <mtd>
                  <mn>0</mn>
                </mtd>
                <mtd>
                  <mn>1</mn>
                </mtd>
                <mtd>
                  <mn>1</mn>
                </mtd>
              </mtr>
              <mtr>
                <mtd>
                  <mn>0</mn>
                </mtd>
                <mtd>
                  <mn>0</mn>
                </mtd>
                <mtd>
                  <mn>1</mn>
                </mtd>
                <mtd>
                  <mn>1</mn>
                </mtd>
              </mtr>
            </mtable>
            <mo>]</mo>
          </mrow>
        </mrow>
        <mo>.</mo>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle {\begin{bmatrix}0&amp;1&amp;0&amp;1\\1&amp;0&amp;1&amp;0\\0&amp;1&amp;0&amp;1\\1&amp;0&amp;1&amp;0\end{bmatrix}}{\text{ and }}{\begin{bmatrix}0&amp;0&amp;1&amp;1\\0&amp;0&amp;1&amp;1\\1&amp;1&amp;0&amp;0\\1&amp;1&amp;0&amp;0\end{bmatrix}}{\text{ and }}{\begin{bmatrix}1&amp;1&amp;0&amp;0\\0&amp;0&amp;1&amp;1\\1&amp;1&amp;0&amp;0\\0&amp;0&amp;1&amp;1\end{bmatrix}}{\text{ and }}{\begin{bmatrix}1&amp;0&amp;0&amp;1\\0&amp;1&amp;1&amp;0\\0&amp;1&amp;1&amp;0\\1&amp;0&amp;0&amp;1\end{bmatrix}}{\text{ and }}{\begin{bmatrix}1&amp;1&amp;0&amp;0\\1&amp;1&amp;0&amp;0\\0&amp;0&amp;1&amp;1\\0&amp;0&amp;1&amp;1\end{bmatrix}}.}</annotation>
  </semantics>
</math></span><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/b94984f348b2c2fd826c47dd123ea607a7d8f13b" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -5.671ex; width:97.631ex; height:12.509ex;" alt="{\displaystyle {\begin{bmatrix}0&amp;1&amp;0&amp;1\\1&amp;0&amp;1&amp;0\\0&amp;1&amp;0&amp;1\\1&amp;0&amp;1&amp;0\end{bmatrix}}{\text{ and }}{\begin{bmatrix}0&amp;0&amp;1&amp;1\\0&amp;0&amp;1&amp;1\\1&amp;1&amp;0&amp;0\\1&amp;1&amp;0&amp;0\end{bmatrix}}{\text{ and }}{\begin{bmatrix}1&amp;1&amp;0&amp;0\\0&amp;0&amp;1&amp;1\\1&amp;1&amp;0&amp;0\\0&amp;0&amp;1&amp;1\end{bmatrix}}{\text{ and }}{\begin{bmatrix}1&amp;0&amp;0&amp;1\\0&amp;1&amp;1&amp;0\\0&amp;1&amp;1&amp;0\\1&amp;0&amp;0&amp;1\end{bmatrix}}{\text{ and }}{\begin{bmatrix}1&amp;1&amp;0&amp;0\\1&amp;1&amp;0&amp;0\\0&amp;0&amp;1&amp;1\\0&amp;0&amp;1&amp;1\end{bmatrix}}.}"></span></dd></dl>
<p>There are at least three possible approaches: <a href="/wiki/Brute-force_search" title="Brute-force search">brute force</a>, <a href="/wiki/Backtracking" title="Backtracking">backtracking</a>, and dynamic programming.
</p><p>Brute force consists of checking all assignments of zeros and ones and counting those that have balanced rows and columns (<span class="texhtml"><var>n</var> / 2</span> zeros and <span class="texhtml"><var>n</var> / 2</span> ones). As there are <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML"  alttext="{\displaystyle 2^{n^{2}}}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <msup>
          <mn>2</mn>
          <mrow class="MJX-TeXAtom-ORD">
            <msup>
              <mi>n</mi>
              <mrow class="MJX-TeXAtom-ORD">
                <mn>2</mn>
              </mrow>
            </msup>
          </mrow>
        </msup>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle 2^{n^{2}}}</annotation>
  </semantics>
</math></span><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/e736acf2e0b9a29d97b91a1413af326c7175f117" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.338ex; width:3.212ex; height:3.009ex;" alt="{\displaystyle 2^{n^{2}}}"></span> possible assignments and <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML"  alttext="{\displaystyle {\tbinom {n}{n/2}}^{n}}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <msup>
          <mrow class="MJX-TeXAtom-ORD">
            <mstyle displaystyle="false" scriptlevel="0">
              <mrow>
                <mrow class="MJX-TeXAtom-OPEN">
                  <mo maxsize="1.2em" minsize="1.2em">(</mo>
                </mrow>
                <mfrac linethickness="0">
                  <mi>n</mi>
                  <mrow>
                    <mi>n</mi>
                    <mrow class="MJX-TeXAtom-ORD">
                      <mo>/</mo>
                    </mrow>
                    <mn>2</mn>
                  </mrow>
                </mfrac>
                <mrow class="MJX-TeXAtom-CLOSE">
                  <mo maxsize="1.2em" minsize="1.2em">)</mo>
                </mrow>
              </mrow>
            </mstyle>
          </mrow>
          <mrow class="MJX-TeXAtom-ORD">
            <mi>n</mi>
          </mrow>
        </msup>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle {\tbinom {n}{n/2}}^{n}}</annotation>
  </semantics>
</math></span><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/f5f6229cccb7cb1ee2591bf551375fbc4d1b8eda" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -1.505ex; width:5.978ex; height:3.843ex;" alt="{\displaystyle {\tbinom {n}{n/2}}^{n}}"></span> sensible assignments, this strategy is not practical except maybe up to <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML"  alttext="{\displaystyle n=6}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <mi>n</mi>
        <mo>=</mo>
        <mn>6</mn>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle n=6}</annotation>
  </semantics>
</math></span><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/f0365f0b9f2721ed3ebb488a96d7348d978acf8f" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.338ex; width:5.656ex; height:2.176ex;" alt="{\displaystyle n=6}"></span>.
</p><p>Backtracking for this problem consists of choosing some order of the matrix elements and recursively placing ones or zeros, while checking that in every row and column the number of elements that have not been assigned plus the number of ones or zeros are both at least <span class="texhtml"><var>n</var> / 2</span>. While more sophisticated than brute force, this approach will visit every solution once, making it impractical for <span class="texhtml"><var>n</var></span> larger than six, since the number of solutions is already <span class="nowrap"><span data-sort-value="7011116963796250000♠"></span>116<span style="margin-left:.25em;">963</span><span style="margin-left:.25em;">796</span><span style="margin-left:.25em;">250</span></span> for <span class="texhtml"><var>n</var></span>&#160;=&#160;8, as we shall see.
</p><p>Dynamic programming makes it possible to count the number of solutions without visiting them all. Imagine backtracking values for the first row – what information would we require about the remaining rows, in order to be able to accurately count the solutions obtained for each first row value? We consider <span class="texhtml"><var>k</var> &#215; <var>n</var></span> boards, where <span class="texhtml">1 &#8804; <var>k</var> &#8804; <var>n</var></span>, whose <span class="texhtml mvar" style="font-style:italic;">k</span> rows contain <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML"  alttext="{\displaystyle n/2}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <mi>n</mi>
        <mrow class="MJX-TeXAtom-ORD">
          <mo>/</mo>
        </mrow>
        <mn>2</mn>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle n/2}</annotation>
  </semantics>
</math></span><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/95c3931a3fa03cc98cfacd2c49a7ca35b96eaa9b" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.838ex; width:3.72ex; height:2.843ex;" alt="{\displaystyle n/2}"></span> zeros and <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML"  alttext="{\displaystyle n/2}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <mi>n</mi>
        <mrow class="MJX-TeXAtom-ORD">
          <mo>/</mo>
        </mrow>
        <mn>2</mn>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle n/2}</annotation>
  </semantics>
</math></span><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/95c3931a3fa03cc98cfacd2c49a7ca35b96eaa9b" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.838ex; width:3.72ex; height:2.843ex;" alt="{\displaystyle n/2}"></span> ones. The function <i>f</i> to which <a href="/wiki/Memoization" title="Memoization">memoization</a> is applied maps vectors of <i>n</i> pairs of integers to the number of admissible boards (solutions). There is one pair for each column, and its two components indicate respectively the number of zeros and ones that have yet to be placed in that column. We seek the value of <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML"  alttext="{\displaystyle f((n/2,n/2),(n/2,n/2),\ldots (n/2,n/2))}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <mi>f</mi>
        <mo stretchy="false">(</mo>
        <mo stretchy="false">(</mo>
        <mi>n</mi>
        <mrow class="MJX-TeXAtom-ORD">
          <mo>/</mo>
        </mrow>
        <mn>2</mn>
        <mo>,</mo>
        <mi>n</mi>
        <mrow class="MJX-TeXAtom-ORD">
          <mo>/</mo>
        </mrow>
        <mn>2</mn>
        <mo stretchy="false">)</mo>
        <mo>,</mo>
        <mo stretchy="false">(</mo>
        <mi>n</mi>
        <mrow class="MJX-TeXAtom-ORD">
          <mo>/</mo>
        </mrow>
        <mn>2</mn>
        <mo>,</mo>
        <mi>n</mi>
        <mrow class="MJX-TeXAtom-ORD">
          <mo>/</mo>
        </mrow>
        <mn>2</mn>
        <mo stretchy="false">)</mo>
        <mo>,</mo>
        <mo>&#x2026;<!-- … --></mo>
        <mo stretchy="false">(</mo>
        <mi>n</mi>
        <mrow class="MJX-TeXAtom-ORD">
          <mo>/</mo>
        </mrow>
        <mn>2</mn>
        <mo>,</mo>
        <mi>n</mi>
        <mrow class="MJX-TeXAtom-ORD">
          <mo>/</mo>
        </mrow>
        <mn>2</mn>
        <mo stretchy="false">)</mo>
        <mo stretchy="false">)</mo>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle f((n/2,n/2),(n/2,n/2),\ldots (n/2,n/2))}</annotation>
  </semantics>
</math></span><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/472f2ef0a06a78167a040a874abfc17904f47aa0" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.838ex; width:39.114ex; height:2.843ex;" alt="{\displaystyle f((n/2,n/2),(n/2,n/2),\ldots (n/2,n/2))}"></span> (<span class="texhtml mvar" style="font-style:italic;">n</span> arguments or one vector of <span class="texhtml mvar" style="font-style:italic;">n</span> elements). The process of subproblem creation involves iterating over every one of  <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML"  alttext="{\displaystyle {\tbinom {n}{n/2}}}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <mrow class="MJX-TeXAtom-ORD">
          <mstyle displaystyle="false" scriptlevel="0">
            <mrow>
              <mrow class="MJX-TeXAtom-OPEN">
                <mo maxsize="1.2em" minsize="1.2em">(</mo>
              </mrow>
              <mfrac linethickness="0">
                <mi>n</mi>
                <mrow>
                  <mi>n</mi>
                  <mrow class="MJX-TeXAtom-ORD">
                    <mo>/</mo>
                  </mrow>
                  <mn>2</mn>
                </mrow>
              </mfrac>
              <mrow class="MJX-TeXAtom-CLOSE">
                <mo maxsize="1.2em" minsize="1.2em">)</mo>
              </mrow>
            </mrow>
          </mstyle>
        </mrow>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle {\tbinom {n}{n/2}}}</annotation>
  </semantics>
</math></span><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/a06cfa2b8e18128d5642221d7347ee97cb3ba0bd" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -1.505ex; width:4.76ex; height:3.676ex;" alt="{\displaystyle {\tbinom {n}{n/2}}}"></span> possible assignments for the top row of the board, and going through every column, subtracting one from the appropriate element of the pair for that column, depending on whether the assignment for the top row contained a zero or a one at that position. If any one of the results is negative, then the assignment is invalid and does not contribute to the set of solutions (recursion stops). Otherwise, we have an assignment for the top row of the <span class="texhtml"><var>k</var> &#215; <var>n</var></span> board and recursively compute the number of solutions to the remaining <span class="texhtml">(<var>k</var> &#8722; 1) &#215; <var>n</var></span> board, adding the numbers of solutions for every admissible assignment of the top row and returning the sum, which is being memoized. The base case is the trivial subproblem, which occurs for a <span class="texhtml">1 &#215; <var>n</var></span> board. The number of solutions for this board is either zero or one, depending on whether the vector is a permutation of <span class="texhtml"><var>n</var> / 2</span> <span class="texhtml">(0, 1)</span> and <span class="texhtml"><var>n</var> / 2</span> <span class="texhtml">(1, 0)</span> pairs or not.
</p><p>For example, in the first two boards shown above the sequences of vectors would be
</p>
<pre>((2, 2) (2, 2) (2, 2) (2, 2))       ((2, 2) (2, 2) (2, 2) (2, 2))     k = 4
  0      1      0      1              0      0      1      1

((1, 2) (2, 1) (1, 2) (2, 1))       ((1, 2) (1, 2) (2, 1) (2, 1))     k = 3
  1      0      1      0              0      0      1      1

((1, 1) (1, 1) (1, 1) (1, 1))       ((0, 2) (0, 2) (2, 0) (2, 0))     k = 2
  0      1      0      1              1      1      0      0

((0, 1) (1, 0) (0, 1) (1, 0))       ((0, 1) (0, 1) (1, 0) (1, 0))     k = 1
  1      0      1      0              1      1      0      0

((0, 0) (0, 0) (0, 0) (0, 0))       ((0, 0) (0, 0), (0, 0) (0, 0))
</pre>
<p>The number of solutions (sequence <span class="nowrap external"><a href="//oeis.org/A058527" class="extiw" title="oeis:A058527">A058527</a></span> in the <a href="/wiki/On-Line_Encyclopedia_of_Integer_Sequences" title="On-Line Encyclopedia of Integer Sequences">OEIS</a>) is
</p>
<dl><dd><span class="nowrap"> 1, 2, 90, <span class="nowrap"><span data-sort-value="7005297200000000000♠"></span>297<span style="margin-left:.25em;">200</span></span>, <span class="nowrap"><span data-sort-value="7011116963796250000♠"></span>116<span style="margin-left:.25em;">963</span><span style="margin-left:.25em;">796</span><span style="margin-left:.25em;">250</span></span>, <span class="nowrap"><span data-sort-value="7018673621828743046♠"></span>6<span style="margin-left:.25em;">736</span><span style="margin-left:.25em;">218</span><span style="margin-left:.25em;">287</span><span style="margin-left:.25em;">430</span><span style="margin-left:.25em;">460</span><span style="margin-left:.25em;">752</span></span>, ...</span></dd></dl>
<p>Links to the MAPLE implementation of the dynamic programming approach may be found among the <a href="#External_links">external links</a>.
</p>
<div class="mw-heading mw-heading3"><h3 id="Checkerboard">Checkerboard</h3></div>
<link rel="mw-deduplicated-inline-style" href="mw-data:TemplateStyles:r1251242444" /><table class="box-Unreferenced_section plainlinks metadata ambox ambox-content ambox-Unreferenced" role="presentation"><tbody><tr><td class="mbox-image"><div class="mbox-image-div"><span typeof="mw:File"><a href="/wiki/File:Question_book-new.svg" class="mw-file-description"><img alt="" src="//upload.wikimedia.org/wikipedia/en/thumb/9/99/Question_book-new.svg/60px-Question_book-new.svg.png" decoding="async" width="50" height="39" class="mw-file-element" srcset="//upload.wikimedia.org/wikipedia/en/thumb/9/99/Question_book-new.svg/120px-Question_book-new.svg.png 1.5x" data-file-width="512" data-file-height="399" /></a></span></div></td><td class="mbox-text"><div class="mbox-text-span">This section <b>does not <a href="/wiki/Wikipedia:Citing_sources" title="Wikipedia:Citing sources">cite</a> any <a href="/wiki/Wikipedia:Verifiability" title="Wikipedia:Verifiability">sources</a></b>.<span class="hide-when-compact"> Please help <a href="/wiki/Special:EditPage/Dynamic_programming" title="Special:EditPage/Dynamic programming">improve this section</a> by <a href="/wiki/Help:Referencing_for_beginners" title="Help:Referencing for beginners">adding citations to reliable sources</a>. Unsourced material may be challenged and <a href="/wiki/Wikipedia:Verifiability#Burden_of_evidence" title="Wikipedia:Verifiability">removed</a>.</span>  <span class="date-container"><i>(<span class="date">May 2013</span>)</i></span><span class="hide-when-compact"><i> (<small><a href="/wiki/Help:Maintenance_template_removal" title="Help:Maintenance template removal">Learn how and when to remove this message</a></small>)</i></span></div></td></tr></tbody></table>
<p>Consider a <a href="/wiki/Checkerboard" title="Checkerboard">checkerboard</a> with <i>n</i> × <i>n</i> squares and a cost function <code>c(i, j)</code> which returns a cost associated with square <code>(i,j)</code> (<code><i>i</i></code> being the row, <code><i>j</i></code> being the column). For instance (on a 5 × 5 checkerboard),
</p>
<table class="wikitable" style="text-align:center">

<tbody><tr>
<th>5
</th>
<td>6</td>
<td>7</td>
<td>4</td>
<td>7</td>
<td>8
</td></tr>
<tr>
<th>4
</th>
<td>7</td>
<td>6</td>
<td>1</td>
<td>1</td>
<td>4
</td></tr>
<tr>
<th>3
</th>
<td>3</td>
<td>5</td>
<td>7</td>
<td>8</td>
<td>2
</td></tr>
<tr>
<th>2
</th>
<td>–</td>
<td>6</td>
<td>7</td>
<td>0</td>
<td>–
</td></tr>
<tr>
<th>1
</th>
<td>–</td>
<td>–</td>
<td><b>5</b></td>
<td>–</td>
<td>–
</td></tr>
<tr>
<th width="15"></th>
<th style="width:15px;">1</th>
<th style="width:15px;">2</th>
<th style="width:15px;">3</th>
<th style="width:15px;">4</th>
<th style="width:15px;">5
</th></tr></tbody></table>
<p>Thus <code>c(1, 3) = 5</code>
</p><p>Let us say there was a checker that could start at any square on the first rank (i.e., row) and you wanted to know the shortest path (the sum of the minimum costs at each visited rank) to get to the last rank; assuming the checker could move only diagonally left forward, diagonally right forward, or straight forward. That is, a checker on <code>(1,3)</code> can move to <code>(2,2)</code>, <code>(2,3)</code> or <code>(2,4)</code>.
</p>
<table class="wikitable" style="text-align:center">

<tbody><tr>
<th>5
</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td>
</td></tr>
<tr>
<th>4
</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td>
</td></tr>
<tr>
<th>3
</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td>
</td></tr>
<tr>
<th>2
</th>
<td></td>
<td>x</td>
<td>x</td>
<td>x</td>
<td>
</td></tr>
<tr>
<th>1
</th>
<td></td>
<td></td>
<td>o</td>
<td></td>
<td>
</td></tr>
<tr>
<th width="15"></th>
<th style="width:15px;">1</th>
<th style="width:15px;">2</th>
<th style="width:15px;">3</th>
<th style="width:15px;">4</th>
<th style="width:15px;">5
</th></tr></tbody></table>
<p>This problem exhibits <b>optimal substructure</b>. That is, the solution to the entire problem relies on solutions to subproblems. Let us define a function <code>q(i, j)</code> as
</p>
<dl><dd><i>q</i>(<i>i</i>, <i>j</i>) = the minimum cost to reach square (<i>i</i>, <i>j</i>).</dd></dl>
<p>Starting at rank <code>n</code> and descending to rank <code>1</code>, we compute the value of this function for all the squares at each successive rank. Picking the square that holds the minimum value at each rank gives us the shortest path between rank <code>n</code> and rank <code>1</code>.
</p><p>The function <code>q(i, j)</code> is equal to the minimum cost to get to any of the three squares below it (since those are the only squares that can reach it) plus <code>c(i, j)</code>. For instance:
</p>
<table class="wikitable" style="text-align:center">

<tbody><tr>
<th>5
</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td>
</td></tr>
<tr>
<th>4
</th>
<td></td>
<td></td>
<td>A</td>
<td></td>
<td>
</td></tr>
<tr>
<th>3
</th>
<td></td>
<td>B</td>
<td>C</td>
<td>D</td>
<td>
</td></tr>
<tr>
<th>2
</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td>
</td></tr>
<tr>
<th>1
</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td>
</td></tr>
<tr>
<th width="15"></th>
<th style="width:15px;">1</th>
<th style="width:15px;">2</th>
<th style="width:15px;">3</th>
<th style="width:15px;">4</th>
<th style="width:15px;">5
</th></tr></tbody></table>
<dl><dd><span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML"  alttext="{\displaystyle q(A)=\min(q(B),q(C),q(D))+c(A)\,}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <mi>q</mi>
        <mo stretchy="false">(</mo>
        <mi>A</mi>
        <mo stretchy="false">)</mo>
        <mo>=</mo>
        <mo movablelimits="true" form="prefix">min</mo>
        <mo stretchy="false">(</mo>
        <mi>q</mi>
        <mo stretchy="false">(</mo>
        <mi>B</mi>
        <mo stretchy="false">)</mo>
        <mo>,</mo>
        <mi>q</mi>
        <mo stretchy="false">(</mo>
        <mi>C</mi>
        <mo stretchy="false">)</mo>
        <mo>,</mo>
        <mi>q</mi>
        <mo stretchy="false">(</mo>
        <mi>D</mi>
        <mo stretchy="false">)</mo>
        <mo stretchy="false">)</mo>
        <mo>+</mo>
        <mi>c</mi>
        <mo stretchy="false">(</mo>
        <mi>A</mi>
        <mo stretchy="false">)</mo>
        <mspace width="thinmathspace" />
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle q(A)=\min(q(B),q(C),q(D))+c(A)\,}</annotation>
  </semantics>
</math></span><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/1f87cb5d1cb0b215fc90cb7057249c12ead674d6" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.838ex; width:37.351ex; height:2.843ex;" alt="{\displaystyle q(A)=\min(q(B),q(C),q(D))+c(A)\,}"></span></dd></dl>
<p>Now, let us define <code>q(i, j)</code> in somewhat more general terms:
</p>
<dl><dd><span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML"  alttext="{\displaystyle q(i,j)={\begin{cases}\infty &amp;j&lt;1{\text{ or }}j&gt;n\\c(i,j)&amp;i=1\\\min(q(i-1,j-1),q(i-1,j),q(i-1,j+1))+c(i,j)&amp;{\text{otherwise.}}\end{cases}}}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <mi>q</mi>
        <mo stretchy="false">(</mo>
        <mi>i</mi>
        <mo>,</mo>
        <mi>j</mi>
        <mo stretchy="false">)</mo>
        <mo>=</mo>
        <mrow class="MJX-TeXAtom-ORD">
          <mrow>
            <mo>{</mo>
            <mtable columnalign="left left" rowspacing=".2em" columnspacing="1em" displaystyle="false">
              <mtr>
                <mtd>
                  <mi mathvariant="normal">&#x221E;<!-- ∞ --></mi>
                </mtd>
                <mtd>
                  <mi>j</mi>
                  <mo>&lt;</mo>
                  <mn>1</mn>
                  <mrow class="MJX-TeXAtom-ORD">
                    <mtext>&#xA0;or&#xA0;</mtext>
                  </mrow>
                  <mi>j</mi>
                  <mo>&gt;</mo>
                  <mi>n</mi>
                </mtd>
              </mtr>
              <mtr>
                <mtd>
                  <mi>c</mi>
                  <mo stretchy="false">(</mo>
                  <mi>i</mi>
                  <mo>,</mo>
                  <mi>j</mi>
                  <mo stretchy="false">)</mo>
                </mtd>
                <mtd>
                  <mi>i</mi>
                  <mo>=</mo>
                  <mn>1</mn>
                </mtd>
              </mtr>
              <mtr>
                <mtd>
                  <mo movablelimits="true" form="prefix">min</mo>
                  <mo stretchy="false">(</mo>
                  <mi>q</mi>
                  <mo stretchy="false">(</mo>
                  <mi>i</mi>
                  <mo>&#x2212;<!-- − --></mo>
                  <mn>1</mn>
                  <mo>,</mo>
                  <mi>j</mi>
                  <mo>&#x2212;<!-- − --></mo>
                  <mn>1</mn>
                  <mo stretchy="false">)</mo>
                  <mo>,</mo>
                  <mi>q</mi>
                  <mo stretchy="false">(</mo>
                  <mi>i</mi>
                  <mo>&#x2212;<!-- − --></mo>
                  <mn>1</mn>
                  <mo>,</mo>
                  <mi>j</mi>
                  <mo stretchy="false">)</mo>
                  <mo>,</mo>
                  <mi>q</mi>
                  <mo stretchy="false">(</mo>
                  <mi>i</mi>
                  <mo>&#x2212;<!-- − --></mo>
                  <mn>1</mn>
                  <mo>,</mo>
                  <mi>j</mi>
                  <mo>+</mo>
                  <mn>1</mn>
                  <mo stretchy="false">)</mo>
                  <mo stretchy="false">)</mo>
                  <mo>+</mo>
                  <mi>c</mi>
                  <mo stretchy="false">(</mo>
                  <mi>i</mi>
                  <mo>,</mo>
                  <mi>j</mi>
                  <mo stretchy="false">)</mo>
                </mtd>
                <mtd>
                  <mrow class="MJX-TeXAtom-ORD">
                    <mtext>otherwise.</mtext>
                  </mrow>
                </mtd>
              </mtr>
            </mtable>
            <mo fence="true" stretchy="true" symmetric="true"></mo>
          </mrow>
        </mrow>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle q(i,j)={\begin{cases}\infty &amp;j&lt;1{\text{ or }}j&gt;n\\c(i,j)&amp;i=1\\\min(q(i-1,j-1),q(i-1,j),q(i-1,j+1))+c(i,j)&amp;{\text{otherwise.}}\end{cases}}}</annotation>
  </semantics>
</math></span><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/3ce1c92a173a4aa6e57116cd8a77069c4e87cff0" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -3.671ex; width:81.055ex; height:8.509ex;" alt="{\displaystyle q(i,j)={\begin{cases}\infty &amp;j&lt;1{\text{ or }}j&gt;n\\c(i,j)&amp;i=1\\\min(q(i-1,j-1),q(i-1,j),q(i-1,j+1))+c(i,j)&amp;{\text{otherwise.}}\end{cases}}}"></span></dd></dl>
<p>The first line of this equation deals with a board modeled as squares indexed on <code>1</code> at the lowest bound and <code>n</code> at the highest bound. The second line specifies what happens at the first rank; providing a base case. The third line, the recursion, is the important part. It represents the <code>A,B,C,D</code> terms in the example. From this definition we can derive straightforward recursive code for <code>q(i,&#160;j)</code>. In the following pseudocode, <code>n</code> is the size of the board, <code>c(i, j)</code> is the cost function, and <code>min()</code> returns the minimum of a number of values:
</p>
<pre><b>function</b> minCost(i, j)
    <b>if</b> j &lt; 1 <b>or</b> j &gt; n
        <b>return</b> infinity
    <b>else if</b> i = 1
        <b>return</b> c(i, j)
    <b>else</b>
        <b>return</b> <b>min</b>( minCost(i-1, j-1), minCost(i-1, j), minCost(i-1, j+1) ) + c(i, j)
</pre>
<p>This function only computes the path cost, not the actual path. We discuss the actual path below. This, like the Fibonacci-numbers example, is horribly slow because it too exhibits the <b>overlapping sub-problems</b> attribute. That is, it recomputes the same path costs over and over. However, we can compute it much faster in a bottom-up fashion if we store path costs in a two-dimensional array <code>q[i, j]</code> rather than using a function. This avoids recomputation; all the values needed for array <code>q[i, j]</code> are computed ahead of time only once. Precomputed values for <code>(i,j)</code> are simply looked up whenever needed.
</p><p>We also need to know what the actual shortest path is. To do this, we use another array <code>p[i, j]</code>; a <i>predecessor array</i>. This array records the path to any square <code>s</code>. The predecessor of <code>s</code> is modeled as an offset relative to the index (in <code>q[i, j]</code>) of the precomputed path cost of <code>s</code>. To reconstruct the complete path, we lookup the predecessor of <code>s</code>, then the predecessor of that square, then the predecessor of that square, and so on recursively, until we reach the starting square. Consider the following pseudocode:
</p>
<pre><b>function</b> computeShortestPathArrays()
    <b>for</b> x <b>from</b> 1 <b>to</b> n
        q[1, x]&#160;:= c(1, x)
    <b>for</b> y <b>from</b> 1 <b>to</b> n
        q[y, 0]    &#160;:= infinity
        q[y, n + 1]&#160;:= infinity
    <b>for</b> y <b>from</b> 2 <b>to</b> n
        <b>for</b> x <b>from</b> 1 <b>to</b> n
            m&#160;:= min(q[y-1, x-1], q[y-1, x], q[y-1, x+1])
            q[y, x]&#160;:= m + c(y, x)
            <b>if</b> m = q[y-1, x-1]
                p[y, x]&#160;:= -1
            <b>else if</b> m = q[y-1, x]
                p[y, x]&#160;:=  0
            <b>else</b>
                p[y, x]&#160;:=  1
</pre>
<p>Now the rest is a simple matter of finding the minimum and printing it.
</p>
<pre><b>function</b> computeShortestPath()
    computeShortestPathArrays()
    minIndex&#160;:= 1
    min&#160;:= q[n, 1]
    <b>for</b> i <b>from</b> 2 <b>to</b> n
        <b>if</b> q[n, i] &lt; min
            minIndex&#160;:= i
            min&#160;:= q[n, i]
    printPath(n, minIndex)
</pre>
<pre><b>function</b> printPath(y, x)
    <b>print</b>(x)
    <b>print</b>("&lt;-")
    <b>if</b> y = 2
        <b>print</b>(x + p[y, x])
    <b>else</b>
        printPath(y-1, x + p[y, x])
</pre>
<div class="mw-heading mw-heading3"><h3 id="Sequence_alignment">Sequence alignment</h3></div>
<p>In <a href="/wiki/Genetics" title="Genetics">genetics</a>, <a href="/wiki/Sequence_alignment" title="Sequence alignment">sequence alignment</a> is an important application where dynamic programming is essential.<sup id="cite_ref-Eddy_12-0" class="reference"><a href="#cite_note-Eddy-12"><span class="cite-bracket">&#91;</span>12<span class="cite-bracket">&#93;</span></a></sup>  Typically, the problem consists of transforming one sequence into another using edit operations that replace, insert, or remove an element.  Each operation has an associated cost, and the goal is to find the <a href="/wiki/Edit_distance" title="Edit distance">sequence of edits with the lowest total cost</a>.
</p><p>The problem can be stated naturally as a recursion, a sequence A is optimally edited into a sequence B by either:
</p>
<ol><li>inserting the first character of B, and performing an optimal alignment of A and the tail of B</li>
<li>deleting the first character of A, and performing the optimal alignment of the tail of A and B</li>
<li>replacing the first character of A with the first character of B, and performing optimal alignments of the tails of A and B.</li></ol>
<p>The partial alignments can be tabulated in a matrix, where cell (i,j) contains the cost of the optimal alignment of A[1..i] to B[1..j].  The cost in cell (i,j) can be calculated by adding the cost of the relevant operations to the cost of its neighboring cells, and selecting the optimum.
</p><p>Different variants exist, see <a href="/wiki/Smith%E2%80%93Waterman_algorithm" title="Smith–Waterman algorithm">Smith–Waterman algorithm</a> and <a href="/wiki/Needleman%E2%80%93Wunsch_algorithm" title="Needleman–Wunsch algorithm">Needleman–Wunsch algorithm</a>.
</p>
<div class="mw-heading mw-heading3"><h3 id="Tower_of_Hanoi_puzzle">Tower of Hanoi puzzle</h3></div>
<figure class="mw-default-size" typeof="mw:File/Thumb"><a href="/wiki/File:Tower_of_Hanoi.jpeg" class="mw-file-description"><img src="//upload.wikimedia.org/wikipedia/commons/thumb/0/07/Tower_of_Hanoi.jpeg/330px-Tower_of_Hanoi.jpeg" decoding="async" width="300" height="132" class="mw-file-element" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/0/07/Tower_of_Hanoi.jpeg/500px-Tower_of_Hanoi.jpeg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/0/07/Tower_of_Hanoi.jpeg/600px-Tower_of_Hanoi.jpeg 2x" data-file-width="677" data-file-height="298" /></a><figcaption>A model set of the Towers of Hanoi (with 8 disks)</figcaption></figure>
<figure class="mw-default-size" typeof="mw:File/Thumb"><a href="/wiki/File:Tower_of_Hanoi_4.gif" class="mw-file-description"><img src="//upload.wikimedia.org/wikipedia/commons/thumb/6/60/Tower_of_Hanoi_4.gif/300px-Tower_of_Hanoi_4.gif" decoding="async" width="300" height="117" class="mw-file-element" srcset="//upload.wikimedia.org/wikipedia/commons/6/60/Tower_of_Hanoi_4.gif 1.5x" data-file-width="320" data-file-height="125" /></a><figcaption>An animated solution of the Tower of Hanoi puzzle for <i>T(4,3)</i></figcaption></figure>
<p>The <b><a href="/wiki/Tower_of_Hanoi" title="Tower of Hanoi">Tower of Hanoi</a></b> or <b>Towers of <a href="/wiki/Hanoi" title="Hanoi">Hanoi</a></b> is a <a href="/wiki/Mathematical_game" title="Mathematical game">mathematical game</a> or <a href="/wiki/Puzzle" title="Puzzle">puzzle</a>. It consists of three rods, and a number of disks of different sizes which can slide onto any rod. The puzzle starts with the disks in a neat stack in ascending order of size on one rod, the smallest at the top, thus making a conical shape.
</p><p>The objective of the puzzle is to move the entire stack to another rod, obeying the following rules:
</p>
<ul><li>Only one disk may be moved at a time.</li>
<li>Each move consists of taking the upper disk from one of the rods and sliding it onto another rod, on top of the other disks that may already be present on that rod.</li>
<li>No disk may be placed on top of a smaller disk.</li></ul>
<p>The dynamic programming solution consists of solving the <a href="/wiki/Bellman_equation" title="Bellman equation">functional equation</a>
</p>
<dl><dd>S(n,h,t) = S(n-1,h, not(h,t))&#160;; S(1,h,t)&#160;; S(n-1,not(h,t),t)</dd></dl>
<p>where n denotes the number of disks to be moved, h denotes the home rod, t denotes the target rod, not(h,t) denotes the third rod (neither h nor t), ";" denotes concatenation, and
</p>
<dl><dd>S(n, h, t)&#160;:= solution to a problem consisting of n disks that are to be moved from rod h to rod t.</dd></dl>
<p>For n=1 the problem is trivial, namely S(1,h,t) = "move a disk from rod h to rod t" (there is only one disk left).
</p><p>The  number of moves required by this solution is 2<sup><i>n</i></sup>&#160;&#8722;&#160;1. If the objective is to <b>maximize</b> the number of moves (without cycling) then the dynamic programming <a href="/wiki/Bellman_equation" title="Bellman equation">functional equation</a>  is slightly more complicated and  3<sup><i>n</i></sup>&#160;&#8722;&#160;1 moves are required.<sup id="cite_ref-13" class="reference"><a href="#cite_note-13"><span class="cite-bracket">&#91;</span>13<span class="cite-bracket">&#93;</span></a></sup>
</p>
<div class="mw-heading mw-heading3"><h3 id="Egg_dropping_puzzle">Egg dropping puzzle</h3></div>
<p>A famous <a href="/wiki/Puzzle" title="Puzzle">puzzle</a> relates to dropping eggs from a building to determine at which height they start to break. The following is a description involving N=2 eggs and a building with H=36 floors:<sup id="cite_ref-14" class="reference"><a href="#cite_note-14"><span class="cite-bracket">&#91;</span>14<span class="cite-bracket">&#93;</span></a></sup> 
</p>
<dl><dd>Suppose that we wish to know which stories in a 36-story building are safe to drop eggs from, and which will cause the eggs to break on landing (using <a href="/wiki/U.S._English" class="mw-redirect" title="U.S. English">U.S. English</a> terminology, in which the first floor is at ground level). We make a few assumptions:</dd></dl>
<dl><dd><ul><li>An egg that survives a fall can be used again.</li>
<li>A broken egg must be discarded.</li>
<li>The effect of a fall is the same for all eggs.</li>
<li>If an egg breaks when dropped, then it would break if dropped from a higher window.</li>
<li>If an egg survives a fall, then it would survive a shorter fall.</li>
<li>It is not ruled out that the first-floor windows break eggs, nor is it ruled out that eggs can survive the 36th-floor windows.</li></ul></dd></dl>
<dl><dd>If only one egg is available and we wish to be sure of obtaining the right result, the experiment can be carried out in only one way. Drop the egg from the first-floor window; if it survives, drop it from the second-floor window. Continue upward until it breaks. In the worst case, this method may require 36 droppings. Suppose 2 eggs are available. What is the lowest number of egg-droppings that is guaranteed to work in all cases?</dd></dl>
<p>To derive a dynamic programming <a href="/wiki/Bellman_equation" title="Bellman equation">functional equation</a> for this puzzle, let the <b>state</b> of the dynamic programming model be a pair s = (n,k), where
</p>
<dl><dd><i>n</i> = number of test eggs available, <i>n</i> = 0, 1, 2, 3, ..., <i>N</i>&#160;&#8722;&#160;1.</dd>
<dd><i>k</i> = number of (consecutive) floors yet to be tested, <i>k</i> = 0, 1, 2, ..., <i>H</i>&#160;&#8722;&#160;1.</dd></dl>
<p>For instance, <i>s</i> = (2,6) indicates that two test eggs are available and 6 (consecutive) floors are yet to be tested. The initial state of the process is <i>s</i> = (<i>N</i>,<i>H</i>) where <i>N</i> denotes the number of test eggs available at the commencement of the experiment. The process terminates either when there are no more test eggs (<i>n</i> = 0) or when <i>k</i> = 0, whichever occurs first. If termination occurs at state <i>s</i> = (0,<i>k</i>) and <i>k</i>&#160;&gt;&#160;0, then the test failed.
</p><p>Now, let
</p>
<dl><dd><i>W</i>(<i>n</i>,<i>k</i>) = minimum number of trials required to identify the value of the critical floor under the worst-case scenario given that the process is in state <i>s</i> = (<i>n</i>,<i>k</i>).</dd></dl>
<p>Then it can be shown that<sup id="cite_ref-sniedovich_03_15-0" class="reference"><a href="#cite_note-sniedovich_03-15"><span class="cite-bracket">&#91;</span>15<span class="cite-bracket">&#93;</span></a></sup>
</p>
<dl><dd><i>W</i>(<i>n</i>,<i>k</i>) = 1 + min{max(<i>W</i>(<i>n</i> &#8722; 1, <i>x</i> &#8722; 1), <i>W</i>(<i>n</i>,<i>k</i> &#8722; <i>x</i>)): <i>x</i> = 1, 2, ..., <i>k</i> }</dd></dl>
<p>with <i>W</i>(<i>n</i>,0) = 0 for all <i>n</i>&#160;&gt;&#160;0 and <i>W</i>(1,<i>k</i>) = <i>k</i> for all&#160;<i>k</i>. It is easy to solve this equation iteratively by systematically increasing the values of <i>n</i> and&#160;<i>k</i>.
</p>
<div class="mw-heading mw-heading4"><h4 id="Faster_DP_solution_using_a_different_parametrization">Faster DP solution using a different parametrization</h4></div>
<p>Notice that the above solution takes <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML"  alttext="{\displaystyle O(nk^{2})}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <mi>O</mi>
        <mo stretchy="false">(</mo>
        <mi>n</mi>
        <msup>
          <mi>k</mi>
          <mrow class="MJX-TeXAtom-ORD">
            <mn>2</mn>
          </mrow>
        </msup>
        <mo stretchy="false">)</mo>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle O(nk^{2})}</annotation>
  </semantics>
</math></span><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/e60f5fcc5716f6e45e3431be1a095d2cf2334c31" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.838ex; width:7.243ex; height:3.176ex;" alt="{\displaystyle O(nk^{2})}"></span> time with a DP solution. This can be improved to <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML"  alttext="{\displaystyle O(nk\log k)}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <mi>O</mi>
        <mo stretchy="false">(</mo>
        <mi>n</mi>
        <mi>k</mi>
        <mi>log</mi>
        <mo>&#x2061;<!-- ⁡ --></mo>
        <mi>k</mi>
        <mo stretchy="false">)</mo>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle O(nk\log k)}</annotation>
  </semantics>
</math></span><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/33f75ae11c64ad33234553ea222991a80503247b" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.838ex; width:11.146ex; height:2.843ex;" alt="{\displaystyle O(nk\log k)}"></span> time by binary searching on the optimal <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML"  alttext="{\displaystyle x}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <mi>x</mi>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle x}</annotation>
  </semantics>
</math></span><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/87f9e315fd7e2ba406057a97300593c4802b53e4" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.338ex; width:1.33ex; height:1.676ex;" alt="{\displaystyle x}"></span> in the above recurrence, since <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML"  alttext="{\displaystyle W(n-1,x-1)}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <mi>W</mi>
        <mo stretchy="false">(</mo>
        <mi>n</mi>
        <mo>&#x2212;<!-- − --></mo>
        <mn>1</mn>
        <mo>,</mo>
        <mi>x</mi>
        <mo>&#x2212;<!-- − --></mo>
        <mn>1</mn>
        <mo stretchy="false">)</mo>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle W(n-1,x-1)}</annotation>
  </semantics>
</math></span><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/a53848e9b3dd05012ea8b5477347646f6b8ef43f" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.838ex; width:16.009ex; height:2.843ex;" alt="{\displaystyle W(n-1,x-1)}"></span> is increasing in <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML"  alttext="{\displaystyle x}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <mi>x</mi>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle x}</annotation>
  </semantics>
</math></span><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/87f9e315fd7e2ba406057a97300593c4802b53e4" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.338ex; width:1.33ex; height:1.676ex;" alt="{\displaystyle x}"></span> while <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML"  alttext="{\displaystyle W(n,k-x)}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <mi>W</mi>
        <mo stretchy="false">(</mo>
        <mi>n</mi>
        <mo>,</mo>
        <mi>k</mi>
        <mo>&#x2212;<!-- − --></mo>
        <mi>x</mi>
        <mo stretchy="false">)</mo>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle W(n,k-x)}</annotation>
  </semantics>
</math></span><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/fac88404ea16085c78fc2e3fcae7c1fb52dcd367" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.838ex; width:12.054ex; height:2.843ex;" alt="{\displaystyle W(n,k-x)}"></span> is decreasing in <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML"  alttext="{\displaystyle x}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <mi>x</mi>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle x}</annotation>
  </semantics>
</math></span><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/87f9e315fd7e2ba406057a97300593c4802b53e4" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.338ex; width:1.33ex; height:1.676ex;" alt="{\displaystyle x}"></span>, thus a local minimum of <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML"  alttext="{\displaystyle \max(W(n-1,x-1),W(n,k-x))}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <mo movablelimits="true" form="prefix">max</mo>
        <mo stretchy="false">(</mo>
        <mi>W</mi>
        <mo stretchy="false">(</mo>
        <mi>n</mi>
        <mo>&#x2212;<!-- − --></mo>
        <mn>1</mn>
        <mo>,</mo>
        <mi>x</mi>
        <mo>&#x2212;<!-- − --></mo>
        <mn>1</mn>
        <mo stretchy="false">)</mo>
        <mo>,</mo>
        <mi>W</mi>
        <mo stretchy="false">(</mo>
        <mi>n</mi>
        <mo>,</mo>
        <mi>k</mi>
        <mo>&#x2212;<!-- − --></mo>
        <mi>x</mi>
        <mo stretchy="false">)</mo>
        <mo stretchy="false">)</mo>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle \max(W(n-1,x-1),W(n,k-x))}</annotation>
  </semantics>
</math></span><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/1c7a3a09b5c5deb068627bafdef14084f84edfb3" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.838ex; width:35.232ex; height:2.843ex;" alt="{\displaystyle \max(W(n-1,x-1),W(n,k-x))}"></span> is a global minimum. Also, by storing the optimal <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML"  alttext="{\displaystyle x}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <mi>x</mi>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle x}</annotation>
  </semantics>
</math></span><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/87f9e315fd7e2ba406057a97300593c4802b53e4" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.338ex; width:1.33ex; height:1.676ex;" alt="{\displaystyle x}"></span> for each cell in the DP table and referring to its value for the previous cell, the optimal <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML"  alttext="{\displaystyle x}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <mi>x</mi>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle x}</annotation>
  </semantics>
</math></span><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/87f9e315fd7e2ba406057a97300593c4802b53e4" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.338ex; width:1.33ex; height:1.676ex;" alt="{\displaystyle x}"></span> for each cell can be found in constant time, improving it to <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML"  alttext="{\displaystyle O(nk)}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <mi>O</mi>
        <mo stretchy="false">(</mo>
        <mi>n</mi>
        <mi>k</mi>
        <mo stretchy="false">)</mo>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle O(nk)}</annotation>
  </semantics>
</math></span><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/16feb8341ea75a7bb8b3445959360dde7686db10" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.838ex; width:6.189ex; height:2.843ex;" alt="{\displaystyle O(nk)}"></span> time. However, there is an even faster solution that involves a different parametrization of the problem:
</p><p>Let <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML"  alttext="{\displaystyle k}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <mi>k</mi>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle k}</annotation>
  </semantics>
</math></span><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/c3c9a2c7b599b37105512c5d570edc034056dd40" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.338ex; width:1.211ex; height:2.176ex;" alt="{\displaystyle k}"></span> be the total number of floors such that the eggs break when dropped from the <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML"  alttext="{\displaystyle k}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <mi>k</mi>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle k}</annotation>
  </semantics>
</math></span><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/c3c9a2c7b599b37105512c5d570edc034056dd40" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.338ex; width:1.211ex; height:2.176ex;" alt="{\displaystyle k}"></span>th floor (The example above is equivalent to taking <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML"  alttext="{\displaystyle k=37}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <mi>k</mi>
        <mo>=</mo>
        <mn>37</mn>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle k=37}</annotation>
  </semantics>
</math></span><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/74c4bbfe0af3dae49f18c3bf3bdec17521863b78" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.338ex; width:6.635ex; height:2.176ex;" alt="{\displaystyle k=37}"></span>).
</p><p>Let <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML"  alttext="{\displaystyle m}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <mi>m</mi>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle m}</annotation>
  </semantics>
</math></span><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/0a07d98bb302f3856cbabc47b2b9016692e3f7bc" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.338ex; width:2.04ex; height:1.676ex;" alt="{\displaystyle m}"></span> be the minimum floor from which the egg must be dropped to be broken.
</p><p>Let <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML"  alttext="{\displaystyle f(t,n)}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <mi>f</mi>
        <mo stretchy="false">(</mo>
        <mi>t</mi>
        <mo>,</mo>
        <mi>n</mi>
        <mo stretchy="false">)</mo>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle f(t,n)}</annotation>
  </semantics>
</math></span><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/e7804efe26a61f9352144d98bd351881de5eb4f3" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.838ex; width:6.356ex; height:2.843ex;" alt="{\displaystyle f(t,n)}"></span> be the maximum number of values of <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML"  alttext="{\displaystyle m}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <mi>m</mi>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle m}</annotation>
  </semantics>
</math></span><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/0a07d98bb302f3856cbabc47b2b9016692e3f7bc" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.338ex; width:2.04ex; height:1.676ex;" alt="{\displaystyle m}"></span> that are distinguishable using <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML"  alttext="{\displaystyle t}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <mi>t</mi>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle t}</annotation>
  </semantics>
</math></span><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/65658b7b223af9e1acc877d848888ecdb4466560" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.338ex; width:0.84ex; height:2.009ex;" alt="{\displaystyle t}"></span> tries and <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML"  alttext="{\displaystyle n}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <mi>n</mi>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle n}</annotation>
  </semantics>
</math></span><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/a601995d55609f2d9f5e233e36fbe9ea26011b3b" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.338ex; width:1.395ex; height:1.676ex;" alt="{\displaystyle n}"></span> eggs.
</p><p>Then <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML"  alttext="{\displaystyle f(t,0)=f(0,n)=1}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <mi>f</mi>
        <mo stretchy="false">(</mo>
        <mi>t</mi>
        <mo>,</mo>
        <mn>0</mn>
        <mo stretchy="false">)</mo>
        <mo>=</mo>
        <mi>f</mi>
        <mo stretchy="false">(</mo>
        <mn>0</mn>
        <mo>,</mo>
        <mi>n</mi>
        <mo stretchy="false">)</mo>
        <mo>=</mo>
        <mn>1</mn>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle f(t,0)=f(0,n)=1}</annotation>
  </semantics>
</math></span><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/7e9a652befc857d8b7dbb9d22f5ddc4d65115034" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.838ex; width:20.162ex; height:2.843ex;" alt="{\displaystyle f(t,0)=f(0,n)=1}"></span> for all <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML"  alttext="{\displaystyle t,n\geq 0}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <mi>t</mi>
        <mo>,</mo>
        <mi>n</mi>
        <mo>&#x2265;<!-- ≥ --></mo>
        <mn>0</mn>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle t,n\geq 0}</annotation>
  </semantics>
</math></span><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/3ba436d0fd3d25a6dbacc7e227a0e4558c12736a" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.671ex; width:7.529ex; height:2.509ex;" alt="{\displaystyle t,n\geq 0}"></span>.
</p><p>Let <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML"  alttext="{\displaystyle a}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <mi>a</mi>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle a}</annotation>
  </semantics>
</math></span><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/ffd2487510aa438433a2579450ab2b3d557e5edc" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.338ex; width:1.23ex; height:1.676ex;" alt="{\displaystyle a}"></span> be the floor from which the first egg is dropped in the optimal strategy.
</p><p>If the first egg broke, <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML"  alttext="{\displaystyle m}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <mi>m</mi>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle m}</annotation>
  </semantics>
</math></span><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/0a07d98bb302f3856cbabc47b2b9016692e3f7bc" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.338ex; width:2.04ex; height:1.676ex;" alt="{\displaystyle m}"></span> is from <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML"  alttext="{\displaystyle 1}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <mn>1</mn>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle 1}</annotation>
  </semantics>
</math></span><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/92d98b82a3778f043108d4e20960a9193df57cbf" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.338ex; width:1.162ex; height:2.176ex;" alt="{\displaystyle 1}"></span> to <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML"  alttext="{\displaystyle a}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <mi>a</mi>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle a}</annotation>
  </semantics>
</math></span><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/ffd2487510aa438433a2579450ab2b3d557e5edc" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.338ex; width:1.23ex; height:1.676ex;" alt="{\displaystyle a}"></span> and distinguishable using at most <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML"  alttext="{\displaystyle t-1}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <mi>t</mi>
        <mo>&#x2212;<!-- − --></mo>
        <mn>1</mn>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle t-1}</annotation>
  </semantics>
</math></span><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/a215d9553945bb84b3b5a79cc796fb7d6e0629f0" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.505ex; width:4.842ex; height:2.343ex;" alt="{\displaystyle t-1}"></span> tries and <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML"  alttext="{\displaystyle n-1}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <mi>n</mi>
        <mo>&#x2212;<!-- − --></mo>
        <mn>1</mn>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle n-1}</annotation>
  </semantics>
</math></span><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/fbd0b0f32b28f51962943ee9ede4fb34198a2521" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.505ex; width:5.398ex; height:2.343ex;" alt="{\displaystyle n-1}"></span> eggs.
</p><p>If the first egg did not break, <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML"  alttext="{\displaystyle m}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <mi>m</mi>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle m}</annotation>
  </semantics>
</math></span><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/0a07d98bb302f3856cbabc47b2b9016692e3f7bc" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.338ex; width:2.04ex; height:1.676ex;" alt="{\displaystyle m}"></span> is from <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML"  alttext="{\displaystyle a+1}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <mi>a</mi>
        <mo>+</mo>
        <mn>1</mn>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle a+1}</annotation>
  </semantics>
</math></span><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/8028f23cfdcb108712e2bc53369305574afe820b" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.505ex; width:5.233ex; height:2.343ex;" alt="{\displaystyle a+1}"></span> to <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML"  alttext="{\displaystyle k}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <mi>k</mi>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle k}</annotation>
  </semantics>
</math></span><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/c3c9a2c7b599b37105512c5d570edc034056dd40" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.338ex; width:1.211ex; height:2.176ex;" alt="{\displaystyle k}"></span> and distinguishable using <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML"  alttext="{\displaystyle t-1}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <mi>t</mi>
        <mo>&#x2212;<!-- − --></mo>
        <mn>1</mn>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle t-1}</annotation>
  </semantics>
</math></span><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/a215d9553945bb84b3b5a79cc796fb7d6e0629f0" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.505ex; width:4.842ex; height:2.343ex;" alt="{\displaystyle t-1}"></span> tries and <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML"  alttext="{\displaystyle n}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <mi>n</mi>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle n}</annotation>
  </semantics>
</math></span><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/a601995d55609f2d9f5e233e36fbe9ea26011b3b" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.338ex; width:1.395ex; height:1.676ex;" alt="{\displaystyle n}"></span> eggs.
</p><p>Therefore, <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML"  alttext="{\displaystyle f(t,n)=f(t-1,n-1)+f(t-1,n)}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <mi>f</mi>
        <mo stretchy="false">(</mo>
        <mi>t</mi>
        <mo>,</mo>
        <mi>n</mi>
        <mo stretchy="false">)</mo>
        <mo>=</mo>
        <mi>f</mi>
        <mo stretchy="false">(</mo>
        <mi>t</mi>
        <mo>&#x2212;<!-- − --></mo>
        <mn>1</mn>
        <mo>,</mo>
        <mi>n</mi>
        <mo>&#x2212;<!-- − --></mo>
        <mn>1</mn>
        <mo stretchy="false">)</mo>
        <mo>+</mo>
        <mi>f</mi>
        <mo stretchy="false">(</mo>
        <mi>t</mi>
        <mo>&#x2212;<!-- − --></mo>
        <mn>1</mn>
        <mo>,</mo>
        <mi>n</mi>
        <mo stretchy="false">)</mo>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle f(t,n)=f(t-1,n-1)+f(t-1,n)}</annotation>
  </semantics>
</math></span><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/31dff5e6c571fd709b1291926c85d0f83a3cc4a0" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.838ex; width:37.016ex; height:2.843ex;" alt="{\displaystyle f(t,n)=f(t-1,n-1)+f(t-1,n)}"></span>.
</p><p>Then the problem is equivalent to finding the minimum <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML"  alttext="{\displaystyle x}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <mi>x</mi>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle x}</annotation>
  </semantics>
</math></span><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/87f9e315fd7e2ba406057a97300593c4802b53e4" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.338ex; width:1.33ex; height:1.676ex;" alt="{\displaystyle x}"></span> such that <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML"  alttext="{\displaystyle f(x,n)\geq k}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <mi>f</mi>
        <mo stretchy="false">(</mo>
        <mi>x</mi>
        <mo>,</mo>
        <mi>n</mi>
        <mo stretchy="false">)</mo>
        <mo>&#x2265;<!-- ≥ --></mo>
        <mi>k</mi>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle f(x,n)\geq k}</annotation>
  </semantics>
</math></span><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/6d6a70ba7ff177596a4734983a7bd9bd6eabcc77" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.838ex; width:11.156ex; height:2.843ex;" alt="{\displaystyle f(x,n)\geq k}"></span>.
</p><p>To do so, we could compute <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML"  alttext="{\displaystyle \{f(t,i):0\leq i\leq n\}}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <mo fence="false" stretchy="false">{</mo>
        <mi>f</mi>
        <mo stretchy="false">(</mo>
        <mi>t</mi>
        <mo>,</mo>
        <mi>i</mi>
        <mo stretchy="false">)</mo>
        <mo>:</mo>
        <mn>0</mn>
        <mo>&#x2264;<!-- ≤ --></mo>
        <mi>i</mi>
        <mo>&#x2264;<!-- ≤ --></mo>
        <mi>n</mi>
        <mo fence="false" stretchy="false">}</mo>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle \{f(t,i):0\leq i\leq n\}}</annotation>
  </semantics>
</math></span><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/15748c7135a71c9a615b1791257f385c465f1f8f" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.838ex; width:19.583ex; height:2.843ex;" alt="{\displaystyle \{f(t,i):0\leq i\leq n\}}"></span> in order of increasing <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML"  alttext="{\displaystyle t}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <mi>t</mi>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle t}</annotation>
  </semantics>
</math></span><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/65658b7b223af9e1acc877d848888ecdb4466560" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.338ex; width:0.84ex; height:2.009ex;" alt="{\displaystyle t}"></span>, which would take <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML"  alttext="{\displaystyle O(nx)}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <mi>O</mi>
        <mo stretchy="false">(</mo>
        <mi>n</mi>
        <mi>x</mi>
        <mo stretchy="false">)</mo>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle O(nx)}</annotation>
  </semantics>
</math></span><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/8f99a08f754120e54250a58ad896644c9e03a3a7" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.838ex; width:6.307ex; height:2.843ex;" alt="{\displaystyle O(nx)}"></span> time.
</p><p>Thus, if we separately handle the case of <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML"  alttext="{\displaystyle n=1}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <mi>n</mi>
        <mo>=</mo>
        <mn>1</mn>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle n=1}</annotation>
  </semantics>
</math></span><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/d9ec7e1edc2e6d98f5aec2a39ae5f1c99d1e1425" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.338ex; width:5.656ex; height:2.176ex;" alt="{\displaystyle n=1}"></span>, the algorithm would take <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML"  alttext="{\displaystyle O(n{\sqrt {k}})}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <mi>O</mi>
        <mo stretchy="false">(</mo>
        <mi>n</mi>
        <mrow class="MJX-TeXAtom-ORD">
          <msqrt>
            <mi>k</mi>
          </msqrt>
        </mrow>
        <mo stretchy="false">)</mo>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle O(n{\sqrt {k}})}</annotation>
  </semantics>
</math></span><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/6e9eeb287cc1a095077af75af07ec794472f1e56" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.838ex; width:8.124ex; height:3.176ex;" alt="{\displaystyle O(n{\sqrt {k}})}"></span> time.
</p><p>But the recurrence relation can in fact be solved, giving <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML"  alttext="{\displaystyle f(t,n)=\sum _{i=0}^{n}{\binom {t}{i}}}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <mi>f</mi>
        <mo stretchy="false">(</mo>
        <mi>t</mi>
        <mo>,</mo>
        <mi>n</mi>
        <mo stretchy="false">)</mo>
        <mo>=</mo>
        <munderover>
          <mo>&#x2211;<!-- ∑ --></mo>
          <mrow class="MJX-TeXAtom-ORD">
            <mi>i</mi>
            <mo>=</mo>
            <mn>0</mn>
          </mrow>
          <mrow class="MJX-TeXAtom-ORD">
            <mi>n</mi>
          </mrow>
        </munderover>
        <mrow class="MJX-TeXAtom-ORD">
          <mrow>
            <mrow class="MJX-TeXAtom-OPEN">
              <mo maxsize="2.047em" minsize="2.047em">(</mo>
            </mrow>
            <mfrac linethickness="0">
              <mi>t</mi>
              <mi>i</mi>
            </mfrac>
            <mrow class="MJX-TeXAtom-CLOSE">
              <mo maxsize="2.047em" minsize="2.047em">)</mo>
            </mrow>
          </mrow>
        </mrow>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle f(t,n)=\sum _{i=0}^{n}{\binom {t}{i}}}</annotation>
  </semantics>
</math></span><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/a4fa894a4458ee513e6188f9ecdc20ca32c6d700" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -3.005ex; width:17.457ex; height:6.843ex;" alt="{\displaystyle f(t,n)=\sum _{i=0}^{n}{\binom {t}{i}}}"></span>, which can be computed in <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML"  alttext="{\displaystyle O(n)}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <mi>O</mi>
        <mo stretchy="false">(</mo>
        <mi>n</mi>
        <mo stretchy="false">)</mo>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle O(n)}</annotation>
  </semantics>
</math></span><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/34109fe397fdcff370079185bfdb65826cb5565a" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.838ex; width:4.977ex; height:2.843ex;" alt="{\displaystyle O(n)}"></span> time using the identity <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML"  alttext="{\displaystyle {\binom {t}{i+1}}={\binom {t}{i}}{\frac {t-i}{i+1}}}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <mrow class="MJX-TeXAtom-ORD">
          <mrow>
            <mrow class="MJX-TeXAtom-OPEN">
              <mo maxsize="2.047em" minsize="2.047em">(</mo>
            </mrow>
            <mfrac linethickness="0">
              <mi>t</mi>
              <mrow>
                <mi>i</mi>
                <mo>+</mo>
                <mn>1</mn>
              </mrow>
            </mfrac>
            <mrow class="MJX-TeXAtom-CLOSE">
              <mo maxsize="2.047em" minsize="2.047em">)</mo>
            </mrow>
          </mrow>
        </mrow>
        <mo>=</mo>
        <mrow class="MJX-TeXAtom-ORD">
          <mrow>
            <mrow class="MJX-TeXAtom-OPEN">
              <mo maxsize="2.047em" minsize="2.047em">(</mo>
            </mrow>
            <mfrac linethickness="0">
              <mi>t</mi>
              <mi>i</mi>
            </mfrac>
            <mrow class="MJX-TeXAtom-CLOSE">
              <mo maxsize="2.047em" minsize="2.047em">)</mo>
            </mrow>
          </mrow>
        </mrow>
        <mrow class="MJX-TeXAtom-ORD">
          <mfrac>
            <mrow>
              <mi>t</mi>
              <mo>&#x2212;<!-- − --></mo>
              <mi>i</mi>
            </mrow>
            <mrow>
              <mi>i</mi>
              <mo>+</mo>
              <mn>1</mn>
            </mrow>
          </mfrac>
        </mrow>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle {\binom {t}{i+1}}={\binom {t}{i}}{\frac {t-i}{i+1}}}</annotation>
  </semantics>
</math></span><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/ed0349d190cb4f5f7e913e1aec7a402cc4236a53" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -2.505ex; width:21.227ex; height:6.176ex;" alt="{\displaystyle {\binom {t}{i+1}}={\binom {t}{i}}{\frac {t-i}{i+1}}}"></span> for all <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML"  alttext="{\displaystyle i\geq 0}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <mi>i</mi>
        <mo>&#x2265;<!-- ≥ --></mo>
        <mn>0</mn>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle i\geq 0}</annotation>
  </semantics>
</math></span><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/405e1424cb9c4fc171c433a8e8f04b3e5938e366" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.505ex; width:5.063ex; height:2.343ex;" alt="{\displaystyle i\geq 0}"></span>.
</p><p>Since <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML"  alttext="{\displaystyle f(t,n)\leq f(t+1,n)}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <mi>f</mi>
        <mo stretchy="false">(</mo>
        <mi>t</mi>
        <mo>,</mo>
        <mi>n</mi>
        <mo stretchy="false">)</mo>
        <mo>&#x2264;<!-- ≤ --></mo>
        <mi>f</mi>
        <mo stretchy="false">(</mo>
        <mi>t</mi>
        <mo>+</mo>
        <mn>1</mn>
        <mo>,</mo>
        <mi>n</mi>
        <mo stretchy="false">)</mo>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle f(t,n)\leq f(t+1,n)}</annotation>
  </semantics>
</math></span><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/55590dc7d5f4e32400bb982d37a3ac34b13f0ac6" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.838ex; width:19.814ex; height:2.843ex;" alt="{\displaystyle f(t,n)\leq f(t+1,n)}"></span> for all <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML"  alttext="{\displaystyle t\geq 0}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <mi>t</mi>
        <mo>&#x2265;<!-- ≥ --></mo>
        <mn>0</mn>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle t\geq 0}</annotation>
  </semantics>
</math></span><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/248525429e9cd266f53ab8c52d17bc206c546060" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.505ex; width:5.101ex; height:2.343ex;" alt="{\displaystyle t\geq 0}"></span>, we can binary search on <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML"  alttext="{\displaystyle t}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <mi>t</mi>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle t}</annotation>
  </semantics>
</math></span><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/65658b7b223af9e1acc877d848888ecdb4466560" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.338ex; width:0.84ex; height:2.009ex;" alt="{\displaystyle t}"></span> to find <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML"  alttext="{\displaystyle x}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <mi>x</mi>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle x}</annotation>
  </semantics>
</math></span><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/87f9e315fd7e2ba406057a97300593c4802b53e4" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.338ex; width:1.33ex; height:1.676ex;" alt="{\displaystyle x}"></span>, giving an <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML"  alttext="{\displaystyle O(n\log k)}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <mi>O</mi>
        <mo stretchy="false">(</mo>
        <mi>n</mi>
        <mi>log</mi>
        <mo>&#x2061;<!-- ⁡ --></mo>
        <mi>k</mi>
        <mo stretchy="false">)</mo>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle O(n\log k)}</annotation>
  </semantics>
</math></span><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/99e71cfbbb1dbd170050e63d7b342b07b4b014e2" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.838ex; width:9.934ex; height:2.843ex;" alt="{\displaystyle O(n\log k)}"></span> algorithm.<sup id="cite_ref-16" class="reference"><a href="#cite_note-16"><span class="cite-bracket">&#91;</span>16<span class="cite-bracket">&#93;</span></a></sup>
</p>
<div class="mw-heading mw-heading3"><h3 id="Matrix_chain_multiplication">Matrix chain multiplication</h3></div>
<link rel="mw-deduplicated-inline-style" href="mw-data:TemplateStyles:r1251242444" /><table class="box-Unreferenced_section plainlinks metadata ambox ambox-content ambox-Unreferenced" role="presentation"><tbody><tr><td class="mbox-image"><div class="mbox-image-div"><span typeof="mw:File"><a href="/wiki/File:Question_book-new.svg" class="mw-file-description"><img alt="" src="//upload.wikimedia.org/wikipedia/en/thumb/9/99/Question_book-new.svg/60px-Question_book-new.svg.png" decoding="async" width="50" height="39" class="mw-file-element" srcset="//upload.wikimedia.org/wikipedia/en/thumb/9/99/Question_book-new.svg/120px-Question_book-new.svg.png 1.5x" data-file-width="512" data-file-height="399" /></a></span></div></td><td class="mbox-text"><div class="mbox-text-span">This section <b>does not <a href="/wiki/Wikipedia:Citing_sources" title="Wikipedia:Citing sources">cite</a> any <a href="/wiki/Wikipedia:Verifiability" title="Wikipedia:Verifiability">sources</a></b>.<span class="hide-when-compact"> Please help <a href="/wiki/Special:EditPage/Dynamic_programming" title="Special:EditPage/Dynamic programming">improve this section</a> by <a href="/wiki/Help:Referencing_for_beginners" title="Help:Referencing for beginners">adding citations to reliable sources</a>. Unsourced material may be challenged and <a href="/wiki/Wikipedia:Verifiability#Burden_of_evidence" title="Wikipedia:Verifiability">removed</a>.</span>  <span class="date-container"><i>(<span class="date">May 2013</span>)</i></span><span class="hide-when-compact"><i> (<small><a href="/wiki/Help:Maintenance_template_removal" title="Help:Maintenance template removal">Learn how and when to remove this message</a></small>)</i></span></div></td></tr></tbody></table>
<link rel="mw-deduplicated-inline-style" href="mw-data:TemplateStyles:r1236090951" /><div role="note" class="hatnote navigation-not-searchable">Main article: <a href="/wiki/Matrix_chain_multiplication" title="Matrix chain multiplication">Matrix chain multiplication</a></div>
<p>Matrix chain multiplication is a well-known example that demonstrates utility of dynamic programming. For example,  engineering applications often have to multiply a chain of matrices. It is not surprising to find matrices of large dimensions, for example 100×100. Therefore, our task is to multiply matrices <span class="nowrap">&#8288;<span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML"  alttext="{\displaystyle A_{1},A_{2},....A_{n}}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <msub>
          <mi>A</mi>
          <mrow class="MJX-TeXAtom-ORD">
            <mn>1</mn>
          </mrow>
        </msub>
        <mo>,</mo>
        <msub>
          <mi>A</mi>
          <mrow class="MJX-TeXAtom-ORD">
            <mn>2</mn>
          </mrow>
        </msub>
        <mo>,</mo>
        <mo>.</mo>
        <mo>.</mo>
        <mo>.</mo>
        <mo>.</mo>
        <msub>
          <mi>A</mi>
          <mrow class="MJX-TeXAtom-ORD">
            <mi>n</mi>
          </mrow>
        </msub>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle A_{1},A_{2},....A_{n}}</annotation>
  </semantics>
</math></span><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/700b99631b28d2edc6f6cbaa915154130b0af155" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.671ex; width:14.76ex; height:2.509ex;" alt="{\displaystyle A_{1},A_{2},....A_{n}}"></span>&#8288;</span>. Matrix multiplication is not commutative, but is associative; and we can multiply only two matrices at a time. So, we can multiply this chain of matrices in many different ways, for example:
</p>
<dl><dd><span class="texhtml">((<i>A</i><sub>1</sub> × <i>A</i><sub>2</sub>) × <i>A</i><sub>3</sub>) × ... <i>A<sub>n</sub></i></span></dd></dl>
<dl><dd><span class="texhtml"><i>A</i><sub>1</sub>×(((<i>A</i><sub>2</sub>×<i>A</i><sub>3</sub>)× ... ) × <i>A<sub>n</sub></i>)</span></dd></dl>
<dl><dd><span class="texhtml">(<i>A</i><sub>1</sub> × <i>A</i><sub>2</sub>) × (<i>A</i><sub>3</sub> × ... <i>A<sub>n</sub></i>)</span></dd></dl>
<p>and so on. There are numerous ways to multiply this chain of matrices. They will all produce the same final result, however they will take more or less time to compute, based on which particular matrices are multiplied. If matrix A has dimensions m×n and matrix B has dimensions n×q, then matrix C=A×B will have dimensions m×q, and will require m*n*q scalar multiplications (using a simplistic <a href="/wiki/Matrix_multiplication_algorithm" title="Matrix multiplication algorithm">matrix multiplication algorithm</a> for purposes of illustration).
</p><p>For example, let us multiply matrices A, B and C. Let us assume that their dimensions are m×n, n×p, and p×s, respectively. Matrix A×B×C will be of size m×s and can be calculated in two ways shown below:
</p>
<ol><li>Ax(B×C)    This order of matrix multiplication will require nps + mns scalar multiplications.</li>
<li>(A×B)×C    This order of matrix multiplication will require mnp + mps scalar calculations.</li></ol>
<p>Let us assume that m = 10, n = 100, p = 10 and s = 1000. So, the first way to multiply the chain will require 1,000,000 + 1,000,000 calculations. The second way will require only 10,000 + 100,000 calculations. Obviously, the second way is faster, and we should multiply the matrices using that arrangement of parenthesis.
</p><p>Therefore, our conclusion is that the order of parenthesis matters, and that our task is to find the optimal order of parenthesis.
</p><p>At this point, we have several choices, one of which is to design a dynamic programming algorithm that will split the problem into overlapping problems and calculate the optimal arrangement of parenthesis. The dynamic programming solution is presented below.
</p><p>Let's call m[i,j] the minimum number of scalar multiplications needed to multiply a chain of matrices from matrix i to matrix j (i.e. A<sub>i</sub> × .... × A<sub>j</sub>, i.e. i&lt;=j). We split the chain at some matrix k, such that i &lt;= k &lt; j, and try to find out which combination produces minimum m[i,j].
</p><p>The formula is:
</p>
<pre>       <b>if</b> i = j, m[i,j]= 0
       <b>if</b> i &lt; j, m[i,j]= min over all possible values of k <span class="nowrap">(m[i,k]+m[k+1,j] + <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML"  alttext="{\displaystyle p_{i-1}*p_{k}*p_{j}}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <msub>
          <mi>p</mi>
          <mrow class="MJX-TeXAtom-ORD">
            <mi>i</mi>
            <mo>&#x2212;<!-- − --></mo>
            <mn>1</mn>
          </mrow>
        </msub>
        <mo>&#x2217;<!-- ∗ --></mo>
        <msub>
          <mi>p</mi>
          <mrow class="MJX-TeXAtom-ORD">
            <mi>k</mi>
          </mrow>
        </msub>
        <mo>&#x2217;<!-- ∗ --></mo>
        <msub>
          <mi>p</mi>
          <mrow class="MJX-TeXAtom-ORD">
            <mi>j</mi>
          </mrow>
        </msub>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle p_{i-1}*p_{k}*p_{j}}</annotation>
  </semantics>
</math></span><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/8d0233aa2b12fda27441c58ace6c6508c917459e" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -1.005ex; margin-left: -0.089ex; width:12.886ex; height:2.343ex;" alt="{\displaystyle p_{i-1}*p_{k}*p_{j}}"></span>)</span> 
</pre>
<p>where <i>k</i> ranges from <i>i</i> to <i>j</i>&#160;&#8722;&#160;1.
</p>
<ul><li><span class="nowrap">&#8288;<span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML"  alttext="{\displaystyle p_{i-1}}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <msub>
          <mi>p</mi>
          <mrow class="MJX-TeXAtom-ORD">
            <mi>i</mi>
            <mo>&#x2212;<!-- − --></mo>
            <mn>1</mn>
          </mrow>
        </msub>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle p_{i-1}}</annotation>
  </semantics>
</math></span><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/5b2743340775af529f3dc57879ef1b2c1170e5fc" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.671ex; margin-left: -0.089ex; width:4.159ex; height:2.009ex;" alt="{\displaystyle p_{i-1}}"></span>&#8288;</span> is the row dimension of matrix i,</li>
<li><span class="nowrap">&#8288;<span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML"  alttext="{\displaystyle p_{k}}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <msub>
          <mi>p</mi>
          <mrow class="MJX-TeXAtom-ORD">
            <mi>k</mi>
          </mrow>
        </msub>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle p_{k}}</annotation>
  </semantics>
</math></span><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/01084a31964201514f3e6bd0136989e11ea6e58a" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.671ex; margin-left: -0.089ex; width:2.348ex; height:2.009ex;" alt="{\displaystyle p_{k}}"></span>&#8288;</span> is the column dimension of matrix k,</li>
<li><span class="nowrap">&#8288;<span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML"  alttext="{\displaystyle p_{j}}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <msub>
          <mi>p</mi>
          <mrow class="MJX-TeXAtom-ORD">
            <mi>j</mi>
          </mrow>
        </msub>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle p_{j}}</annotation>
  </semantics>
</math></span><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/499e0821b28c43e9bc2a6360b937de535057bc62" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -1.005ex; margin-left: -0.089ex; width:2.169ex; height:2.343ex;" alt="{\displaystyle p_{j}}"></span>&#8288;</span> is the column dimension of matrix j.</li></ul>
<p>This formula can be coded as shown below, where input parameter "chain" is the chain of matrices, i.e. <span class="nowrap">&#8288;<span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML"  alttext="{\displaystyle A_{1},A_{2},...A_{n}}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <msub>
          <mi>A</mi>
          <mrow class="MJX-TeXAtom-ORD">
            <mn>1</mn>
          </mrow>
        </msub>
        <mo>,</mo>
        <msub>
          <mi>A</mi>
          <mrow class="MJX-TeXAtom-ORD">
            <mn>2</mn>
          </mrow>
        </msub>
        <mo>,</mo>
        <mo>.</mo>
        <mo>.</mo>
        <mo>.</mo>
        <msub>
          <mi>A</mi>
          <mrow class="MJX-TeXAtom-ORD">
            <mi>n</mi>
          </mrow>
        </msub>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle A_{1},A_{2},...A_{n}}</annotation>
  </semantics>
</math></span><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/31c02495cac84da30921b34c436a691ce1593868" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.671ex; width:13.726ex; height:2.509ex;" alt="{\displaystyle A_{1},A_{2},...A_{n}}"></span>&#8288;</span>:
</p>
<pre><b>function</b> OptimalMatrixChainParenthesis(chain)
    n = length(chain)
    <b>for</b> i = 1, n
        m[i,i] = 0    <i>// Since it takes no calculations to multiply one matrix</i>
    <b>for</b> len = 2, n
        <b>for</b> i = 1, n - len + 1
            j = i + len -1
            m[i,j] = infinity      <i>// So that the first calculation updates</i>
            <b>for</b> k = i, j-1
                <span class="nowrap">q = m[i, k] + m[k+1, j] + <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML"  alttext="{\displaystyle p_{i-1}*p_{k}*p_{j}}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <msub>
          <mi>p</mi>
          <mrow class="MJX-TeXAtom-ORD">
            <mi>i</mi>
            <mo>&#x2212;<!-- − --></mo>
            <mn>1</mn>
          </mrow>
        </msub>
        <mo>&#x2217;<!-- ∗ --></mo>
        <msub>
          <mi>p</mi>
          <mrow class="MJX-TeXAtom-ORD">
            <mi>k</mi>
          </mrow>
        </msub>
        <mo>&#x2217;<!-- ∗ --></mo>
        <msub>
          <mi>p</mi>
          <mrow class="MJX-TeXAtom-ORD">
            <mi>j</mi>
          </mrow>
        </msub>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle p_{i-1}*p_{k}*p_{j}}</annotation>
  </semantics>
</math></span><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/8d0233aa2b12fda27441c58ace6c6508c917459e" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -1.005ex; margin-left: -0.089ex; width:12.886ex; height:2.343ex;" alt="{\displaystyle p_{i-1}*p_{k}*p_{j}}"></span></span>
                <b>if</b> q &lt; m[i, j]     <i>// The new order of parentheses is better than what we had</i>
                    m[i, j] = q    <i>// Update</i>
                    s[i, j] = k    <i>// Record which k to split on, i.e. where to place the parenthesis</i>
</pre>
<p>So far, we have calculated values for all possible <span class="texhtml"><i>m</i>[<i>i</i>, <i>j</i>]</span>, the minimum number of calculations to multiply a chain from matrix <i>i</i> to matrix <i>j</i>, and we have recorded the corresponding "split point"<span class="texhtml"><i>s</i>[<i>i</i>, <i>j</i>]</span>. For example, if we are multiplying chain <span class="texhtml"><i>A</i><sub>1</sub>×<i>A</i><sub>2</sub>×<i>A</i><sub>3</sub>×<i>A</i><sub>4</sub></span>, and it turns out that <span class="texhtml"><i>m</i>[1, 3] = 100</span> and <span class="texhtml"><i>s</i>[1, 3] = 2</span>, that means that the optimal placement of parenthesis for matrices 1 to 3 is <span class="nowrap">&#8288;<span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML"  alttext="{\displaystyle (A_{1}\times A_{2})\times A_{3}}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <mo stretchy="false">(</mo>
        <msub>
          <mi>A</mi>
          <mrow class="MJX-TeXAtom-ORD">
            <mn>1</mn>
          </mrow>
        </msub>
        <mo>&#x00D7;<!-- × --></mo>
        <msub>
          <mi>A</mi>
          <mrow class="MJX-TeXAtom-ORD">
            <mn>2</mn>
          </mrow>
        </msub>
        <mo stretchy="false">)</mo>
        <mo>&#x00D7;<!-- × --></mo>
        <msub>
          <mi>A</mi>
          <mrow class="MJX-TeXAtom-ORD">
            <mn>3</mn>
          </mrow>
        </msub>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle (A_{1}\times A_{2})\times A_{3}}</annotation>
  </semantics>
</math></span><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/823afb23c31ccd1845769469c22be709f757b1a3" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.838ex; width:15.882ex; height:2.843ex;" alt="{\displaystyle (A_{1}\times A_{2})\times A_{3}}"></span>&#8288;</span> and to multiply those matrices will require 100 scalar calculations.
</p><p>This algorithm will produce "tables" <i>m</i>[, ] and <i>s</i>[, ] that will have entries for all possible values of i and j. The final solution for the entire chain is m[1, n], with corresponding split at s[1, n]. Unraveling the solution will be recursive, starting from the top and continuing until we reach the base case, i.e. multiplication of single matrices.
</p><p>Therefore, the next step is to actually split the chain, i.e. to place the parenthesis where they (optimally) belong. For this purpose we could use the following algorithm:
</p>
<pre><b>function</b> PrintOptimalParenthesis(s, i, j)
    <b>if</b> i = j
        print "A"i
    <b>else</b>
        print "(" 
        PrintOptimalParenthesis(s, i, s[i, j]) 
        PrintOptimalParenthesis(s, s[i, j] + 1, j) 
        print ")"
</pre>
<p>Of course, this algorithm is not useful for actual multiplication. This algorithm is just a user-friendly way to see what the result looks like.
</p><p>To actually multiply the matrices using the proper splits, we need the following algorithm:
</p>
<div class="mw-highlight mw-highlight-lang-javascript mw-content-ltr" dir="ltr"><pre><span></span><span class="w">   </span><span class="kd">function</span><span class="w"> </span><span class="nx">MatrixChainMultiply</span><span class="p">(</span><span class="nx">chain</span><span class="w"> </span><span class="kr">from</span><span class="w"> </span><span class="mf">1</span><span class="w"> </span><span class="nx">to</span><span class="w"> </span><span class="nx">n</span><span class="p">)</span><span class="w">       </span><span class="c1">// returns the final matrix, i.e. A1×A2×... ×An</span>
<span class="w">      </span><span class="nx">OptimalMatrixChainParenthesis</span><span class="p">(</span><span class="nx">chain</span><span class="w"> </span><span class="kr">from</span><span class="w"> </span><span class="mf">1</span><span class="w"> </span><span class="nx">to</span><span class="w"> </span><span class="nx">n</span><span class="p">)</span><span class="w">   </span><span class="c1">// this will produce s[ . ] and m[ . ] &quot;tables&quot;</span>
<span class="w">      </span><span class="nx">OptimalMatrixMultiplication</span><span class="p">(</span><span class="nx">s</span><span class="p">,</span><span class="w"> </span><span class="nx">chain</span><span class="w"> </span><span class="kr">from</span><span class="w"> </span><span class="mf">1</span><span class="w"> </span><span class="nx">to</span><span class="w"> </span><span class="nx">n</span><span class="p">)</span><span class="w">  </span><span class="c1">// actually multiply</span>

<span class="w">   </span><span class="kd">function</span><span class="w"> </span><span class="nx">OptimalMatrixMultiplication</span><span class="p">(</span><span class="nx">s</span><span class="p">,</span><span class="w"> </span><span class="nx">i</span><span class="p">,</span><span class="w"> </span><span class="nx">j</span><span class="p">)</span><span class="w">   </span><span class="c1">// returns the result of multiplying a chain of matrices from Ai to Aj in optimal way</span>
<span class="w">      </span><span class="k">if</span><span class="w"> </span><span class="nx">i</span><span class="w"> </span><span class="o">&lt;</span><span class="w"> </span><span class="nx">j</span>
<span class="w">         </span><span class="c1">// keep on splitting the chain and multiplying the matrices in left and right sides</span>
<span class="w">         </span><span class="nx">LeftSide</span><span class="w"> </span><span class="o">=</span><span class="w"> </span><span class="nx">OptimalMatrixMultiplication</span><span class="p">(</span><span class="nx">s</span><span class="p">,</span><span class="w"> </span><span class="nx">i</span><span class="p">,</span><span class="w"> </span><span class="nx">s</span><span class="p">[</span><span class="nx">i</span><span class="p">,</span><span class="w"> </span><span class="nx">j</span><span class="p">])</span>
<span class="w">         </span><span class="nx">RightSide</span><span class="w"> </span><span class="o">=</span><span class="w"> </span><span class="nx">OptimalMatrixMultiplication</span><span class="p">(</span><span class="nx">s</span><span class="p">,</span><span class="w"> </span><span class="nx">s</span><span class="p">[</span><span class="nx">i</span><span class="p">,</span><span class="w"> </span><span class="nx">j</span><span class="p">]</span><span class="w"> </span><span class="o">+</span><span class="w"> </span><span class="mf">1</span><span class="p">,</span><span class="w"> </span><span class="nx">j</span><span class="p">)</span>
<span class="w">         </span><span class="k">return</span><span class="w"> </span><span class="nx">MatrixMultiply</span><span class="p">(</span><span class="nx">LeftSide</span><span class="p">,</span><span class="w"> </span><span class="nx">RightSide</span><span class="p">)</span><span class="w"> </span>
<span class="w">      </span><span class="k">else</span><span class="w"> </span><span class="k">if</span><span class="w"> </span><span class="nx">i</span><span class="w"> </span><span class="o">=</span><span class="w"> </span><span class="nx">j</span>
<span class="w">         </span><span class="k">return</span><span class="w"> </span><span class="nx">Ai</span><span class="w">   </span><span class="c1">// matrix at position i</span>
<span class="w">      </span><span class="k">else</span><span class="w"> </span>
<span class="w">         </span><span class="nx">print</span><span class="w"> </span><span class="s2">&quot;error, i &lt;= j must hold&quot;</span>

<span class="w">    </span><span class="kd">function</span><span class="w"> </span><span class="nx">MatrixMultiply</span><span class="p">(</span><span class="nx">A</span><span class="p">,</span><span class="w"> </span><span class="nx">B</span><span class="p">)</span><span class="w">    </span><span class="c1">// function that multiplies two matrices</span>
<span class="w">      </span><span class="k">if</span><span class="w"> </span><span class="nx">columns</span><span class="p">(</span><span class="nx">A</span><span class="p">)</span><span class="w"> </span><span class="o">=</span><span class="w"> </span><span class="nx">rows</span><span class="p">(</span><span class="nx">B</span><span class="p">)</span><span class="w"> </span>
<span class="w">         </span><span class="k">for</span><span class="w"> </span><span class="nx">i</span><span class="w"> </span><span class="o">=</span><span class="w"> </span><span class="mf">1</span><span class="p">,</span><span class="w"> </span><span class="nx">rows</span><span class="p">(</span><span class="nx">A</span><span class="p">)</span>
<span class="w">            </span><span class="k">for</span><span class="w"> </span><span class="nx">j</span><span class="w"> </span><span class="o">=</span><span class="w"> </span><span class="mf">1</span><span class="p">,</span><span class="w"> </span><span class="nx">columns</span><span class="p">(</span><span class="nx">B</span><span class="p">)</span>
<span class="w">               </span><span class="nx">C</span><span class="p">[</span><span class="nx">i</span><span class="p">,</span><span class="w"> </span><span class="nx">j</span><span class="p">]</span><span class="w"> </span><span class="o">=</span><span class="w"> </span><span class="mf">0</span>
<span class="w">               </span><span class="k">for</span><span class="w"> </span><span class="nx">k</span><span class="w"> </span><span class="o">=</span><span class="w"> </span><span class="mf">1</span><span class="p">,</span><span class="w"> </span><span class="nx">columns</span><span class="p">(</span><span class="nx">A</span><span class="p">)</span>
<span class="w">                   </span><span class="nx">C</span><span class="p">[</span><span class="nx">i</span><span class="p">,</span><span class="w"> </span><span class="nx">j</span><span class="p">]</span><span class="w"> </span><span class="o">=</span><span class="w"> </span><span class="nx">C</span><span class="p">[</span><span class="nx">i</span><span class="p">,</span><span class="w"> </span><span class="nx">j</span><span class="p">]</span><span class="w"> </span><span class="o">+</span><span class="w"> </span><span class="nx">A</span><span class="p">[</span><span class="nx">i</span><span class="p">,</span><span class="w"> </span><span class="nx">k</span><span class="p">]</span><span class="o">*</span><span class="nx">B</span><span class="p">[</span><span class="nx">k</span><span class="p">,</span><span class="w"> </span><span class="nx">j</span><span class="p">]</span><span class="w"> </span>
<span class="w">               </span><span class="k">return</span><span class="w"> </span><span class="nx">C</span><span class="w"> </span>
<span class="w">      </span><span class="k">else</span><span class="w"> </span>
<span class="w">          </span><span class="nx">print</span><span class="w"> </span><span class="s2">&quot;error, incompatible dimensions.&quot;</span>
</pre></div>
<div class="mw-heading mw-heading2"><h2 id="History_of_the_name">History of the name</h2></div>
<p>The term <i>dynamic programming</i> was originally used in the 1940s by <a href="/wiki/Richard_Bellman" class="mw-redirect" title="Richard Bellman">Richard Bellman</a> to describe the process of solving problems where one needs to find the best decisions one after another.  By 1953, he refined this to the modern meaning, referring specifically to nesting smaller decision problems inside larger decisions,<sup id="cite_ref-17" class="reference"><a href="#cite_note-17"><span class="cite-bracket">&#91;</span>17<span class="cite-bracket">&#93;</span></a></sup>  and the field was thereafter recognized by the <a href="/wiki/IEEE" class="mw-redirect" title="IEEE">IEEE</a> as a <a href="/wiki/Systems_analysis" title="Systems analysis">systems analysis</a> and <a href="/wiki/Engineering" title="Engineering">engineering</a> topic.  Bellman's contribution is remembered in the name of the <a href="/wiki/Bellman_equation" title="Bellman equation">Bellman equation</a>, a central result of dynamic programming which restates an optimization problem in <a href="/wiki/Recursion_(computer_science)" title="Recursion (computer science)">recursive</a> form.
</p><p>Bellman explains the reasoning behind the term <i>dynamic programming</i> in his autobiography, <i>Eye of the Hurricane: An Autobiography</i>:
</p>
<link rel="mw-deduplicated-inline-style" href="mw-data:TemplateStyles:r1244412712" /><blockquote class="templatequote"><p>I spent the Fall quarter (of 1950) at <a href="/wiki/RAND_Corporation" title="RAND Corporation">RAND</a>. My first task was to find a name for multistage decision processes. An interesting question is, "Where did the name, dynamic programming, come from?" The 1950s were not good years for mathematical research. We had a very interesting gentleman in Washington named <a href="/wiki/Charles_Erwin_Wilson" title="Charles Erwin Wilson">Wilson</a>. He was Secretary of Defense, and he actually had a pathological fear and hatred of the word "research". I'm not using the term lightly; I'm using it precisely. His face would suffuse, he would turn red, and he would get violent if people used the term research in his presence. You can imagine how he felt, then, about the term mathematical. The RAND Corporation was employed by the Air Force, and the Air Force had Wilson as its boss, essentially. Hence, I felt I had to do something to shield Wilson and the Air Force from the fact that I was really doing mathematics inside the RAND Corporation. What title, what name, could I choose? In the first place I was interested in planning, in decision making, in thinking. But planning, is not a good word for various reasons. I decided therefore to use the word "programming". I wanted to get across the idea that this was dynamic, this was multistage, this was time-varying. I thought, let's kill two birds with one stone. Let's take a word that has an absolutely precise meaning, namely dynamic, in the classical physical sense. It also has a very interesting property as an adjective, and that is it's impossible to use the word dynamic in a pejorative sense. Try thinking of some combination that will possibly give it a pejorative meaning. It's impossible. Thus, I thought dynamic programming was a good name. It was something not even a Congressman could object to. So I used it as an umbrella for my activities.</p></blockquote><div class="templatequotecite"><p style="display: inline; padding-left: 2.3em;">—&#8202;Richard Bellman, <i>Eye of the Hurricane: An Autobiography</i> (1984, page 159)</p></div>
<p>The word <i>dynamic</i> was chosen by Bellman to capture the time-varying aspect of the problems, and because it sounded impressive.<sup id="cite_ref-Eddy_12-1" class="reference"><a href="#cite_note-Eddy-12"><span class="cite-bracket">&#91;</span>12<span class="cite-bracket">&#93;</span></a></sup> The word <i>programming</i> referred to the use of the method to find an optimal <i>program</i>, in the sense of a military schedule for training or logistics.  This usage is the same as that in the phrases <i><a href="/wiki/Linear_programming" title="Linear programming">linear programming</a></i> and <i>mathematical programming</i>, a synonym for <a href="/wiki/Mathematical_optimization" title="Mathematical optimization">mathematical optimization</a>.<sup id="cite_ref-18" class="reference"><a href="#cite_note-18"><span class="cite-bracket">&#91;</span>18<span class="cite-bracket">&#93;</span></a></sup>
</p><p>The above explanation of the origin of the term may be inaccurate: According to Russell and Norvig, the above story "cannot be strictly true, because his first paper using the term (Bellman, 1952) appeared before Wilson became Secretary of Defense in 1953."<sup id="cite_ref-19" class="reference"><a href="#cite_note-19"><span class="cite-bracket">&#91;</span>19<span class="cite-bracket">&#93;</span></a></sup> Also, <a href="/wiki/Harold_J._Kushner" title="Harold J. Kushner">Harold J. Kushner</a> stated in a speech that, "On the other hand, when I asked [Bellman] the same question, he replied that he was trying to upstage <a href="/wiki/George_Dantzig" title="George Dantzig">Dantzig's</a> linear programming by adding dynamic. Perhaps both motivations were true."<sup id="cite_ref-20" class="reference"><a href="#cite_note-20"><span class="cite-bracket">&#91;</span>20<span class="cite-bracket">&#93;</span></a></sup>
</p>
<div class="mw-heading mw-heading2"><h2 id="See_also">See also</h2></div>
<style data-mw-deduplicate="TemplateStyles:r1266661725">.mw-parser-output .portalbox{padding:0;margin:0.5em 0;display:table;box-sizing:border-box;max-width:175px;list-style:none}.mw-parser-output .portalborder{border:1px solid var(--border-color-base,#a2a9b1);padding:0.1em;background:var(--background-color-neutral-subtle,#f8f9fa)}.mw-parser-output .portalbox-entry{display:table-row;font-size:85%;line-height:110%;height:1.9em;font-style:italic;font-weight:bold}.mw-parser-output .portalbox-image{display:table-cell;padding:0.2em;vertical-align:middle;text-align:center}.mw-parser-output .portalbox-link{display:table-cell;padding:0.2em 0.2em 0.2em 0.3em;vertical-align:middle}@media(min-width:720px){.mw-parser-output .portalleft{margin:0.5em 1em 0.5em 0}.mw-parser-output .portalright{clear:right;float:right;margin:0.5em 0 0.5em 1em}}</style><ul role="navigation" aria-label="Portals" class="noprint portalbox portalborder portalright">
<li class="portalbox-entry"><span class="portalbox-image"><span class="noviewer" typeof="mw:File"><span><img alt="diagram" src="//upload.wikimedia.org/wikipedia/commons/thumb/0/00/Complex-adaptive-system.jpg/40px-Complex-adaptive-system.jpg" decoding="async" width="32" height="23" class="mw-file-element" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/0/00/Complex-adaptive-system.jpg/60px-Complex-adaptive-system.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/0/00/Complex-adaptive-system.jpg/120px-Complex-adaptive-system.jpg 2x" data-file-width="2100" data-file-height="1500" /></span></span></span><span class="portalbox-link"><a href="/wiki/Portal:Systems_science" title="Portal:Systems science">Systems science portal</a></span></li><li class="portalbox-entry"><span class="portalbox-image"><span class="skin-invert-image noviewer" typeof="mw:File"><a href="/wiki/File:Nuvola_apps_edu_mathematics_blue-p.svg" class="mw-file-description"><img alt="icon" src="//upload.wikimedia.org/wikipedia/commons/thumb/3/3e/Nuvola_apps_edu_mathematics_blue-p.svg/40px-Nuvola_apps_edu_mathematics_blue-p.svg.png" decoding="async" width="28" height="28" class="mw-file-element" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/3/3e/Nuvola_apps_edu_mathematics_blue-p.svg/60px-Nuvola_apps_edu_mathematics_blue-p.svg.png 1.5x" data-file-width="128" data-file-height="128" /></a></span></span><span class="portalbox-link"><a href="/wiki/Portal:Mathematics" title="Portal:Mathematics">Mathematics portal</a></span></li></ul>
<style data-mw-deduplicate="TemplateStyles:r1184024115">.mw-parser-output .div-col{margin-top:0.3em;column-width:30em}.mw-parser-output .div-col-small{font-size:90%}.mw-parser-output .div-col-rules{column-rule:1px solid #aaa}.mw-parser-output .div-col dl,.mw-parser-output .div-col ol,.mw-parser-output .div-col ul{margin-top:0}.mw-parser-output .div-col li,.mw-parser-output .div-col dd{page-break-inside:avoid;break-inside:avoid-column}</style><div class="div-col" style="column-width: 30em;">
<ul><li><a href="/wiki/Convexity_in_economics" title="Convexity in economics">Convexity in economics</a>&#160;– Significant topic in economics</li>
<li><a href="/wiki/Greedy_algorithm" title="Greedy algorithm">Greedy algorithm</a>&#160;– Sequence of locally optimal choices</li>
<li><a href="/wiki/Non-convexity_(economics)" title="Non-convexity (economics)">Non-convexity (economics)</a>&#160;– Violations of the convexity assumptions of elementary economics</li>
<li><a href="/wiki/Stochastic_programming" title="Stochastic programming">Stochastic programming</a>&#160;– Framework for modeling optimization problems that involve uncertainty</li>
<li><a href="/wiki/Stochastic_dynamic_programming" title="Stochastic dynamic programming">Stochastic dynamic programming</a>&#160;– 1957 technique for modelling problems of decision making under uncertainty</li>
<li><a href="/wiki/Reinforcement_learning" title="Reinforcement learning">Reinforcement learning</a>&#160;– Field of machine learning</li></ul>
</div>
<div class="mw-heading mw-heading2"><h2 id="References">References</h2></div>
<style data-mw-deduplicate="TemplateStyles:r1239543626">.mw-parser-output .reflist{margin-bottom:0.5em;list-style-type:decimal}@media screen{.mw-parser-output .reflist{font-size:90%}}.mw-parser-output .reflist .references{font-size:100%;margin-bottom:0;list-style-type:inherit}.mw-parser-output .reflist-columns-2{column-width:30em}.mw-parser-output .reflist-columns-3{column-width:25em}.mw-parser-output .reflist-columns{margin-top:0.3em}.mw-parser-output .reflist-columns ol{margin-top:0}.mw-parser-output .reflist-columns li{page-break-inside:avoid;break-inside:avoid-column}.mw-parser-output .reflist-upper-alpha{list-style-type:upper-alpha}.mw-parser-output .reflist-upper-roman{list-style-type:upper-roman}.mw-parser-output .reflist-lower-alpha{list-style-type:lower-alpha}.mw-parser-output .reflist-lower-greek{list-style-type:lower-greek}.mw-parser-output .reflist-lower-roman{list-style-type:lower-roman}</style><div class="reflist">
<div class="mw-references-wrap mw-references-columns"><ol class="references">
<li id="cite_note-:0-1"><span class="mw-cite-backlink">^ <a href="#cite_ref-:0_1-0"><sup><i><b>a</b></i></sup></a> <a href="#cite_ref-:0_1-1"><sup><i><b>b</b></i></sup></a></span> <span class="reference-text">Cormen, T. H.; Leiserson, C. E.; Rivest, R. L.; Stein, C. (2001), Introduction to Algorithms (2nd ed.), MIT Press &amp; McGraw–Hill, <style data-mw-deduplicate="TemplateStyles:r1238218222">.mw-parser-output cite.citation{font-style:inherit;word-wrap:break-word}.mw-parser-output .citation q{quotes:"\"""\"""'""'"}.mw-parser-output .citation:target{background-color:rgba(0,127,255,0.133)}.mw-parser-output .id-lock-free.id-lock-free a{background:url("//upload.wikimedia.org/wikipedia/commons/6/65/Lock-green.svg")right 0.1em center/9px no-repeat}.mw-parser-output .id-lock-limited.id-lock-limited a,.mw-parser-output .id-lock-registration.id-lock-registration a{background:url("//upload.wikimedia.org/wikipedia/commons/d/d6/Lock-gray-alt-2.svg")right 0.1em center/9px no-repeat}.mw-parser-output .id-lock-subscription.id-lock-subscription a{background:url("//upload.wikimedia.org/wikipedia/commons/a/aa/Lock-red-alt-2.svg")right 0.1em center/9px no-repeat}.mw-parser-output .cs1-ws-icon a{background:url("//upload.wikimedia.org/wikipedia/commons/4/4c/Wikisource-logo.svg")right 0.1em center/12px no-repeat}body:not(.skin-timeless):not(.skin-minerva) .mw-parser-output .id-lock-free a,body:not(.skin-timeless):not(.skin-minerva) .mw-parser-output .id-lock-limited a,body:not(.skin-timeless):not(.skin-minerva) .mw-parser-output .id-lock-registration a,body:not(.skin-timeless):not(.skin-minerva) .mw-parser-output .id-lock-subscription a,body:not(.skin-timeless):not(.skin-minerva) .mw-parser-output .cs1-ws-icon a{background-size:contain;padding:0 1em 0 0}.mw-parser-output .cs1-code{color:inherit;background:inherit;border:none;padding:inherit}.mw-parser-output .cs1-hidden-error{display:none;color:var(--color-error,#d33)}.mw-parser-output .cs1-visible-error{color:var(--color-error,#d33)}.mw-parser-output .cs1-maint{display:none;color:#085;margin-left:0.3em}.mw-parser-output .cs1-kern-left{padding-left:0.2em}.mw-parser-output .cs1-kern-right{padding-right:0.2em}.mw-parser-output .citation .mw-selflink{font-weight:inherit}@media screen{.mw-parser-output .cs1-format{font-size:95%}html.skin-theme-clientpref-night .mw-parser-output .cs1-maint{color:#18911f}}@media screen and (prefers-color-scheme:dark){html.skin-theme-clientpref-os .mw-parser-output .cs1-maint{color:#18911f}}</style><a href="/wiki/ISBN_(identifier)" class="mw-redirect" title="ISBN (identifier)">ISBN</a>&#160;<a href="/wiki/Special:BookSources/0-262-03293-7" title="Special:BookSources/0-262-03293-7"><bdi>0-262-03293-7</bdi></a> . pp. 344.</span>
</li>
<li id="cite_note-2"><span class="mw-cite-backlink"><b><a href="#cite_ref-2">^</a></b></span> <span class="reference-text"><link rel="mw-deduplicated-inline-style" href="mw-data:TemplateStyles:r1238218222" /><cite id="CITEREFKamienSchwartz1991" class="citation book cs1"><a href="/wiki/Morton_Kamien" title="Morton Kamien">Kamien, M. I.</a>; <a href="/wiki/Nancy_Schwartz" class="mw-redirect" title="Nancy Schwartz">Schwartz, N. L.</a> (1991). <a rel="nofollow" class="external text" href="https://books.google.com/books?id=0IoGUn8wjDQC&amp;pg=PA261"><i>Dynamic Optimization: The Calculus of Variations and Optimal Control in Economics and Management</i></a> (Second&#160;ed.). New York: Elsevier. p.&#160;261. <a href="/wiki/ISBN_(identifier)" class="mw-redirect" title="ISBN (identifier)">ISBN</a>&#160;<a href="/wiki/Special:BookSources/978-0-444-01609-6" title="Special:BookSources/978-0-444-01609-6"><bdi>978-0-444-01609-6</bdi></a>.</cite><span title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Abook&amp;rft.genre=book&amp;rft.btitle=Dynamic+Optimization%3A+The+Calculus+of+Variations+and+Optimal+Control+in+Economics+and+Management&amp;rft.place=New+York&amp;rft.pages=261&amp;rft.edition=Second&amp;rft.pub=Elsevier&amp;rft.date=1991&amp;rft.isbn=978-0-444-01609-6&amp;rft.aulast=Kamien&amp;rft.aufirst=M.+I.&amp;rft.au=Schwartz%2C+N.+L.&amp;rft_id=https%3A%2F%2Fbooks.google.com%2Fbooks%3Fid%3D0IoGUn8wjDQC%26pg%3DPA261&amp;rfr_id=info%3Asid%2Fen.wikipedia.org%3ADynamic+programming" class="Z3988"></span></span>
</li>
<li id="cite_note-3"><span class="mw-cite-backlink"><b><a href="#cite_ref-3">^</a></b></span> <span class="reference-text"><link rel="mw-deduplicated-inline-style" href="mw-data:TemplateStyles:r1238218222" /><cite id="CITEREFKirk1970" class="citation book cs1">Kirk, Donald E. (1970). <a rel="nofollow" class="external text" href="https://books.google.com/books?id=fCh2SAtWIdwC&amp;pg=PA94"><i>Optimal Control Theory: An Introduction</i></a>. Englewood Cliffs, NJ: Prentice-Hall. pp.&#160;<span class="nowrap">94–</span>95. <a href="/wiki/ISBN_(identifier)" class="mw-redirect" title="ISBN (identifier)">ISBN</a>&#160;<a href="/wiki/Special:BookSources/978-0-13-638098-6" title="Special:BookSources/978-0-13-638098-6"><bdi>978-0-13-638098-6</bdi></a>.</cite><span title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Abook&amp;rft.genre=book&amp;rft.btitle=Optimal+Control+Theory%3A+An+Introduction&amp;rft.place=Englewood+Cliffs%2C+NJ&amp;rft.pages=94-95&amp;rft.pub=Prentice-Hall&amp;rft.date=1970&amp;rft.isbn=978-0-13-638098-6&amp;rft.aulast=Kirk&amp;rft.aufirst=Donald+E.&amp;rft_id=https%3A%2F%2Fbooks.google.com%2Fbooks%3Fid%3DfCh2SAtWIdwC%26pg%3DPA94&amp;rfr_id=info%3Asid%2Fen.wikipedia.org%3ADynamic+programming" class="Z3988"></span></span>
</li>
<li id="cite_note-4"><span class="mw-cite-backlink"><b><a href="#cite_ref-4">^</a></b></span> <span class="reference-text"><link rel="mw-deduplicated-inline-style" href="mw-data:TemplateStyles:r1238218222" /><cite class="citation web cs1"><a rel="nofollow" class="external text" href="https://jeffe.cs.illinois.edu/teaching/algorithms/">"Algorithms by Jeff Erickson"</a>. <i>jeffe.cs.illinois.edu</i><span class="reference-accessdate">. Retrieved <span class="nowrap">2024-12-06</span></span>.</cite><span title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Ajournal&amp;rft.genre=unknown&amp;rft.jtitle=jeffe.cs.illinois.edu&amp;rft.atitle=Algorithms+by+Jeff+Erickson&amp;rft_id=https%3A%2F%2Fjeffe.cs.illinois.edu%2Fteaching%2Falgorithms%2F&amp;rfr_id=info%3Asid%2Fen.wikipedia.org%3ADynamic+programming" class="Z3988"></span></span>
</li>
<li id="cite_note-5"><span class="mw-cite-backlink"><b><a href="#cite_ref-5">^</a></b></span> <span class="reference-text"><link rel="mw-deduplicated-inline-style" href="mw-data:TemplateStyles:r1238218222" /><cite class="citation web cs1"><a rel="nofollow" class="external text" href="http://www.jsoftware.com/help/dictionary/dmcapdot.htm">"M. Memo"</a>. <i>J Vocabulary</i>. J Software<span class="reference-accessdate">. Retrieved <span class="nowrap">28 October</span> 2011</span>.</cite><span title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Ajournal&amp;rft.genre=unknown&amp;rft.jtitle=J+Vocabulary&amp;rft.atitle=M.+Memo&amp;rft_id=http%3A%2F%2Fwww.jsoftware.com%2Fhelp%2Fdictionary%2Fdmcapdot.htm&amp;rfr_id=info%3Asid%2Fen.wikipedia.org%3ADynamic+programming" class="Z3988"></span></span>
</li>
<li id="cite_note-6"><span class="mw-cite-backlink"><b><a href="#cite_ref-6">^</a></b></span> <span class="reference-text"><link rel="mw-deduplicated-inline-style" href="mw-data:TemplateStyles:r1238218222" /><cite id="CITEREFDelisi1974" class="citation cs2">Delisi, Charles (July 1974), "Cooperative phenomena in homopolymers: An alternative formulation of the partition function", <i>Biopolymers</i>, <b>13</b> (7): <span class="nowrap">1511–</span>1512, <a href="/wiki/Doi_(identifier)" class="mw-redirect" title="Doi (identifier)">doi</a>:<a rel="nofollow" class="external text" href="https://doi.org/10.1002%2Fbip.1974.360130719">10.1002/bip.1974.360130719</a></cite><span title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Ajournal&amp;rft.genre=article&amp;rft.jtitle=Biopolymers&amp;rft.atitle=Cooperative+phenomena+in+homopolymers%3A+An+alternative+formulation+of+the+partition+function&amp;rft.volume=13&amp;rft.issue=7&amp;rft.pages=1511-1512&amp;rft.date=1974-07&amp;rft_id=info%3Adoi%2F10.1002%2Fbip.1974.360130719&amp;rft.aulast=Delisi&amp;rft.aufirst=Charles&amp;rfr_id=info%3Asid%2Fen.wikipedia.org%3ADynamic+programming" class="Z3988"></span></span>
</li>
<li id="cite_note-7"><span class="mw-cite-backlink"><b><a href="#cite_ref-7">^</a></b></span> <span class="reference-text"><link rel="mw-deduplicated-inline-style" href="mw-data:TemplateStyles:r1238218222" /><cite id="CITEREFGurskiĭZasedatelev1978" class="citation cs2">Gurskiĭ, G. V.; Zasedatelev, A. S. (September 1978), "Precise relationships for calculating the binding of regulatory proteins and other lattice ligands in double-stranded polynucleotides", <i>Biofizika</i>, <b>23</b> (5): <span class="nowrap">932–</span>946, <a href="/wiki/PMID_(identifier)" class="mw-redirect" title="PMID (identifier)">PMID</a>&#160;<a rel="nofollow" class="external text" href="https://pubmed.ncbi.nlm.nih.gov/698271">698271</a></cite><span title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Ajournal&amp;rft.genre=article&amp;rft.jtitle=Biofizika&amp;rft.atitle=Precise+relationships+for+calculating+the+binding+of+regulatory+proteins+and+other+lattice+ligands+in+double-stranded+polynucleotides&amp;rft.volume=23&amp;rft.issue=5&amp;rft.pages=932-946&amp;rft.date=1978-09&amp;rft_id=info%3Apmid%2F698271&amp;rft.aulast=Gurski%C4%AD&amp;rft.aufirst=G.+V.&amp;rft.au=Zasedatelev%2C+A.+S.&amp;rfr_id=info%3Asid%2Fen.wikipedia.org%3ADynamic+programming" class="Z3988"></span></span>
</li>
<li id="cite_note-sniedovich_06-8"><span class="mw-cite-backlink"><b><a href="#cite_ref-sniedovich_06_8-0">^</a></b></span> <span class="reference-text"><link rel="mw-deduplicated-inline-style" href="mw-data:TemplateStyles:r1238218222" /><cite id="CITEREFSniedovich2006" class="citation cs2">Sniedovich, M. (2006), <a rel="nofollow" class="external text" href="http://matwbn.icm.edu.pl/ksiazki/cc/cc35/cc3536.pdf">"Dijkstra's algorithm revisited: the dynamic programming connexion"</a> <span class="cs1-format">(PDF)</span>, <i>Journal of Control and Cybernetics</i>, <b>35</b> (3): <span class="nowrap">599–</span>620.</cite><span title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Ajournal&amp;rft.genre=article&amp;rft.jtitle=Journal+of+Control+and+Cybernetics&amp;rft.atitle=Dijkstra%27s+algorithm+revisited%3A+the+dynamic+programming+connexion&amp;rft.volume=35&amp;rft.issue=3&amp;rft.pages=599-620&amp;rft.date=2006&amp;rft.aulast=Sniedovich&amp;rft.aufirst=M.&amp;rft_id=http%3A%2F%2Fmatwbn.icm.edu.pl%2Fksiazki%2Fcc%2Fcc35%2Fcc3536.pdf&amp;rfr_id=info%3Asid%2Fen.wikipedia.org%3ADynamic+programming" class="Z3988"></span> <a rel="nofollow" class="external text" href="http://www.ifors.ms.unimelb.edu.au/tutorial/dijkstra_new/index.html">Online version of the paper with interactive computational modules.</a></span>
</li>
<li id="cite_note-denardo_03-9"><span class="mw-cite-backlink"><b><a href="#cite_ref-denardo_03_9-0">^</a></b></span> <span class="reference-text"><link rel="mw-deduplicated-inline-style" href="mw-data:TemplateStyles:r1238218222" /><cite id="CITEREFDenardo2003" class="citation cs2">Denardo, E.V. (2003), <i>Dynamic Programming: Models and Applications</i>, Mineola, NY: <a href="/wiki/Dover_Publications" title="Dover Publications">Dover Publications</a>, <a href="/wiki/ISBN_(identifier)" class="mw-redirect" title="ISBN (identifier)">ISBN</a>&#160;<a href="/wiki/Special:BookSources/978-0-486-42810-9" title="Special:BookSources/978-0-486-42810-9"><bdi>978-0-486-42810-9</bdi></a></cite><span title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Abook&amp;rft.genre=book&amp;rft.btitle=Dynamic+Programming%3A+Models+and+Applications&amp;rft.place=Mineola%2C+NY&amp;rft.pub=Dover+Publications&amp;rft.date=2003&amp;rft.isbn=978-0-486-42810-9&amp;rft.aulast=Denardo&amp;rft.aufirst=E.V.&amp;rfr_id=info%3Asid%2Fen.wikipedia.org%3ADynamic+programming" class="Z3988"></span></span>
</li>
<li id="cite_note-sniedovich_10-10"><span class="mw-cite-backlink"><b><a href="#cite_ref-sniedovich_10_10-0">^</a></b></span> <span class="reference-text"><link rel="mw-deduplicated-inline-style" href="mw-data:TemplateStyles:r1238218222" /><cite id="CITEREFSniedovich2010" class="citation cs2">Sniedovich, M. (2010), <i>Dynamic Programming: Foundations and Principles</i>, <a href="/wiki/Taylor_%26_Francis" title="Taylor &amp; Francis">Taylor &amp; Francis</a>, <a href="/wiki/ISBN_(identifier)" class="mw-redirect" title="ISBN (identifier)">ISBN</a>&#160;<a href="/wiki/Special:BookSources/978-0-8247-4099-3" title="Special:BookSources/978-0-8247-4099-3"><bdi>978-0-8247-4099-3</bdi></a></cite><span title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Abook&amp;rft.genre=book&amp;rft.btitle=Dynamic+Programming%3A+Foundations+and+Principles&amp;rft.pub=Taylor+%26+Francis&amp;rft.date=2010&amp;rft.isbn=978-0-8247-4099-3&amp;rft.aulast=Sniedovich&amp;rft.aufirst=M.&amp;rfr_id=info%3Asid%2Fen.wikipedia.org%3ADynamic+programming" class="Z3988"></span></span>
</li>
<li id="cite_note-11"><span class="mw-cite-backlink"><b><a href="#cite_ref-11">^</a></b></span> <span class="reference-text"><link rel="mw-deduplicated-inline-style" href="mw-data:TemplateStyles:r1238218222" /><cite id="CITEREFDijkstra1959" class="citation journal cs1"><a href="/wiki/Edsger_W._Dijkstra" title="Edsger W. Dijkstra">Dijkstra, E. W.</a> (December 1959). "A note on two problems in connexion with graphs". <i>Numerische Mathematik</i>. <b>1</b> (1): <span class="nowrap">269–</span>271. <a href="/wiki/Doi_(identifier)" class="mw-redirect" title="Doi (identifier)">doi</a>:<a rel="nofollow" class="external text" href="https://doi.org/10.1007%2FBF01386390">10.1007/BF01386390</a>.</cite><span title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Ajournal&amp;rft.genre=article&amp;rft.jtitle=Numerische+Mathematik&amp;rft.atitle=A+note+on+two+problems+in+connexion+with+graphs&amp;rft.volume=1&amp;rft.issue=1&amp;rft.pages=269-271&amp;rft.date=1959-12&amp;rft_id=info%3Adoi%2F10.1007%2FBF01386390&amp;rft.aulast=Dijkstra&amp;rft.aufirst=E.+W.&amp;rfr_id=info%3Asid%2Fen.wikipedia.org%3ADynamic+programming" class="Z3988"></span></span>
</li>
<li id="cite_note-Eddy-12"><span class="mw-cite-backlink">^ <a href="#cite_ref-Eddy_12-0"><sup><i><b>a</b></i></sup></a> <a href="#cite_ref-Eddy_12-1"><sup><i><b>b</b></i></sup></a></span> <span class="reference-text"><link rel="mw-deduplicated-inline-style" href="mw-data:TemplateStyles:r1238218222" /><cite id="CITEREFEddy2004" class="citation journal cs1"><a href="/wiki/Sean_Eddy" title="Sean Eddy">Eddy, S. R.</a> (2004). "What is Dynamic Programming?". <i>Nature Biotechnology</i>. <b>22</b> (7): <span class="nowrap">909–</span>910. <a href="/wiki/Doi_(identifier)" class="mw-redirect" title="Doi (identifier)">doi</a>:<a rel="nofollow" class="external text" href="https://doi.org/10.1038%2Fnbt0704-909">10.1038/nbt0704-909</a>. <a href="/wiki/PMID_(identifier)" class="mw-redirect" title="PMID (identifier)">PMID</a>&#160;<a rel="nofollow" class="external text" href="https://pubmed.ncbi.nlm.nih.gov/15229554">15229554</a>. <a href="/wiki/S2CID_(identifier)" class="mw-redirect" title="S2CID (identifier)">S2CID</a>&#160;<a rel="nofollow" class="external text" href="https://api.semanticscholar.org/CorpusID:5352062">5352062</a>.</cite><span title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Ajournal&amp;rft.genre=article&amp;rft.jtitle=Nature+Biotechnology&amp;rft.atitle=What+is+Dynamic+Programming%3F&amp;rft.volume=22&amp;rft.issue=7&amp;rft.pages=909-910&amp;rft.date=2004&amp;rft_id=https%3A%2F%2Fapi.semanticscholar.org%2FCorpusID%3A5352062%23id-name%3DS2CID&amp;rft_id=info%3Apmid%2F15229554&amp;rft_id=info%3Adoi%2F10.1038%2Fnbt0704-909&amp;rft.aulast=Eddy&amp;rft.aufirst=S.+R.&amp;rfr_id=info%3Asid%2Fen.wikipedia.org%3ADynamic+programming" class="Z3988"></span></span>
</li>
<li id="cite_note-13"><span class="mw-cite-backlink"><b><a href="#cite_ref-13">^</a></b></span> <span class="reference-text"><link rel="mw-deduplicated-inline-style" href="mw-data:TemplateStyles:r1238218222" /><cite id="CITEREFMoshe_Sniedovich2002" class="citation cs2">Moshe Sniedovich (2002), "OR/MS Games: 2. The Towers of Hanoi Problem", <i>INFORMS Transactions on Education</i>, <b>3</b> (1): <span class="nowrap">34–</span>51, <a href="/wiki/Doi_(identifier)" class="mw-redirect" title="Doi (identifier)">doi</a>:<span class="id-lock-free" title="Freely accessible"><a rel="nofollow" class="external text" href="https://doi.org/10.1287%2Fited.3.1.45">10.1287/ited.3.1.45</a></span>.</cite><span title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Ajournal&amp;rft.genre=article&amp;rft.jtitle=INFORMS+Transactions+on+Education&amp;rft.atitle=OR%2FMS+Games%3A+2.+The+Towers+of+Hanoi+Problem&amp;rft.volume=3&amp;rft.issue=1&amp;rft.pages=34-51&amp;rft.date=2002&amp;rft_id=info%3Adoi%2F10.1287%2Fited.3.1.45&amp;rft.au=Moshe+Sniedovich&amp;rfr_id=info%3Asid%2Fen.wikipedia.org%3ADynamic+programming" class="Z3988"></span></span>
</li>
<li id="cite_note-14"><span class="mw-cite-backlink"><b><a href="#cite_ref-14">^</a></b></span> <span class="reference-text">Konhauser J.D.E., Velleman, D., and Wagon, S. (1996). <a rel="nofollow" class="external text" href="https://books.google.com/books?id=ElSi5V5uS2MC">Which way did the Bicycle Go?</a> Dolciani Mathematical Expositions – No 18.  <a href="/wiki/The_Mathematical_Association_of_America" class="mw-redirect" title="The Mathematical Association of America">The Mathematical Association of America</a>.</span>
</li>
<li id="cite_note-sniedovich_03-15"><span class="mw-cite-backlink"><b><a href="#cite_ref-sniedovich_03_15-0">^</a></b></span> <span class="reference-text"><link rel="mw-deduplicated-inline-style" href="mw-data:TemplateStyles:r1238218222" /><cite id="CITEREFSniedovich2003" class="citation journal cs1">Sniedovich, Moshe (2003). <a rel="nofollow" class="external text" href="https://doi.org/10.1287%2Fited.4.1.48">"OR/MS Games: 4. The Joy of Egg-Dropping in Braunschweig and Hong Kong"</a>. <i>INFORMS Transactions on Education</i>. <b>4</b> (1): <span class="nowrap">48–</span>64. <a href="/wiki/Doi_(identifier)" class="mw-redirect" title="Doi (identifier)">doi</a>:<span class="id-lock-free" title="Freely accessible"><a rel="nofollow" class="external text" href="https://doi.org/10.1287%2Fited.4.1.48">10.1287/ited.4.1.48</a></span>.</cite><span title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Ajournal&amp;rft.genre=article&amp;rft.jtitle=INFORMS+Transactions+on+Education&amp;rft.atitle=OR%2FMS+Games%3A+4.+The+Joy+of+Egg-Dropping+in+Braunschweig+and+Hong+Kong&amp;rft.volume=4&amp;rft.issue=1&amp;rft.pages=48-64&amp;rft.date=2003&amp;rft_id=info%3Adoi%2F10.1287%2Fited.4.1.48&amp;rft.aulast=Sniedovich&amp;rft.aufirst=Moshe&amp;rft_id=https%3A%2F%2Fdoi.org%2F10.1287%252Fited.4.1.48&amp;rfr_id=info%3Asid%2Fen.wikipedia.org%3ADynamic+programming" class="Z3988"></span></span>
</li>
<li id="cite_note-16"><span class="mw-cite-backlink"><b><a href="#cite_ref-16">^</a></b></span> <span class="reference-text"><link rel="mw-deduplicated-inline-style" href="mw-data:TemplateStyles:r1238218222" /><cite id="CITEREFDean_Connable_Wills" class="citation cs2">Dean Connable Wills, <a rel="nofollow" class="external text" href="https://ir.library.oregonstate.edu/xmlui/handle/1957/11929?show=full"><i>Connections between combinatorics of permutations and algorithms and geometry</i></a></cite><span title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Abook&amp;rft.genre=book&amp;rft.btitle=Connections+between+combinatorics+of+permutations+and+algorithms+and+geometry&amp;rft.au=Dean+Connable+Wills&amp;rft_id=https%3A%2F%2Fir.library.oregonstate.edu%2Fxmlui%2Fhandle%2F1957%2F11929%3Fshow%3Dfull&amp;rfr_id=info%3Asid%2Fen.wikipedia.org%3ADynamic+programming" class="Z3988"></span></span>
</li>
<li id="cite_note-17"><span class="mw-cite-backlink"><b><a href="#cite_ref-17">^</a></b></span> <span class="reference-text">Stuart Dreyfus. <a rel="nofollow" class="external text" href="https://web.archive.org/web/20050110161049/http://www.wu-wien.ac.at/usr/h99c/h9951826/bellman_dynprog.pdf">"Richard Bellman on the birth of Dynamical Programming"</a>.</span>
</li>
<li id="cite_note-18"><span class="mw-cite-backlink"><b><a href="#cite_ref-18">^</a></b></span> <span class="reference-text"><link rel="mw-deduplicated-inline-style" href="mw-data:TemplateStyles:r1238218222" /><cite id="CITEREFNocedalWright2006" class="citation book cs1">Nocedal, J.; Wright, S. J. (2006). <span class="id-lock-limited" title="Free access subject to limited trial, subscription normally required"><a rel="nofollow" class="external text" href="https://archive.org/details/numericaloptimiz00noce_639"><i>Numerical Optimization</i></a></span>. Springer. p.&#160;<a rel="nofollow" class="external text" href="https://archive.org/details/numericaloptimiz00noce_639/page/n21">9</a>. <a href="/wiki/ISBN_(identifier)" class="mw-redirect" title="ISBN (identifier)">ISBN</a>&#160;<a href="/wiki/Special:BookSources/9780387303031" title="Special:BookSources/9780387303031"><bdi>9780387303031</bdi></a>.</cite><span title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Abook&amp;rft.genre=book&amp;rft.btitle=Numerical+Optimization&amp;rft.pages=9&amp;rft.pub=Springer&amp;rft.date=2006&amp;rft.isbn=9780387303031&amp;rft.aulast=Nocedal&amp;rft.aufirst=J.&amp;rft.au=Wright%2C+S.+J.&amp;rft_id=https%3A%2F%2Farchive.org%2Fdetails%2Fnumericaloptimiz00noce_639&amp;rfr_id=info%3Asid%2Fen.wikipedia.org%3ADynamic+programming" class="Z3988"></span></span>
</li>
<li id="cite_note-19"><span class="mw-cite-backlink"><b><a href="#cite_ref-19">^</a></b></span> <span class="reference-text"><link rel="mw-deduplicated-inline-style" href="mw-data:TemplateStyles:r1238218222" /><cite id="CITEREFRussellNorvig2009" class="citation book cs1">Russell, S.; Norvig, P. (2009). <i>Artificial Intelligence: A Modern Approach</i> (3rd&#160;ed.). Prentice Hall. <a href="/wiki/ISBN_(identifier)" class="mw-redirect" title="ISBN (identifier)">ISBN</a>&#160;<a href="/wiki/Special:BookSources/978-0-13-207148-2" title="Special:BookSources/978-0-13-207148-2"><bdi>978-0-13-207148-2</bdi></a>.</cite><span title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Abook&amp;rft.genre=book&amp;rft.btitle=Artificial+Intelligence%3A+A+Modern+Approach&amp;rft.edition=3rd&amp;rft.pub=Prentice+Hall&amp;rft.date=2009&amp;rft.isbn=978-0-13-207148-2&amp;rft.aulast=Russell&amp;rft.aufirst=S.&amp;rft.au=Norvig%2C+P.&amp;rfr_id=info%3Asid%2Fen.wikipedia.org%3ADynamic+programming" class="Z3988"></span></span>
</li>
<li id="cite_note-20"><span class="mw-cite-backlink"><b><a href="#cite_ref-20">^</a></b></span> <span class="reference-text"><link rel="mw-deduplicated-inline-style" href="mw-data:TemplateStyles:r1238218222" /><cite id="CITEREFKushner2004" class="citation web cs1"><a href="/wiki/Harold_J._Kushner" title="Harold J. Kushner">Kushner, Harold J.</a> (2004-07-01). <a rel="nofollow" class="external text" href="https://web.archive.org/web/20141019015133/http://a2c2.org/awards/richard-e-bellman-control-heritage-award/2004-00-00t000000/harold-j-kushner">"Richard E. Bellman Control Heritage Award"</a>. Archived from <a rel="nofollow" class="external text" href="http://a2c2.org/awards/richard-e-bellman-control-heritage-award-0">the original</a> on 2014-10-19.</cite><span title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Abook&amp;rft.genre=unknown&amp;rft.btitle=Richard+E.+Bellman+Control+Heritage+Award&amp;rft.date=2004-07-01&amp;rft.aulast=Kushner&amp;rft.aufirst=Harold+J.&amp;rft_id=http%3A%2F%2Fa2c2.org%2Fawards%2Frichard-e-bellman-control-heritage-award-0&amp;rfr_id=info%3Asid%2Fen.wikipedia.org%3ADynamic+programming" class="Z3988"></span></span>
</li>
</ol></div></div>
<div class="mw-heading mw-heading2"><h2 id="Further_reading">Further reading</h2></div>
<ul><li><link rel="mw-deduplicated-inline-style" href="mw-data:TemplateStyles:r1238218222" /><cite id="CITEREFAddaCooper2003" class="citation cs2">Adda, Jerome; Cooper, Russell (2003), <a rel="nofollow" class="external text" href="https://mitpress.mit.edu/books/dynamic-economics"><i>Dynamic Economics</i></a>, MIT Press, <a href="/wiki/ISBN_(identifier)" class="mw-redirect" title="ISBN (identifier)">ISBN</a>&#160;<a href="/wiki/Special:BookSources/9780262012010" title="Special:BookSources/9780262012010"><bdi>9780262012010</bdi></a></cite><span title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Abook&amp;rft.genre=book&amp;rft.btitle=Dynamic+Economics&amp;rft.pub=MIT+Press&amp;rft.date=2003&amp;rft.isbn=9780262012010&amp;rft.aulast=Adda&amp;rft.aufirst=Jerome&amp;rft.au=Cooper%2C+Russell&amp;rft_id=https%3A%2F%2Fmitpress.mit.edu%2Fbooks%2Fdynamic-economics&amp;rfr_id=info%3Asid%2Fen.wikipedia.org%3ADynamic+programming" class="Z3988"></span>. An accessible introduction to dynamic programming in economics. <a rel="nofollow" class="external text" href="https://sites.google.com/site/coopereconomics/matlab-programs">MATLAB code for the book</a> <a rel="nofollow" class="external text" href="https://web.archive.org/web/20201009085820/https://sites.google.com/site/coopereconomics/matlab-programs">Archived</a> 2020-10-09 at the <a href="/wiki/Wayback_Machine" title="Wayback Machine">Wayback Machine</a>.</li>
<li><link rel="mw-deduplicated-inline-style" href="mw-data:TemplateStyles:r1238218222" /><cite id="CITEREFBellman1954" class="citation cs2"><a href="/wiki/Richard_Bellman" class="mw-redirect" title="Richard Bellman">Bellman, Richard</a> (1954), "The theory of dynamic programming", <i><a href="/wiki/Bulletin_of_the_American_Mathematical_Society" title="Bulletin of the American Mathematical Society">Bulletin of the American Mathematical Society</a></i>, <b>60</b> (6): <span class="nowrap">503–</span>516, <a href="/wiki/Doi_(identifier)" class="mw-redirect" title="Doi (identifier)">doi</a>:<span class="id-lock-free" title="Freely accessible"><a rel="nofollow" class="external text" href="https://doi.org/10.1090%2FS0002-9904-1954-09848-8">10.1090/S0002-9904-1954-09848-8</a></span>, <a href="/wiki/MR_(identifier)" class="mw-redirect" title="MR (identifier)">MR</a>&#160;<a rel="nofollow" class="external text" href="https://mathscinet.ams.org/mathscinet-getitem?mr=0067459">0067459</a></cite><span title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Ajournal&amp;rft.genre=article&amp;rft.jtitle=Bulletin+of+the+American+Mathematical+Society&amp;rft.atitle=The+theory+of+dynamic+programming&amp;rft.volume=60&amp;rft.issue=6&amp;rft.pages=503-516&amp;rft.date=1954&amp;rft_id=info%3Adoi%2F10.1090%2FS0002-9904-1954-09848-8&amp;rft_id=https%3A%2F%2Fmathscinet.ams.org%2Fmathscinet-getitem%3Fmr%3D0067459%23id-name%3DMR&amp;rft.aulast=Bellman&amp;rft.aufirst=Richard&amp;rfr_id=info%3Asid%2Fen.wikipedia.org%3ADynamic+programming" class="Z3988"></span>. Includes an extensive bibliography of the literature in the area, up to the year 1954.</li>
<li><link rel="mw-deduplicated-inline-style" href="mw-data:TemplateStyles:r1238218222" /><cite id="CITEREFBellman1957" class="citation cs2"><a href="/wiki/Richard_Bellman" class="mw-redirect" title="Richard Bellman">Bellman, Richard</a> (1957), <i>Dynamic Programming</i>, Princeton University Press</cite><span title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Abook&amp;rft.genre=book&amp;rft.btitle=Dynamic+Programming&amp;rft.pub=Princeton+University+Press&amp;rft.date=1957&amp;rft.aulast=Bellman&amp;rft.aufirst=Richard&amp;rfr_id=info%3Asid%2Fen.wikipedia.org%3ADynamic+programming" class="Z3988"></span>. Dover paperback edition (2003), <link rel="mw-deduplicated-inline-style" href="mw-data:TemplateStyles:r1238218222" /><a href="/wiki/ISBN_(identifier)" class="mw-redirect" title="ISBN (identifier)">ISBN</a>&#160;<a href="/wiki/Special:BookSources/0-486-42809-5" title="Special:BookSources/0-486-42809-5"><bdi>0-486-42809-5</bdi></a>.</li>
<li><link rel="mw-deduplicated-inline-style" href="mw-data:TemplateStyles:r1238218222" /><cite id="CITEREFCormenLeisersonRivestStein2001" class="citation cs2"><a href="/wiki/Thomas_H._Cormen" title="Thomas H. Cormen">Cormen, Thomas H.</a>; <a href="/wiki/Charles_E._Leiserson" title="Charles E. Leiserson">Leiserson, Charles E.</a>; <a href="/wiki/Ronald_L._Rivest" class="mw-redirect" title="Ronald L. Rivest">Rivest, Ronald L.</a>; <a href="/wiki/Clifford_Stein" title="Clifford Stein">Stein, Clifford</a> (2001), <a href="/wiki/Introduction_to_Algorithms" title="Introduction to Algorithms"><i>Introduction to Algorithms</i></a> (2nd&#160;ed.), MIT Press &amp; McGraw–Hill, <a href="/wiki/ISBN_(identifier)" class="mw-redirect" title="ISBN (identifier)">ISBN</a>&#160;<a href="/wiki/Special:BookSources/978-0-262-03293-3" title="Special:BookSources/978-0-262-03293-3"><bdi>978-0-262-03293-3</bdi></a></cite><span title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Abook&amp;rft.genre=book&amp;rft.btitle=Introduction+to+Algorithms&amp;rft.edition=2nd&amp;rft.pub=MIT+Press+%26+McGraw%E2%80%93Hill&amp;rft.date=2001&amp;rft.isbn=978-0-262-03293-3&amp;rft.aulast=Cormen&amp;rft.aufirst=Thomas+H.&amp;rft.au=Leiserson%2C+Charles+E.&amp;rft.au=Rivest%2C+Ronald+L.&amp;rft.au=Stein%2C+Clifford&amp;rfr_id=info%3Asid%2Fen.wikipedia.org%3ADynamic+programming" class="Z3988"></span>. Especially pp.&#160;323–69.</li>
<li><link rel="mw-deduplicated-inline-style" href="mw-data:TemplateStyles:r1238218222" /><cite id="CITEREFDreyfusLaw1977" class="citation cs2">Dreyfus, Stuart E.; Law, Averill M. (1977), <i>The Art and Theory of Dynamic Programming</i>, Academic Press, <a href="/wiki/ISBN_(identifier)" class="mw-redirect" title="ISBN (identifier)">ISBN</a>&#160;<a href="/wiki/Special:BookSources/978-0-12-221860-6" title="Special:BookSources/978-0-12-221860-6"><bdi>978-0-12-221860-6</bdi></a></cite><span title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Abook&amp;rft.genre=book&amp;rft.btitle=The+Art+and+Theory+of+Dynamic+Programming&amp;rft.pub=Academic+Press&amp;rft.date=1977&amp;rft.isbn=978-0-12-221860-6&amp;rft.aulast=Dreyfus&amp;rft.aufirst=Stuart+E.&amp;rft.au=Law%2C+Averill+M.&amp;rfr_id=info%3Asid%2Fen.wikipedia.org%3ADynamic+programming" class="Z3988"></span>.</li>
<li><link rel="mw-deduplicated-inline-style" href="mw-data:TemplateStyles:r1238218222" /><cite id="CITEREFGiegerichMeyerSteffen2004" class="citation cs2">Giegerich, R.; Meyer, C.; Steffen, P. (2004), <a rel="nofollow" class="external text" href="http://bibiserv.techfak.uni-bielefeld.de/adp/ps/GIE-MEY-STE-2004.pdf">"A Discipline of Dynamic Programming over Sequence Data"</a> <span class="cs1-format">(PDF)</span>, <i>Science of Computer Programming</i>, <b>51</b> (3): <span class="nowrap">215–</span>263, <a href="/wiki/Doi_(identifier)" class="mw-redirect" title="Doi (identifier)">doi</a>:<span class="id-lock-free" title="Freely accessible"><a rel="nofollow" class="external text" href="https://doi.org/10.1016%2Fj.scico.2003.12.005">10.1016/j.scico.2003.12.005</a></span></cite><span title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Ajournal&amp;rft.genre=article&amp;rft.jtitle=Science+of+Computer+Programming&amp;rft.atitle=A+Discipline+of+Dynamic+Programming+over+Sequence+Data&amp;rft.volume=51&amp;rft.issue=3&amp;rft.pages=215-263&amp;rft.date=2004&amp;rft_id=info%3Adoi%2F10.1016%2Fj.scico.2003.12.005&amp;rft.aulast=Giegerich&amp;rft.aufirst=R.&amp;rft.au=Meyer%2C+C.&amp;rft.au=Steffen%2C+P.&amp;rft_id=http%3A%2F%2Fbibiserv.techfak.uni-bielefeld.de%2Fadp%2Fps%2FGIE-MEY-STE-2004.pdf&amp;rfr_id=info%3Asid%2Fen.wikipedia.org%3ADynamic+programming" class="Z3988"></span>.</li>
<li><link rel="mw-deduplicated-inline-style" href="mw-data:TemplateStyles:r1238218222" /><cite id="CITEREFMeyn2007" class="citation cs2">Meyn, Sean (2007), <a rel="nofollow" class="external text" href="https://web.archive.org/web/20100619011046/https://netfiles.uiuc.edu/meyn/www/spm_files/CTCN/CTCN.html"><i>Control Techniques for Complex Networks</i></a>, Cambridge University Press, <a href="/wiki/ISBN_(identifier)" class="mw-redirect" title="ISBN (identifier)">ISBN</a>&#160;<a href="/wiki/Special:BookSources/978-0-521-88441-9" title="Special:BookSources/978-0-521-88441-9"><bdi>978-0-521-88441-9</bdi></a>, archived from <a rel="nofollow" class="external text" href="https://netfiles.uiuc.edu/meyn/www/spm_files/CTCN/CTCN.html">the original</a> on 2010-06-19</cite><span title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Abook&amp;rft.genre=book&amp;rft.btitle=Control+Techniques+for+Complex+Networks&amp;rft.pub=Cambridge+University+Press&amp;rft.date=2007&amp;rft.isbn=978-0-521-88441-9&amp;rft.aulast=Meyn&amp;rft.aufirst=Sean&amp;rft_id=https%3A%2F%2Fnetfiles.uiuc.edu%2Fmeyn%2Fwww%2Fspm_files%2FCTCN%2FCTCN.html&amp;rfr_id=info%3Asid%2Fen.wikipedia.org%3ADynamic+programming" class="Z3988"></span>.</li>
<li><link rel="mw-deduplicated-inline-style" href="mw-data:TemplateStyles:r1238218222" /><cite id="CITEREFSritharan1991" class="citation journal cs1">Sritharan, S. S. (1991). "Dynamic Programming of the Navier-Stokes Equations". <i>Systems and Control Letters</i>. <b>16</b> (4): <span class="nowrap">299–</span>307. <a href="/wiki/Doi_(identifier)" class="mw-redirect" title="Doi (identifier)">doi</a>:<a rel="nofollow" class="external text" href="https://doi.org/10.1016%2F0167-6911%2891%2990020-f">10.1016/0167-6911(91)90020-f</a>.</cite><span title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Ajournal&amp;rft.genre=article&amp;rft.jtitle=Systems+and+Control+Letters&amp;rft.atitle=Dynamic+Programming+of+the+Navier-Stokes+Equations&amp;rft.volume=16&amp;rft.issue=4&amp;rft.pages=299-307&amp;rft.date=1991&amp;rft_id=info%3Adoi%2F10.1016%2F0167-6911%2891%2990020-f&amp;rft.aulast=Sritharan&amp;rft.aufirst=S.+S.&amp;rfr_id=info%3Asid%2Fen.wikipedia.org%3ADynamic+programming" class="Z3988"></span></li>
<li><link rel="mw-deduplicated-inline-style" href="mw-data:TemplateStyles:r1238218222" /><cite id="CITEREFStokeyLucasPrescott1989" class="citation cs2"><a href="/wiki/Nancy_Stokey" title="Nancy Stokey">Stokey, Nancy</a>; <a href="/wiki/Robert_E._Lucas" class="mw-redirect" title="Robert E. Lucas">Lucas, Robert E.</a>; <a href="/wiki/Edward_Prescott" class="mw-redirect" title="Edward Prescott">Prescott, Edward</a> (1989), <i>Recursive Methods in Economic Dynamics</i>, Harvard Univ. Press, <a href="/wiki/ISBN_(identifier)" class="mw-redirect" title="ISBN (identifier)">ISBN</a>&#160;<a href="/wiki/Special:BookSources/978-0-674-75096-8" title="Special:BookSources/978-0-674-75096-8"><bdi>978-0-674-75096-8</bdi></a></cite><span title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Abook&amp;rft.genre=book&amp;rft.btitle=Recursive+Methods+in+Economic+Dynamics&amp;rft.pub=Harvard+Univ.+Press&amp;rft.date=1989&amp;rft.isbn=978-0-674-75096-8&amp;rft.aulast=Stokey&amp;rft.aufirst=Nancy&amp;rft.au=Lucas%2C+Robert+E.&amp;rft.au=Prescott%2C+Edward&amp;rfr_id=info%3Asid%2Fen.wikipedia.org%3ADynamic+programming" class="Z3988"></span>.</li></ul>
<div class="mw-heading mw-heading2"><h2 id="External_links">External links</h2></div>
<ul><li>King, Ian, 2002 (1987), "<a rel="nofollow" class="external text" href="https://researchspace.auckland.ac.nz/bitstream/handle/2292/190/230.pdf">A Simple Introduction to Dynamic Programming in Macroeconomic Models.</a>" An introduction to dynamic programming as an important tool in economic theory.</li></ul>
<p><br />
</p><p><br />
</p>
<div class="navbox-styles"><style data-mw-deduplicate="TemplateStyles:r1129693374">.mw-parser-output .hlist dl,.mw-parser-output .hlist ol,.mw-parser-output .hlist ul{margin:0;padding:0}.mw-parser-output .hlist dd,.mw-parser-output .hlist dt,.mw-parser-output .hlist li{margin:0;display:inline}.mw-parser-output .hlist.inline,.mw-parser-output .hlist.inline dl,.mw-parser-output .hlist.inline ol,.mw-parser-output .hlist.inline ul,.mw-parser-output .hlist dl dl,.mw-parser-output .hlist dl ol,.mw-parser-output .hlist dl ul,.mw-parser-output .hlist ol dl,.mw-parser-output .hlist ol ol,.mw-parser-output .hlist ol ul,.mw-parser-output .hlist ul dl,.mw-parser-output .hlist ul ol,.mw-parser-output .hlist ul ul{display:inline}.mw-parser-output .hlist .mw-empty-li{display:none}.mw-parser-output .hlist dt::after{content:": "}.mw-parser-output .hlist dd::after,.mw-parser-output .hlist li::after{content:" · ";font-weight:bold}.mw-parser-output .hlist dd:last-child::after,.mw-parser-output .hlist dt:last-child::after,.mw-parser-output .hlist li:last-child::after{content:none}.mw-parser-output .hlist dd dd:first-child::before,.mw-parser-output .hlist dd dt:first-child::before,.mw-parser-output .hlist dd li:first-child::before,.mw-parser-output .hlist dt dd:first-child::before,.mw-parser-output .hlist dt dt:first-child::before,.mw-parser-output .hlist dt li:first-child::before,.mw-parser-output .hlist li dd:first-child::before,.mw-parser-output .hlist li dt:first-child::before,.mw-parser-output .hlist li li:first-child::before{content:" (";font-weight:normal}.mw-parser-output .hlist dd dd:last-child::after,.mw-parser-output .hlist dd dt:last-child::after,.mw-parser-output .hlist dd li:last-child::after,.mw-parser-output .hlist dt dd:last-child::after,.mw-parser-output .hlist dt dt:last-child::after,.mw-parser-output .hlist dt li:last-child::after,.mw-parser-output .hlist li dd:last-child::after,.mw-parser-output .hlist li dt:last-child::after,.mw-parser-output .hlist li li:last-child::after{content:")";font-weight:normal}.mw-parser-output .hlist ol{counter-reset:listitem}.mw-parser-output .hlist ol>li{counter-increment:listitem}.mw-parser-output .hlist ol>li::before{content:" "counter(listitem)"\a0 "}.mw-parser-output .hlist dd ol>li:first-child::before,.mw-parser-output .hlist dt ol>li:first-child::before,.mw-parser-output .hlist li ol>li:first-child::before{content:" ("counter(listitem)"\a0 "}</style><style data-mw-deduplicate="TemplateStyles:r1236075235">.mw-parser-output .navbox{box-sizing:border-box;border:1px solid #a2a9b1;width:100%;clear:both;font-size:88%;text-align:center;padding:1px;margin:1em auto 0}.mw-parser-output .navbox .navbox{margin-top:0}.mw-parser-output .navbox+.navbox,.mw-parser-output .navbox+.navbox-styles+.navbox{margin-top:-1px}.mw-parser-output .navbox-inner,.mw-parser-output .navbox-subgroup{width:100%}.mw-parser-output .navbox-group,.mw-parser-output .navbox-title,.mw-parser-output .navbox-abovebelow{padding:0.25em 1em;line-height:1.5em;text-align:center}.mw-parser-output .navbox-group{white-space:nowrap;text-align:right}.mw-parser-output .navbox,.mw-parser-output .navbox-subgroup{background-color:#fdfdfd}.mw-parser-output .navbox-list{line-height:1.5em;border-color:#fdfdfd}.mw-parser-output .navbox-list-with-group{text-align:left;border-left-width:2px;border-left-style:solid}.mw-parser-output tr+tr>.navbox-abovebelow,.mw-parser-output tr+tr>.navbox-group,.mw-parser-output tr+tr>.navbox-image,.mw-parser-output tr+tr>.navbox-list{border-top:2px solid #fdfdfd}.mw-parser-output .navbox-title{background-color:#ccf}.mw-parser-output .navbox-abovebelow,.mw-parser-output .navbox-group,.mw-parser-output .navbox-subgroup .navbox-title{background-color:#ddf}.mw-parser-output .navbox-subgroup .navbox-group,.mw-parser-output .navbox-subgroup .navbox-abovebelow{background-color:#e6e6ff}.mw-parser-output .navbox-even{background-color:#f7f7f7}.mw-parser-output .navbox-odd{background-color:transparent}.mw-parser-output .navbox .hlist td dl,.mw-parser-output .navbox .hlist td ol,.mw-parser-output .navbox .hlist td ul,.mw-parser-output .navbox td.hlist dl,.mw-parser-output .navbox td.hlist ol,.mw-parser-output .navbox td.hlist ul{padding:0.125em 0}.mw-parser-output .navbox .navbar{display:block;font-size:100%}.mw-parser-output .navbox-title .navbar{float:left;text-align:left;margin-right:0.5em}body.skin--responsive .mw-parser-output .navbox-image img{max-width:none!important}@media print{body.ns-0 .mw-parser-output .navbox{display:none!important}}</style></div><div role="navigation" class="navbox" aria-labelledby="Optimization:_Algorithms,_methods,_and_heuristics381" style="padding:3px"><table class="nowraplinks hlist mw-collapsible expanded navbox-inner" style="border-spacing:0;background:transparent;color:inherit"><tbody><tr><th scope="col" class="navbox-title" colspan="3"><link rel="mw-deduplicated-inline-style" href="mw-data:TemplateStyles:r1129693374" /><style data-mw-deduplicate="TemplateStyles:r1239400231">.mw-parser-output .navbar{display:inline;font-size:88%;font-weight:normal}.mw-parser-output .navbar-collapse{float:left;text-align:left}.mw-parser-output .navbar-boxtext{word-spacing:0}.mw-parser-output .navbar ul{display:inline-block;white-space:nowrap;line-height:inherit}.mw-parser-output .navbar-brackets::before{margin-right:-0.125em;content:"[ "}.mw-parser-output .navbar-brackets::after{margin-left:-0.125em;content:" ]"}.mw-parser-output .navbar li{word-spacing:-0.125em}.mw-parser-output .navbar a>span,.mw-parser-output .navbar a>abbr{text-decoration:inherit}.mw-parser-output .navbar-mini abbr{font-variant:small-caps;border-bottom:none;text-decoration:none;cursor:inherit}.mw-parser-output .navbar-ct-full{font-size:114%;margin:0 7em}.mw-parser-output .navbar-ct-mini{font-size:114%;margin:0 4em}html.skin-theme-clientpref-night .mw-parser-output .navbar li a abbr{color:var(--color-base)!important}@media(prefers-color-scheme:dark){html.skin-theme-clientpref-os .mw-parser-output .navbar li a abbr{color:var(--color-base)!important}}@media print{.mw-parser-output .navbar{display:none!important}}</style><div class="navbar plainlinks hlist navbar-mini"><ul><li class="nv-view"><a href="/wiki/Template:Optimization_algorithms" title="Template:Optimization algorithms"><abbr title="View this template">v</abbr></a></li><li class="nv-talk"><a href="/wiki/Template_talk:Optimization_algorithms" title="Template talk:Optimization algorithms"><abbr title="Discuss this template">t</abbr></a></li><li class="nv-edit"><a href="/wiki/Special:EditPage/Template:Optimization_algorithms" title="Special:EditPage/Template:Optimization algorithms"><abbr title="Edit this template">e</abbr></a></li></ul></div><div id="Optimization:_Algorithms,_methods,_and_heuristics381" style="font-size:114%;margin:0 4em"><a href="/wiki/Mathematical_optimization" title="Mathematical optimization">Optimization</a>: <a href="/wiki/Optimization_algorithm" class="mw-redirect" title="Optimization algorithm">Algorithms</a>, <a href="/wiki/Iterative_method" title="Iterative method">methods</a>, and <a href="/wiki/Heuristic_algorithm" class="mw-redirect" title="Heuristic algorithm">heuristics</a></div></th></tr><tr><td colspan="2" class="navbox-list navbox-odd" style="width:100%;padding:0"><div style="padding:0 0.25em"></div><table class="nowraplinks mw-collapsible mw-collapsed navbox-subgroup" style="border-spacing:0"><tbody><tr><th scope="col" class="navbox-title" colspan="2"><div id="Unconstrained_nonlinear381" style="font-size:114%;margin:0 4em"><a href="/wiki/Nonlinear_programming" title="Nonlinear programming">Unconstrained nonlinear</a></div></th></tr><tr><td colspan="2" class="navbox-list navbox-odd" style="width:100%;padding:0"><div style="padding:0 0.25em"></div><table class="nowraplinks navbox-subgroup" style="border-spacing:0"><tbody><tr><th scope="row" class="navbox-group" style="width:1%"><a href="/wiki/Function_(mathematics)" title="Function (mathematics)">Functions</a></th><td class="navbox-list-with-group navbox-list navbox-odd" style="width:100%;padding:0"><div style="padding:0 0.25em">
<ul><li><a href="/wiki/Golden-section_search" title="Golden-section search">Golden-section search</a></li>
<li><a href="/wiki/Powell%27s_method" title="Powell&#39;s method">Powell's method</a></li>
<li><a href="/wiki/Line_search" title="Line search">Line search</a></li>
<li><a href="/wiki/Nelder%E2%80%93Mead_method" title="Nelder–Mead method">Nelder–Mead method</a></li>
<li><a href="/wiki/Successive_parabolic_interpolation" title="Successive parabolic interpolation">Successive parabolic interpolation</a></li></ul>
</div></td></tr><tr><th scope="row" class="navbox-group" style="width:1%"><a href="/wiki/Gradient" title="Gradient">Gradients</a></th><td class="navbox-list-with-group navbox-list navbox-odd" style="width:100%;padding:0"><div style="padding:0 0.25em"></div><table class="nowraplinks navbox-subgroup" style="border-spacing:0"><tbody><tr><th scope="row" class="navbox-group" style="width:1%"><a href="/wiki/Local_convergence" title="Local convergence">Convergence</a></th><td class="navbox-list-with-group navbox-list navbox-even" style="width:100%;padding:0"><div style="padding:0 0.25em">
<ul><li><a href="/wiki/Trust_region" title="Trust region">Trust region</a></li>
<li><a href="/wiki/Wolfe_conditions" title="Wolfe conditions">Wolfe conditions</a></li></ul>
</div></td></tr><tr><th scope="row" class="navbox-group" style="width:1%"><a href="/wiki/Quasi-Newton_method" title="Quasi-Newton method">Quasi–Newton</a></th><td class="navbox-list-with-group navbox-list navbox-odd" style="width:100%;padding:0"><div style="padding:0 0.25em">
<ul><li><a href="/wiki/Berndt%E2%80%93Hall%E2%80%93Hall%E2%80%93Hausman_algorithm" title="Berndt–Hall–Hall–Hausman algorithm">Berndt–Hall–Hall–Hausman</a></li>
<li><a href="/wiki/Broyden%E2%80%93Fletcher%E2%80%93Goldfarb%E2%80%93Shanno_algorithm" title="Broyden–Fletcher–Goldfarb–Shanno algorithm">Broyden–Fletcher–Goldfarb–Shanno</a> and <a href="/wiki/Limited-memory_BFGS" title="Limited-memory BFGS">L-BFGS</a></li>
<li><a href="/wiki/Davidon%E2%80%93Fletcher%E2%80%93Powell_formula" title="Davidon–Fletcher–Powell formula">Davidon–Fletcher–Powell</a></li>
<li><a href="/wiki/Symmetric_rank-one" title="Symmetric rank-one">Symmetric rank-one (SR1)</a></li></ul>
</div></td></tr><tr><th scope="row" class="navbox-group" style="width:1%"><a href="/wiki/Iterative_method" title="Iterative method">Other methods</a></th><td class="navbox-list-with-group navbox-list navbox-even" style="width:100%;padding:0"><div style="padding:0 0.25em">
<ul><li><a href="/wiki/Nonlinear_conjugate_gradient_method" title="Nonlinear conjugate gradient method">Conjugate gradient</a></li>
<li><a href="/wiki/Gauss%E2%80%93Newton_algorithm" title="Gauss–Newton algorithm">Gauss–Newton</a></li>
<li><a href="/wiki/Gradient_descent" title="Gradient descent">Gradient</a></li>
<li><a href="/wiki/Mirror_descent" title="Mirror descent">Mirror</a></li>
<li><a href="/wiki/Levenberg%E2%80%93Marquardt_algorithm" title="Levenberg–Marquardt algorithm">Levenberg–Marquardt</a></li>
<li><a href="/wiki/Powell%27s_dog_leg_method" title="Powell&#39;s dog leg method">Powell's dog leg method</a></li>
<li><a href="/wiki/Truncated_Newton_method" title="Truncated Newton method">Truncated Newton</a></li></ul>
</div></td></tr></tbody></table><div></div></td></tr><tr><th scope="row" class="navbox-group" style="width:1%"><a href="/wiki/Hessian_matrix" title="Hessian matrix">Hessians</a></th><td class="navbox-list-with-group navbox-list navbox-odd" style="width:100%;padding:0"><div style="padding:0 0.25em">
<ul><li><a href="/wiki/Newton%27s_method_in_optimization" title="Newton&#39;s method in optimization">Newton's method</a></li></ul>
</div></td></tr></tbody></table><div></div></td></tr></tbody></table><div></div></td><td class="noviewer navbox-image" rowspan="5" style="width:1px;padding:0 0 0 2px"><div><figure class="mw-halign-right" typeof="mw:File"><a href="/wiki/File:Max_paraboloid.svg" class="mw-file-description" title="Optimization computes maxima and minima."><img alt="Graph of a strictly concave quadratic function with unique maximum." src="//upload.wikimedia.org/wikipedia/commons/thumb/7/72/Max_paraboloid.svg/250px-Max_paraboloid.svg.png" decoding="async" width="150" height="120" class="mw-file-element" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/7/72/Max_paraboloid.svg/330px-Max_paraboloid.svg.png 2x" data-file-width="700" data-file-height="560" /></a><figcaption>Optimization computes maxima and minima.</figcaption></figure></div></td></tr><tr><td colspan="2" class="navbox-list navbox-odd" style="width:100%;padding:0"><div style="padding:0 0.25em"></div><table class="nowraplinks mw-collapsible mw-collapsed navbox-subgroup" style="border-spacing:0"><tbody><tr><th scope="col" class="navbox-title" colspan="2"><div id="Constrained_nonlinear381" style="font-size:114%;margin:0 4em"><a href="/wiki/Nonlinear_programming" title="Nonlinear programming">Constrained nonlinear</a></div></th></tr><tr><td colspan="2" class="navbox-list navbox-odd" style="width:100%;padding:0"><div style="padding:0 0.25em"></div><table class="nowraplinks navbox-subgroup" style="border-spacing:0"><tbody><tr><th scope="row" class="navbox-group" style="width:1%">General</th><td class="navbox-list-with-group navbox-list navbox-odd" style="width:100%;padding:0"><div style="padding:0 0.25em">
<ul><li><a href="/wiki/Barrier_function" title="Barrier function">Barrier methods</a></li>
<li><a href="/wiki/Penalty_method" title="Penalty method">Penalty methods</a></li></ul>
</div></td></tr><tr><th scope="row" class="navbox-group" style="width:1%">Differentiable</th><td class="navbox-list-with-group navbox-list navbox-even" style="width:100%;padding:0"><div style="padding:0 0.25em">
<ul><li><a href="/wiki/Augmented_Lagrangian_method" title="Augmented Lagrangian method">Augmented Lagrangian methods</a></li>
<li><a href="/wiki/Sequential_quadratic_programming" title="Sequential quadratic programming">Sequential quadratic programming</a></li>
<li><a href="/wiki/Successive_linear_programming" title="Successive linear programming">Successive linear programming</a></li></ul>
</div></td></tr></tbody></table><div></div></td></tr></tbody></table><div></div></td></tr><tr><td colspan="2" class="navbox-list navbox-odd" style="width:100%;padding:0"><div style="padding:0 0.25em"></div><table class="nowraplinks mw-collapsible mw-collapsed navbox-subgroup" style="border-spacing:0"><tbody><tr><th scope="col" class="navbox-title" colspan="2"><div id="Convex_optimization381" style="font-size:114%;margin:0 4em"><a href="/wiki/Convex_optimization" title="Convex optimization">Convex optimization</a></div></th></tr><tr><td colspan="2" class="navbox-list navbox-odd" style="width:100%;padding:0"><div style="padding:0 0.25em"></div><table class="nowraplinks navbox-subgroup" style="border-spacing:0"><tbody><tr><th scope="row" class="navbox-group" style="width:1%"><a href="/wiki/Convex_minimization" class="mw-redirect" title="Convex minimization">Convex<br /> minimization</a></th><td class="navbox-list-with-group navbox-list navbox-odd" style="width:100%;padding:0"><div style="padding:0 0.25em">
<ul><li><a href="/wiki/Cutting-plane_method" title="Cutting-plane method">Cutting-plane method</a></li>
<li><a href="/wiki/Frank%E2%80%93Wolfe_algorithm" title="Frank–Wolfe algorithm">Reduced gradient (Frank–Wolfe)</a></li>
<li><a href="/wiki/Subgradient_method" title="Subgradient method">Subgradient method</a></li></ul>
</div></td></tr><tr><th scope="row" class="navbox-group" style="width:1%"><a href="/wiki/Linear_programming" title="Linear programming">Linear</a> and<br /><a href="/wiki/Quadratic_programming" title="Quadratic programming">quadratic</a></th><td class="navbox-list-with-group navbox-list navbox-odd" style="width:100%;padding:0"><div style="padding:0 0.25em"></div><table class="nowraplinks navbox-subgroup" style="border-spacing:0"><tbody><tr><th scope="row" class="navbox-group" style="width:1%"><a href="/wiki/Linear_programming#Interior_point" title="Linear programming">Interior point</a></th><td class="navbox-list-with-group navbox-list navbox-even" style="width:100%;padding:0"><div style="padding:0 0.25em">
<ul><li><a href="/wiki/Affine_scaling" title="Affine scaling">Affine scaling</a></li>
<li><a href="/wiki/Ellipsoid_method" title="Ellipsoid method">Ellipsoid algorithm of Khachiyan</a></li>
<li><a href="/wiki/Karmarkar%27s_algorithm" title="Karmarkar&#39;s algorithm">Projective algorithm of Karmarkar</a></li></ul>
</div></td></tr><tr><th scope="row" class="navbox-group" style="width:1%"><a href="/wiki/Matroid" title="Matroid">Basis-</a><a href="/wiki/Exchange_algorithm" class="mw-redirect" title="Exchange algorithm">exchange</a></th><td class="navbox-list-with-group navbox-list navbox-odd" style="width:100%;padding:0"><div style="padding:0 0.25em">
<ul><li><a href="/wiki/Simplex_algorithm" title="Simplex algorithm">Simplex algorithm of Dantzig</a></li>
<li><a href="/wiki/Revised_simplex_method" title="Revised simplex method">Revised simplex algorithm</a></li>
<li><a href="/wiki/Criss-cross_algorithm" title="Criss-cross algorithm">Criss-cross algorithm</a></li>
<li><a href="/wiki/Lemke%27s_algorithm" title="Lemke&#39;s algorithm">Principal pivoting algorithm of Lemke</a></li>
<li><a href="/wiki/Active-set_method" title="Active-set method">Active-set method</a></li></ul>
</div></td></tr></tbody></table><div></div></td></tr></tbody></table><div></div></td></tr></tbody></table><div></div></td></tr><tr><td colspan="2" class="navbox-list navbox-odd" style="width:100%;padding:0"><div style="padding:0 0.25em"></div><table class="nowraplinks mw-collapsible uncollapsed navbox-subgroup" style="border-spacing:0"><tbody><tr><th scope="col" class="navbox-title" colspan="2"><div id="Combinatorial381" style="font-size:114%;margin:0 4em"><a href="/wiki/Combinatorial_optimization" title="Combinatorial optimization">Combinatorial</a></div></th></tr><tr><td colspan="2" class="navbox-list navbox-odd" style="width:100%;padding:0"><div style="padding:0 0.25em"></div><table class="nowraplinks navbox-subgroup" style="border-spacing:0"><tbody><tr><th scope="row" class="navbox-group" style="width:1%">Paradigms</th><td class="navbox-list-with-group navbox-list navbox-odd" style="width:100%;padding:0"><div style="padding:0 0.25em">
<ul><li><a href="/wiki/Approximation_algorithm" title="Approximation algorithm">Approximation algorithm</a></li>
<li><a class="mw-selflink selflink">Dynamic programming</a></li>
<li><a href="/wiki/Greedy_algorithm" title="Greedy algorithm">Greedy algorithm</a></li>
<li><a href="/wiki/Integer_programming" title="Integer programming">Integer programming</a>
<ul><li><a href="/wiki/Branch_and_bound" title="Branch and bound">Branch and bound</a>/<a href="/wiki/Branch_and_cut" title="Branch and cut">cut</a></li></ul></li></ul>
</div></td></tr><tr><th scope="row" class="navbox-group" style="width:1%"><a href="/wiki/Graph_algorithm" class="mw-redirect" title="Graph algorithm">Graph<br /> algorithms</a></th><td class="navbox-list-with-group navbox-list navbox-odd" style="width:100%;padding:0"><div style="padding:0 0.25em"></div><table class="nowraplinks navbox-subgroup" style="border-spacing:0"><tbody><tr><th id="Minimum_spanning_tree52" scope="row" class="navbox-group" style="width:1%"><a href="/wiki/Minimum_spanning_tree" title="Minimum spanning tree">Minimum<br /> spanning tree</a></th><td class="navbox-list-with-group navbox-list navbox-even" style="width:100%;padding:0"><div style="padding:0 0.25em">
<ul><li><a href="/wiki/Bor%C5%AFvka%27s_algorithm" title="Borůvka&#39;s algorithm">Borůvka</a></li>
<li><a href="/wiki/Prim%27s_algorithm" title="Prim&#39;s algorithm">Prim</a></li>
<li><a href="/wiki/Kruskal%27s_algorithm" title="Kruskal&#39;s algorithm">Kruskal</a></li></ul>
</div></td></tr></tbody></table><div>
    </div><table class="nowraplinks navbox-subgroup" style="border-spacing:0"><tbody><tr><th id="Shortest_path39" scope="row" class="navbox-group" style="width:1%"><a href="/wiki/Shortest_path_problem" title="Shortest path problem">Shortest path</a></th><td class="navbox-list-with-group navbox-list navbox-odd" style="width:100%;padding:0"><div style="padding:0 0.25em">
<ul><li><a href="/wiki/Bellman%E2%80%93Ford_algorithm" title="Bellman–Ford algorithm">Bellman–Ford</a>
<ul><li><a href="/wiki/Shortest_Path_Faster_Algorithm" class="mw-redirect" title="Shortest Path Faster Algorithm">SPFA</a></li></ul></li>
<li><a href="/wiki/Dijkstra%27s_algorithm" title="Dijkstra&#39;s algorithm">Dijkstra</a></li>
<li><a href="/wiki/Floyd%E2%80%93Warshall_algorithm" title="Floyd–Warshall algorithm">Floyd–Warshall</a></li></ul>
</div></td></tr></tbody></table><div></div></td></tr><tr><th scope="row" class="navbox-group" style="width:1%"><a href="/wiki/Flow_network" title="Flow network">Network flows</a></th><td class="navbox-list-with-group navbox-list navbox-even" style="width:100%;padding:0"><div style="padding:0 0.25em">
<ul><li><a href="/wiki/Dinic%27s_algorithm" title="Dinic&#39;s algorithm">Dinic</a></li>
<li><a href="/wiki/Edmonds%E2%80%93Karp_algorithm" title="Edmonds–Karp algorithm">Edmonds–Karp</a></li>
<li><a href="/wiki/Ford%E2%80%93Fulkerson_algorithm" title="Ford–Fulkerson algorithm">Ford–Fulkerson</a></li>
<li><a href="/wiki/Push%E2%80%93relabel_maximum_flow_algorithm" title="Push–relabel maximum flow algorithm">Push–relabel maximum flow</a></li></ul>
</div></td></tr></tbody></table><div></div></td></tr></tbody></table><div></div></td></tr><tr><td colspan="2" class="navbox-list navbox-odd" style="width:100%;padding:0"><div style="padding:0 0.25em"></div><table class="nowraplinks mw-collapsible mw-collapsed navbox-subgroup" style="border-spacing:0"><tbody><tr><th scope="col" class="navbox-title" colspan="2"><div id="Metaheuristics381" style="font-size:114%;margin:0 4em"><a href="/wiki/Metaheuristic" title="Metaheuristic">Metaheuristics</a></div></th></tr><tr><td colspan="2" class="navbox-list navbox-odd" style="width:100%;padding:0"><div style="padding:0 0.25em">
<ul><li><a href="/wiki/Evolutionary_algorithm" title="Evolutionary algorithm">Evolutionary algorithm</a></li>
<li><a href="/wiki/Hill_climbing" title="Hill climbing">Hill climbing</a></li>
<li><a href="/wiki/Local_search_(optimization)" title="Local search (optimization)">Local search</a></li>
<li><a href="/wiki/Parallel_metaheuristic" title="Parallel metaheuristic">Parallel metaheuristics</a></li>
<li><a href="/wiki/Simulated_annealing" title="Simulated annealing">Simulated annealing</a></li>
<li><a href="/wiki/Spiral_optimization_algorithm" title="Spiral optimization algorithm">Spiral optimization algorithm</a></li>
<li><a href="/wiki/Tabu_search" title="Tabu search">Tabu search</a></li></ul>
</div></td></tr></tbody></table><div></div></td></tr><tr><td class="navbox-abovebelow" colspan="3"><div>
<ul><li><a href="/wiki/Comparison_of_optimization_software" title="Comparison of optimization software">Software</a></li></ul>
</div></td></tr></tbody></table></div>
<div class="navbox-styles"><link rel="mw-deduplicated-inline-style" href="mw-data:TemplateStyles:r1129693374" /><link rel="mw-deduplicated-inline-style" href="mw-data:TemplateStyles:r1236075235" /></div><div role="navigation" class="navbox" aria-labelledby="Parsing_algorithms116" style="padding:3px"><table class="nowraplinks mw-collapsible autocollapse navbox-inner" style="border-spacing:0;background:transparent;color:inherit"><tbody><tr><th scope="col" class="navbox-title" colspan="2"><link rel="mw-deduplicated-inline-style" href="mw-data:TemplateStyles:r1129693374" /><link rel="mw-deduplicated-inline-style" href="mw-data:TemplateStyles:r1239400231" /><div class="navbar plainlinks hlist navbar-mini"><ul><li class="nv-view"><a href="/wiki/Template:Parsers" title="Template:Parsers"><abbr title="View this template">v</abbr></a></li><li class="nv-talk"><a href="/wiki/Template_talk:Parsers" title="Template talk:Parsers"><abbr title="Discuss this template">t</abbr></a></li><li class="nv-edit"><a href="/wiki/Special:EditPage/Template:Parsers" title="Special:EditPage/Template:Parsers"><abbr title="Edit this template">e</abbr></a></li></ul></div><div id="Parsing_algorithms116" style="font-size:114%;margin:0 4em"><a href="/wiki/Parsing" title="Parsing">Parsing algorithms</a></div></th></tr><tr><th scope="row" class="navbox-group" style="width:1%"><a href="/wiki/Top-down_parsing" title="Top-down parsing">Top-down</a></th><td class="navbox-list-with-group navbox-list navbox-odd hlist" style="width:100%;padding:0"><div style="padding:0 0.25em">
<ul><li><a href="/wiki/Earley_parser" title="Earley parser">Earley</a></li>
<li><a href="/wiki/LL_parser" title="LL parser">LL</a></li>
<li><a href="/wiki/Recursive_descent_parser" title="Recursive descent parser">Recursive descent</a>
<ul><li><a href="/wiki/Tail_recursive_parser" title="Tail recursive parser">Tail recursive</a></li></ul></li></ul>
</div></td></tr><tr><th scope="row" class="navbox-group" style="width:1%"><a href="/wiki/Bottom-up_parsing" title="Bottom-up parsing">Bottom-up</a></th><td class="navbox-list-with-group navbox-list navbox-even hlist" style="width:100%;padding:0"><div style="padding:0 0.25em">
<ul><li>Precedence
<ul><li><a href="/wiki/Simple_precedence_parser" title="Simple precedence parser">Simple</a></li>
<li><a href="/wiki/Operator-precedence_parser" title="Operator-precedence parser">Operator</a>
<ul><li><a href="/wiki/Shunting_yard_algorithm" title="Shunting yard algorithm">Shunting-yard</a></li></ul></li></ul></li>
<li><a href="/wiki/LR_parser" title="LR parser">LR</a>
<ul><li><a href="/wiki/Simple_LR_parser" title="Simple LR parser">Simple</a></li>
<li><a href="/wiki/LALR_parser" title="LALR parser">Look-ahead</a></li>
<li><a href="/wiki/Canonical_LR_parser" title="Canonical LR parser">Canonical</a></li>
<li><a href="/wiki/GLR_parser" title="GLR parser">Generalized</a></li></ul></li>
<li><a href="/wiki/CYK_algorithm" title="CYK algorithm">CYK</a></li>
<li><a href="/wiki/Recursive_ascent_parser" title="Recursive ascent parser">Recursive ascent</a></li>
<li><a href="/wiki/Shift-reduce_parser" title="Shift-reduce parser">Shift-reduce</a></li></ul>
</div></td></tr><tr><th scope="row" class="navbox-group" style="width:1%">Mixed, other</th><td class="navbox-list-with-group navbox-list navbox-odd hlist" style="width:100%;padding:0"><div style="padding:0 0.25em">
<ul><li><a href="/wiki/Parser_combinator" title="Parser combinator">Combinator</a></li>
<li><a href="/wiki/Chart_parser" title="Chart parser">Chart</a>
<ul><li><a href="/wiki/Left_corner_parser" title="Left corner parser">Left corner</a></li></ul></li>
<li>Statistical</li></ul>
</div></td></tr><tr><th scope="row" class="navbox-group" style="width:1%">Related topics</th><td class="navbox-list-with-group navbox-list navbox-even hlist" style="width:100%;padding:0"><div style="padding:0 0.25em">
<ul><li><a href="/wiki/Parsing_expression_grammar" title="Parsing expression grammar">PEG</a></li>
<li><a href="/wiki/Definite_clause_grammar" title="Definite clause grammar">Definite clause grammar</a></li>
<li><a href="/wiki/Deterministic_parsing" title="Deterministic parsing">Deterministic parsing</a></li>
<li><a class="mw-selflink selflink">Dynamic programming</a></li>
<li><a href="/wiki/Memoization" title="Memoization">Memoization</a></li>
<li><a href="/wiki/Compiler-compiler" title="Compiler-compiler">Parser generator</a>
<ul><li><a href="/wiki/LALR_parser_generator" title="LALR parser generator">LALR</a></li></ul></li>
<li><a href="/wiki/Parse_tree" title="Parse tree">Parse tree</a></li>
<li><a href="/wiki/Abstract_syntax_tree" title="Abstract syntax tree">AST</a></li>
<li><a href="/wiki/Scannerless_parsing" title="Scannerless parsing">Scannerless parsing</a></li>
<li><a href="/wiki/History_of_compiler_construction" title="History of compiler construction">History of compiler construction</a></li>
<li><a href="/wiki/Comparison_of_parser_generators" title="Comparison of parser generators">Comparison of parser generators</a></li>
<li><a href="/wiki/Operator-precedence_grammar" title="Operator-precedence grammar">Operator-precedence grammar</a></li></ul>
</div></td></tr></tbody></table></div>
<div class="navbox-styles"><link rel="mw-deduplicated-inline-style" href="mw-data:TemplateStyles:r1129693374" /><link rel="mw-deduplicated-inline-style" href="mw-data:TemplateStyles:r1236075235" /></div><div role="navigation" class="navbox" aria-labelledby="Data_structures_and_algorithms145" style="padding:3px"><table class="nowraplinks hlist mw-collapsible autocollapse navbox-inner" style="border-spacing:0;background:transparent;color:inherit"><tbody><tr><th scope="col" class="navbox-title" colspan="2"><link rel="mw-deduplicated-inline-style" href="mw-data:TemplateStyles:r1129693374" /><link rel="mw-deduplicated-inline-style" href="mw-data:TemplateStyles:r1239400231" /><div class="navbar plainlinks hlist navbar-mini"><ul><li class="nv-view"><a href="/wiki/Template:Data_structures_and_algorithms" title="Template:Data structures and algorithms"><abbr title="View this template">v</abbr></a></li><li class="nv-talk"><a href="/wiki/Template_talk:Data_structures_and_algorithms" title="Template talk:Data structures and algorithms"><abbr title="Discuss this template">t</abbr></a></li><li class="nv-edit"><a href="/wiki/Special:EditPage/Template:Data_structures_and_algorithms" title="Special:EditPage/Template:Data structures and algorithms"><abbr title="Edit this template">e</abbr></a></li></ul></div><div id="Data_structures_and_algorithms145" style="font-size:114%;margin:0 4em"><a href="/wiki/Data_structure" title="Data structure">Data structures</a> and <a href="/wiki/Algorithm" title="Algorithm">algorithms</a></div></th></tr><tr><th scope="row" class="navbox-group" style="width:1%">Data structures</th><td class="navbox-list-with-group navbox-list navbox-odd" style="width:100%;padding:0"><div style="padding:0 0.25em">
<ul><li><a href="/wiki/Array_(data_structure)" title="Array (data structure)">Array</a></li>
<li><a href="/wiki/Associative_array" title="Associative array">Associative array</a></li>
<li><a href="/wiki/Binary_search_tree" title="Binary search tree">Binary search tree</a></li>
<li><a href="/wiki/Fenwick_tree" title="Fenwick tree">Fenwick tree</a></li>
<li><a href="/wiki/Graph_(abstract_data_type)" title="Graph (abstract data type)">Graph</a></li>
<li><a href="/wiki/Hash_table" title="Hash table">Hash table</a></li>
<li><a href="/wiki/Heap_(data_structure)" title="Heap (data structure)">Heap</a></li>
<li><a href="/wiki/Linked_list" title="Linked list">Linked list</a></li>
<li><a href="/wiki/Queue_(abstract_data_type)" title="Queue (abstract data type)">Queue</a></li>
<li><a href="/wiki/Segment_tree" title="Segment tree">Segment tree</a></li>
<li><a href="/wiki/Stack_(abstract_data_type)" title="Stack (abstract data type)">Stack</a></li>
<li><a href="/wiki/String_(computer_science)" title="String (computer science)">String</a></li>
<li><a href="/wiki/Tree_(abstract_data_type)" title="Tree (abstract data type)">Tree</a></li>
<li><a href="/wiki/Trie" title="Trie">Trie</a></li></ul>
</div></td></tr><tr><th scope="row" class="navbox-group" style="width:1%">Algorithms and <a href="/wiki/Algorithmic_paradigm" title="Algorithmic paradigm">algorithmic paradigms</a></th><td class="navbox-list-with-group navbox-list navbox-even" style="width:100%;padding:0"><div style="padding:0 0.25em">
<ul><li><a href="/wiki/Backtracking" title="Backtracking">Backtracking</a></li>
<li><a href="/wiki/Binary_search" title="Binary search">Binary search</a></li>
<li><a href="/wiki/Breadth-first_search" title="Breadth-first search">Breadth-first search</a></li>
<li><a href="/wiki/Brute-force_search" title="Brute-force search">Brute-force search</a></li>
<li><a href="/wiki/Depth-first_search" title="Depth-first search">Depth-first search</a></li>
<li><a href="/wiki/Divide-and-conquer_algorithm" title="Divide-and-conquer algorithm">Divide and conquer</a></li>
<li><a class="mw-selflink selflink">Dynamic programming</a></li>
<li><a href="/wiki/Graph_traversal" title="Graph traversal">Graph traversal</a></li>
<li><a href="/wiki/Fold_(higher-order_function)" title="Fold (higher-order function)">Fold</a></li>
<li><a href="/wiki/Greedy_algorithm" title="Greedy algorithm">Greedy</a></li>
<li><a href="/wiki/Hash_function" title="Hash function">Hash function</a></li>
<li><a href="/wiki/Minimax" title="Minimax">Minimax</a></li>
<li><a href="/wiki/Online_algorithm" title="Online algorithm">Online</a></li>
<li><a href="/wiki/Randomized_algorithm" title="Randomized algorithm">Randomized</a></li>
<li><a href="/wiki/Recursion_(computer_science)" title="Recursion (computer science)">Recursion</a></li>
<li><a href="/wiki/Root-finding_algorithm" title="Root-finding algorithm">Root-finding</a></li>
<li><a href="/wiki/Sorting_algorithm" title="Sorting algorithm">Sorting</a></li>
<li><a href="/wiki/Streaming_algorithm" title="Streaming algorithm">Streaming</a></li>
<li><a href="/wiki/Sweep_line_algorithm" title="Sweep line algorithm">Sweep line</a></li>
<li><a href="/wiki/String-searching_algorithm" title="String-searching algorithm">String-searching</a></li>
<li><a href="/wiki/Topological_sorting" title="Topological sorting">Topological sorting</a></li></ul>
</div></td></tr><tr><td class="navbox-abovebelow" colspan="2"><div>
<ul><li><a href="/wiki/List_of_data_structures" title="List of data structures">List of data structures</a></li>
<li><a href="/wiki/List_of_algorithms" title="List of algorithms">List of algorithms</a></li></ul>
</div></td></tr></tbody></table></div>
<div class="navbox-styles"><link rel="mw-deduplicated-inline-style" href="mw-data:TemplateStyles:r1129693374" /><link rel="mw-deduplicated-inline-style" href="mw-data:TemplateStyles:r1236075235" /></div><div role="navigation" class="navbox authority-control" aria-labelledby="Authority_control_databases_frameless&amp;#124;text-top&amp;#124;10px&amp;#124;alt=Edit_this_at_Wikidata&amp;#124;link=https&amp;#58;//www.wikidata.org/wiki/Q380679#identifiers&amp;#124;class=noprint&amp;#124;Edit_this_at_Wikidata1058" style="padding:3px"><table class="nowraplinks hlist mw-collapsible autocollapse navbox-inner" style="border-spacing:0;background:transparent;color:inherit"><tbody><tr><th scope="col" class="navbox-title" colspan="2"><div id="Authority_control_databases_frameless&amp;#124;text-top&amp;#124;10px&amp;#124;alt=Edit_this_at_Wikidata&amp;#124;link=https&amp;#58;//www.wikidata.org/wiki/Q380679#identifiers&amp;#124;class=noprint&amp;#124;Edit_this_at_Wikidata1058" style="font-size:114%;margin:0 4em"><a href="/wiki/Help:Authority_control" title="Help:Authority control">Authority control databases</a> <span class="mw-valign-text-top noprint" typeof="mw:File/Frameless"><a href="https://www.wikidata.org/wiki/Q380679#identifiers" title="Edit this at Wikidata"><img alt="Edit this at Wikidata" src="//upload.wikimedia.org/wikipedia/en/thumb/8/8a/OOjs_UI_icon_edit-ltr-progressive.svg/20px-OOjs_UI_icon_edit-ltr-progressive.svg.png" decoding="async" width="10" height="10" class="mw-file-element" data-file-width="20" data-file-height="20" /></a></span></div></th></tr><tr><th scope="row" class="navbox-group" style="width:1%">National</th><td class="navbox-list-with-group navbox-list navbox-odd" style="width:100%;padding:0"><div style="padding:0 0.25em"><ul><li><span class="uid"><a rel="nofollow" class="external text" href="https://d-nb.info/gnd/4125677-3">Germany</a></span></li><li><span class="uid"><a rel="nofollow" class="external text" href="https://id.loc.gov/authorities/sh85040313">United States</a></span></li><li><span class="uid"><a rel="nofollow" class="external text" href="https://catalogue.bnf.fr/ark:/12148/cb11978098s">France</a></span></li><li><span class="uid"><a rel="nofollow" class="external text" href="https://data.bnf.fr/ark:/12148/cb11978098s">BnF data</a></span></li><li><span class="uid"><a rel="nofollow" class="external text" href="https://id.ndl.go.jp/auth/ndlna/00571739">Japan</a></span></li><li><span class="uid"><a rel="nofollow" class="external text" href="https://datos.bne.es/resource/XX543843">Spain</a></span></li><li><span class="uid"><a rel="nofollow" class="external text" href="https://www.nli.org.il/en/authorities/987007567971605171">Israel</a></span></li></ul></div></td></tr><tr><th scope="row" class="navbox-group" style="width:1%">Other</th><td class="navbox-list-with-group navbox-list navbox-even" style="width:100%;padding:0"><div style="padding:0 0.25em"><ul><li><span class="uid"><a rel="nofollow" class="external text" href="https://lux.collections.yale.edu/view/concept/cc665e92-424f-433f-a61c-60e09af71124">Yale LUX</a></span></li></ul></div></td></tr></tbody></table></div>
<!-- 
NewPP limit report
Parsed by mw‐web.eqiad.main‐5f578674cf‐h8w5h
Cached time: 20250806223825
Cache expiry: 2592000
Reduced expiry: false
Complications: [vary‐revision‐sha1, show‐toc]
CPU time usage: 1.202 seconds
Real time usage: 1.636 seconds
Preprocessor visited node count: 5686/1000000
Revision size: 60633/2097152 bytes
Post‐expand include size: 158033/2097152 bytes
Template argument size: 6914/2097152 bytes
Highest expansion depth: 12/100
Expensive parser function count: 9/500
Unstrip recursion depth: 1/20
Unstrip post‐expand size: 137143/5000000 bytes
Lua time usage: 0.697/10.000 seconds
Lua memory usage: 21467189/52428800 bytes
Number of Wikibase entities loaded: 1/500
-->
<!--
Transclusion expansion time report (%,ms,calls,template)
100.00% 1089.396      1 -total
 24.35%  265.225      1 Template:Reflist
 15.00%  163.456      6 Template:Annotated_link
 13.35%  145.452     15 Template:Citation
 11.12%  121.121      1 Template:Short_description
 10.94%  119.212      1 Template:Optimization_algorithms
 10.65%  115.967      1 Template:Navbox_with_collapsible_groups
  7.89%   85.940      2 Template:Pagetype
  6.84%   74.559      1 Template:ISBN
  4.98%   54.223      4 Template:Cite_book
-->

<!-- Saved in parser cache with key enwiki:pcache:125297:|#|:idhash:canonical and timestamp 20250806223825 and revision id 1302979653. Rendering was triggered because: page-view
 -->
</div><noscript><img src="https://en.wikipedia.org/wiki/Special:CentralAutoLogin/start?type=1x1&amp;usesul3=1" alt="" width="1" height="1" style="border: none; position: absolute;"></noscript>
<div class="printfooter" data-nosnippet="">Retrieved from "<a dir="ltr" href="https://en.wikipedia.org/w/index.php?title=Dynamic_programming&amp;oldid=1302979653">https://en.wikipedia.org/w/index.php?title=Dynamic_programming&amp;oldid=1302979653</a>"</div></div>
					<div id="catlinks" class="catlinks" data-mw="interface"><div id="mw-normal-catlinks" class="mw-normal-catlinks"><a href="/wiki/Help:Category" title="Help:Category">Categories</a>: <ul><li><a href="/wiki/Category:Dynamic_programming" title="Category:Dynamic programming">Dynamic programming</a></li><li><a href="/wiki/Category:Optimization_algorithms_and_methods" title="Category:Optimization algorithms and methods">Optimization algorithms and methods</a></li><li><a href="/wiki/Category:Equations" title="Category:Equations">Equations</a></li><li><a href="/wiki/Category:Systems_engineering" title="Category:Systems engineering">Systems engineering</a></li><li><a href="/wiki/Category:Optimal_control" title="Category:Optimal control">Optimal control</a></li></ul></div><div id="mw-hidden-catlinks" class="mw-hidden-catlinks mw-hidden-cats-hidden">Hidden categories: <ul><li><a href="/wiki/Category:Articles_with_short_description" title="Category:Articles with short description">Articles with short description</a></li><li><a href="/wiki/Category:Short_description_is_different_from_Wikidata" title="Category:Short description is different from Wikidata">Short description is different from Wikidata</a></li><li><a href="/wiki/Category:Articles_needing_additional_references_from_May_2013" title="Category:Articles needing additional references from May 2013">Articles needing additional references from May 2013</a></li><li><a href="/wiki/Category:All_articles_needing_additional_references" title="Category:All articles needing additional references">All articles needing additional references</a></li><li><a href="/wiki/Category:Webarchive_template_wayback_links" title="Category:Webarchive template wayback links">Webarchive template wayback links</a></li></ul></div></div>
				</div>
			</main>
			
		</div>
		<div class="mw-footer-container">
			
<footer id="footer" class="mw-footer" >
	<ul id="footer-info">
	<li id="footer-info-lastmod"> This page was last edited on 28 July 2025, at 13:00<span class="anonymous-show">&#160;(UTC)</span>.</li>
	<li id="footer-info-copyright">Text is available under the <a href="/wiki/Wikipedia:Text_of_the_Creative_Commons_Attribution-ShareAlike_4.0_International_License" title="Wikipedia:Text of the Creative Commons Attribution-ShareAlike 4.0 International License">Creative Commons Attribution-ShareAlike 4.0 License</a>;
additional terms may apply. By using this site, you agree to the <a href="https://foundation.wikimedia.org/wiki/Special:MyLanguage/Policy:Terms_of_Use" class="extiw" title="foundation:Special:MyLanguage/Policy:Terms of Use">Terms of Use</a> and <a href="https://foundation.wikimedia.org/wiki/Special:MyLanguage/Policy:Privacy_policy" class="extiw" title="foundation:Special:MyLanguage/Policy:Privacy policy">Privacy Policy</a>. Wikipedia® is a registered trademark of the <a rel="nofollow" class="external text" href="https://wikimediafoundation.org/">Wikimedia Foundation, Inc.</a>, a non-profit organization.</li>
</ul>

	<ul id="footer-places">
	<li id="footer-places-privacy"><a href="https://foundation.wikimedia.org/wiki/Special:MyLanguage/Policy:Privacy_policy">Privacy policy</a></li>
	<li id="footer-places-about"><a href="/wiki/Wikipedia:About">About Wikipedia</a></li>
	<li id="footer-places-disclaimers"><a href="/wiki/Wikipedia:General_disclaimer">Disclaimers</a></li>
	<li id="footer-places-contact"><a href="//en.wikipedia.org/wiki/Wikipedia:Contact_us">Contact Wikipedia</a></li>
	<li id="footer-places-wm-codeofconduct"><a href="https://foundation.wikimedia.org/wiki/Special:MyLanguage/Policy:Universal_Code_of_Conduct">Code of Conduct</a></li>
	<li id="footer-places-developers"><a href="https://developer.wikimedia.org">Developers</a></li>
	<li id="footer-places-statslink"><a href="https://stats.wikimedia.org/#/en.wikipedia.org">Statistics</a></li>
	<li id="footer-places-cookiestatement"><a href="https://foundation.wikimedia.org/wiki/Special:MyLanguage/Policy:Cookie_statement">Cookie statement</a></li>
	<li id="footer-places-mobileview"><a href="//en.m.wikipedia.org/w/index.php?title=Dynamic_programming&amp;printable=yes&amp;mobileaction=toggle_view_mobile" class="noprint stopMobileRedirectToggle">Mobile view</a></li>
</ul>

	<ul id="footer-icons" class="noprint">
	<li id="footer-copyrightico"><a href="https://www.wikimedia.org/" class="cdx-button cdx-button--fake-button cdx-button--size-large cdx-button--fake-button--enabled"><picture><source media="(min-width: 500px)" srcset="/static/images/footer/wikimedia-button.svg" width="84" height="29"><img src="/static/images/footer/wikimedia.svg" width="25" height="25" alt="Wikimedia Foundation" lang="en" loading="lazy"></picture></a></li>
	<li id="footer-poweredbyico"><a href="https://www.mediawiki.org/" class="cdx-button cdx-button--fake-button cdx-button--size-large cdx-button--fake-button--enabled"><picture><source media="(min-width: 500px)" srcset="/w/resources/assets/poweredby_mediawiki.svg" width="88" height="31"><img src="/w/resources/assets/mediawiki_compact.svg" alt="Powered by MediaWiki" lang="en" width="25" height="25" loading="lazy"></picture></a></li>
</ul>

</footer>

		</div>
	</div> 
</div> 
<div class="vector-header-container vector-sticky-header-container no-font-mode-scale">
	<div id="vector-sticky-header" class="vector-sticky-header">
		<div class="vector-sticky-header-start">
			<div class="vector-sticky-header-icon-start vector-button-flush-left vector-button-flush-right" aria-hidden="true">
				<button class="cdx-button cdx-button--weight-quiet cdx-button--icon-only vector-sticky-header-search-toggle" tabindex="-1" data-event-name="ui.vector-sticky-search-form.icon"><span class="vector-icon mw-ui-icon-search mw-ui-icon-wikimedia-search"></span>

<span>Search</span>
			</button>
		</div>
			
		<div role="search" class="vector-search-box-vue  vector-search-box-show-thumbnail vector-search-box">
			<div class="vector-typeahead-search-container">
				<div class="cdx-typeahead-search cdx-typeahead-search--show-thumbnail">
					<form action="/w/index.php" id="vector-sticky-search-form" class="cdx-search-input cdx-search-input--has-end-button">
						<div  class="cdx-search-input__input-wrapper"  data-search-loc="header-moved">
							<div class="cdx-text-input cdx-text-input--has-start-icon">
								<input
									class="cdx-text-input__input mw-searchInput" autocomplete="off"
									
									type="search" name="search" placeholder="Search Wikipedia">
								<span class="cdx-text-input__icon cdx-text-input__start-icon"></span>
							</div>
							<input type="hidden" name="title" value="Special:Search">
						</div>
						<button class="cdx-button cdx-search-input__end-button">Search</button>
					</form>
				</div>
			</div>
		</div>
		<div class="vector-sticky-header-context-bar">
				<nav aria-label="Contents" class="vector-toc-landmark">
						
					<div id="vector-sticky-header-toc" class="vector-dropdown mw-portlet mw-portlet-sticky-header-toc vector-sticky-header-toc vector-button-flush-left"  >
						<input type="checkbox" id="vector-sticky-header-toc-checkbox" role="button" aria-haspopup="true" data-event-name="ui.dropdown-vector-sticky-header-toc" class="vector-dropdown-checkbox "  aria-label="Toggle the table of contents"  >
						<label id="vector-sticky-header-toc-label" for="vector-sticky-header-toc-checkbox" class="vector-dropdown-label cdx-button cdx-button--fake-button cdx-button--fake-button--enabled cdx-button--weight-quiet cdx-button--icon-only " aria-hidden="true"  ><span class="vector-icon mw-ui-icon-listBullet mw-ui-icon-wikimedia-listBullet"></span>

<span class="vector-dropdown-label-text">Toggle the table of contents</span>
						</label>
						<div class="vector-dropdown-content">
					
						<div id="vector-sticky-header-toc-unpinned-container" class="vector-unpinned-container">
						</div>
					
						</div>
					</div>
			</nav>
				<div class="vector-sticky-header-context-bar-primary" aria-hidden="true" ><span class="mw-page-title-main">Dynamic programming</span></div>
			</div>
		</div>
		<div class="vector-sticky-header-end" aria-hidden="true">
			<div class="vector-sticky-header-icons">
				<a href="#" class="cdx-button cdx-button--fake-button cdx-button--fake-button--enabled cdx-button--weight-quiet cdx-button--icon-only" id="ca-talk-sticky-header" tabindex="-1" data-event-name="talk-sticky-header"><span class="vector-icon mw-ui-icon-speechBubbles mw-ui-icon-wikimedia-speechBubbles"></span>

<span></span>
			</a>
			<a href="#" class="cdx-button cdx-button--fake-button cdx-button--fake-button--enabled cdx-button--weight-quiet cdx-button--icon-only" id="ca-subject-sticky-header" tabindex="-1" data-event-name="subject-sticky-header"><span class="vector-icon mw-ui-icon-article mw-ui-icon-wikimedia-article"></span>

<span></span>
			</a>
			<a href="#" class="cdx-button cdx-button--fake-button cdx-button--fake-button--enabled cdx-button--weight-quiet cdx-button--icon-only" id="ca-history-sticky-header" tabindex="-1" data-event-name="history-sticky-header"><span class="vector-icon mw-ui-icon-wikimedia-history mw-ui-icon-wikimedia-wikimedia-history"></span>

<span></span>
			</a>
			<a href="#" class="cdx-button cdx-button--fake-button cdx-button--fake-button--enabled cdx-button--weight-quiet cdx-button--icon-only mw-watchlink" id="ca-watchstar-sticky-header" tabindex="-1" data-event-name="watch-sticky-header"><span class="vector-icon mw-ui-icon-wikimedia-star mw-ui-icon-wikimedia-wikimedia-star"></span>

<span></span>
			</a>
			<a href="#" class="cdx-button cdx-button--fake-button cdx-button--fake-button--enabled cdx-button--weight-quiet cdx-button--icon-only" id="ca-edit-sticky-header" tabindex="-1" data-event-name="wikitext-edit-sticky-header"><span class="vector-icon mw-ui-icon-wikimedia-wikiText mw-ui-icon-wikimedia-wikimedia-wikiText"></span>

<span></span>
			</a>
			<a href="#" class="cdx-button cdx-button--fake-button cdx-button--fake-button--enabled cdx-button--weight-quiet cdx-button--icon-only" id="ca-ve-edit-sticky-header" tabindex="-1" data-event-name="ve-edit-sticky-header"><span class="vector-icon mw-ui-icon-wikimedia-edit mw-ui-icon-wikimedia-wikimedia-edit"></span>

<span></span>
			</a>
			<a href="#" class="cdx-button cdx-button--fake-button cdx-button--fake-button--enabled cdx-button--weight-quiet cdx-button--icon-only" id="ca-viewsource-sticky-header" tabindex="-1" data-event-name="ve-edit-protected-sticky-header"><span class="vector-icon mw-ui-icon-wikimedia-editLock mw-ui-icon-wikimedia-wikimedia-editLock"></span>

<span></span>
			</a>
		</div>
			<div class="vector-sticky-header-buttons">
				<button class="cdx-button cdx-button--weight-quiet mw-interlanguage-selector" id="p-lang-btn-sticky-header" tabindex="-1" data-event-name="ui.dropdown-p-lang-btn-sticky-header"><span class="vector-icon mw-ui-icon-wikimedia-language mw-ui-icon-wikimedia-wikimedia-language"></span>

<span>41 languages</span>
			</button>
			<a href="#" class="cdx-button cdx-button--fake-button cdx-button--fake-button--enabled cdx-button--weight-quiet cdx-button--action-progressive" id="ca-addsection-sticky-header" tabindex="-1" data-event-name="addsection-sticky-header"><span class="vector-icon mw-ui-icon-speechBubbleAdd-progressive mw-ui-icon-wikimedia-speechBubbleAdd-progressive"></span>

<span>Add topic</span>
			</a>
		</div>
			<div class="vector-sticky-header-icon-end">
				<div class="vector-user-links">
				</div>
			</div>
		</div>
	</div>
</div>
<div class="mw-portlet mw-portlet-dock-bottom emptyPortlet" id="p-dock-bottom">
	<ul>
		
	</ul>
</div>
<script>(RLQ=window.RLQ||[]).push(function(){mw.config.set({"wgHostname":"mw-web.eqiad.main-5f84f56cbb-2g22f","wgBackendResponseTime":138,"wgPageParseReport":{"limitreport":{"cputime":"1.202","walltime":"1.636","ppvisitednodes":{"value":5686,"limit":1000000},"revisionsize":{"value":60633,"limit":2097152},"postexpandincludesize":{"value":158033,"limit":2097152},"templateargumentsize":{"value":6914,"limit":2097152},"expansiondepth":{"value":12,"limit":100},"expensivefunctioncount":{"value":9,"limit":500},"unstrip-depth":{"value":1,"limit":20},"unstrip-size":{"value":137143,"limit":5000000},"entityaccesscount":{"value":1,"limit":500},"timingprofile":["100.00% 1089.396      1 -total"," 24.35%  265.225      1 Template:Reflist"," 15.00%  163.456      6 Template:Annotated_link"," 13.35%  145.452     15 Template:Citation"," 11.12%  121.121      1 Template:Short_description"," 10.94%  119.212      1 Template:Optimization_algorithms"," 10.65%  115.967      1 Template:Navbox_with_collapsible_groups","  7.89%   85.940      2 Template:Pagetype","  6.84%   74.559      1 Template:ISBN","  4.98%   54.223      4 Template:Cite_book"]},"scribunto":{"limitreport-timeusage":{"value":"0.697","limit":"10.000"},"limitreport-memusage":{"value":21467189,"limit":52428800}},"cachereport":{"origin":"mw-web.eqiad.main-5f578674cf-h8w5h","timestamp":"20250806223825","ttl":2592000,"transientcontent":false}}});});</script>
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@type":"Article","name":"Dynamic programming","url":"https:\/\/en.wikipedia.org\/wiki\/Dynamic_programming","sameAs":"http:\/\/www.wikidata.org\/entity\/Q380679","mainEntity":"http:\/\/www.wikidata.org\/entity\/Q380679","author":{"@type":"Organization","name":"Contributors to Wikimedia projects"},"publisher":{"@type":"Organization","name":"Wikimedia Foundation, Inc.","logo":{"@type":"ImageObject","url":"https:\/\/www.wikimedia.org\/static\/images\/wmf-hor-googpub.png"}},"datePublished":"2002-10-22T15:29:26Z","dateModified":"2025-07-28T13:00:35Z","image":"https:\/\/upload.wikimedia.org\/wikipedia\/commons\/0\/03\/Shortest_path_optimal_substructure.svg","headline":"problem optimization method that simplifies a complicated problem by decomposing it into simpler subproblems recursively"}</script>
</body>
</html>l>an>

<span>Search</span>
			</button>
		</div>
			
		<div role="search" class="vector-search-box-vue  vector-search-box-show-thumbnail vector-search-box">
			<div class="vector-typeahead-search-container">
				<div class="cdx-typeahead-search cdx-typeahead-search--show-thumbnail">
					<form action="/w/index.php" id="vector-sticky-search-form" class="cdx-search-input cdx-search-input--has-end-button">
						<div  class="cdx-search-input__input-wrapper"  data-search-loc="header-moved">
							<div class="cdx-text-input cdx-text-input--has-start-icon">
								<input
									class="cdx-text-input__input mw-searchInput" autocomplete="off"
									
									type="search" name="search" placeholder="Search Wikipedia">
								<span class="cdx-text-input__icon cdx-text-input__start-icon"></span>
							</div>
							<input type="hidden" name="title" value="Special:Search">
						</div>
						<button class="cdx-button cdx-search-input__end-button">Search</button>
					</form>
				</div>
			</div>
		</div>
		<div class="vector-sticky-header-context-bar">
				<nav aria-label="Contents" class="vector-toc-landmark">
						
					<div id="vector-sticky-header-toc" class="vector-dropdown mw-portlet mw-portlet-sticky-header-toc vector-sticky-header-toc vector-button-flush-left"  >
						<input type="checkbox" id="vector-sticky-header-toc-checkbox" role="button" aria-haspopup="true" data-event-name="ui.dropdown-vector-sticky-header-toc" class="vector-dropdown-checkbox "  aria-label="Toggle the table of contents"  >
						<label id="vector-sticky-header-toc-label" for="vector-sticky-header-toc-checkbox" class="vector-dropdown-label cdx-button cdx-button--fake-button cdx-button--fake-button--enabled cdx-button--weight-quiet cdx-button--icon-only " aria-hidden="true"  ><span class="vector-icon mw-ui-icon-listBullet mw-ui-icon-wikimedia-listBullet"></span>

<span class="vector-dropdown-label-text">Toggle the table of contents</span>
						</label>
						<div class="vector-dropdown-content">
					
						<div id="vector-sticky-header-toc-unpinned-container" class="vector-unpinned-container">
						</div>
					
						</div>
					</div>
			</nav>
				<div class="vector-sticky-header-context-bar-primary" aria-hidden="true" ><span class="mw-page-title-main">Dynamic programming</span></div>
			</div>
		</div>
		<div class="vector-sticky-header-end" aria-hidden="true">
			<div class="vector-sticky-header-icons">
				<a href="#" class="cdx-button cdx-button--fake-button cdx-button--fake-button--enabled cdx-button--weight-quiet cdx-button--icon-only" id="ca-talk-sticky-header" tabindex="-1" data-event-name="talk-sticky-header"><span class="vector-icon mw-ui-icon-speechBubbles mw-ui-icon-wikimedia-speechBubbles"></span>

<span></span>
			</a>
			<a href="#" class="cdx-button cdx-button--fake-button cdx-button--fake-button--enabled cdx-button--weight-quiet cdx-button--icon-only" id="ca-subject-sticky-header" tabindex="-1" data-event-name="subject-sticky-header"><span class="vector-icon mw-ui-icon-article mw-ui-icon-wikimedia-article"></span>

<span></span>
			</a>
			<a href="#" class="cdx-button cdx-button--fake-button cdx-button--fake-button--enabled cdx-button--weight-quiet cdx-button--icon-only" id="ca-history-sticky-header" tabindex="-1" data-event-name="history-sticky-header"><span class="vector-icon mw-ui-icon-wikimedia-history mw-ui-icon-wikimedia-wikimedia-history"></span>

<span></span>
			</a>
			<a href="#" class="cdx-button cdx-button--fake-button cdx-button--fake-button--enabled cdx-button--weight-quiet cdx-button--icon-only mw-watchlink" id="ca-watchstar-sticky-header" tabindex="-1" data-event-name="watch-sticky-header"><span class="vector-icon mw-ui-icon-wikimedia-star mw-ui-icon-wikimedia-wikimedia-star"></span>

<span></span>
			</a>
			<a href="#" class="cdx-button cdx-button--fake-button cdx-button--fake-button--enabled cdx-button--weight-quiet cdx-button--icon-only" id="ca-edit-sticky-header" tabindex="-1" data-event-name="wikitext-edit-sticky-header"><span class="vector-icon mw-ui-icon-wikimedia-wikiText mw-ui-icon-wikimedia-wikimedia-wikiText"></span>

<span></span>
			</a>
			<a href="#" class="cdx-button cdx-button--fake-button cdx-button--fake-button--enabled cdx-button--weight-quiet cdx-button--icon-only" id="ca-ve-edit-sticky-header" tabindex="-1" data-event-name="ve-edit-sticky-header"><span class="vector-icon mw-ui-icon-wikimedia-edit mw-ui-icon-wikimedia-wikimedia-edit"></span>

<span></span>
			</a>
			<a href="#" class="cdx-button cdx-button--fake-button cdx-button--fake-button--enabled cdx-button--weight-quiet cdx-button--icon-only" id="ca-viewsource-sticky-header" tabindex="-1" data-event-name="ve-edit-protected-sticky-header"><span class="vector-icon mw-ui-icon-wikimedia-editLock mw-ui-icon-wikimedia-wikimedia-editLock"></span>

<span></span>
			</a>
		</div>
			<div class="vector-sticky-header-buttons">
				<button class="cdx-button cdx-button--weight-quiet mw-interlanguage-selector" id="p-lang-btn-sticky-header" tabindex="-1" data-event-name="ui.dropdown-p-lang-btn-sticky-header"><span class="vector-icon mw-ui-icon-wikimedia-language mw-ui-icon-wikimedia-wikimedia-language"></span>

<span>41 languages</span>
			</button>
			<a href="#" class="cdx-button cdx-button--fake-button cdx-button--fake-button--enabled cdx-button--weight-quiet cdx-button--action-progressive" id="ca-addsection-sticky-header" tabindex="-1" data-event-name="addsection-sticky-header"><span class="vector-icon mw-ui-icon-speechBubbleAdd-progressive mw-ui-icon-wikimedia-speechBubbleAdd-progressive"></span>

<span>Add topic</span>
			</a>
		</div>
			<div class="vector-sticky-header-icon-end">
				<div class="vector-user-links">
				</div>
			</div>
		</div>
	</div>
</div>
<div class="mw-portlet mw-portlet-dock-bottom emptyPortlet" id="p-dock-bottom">
	<ul>
		
	</ul>
</div>
<script>(RLQ=window.RLQ||[]).push(function(){mw.config.set({"wgHostname":"mw-web.eqiad.main-5f84f56cbb-cnjbt","wgBackendResponseTime":156,"wgPageParseReport":{"limitreport":{"cputime":"1.202","walltime":"1.636","ppvisitednodes":{"value":5686,"limit":1000000},"revisionsize":{"value":60633,"limit":2097152},"postexpandincludesize":{"value":158033,"limit":2097152},"templateargumentsize":{"value":6914,"limit":2097152},"expansiondepth":{"value":12,"limit":100},"expensivefunctioncount":{"value":9,"limit":500},"unstrip-depth":{"value":1,"limit":20},"unstrip-size":{"value":137143,"limit":5000000},"entityaccesscount":{"value":1,"limit":500},"timingprofile":["100.00% 1089.396      1 -total"," 24.35%  265.225      1 Template:Reflist"," 15.00%  163.456      6 Template:Annotated_link"," 13.35%  145.452     15 Template:Citation"," 11.12%  121.121      1 Template:Short_description"," 10.94%  119.212      1 Template:Optimization_algorithms"," 10.65%  115.967      1 Template:Navbox_with_collapsible_groups","  7.89%   85.940      2 Template:Pagetype","  6.84%   74.559      1 Template:ISBN","  4.98%   54.223      4 Template:Cite_book"]},"scribunto":{"limitreport-timeusage":{"value":"0.697","limit":"10.000"},"limitreport-memusage":{"value":21467189,"limit":52428800}},"cachereport":{"origin":"mw-web.eqiad.main-5f578674cf-h8w5h","timestamp":"20250806223825","ttl":2592000,"transientcontent":false}}});});</script>
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@type":"Article","name":"Dynamic programming","url":"https:\/\/en.wikipedia.org\/wiki\/Dynamic_programming","sameAs":"http:\/\/www.wikidata.org\/entity\/Q380679","mainEntity":"http:\/\/www.wikidata.org\/entity\/Q380679","author":{"@type":"Organization","name":"Contributors to Wikimedia projects"},"publisher":{"@type":"Organization","name":"Wikimedia Foundation, Inc.","logo":{"@type":"ImageObject","url":"https:\/\/www.wikimedia.org\/static\/images\/wmf-hor-googpub.png"}},"datePublished":"2002-10-22T15:29:26Z","dateModified":"2025-07-28T13:00:35Z","image":"https:\/\/upload.wikimedia.org\/wikipedia\/commons\/0\/03\/Shortest_path_optimal_substructure.svg","headline":"problem optimization method that simplifies a complicated problem by decomposing it into simpler subproblems recursively"}</script>
</body>
</html>