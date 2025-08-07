








<!DOCTYPE html>
<!-- TEMPLATE FILE: opac-auth.tt -->





<html lang="en" class="no-js">
<head>

<title>APU Library |  catalog &rsaquo;

    Log in to your account
</title>


<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="generator" content="Koha " /> <!-- leave this for stats -->
<meta name="viewport" content="width=device-width, initial-scale=1" />

<link rel="shortcut icon" href="http://library.apiit.edu.my/favicon.ico" type="image/x-icon" />

    <link type="text/css" rel="stylesheet" href="/opac-tmpl/bootstrap/lib/jquery/jquery-ui-1.12.1.min_20.1104000.css">


    
        
    


    <link href="/opac-tmpl/bootstrap/css/opac_20.1104000.css" rel="stylesheet" type="text/css">


    
    
        <link rel="stylesheet" type="text/css" href="/opac-tmpl/bootstrap/css/colors.css" />
    



    <link rel="stylesheet" type="text/css" href="/opac-tmpl/bootstrap/css/print_20.1104000.css" media="print">


    <style>#liblink{
    float: right;
margin-top:0.5em;
margin-bottom:0.5em;
margin-right:50%;
margin-left:0;
}
#liblink a {
    text-decoration: none;
}

#logoBannerInfo {
    clear: both;
    color: #000080;
    display: inline;
    float: right !important;
font-size:22px;
    margin-top:0.5em;
margin-bottom:0;
margin-right:0;
margin-left:0;
    overflow: hidden;
    text-align: right;
}</style>



    <link rel="search" type="application/opensearchdescription+xml" href="http://opac.apiit.edu.my/cgi-bin/koha/opac-search.pl?format=opensearchdescription" title="Search APU Library | ">
    <link rel="unapi-server" type="application/xml" title="unAPI" href="http://opac.apiit.edu.my/cgi-bin/koha/unapi" />


<script>
    var Koha = {};
    function _(s) { return s } // dummy function for gettext
</script>

<script src="/opac-tmpl/bootstrap/js/Gettext_20.1104000.js"></script>
<script src="/opac-tmpl/bootstrap/js/i18n_20.1104000.js"></script>

<script src="/opac-tmpl/bootstrap/lib/modernizr.min_20.1104000.js"></script>
<link href="/opac-tmpl/bootstrap/lib/font-awesome/css/font-awesome.min_20.1104000.css" type="text/css" rel="stylesheet">







</head>




    


    




    

<body ID="opac-login-page" class="branch-default scrollto" >















<div id="wrapper">
    <div id="header-region" class="noprint">
        <nav class="navbar navbar-expand">
            <button id="scrolltocontent">Skip to main content</button>
            <h1 id="logo">
                <a class="navbar-brand" href="/cgi-bin/koha/opac-main.pl">
                    
                        APU Library | 
                    
                </a>
            </h1>
            
                <div id="cartDetails" class="cart-message">Your cart is empty.</div>
            
            <ul id="cart-list-nav" class="navbar-nav">
                
                    <li class="nav-item">
                        <a href="#" class="nav-link" title="Collect items you are interested in" id="cartmenulink" role="button">
                            <i id="carticon" class="fa fa-shopping-cart fa-icon-black" aria-hidden="true"></i> <span class="cartlabel">Cart</span> <span id="basketcount"></span>
                        </a>
                    </li>
                
                <li class="divider-vertical"></li>
                
                    <li class="nav-item dropdown">
                        <a href="#" title="Show lists" class="nav-link dropdown-toggle" id="listsmenu" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"
                            ><i class="fa fa-list fa-icon-black" aria-hidden="true"></i> <span class="listslabel">Lists</span>
                        </a>
                        <div aria-labelledby="listsmenu" role="menu" class="dropdown-menu">
                            
                            
                            
                                <a class="dropdown-item" href="/cgi-bin/koha/opac-shelves.pl?op=list&amp;category=1" tabindex="-1" role="menuitem"><strong>Your lists</strong></a>
                                
                                    <a class="dropdown-item" href="/cgi-bin/koha/opac-shelves.pl?op=add_form" tabindex="-1" role="menuitem">Log in to create your own lists</a>
                                
                            
                        </div> <!-- / .dropdown-menu -->
                    </li> <!-- / .nav-item.dropdown -->
                
            </ul> <!-- / .navbar-nav -->

            
                
                <ul id="members" class="navbar-nav">
                    <li class="nav-item dropdown">
                        
                            
                                
                                    
                                        <a class="nav-link login-link" href="/cgi-bin/koha/opac-user.pl"><i class="fa fa-user fa-icon-black fa-fw" aria-hidden="true"></i> <span class="userlabel">Log in to your account</span></a>
                                
                            
                        

                        
                    </li>
                    
                        
                            <li class="nav-item search_history">
                                <a class="nav-link login-link" href="/cgi-bin/koha/opac-search-history.pl" title="View your search history">Search history</a>
                            </li>
                            <li class="divider-vertical"></li>
                            <li class="nav-item">
                                <a class="nav-link logout clearsh" href="/cgi-bin/koha/opac-search-history.pl?action=delete" title="Delete your search history"><i class="fa fa-trash" aria-hidden="true"></i> Clear</a>
                            </li>
                        
                    
                </ul>
            
        </nav> <!-- /navbar -->

        

    </div> <!-- / header-region -->

    

    <!-- Login form hidden by default, used for modal window -->
    <div id="loginModal" class="modal" tabindex="-1" role="dialog" aria-labelledby="modalLoginLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title" id="modalLoginLabel">Log in to your account</h2>
                    <button type="button" class="closebtn" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="/cgi-bin/koha/opac-user.pl" method="post" name="auth" id="modalAuth">
                    <input type="hidden" name="has-search-query" id="has-search-query" value="" />
                    <div class="modal-body">
                        
                        
                            <input type="hidden" name="koha_login_context" value="opac" />
                            <fieldset class="brief">
                                <label for="muserid">Login:</label><input type="text" id="muserid" name="userid" />
                                <label for="mpassword">Password:</label><input type="password" id="mpassword" name="password" />
                                
                                
                                
                            </fieldset>
                        
                    </div>
                    
                        <div class="modal-footer">
                            <input type="submit" class="btn btn-primary" value="Log in" />
                        </div>
                    
                </form> <!-- /#auth -->
            </div> <!-- /.modal-content -->
        </div> <!-- /.modal-dialog -->
    </div>  <!-- /#modalAuth  -->


<div class="main">
    <nav aria-label="breadcrumb">
        <ul class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="/cgi-bin/koha/opac-main.pl">Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
                <a href="#">Log in</a>
            </li>
        </ul>
    </nav>

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-6">
                <div id="opac-auth" class="maincontent">
                    <!--CONTENT-->
                    
                        

                        
                            <!-- login prompt time-->
                            <h2>Log in to your account</h2>

                            

                            


                            

                            

                        
                            
                                
                                    <!--h3>CAS login</h3-->

                                    

                                    
                                       <p><a href="https://cas.apiit.edu.my/cas/login?service=http%3A%2F%2Fopac.apiit.edu.my%2Fcgi-bin%2Fkoha%2Fopac-search.pl%3Fidx%3Dnb%26q%3D9780262032933">Log in using a CAS account.</a><p>
                                    

                                    
                                

                                
                                    <!--h3>Local login</h3-->
				    <div class="alert alert-warning" role="alert">
<h4 class="alert-heading">Dear Users,</h4>
<p>Please be informed that<strong> login is required before you can search the library catalogue (OPAC)</strong>. To proceed, kindly log in using your <strong>CAS LOGIN </strong>(APkey Credentials).</p>
<p>If you have any issue, please contact the Library Helpdesk for assistance.</p>
<hr />
<p class="mb-0">We appreciate your cooperation.<br />— Library Management</p>
</div>
                                   <!--p>If you do not have a CAS account, but do have a local account, you can still log in </p-->
                                

                            

                            
                        

                        
                            
                                <form action="/cgi-bin/koha/opac-search.pl" name="auth" id="auth" method="post" autocomplete="off">
                            
                                <input type="hidden" name="koha_login_context" value="opac" />

                                <fieldset class="brief">
                                    
                                        
                                        <input type="hidden" name="q" value="9780262032933" />
                                    
                                        
                                        <input type="hidden" name="idx" value="nb" />
                                    
                                    <div class="form-group">
                                        <label for="userid">Login</label>
                                        <input class="form-control" type="text"  size="25" id="userid"  name="userid" />
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input class="form-control" type="password"  size="25" id="password"  name="password" />
                                    </div>
                                    <fieldset class="action">
                                        <input type="submit" value="Log in" class="btn btn-primary" />
                                    </fieldset>
                                </fieldset>

                                
                                <div id="nologininstructions">
                                    
                                        <h3>Don't have a password yet?</h3>
                                        <p>If you don't have a password yet, stop by the circulation desk the next time you're in the library. We'll happily set one up for you.</p>
                                        <h3>Don't have a library card?</h3>
                                        <p>If you don't have a library card, stop by your local library to sign up.</p>
                                    

                                    
                                </div>
                            </form>
                        
                    

                    

                </div> <!-- /.opac-auth -->
            </div> <!-- /.col-md-10 col-lg-6 -->
        </div> <!-- /.row -->
    </div> <!-- /.container-fluid -->
</div> <!-- /.main -->










        
        

        
    </div> <!-- / #wrapper in masthead.inc -->

    
        
    


<!-- JavaScript includes -->
<script src="/opac-tmpl/bootstrap/lib/jquery/jquery-3.4.1.min_20.1104000.js"></script>
<script src="/opac-tmpl/bootstrap/lib/jquery/jquery-migrate-3.1.0.min_20.1104000.js"></script>
<script src="/opac-tmpl/bootstrap/lib/jquery/jquery-ui-1.12.1.min_20.1104000.js"></script>
<script>
// Resolve name collision between jQuery UI and Twitter Bootstrap
$.widget.bridge('uitooltip', $.ui.tooltip);
</script>
<script src="/opac-tmpl/bootstrap/lib/bootstrap/js/bootstrap.bundle.min_20.1104000.js"></script>
<script src="/opac-tmpl/bootstrap/lib/fontfaceobserver.min_20.1104000.js"></script>
<script src="/opac-tmpl/bootstrap/js/global_20.1104000.js"></script>
<script>
    Modernizr.load([
        // Test need for polyfill
        {
            test: window.matchMedia,
            nope: "/opac-tmpl/bootstrap/lib/media.match.min_20.1104000.js"
        },
        // and then load enquire
        "/opac-tmpl/bootstrap/lib/enquire.min_20.1104000.js",
        "/opac-tmpl/bootstrap/js/script_20.1104000.js",
    ]);

    // Fix for datepicker in a modal
    $.fn.modal.Constructor.prototype.enforceFocus = function () {};
</script>


<script>

    var MSG_CONFIRM_AGAIN = _("Warning: Cannot be undone. Please confirm once again")
    var MSG_DELETE_SEARCH_HISTORY = _("Are you sure you want to delete your search history?");
    var MSG_NO_SUGGESTION_SELECTED = _("No suggestion was selected");
    var MSG_SEARCHING = _("Searching %s...");
    var MSG_ERROR_SEARCHING_COLLECTION = _("Error searching %s collection");
    var MSG_NO_RESULTS_FOUND_IN_COLLECTION = _("No results found in the library's %s collection");
    var MSG_RESULTS_FOUND_IN_COLLECTION = _("Found %s results in the library's %s collection");
    var MSG_BY = _("by");
    var MSG_TYPE = _("Type");
    var MSG_NEXT = _("Next");
    var MSG_PREVIOUS = _("Previous");
    var MSG_CHECKOUTS = _("Checkouts");
    var MSG_NO_CHECKOUTS = _("No checkouts");
    var MSG_CHECK_OUT = _("Check out");
    var MSG_CHECK_OUT_CONFIRM = _("Are you sure you want to check out this item?");
    var MSG_CHECKED_OUT_UNTIL = _("Checked out until %s");
    var MSG_CHECK_IN = _("Check in");
    var MSG_CHECK_IN_CONFIRM = _("Are you sure you want to return this item?");
    var MSG_NO_CHECKOUTS = _("No checkouts");
    var MSG_DOWNLOAD = _("Download");
    var MSG_HOLDS = _("Holds");
    var MSG_NO_HOLDS = _("No holds");
    var MSG_PLACE_HOLD = _("Place hold");
    var MSG_CANCEL_HOLD = _("Cancel");
    var MSG_CANCEL_HOLD_CONFIRM = _("Are you sure you want to cancel this hold?");
    var MSG_ON_HOLD = _("On hold");

    
    
    
    

    
    $(".print-large").on("click",function(){
        window.print();
        return false;
    });
    $(".addtoshelf").on("click",function(e){
        e.preventDefault();
        Dopop( this.href );
    });
    $("body").on("click", ".addtocart", function(e){
        e.preventDefault();
        var biblionumber = $(this).data("biblionumber");
        addRecord( biblionumber );
    });
    $("body").on("click", ".cartRemove", function(e){
        e.preventDefault();
        var biblionumber = $(this).data("biblionumber");
        delSingleRecord( biblionumber );
    });
    $(".clearsh").on("click", function(){
        return confirmDelete(MSG_DELETE_SEARCH_HISTORY);
    });

</script>


    <script src="/opac-tmpl/bootstrap/js/basket_20.1104000.js"></script>














<script src="/opac-tmpl/bootstrap/lib/jquery/plugins/jquery.cookie.min_20.1104000.js"></script>
<script>
$(document).ready(function() {
    if($('#searchsubmit').length) {
        $(document).on("click", '#searchsubmit', function(e) {
            jQuery.removeCookie("form_serialized", { path: '/'});
            jQuery.removeCookie("form_serialized_limits", { path: '/'});
            jQuery.removeCookie("num_paragraph", { path: '/'});
            jQuery.removeCookie("search_path_code", { path: '/'});
        });
    }
});
</script>

<script>
    // Hide circular 'Log in to Your Account' link in opac-auth.pl
    $(document).ready(function() {
        if ( $("#auth" ) ) { $("#members ul li a").hide(); }
    });
</script>


    <script>
        

$(".login-link").attr("href", "https://cas.apiit.edu.my/cas/login?service=http://opac.apiit.edu.my/cgi-bin/koha/opac-user.pl");


$( document ).ready(function() {
  $('#checkoutst').find('thead').find('th:last').remove();
$('#checkoutst').find('tbody tr').find('td:last').remove();

$('#overduest').find('thead').find('th:last').remove();
$('#overduest').find('tbody tr').find('td:last').remove();

$('#auth').remove();


$("#userresults ").ready(function(){
 $("#userresults table td").each(function(i){
 td = $(this);
 var ohdbks_link = td.find("a[href^='http://site.ebrary.com']");
 var linkc = ohdbks_link.parent();
 var ohdbks_link = ohdbks_link.attr("href");
 if(ohdbks_link){
 $("td:eq("+i+") span.availability,td:eq("+i+") span.actions").hide();
 linkc.html('<a class="ebook" href="https://login.ezproxy.apiit.edu.my/login?url='+ohdbks_link+'">An electronic book accessible through the World Wide Web; click to view</a>');
 }
 });
});






$("#catalogue_detail_biblio").ready(function(){
 $("#catalogue_detail_biblio span").each(function(i){
 span = $(this);
 var ohdbks_link = span.find("a[href^='http://site.ebrary.com']");
 var linkc = ohdbks_link.parent();
 var ohdbks_link = ohdbks_link.attr("href");
 if(ohdbks_link){ 
 linkc.html('<a class="ebook" href="https://login.ezproxy.apiit.edu.my/login?url='+ohdbks_link+'">An electronic book accessible through the World Wide Web; click to view</a>');
 }
 });
});






 

$("#userdetail").ready(function(){
 $("#userdetail span").each(function(i){
 span = $(this);
 var ohdbks_link = span.find("a[href^='http://site.ebrary.com']");
 var linkc = ohdbks_link.parent();
 var ohdbks_link = ohdbks_link.attr("href");
 if(ohdbks_link){ 
 linkc.html('<a class="ebook" href="https://login.ezproxy.apiit.edu.my/login?url='+ohdbks_link+'">An electronic book accessible through the World Wide Web; click to view</a>');
 }
 });
});

$("#masthead_search option[value='']").text("Keyword");
});
    </script>



</body>
</html>


