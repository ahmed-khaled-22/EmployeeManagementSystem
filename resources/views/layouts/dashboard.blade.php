<!DOCTYPE html>
<html>
@include('layouts.partials.head')
  <body>
@include('layouts.partials.navbar')

    <div class="d-flex align-items-stretch">
      @include('layouts.partials.sidebar')
      
      <div class="page-content">
        <div class="page-header">
            <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">@yield('page-title')</h2>
            </div>
        </div>
        
        @yield('content')
        
        @include('layouts.partials.footer')
          
      </div>
    </div>
@include('layouts.partials.script')
    
  </body>
</html>