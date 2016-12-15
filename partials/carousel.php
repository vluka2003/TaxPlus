<section>

    <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="6000">

        <!-- Carousel indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
        </ol>

        <!-- Carousel items -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="container-fluid header_one_bg">
                    <div class="col-md-4 header_form">
                        <div class="row">
                            <h1 class="animate bigEntrance">
                                Your Partners <br> in <br> Tax Solution
                            </h1>
                        </div>
                        <div class="row">
                            <?php include_once('partials/header_form.php') ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="container header_two_bg">
                        <div class="col-md-4 header_form">
                            <div class="row">
                                <h1 class="animate bigEntrance">Peace of Mind? <br> Count On Us</h1>
                                <div class="booked-cal-sm">
                                    <div class="cal-tooltip">
                                        <h3>Book an Appointment</h3>
                                    </div>
                                    <div id="dayTime" style="padding:10px;font-size:x-large","font-size": "18px", ></div>
                                    <div id="datepicker" data-toggle="popover" title="9 AM to 9 PM" data-content="Every Hour 3 spots Available" data-trigger="hover"></div>
                                    <table class="ui-widget-content" style="width:100%">
                                        <tbody>
                                            <tr>
                                                <td class="ui-datepicker-week-end">
                                                    <a class="ui-state-default" style="color:#c5c5c5;background-color:#c5c5c5" ;="">000</a>&nbsp;&nbsp;&nbsp;Available&nbsp;&nbsp;&nbsp;</td>
                                                <td class="ui-datepicker-week-end"><a style="background-color:#f6f6f6;color:#f6f6f6" ;=""> 000</a>&nbsp;&nbsp;&nbsp;Not available &nbsp;&nbsp; &nbsp;</td>
                                            </tr>
                                        </tbody>
                                    </table>



                                    <!-- Used to open the Modal -->


                                    <!-- Modal -->
                                    <div class="modal fade" id="myModal" role="dialog">
                                        <div class="modal-dialog">

                                            <!-- Modal content-->
                                            <div class="modal-content">
                                                <div class="modal-header";>
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4> Request an Appointment</h4>

                                                </div>
                                                <div class="modal-body">
                                                    <h5><span class="glyphicon glyphicon-lock"></span> Please review and confirm that you would like to request the following appointment</h5>
                                                    <div> <span class="glyphicon glyphicon-calendar" id="apptDay"></span><span class="glyphicon glyphicon-time" id="appt"></span>
                                                </div>

                                                <?php include_once('partials/cal_form.php') ?>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
                                                    <span class="glyphicon glyphicon-remove"></span> Cancel
                                                </button>

                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                        <?php session_destroy(); ?>
                                <!--End Modal-->
                            </div>
                        </div>


                            </div>
                </div>
            </div><!--End of Calender item-Carousel-->
        </div>


        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
    </div>
</section>
