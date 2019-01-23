<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>
    $MetaTags
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <% base_tag %>

    <!-- IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script> 
    <![endif]-->
    
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jsgrid/1.5.3/jsgrid.min.css" />
    <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jsgrid/1.5.3/jsgrid-theme.min.css" />
    <% require themedCSS('catch') %>
</head>
<body>
    <% if URLSegment == Security %>
        $Layout
    <% else %>
        <div class="wrap">
            <button id="loadGrid" type="button" class="btn btn-primary" disabled>
                Populate Contacts
            </button>
            <div id="jsGrid">
            </div>
        </div>
    <% end_if %>

    <% require javascript('//code.jquery.com/jquery-3.3.1.min.js') %>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jsgrid/1.5.3/jsgrid.min.js"></script>
    <% require themedJavascript('script') %>
</body>
</html>
