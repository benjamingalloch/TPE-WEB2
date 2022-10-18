{include file="header.tpl"}
    
    <form method="post" action="verifyLogin">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Usuario</label>
            <input type="input" class="form-control" name="userId" id="userId" aria-describedby="userId">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" name="passworId" id="passworId" placeholder="Password">
        </div>
        {if !empty($message)}
            <div class="alert alert-danger" role="alert">
                {$message}
            </div>
        {/if}
        <button type="submit" class="btn btn-primary">Login</button>
    </form>

{include file="footer.tpl"}