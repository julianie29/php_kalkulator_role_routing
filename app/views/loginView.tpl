{extends file="main.tpl"}

{block name=footer}
    <div id="copyright">
        <ul><li>Strona oparta na szablonie:  <a href="https://html5up.net">HTML5 UP</a></li><li> autor: Julia Niedziela</li></ul>
    </div>
{/block}

{block name=content}
    <div id="main">
        <div class="row gtr-uniform">
            <div class="col-6 col-12-xsmall">
                <form method="post" action="{$config->action_root}login" >
                    <div class="field">
                        <label for="id_login">Login</label>
                        <input type="text" name="login" id="id_login" /><br/>
                    </div>
                    <div class="field">
                        <label for="id_pass">Hasło</label>
                        <input type="text" name="pass" id="id_pass" /><br/>
                    </div>
                    <ul class="actions">
                        <li><input type="submit"  value="Zaloguj" /></li>
                    </ul>
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


            </div>
        </div>

    </div>

{/block}
