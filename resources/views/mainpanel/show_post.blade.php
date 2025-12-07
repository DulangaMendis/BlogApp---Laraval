<!DOCTYPE html>
<html>
  <head> 
    @include('mainpanel.panelcss')
    <style type="text/css">
    .title_deg{
        font-size: 30px;
        font-weight: bold;
        color: white;
        padding: 30px;
        text-align: center;



    }

    .table_deg{

        border: 1px solid white;
        width: 80%;
        text-align: center;
        margin-left: 70px;


    }

    .th_deg{
        background-color: skyblue;
    }
    .img_deg{
        height: 100px;
        width: 150px;
        padding: 10px


    }
    </style>
  </head>
  <body>
   @include('mainpanel.header')
    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
     @include('mainpanel.sidebar')
      <!-- Sidebar Navigation end-->

      <div class="page-content">
        <h1 class="title_deg">All Posts</h1>

        <table class="table_deg">
            <tr class="th_deg">
                <th>Post Title</th>
                <th>Description</th>
                <th>Image</th>
                <th>Delete</th>
            </tr>

            @foreach($post as $post)

            <tr>
                <td>{{$post->title}}</td>
                <td>{{$post->description}}</td>
                <td>
                    <img class="img_deg" src="postimage/{{$post->image}}">
                </td>
                <td>
                    <a href="{{url('delete_post',$post->id)}}" class="btn btn-danger">Delete</a>

                </td>
                <td>
                    <a href="{{url('edit_page',$post->id)}}" class="btn btn-outline-success">Edit</a>
                </td>
            </tr>

            @endforeach
        </table>
      </div>
        
    @include('mainpanel.footer')
      </div>
    </div>
    <!-- JavaScript files-->
    <script src="admincss/vendor/jquery/jquery.min.js"></script>
    <script src="admincss/vendor/popper.js/umd/popper.min.js"> </script>
    <script src="admincss/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="admincss/vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="admincss/vendor/chart.js/Chart.min.js"></script>
    <script src="admincss/vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="admincss/js/charts-home.js"></script>
    <script src="admincss/js/front.js"></script>
  </body>
</html>