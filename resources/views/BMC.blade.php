<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>The Business Model Canvas</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{asset('src/frontend/css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('src/frontend/css/bootstrap-responsive.css')}}" rel="stylesheet">
    <link href="{{asset('src/frontend/css/canvas.css')}}" rel="stylesheet">
    <meta name="description" content="Business Model Canvas Template">
    <meta name="author" content="Zeljko Dakic">
    <link href='http://fonts.googleapis.com/css?family=Headland+One' rel='stylesheet' type='text/css'>
  </head>
  <body>
    <div class="container">
      <h1>The Business Model Canvas</h1>
      <!-- Canvas -->
      <table id="bizcanvas" border="1">
        <tr>
          <td colspan="2" rowspan="2">
            <h4>Key Partners</h4>
            <p>more details
            <a class=""
              data-original-title="More details"
              data-content="And here's some amazing content. It's very engaging. right?"
              data-placement="bottom"
              rel="popover" href="#">...</a>
            </p>
          </td>
          <td colspan="2">
            <h4>Key Activities</h4>
            <p><a class=""
              data-original-title="More details"
              data-content="And here's some amazing content. It's very engaging. right?"
              data-placement="bottom"
              rel="popover" href="#">...</a></p>
          </td>
          <td colspan="2" rowspan="2">
            <h4>Value Proposition</h4>
            <p>...</p>
          </td>
          <td colspan="2">
            <h4>Customer Relationship</h4>
            <p>...</p>
          </td>
          <td colspan="2" rowspan="2">
            <h4>Customer Segments</h4>
            <p>...</p>
          </td>
        </tr>
        <tr>
          <td colspan="2">
            <h4>Key Resources</h4>
            <p>...</p>
          </td>
          <td colspan="2">
            <h4>Channels</h4>
            <p>...</p>
          </td>
        </tr>
        <tr>
          <td colspan="5">
            <h4>Cost Structure</h4>
            <p>...</p>
          </td>
          <td colspan="5">
            <h4>Revenue Streams</h4>
            <p>...</p>
          </td>
        </tr>
      </table>
      <!-- /Canvas -->
    </div>

    <!-- Javascript loading -->
    <script src="{{asset('src/frontend/js/jquery.min.js')}}"></script>
    <script src="{{asset('src/frontend/js/bootstrap.js')}}"></script>
    <script src="{{asset('src/frontend/js/canvas.js')}}"></script>
  </body>
</html>
