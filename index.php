<!DOCTYPE html>
<html xmlns='http://www.w3.org/1999/xhtml' xmlns:b='http://www.google.com/2005/gml/b' xmlns:data='http://www.google.com/2005/gml/data' xmlns:expr='http://www.google.com/2005/gml/expr'>
  <head>
    <meta expr:content='data:blog.isMobile         ? &quot;width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0&quot;         : &quot;width=1100&quot;' name='viewport'/>    
    <title><data:blog.pageTitle/></title>    
    <link href='https://suvernet.github.io/style.css' rel='stylesheet' type='text/css'/>
    <b:skin><![CDATA[]]></b:skin>
  </head>
  
  <body>
  <div class='content'>
  
<header>
   <div class='tabs-outer'>    
      <b:section class='tabs' id='crosscol' name='Cross-Column' showaddelement='yes'>
            <b:widget id='PageList1' locked='false' title='' type='PageList'>
              <b:widget-settings>
                <b:widget-setting name='pageListJson'><![CDATA[{'home': {'href': 'https://exs.whitepingvin.ru/', 'title': '\u0413\u043b\u0430\u0432\u043d\u0430\u044f \u0441\u0442\u0440\u0430\u043d\u0438\u0446\u0430', 'position': 0}}]]></b:widget-setting>
                <b:widget-setting name='homeTitle'>Главная страница</b:widget-setting>
              </b:widget-settings>
              <b:includable id='main'>
  <b:if cond='data:title != &quot;&quot;'><h2><data:title/></h2></b:if>
  <div class='widget-content'>
    <b:if cond='data:mobile'>
      <select expr:id='data:widget.instanceId + &quot;_select&quot;'>
        <b:loop values='data:links' var='link'>
          <option expr:value='data:link.href'>
            <b:attr cond='data:link.isCurrentPage' name='selected' value='selected'/>
            <data:link.title/>
          </option>
        </b:loop>
      </select>
      <span class='pagelist-arrow'>&amp;#9660;</span>
    <b:else/>
      <ul>
        <b:loop values='data:links' var='link'>
          <li>
            <b:class cond='data:link.isCurrentPage' name='selected'/>
            <a expr:href='data:link.href'><data:link.title/></a>
          </li>
        </b:loop>
      </ul>
    </b:if>
    <b:include name='quickedit'/>
  </div>
</b:includable>
            </b:widget>
          </b:section>
 
    </div>  
      <b:section class='header' id='header' name='Header' showaddelement='yes'>
          <b:widget id='Header1' locked='false' title='ex.Записки Белого Пингвина (заголовок)' type='Header'>
            <b:widget-settings>
              <b:widget-setting name='displayUrl'/>
              <b:widget-setting name='displayHeight'>0</b:widget-setting>
              <b:widget-setting name='sectionWidth'>-1</b:widget-setting>
              <b:widget-setting name='useImage'>false</b:widget-setting>
              <b:widget-setting name='shrinkToFit'>false</b:widget-setting>
              <b:widget-setting name='imagePlacement'>BEHIND</b:widget-setting>
              <b:widget-setting name='displayWidth'>0</b:widget-setting>
            </b:widget-settings>
            <b:includable id='main'>

  <b:if cond='data:useImage'>
    <b:if cond='data:imagePlacement == &quot;BEHIND&quot;'>
      <!--
      Show image as background to text. You can't really calculate the width
      reliably in JS because margins are not taken into account by any of
      clientWidth, offsetWidth or scrollWidth, so we don't force a minimum
      width if the user is using shrink to fit.
      This results in a margin-width's worth of pixels being cropped. If the
      user is not using shrink to fit then we expand the header.
      -->
      <b:if cond='data:mobile'>
        <div id='header-inner'>
          <div class='titlewrapper' style='background: transparent'>
            <h1 class='title' style='background: transparent; border-width: 0px'>
              <b:include name='title'/>
            </h1>
          </div>
          <b:include name='description'/>
        </div>
      <b:else/>
        <div expr:style='&quot;background-image: url(\&quot;&quot; + data:sourceUrl + &quot;\&quot;); &quot;                      + &quot;background-position: &quot;                      + data:backgroundPositionStyleStr + &quot;; &quot;                      + data:widthStyleStr                      + &quot;min-height: &quot; + data:height                      + &quot;_height: &quot; + data:height                      + &quot;background-repeat: no-repeat; &quot;' id='header-inner'>
          <div class='titlewrapper' style='background: transparent'>
            <h1 class='title' style='background: transparent; border-width: 0px'>
              <b:include name='title'/>
            </h1>
          </div>
          <b:include name='description'/>
        </div>
      </b:if>
    <b:else/>
      <!--Show the image only-->
      <div id='header-inner'>
        <a expr:href='data:blog.homepageUrl' style='display: block'>
          <img expr:alt='data:title' expr:height='data:height' expr:id='data:widget.instanceId + &quot;_headerimg&quot;' expr:src='data:sourceUrl' expr:width='data:width' style='display: block'/>
        </a>
        <!--Show the description-->
        <b:if cond='data:imagePlacement == &quot;BEFORE_DESCRIPTION&quot;'>
          <b:include name='description'/>
        </b:if>
      </div>
    </b:if>
  <b:else/>
    <!--No header image -->
    <div id='header-inner'>
      <div class='titlewrapper'>
        <h1 class='title'>
          <b:include name='title'/>
        </h1>
      </div>
      <b:include name='description'/>
    </div>
  </b:if>
</b:includable>
            <b:includable id='description'>
  <div class='descriptionwrapper'>
    <p class='description'><span><data:description/></span></p>
  </div>
</b:includable>
            <b:includable id='title'>
  <b:tag cond='data:blog.url != data:blog.homepageUrl' expr:href='data:blog.homepageUrl' name='a'>
    <data:title/>
  </b:tag>
</b:includable>
          </b:widget>
        </b:section>
 </header>
    


    <div class='main'> 
      <b:section class='main' id='main' name='Main' showaddelement='yes'>
         <b:widget id='Blog1' locked='false' title='Сообщения блога' type='Blog' version='1'>
           <b:widget-settings>
             <b:widget-setting name='showDateHeader'>true</b:widget-setting>
             <b:widget-setting name='style.textcolor'>#666666</b:widget-setting>
             <b:widget-setting name='showShareButtons'>false</b:widget-setting>
             <b:widget-setting name='showCommentLink'>true</b:widget-setting>
             <b:widget-setting name='style.urlcolor'>#666666</b:widget-setting>
             <b:widget-setting name='showAuthor'>true</b:widget-setting>
             <b:widget-setting name='disableGooglePlusShare'>true</b:widget-setting>
             <b:widget-setting name='style.linkcolor'>#2288bb</b:widget-setting>
             <b:widget-setting name='style.unittype'>TextAndImage</b:widget-setting>
             <b:widget-setting name='style.bgcolor'>#ffffff</b:widget-setting>
             <b:widget-setting name='showAuthorProfile'>false</b:widget-setting>
             <b:widget-setting name='style.layout'>1x1</b:widget-setting>
             <b:widget-setting name='showLabels'>true</b:widget-setting>
             <b:widget-setting name='showLocation'>false</b:widget-setting>
             <b:widget-setting name='showTimestamp'>false</b:widget-setting>
             <b:widget-setting name='postsPerAd'>1</b:widget-setting>
             <b:widget-setting name='showBacklinks'>false</b:widget-setting>
             <b:widget-setting name='style.bordercolor'>#ffffff</b:widget-setting>
             <b:widget-setting name='showInlineAds'>false</b:widget-setting>
             <b:widget-setting name='showReactions'>false</b:widget-setting>
           </b:widget-settings>
           <b:includable id='main' var='top'>
  <b:if cond='!data:mobile'>
    <!-- posts -->
    <div class='blog-posts hfeed'>

      <b:include data='top' name='status-message'/>

      <b:loop values='data:posts' var='post'>
        <b:if cond='data:post.isDateStart and not data:post.isFirstPost'>
          &lt;/div&gt;&lt;/div&gt;
        </b:if>
        <b:if cond='data:post.isDateStart'>
          &lt;div class=&quot;date-outer&quot;&gt;
        </b:if>
        <b:if cond='data:post.dateHeader'>
          <h2 class='date-header'><span><data:post.dateHeader/></span></h2>
        </b:if>
        <b:if cond='data:post.isDateStart'>
          &lt;div class=&quot;date-posts&quot;&gt;
        </b:if>
        <div class='post-outer'>
          <b:include data='post' name='post'/>
          <b:include cond='data:blog.pageType in {&quot;static_page&quot;,&quot;item&quot;}' data='post' name='comment_picker'/>
        </div>

      </b:loop>
      <b:if cond='data:numPosts != 0'>
        &lt;/div&gt;&lt;/div&gt;
      </b:if>
    </div>

    <!-- navigation -->
    <b:include name='nextprev'/>

 

  <b:else/>
    <b:include name='mobile-main'/>
  </b:if>

  
</b:includable>
           <b:includable id='backlinkDeleteIcon' var='backlink'/>
           <b:includable id='backlinks' var='post'/>
           <b:includable id='comment-form' var='post'>
  <div class='comment-form'>
    <a name='comment-form'/>
    <b:if cond='data:mobile'>
      <h4 id='comment-post-message'>
        <a expr:id='data:widget.instanceId + &quot;_comment-editor-toggle-link&quot;' href='javascript:void(0)'><data:postCommentMsg/></a></h4>
      <p><data:blogCommentMessage/></p>
      <data:blogTeamBlogMessage/>
      <a expr:href='data:post.commentFormIframeSrc' id='comment-editor-src'/>
      <iframe allowtransparency='true' class='blogger-iframe-colorize blogger-comment-from-post' expr:height='data:cmtIframeInitialHeight' frameborder='0' id='comment-editor' name='comment-editor' src='' style='display: none' width='100%'/>
    <b:else/>
      <h4 id='comment-post-message'><data:postCommentMsg/></h4>
      <p><data:blogCommentMessage/></p>
      <data:blogTeamBlogMessage/>
      <a expr:href='data:post.commentFormIframeSrc' id='comment-editor-src'/>
      <iframe allowtransparency='true' class='blogger-iframe-colorize blogger-comment-from-post' expr:height='data:cmtIframeInitialHeight' frameborder='0' id='comment-editor' name='comment-editor' src='' width='100%'/>
    </b:if>
    <data:post.cmtfpIframe/>
    <script type='text/javascript'>
      BLOG_CMT_createIframe(&#39;<data:post.appRpcRelayPath/>&#39;);
    </script>
  </div>
</b:includable>
           <b:includable id='commentDeleteIcon' var='comment'>
  <span expr:class='&quot;item-control &quot; + data:comment.adminClass'>
    <b:if cond='data:showCmtPopup'>
      <div class='goog-toggle-button'>
        <div class='goog-inline-block comment-action-icon'/>
      </div>
    <b:else/>
      <a class='comment-delete' expr:href='data:comment.deleteUrl' expr:title='data:top.deleteCommentMsg'>
        <img src='https://resources.blogblog.com/img/icon_delete13.gif'/>
      </a>
    </b:if>
  </span>
</b:includable>
           <b:includable id='comment_count_picker' var='post'>
  <a class='comment-link' expr:href='data:post.addCommentUrl' expr:onclick='data:post.addCommentOnclick'>
    <data:post.commentLabelFull/>:
  </a>
</b:includable>
           <b:includable id='comment_picker' var='post'>
  <b:if cond='data:post.showThreadedComments'>
    <b:include data='post' name='threaded_comments'/>
  <b:else/>
    <b:include data='post' name='comments'/>
  </b:if>
</b:includable>
           <b:includable id='comments' var='post'>
  <div class='comments' id='comments'>
    <a name='comments'/>
    <b:if cond='data:post.allowComments'>
      <h4><data:post.commentLabelFull/>:</h4>

      <b:if cond='data:post.commentPagingRequired'>
        <span class='paging-control-container'>
          <b:if cond='data:post.hasOlderLinks'>
            <a expr:class='data:post.oldLinkClass' expr:href='data:post.oldestLinkUrl'><data:post.oldestLinkText/></a>
              &#160;
            <a expr:class='data:post.oldLinkClass' expr:href='data:post.olderLinkUrl'><data:post.olderLinkText/></a>
              &#160;
          </b:if>

          <data:post.commentRangeText/>

          <b:if cond='data:post.hasNewerLinks'>
            &#160;
            <a expr:class='data:post.newLinkClass' expr:href='data:post.newerLinkUrl'><data:post.newerLinkText/></a>
            &#160;
            <a expr:class='data:post.newLinkClass' expr:href='data:post.newestLinkUrl'><data:post.newestLinkText/></a>
          </b:if>
        </span>
      </b:if>

      <div expr:id='data:widget.instanceId + &quot;_comments-block-wrapper&quot;'>
        <dl expr:class='data:post.avatarIndentClass' id='comments-block'>
          <b:loop values='data:post.comments' var='comment'>
            <dt expr:class='&quot;comment-author &quot; + data:comment.authorClass' expr:id='data:comment.anchorName'>
              <b:if cond='data:comment.favicon'>
                <img expr:src='data:comment.favicon' height='16px' style='margin-bottom:-2px;' width='16px'/>
              </b:if>
              <a expr:name='data:comment.anchorName'/>
              <b:if cond='data:blog.enabledCommentProfileImages'>
                <data:comment.authorAvatarImage/>
              </b:if>
              <b:if cond='data:comment.authorUrl'>
                <a expr:href='data:comment.authorUrl' rel='nofollow'><data:comment.author/></a>
              <b:else/>
                <data:comment.author/>
              </b:if>
              <data:commentPostedByMsg/>
            </dt>
            <dd class='comment-body' expr:id='data:widget.instanceId + data:comment.cmtBodyIdPostfix'>
              <b:if cond='data:comment.isDeleted'>
                <span class='deleted-comment'><data:comment.body/></span>
              <b:else/>
                <p>
                  <data:comment.body/>
                </p>
              </b:if>
            </dd>
            <dd class='comment-footer'>
              <span class='comment-timestamp'>
                <a expr:href='data:comment.url' title='comment permalink'>
                  <data:comment.timestamp/>
                </a>
                <b:include data='comment' name='commentDeleteIcon'/>
              </span>
            </dd>
          </b:loop>
        </dl>
      </div>

      <b:if cond='data:post.commentPagingRequired'>
        <span class='paging-control-container'>
          <a expr:class='data:post.oldLinkClass' expr:href='data:post.oldestLinkUrl'>
            <data:post.oldestLinkText/>
          </a>
          <a expr:class='data:post.oldLinkClass' expr:href='data:post.olderLinkUrl'>
            <data:post.olderLinkText/>
          </a>
          &#160;
          <data:post.commentRangeText/>
          &#160;
          <a expr:class='data:post.newLinkClass' expr:href='data:post.newerLinkUrl'>
            <data:post.newerLinkText/>
          </a>
          <a expr:class='data:post.newLinkClass' expr:href='data:post.newestLinkUrl'>
            <data:post.newestLinkText/>
          </a>
        </span>
      </b:if>

      <p class='comment-footer'>
        <b:if cond='data:post.embedCommentForm'>
          <b:if cond='data:post.allowNewComments'>
            <b:include data='post' name='comment-form'/>
          <b:else/>
            <data:post.noNewCommentsText/>
          </b:if>
        <b:elseif cond='data:post.allowComments'/>
          <a expr:href='data:post.addCommentUrl' expr:onclick='data:post.addCommentOnclick'><data:postCommentMsg/></a>
        </b:if>
      </p>
    </b:if>
    <b:if cond='data:showCmtPopup'>
      <div id='comment-popup'>
        <iframe allowtransparency='true' frameborder='0' id='comment-actions' name='comment-actions' scrolling='no'>
        </iframe>
      </div>
    </b:if>

  </div>
</b:includable>
           <b:includable id='feedLinks'>
  <b:if cond='data:blog.pageType != &quot;item&quot;'> <!-- Blog feed links -->
    <b:if cond='data:feedLinks'>
      <div class='blog-feeds'>
        <b:include data='feedLinks' name='feedLinksBody'/>
      </div>
    </b:if>

  <b:else/> <!--Post feed links -->
    <div class='post-feeds'>
      <b:loop values='data:posts' var='post'>
        <b:include cond='data:post.allowComments and data:post.feedLinks' data='post.feedLinks' name='feedLinksBody'/>
      </b:loop>
    </div>
  </b:if>
</b:includable>
           <b:includable id='feedLinksBody' var='links'>
  <div class='feed-links'>
  <data:feedLinksMsg/>
  <b:loop values='data:links' var='f'>
     <a class='feed-link' expr:href='data:f.url' expr:type='data:f.mimeType' target='_blank'><data:f.name/> (<data:f.feedType/>)</a>
  </b:loop>
  </div>
</b:includable>
           <b:includable id='iframe_comments' var='post'>
  <!-- G+ comments, no longer available. The includable is retained for backwards-compatibility. -->
</b:includable>
           <b:includable id='mobile-index-post' var='post'>
  <div class='mobile-date-outer date-outer'>
    <b:if cond='data:post.dateHeader'>
      <div class='date-header'>
        <span><data:post.dateHeader/></span>
      </div>
    </b:if>

    <div class='mobile-post-outer'>
      <a expr:href='data:post.url'>
        <h3 class='mobile-index-title entry-title' itemprop='name'>
          <data:post.title/>
        </h3>

        <div class='mobile-index-arrow'>&amp;rsaquo;</div>

        <div class='mobile-index-contents'>
          <b:if cond='data:post.thumbnailUrl'>
            <div class='mobile-index-thumbnail'>
              <div class='Image'>
                <img expr:src='data:post.thumbnailUrl'/>
              </div>
            </div>
          </b:if>

          <div class='post-body'>
            <b:if cond='data:post.snippet'><data:post.snippet/></b:if>
          </div>
        </div>

        <div style='clear: both;'/>
      </a>

      <div class='mobile-index-comment'>
        <b:include cond='data:blog.pageType != &quot;static_page&quot;                          and data:post.allowComments                          and data:post.numComments != 0' data='post' name='comment_count_picker'/>
      </div>
    </div>
  </div>
</b:includable>
           <b:includable id='mobile-main' var='top'>
    <!-- posts -->
    <div class='blog-posts hfeed'>

      <b:include data='top' name='status-message'/>

      <b:if cond='data:blog.pageType == &quot;index&quot;'>
        <b:loop values='data:posts' var='post'>
          <b:include data='post' name='mobile-index-post'/>
        </b:loop>
      <b:else/>
        <b:loop values='data:posts' var='post'>
          <b:include data='post' name='mobile-post'/>
        </b:loop>
      </b:if>
    </div>

   <b:include name='mobile-nextprev'/>
</b:includable>
           <b:includable id='mobile-nextprev'>
  <div class='blog-pager' id='blog-pager'>
    <b:if cond='data:newerPageUrl'>
      <div class='mobile-link-button' id='blog-pager-newer-link'>
      <a class='blog-pager-newer-link' expr:href='data:newerPageUrl' expr:id='data:widget.instanceId + &quot;_blog-pager-newer-link&quot;' expr:title='data:newerPageTitle'>&amp;lsaquo;</a>
      </div>
    </b:if>

    <b:if cond='data:olderPageUrl'>
      <div class='mobile-link-button' id='blog-pager-older-link'>
      <a class='blog-pager-older-link' expr:href='data:olderPageUrl' expr:id='data:widget.instanceId + &quot;_blog-pager-older-link&quot;' expr:title='data:olderPageTitle'>&amp;rsaquo;</a>
      </div>
    </b:if>

    <div class='mobile-link-button' id='blog-pager-home-link'>
    <a class='home-link' expr:href='data:blog.homepageUrl'><data:homeMsg/></a>
    </div>

    <div class='mobile-desktop-link'>
      <a class='home-link' expr:href='data:desktopLinkUrl'><data:desktopLinkMsg/></a>
    </div>

  </div>
  <div class='clear'/>
</b:includable>
           <b:includable id='mobile-post' var='post'>
  <div class='date-outer'>
    <b:if cond='data:post.dateHeader'>
      <h2 class='date-header'><span><data:post.dateHeader/></span></h2>
    </b:if>
    <div class='date-posts'>
      <div class='post-outer'>

        <div class='post hentry uncustomized-post-template' itemscope='itemscope' itemtype='http://schema.org/BlogPosting'>
          <b:if cond='data:post.thumbnailUrl'>
            <meta expr:content='data:post.thumbnailUrl' itemprop='image_url'/>
          </b:if>
          <meta expr:content='data:blog.blogId' itemprop='blogId'/>
          <meta expr:content='data:post.id' itemprop='postId'/>

          <a expr:name='data:post.id'/>
          <b:if cond='data:post.title'>
            <h3 class='post-title entry-title' itemprop='name'>
              <b:if cond='data:post.link'>
                <a expr:href='data:post.link'><data:post.title/></a>
              <b:elseif cond='data:post.url and data:blog.url != data:post.url'/>
                <a expr:href='data:post.url'><data:post.title/></a>
              <b:else/>
                <data:post.title/>
              </b:if>
            </h3>
          </b:if>

          <div class='post-header'>
            <div class='post-header-line-1'/>
          </div>

          <div class='post-body entry-content' expr:id='&quot;post-body-&quot; + data:post.id' itemprop='articleBody'>
            <data:post.body/>
            <div style='clear: both;'/> <!-- clear for photos floats -->
          </div>

          <div class='post-footer'>
            <div class='post-footer-line post-footer-line-1'>
              <span class='post-author vcard'>
                <b:if cond='data:top.showAuthor'>
                  <b:if cond='data:post.authorProfileUrl'>
                    <span class='fn' itemprop='author' itemscope='itemscope' itemtype='http://schema.org/Person'>
                      <meta expr:content='data:post.authorProfileUrl' itemprop='url'/>
                      <a expr:href='data:post.authorProfileUrl' rel='author' title='author profile'>
                        <span itemprop='name'><data:post.author/></span>
                      </a>
                    </span>
                  <b:else/>
                    <span class='fn' itemprop='author' itemscope='itemscope' itemtype='http://schema.org/Person'>
                      <span itemprop='name'><data:post.author/></span>
                    </span>
                  </b:if>
                </b:if>
              </span>

              <span class='post-timestamp'>
                <b:if cond='data:top.showTimestamp'>
                  <data:top.timestampLabel/>
                  <b:if cond='data:post.url'>
                    <meta expr:content='data:post.url.canonical' itemprop='url'/>
                    <a class='timestamp-link' expr:href='data:post.url' rel='bookmark' title='permanent link'><abbr class='published' expr:title='data:post.timestampISO8601' itemprop='datePublished'><data:post.timestamp/></abbr></a>
                  </b:if>
                </b:if>
              </span>

              <span class='post-comment-link'>
                <b:include cond='data:blog.pageType not in {&quot;item&quot;,&quot;static_page&quot;}                                  and data:post.allowComments' data='post' name='comment_count_picker'/>
              </span>
            </div>

            <div class='post-footer-line post-footer-line-2'>
              <b:if cond='data:top.showMobileShare'>
                <div class='mobile-link-button goog-inline-block' id='mobile-share-button'>
                  <a href='javascript:void(0);'><data:shareMsg/></a>
                </div>
              </b:if>
              <b:if cond='data:top.showDummy'>
                <div class='goog-inline-block dummy-container'><data:post.dummyTag/></div>
              </b:if>
            </div>

          </div>
        </div>

        <b:include cond='data:blog.pageType in {&quot;static_page&quot;,&quot;item&quot;}' data='post' name='comment_picker'/>
      </div>
    </div>
  </div>
</b:includable>
           <b:includable id='nextprev'>
  <div class='blog-pager' id='blog-pager'>
    <b:if cond='data:newerPageUrl'>
      <span id='blog-pager-newer-link'>
      <a class='blog-pager-newer-link' expr:href='data:newerPageUrl' expr:id='data:widget.instanceId + &quot;_blog-pager-newer-link&quot;' expr:title='data:newerPageTitle'><data:newerPageTitle/></a>
      </span>
    </b:if>

    <b:if cond='data:olderPageUrl'>
      <span id='blog-pager-older-link'>
      <a class='blog-pager-older-link' expr:href='data:olderPageUrl' expr:id='data:widget.instanceId + &quot;_blog-pager-older-link&quot;' expr:title='data:olderPageTitle'><data:olderPageTitle/></a>
      </span>
    </b:if>

    <a class='home-link' expr:href='data:blog.homepageUrl'><data:homeMsg/></a>

    <b:if cond='data:mobileLinkUrl'>
      <div class='blog-mobile-link'>
        <a expr:href='data:mobileLinkUrl'><data:mobileLinkMsg/></a>
      </div>
    </b:if>

  </div>
  <div class='clear'/>
</b:includable>
           <b:includable id='post' var='post'>
  <div class='post hentry uncustomized-post-template' itemprop='blogPost' itemscope='itemscope' itemtype='http://schema.org/BlogPosting'>
    <b:if cond='data:post.firstImageUrl'>
      <meta expr:content='data:post.firstImageUrl' itemprop='image_url'/>
    </b:if>
    <meta expr:content='data:blog.blogId' itemprop='blogId'/>
    <meta expr:content='data:post.id' itemprop='postId'/>

    <a expr:name='data:post.id'/>
    <b:if cond='data:post.title'>
      <h3 class='post-title entry-title' itemprop='name'>
      <b:if cond='data:post.link or (data:post.url and data:blog.url != data:post.url)'>
        <a expr:href='data:post.link ? data:post.link : data:post.url'><data:post.title/></a>
      <b:else/>
        <data:post.title/>
      </b:if>
      </h3>
    </b:if>

    <div class='post-header'>
    <div class='post-header-line-1'/>
    </div>

    <!-- Then use the post body as the schema.org description, for good G+/FB snippeting. -->
    <div class='post-body entry-content' expr:id='&quot;post-body-&quot; + data:post.id' expr:itemprop='(data:blog.metaDescription ? &quot;&quot; : &quot;description &quot;) + &quot;articleBody&quot;'>
      <data:post.body/>
      <div style='clear: both;'/> <!-- clear for photos floats -->
    </div>

    <b:if cond='data:post.hasJumpLink'>
      <div class='jump-link'>
        <a expr:href='data:post.url + &quot;#more&quot;' expr:title='data:post.title'><data:post.jumpText/></a>
      </div>
    </b:if>

    <div class='post-footer'>
    <div class='post-footer-line post-footer-line-1'>
      <span class='post-author vcard'>
        <b:if cond='data:top.showAuthor'>
          <data:top.authorLabel/>
            <b:if cond='data:post.authorProfileUrl'>
              <span class='fn' itemprop='author' itemscope='itemscope' itemtype='http://schema.org/Person'>
                <meta expr:content='data:post.authorProfileUrl' itemprop='url'/>
                <a class='g-profile' expr:href='data:post.authorProfileUrl' rel='author' title='author profile'>
                  <span itemprop='name'><data:post.author/></span>
                </a>
              </span>
            <b:else/>
              <span class='fn' itemprop='author' itemscope='itemscope' itemtype='http://schema.org/Person'>
                <span itemprop='name'><data:post.author/></span>
              </span>
            </b:if>
        </b:if>
      </span>

      <span class='post-timestamp'>
        <b:if cond='data:top.showTimestamp'>
          <data:top.timestampLabel/>
          <b:if cond='data:post.url'>
            <meta expr:content='data:post.url.canonical' itemprop='url'/>
            <a class='timestamp-link' expr:href='data:post.url' rel='bookmark' title='permanent link'><abbr class='published' expr:title='data:post.timestampISO8601' itemprop='datePublished'><data:post.timestamp/></abbr></a>
          </b:if>
        </b:if>
      </span>

      <span class='reaction-buttons'>
        <b:if cond='data:top.showReactions'>
          <table border='0' cellpadding='0' cellspacing='0' width='100%'><tr>
            <td class='reactions-label-cell' nowrap='nowrap' valign='top' width='1%'>
              <span class='reactions-label'>
              <data:top.reactionsLabel/></span>&#160;</td>
            <td><iframe allowtransparency='true' class='reactions-iframe' expr:src='data:post.reactionsUrl' frameborder='0' name='reactions' scrolling='no'/></td>
           </tr></table>
        </b:if>
      </span>

      <span class='post-comment-link'>
        <b:include cond='data:blog.pageType not in {&quot;item&quot;,&quot;static_page&quot;}                          and data:post.allowComments' data='post' name='comment_count_picker'/>
      </span>

      <span class='post-icons'>
        <!-- email post links -->
        <b:if cond='data:post.emailPostUrl'>
          <span class='item-action'>
          <a expr:href='data:post.emailPostUrl' expr:title='data:top.emailPostMsg'>
            <img alt='' class='icon-action' height='13' src='https://resources.blogblog.com/img/icon18_email.gif' width='18'/>
          </a>
          </span>
        </b:if>

        <!-- quickedit pencil -->
        <b:include data='post' name='postQuickEdit'/>
      </span>

      <!-- share buttons -->
      <div class='post-share-buttons goog-inline-block'>
        <b:include cond='data:post.sharePostUrl' data='post' name='shareButtons'/>
      </div>

      </div>

      <div class='post-footer-line post-footer-line-2'>
      <span class='post-labels'>
        <b:if cond='data:top.showPostLabels and data:post.labels'>
          <data:postLabelsLabel/>
          <b:loop values='data:post.labels' var='label'>
            <a expr:href='data:label.url' rel='tag'><data:label.name/></a><b:if cond='not data:label.isLast'>,</b:if>
          </b:loop>
        </b:if>
      </span>
      </div>

      <div class='post-footer-line post-footer-line-3'>
      <span class='post-location'>
        <b:if cond='data:top.showLocation and data:post.location'>
          <data:postLocationLabel/>
          <a expr:href='data:post.location.mapsUrl' target='_blank'><data:post.location.name/></a>
        </b:if>
      </span>
      </div>
      <b:if cond='data:post.authorAboutMe'>
        <div class='author-profile' itemprop='author' itemscope='itemscope' itemtype='http://schema.org/Person'>
          <b:if cond='data:post.authorPhoto.url'>
            <img expr:src='data:post.authorPhoto.url' itemprop='image' width='50px'/>
          </b:if>
          <div>
            <a class='g-profile' expr:href='data:post.authorProfileUrl' itemprop='url' rel='author' title='author profile'>
              <span itemprop='name'><data:post.author/></span>
            </a>
          </div>
          <span itemprop='description'><data:post.authorAboutMe/></span>
        </div>
      </b:if>
    </div>
  </div>
</b:includable>
           <b:includable id='postQuickEdit' var='post'>
  <b:if cond='data:post.editUrl'>
    <span expr:class='&quot;item-control &quot; + data:post.adminClass'>
      <a expr:href='data:post.editUrl' expr:title='data:top.editPostMsg'>
        <img alt='' class='icon-action' height='18' src='https://resources.blogblog.com/img/icon18_edit_allbkg.gif' width='18'/>
      </a>
    </span>
  </b:if>
</b:includable>
           <b:includable id='shareButtons' var='post'>
  <b:if cond='data:top.showEmailButton'><a class='goog-inline-block share-button sb-email' expr:href='data:post.sharePostUrl + &quot;&amp;target=email&quot;' expr:title='data:top.emailThisMsg' target='_blank'><span class='share-button-link-text'><data:top.emailThisMsg/></span></a></b:if><b:if cond='data:top.showBlogThisButton'><a class='goog-inline-block share-button sb-blog' expr:href='data:post.sharePostUrl + &quot;&amp;target=blog&quot;' expr:onclick='&quot;window.open(this.href, \&quot;_blank\&quot;, \&quot;height=270,width=475\&quot;); return false;&quot;' expr:title='data:top.blogThisMsg' target='_blank'><span class='share-button-link-text'><data:top.blogThisMsg/></span></a></b:if><b:if cond='data:top.showTwitterButton'><a class='goog-inline-block share-button sb-twitter' expr:href='data:post.sharePostUrl + &quot;&amp;target=twitter&quot;' expr:title='data:top.shareToTwitterMsg' target='_blank'><span class='share-button-link-text'><data:top.shareToTwitterMsg/></span></a></b:if><b:if cond='data:top.showFacebookButton'><a class='goog-inline-block share-button sb-facebook' expr:href='data:post.sharePostUrl + &quot;&amp;target=facebook&quot;' expr:onclick='&quot;window.open(this.href, \&quot;_blank\&quot;, \&quot;height=430,width=640\&quot;); return false;&quot;' expr:title='data:top.shareToFacebookMsg' target='_blank'><span class='share-button-link-text'><data:top.shareToFacebookMsg/></span></a></b:if><b:if cond='data:top.showPinterestButton'><a class='goog-inline-block share-button sb-pinterest' expr:href='data:post.sharePostUrl + &quot;&amp;target=pinterest&quot;' expr:title='data:top.shareToPinterestMsg' target='_blank'><span class='share-button-link-text'><data:top.shareToPinterestMsg/></span></a></b:if><b:if cond='data:top.showPlusOne'><div class='goog-inline-block google-plus-share-container'><data:post.googlePlusShareTag/></div></b:if>
</b:includable>
           <b:includable id='status-message'>
  <b:if cond='data:navMessage'>
  <div class='status-msg-wrap'>
    <div class='status-msg-body'>
      <data:navMessage/>
    </div>
    <div class='status-msg-border'>
      <div class='status-msg-bg'>
        <div class='status-msg-hidden'><data:navMessage/></div>
      </div>
    </div>
  </div>
  <div style='clear: both;'/>
  </b:if>
</b:includable>
           <b:includable id='threaded-comment-form' var='post'>
  <div class='comment-form'>
    <a name='comment-form'/>
    <b:if cond='data:mobile'>
      <p><data:blogCommentMessage/></p>
      <data:blogTeamBlogMessage/>
      <a expr:href='data:post.commentFormIframeSrc' id='comment-editor-src'/>
      <iframe allowtransparency='true' class='blogger-iframe-colorize blogger-comment-from-post' expr:height='data:cmtIframeInitialHeight' frameborder='0' id='comment-editor' name='comment-editor' src='' style='display: none' width='100%'/>
    <b:else/>
      <p><data:blogCommentMessage/></p>
      <data:blogTeamBlogMessage/>
      <a expr:href='data:post.commentFormIframeSrc' id='comment-editor-src'/>
      <iframe allowtransparency='true' class='blogger-iframe-colorize blogger-comment-from-post' expr:height='data:cmtIframeInitialHeight' frameborder='0' id='comment-editor' name='comment-editor' src='' width='100%'/>
    </b:if>
    <data:post.cmtfpIframe/>
    <script type='text/javascript'>
      BLOG_CMT_createIframe(&#39;<data:post.appRpcRelayPath/>&#39;);
    </script>
  </div>
</b:includable>
           <b:includable id='threaded_comment_js' var='post'>
  <script async='async' expr:src='data:post.commentSrc' type='text/javascript'/>

  <script type='text/javascript'>
    (function() {
      var items = <data:post.commentJso/>;
      var msgs = <data:post.commentMsgs/>;
      var config = <data:post.commentConfig/>;

// <![CDATA[
      var cursor = null;
      if (items && items.length > 0) {
        cursor = parseInt(items[items.length - 1].timestamp) + 1;
      }

      var bodyFromEntry = function(entry) {
        var text = (entry &&
                    ((entry.content && entry.content.$t) ||
                     (entry.summary && entry.summary.$t))) ||
            '';
        if (entry && entry.gd$extendedProperty) {
          for (var k in entry.gd$extendedProperty) {
            if (entry.gd$extendedProperty[k].name == 'blogger.contentRemoved') {
              return '<span class="deleted-comment">' + text + '</span>';
            }
          }
        }
        return text;
      }

      var parse = function(data) {
        cursor = null;
        var comments = [];
        if (data && data.feed && data.feed.entry) {
          for (var i = 0, entry; entry = data.feed.entry[i]; i++) {
            var comment = {};
            // comment ID, parsed out of the original id format
            var id = /blog-(\d+).post-(\d+)/.exec(entry.id.$t);
            comment.id = id ? id[2] : null;
            comment.body = bodyFromEntry(entry);
            comment.timestamp = Date.parse(entry.published.$t) + '';
            if (entry.author && entry.author.constructor === Array) {
              var auth = entry.author[0];
              if (auth) {
                comment.author = {
                  name: (auth.name ? auth.name.$t : undefined),
                  profileUrl: (auth.uri ? auth.uri.$t : undefined),
                  avatarUrl: (auth.gd$image ? auth.gd$image.src : undefined)
                };
              }
            }
            if (entry.link) {
              if (entry.link[2]) {
                comment.link = comment.permalink = entry.link[2].href;
              }
              if (entry.link[3]) {
                var pid = /.*comments\/default\/(\d+)\?.*/.exec(entry.link[3].href);
                if (pid && pid[1]) {
                  comment.parentId = pid[1];
                }
              }
            }
            comment.deleteclass = 'item-control blog-admin';
            if (entry.gd$extendedProperty) {
              for (var k in entry.gd$extendedProperty) {
                if (entry.gd$extendedProperty[k].name == 'blogger.itemClass') {
                  comment.deleteclass += ' ' + entry.gd$extendedProperty[k].value;
                } else if (entry.gd$extendedProperty[k].name == 'blogger.displayTime') {
                  comment.displayTime = entry.gd$extendedProperty[k].value;
                }
              }
            }
            comments.push(comment);
          }
        }
        return comments;
      };

      var paginator = function(callback) {
        if (hasMore()) {
          var url = config.feed + '?alt=json&v=2&orderby=published&reverse=false&max-results=50';
          if (cursor) {
            url += '&published-min=' + new Date(cursor).toISOString();
          }
          window.bloggercomments = function(data) {
            var parsed = parse(data);
            cursor = parsed.length < 50 ? null
                : parseInt(parsed[parsed.length - 1].timestamp) + 1
            callback(parsed);
            window.bloggercomments = null;
          }
          url += '&callback=bloggercomments';
          var script = document.createElement('script');
          script.type = 'text/javascript';
          script.src = url;
          document.getElementsByTagName('head')[0].appendChild(script);
        }
      };
      var hasMore = function() {
        return !!cursor;
      };
      var getMeta = function(key, comment) {
        if ('iswriter' == key) {
          var matches = !!comment.author
              && comment.author.name == config.authorName
              && comment.author.profileUrl == config.authorUrl;
          return matches ? 'true' : '';
        } else if ('deletelink' == key) {
          return config.baseUri + '/delete-comment.g?blogID='
               + config.blogId + '&postID=' + comment.id;
        } else if ('deleteclass' == key) {
          return comment.deleteclass;
        }
        return '';
      };

      var replybox = null;
      var replyUrlParts = null;
      var replyParent = undefined;

      var onReply = function(commentId, domId) {
        if (replybox == null) {
          // lazily cache replybox, and adjust to suit this style:
          replybox = document.getElementById('comment-editor');
          if (replybox != null) {
            replybox.height = '250px';
            replybox.style.display = 'block';
            replyUrlParts = replybox.src.split('#');
          }
        }
        if (replybox && (commentId !== replyParent)) {
          replybox.src = '';
          document.getElementById(domId).insertBefore(replybox, null);
          replybox.src = replyUrlParts[0]
              + (commentId ? '&parentID=' + commentId : '')
              + '#' + replyUrlParts[1];
          replyParent = commentId;
        }
      };

      var hash = (window.location.hash || '#').substring(1);
      var startThread, targetComment;
      if (/^comment-form_/.test(hash)) {
        startThread = hash.substring('comment-form_'.length);
      } else if (/^c[0-9]+$/.test(hash)) {
        targetComment = hash.substring(1);
      }

      // Configure commenting API:
      var configJso = {
        'maxDepth': config.maxThreadDepth
      };
      var provider = {
        'id': config.postId,
        'data': items,
        'loadNext': paginator,
        'hasMore': hasMore,
        'getMeta': getMeta,
        'onReply': onReply,
        'rendered': true,
        'initComment': targetComment,
        'initReplyThread': startThread,
        'config': configJso,
        'messages': msgs
      };

      var render = function() {
        if (window.goog && window.goog.comments) {
          var holder = document.getElementById('comment-holder');
          window.goog.comments.render(holder, provider);
        }
      };

      // render now, or queue to render when library loads:
      if (window.goog && window.goog.comments) {
        render();
      } else {
        window.goog = window.goog || {};
        window.goog.comments = window.goog.comments || {};
        window.goog.comments.loadQueue = window.goog.comments.loadQueue || [];
        window.goog.comments.loadQueue.push(render);
      }
    })();
// ]]>
  </script>
</b:includable>
           <b:includable id='threaded_comments' var='post'>
  <div class='comments' id='comments'>
    <a name='comments'/>
    <h4><data:post.commentLabelFull/>:</h4>

    <div class='comments-content'>
      <b:include cond='data:post.embedCommentForm' data='post' name='threaded_comment_js'/>
      <div id='comment-holder'>
         <data:post.commentHtml/>
      </div>
    </div>

    <p class='comment-footer'>
      <b:if cond='data:post.allowNewComments'>
        <b:include data='post' name='threaded-comment-form'/>
      <b:else/>
        <data:post.noNewCommentsText/>
      </b:if>
    </p>

    <b:if cond='data:showCmtPopup'>
      <div id='comment-popup'>
        <iframe allowtransparency='true' frameborder='0' id='comment-actions' name='comment-actions' scrolling='no'>
        </iframe>
      </div>
    </b:if>

    <div id='backlinks-container'>
    <div expr:id='data:widget.instanceId + &quot;_backlinks-container&quot;'>
      <b:include cond='data:post.showBacklinks' data='post' name='backlinks'/>
    </div>
    </div>
  </div>
</b:includable>
         </b:widget>
         <b:widget id='PopularPosts1' locked='false' title='' type='PopularPosts'>
           <b:widget-settings>
             <b:widget-setting name='numItemsToShow'>3</b:widget-setting>
             <b:widget-setting name='showThumbnails'>true</b:widget-setting>
             <b:widget-setting name='showSnippets'>true</b:widget-setting>
             <b:widget-setting name='timeRange'>LAST_YEAR</b:widget-setting>
           </b:widget-settings>
           <b:includable id='main'>
  <b:if cond='data:title != &quot;&quot;'><h2><data:title/></h2></b:if>
  <div class='widget-content popular-posts'>
    <ul>
      <b:loop values='data:posts' var='post'>
      <li>
        <b:if cond='!data:showThumbnails'>
          <b:if cond='!data:showSnippets'>
            <!-- (1) No snippet/thumbnail -->
            <a expr:href='data:post.href'><data:post.title/></a>
          <b:else/>
            <!-- (2) Show only snippets -->
            <div class='item-title'><a expr:href='data:post.href'><data:post.title/></a></div>
            <div class='item-snippet'><data:post.snippet/></div>
          </b:if>
        <b:else/>
          <!-- (3) Show only thumbnails or (4) Snippets and thumbnails. -->
          <div expr:class='data:showSnippets ? &quot;item-content&quot; : &quot;item-thumbnail-only&quot;'>
            <b:if cond='data:post.featuredImage.isResizable or data:post.thumbnail'>
              <div class='item-thumbnail'>
                <a expr:href='data:post.href' target='_blank'>
                  <b:with value='data:post.featuredImage.isResizable                                  ? resizeImage(data:post.featuredImage, 72, &quot;1:1&quot;)                                  : data:post.thumbnail' var='image'>
                    <img alt='' border='0' expr:src='data:image'/>
                  </b:with>
                </a>
              </div>
            </b:if>
            <div class='item-title'><a expr:href='data:post.href'><data:post.title/></a></div>
            <b:if cond='data:showSnippets'>
              <div class='item-snippet'><data:post.snippet/></div>
            </b:if>
          </div>
          <div style='clear: both;'/>
        </b:if>
      </li>
      </b:loop>
    </ul>
    <b:include name='quickedit'/>
  </div>
</b:includable>
         </b:widget>
       </b:section>

        <div class='column-right-outer'>        
          <aside>
          <macro:include id='main-column-right-sections' name='sections'>
            <macro:param default='2' name='num' value='2'/>
            <macro:param default='sidebar-right' name='idPrefix'/>
            <macro:param default='sidebar' name='class'/>
            <macro:param default='true' name='includeBottom'/>
          </macro:include>
          </aside>        
        </div><!-- .column-right-outer -->
        
        <div style='clear: both'/>
    </div><!-- .main -->

    <footer>
      <b:section class='foot' id='footer-3' name='Footer' showaddelement='yes'>
        <b:widget id='Profile1' locked='false' title='Обо мне' type='Profile'>
          <b:widget-settings>
            <b:widget-setting name='showaboutme'>true</b:widget-setting>
            <b:widget-setting name='showlocation'>false</b:widget-setting>
          </b:widget-settings>
          <b:includable id='main'>
    <b:if cond='data:title != &quot;&quot;'>
      <h2><data:title/></h2>
    </b:if>
    <div class='widget-content'>
    <b:if cond='data:team'> <!-- team blog profile -->
      <ul>
        <b:loop values='data:authors' var='i'>
          <li><a class='profile-name-link g-profile' expr:href='data:i.userUrl' expr:style='&quot;background-image: url(&quot; + data:i.profileLogo + &quot;);&quot;'><data:i.display-name/></a></li>
        </b:loop>
      </ul>

    <b:else/> <!-- normal blog profile -->

      <b:if cond='data:photo.url != &quot;&quot;'>
        <a expr:href='data:userUrl'><img class='profile-img' expr:alt='data:messages.myPhoto' expr:height='data:photo.height' expr:src='data:photo.url' expr:width='data:photo.width'/></a>
      </b:if>

      <dl class='profile-datablock'>
        <dt class='profile-data'>
          <a class='profile-name-link g-profile' expr:href='data:userUrl' expr:style='&quot;background-image: url(&quot; + data:profileLogo + &quot;);&quot;' rel='author'>
            <data:displayname/>
          </a>
          <b:if cond='data:hasgoogleprofile'>
            <br/>
            <div class='g-follow' data-annotation='bubble' data-height='20' expr:data-href='data:userUrl'/>
          </b:if>
        </dt>

        <b:if cond='data:showlocation'>
          <dd class='profile-data'><data:location/></dd>
        </b:if>

        <b:if cond='data:aboutme != &quot;&quot;'><dd class='profile-textblock'><data:aboutme/></dd></b:if>
      </dl>
      <a class='profile-link' expr:href='data:userUrl' rel='author'><data:viewProfileMsg/></a>
    </b:if>

     <b:include name='quickedit'/>
    </div>
  </b:includable>
        </b:widget>
      </b:section>
    </footer> 
 
  </div><!-- .content -->

  <script type='text/javascript'>
    window.setTimeout(function() {
        document.body.className = document.body.className.replace(&#39;loading&#39;, &#39;&#39;);
      }, 10);
  </script>
</body>

<macro:includable id='sections' var='col'>
  <macro:if cond='data:col.num == 0'>
  <macro:else/>
    <b:section mexpr:class='data:col.class' mexpr:id='data:col.idPrefix + &quot;-1&quot;' preferred='yes' showaddelement='yes'/>

    <macro:if cond='data:col.num &gt;= 2'>
      <table border='0' cellpadding='0' cellspacing='0' mexpr:class='&quot;section-columns columns-&quot; + data:col.num'>
      <tbody>
      <tr>
        <td class='first columns-cell'>
          <b:section mexpr:class='data:col.class' mexpr:id='data:col.idPrefix + &quot;-2-1&quot;'/>
        </td>

        <td class='columns-cell'>
          <b:section mexpr:class='data:col.class' mexpr:id='data:col.idPrefix + &quot;-2-2&quot;'/>
        </td>

        <macro:if cond='data:col.num &gt;= 3'>
          <td class='columns-cell'>
            <b:section mexpr:class='data:col.class' mexpr:id='data:col.idPrefix + &quot;-2-3&quot;'/>
          </td>
        </macro:if>

        <macro:if cond='data:col.num &gt;= 4'>
          <td class='columns-cell'>
            <b:section mexpr:class='data:col.class' mexpr:id='data:col.idPrefix + &quot;-2-4&quot;'/>
          </td>
        </macro:if>
      </tr>
      </tbody>
      </table>

      <macro:if cond='data:col.includeBottom'>
        <b:section mexpr:class='data:col.class' mexpr:id='data:col.idPrefix + &quot;-3&quot;' showaddelement='yes'/>
      </macro:if>
    </macro:if>
  </macro:if>
</macro:includable>

  
<b:section-contents id='sidebar-right-1'>
  <b:widget id='BlogSearch1' locked='false' title='Поиск по этому блогу' type='BlogSearch'>
    <b:includable id='main'>
    <!-- only display title if it's non-empty -->
    <b:if cond='data:title != &quot;&quot;'>
      <h2 class='title'><data:title/></h2>
    </b:if>

    <div class='widget-content'>
      <div expr:id='data:widget.instanceId + &quot;_form&quot;'>
        <form class='gsc-search-box' expr:action='data:blog.searchUrl'>
          <b:attr cond='not data:view.isPreview' name='target' value='_top'/>
          <table cellpadding='0' cellspacing='0' class='gsc-search-box'>
            <tbody>
              <tr>
                <td class='gsc-input'>
                  <input autocomplete='off' class='gsc-input' expr:value='data:view.isSearch ? data:view.search.query.escaped : &quot;&quot;' name='q' size='10' title='search' type='text'/>
                </td>
                <td class='gsc-search-button'>
                  <input class='gsc-search-button' expr:value='data:messages.search' title='search' type='submit'/>
                </td>
              </tr>
            </tbody>
          </table>
        </form>
      </div>
    </div>

    <b:include name='quickedit'/>
  </b:includable>
  </b:widget>
  <b:widget id='Label1' locked='false' title='Ярлыки' type='Label'>
    <b:widget-settings>
      <b:widget-setting name='sorting'>ALPHA</b:widget-setting>
      <b:widget-setting name='display'>LIST</b:widget-setting>
      <b:widget-setting name='selectedLabelsList'/>
      <b:widget-setting name='showType'>ALL</b:widget-setting>
      <b:widget-setting name='showFreqNumbers'>false</b:widget-setting>
    </b:widget-settings>
    <b:includable id='main'>
  <b:if cond='data:title != &quot;&quot;'>
    <h2><data:title/></h2>
  </b:if>
  <div expr:class='&quot;widget-content &quot; + data:display + &quot;-label-widget-content&quot;'>
    <b:if cond='data:display == &quot;list&quot;'>
      <ul>
        <b:loop values='data:labels' var='label'>
          <li>
            <b:if cond='data:blog.url == data:label.url'>
              <span expr:dir='data:blog.languageDirection'><data:label.name/></span>
            <b:else/>
              <a expr:dir='data:blog.languageDirection' expr:href='data:label.url'><data:label.name/></a>
            </b:if>
            <b:if cond='data:showFreqNumbers'>
              <span dir='ltr'>(<data:label.count/>)</span>
            </b:if>
          </li>
        </b:loop>
      </ul>
    <b:else/>
      <b:loop values='data:labels' var='label'>
        <span expr:class='&quot;label-size label-size-&quot; + data:label.cssSize'>
          <b:if cond='data:blog.url == data:label.url'>
            <span expr:dir='data:blog.languageDirection'><data:label.name/></span>
          <b:else/>
            <a expr:dir='data:blog.languageDirection' expr:href='data:label.url'><data:label.name/></a>
          </b:if>
          <b:if cond='data:showFreqNumbers'>
            <span class='label-count' dir='ltr'>(<data:label.count/>)</span>
          </b:if>
        </span>
      </b:loop>
    </b:if>
    <b:include name='quickedit'/>
  </div>
</b:includable>
  </b:widget>
  <b:widget id='BlogArchive1' locked='false' title='Архив блога' type='BlogArchive'>
    <b:widget-settings>
      <b:widget-setting name='showStyle'>FLAT</b:widget-setting>
      <b:widget-setting name='yearPattern'>yyyy</b:widget-setting>
      <b:widget-setting name='showWeekEnd'>true</b:widget-setting>
      <b:widget-setting name='monthPattern'>MMMM yyyy</b:widget-setting>
      <b:widget-setting name='dayPattern'>MMM dd</b:widget-setting>
      <b:widget-setting name='weekPattern'>MM/dd</b:widget-setting>
      <b:widget-setting name='chronological'>false</b:widget-setting>
      <b:widget-setting name='showPosts'>true</b:widget-setting>
      <b:widget-setting name='frequency'>MONTHLY</b:widget-setting>
    </b:widget-settings>
    <b:includable id='main'>
  <b:if cond='data:title != &quot;&quot;'>
    <h2><data:title/></h2>
  </b:if>
  <div class='widget-content'>
  <div id='ArchiveList'>
  <div expr:id='data:widget.instanceId + &quot;_ArchiveList&quot;'>
    <b:include cond='data:style == &quot;HIERARCHY&quot;' data='data' name='interval'/>
    <b:include cond='data:style == &quot;FLAT&quot;' data='data' name='flat'/>
    <b:include cond='data:style == &quot;MENU&quot;' data='data' name='menu'/>
  </div>
  </div>
  <b:include name='quickedit'/>
  </div>
</b:includable>
    <b:includable id='flat' var='data'>
  <ul class='flat'>
    <b:loop values='data:data' var='i'>
      <li class='archivedate'>
        <a expr:href='data:i.url'><data:i.name/></a> (<data:i.post-count/>)
      </li>
    </b:loop>
  </ul>
</b:includable>
    <b:includable id='interval' var='intervalData'>
  <b:loop values='data:intervalData' var='interval'>
    <ul class='hierarchy'>
      <li expr:class='&quot;archivedate &quot; + data:interval.expclass'>
        <b:include cond='data:interval.toggleId' data='interval' name='toggle'/>
        <a class='post-count-link' expr:href='data:interval.url'>
          <data:interval.name/>
        </a>
        <span class='post-count' dir='ltr'>(<data:interval.post-count/>)</span>
        <b:include cond='data:interval.data' data='interval.data' name='interval'/>
        <b:include cond='data:interval.posts' data='interval.posts' name='posts'/>
      </li>
    </ul>
  </b:loop>
</b:includable>
    <b:includable id='menu' var='data'>
  <select expr:id='data:widget.instanceId + &quot;_ArchiveMenu&quot;'>
    <option value=''><data:title/></option>
    <b:loop values='data:data' var='i'>
      <option expr:value='data:i.url'><data:i.name/> (<data:i.post-count/>)</option>
    </b:loop>
  </select>
</b:includable>
    <b:includable id='posts' var='posts'>
  <ul class='posts'>
    <b:loop values='data:posts' var='post'>
      <li><a expr:href='data:post.url'><data:post.title/></a></li>
    </b:loop>
  </ul>
</b:includable>
    <b:includable id='toggle' var='interval'>
  <a class='toggle' href='javascript:void(0)'>
    <span expr:class='&quot;zippy&quot; + (data:interval.expclass == &quot;expanded&quot; ? &quot; toggle-open&quot; : &quot;&quot;)'>
      <b:if cond='data:interval.expclass == &quot;expanded&quot;'>
        &#9660;&#160;
      <b:elseif cond='data:blog.languageDirection == &quot;rtl&quot;'/>
        &#9668;&#160;
      <b:else/>
        &#9658;&#160;
      </b:if>
    </span>
  </a>
</b:includable>
  </b:widget>
  <b:widget id='FollowByEmail1' locked='false' title='Follow by Email' type='FollowByEmail'>
    <b:includable id='main'>
  <b:if cond='data:title != &quot;&quot;'><h2 class='title'><data:title/></h2></b:if>
  <div class='widget-content'>
    <div class='follow-by-email-inner'>
      <form action='https://feedburner.google.com/fb/a/mailverify' expr:onsubmit='&quot;window.open(\&quot;https://feedburner.google.com/fb/a/mailverify?uri=&quot; + data:feedPath + &quot;\&quot;, \&quot;popupwindow\&quot;, \&quot;scrollbars=yes,width=550,height=520\&quot;); return true&quot;' method='post' target='popupwindow'>
        <table width='100%'>
          <tr>
            <td>
              <input class='follow-by-email-address' name='email' placeholder='Email address...' type='text'/>
            </td>
            <td width='64px'>
              <input class='follow-by-email-submit' type='submit' value='Submit'/>
            </td>
          </tr>
        </table>
        <input expr:value='data:feedPath' name='uri' type='hidden'/>
        <input name='loc' type='hidden' value='en_US'/>
      </form>
    </div>
  </div>
  <span class='item-control blog-admin'>
    <b:include name='quickedit'/>
  </span>
</b:includable>
  </b:widget>
</b:section-contents><b:section-contents id='sidebar-right-2-1'/><b:section-contents id='sidebar-right-2-2'/><b:section-contents id='sidebar-right-3'/></html>
