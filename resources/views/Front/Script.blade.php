<script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=6092932467852e3af1741898"
    type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous">
</script>
<script src="https://assets-global.website-files.com/6092932467852e3af1741898/js/webflow.55ec2b966.js"
    type="text/javascript"></script>
<script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>
<script>
    var cookieName = 'cookieClosed';
    if (typeof Cookies.get(cookieName) !== 'undefined') {
        $('.cookie-modal').remove();
    }
    $('.close-btn').on('click', function() {
        Cookies.set(cookieName, 'ok', {
            expires: 14
        });
    })
</script>
<script>
    history.scrollRestoration = "manual";
    $(window).on('beforeunload', function() {
        $(window).scrollTop(0, 0);
        $('html').text('');
    });
</script>
<script>
    $(document).ready(function() {
        $('#u-pls-1').each(function(i, obj) {
            $(this).on("mouseover", function() {
                hoverVideo(i);
            });
            $(this).on("mouseout", function() {
                hideVideo(i);
            });
        });
    });

    function hoverVideo(i) {
        $('#uv-1')[i].play();
    }

    function hideVideo(i) {
        $('#uv-1')[i].currentTime = 0;
        $('#uv-1')[i].pause();
    }

    $(document).ready(function() {
        $('#u-pls-2').each(function(i, obj) {
            $(this).on("mouseover", function() {
                hoverVideo(i);
            });
            $(this).on("mouseout", function() {
                hideVideo(i);
            });
        });
    });

    function hoverVideo(i) {
        $('#uv-2')[i].play();
    }

    function hideVideo(i) {
        $('#uv-2')[i].currentTime = 0;
        $('#uv-2')[i].pause();
    }
</script>
<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
<script type="text/javascript">
    WebFont.load({
        google: {
            families: [
                "Roboto:100,300,regular,500,700,900:cyrillic,cyrillic-ext,greek,greek-ext,latin,latin-ext,vietnamese"
            ]
        }
    });
</script>
<script type="text/javascript">
    ! function(o, c) {
        var n = c.documentElement,
            t = " w-mod-";
        n
.className += t + "js",
            ("ontouchstart" in o || o.DocumentTouch && c instanceof DocumentTouch) && (n.className += t + "touch")
    }(window, document);
</script>
