<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="{{ asset('/assets/images/logos/favicon.png') }}" />
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ url('assets/css/styles.min.css') }}" />
    {{-- <link rel="stylesheet" href="{{ asset('backend/plugins/toastr/toastr.min.css') }}"> --}}
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />
    <title>{{ $title ?? 'My App' }}</title>
    <livewire:styles />
</head>
<body>
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
        @include('layouts.partials.navbar') 
        <div class="body-wrapper">
        @include('layouts.partials.header')
            <div class="container-fluid">
                {{ $slot }}
            </div>
          </div>
    </div>  
    <script>
        $(document).ready(function(){
            toastr.options ={
                "positionClass": "toast-top-right",
                "progressBar": true,
            }
            window.addEventListener('hide-form', event => {
            $('#form').modal('hide');
            console.log(event.detail)
            toastr.success(event.detail,'Success!')
        });
        });
    </script>
    <script>
        window.addEventListener('show-form', event => {
        $('#form').modal('show');
        });
        
    </script>
    <livewire:scripts />
    <script src="{{ asset('assets/libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/sidebarmenu.js') }}"></script>
    <script src="{{ asset('assets/js/app.min.js') }}"></script>
    <script src="{{ asset('assets/libs/simplebar/dist/simplebar.js') }}"></script>
    {{-- <script src="{{ asset('assets/js/dashboard.js') }}"></script> --}}
    {{-- <script src="{{ asset('backend/plugins/toastr/toastr.min.js') }}"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" ></script>
</body>
</html>
