<!DOCTYPE html>
<html lang="en" class="no-js">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <!-- Mobile viewport optimization h5bp.com/ad -->
    <meta name="HandheldFriendly" content="True">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <!-- OpenGraph metadata when sharing links, e.g., on FB -->
    <meta property="og:title" content="Princeton University Library Catalog" />

    <title>Princeton University Library Catalog</title>
    <link href="https://catalog.princeton.edu/catalog/opensearch.xml" title="Princeton University Library Catalog" type="application/opensearchdescription+xml" rel="search" />
    <link rel="icon" type="image/x-icon" href="/assets/favicon-d278d313ce27645290d60126dc43dc8f0e84a9ba48f4efce479d6f0658b6bf75.ico" />
    <link rel="stylesheet" href="/assets/application-aa6e0f76f012c65cc9486faaf35f5bbad499cf2fbb19cbad4c4589d08d4d4d08.css" media="screen" />
    <link rel="stylesheet" href="/assets/print-65b3a354c63f854c3151dcc59603466a826c05455bcd06aba0cb3ffd37116ee4.css" media="print" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
      <script src="/assets/application-7b1d5efadcf8df08986f407d64795e32b96e54309edff246c81e89965e6e2db1.js"></script>
      <script src="/vite/assets/application-CMjD35aN.js" crossorigin="anonymous" type="module"></script><link rel="modulepreload" href="/vite/assets/lux_import-CzLsbIVj.js" as="script" crossorigin="anonymous"><link rel="stylesheet" href="/vite/assets/lux_import-DeDwPKcV.css" media="screen" />
    <script>window.Global = {"graphql":{"uri":"https://figgy.princeton.edu/graphql"},"figgy":{"url":"https://figgy.princeton.edu"}}</script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.2/MathJax.js?config=TeX-MML-AM_CHTML" async="async"></script>
    <script src="https://www.google.com/books/jsapi.js" defer="defer"></script>
    <meta name="csrf-param" content="authenticity_token" />
<meta name="csrf-token" content="SDzLR5oeY3MMNz-nsul2DzNDQ9YBIeu-HmpEJgrH-HmQxcga6gJKOcOdtFwBI1u6uVW5rdpma_9pxn6huqYJWQ" />
    
    <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-GR4L7BBS5K"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-GR4L7BBS5K', {
    'cookie_domain': window.location.hostname
  });
  window.StackMapPopupCallback = function () {
    gtag('event', 'stackmap_clicks');
  }
</script>

  </head>

  <body class="blacklight-catalog blacklight-catalog-index"
        data-bibdata-base-url="https://bibdata.princeton.edu" >
  <nav id="skip-link" role="navigation" aria-label="Skip links">
      <a class="element-invisible element-focusable rounded-bottom py-2 px-3" data-turbolinks="false" href="#search_field">Skip to search</a>
    <a class="element-invisible element-focusable rounded-bottom py-2 px-3" data-turbolinks="false" href="#main-container">Skip to main content</a>
    
  </nav>
    <div class="col-12 alert alert-warning announcement">
    <div class="container">
      <p>
      The 'Where to find it' service is being moved to an updated interface this summer. The previous version of the service is no longer available. Thanks for your patience during this transition. See our <a href='https://library.princeton.edu/sites/g/files/toruqf6021/files/documents/call-number-info_31.pdf'>call number location guide</a> for Firestone Library materials. Please contact <a href='https://library.princeton.edu/help'>Ask Us</a> for assistance.
      </p>
    </div>
  </div>

<header class="lux">
  <div class="pul_header">
      <orangelight-header bookmarks="0" :logged-in="false"></orangelight-header>
  </div>

    <div class="header__secondary">
      <nav class="container" aria-label='Search'>
        <div class="row">
          <div id="search-navbar" class="search-navbar navbar" role="search">
            <form class="search-query-form" action="https://catalog.princeton.edu/catalog" accept-charset="UTF-8" method="get">
  
    <label class="visually-hidden" for="search_field">Search in</label>
  <div class="input-group">
    

        <select id="search_field" aria-label="Targeted search options" class="form-select search-field" name="search_field"><option data-placeholder="Search..." value="all_fields">Keyword</option>
<option data-placeholder="Search..." value="title">Title (keyword)</option>
<option data-placeholder="Search..." value="author">Author (keyword)</option>
<option data-placeholder="Search..." value="subject">Subject (keyword)</option>
<option data-placeholder="Search..." value="left_anchor">Title starts with</option>
<option data-placeholder="Search..." value="browse_subject">Subject (browse)</option>
<option data-placeholder="Search..." value="browse_name">Author (browse)</option>
<option data-placeholder="Last name, first name. Title" value="name_title">Author (sorted by title)</option>
<option data-placeholder="e.g. P19.737.3" value="browse_cn">Call number (browse)</option></select>

    <label class="visually-hidden" for="q">search for</label>
      <span class="search-input">
            <input placeholder="Search..." class="search_q q form-control rounded-0" aria-label="search for" id="q" type="search" name="q" />
      </span>

    
        <button type="submit" class="btn btn-primary search-btn" id="search">
          <span class="submit-search-text visually-hidden">Search</span>
          <i class="fa fa-search" aria-hidden="true"></i>
        </button>
  </div>
</form>

            <ul class="search-options">
              <li>
                <a class="advanced_search" href="/advanced">Advanced Search</a>
              </li>
            </ul>
            <div class="user-utils">
  <ul class="nav justify-content-end">
    
      <li class="nav-item"><a id="bookmarks_nav" class="nav-link" href="/bookmarks">
  Bookmarks
  <span class="bookmarks-parens">
    (<span class="bookmarks-count" data-role='bookmark-counter'>0</span>)
  </span>
</a></li>
  </ul>
</div>

          </div>
        <div>
      </nav>
    </div>
</header>


  <dialog id="blacklight-modal" class="modal" data-turbo="false">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
    </div>
  </div>
</dialog>
 <!-- only render if page is using modal -->

  <main id="main-container" tabindex="-1">
    <div class="container">

      <h1 class="visually-hidden application-heading">Princeton University Library Catalog</h1>

      <div class="row">
  <div class="col-md-12">
    <div id="main-flashes" class="">
      <div class="flash_messages">
  <div class="container">
      
      
      
      
  </div>
</div>

    </div>
  </div>
</div>


      <div class="row">
        <div class="col-12">
  
</div>
<div id="sidebar" class="col-12 col-md-4">
  <search>
    <div id="facets" class="facets sidenav facets-toggleable-md">
  <div class="facets-header">
    <h2 class="facets-heading">Limit your search</h2>

    <button class="btn btn-outline-secondary facet-toggle-button d-block d-lg-none" type="button" data-toggle="collapse" data-target="#facet-panel-collapse" data-bs-toggle="collapse" data-bs-target="#facet-panel-collapse" aria-controls="facet-panel-collapse" aria-expanded="false">
      <span data-show-label>Show facets</span>
      <span data-hide-label>Hide facets</span>
</button>  </div>

  <div id="facet-panel-collapse" class="facets-collapse collapse">
            <div class="card facet-limit blacklight-access_facet ">
  <h3 class="card-header p-0 facet-field-heading" id="facet-access_facet-header">
    <button
      type="button"
      class="btn w-100 d-block btn-block p-2 text-start text-left collapse-toggle "
      data-toggle="collapse"
      data-bs-toggle="collapse"
      data-target="#facet-access_facet"
      data-bs-target="#facet-access_facet"
      aria-expanded="true"
      aria-controls="facet-access_facet"
    >
          Access

    </button>
  </h3>
  <div id="facet-access_facet" role="region" aria-labelledby="facet-access_facet-header" class="panel-collapse facet-content collapse show">
    <div class="card-body">
          
    <ul class="facet-values list-unstyled">
      <li><span class="facet-label"><a class="facet-select" rel="nofollow" href="/?f%5Baccess_facet%5D%5B%5D=In+the+Library">In the Library</a></span><span class="facet-count">16,356,863</span></li><li><span class="facet-label"><a class="facet-select" rel="nofollow" href="/?f%5Baccess_facet%5D%5B%5D=Online">Online</a></span><span class="facet-count">6,947,805</span></li>
    </ul>


    </div>
  </div>
</div>
<div class="card facet-limit blacklight-location ">
  <h3 class="card-header p-0 facet-field-heading" id="facet-location-header">
    <button
      type="button"
      class="btn w-100 d-block btn-block p-2 text-start text-left collapse-toggle collapsed"
      data-toggle="collapse"
      data-bs-toggle="collapse"
      data-target="#facet-location"
      data-bs-target="#facet-location"
      aria-expanded="false"
      aria-controls="facet-location"
    >
          Library

    </button>
  </h3>
  <div id="facet-location" role="region" aria-labelledby="facet-location-header" class="panel-collapse facet-content collapse ">
    <div class="card-body">
          
    <ul class="facet-values list-unstyled">
      <li><span class="facet-label"><a class="facet-select" rel="nofollow" href="/?f%5Blocation%5D%5B%5D=Architecture+Library">Architecture Library</a></span><span class="facet-count">29,197</span></li><li><span class="facet-label"><a class="facet-select" rel="nofollow" href="/?f%5Blocation%5D%5B%5D=Commons+Library">Commons Library</a></span><span class="facet-count">2</span></li><li><span class="facet-label"><a class="facet-select" rel="nofollow" href="/?f%5Blocation%5D%5B%5D=East+Asian+Library">East Asian Library</a></span><span class="facet-count">218,879</span></li><li><span class="facet-label"><a class="facet-select" rel="nofollow" href="/?f%5Blocation%5D%5B%5D=Electronic+Access">Electronic Access</a></span><span class="facet-count">2</span></li><li><span class="facet-label"><a class="facet-select" rel="nofollow" href="/?f%5Blocation%5D%5B%5D=Engineering+Library">Engineering Library</a></span><span class="facet-count">27,628</span></li><li><span class="facet-label"><a class="facet-select" rel="nofollow" href="/?f%5Blocation%5D%5B%5D=Firestone+Library">Firestone Library</a></span><span class="facet-count">1,644,242</span></li><li><span class="facet-label"><a class="facet-select" rel="nofollow" href="/?f%5Blocation%5D%5B%5D=Forrestal+Annex">Forrestal Annex</a></span><span class="facet-count">331,464</span></li><li><span class="facet-label"><a class="facet-select" rel="nofollow" href="/?f%5Blocation%5D%5B%5D=Harold+P.+Furth+Plasma+Physics+Library">Harold P. Furth Plasma Physics Library</a></span><span class="facet-count">9,676</span></li><li><span class="facet-label"><a class="facet-select" rel="nofollow" href="/?f%5Blocation%5D%5B%5D=Lewis+Library">Lewis Library</a></span><span class="facet-count">180,167</span></li><li><span class="facet-label"><a class="facet-select" rel="nofollow" href="/?f%5Blocation%5D%5B%5D=Marquand+Library">Marquand Library</a></span><span class="facet-count">492,503</span></li><li><span class="facet-label"><a class="facet-select" rel="nofollow" href="/?f%5Blocation%5D%5B%5D=Mendel+Music+Library">Mendel Music Library</a></span><span class="facet-count">202,057</span></li><li><span class="facet-label"><a class="facet-select" rel="nofollow" href="/?f%5Blocation%5D%5B%5D=Mudd+Manuscript+Library">Mudd Manuscript Library</a></span><span class="facet-count">91,261</span></li><li><span class="facet-label"><a class="facet-select" rel="nofollow" href="/?f%5Blocation%5D%5B%5D=Obsolete+Locations">Obsolete Locations</a></span><span class="facet-count">2</span></li><li><span class="facet-label"><a class="facet-select" rel="nofollow" href="/?f%5Blocation%5D%5B%5D=ReCAP">ReCAP</a></span><span class="facet-count">12,810,738</span></li><li><span class="facet-label"><a class="facet-select" rel="nofollow" href="/?f%5Blocation%5D%5B%5D=Special+Collections">Special Collections</a></span><span class="facet-count">439,205</span></li><li><span class="facet-label"><a class="facet-select" rel="nofollow" href="/?f%5Blocation%5D%5B%5D=Stokes+Library">Stokes Library</a></span><span class="facet-count">29,658</span></li><li><span class="facet-label"><a class="facet-select" rel="nofollow" href="/?f%5Blocation%5D%5B%5D=Technical+Services">Technical Services</a></span><span class="facet-count">235</span></li>
    </ul>


    </div>
  </div>
</div>
<div class="card facet-limit blacklight-format ">
  <h3 class="card-header p-0 facet-field-heading" id="facet-format-header">
    <button
      type="button"
      class="btn w-100 d-block btn-block p-2 text-start text-left collapse-toggle "
      data-toggle="collapse"
      data-bs-toggle="collapse"
      data-target="#facet-format"
      data-bs-target="#facet-format"
      aria-expanded="true"
      aria-controls="facet-format"
    >
          Format

    </button>
  </h3>
  <div id="facet-format" role="region" aria-labelledby="facet-format-header" class="panel-collapse facet-content collapse show">
    <div class="card-body">
          
    <ul class="facet-values list-unstyled">
      <li><span class="icon icon-archival-item" aria-hidden="true"></span><span class="facet-label"><a class="facet-select" rel="nofollow" href="/?f%5Bformat%5D%5B%5D=Archival+item">Archival item</a></span><span class="facet-count">6,538</span></li><li><span class="icon icon-audio" aria-hidden="true"></span><span class="facet-label"><a class="facet-select" rel="nofollow" href="/?f%5Bformat%5D%5B%5D=Audio">Audio</a></span><span class="facet-count">407,966</span></li><li><span class="icon icon-book" aria-hidden="true"></span><span class="facet-label"><a class="facet-select" rel="nofollow" href="/?f%5Bformat%5D%5B%5D=Book">Book</a></span><span class="facet-count">21,090,807</span></li><li><span class="icon icon-coin" aria-hidden="true"></span><span class="facet-label"><a class="facet-select" rel="nofollow" href="/?f%5Bformat%5D%5B%5D=Coin">Coin</a></span><span class="facet-count">21,231</span></li><li><span class="icon icon-data-file" aria-hidden="true"></span><span class="facet-label"><a class="facet-select" rel="nofollow" href="/?f%5Bformat%5D%5B%5D=Data+file">Data file</a></span><span class="facet-count">11,553</span></li><li><span class="icon icon-databases" aria-hidden="true"></span><span class="facet-label"><a class="facet-select" rel="nofollow" href="/?f%5Bformat%5D%5B%5D=Databases">Databases</a></span><span class="facet-count">25,954</span></li><li><span class="icon icon-journal" aria-hidden="true"></span><span class="facet-label"><a class="facet-select" rel="nofollow" href="/?f%5Bformat%5D%5B%5D=Journal">Journal</a></span><span class="facet-count">970,194</span></li><li><span class="icon icon-manuscript" aria-hidden="true"></span><span class="facet-label"><a class="facet-select" rel="nofollow" href="/?f%5Bformat%5D%5B%5D=Manuscript">Manuscript</a></span><span class="facet-count">135,727</span></li><li><span class="icon icon-map" aria-hidden="true"></span><span class="facet-label"><a class="facet-select" rel="nofollow" href="/?f%5Bformat%5D%5B%5D=Map">Map</a></span><span class="facet-count">98,900</span></li><li><span class="icon icon-microform" aria-hidden="true"></span><span class="facet-label"><a class="facet-select" rel="nofollow" href="/?f%5Bformat%5D%5B%5D=Microform">Microform</a></span><span class="facet-count">271,789</span></li><li><span class="icon icon-musical-score" aria-hidden="true"></span><span class="facet-label"><a class="facet-select" rel="nofollow" href="/?f%5Bformat%5D%5B%5D=Musical+score">Musical score</a></span><span class="facet-count">232,561</span></li><li><span class="icon icon-senior-thesis" aria-hidden="true"></span><span class="facet-label"><a class="facet-select" rel="nofollow" href="/?f%5Bformat%5D%5B%5D=Senior+thesis">Senior thesis</a></span><span class="facet-count">81,685</span></li><li><span class="icon icon-video-projected-medium" aria-hidden="true"></span><span class="facet-label"><a class="facet-select" rel="nofollow" href="/?f%5Bformat%5D%5B%5D=Video%2FProjected+medium">Video/Projected medium</a></span><span class="facet-count">171,397</span></li><li><span class="icon icon-visual-material" aria-hidden="true"></span><span class="facet-label"><a class="facet-select" rel="nofollow" href="/?f%5Bformat%5D%5B%5D=Visual+material">Visual material</a></span><span class="facet-count">70,440</span></li>
    </ul>


    </div>
  </div>
</div>
<div class="card facet-limit blacklight-pub_date_start_sort ">
  <h3 class="card-header p-0 facet-field-heading" id="facet-pub_date_start_sort-header">
    <button
      type="button"
      class="btn w-100 d-block btn-block p-2 text-start text-left collapse-toggle collapsed"
      data-toggle="collapse"
      data-bs-toggle="collapse"
      data-target="#facet-pub_date_start_sort"
      data-bs-target="#facet-pub_date_start_sort"
      aria-expanded="false"
      aria-controls="facet-pub_date_start_sort"
    >
          Publication year

    </button>
  </h3>
  <div id="facet-pub_date_start_sort" role="region" aria-labelledby="facet-pub_date_start_sort-header" class="panel-collapse facet-content collapse ">
    <div class="card-body">
          <div class="limit_content range_limit pub_date_start_sort-config blrl-plot-config"
        data-chart-enabled="true"
        data-chart-segment-border-color="rgb(255, 217, 96)"
        data-chart-segment-bg-color="rgba(255, 217, 96, 0.5)"
        data-textual-facets="true"
        data-textual-facets-collapsible="true"
        data-range-list-heading-localized="Range List"
    >

      <!-- no results profile if missing is selected -->
        <div class="chart-wrapper mb-3" data-chart-wrapper="true" style="display: none; position: relative; width: 100%; aspect-ratio: 2;">
        </div>

        <form class="range_limit_form range_pub_date_start_sort d-flex justify-content-center" action="https://catalog.princeton.edu/" accept-charset="UTF-8" method="get">
  

  <div class="range-limit-input-group">
    <div class="d-flex justify-content-between align-items-end">
      <div class="d-flex flex-column mr-1 me-1">
        <label class="text-muted small mb-1" for="range_pub_date_start_sort_begin">Begin</label>
        <input type="number" name="range[pub_date_start_sort][begin]" id="range_pub_date_start_sort_begin" value="-1779" min="-2147483648" max="2147483648" class="form-control form-control-sm range_begin" />
      </div>

      <div class="d-flex flex-column ml-1 ms-1">
        <label class="text-muted small mb-1" for="range_pub_date_start_sort_end">End</label>
        <input type="number" name="range[pub_date_start_sort][end]" id="range_pub_date_start_sort_end" value="9999" min="-2147483648" max="2147483648" class="form-control form-control-sm range_end" />
      </div>
    </div>
    <div class="d-flex justify-content-end mt-2">
      <input type="submit" value="Apply limit" class="submit btn btn-sm btn-secondary" data-disable-with="Apply limit" />
    </div>
  </div>
</form>

          <div class="distribution chart_js">
            <!-- if we already fetched segments from solr, display them
                 here. Otherwise, display a link to fetch them, which JS
                 will AJAX fetch.  -->
              <ul class="facet-values list-unstyled ">
  <li><span class="facet-label"><a class="facet-select" rel="nofollow" href="/?range%5Bpub_date_start_sort%5D%5Bbegin%5D=1100&amp;range%5Bpub_date_start_sort%5D%5Bend%5D=1199"><span class="from" data-blrl-begin="1100">1100</span> to <span class="to" data-blrl-end="1199">1199</span></a></span><span class="facet-count">1,452</span></li><li><span class="facet-label"><a class="facet-select" rel="nofollow" href="/?range%5Bpub_date_start_sort%5D%5Bbegin%5D=1200&amp;range%5Bpub_date_start_sort%5D%5Bend%5D=1299"><span class="from" data-blrl-begin="1200">1200</span> to <span class="to" data-blrl-end="1299">1299</span></a></span><span class="facet-count">1,696</span></li><li><span class="facet-label"><a class="facet-select" rel="nofollow" href="/?range%5Bpub_date_start_sort%5D%5Bbegin%5D=1300&amp;range%5Bpub_date_start_sort%5D%5Bend%5D=1399"><span class="from" data-blrl-begin="1300">1300</span> to <span class="to" data-blrl-end="1399">1399</span></a></span><span class="facet-count">1,681</span></li><li><span class="facet-label"><a class="facet-select" rel="nofollow" href="/?range%5Bpub_date_start_sort%5D%5Bbegin%5D=1400&amp;range%5Bpub_date_start_sort%5D%5Bend%5D=1499"><span class="from" data-blrl-begin="1400">1400</span> to <span class="to" data-blrl-end="1499">1499</span></a></span><span class="facet-count">13,996</span></li><li><span class="facet-label"><a class="facet-select" rel="nofollow" href="/?range%5Bpub_date_start_sort%5D%5Bbegin%5D=1500&amp;range%5Bpub_date_start_sort%5D%5Bend%5D=1599"><span class="from" data-blrl-begin="1500">1500</span> to <span class="to" data-blrl-end="1599">1599</span></a></span><span class="facet-count">61,991</span></li><li><span class="facet-label"><a class="facet-select" rel="nofollow" href="/?range%5Bpub_date_start_sort%5D%5Bbegin%5D=1600&amp;range%5Bpub_date_start_sort%5D%5Bend%5D=1699"><span class="from" data-blrl-begin="1600">1600</span> to <span class="to" data-blrl-end="1699">1699</span></a></span><span class="facet-count">234,605</span></li><li><span class="facet-label"><a class="facet-select" rel="nofollow" href="/?range%5Bpub_date_start_sort%5D%5Bbegin%5D=1700&amp;range%5Bpub_date_start_sort%5D%5Bend%5D=1799"><span class="from" data-blrl-begin="1700">1700</span> to <span class="to" data-blrl-end="1799">1799</span></a></span><span class="facet-count">463,222</span></li><li><span class="facet-label"><a class="facet-select" rel="nofollow" href="/?range%5Bpub_date_start_sort%5D%5Bbegin%5D=1800&amp;range%5Bpub_date_start_sort%5D%5Bend%5D=1899"><span class="from" data-blrl-begin="1800">1800</span> to <span class="to" data-blrl-end="1899">1899</span></a></span><span class="facet-count">1,536,189</span></li><li><span class="facet-label"><a class="facet-select" rel="nofollow" href="/?range%5Bpub_date_start_sort%5D%5Bbegin%5D=1900&amp;range%5Bpub_date_start_sort%5D%5Bend%5D=1999"><span class="from" data-blrl-begin="1900">1900</span> to <span class="to" data-blrl-end="1999">1999</span></a></span><span class="facet-count">11,566,097</span></li><li><span class="facet-label"><a class="facet-select" rel="nofollow" href="/?range%5Bpub_date_start_sort%5D%5Bbegin%5D=2000&amp;range%5Bpub_date_start_sort%5D%5Bend%5D=2026"><span class="from" data-blrl-begin="2000">2000</span> to <span class="to" data-blrl-end="2026">2026</span></a></span><span class="facet-count">8,466,900</span></li>
</ul>

          </div>

    </div>


    </div>
  </div>
</div>
<div class="card facet-limit blacklight-recently_added_facet ">
  <h3 class="card-header p-0 facet-field-heading" id="facet-recently_added_facet-header">
    <button
      type="button"
      class="btn w-100 d-block btn-block p-2 text-start text-left collapse-toggle collapsed"
      data-toggle="collapse"
      data-bs-toggle="collapse"
      data-target="#facet-recently_added_facet"
      data-bs-target="#facet-recently_added_facet"
      aria-expanded="false"
      aria-controls="facet-recently_added_facet"
    >
          Recently added

    </button>
  </h3>
  <div id="facet-recently_added_facet" role="region" aria-labelledby="facet-recently_added_facet-header" class="panel-collapse facet-content collapse ">
    <div class="card-body">
          
    <ul class="facet-values list-unstyled">
      <li><span class="facet-label"><a class="facet-select" rel="nofollow" href="/?f%5Brecently_added_facet%5D%5B%5D=weeks_1">Within 1 week</a></span><span class="facet-count">10,228</span></li><li><span class="facet-label"><a class="facet-select" rel="nofollow" href="/?f%5Brecently_added_facet%5D%5B%5D=weeks_2">Within 2 weeks</a></span><span class="facet-count">16,132</span></li><li><span class="facet-label"><a class="facet-select" rel="nofollow" href="/?f%5Brecently_added_facet%5D%5B%5D=weeks_3">Within 3 weeks</a></span><span class="facet-count">43,963</span></li><li><span class="facet-label"><a class="facet-select" rel="nofollow" href="/?f%5Brecently_added_facet%5D%5B%5D=months_1">Within 1 month</a></span><span class="facet-count">74,528</span></li><li><span class="facet-label"><a class="facet-select" rel="nofollow" href="/?f%5Brecently_added_facet%5D%5B%5D=months_2">Within 2 months</a></span><span class="facet-count">116,639</span></li><li><span class="facet-label"><a class="facet-select" rel="nofollow" href="/?f%5Brecently_added_facet%5D%5B%5D=months_3">Within 3 months</a></span><span class="facet-count">188,126</span></li><li><span class="facet-label"><a class="facet-select" rel="nofollow" href="/?f%5Brecently_added_facet%5D%5B%5D=months_6">Within 6 months</a></span><span class="facet-count">862,621</span></li>
    </ul>


    </div>
  </div>
</div>


  </div>
</div></search>

</div>

<div id="content" class="col-12 col-md-8">
    <h2 class="welcome-message">Princeton University Library Catalog</h2>
<hr>
<div class="other-resources">
  <h3>Other Library Resources</h3>
  <ul>
      <li><a href="http://princeton.summon.serialssolutions.com/advanced" target="_blank">Articles+</a></li>
      <li><a href="https://library.princeton.edu/research/databases" target="_blank">Databases</a></li>
      <li><a href="/?f%5Baccess_facet%5D%5B%5D=Online&amp;f%5Bformat%5D%5B%5D=Journal" target="_blank">E-journal titles</a></li>
      <li><a href="https://dpul.princeton.edu/" target="_blank">Digital collections</a></li>
      <li><a href="https://findingaids.princeton.edu" target="_blank">Finding Aids</a></li>
  </ul>
</div>

<div class="numismatics-search">
  <div class="numismatics-icon">
    <span class="icon-coin" aria-hidden="true"></span>
  </div>
  <div class="numismatics-text">
    <a href="/numismatics">
      <h3>Numismatics Search</h3>
</a>    <p>An updated search page for the Numismatic Collection to allow access by a variety of criteria to descriptions and images of Princeton University's comprehensive collection of coins, paper money, tokens, medals and decorations.</p>
  </div>
</div>

<div class="language-statement">
  <div class="language-statement-icon">
    <span class="icon-language-statement" aria-hidden="true"></span>
  </div>
  <div class="language-statement-text">
    <a aria-label="Read more about the statement on responsible collection description" href="https://library.princeton.edu/about/responsible-collection-description">
      <h3>Statement on Responsible Collection Description</h3>
</a>    <p>Princeton University Library (PUL) stewards diverse historical and contemporary collections that document a wide range of human experiences. As an academic and cultural heritage institution, we preserve materials in their original form to maintain historical accuracy and support scholarly research. This includes retaining content that may reflect perspectives which some users may find oﬀensive or otherwise problematic. <a href="https://library.princeton.edu/about/responsible-collection-description" aria-label="Read more about the statement on responsible collection description" class='underlined-link'>Read more...</a></p>
  </div>
</div>

<div class="open-dataset">
  <div class="open-dataset-icon">
    <span class="icon-open-dataset" aria-hidden="true"></span>
  </div>
  <div class="open-dataset-text">
    <a aria-label="Read more about PUL Open Dataset" href="/dataset">
      <h3>PUL Open Dataset</h3>
</a>    <p>Princeton University Library (PUL) is committed to sharing its catalog metadata in order to further research and facilitate discovery.  This dataset includes a variety of materials held by PUL (books, journals, special collections, and more) represented by records in MARC format, freely available under the CC0 1.0 Public Domain Designation. <a href="/dataset" aria-label="Read more about PUL Open Dataset" class='underlined-link'>Read more...</a></p>
  </div>
</div>

</div>

      </div>

    </div>
    <div class="lux">
      <bookmark-login-dialog login-url="/users/sign_in?origin=%2Fcatalog"></bookmark-login-dialog>
    </div>
  </main>
  <div class="pul_footer">
  <div class="container">
    <footer class="lux">
      <lux-library-footer></lux-library-footer>
    </footer>
  </div>
</div>

  <script>
    // Intentionally block DOM parsing until we have removed the no-js class,
    // to avoid layout shifts
    document.querySelector('html').classList.remove('no-js');
  </script>
  </body>
</html>
