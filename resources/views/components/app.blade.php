<!DOCTYPE html>
<html lang="en">

@include('components.skeleton.head')

<body>
  <div class="content-wrapper">
    {{$slot}}
  </div>   
  @include('components.skeleton.scripts')
</body>
</html>