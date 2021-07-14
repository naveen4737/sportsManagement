<?php

if(isset($_GET['signupsuccess']) && ($_GET['signupsuccess'])=="true"){
    echo '<div class="alert alert-success alert-dismissible fade show m-0 text-center" role="alert">
            <strong>Success!</strong> Your details have been successfully registered with us.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>';
}elseif(isset($_GET['signupsuccess']) && $_GET['signupsuccess']=="false" && isset($_GET['error'])){
    echo '<div class="alert alert-danger alert-dismissible fade show m-0 text-center" role="alert">
            <strong>Sorry!</strong> '. $_GET["error"]. '
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>';
}

?>