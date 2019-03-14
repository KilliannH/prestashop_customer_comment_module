{extends file='customer/page.tpl'}

{block name='page_title'}
    {l s='Add comment' d='Shop.Theme.Customeraccount'}
{/block}

{block name='page_content'}
    <div class="form-group">
        <label for="comment_input">
            <input id="comment_input" style="padding-bottom: 10px;" class="form-control" placeholder="{l s='Your comment' mod='customercomment'}">
        </label>
        <button style="margin-bottom: 2px; padding-bottom: 10px;" class="btn btn-primary">{l s='SEND' mod='customercomment'}</button>
    </div>
{/block}

