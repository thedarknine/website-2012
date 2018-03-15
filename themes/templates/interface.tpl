<!doctype html>
<html lang="fr">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    <meta name="description" content="{$description}" />
    <meta name="keywords" content="{$keywords}" />
    <title>{$title}</title>
    <link rel="stylesheet" type="text/css" href="themes/stylesheets/theme.css" />
    {if $header}{include file=$header}{/if}

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-35928055-1']);
  _gaq.push(['_setDomainName', 'carolinenoyer.info']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>
<body>
    <div id="Menu">
        <div class="Content">
            {include file='menu.tpl'}
        </div>
    </div>
    <div id="Header">
        <div class="Content">
            <img src="themes/images/caro-on-the-web.png" alt="Caroline Noyer" />
        </div>
    </div>
    <div id="Page">
        <div class="Content">
            {if $page}{include file=$page}{/if}
        </div>
    </div>
    <div id="Bottom"></div>
    <div id="Footer">
        <div class="Content">
            {include file='footer.tpl'}
        </div>
    </div>
</body>
</html>