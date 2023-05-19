@extends('layouts.admin')
@section('content')
<div class="container">
  
        
            <canvas id="myChart" height="100px"></canvas>

      
</div>
@endsection
@section('scripts')
<script>
     
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
      
    <script type="text/javascript">
      
          var labels =  {{ Js::from($labels) }};
          var users =  {{ Js::from($data) }};
          var labels1 =  {{ Js::from($labels) }};
          var users1 =  {{ Js::from($data) }};
      
          const data = {
            labels: labels,
            datasets: [{
              label: 'Users',
              backgroundColor: 'rgb(255, 99, 132)',
              borderColor: 'rgb(255, 99, 132)',
              data: users,
            }]
          };
      
          const config = {
            type: 'line',
            data: data,
            options: {}
          };
      
          const myChart = new Chart(
            document.getElementById('myChart'),
            config
          );
                   
    </script>
@endsection