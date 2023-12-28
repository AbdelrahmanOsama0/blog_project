<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <base href="/public">
      <style type="text/css">

.post_deg
{
    padding: 30px;
    text-align: center;
    background-color: black;
}
.tit_deg
{
    font-size: 30px;
    font-weight: bold;
    padding: 15px;
    color: white;
}

.dis_deg
{
    font-size: 18px;
    font-weight: bold;
    padding: 15px;
    color: whitesmoke;


}
.img_dev
{
    height:300px;
    width: 300px;
    padding: 30px;
    margin: auto;
}



</style>
      @include('home.homecss')
   </head>
   <body>
      <!-- header section start -->
      <div class="header_section">
      @include('home.header')
     
      @foreach($data as $data)
      <div class="post_deg">

      <img class="img_dev" src="/postimage/{{$data->image}}" >
      <h4 class="tit_deg"> Title: {{$data->title}}</h4>
      <p class="dis_deg"> Discreption: {{$data->discription}}</p>
      <a href="{{url('my_post_del',$data->id)}}" class="btn btn-danger">Delete</a>

      
  <!-- header section end -->
  
  <form action="{{ route('comments.store') }}" method="" enctype="multipart/form-data">
      @csrf

<div class="field_deg">
    
<label>comment</label>
<textarea name="comment" id="comment" cols="30" rows="5" required></textarea>
        <button type="submit">Submit</button></div>



<div class="field_deg">
<input type="submit" value="Add Comment" class="btn btn-outline-secondary">
</div>



      </form>
      </div>
     

<!-- footer section start -->

      </div>
       @endforeach

        
      </div>
    

   </body>
</html>