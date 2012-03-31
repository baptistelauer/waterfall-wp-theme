<!doctype html>
<html class="no-js" dir="ltr" lang="en-US">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width" />
    <title>Homepage | Waterfall theme</title>
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="http://waterfall-theme.local/xmlrpc.php" />
    <link rel="stylesheet" type="text/css" href="styles/styles.css" media="all" />
</head>
<body>
    <div id="homepage">
        <div id="header">
            <div class="top-bar">
                <div class="top-bar-content fix-website-size">
                    <div class="navigation1">
                        <ul>
                            <li class="current item1 first">
                                <a href="#">Blog</a>
                            </li>
                            <li class="item2">
                                <a href="#">About</a>
                            </li>
                            <li class="item3">
                                <a href="#">Portfolio</a>
                            </li>
                            <li class="item4 last">
                                <a href="#">Contact</a>
                            </li>
                        </ul>
                    </div>
                    <div class="search-bloc">
                        <form action="" method="get" id="searchform1">
                            <input type="text" value="Search" class="search" />
                            <input type="button" value="" class="search-button"/>
                        </form>
                    </div>
                </div>
            </div>
            <div class="bottom-top-bar fix-website-size">
                &nbsp;
            </div>
            <div class="bandeau fix-website-size">
                <div class="logo-bloc">
                    <a href="#"><img src="illustrations/logo.png" alt="Waterfall Theme" /></a>
                </div>
                <div class="ads-bloc">
                    <a href="#"><img src="illustrations/ads.png" alt="Ads" /></a>
                </div>
            </div>
        </div>
        <div id="highlight-bloc">
            <div class="navigation2">
                <ul>
                    <li class="current item1 first">
                        <a href="#">Home</a>
                    </li>
                    <li class="item2">
                        <a href="#">Lifestyle</a>
                    </li>
                    <li class="item3">
                        <a href="#">Entertainment</a>
                    </li>
                    <li class="item4">
                        <a href="#">Art & Fashion</a>
                    </li>
                    <li class="item5">
                        <a href="#">Sport</a>
                    </li>
                    <li class="item6">
                        <a href="#">Food</a>
                    </li>
                    <li class="item7 last">
                        <a href="#">WTF?</a>
                    </li>
                </ul>
            </div>
            <div class="fix-website-size">
                <div class="slider">
                    <img src="illustrations/flash.png" alt="Flash" />
                </div>
            </div>
            <div class="social-bar">
                <div class="title-flag">
                    <div class="icon">
                        &nbsp;
                    </div>
                    <div class="text">
                        Follow me on
                    </div>
                </div>    
                <div class="facebook flag">
                    <div class="text">
                        <a href="#" title="Find us on facebook" target="_blank">Facebook</a>
                    </div>
                    <div class="icon">
                        &nbsp;
                    </div>
                </div>
                <div class="clear">&nbsp;</div>
                <div class="twitter flag">
                    <div class="text">
                        <a href="#" title="Find us on twitter" target="_blank">Twitter</a>
                    </div>
                    <div class="icon">
                        &nbsp;
                    </div>
                </div>
                <div class="clear">&nbsp;</div>
                <div class="rss flag">
                    <div class="text">
                        <a href="#" title="Follow us by rss feeds" target="_blank">RSS Feeds</a>
                    </div>
                    <div class="icon">
                        &nbsp;
                    </div>
                </div>
            </div>
        </div>
        <div id="global-content" class="fix-website-size">
            <div id="main-content">
                <div class="citation">
                    <div class="open">
                        &nbsp;
                    </div>
                    Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un peintre anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte.
                    <div class="close">
                        &nbsp;
                    </div>
                </div>
                <div class="post-list">
                    <?php for($i=0;$i<3;$i++): ?>
                    <div class="post">
                        <?php if($i != 2): ?>
                        <div class="picture <?php if($i==0){ echo 'left'; } else { echo 'right'; } ?>">
                            <img src="illustrations/post-image.png" alt="my post picture" />
                        </div>
                        <?php endif; ?>
                        <div class="title">
                            Le Lorem Ipsum est simplement du faux texte
                        </div>
                        <div class="categories">
                            <a href="#" title="Description of lifestyle">Lifestyle</a>
                        </div>
                        <div class="extract">
                            Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500...<a href="#" title="Post title" class="readmore">Read more</a>
                        </div>
                        <div class="postmeta">
                            <div class="posted">
                                Posted the <span class="date">11 . 25 . 11</span> |
                            </div>
                            <div class="reads">
                                <div class="icon">&nbsp;</div> 453 reads |
                            </div>
                            <div class="likes">
                                <div class="icon">&nbsp;</div> <a href="#">12 likes</a> |
                            </div>
                            <div class="comments">
                                <div class="icon">&nbsp;</div> <a href="#">16 Comments</a>
                            </div>
                        </div>
                    </div>
                    <?php endfor; ?>
                </div>
            </div>
            <div id="sidebar">
                <?php include "sidebar.php"; ?>
            </div>
        </div>
        <div class="clear">&nbsp;</div>
        <div id="infinity-scroll" class="fix-website-size">
            <div class="progress-bar">
                &nbsp;
            </div>
            <div class="button">
                <div class="plumb-text">
                    You plumb the depths?
                </div>
            </div>
        </div>
        <div id="footer-button">
            <a href="#"><img src="styles/images/footer.png" alt="" /></a>
        </div>
    </div>
</body>

</html>