{extends file='customer/page.tpl'}

{block name='page_title'}
    {l s='Add comment' mod='customercomment'}
{/block}

{block name='page_content'}
    <div id="rate_comment">
        <!-- 1 -->
        <a href="#" id="rate1"><span class="no-deco-links">
            <i class="material-icons">&#xe838;</i>
        </span></a>

        <!-- 2 -->
        <a href="#"><span class="no-deco-links">
            <i class="material-icons">&#xe838;</i>
        </span></a>

        <!-- 3 -->
        <a href="#"><span class="no-deco-links">
            <i class="material-icons">&#xe838;</i>
        </span></a>

        <!-- 4 -->
        <a href="#"><span class="no-deco-links">
            <i class="material-icons">&#xe838;</i>
        </span></a>

        <!-- 5 -->
        <a href="#"><span class="no-deco-links">
            <i class="material-icons">&#xe838;</i>
            </span></a>
    </div>
    <form class="form-group" method="post">
        <label for="comment_input">
            <input id="comment_input" name="comment_input" style="padding-bottom: 10px;" class="form-control" placeholder="{l s='Your comment' mod='customercomment'}">
        </label>
        <input style="margin-bottom: 2px; padding-bottom: 10px;" name="comment_submit" class="btn btn-primary" type="submit" value="{l s='SEND' mod='customercomment'}">
    </form>
{/block}

