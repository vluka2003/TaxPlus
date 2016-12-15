<form role="form" method="post" action="validation_two.php">
    <input type="hidden" name="action" value="register">
    <div class="form-group">
        <label class="control-label col-sm-2" for="usrname">
            <span class="glyphicon glyphicon-user"></span>:
        </label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="userName" placeholder="Enter Full Name" name="username">
        </div>
        <span>
            <?php
                 if(isset($_SESSION['uname_error'])){
                    foreach($_SESSION['uname_error'] as $un_errors) {
                   echo "<div id='error' class='animated flash'><i class='fa fa-close' style='font-size:2rem;color:red'></i><div id='error'; style='color:white; font-size:2rem;     text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;'> &nbsp&nbsp
                        $un_errors
                        </div></div></i>";
                    }
                 }
            ?>
        </span>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="email">
            <span class="glyphicon glyphicon-envelope"></span>:
        </label>
        <div class="col-sm-10">
            <input type="email" class="form-control" id="usrname" placeholder="Enter Email" name="useremail">
        </div>
        <span>
            <?php
                 if(isset($_SESSION['uemail_error'])){
                    foreach($_SESSION['uemail_error'] as $ue_errors) {
                   echo "<div id='error' class='animated flash'><i class='fa fa-close' style='font-size:2rem;color:red'></i><div style='color:white; font-size:2rem;     text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;'> &nbsp&nbsp
                        $ue_errors
                        </div></div></i>";
                    }
                 }
            ?>
        </span>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="Number">
            <span class="glyphicon glyphicon-phone"></span>:
        </label>
        <div class="col-sm-10">
            <input type="number" class="form-control" id="Phone number" placeholder="Enter Phone No" name="userphone">
        </div>
        <span>
            <?php
                 if(isset($_SESSION['uphone_error'])){
                    foreach($_SESSION['uphone_error'] as $up_errors) {
                   echo "<div id='error' class='animated flash'><i class='fa fa-close' style='font-size:2rem;color:red'></i><div style='color:white; font-size:2rem;     text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;'> &nbsp&nbsp
                        $up_errors
                        </div></div></i>";
                    }
                 }
            ?>
        </span>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="Datetime">
            <span class="glyphicon glyphicon-calendar"></span>
        </label>
        <div class="col-sm-10">
            <input type="text" id="aDate" data-format="DD-MM h:mm a" data-template="D / MMM     hh : mm a" name="datetime" value="21-12 9:30 am">
        </div>


    </div>
    <button type="submit" name="register" value="Request for Appointment" class="btn btn-primary btn-block">Request Appointment
        <span class="glyphicon glyphicon-ok"></span>
    </button>
    <span>
        <?php
            if(isset($_SESSION['umail_msg'])){
                foreach($_SESSION['umail_msg'] as $umsgs) {
                    echo "<div id='error' class='animated pulse'><div style='color:white; font-size:2rem;     text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;'> &nbsp&nbsp
                    $umsgs
                    </div></div></i>";
                }
            }
        ?>
    </span>
</form>
