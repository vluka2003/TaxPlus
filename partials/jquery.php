

    <! -- jQuery & Plugins -->

    <! -- jQuery modal -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>


    <! -- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <! -- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <! -- Theme JavaScript -->
    <script src="js/creative.min.js"></script>

    <! --datepicker-->
    <script src="js/datepicker.js"></script>
    <script src="js/combodate.js"></script>
    <script src="js/moment.js"></script>

    <! -- Javascript -- >

    <script>

        $(window).scroll(function() {
            $('p, li').each(function(){
            var imagePos = $(this).offset().top;

            var topOfWindow = $(window).scrollTop();
                if (imagePos < topOfWindow+970) {
                    $(this).addClass("fadeIn");
                }
            });
        });

        $(window).scroll(function() {
            $('img').each(function(){
            var imagePos = $(this).offset().top;

            var topOfWindow = $(window).scrollTop();
                if (imagePos < topOfWindow+950) {
                    $(this).addClass("expandOpen");
                }
            });
        });

        $(window).scroll(function() {
            $('._box').each(function(){
            var imagePos = $(this).offset().top;

            var topOfWindow = $(window).scrollTop();
                if (imagePos < topOfWindow+950) {
                    $(this).addClass("slideRight");
                }
            });
        });

        $(function(){

        $(document).on( 'scroll', function(){

            if ($(window).scrollTop() > 100) {
                $('.scroll-top-wrapper').addClass('show');
            } else {
                $('.scroll-top-wrapper').removeClass('show');
            }
        });

        $('.scroll-top-wrapper').on('click', scrollToTop);

        });

        function scrollToTop() {
            verticalOffset = typeof(verticalOffset) != 'undefined' ? verticalOffset : 0;
            element = $('body');
            offset = element.offset();
            offsetTop = offset.top;
            $('html, body').animate({scrollTop: offsetTop}, 500, 'linear');
        }



        $(function () {
            var today = new Date(); //date on 6/7/2013 (FRIDAY)
            var minDate;

            if(today.getDay() < 4){
                minDate = new Date(today.setDate(today.getDate() + 0));
            }else{
                minDate = new Date(today.setDate(today.getDate() + 4));
            }


        var slot="9:00AM to 9:00PM - Book Your Avaialabilty Time";

            $("#datepicker").datepicker({
                minDate: minDate,
                dateFormat: "mm-dd-yy",
                beforeShowDay: $.datepicker.noWeekends,
                onSelect: function (dateText, inst) {
                        var date = $(this).val();

                         $("#dayTime").html(date).css({"background-color": "#2EB82E","font-weight": "bolder","color": "White" }).toggle();
                           // Click on the button to stop sliding
                         $("#myCarousel").carousel("pause");


                        // Click on the button to stop sliding

                           $("#dayTime").append("<p><button type='button' class='btn btn-danger btn-sm btn-block' data-toggle='modal' data-target='#myModal'></p>"+slot+"<p></button></p>").addClass("button-timeslot");
                            $("#apptDay").text(date).css({"font-weight": "bolder","font-size": "18px","padding":"10px","line-height": "120%" });
                            $("#appt").text(slot).css({"font-size": "10px","padding":"10px" });

                            $('[data-toggle="popover"]').popover();
                            //$(".ui-state-default")
                        }

            });


            $("#frm_field_16_container").click(function(){
                $("#myCarousel").carousel("pause");
            });

        });

        $('.maps').click(function () {
            $('.maps iframe').css("pointer-events", "auto");
        });

        $( ".maps" ).mouseleave(function() {
          $('.maps iframe').css("pointer-events", "none");
        });
        $(function(){
          $('#aDate').combodate();
        });

    </script>
