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
