<form method="post" action="validation.php">
    <div class="frm_form_fields">
    <input type="hidden" name="action" value="send">
        <fieldset>

            <div class="col-md-12">
                
                <input class="form-control input-lg" type="text" placeholder="*Name"  name="name">
                <span>
                    <?php
                         if(isset($_SESSION['name_error'])){
                            foreach($_SESSION['name_error'] as $n_errors) {
                           echo "<div id='error' class='animated flash'><i class='fa fa-close' style='font-size:2rem;color:red'></i><div id='error'; style='color:white; font-size:2rem;     text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;'> &nbsp&nbsp
                                $n_errors 
                                </div></div></i>";
                            }
                         }
                    ?>
                </span>
        <br>


 
                <input class="form-control input-lg" type="email" placeholder="*Email Address"  name="email">
                <span>
                    <?php
                         if(isset($_SESSION['email_error'])){
                            foreach($_SESSION['email_error'] as $e_errors) {
                           echo "<div id='error' class='animated flash'><i class='fa fa-close' style='font-size:2rem;color:red'></i><div style='color:white; font-size:2rem;     text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;'> &nbsp&nbsp
                                $e_errors 
                                </div></div></i>";
                            }
                         }
                    ?>
                </span>

        <br>
             
                <input class="form-control input-lg" type="text" placeholder="*Phone Number" name="phone">
                <span>
                    <?php
                         if(isset($_SESSION['phone_error'])){
                            foreach($_SESSION['phone_error'] as $p_errors) {
                           echo "<div id='error' class='animated flash'><i class='fa fa-close' style='font-size:2rem;color:red'></i><div style='color:white; font-size:2rem;     text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;'> &nbsp&nbsp
                                $p_errors 
                                </div></div></i>";
                            }
                         }
                    ?>
                </span>

         <br>

                
                <input class="form-control input-lg" type="text" placeholder="Company Name"  name="company">
        <br>


                <button class="btn btn-lg col-md-12" name="submit"> Request More Information </button>

            <span>
                <?php
                    if(isset($_SESSION['mail_msg'])){
                        foreach($_SESSION['mail_msg'] as $msgs) {
                            echo "<div id='error' class='animated pulse'><div style='color:white; font-size:2rem;     text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;'> &nbsp&nbsp
                            $msgs 
                            </div></div></i>";
                        }
                    }
                ?>
            </span>
        </div>
        </fieldset>
    </div>
</form>