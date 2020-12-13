<div class="container">
    <div class="row">
        <div class="col-12 col-md-6 offset-md-3 col-sm-8 offset-sm-2 mt-5 pt-5 pb-3 bg-white form-wrapper">
            <div class="container">
                <h3>Login</h3>
                <hr>
                <form action="/" method="post">
                    <div class="form-group">
                        <label for="email"><strong>Email address: </strong></label>
                        <input type="text" name="email" class="form-control" id="email" value="<?= set_value('email') ?>">
                    </div>
                    <div class="form-group">
                        <label for="password"><strong>Password: </strong></label>
                        <input type="text" name="password" class="form-control" id="password">
                    </div>
                    <div class="row">
                        <div class="col-12 col-sm-4">
                            <button type="submit" class="btn btn-primary">Login</button>
                        </div>
                        <div class="col-12 col-sm-8 text-right">
                            <a href="/register">Don't have an account yet</a>
                        </div>
                    </div>
                </form>
            </div>    
        </div>
    </div>
</div>