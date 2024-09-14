 <!--==============================
        All Js File
    ============================== -->
    <!-- Jquery -->
    <script src="{{asset('frontend/assets/js/vendor/jquery.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/vendor/jquery-migrate-3.0.0.min.js')}}"></script>
    <!-- Slick Slider -->
     {{-- <script src="{{asset('frontend/assets/js/app.min.js')}}"></script> --}}
    <script src="{{asset('frontend/assets/js/slick.min.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{asset('frontend/assets/js/bootstrap.min.js')}}"></script>
    <!-- Layer Slider -->
    <script src="{{asset('frontend/assets/js/greensock.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/layerslider.kreaturamedia.jquery.js')}}"></script>
    <script src="{{asset('frontend/assets/js/layerslider.transitions.js')}}"></script>
    <!-- Counter js -->
    <script src="{{asset('frontend/assets/js/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/waypoints.min.js')}}"></script>
    <!-- Date Picker -->
    <script src="{{asset('frontend/assets/js/jquery.datetimepicker.min.js')}}"></script>
    <!-- Magnific Popup -->
    <script src="{{asset('frontend/assets/js/jquery.magnific-popup.min.js')}}"></script>
    <!-- Nice Select -->
    <script src="{{asset('frontend/assets/js/jquery.nice-select.min.js')}}"></script>
    <!-- Custom Carousel -->
    <script src="{{asset('frontend/assets/js/vscustom-carousel.min.js')}}"></script>
    <!-- Mobile Menu -->
    <script src="{{asset('frontend/assets/js/vsmenu.min.js')}}"></script>
    <!-- Form Js -->
    <script src="{{asset('frontend/assets/js/ajax-mail.js')}}"></script>
    <!-- Google Map js -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDC3Ip9iVC0nIxC6V14CKLQ1HZNF_65qEQ "></script>
    <!-- Main Js File -->
    <script src="{{asset('frontend/assets/js/main.js')}}"></script>
    
    <script>
   
    
        function remove_from_cart(item_id)
        {
             $.ajax({
                url: "{{ route('item.remove.from.cart') }}",
                type: 'GET',
                data: { item_id: item_id},
                success: function (response) {
                    console.log(response);
                   // $('#total').html(response.item_total.toFixed(2));
                    var header_total = '&pound;' + response.total.toFixed(2) + ' / ' + response.total_items + ' ' + response.item_label;
                    var cart_total =  '&pound;' + response.total.toFixed(2);
                    $('#header_total').html(header_total);
                    $('.cart_total').html(cart_total);
                    $('.cart_item_li_'+item_id).remove();
                    window.location.reload();
                },
                error: function (error) {
                    console.error('Error:', error);
                }
            });
          
        }
    </script>
