<!DOCTYPE html>
<html lang="en">
  <head>
    @include('layouts.header')
    @include('layouts.stylepage')
    @include('layouts.styleglobal')
  </head>
  <body>
      @include('layouts.navbar')
      <div class="container-fluid page-body-wrapper">
        @include('layouts.sidebar')

        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            @yield('content')
          </div>

          @include('layouts.footer')
        </div>
      </div>
    </div>
    @include('layouts.jspage')
    @include('layouts.jsglobal')
  </body>
</html>
