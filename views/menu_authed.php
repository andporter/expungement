<nav class="navbar navbar-inverse navbar-fixed-top">
   <div class="container-fluid" id="navfluid">
       <div class="navbar-header">
           <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigationbar">
               <span class="sr-only">Toggle navigation</span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/index.php">Cottages of Hope</a>
       </div>
       <div class="collapse navbar-collapse" id="navigationbar">
           <ul class="nav navbar-nav">
               
           </ul>
           <ul class="nav navbar-nav navbar-right">
                <li><a href="#" data-toggle="modal" data-target="#adminLogoutConfirmModal"><span class="glyphicon glyphicon-user"></span> Logout</a></li>
           </ul>
      </div>
   </div>
</nav>

<div id="adminLogoutConfirmModal" class="modal fade bs-modal-sm" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content well">
            <div class="modal-header">
                <h4><span class="glyphicon glyphicon-user"></span> Logout</h4>
            </div>
            <div class="modal-body">
                <p>Are you sure you want to logout?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <a href="index.php?logout" class="btn btn-danger btn-ok">Yes, Logout</a>
            </div>
        </div>
    </div>
</div>