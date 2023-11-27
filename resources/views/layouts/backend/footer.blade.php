    <script src="{{asset('assets/js/jquery-2.1.4.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.dataTables.bootstrap.min.js')}}"></script>
    <script src="//cdn.datatables.net/plug-ins/1.13.7/api/fnReloadAjax.js"></script>
    <script src="{{asset('assets/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('assets/js/dataTables.select.min.js')}}"></script>
    <script src="{{asset('assets/js/sweetalert2.min.js')}}"></script>
    <script src="{{asset('assets/js/toastr.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.validate.min.js')}}"></script>
    <script src="{{asset('assets/js/additional-methods.min.js')}}"></script>
    <script src="{{asset('assets/js/ace.min.js')}}"></script>
    
	<script>
        
        document.addEventListener("DOMContentLoaded", function() {
            // Get the current page URL
            var currentPage = window.location.href;
            // Find the corresponding menu item and add the 'active' class
            var menuItems = document.querySelectorAll('.nav-list li a');
            menuItems.forEach(function(item) {
                if (item.href === currentPage) {
                    item.parentNode.classList.add('active');
                }else{
                    item.parentNode.classList.remove('active');
                }
            });

        });
        
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
			
		$(document).on('click', '.destroy', function() {
            var btn = this;
            Swal.fire({
                title: 'Are you sure?")',
                text: 'You wont be able to revert this!")',
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes',
                cancelButtonText: 'No'
            }).then((result) => {
                console.log(result);
                if (result.value) {
                    var url = $(this).data('route');
                    var _token = "{{ csrf_token() }}";
                    $.ajax({
                        url: url,
                        type: "delete",
                        data: {
                            _token: _token
                        },
                        success: function(response) {
                            if (response.status == 'success') {
                                Swal.fire({
                                    title: '',
                                    text: (response.message)?(response.message):"Data has been deleted!",
                                    type: 'success'
                                }).then((result) => {
                                    $(btn).closest('tr').fadeOut(1500);
                                });
                            } else {
                                Swal.fire({
                                    title: (response.message)?(response.message):'Data cannot be deleted!',
                                    confirmButtonText: 'OK',
                                });
                            }
                        }
                    });
                } else {
                    Swal.fire({
                        title: 'Your data is safe!',
                        confirmButtonText: 'OK',
                    });
                }
            })
        });
		</script>
		
		@stack('page-js')
		@include('layouts.partials.alert_message')
	</body>
</html>