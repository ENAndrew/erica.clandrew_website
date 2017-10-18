<!-- general footer -->

<div class="navbar navbar-fixed-bottom footer" role="navigation">
  <div class="row footerItems">
    <div class="col-xs-6 text-left">
        <span class="foot-left">Contact:<a href="contact.php"><i class="fa fa-envelope-o"></i></a>
        <a href="https://www.facebook.com/erica.hegebarth"><i class="fa fa-facebook-official"></i></a> 
        <a href="https://www.linkedin.com/in/erica-andrew-67ba18b6"><i class="fa fa-linkedin"></i></a>
        <a href="https://github.com/ENAndrew"><i class="fa fa-github"></i></a>
      </span>
   	</div>
      
    <div class="col-xs-6 text-right">
        <span class="foot-right">Copyright &copy; 2017 Erica Andrew <a href="#" data-toggle="modal" data-target="#adminModal"><img  src="img/layout/small_scarab.png" /></a></span>
        
    </div>
  </div>
</div>

<!-- admin login modal -->

<div class="modal fade" id="adminModal" tabindex="-1" role="dialog" aria-labelledby="adminLoginModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="adminLoginModal">Are you Me?</h4>
            </div>
            <div class="modal-body">
                <form role="form" method="post" action="../resources/components/admin_login.php">
                    <div class="form-group">
                        <label for="username" class="control-label">Admin Username:</label>
                        <input type="text" class="form-control" id="username" name="username" placeholder="You'd know it if you were me" value="">
                        <?php if (isset($errUsername)): echo "<p class='text-danger'>$errUsername</p>"; endif; ?>
                    </div>
                    <div class="form-group">
                        <label for="text" class="control-label">Password</label>
                        <input type="adminPass" class="form-control" id="adminPass" name="adminPass" placeholder="Less straightforward than anticipated" value="">
                        <?php if (isset($errAdminPass)): echo "<p class='text-danger'>$errAdminPass</p>"; endif;?>
                    </div>
                    <button class="btn btn-secondary center-block" id="submit" name="submit" type="submit" value="Send"><strong>Log In</strong></button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn" data-dismiss="modal">Retreat</button>
            </div>
        </div>
    </div>
</div>

