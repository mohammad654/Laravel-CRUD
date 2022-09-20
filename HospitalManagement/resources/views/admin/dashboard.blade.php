<!DOCTYPE html>
<html lang="en">
<head>
    @section('title', 'Dashboard')
    @include('admin.head')
</head>
<body>
<div class="container-scroller">
    <!-- partial sidebar -->
    @include('admin.sidebar')
    <div class="container-fluid page-body-wrapper">
        <!-- partial  navigation-->
        @include('admin.navigation-menu')
        <!-- partial  content-->


        <div class="main-panel">
            <div class="content-wrapper">
                @yield('content')

            </div>
        </div>

    </div>
</div>
<!-- container-scroller -->
@include('admin.footer')

</body>
</html>
