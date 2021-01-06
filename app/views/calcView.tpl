{extends file="main.tpl"}

{block name=footer}
<div id="copyright">
    <ul><li>Strona oparta na szablonie:  <a href="https://html5up.net">HTML5 UP</a></li><li> autor: Julia Niedziela</li></ul>
</div>
{/block}

{block name=content}

<!-- Main -->
<div id="main">
    <div class="row gtr-uniform">
        <div class="col-6 col-12-xsmall">
            <form method="post" action="{$config->action_root}calcCompute" >
                <div class="field">
                    <label for="id_value">Kwota kredytu</label>
                    <input type="text" name="value" id="id_value" value="{$frm->value}"/><br/>
                </div>
                <div class="field">
                    <label for="id_time">Okres(w latach)</label>
                    <input type="text" name="time" id="id_time" value="{$frm->time}" /><br/>
                </div>
                <div class="field">
                    <label for="id_interest">Oprocentowanie</label>
                    <input type="text" name="interest" id="id_interest" value="{$frm->interest}"/><br/>
                </div>

                <ul class="actions">
                    <li><input type="submit"  value="Oblicz" /></li>
                </ul>

                <a href="{$config->action_url}logout">
                    <input type="button" value="Wyloguj" />
                </a>
             </form>
        </div>


        <div class="col-6 col-12-xsmall">
            {* wyświeltenie listy błędów, jeśli istnieją *}

            {if $msg->IsError()}
            <blockquote>
                <h4>Wystąpiły błędy: </h4>
                <ol class="err">
                    {foreach $msg->getErrors() as $message}
                    {strip}
                    <li>{$message}</li>
                    {/strip}
                    {/foreach}
                </ol>
            </blockquote>
            {/if}


            {if isset($res->result)}
            <blockquote>
                <h4>Wynik</h4>
                <p class="res">
                    {$res->result}
                </p>
            </blockquote>
            {/if}
        </div>
    </div>

</div>
<!--</div>-->

{/block}
