<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <base href="/public">
      <style type="text/css">


.im
{
    
  text-align: center;
}
.center {
  display: block;
  
  margin-left: auto;
  margin-right: auto;
  width: 30%;
  padding: 20px;
}   

</style>
     
      @include('home.homecss')
   </head>
   <body>
      <!-- header section start -->
      <div class="header_section">
      @include('home.header')

         <!-- banner section start -->

         <!-- banner section end -->
      </div>
      <div" class="im">
      <div><img  src="/postimage/{{$post->image}}" class="center"></div><br>

                     <h4><b>title:{{$post->title}}</b></h4><br>
                     <h1>Discription:{{$post->discription}}</h1><br>
                     <p>post by: <b>{{$post->name}}</b></p>
                    


                  </div>
                  @include('home.comment_post');
      <!-- header section end -->
      <!-- services section start -->
     

      <!-- about section end -->

      
      <!-- footer section start -->

   </body>
</html>