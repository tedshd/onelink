<?php
$url_web = ($_GET['urlweb']) ? $_GET['urlweb'] : '';
$url_app = ($_GET['urlapp']) ? $_GET['urlapp'] : '';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>onelink</title>
</head>
<body>
</body>
<script>
(function() {
    var urlweb = '<?php echo $url_web; ?>',
        urlapp = '<?php echo $url_app; ?>';
    setTimeout(function() {
        if (document.visibilityState !== 'hidden') {
            if (urlweb) {
                window.location = getQueryString('urlweb');
            } else {
                console.warn('urlweb is empty');
            }
        }
    }, 900);
    if (urlapp) {
        window.location = getQueryString('urlapp');
    } else {
        console.warn('urlapp is empty');
    }
})();
</script>

</html>