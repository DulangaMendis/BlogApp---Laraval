<!DOCTYPE html>
<html>
  <head> 
    <base href="/public">
    @include('mainpanel.panelcss')
     <style type="text/css">
      .post_title{
        font-size: 30px;
        font-weight: bold;
        text-align: center;
        padding: 30px;
        color: white;
      }
      .div_center{
        text-align: center;
        padding: 30px;
      }
      label{
        display: inline-block;
        width: 200px;
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
        <h1 class="post_title">Edit Post</h1>
        <form action="{{url('update_post',$post->id)}}" method="Post" enctype="multipart/form-data">

            @csrf
            <div class="div_center">
            <label>Post Title</label>
            <input type="text" name="title" value="{{$post->title}}">


          </div>

           <div class="div_center">
            <label>Post Description</label>
            <textarea name="description">{{$post->description}}</textarea>


          </div>

          <div class="div_center">
            <label>Old Image</label>
            <img style="margin: auto;" height ="100px" width="150px" src="/postimage/{{$post->image}}">


          </div>

           <div class="div_center">
            <label>Update Old Image</label>
            <input type="file" name="image">


          </div>
           <div class="div_center">
            
             <button type="submit" class="btn btn-primary">Update</button>


        </form>


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