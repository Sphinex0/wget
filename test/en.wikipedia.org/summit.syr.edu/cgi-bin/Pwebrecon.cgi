<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalog crosswalk</title>
    <link rel="shortcut icon" type="image/png" href="https://library.syracuse.edu/static/img/favicon.097cab3c3cc7.ico"/>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href=https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css>
    <link rel="stylesheet" href="/public/fonts.css">
    <link rel="stylesheet" href="public/core.css">
    <style>
     :root {
    --content-max-width: 1200px;
    --content-width: 768px;
    --menu-background: #f1f1f2;
    --suorange: #f76900;
    --white: #ffffff;
    --primaryblue: #000e54;
    --mediumorange: #ff431b;
    --lightorange: #ff8e00;
    --mediumblue: #203299;
    --lightblue: #2b72d7;
    --black: #000000;
    --mediumgray: #707780;
    --darkgray: #404040;
    --lightgray: #adb3b8;
	--lightgray-30: #e6e8ea;
    --darkorange: #d74100;
    --verylightgray: #dde4e9;

	--chat-height: 10rem;
	--chat-width: 2.5rem;

	--mega-menu-height: 3.25rem;

	--horizontal-body-padding: 1rem;
	--min-body-width: 320px;
	--responsive-width: 768px;
	--max-content-width: 1200px;
}
* {
    box-sizing: border-box;
}

*:focus {
    z-index: 1000;
    outline: solid white 2px;
    outline-offset: 2px;
}

a {
    text-decoration: underline;
}

[hidden] {
    display: none;
}

li > * {
	vertical-align: top;
}
html, body {
    height: 100%;
	margin: 0;
}
body {
	font-family: ShermanSans, Verdana, Tahoma, sans-serif;
	color: var(--primaryblue);
	font-size: 1rem;
	line-height: 1.5;
	/* below is for forcing the footer always to the bottom */
	min-height: 100vh;
	display: flex;
	flex-direction: column;
	flex-wrap: nowrap;
	justify-content: flex-start;
	align-content: stretch;
	align-items: stretch;
	background-color: var(--white);
	-webkit-font-smoothing: antialiased;
}

main {
	flex: 1;
}
h1 {
    font-size: 2.25rem;
    font-family: ShermanSans,Verdana,sans-serif;
    font-weight: 700;
    letter-spacing: .03rem;
    margin-bottom: 32px;
}
.font-size-10 {
    
    line-height: 1.4rem;
}
.sul-main-block-left {
  width:70% !important;
}

select,
input {
	border: var(--primaryblue) solid 1px;
}
.sul-screen-reader-text,
#lh3-proactive-instructions {
    position: absolute;
	clip: rect(1px 1px 1px 1px);
	clip: rect(1px, 1px, 1px, 1px);
	padding: 0;
	border: 0;
	height: 1px;
	width: 1px;
	overflow: hidden;
}

.sul-table th {
	font-size: 1.25rem;
	font-weight: 700;
}

.sul-table th.sul-table-md,
.sul-table td.sul-table-md {
	display: none;
}

.sul-page-centered-content {
    max-width: var(--content-max-width);
    margin-top: 0;
    margin-bottom: 0;
    margin-left: auto;
    margin-right: auto;
    padding-left: 0.5rem;
    padding-right: 0.5rem;
}

.background-orange-dark {
    background-color: #D74100 !important;
}
:root {
    --side-panel: 170px;
    --side-color: white;
  }
  
  *, ::before, ::after {
    box-sizing: border-box;
  }
  
  
  ::-moz-focus-inner {
    border: 0;
  }
   #sul_skipnav_container {
      position: absolute;
      left: 1rem;
      top: 1rem;
      background-color: var(--menu-background);
      z-index: 2000;
      font-size: 1.125rem;
      font-weight: 600;
  }
  #sul_skipnav_container:focus-within {
      overflow: auto;
      clip: auto;
      width: auto;
      height: auto;
      box-shadow: 4px 4px 4px 0 rgba(0,0,0,0.5);
  }
  #sul_skipnav_container a {
      display: block;
      padding: 0.625rem 0.75rem;
  }
  #sul_skipnav_container a:focus {
      outline-offset: -6px;
      outline-color: var(--white);
      background: var(--lightblue);
      color: var(--white);
      text-decoration: none;
  }
  #sul_skipnav_container a + a {
      border-top: solid 2px var(--darkgray);
  }
  .sul-page-centered-content {
      max-width: var(--content-max-width);
      margin-top: 0;
      margin-bottom: 0;
      margin-left: auto;
      margin-right: auto;
      padding-left: 0.5rem;
      padding-right: 0.5rem;
  }
  #sul_page_header {
      position: relative;
      --logo-height: 4.5rem;
      --logo-vertical-padding: 0.5rem;
  }
  /*recreated dds styles */
  
  .sul-padding-y-3 {
      padding: 16px 0 !important;
  }
  
  .flex-justify-space-between {
      justify-content: space-between !important;
  }
  
  .flex-wrap {
      flex-wrap: wrap !important;
  }
  
  .padding-2 {
      padding: 8px !important;
  
  }
  p {
      margin-top: 0;
     /* font-size: 0.875rem;*/
      font-size: 1rem;
      line-height: 1.5rem;
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale;
  }
  #sul_main_nav_container{
      height: 44px;
  }
  ul>li, ol>li {
      margin-bottom: 0.75rem;
  }
  .margin-bottom-2 {
      margin-bottom: 8px !important;
  }
  .margin-bottom-3 {
      margin-bottom: 16px !important;
  }
  .margin-bottom-4 {
      margin-bottom: 24px !important;
  }
  .margin-top-3 {
      margin-top: 16px !important;
  }
  .margin-top-6 {
      margin-top: 40px !important;
  }
  .margin-right-4 {
      margin-right: 24px !important;
  }
  
  .margin-bottom-6 {
      margin-bottom: 40px !important;
  }
  .background-blue-primary {
      background-color: #000E54 !important;
  }
  
  .background-orange-dark {
      background-color: #D74100 !important;
  }
  .display-inline-block {
      display: inline-block !important;
  }
  h1 {
      font-size: 2.25rem;
      font-family: ShermanSans,Verdana,sans-serif;
      font-weight: 700;
      letter-spacing: .03rem;
      line-height: 3rem;
      margin-bottom: 32px;
  }
  h2 {
      font-size: 2rem;
      font-family: ShermanSans,Verdana,sans-serif;
      font-weight: 500;
      line-height: 2.75rem;
      margin-bottom: 24px;
  }
  h1, h2, h3, h4, h5, h6 {
      margin-top: 0;
      margin-bottom: 0;
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale;
  }
  .flex-wrap {
      flex-wrap: wrap !important;
      display: flex;
  }
  .flex-justify-space-between {
      justify-content: space-between !important;
  }
  .flex-justify-start {
      justify-content: flex-start !important;
  }
  main {
    padding: 1.2em;
    transition: margin-left .4s linear;
    position: relative;
  }
  
  
  .main-right {
    padding-left: 4em;  
  }

  /*
 * Skip nav links
 */

 #sul_skipnav_container {
	position: absolute;
	left: 1rem;
	top: 1rem;
	background-color: var(--menu-background);
	z-index: 2000;
	font-size: 1.125rem;
	font-weight: 600;
}

#sul_skipnav_container:focus-within {
	overflow: auto;
	clip: auto;
	width: auto;
	height: auto;
	box-shadow: 4px 4px 4px 0 rgba(0,0,0,0.5);
}

#sul_skipnav_container a {
	display: block;
	padding: 0.625rem 0.75rem;
}
#sul_skipnav_container a:focus {
	outline-offset: -6px;
	outline-color: var(--white);
	background: var(--lightblue);
	color: var(--white);
	text-decoration: none;
}
#sul_skipnav_container a + a {
	border-top: solid 2px var(--darkgray);
}

.sul_form_search {
	/*width:555px;*/
}
.sul_input_search {
	width: 50%;
    height: 42px;
}
.sul_input_expired {
	width: 100%;
    height: 42px;
}
.sul_input_search_adv {
	width: 50%;
    height: 42px;
	margin-bottom:20px;
}
.sul_button_search{
	height:42px;
	/*width: 62px;*/
	background-color: #D74100 !important;
	color: white;
}
.sul_select_search{
	height:42px;
}
/*
 * Skip nav links
 */
.menuOpen {
  /*margin-left: var(--side-panel);*/
  margin-left: 0;
}

.overlay {
  position: fixed;
  z-index: 8;
  top: 0;
  right: 0;
  left: var(--side-panel);
  bottom: 0;
  background: rgba(0,0,0,.2);
  height: 100%;
}
/*
Footer
*/
footer {
	background: var(--primaryblue);
	color: var(--white);
	padding: 1rem 0;
	font-size: 0.875rem;
}

footer a {
	color: var(--white);
	display: inline-block;
}

footer address {
	font-style: normal;
	line-height: 1.75;
}

footer address a.sul-phone {
	margin-right: 0.75rem;
}

footer address .sul-fax:after {
	content: " fax";
}

footer nav {
	display: flex;
	flex-direction: row;
	flex-wrap: wrap;
	justify-content: space-between;
	align-content: center;
	align-items: center;
}

footer nav ul {
	list-style: none;
	padding: 0;
	margin: 1rem 0 0;
	display: flex;
	flex-direction: row;
	flex-wrap: nowrap;
	justify-content: flex-start;
	align-content: baseline;
	align-items: baseline;
	vertical-align: bottom;
	line-height: .8rem;
}

footer nav ul > li {
	margin-bottom: 0;
}

footer nav ul > li > a {
	display: inline-block;
	/*lvertical-align: bottom;
	ine-height: 50px;*/
	font-size: 0.875rem;;
}

footer nav ul li + li {
	margin-left: 1.5rem;
}

footer nav .sul-social-media ul li + li {
	margin-left: .5rem;
}

footer nav .sul-social-media ul > li > a span.icon-socialmedia {
	display: block;
	line-height: 1.125rem;
	padding: 0.125rem .5rem;
}

footer nav a {
	color: var(--white);
}

footer address a.sul-phone:hover,
footer address a.sul-email:hover,
footer nav .sul-footer-links a:hover {
	color: var(--white);
	text-decoration: none;
	outline: var(--white) solid 1px;
	outline-offset: 1px;
}

footer nav a svg {
	width: 1.5rem;
	height: 1.5rem;
}

footer nav a:hover svg {
	color: var(--suorange);
}

footer nav a.sul-tooltip {
	position: relative;
	text-decoration: none;
}

footer nav a.sul-tooltip:hover span,
footer nav a.sul-tooltip:focus span {
	clip: auto;
	height: auto;
	width: auto;
	overflow: auto;
	left: 62.5%;
	bottom: calc(100% + 0.5rem);
	background: var(--lightblue);
	color: var(--white);
	padding: 0.375rem 0.75rem;
	font-size: 0.875rem;
	border-radius: 6px;
	line-height: 1.25rem;
	z-index: 5;
}

footer .sul-copyright {
	text-align: right;
	font-size: 0.875rem;
	margin: 0 0 0 0;
}
      </style>
</head>
<body>
<header id="sul_page_header">
    <div id="sul_skipnav_container" class="sul-screen-reader-text" style="display:none;">
        <a id="sul_main_skip_link" href="#sul_main_content">Skip to main content</a>
    </div>
  <div id="sul_logo_container" class="logo">
    <a href="https://library.syracuse.edu">
      <img tabindex="0" id="sul_logo" src="https://library.syracuse.edu/_siteassets/img-wordmark-main.svg" alt="Syracuse Univerity Libraries Logo" width="350px" style="padding-left:15px;padding-top:20px;padding-bottom:20px;"/>
    </a>
      <div style="float:right;padding-top:50px;">
   
    </div>
    <div style="width:100%; background-color:#d74100; border: 1px solid black;height:44px;"><div>
  </div> 
  </header>
  
    <div id="queryResult" style="display:none">
        <p>bibId, bbid, BBID fields not found in the query string.</p><p><a href=https://search.syr.edu>https://search.syr.edu</a></p><?php echo <script> redirect(); </script>    </div>
    <div style="padding:15px">
        <h1 class="sul-screen-reader-text" style="display:none;">Landing Page</h1>
        <div><h3>You searched for BIBID: <hr> </div>
        <div><h5>You were trying to reach  and are being redirected to: in <span id="counter"><strong>25</strong></span> seconds.</h5></div>
        <br/><div><h5><a href="#" onclick="cancelTimer();">Click this link to see your options or let the page automatically redirect you</a>.</h5></div>
        <br/><div><h5><a href="https://search.syr.edu" >Click this link to go to the Library Search page</a>.</h5></div>
 
    </div>
</body>   
<script>
    const loc = "";
/****************************redirect timer*/
   setInterval(function() {
    var div = document.querySelector("#counter");
    var count = div.textContent * 1 - 1;
    div.textContent = count;
    if (count <= 0) {
        window.location.replace(loc);
    }
}, 1000);
  /******************************************/
  /********Cancel Timer ********************/
  function cancelTimer() {
    if(confirm("Clicking OK will redirect you automatically.  Clicking Cancel will send you back to the page where it will redirect you the Library Search page when the timer is finished, or you can manually click on the page you want.")){
        
            window.location.replace(loc);
       
} }

function redirect(){
    window.location.href="https://search.syr.edu";
}
</script>
</html>
