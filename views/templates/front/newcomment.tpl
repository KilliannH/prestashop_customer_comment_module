{extends file='customer/page.tpl'}

{block name='page_title'}
    {l s='Add comment' mod='customercomments'}
{/block}

{block name='page_content'}
    <div id="rate_comment">

        <p>
        <!-- 1 -->
        <span class="rate-items" id="rate1">
            <i class="material-icons">&#xe838;</i>
        </span>
        <!-- 2 -->
        <span class="rate-items" id="rate2">
            <i class="material-icons">&#xe838;</i>
        </span>
        <!-- 3 -->
        <span class="rate-items" id="rate3">
            <i class="material-icons">&#xe838;</i>
        </span>
        <!-- 4 -->
        <span class="rate-items" id="rate4">
            <i class="material-icons">&#xe838;</i>
        </span>
        <!-- 5 -->
        <span class="rate-items" id="rate5">
            <i class="material-icons">&#xe838;</i>
        </span>
        </p>
    </div>
    <form class="form-group" method="post">
        <label for="comment_input">
            <input id="comment_input" name="comment_input" style="padding-bottom: 10px;" class="form-control" placeholder="{l s='Your comment' mod='customercomments'}">
        </label>
        <label for="rate_input">
            <input id="rate_input" name="rate_input" hidden value="0">
        </label>
        <input style="margin-bottom: 2px; padding-bottom: 10px;" name="comment_submit" class="btn btn-primary" type="submit" value="{l s='SEND' mod='customercomments'}">
    </form>
{/block}