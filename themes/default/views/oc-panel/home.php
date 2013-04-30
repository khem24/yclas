<?php defined('SYSPATH') or die('No direct script access.');?>
<div class="page-header">
    <h1><?=__('Welcome')?> <?=Auth::instance()->get_user()->name?></h1>
    <p><?=__('Thanks for using Open Classifieds.')?> 
        <?=__('Your installation version is')?> <span class="label label-info"><?=core::version?></span> 
        <a class="btn btn-mini btn-primary pull-right" href="<?=Route::url('oc-panel',array('controller'=>'tools','action'=>'updates'))?>?reload=1">
                        <?=__('Check for updates')?></a>

    </p>
</div>



<div class="row-fluid">

    <div class="span4">
    <h2><?=__('Latest News')?></h2>
    <ul>
        <?foreach ($rss as $item):?>
            <li><a target="_blank" href="<?=$item['link']?>" title="<?=$item['title']?>"><?=$item['title']?></a></li>
        <?endforeach?>
    </ul>
    </div>

    <div class="span4">
        <iframe src="//www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fopenclassifieds&amp;width=250&amp;height=290&amp;show_faces=true&amp;colorscheme=light&amp;stream=false&amp;border_color&amp;header=true&amp;appId=181472118540903" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:250px; height:290px;" allowTransparency="true"></iframe>
    </div>

    <div class="span4">
        <a class="twitter-timeline" href="https://twitter.com/openclassifieds" data-widget-id="328935540424572929">Tweets by @openclassifieds</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
    </div>

</div>


<hr>

<?if (core::config('theme.premium')!=1):?>

<div class="visible-desktop">
<script type="text/javascript">
if (typeof geoip_city!="function")document.write("<scr"+"ipt type=\"text/javascript\" src=\"http://j.maxmind.com/app/geoip.js\"></scr"+"ipt>");
document.write("<scr"+"ipt type=\"text/javascript\" src=\"http://api.adserum.com/sync.js?a=6&f=8&w=728&h=90\"></scr"+"ipt>");
</script>
</div>

<div class="visible-phone">
<script type="text/javascript">
if (typeof geoip_city!="function")document.write("<scr"+"ipt type=\"text/javascript\" src=\"http://j.maxmind.com/app/geoip.js\"></scr"+"ipt>");
document.write("<scr"+"ipt type=\"text/javascript\" src=\"http://api.adserum.com/sync.js?a=6&f=3&w=200&h=200\"></scr"+"ipt>");
</script>
</div>

<?endif?>