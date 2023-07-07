{include file="logo.tpl"}
<div class="pageBanner" style="background-image: url(img/news_page_bg.jpg);">
    <div class="container">
        <span class="heading">news</span>
    </div>
</div>

<div class="pageNews" style="background-image: url(img/grey_bg_big.png)">
    <div class="container">
        <div class="wrap">
            <div class="grid">
			{if $news}
{section name=s loop=$news}
                                    <div class="item col4">
                        <div class="newsCard">
                            <div class="img" style="background-image: url(img/news_pic_{$news[s].id}.jpg);"></div>
                            <span class="date">{$news[s].d}</span>
                            <span class="title">{$news[s].title}</span>
                            <p>{$news[s].full_text}</p>
                            
                        </div>
                    </div>
					{/section}
{else}
                                    <div class="item col4">
                        <div class="newsCard">
                            <div class="img" style="background-image: url(img/news_pic_1.jpg);"></div>
                            <span class="date">N/A</span>
                            <span class="title">No news found!</span>
                            <p>Visit this page regularly to keep updated about latest company news & updates.</p>
                            
                        </div>
                    </div>
					{/if}
                            </div>
        </div>

            </div>
</div>

                {include file="footer2.tpl"}