{extends file="layout.tpl"}
{block name="body"}
<div class="row">
    {if isset($smarty.get.error)}
        <div class="alert alert-danger" role="alert">{{$smarty.get.error}}</div>
    {/if}
    <div class="col-md-3">
        <ul class="nav nav-pills nav-stacked nav-pills-stacked-example">
            <li role="presentation" class="active"><a href="/">All</a></li>
            {foreach from=$categories item=category}
                {if $smarty.get.categoryId==={$category['id']} }
                <li role="presentation" class="active" ><a href="/?action=showCategoryProducts&categoryId={$category['id']}">{$category['name']}</a></li>
                {else}
                <li role="presentation"  ><a href="/?action=showCategoryProducts&categoryId={$category['id']}">{$category['name']}</a></li>
                {/if}
            {/foreach}
        </ul>
    </div>

    <div class="col-md-9">

        <div class="row">

            {foreach from=$products2 item=product}

            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">

        <img src={$product['image']}  alt="...">
                    <div class="caption">
                        <h3>{$product['name']}</h3>
                        <p>{$product['price']}</p>
                    </div>

                </div>
            </div>

            {/foreach}
                </div>

        </div>




    {/block}
