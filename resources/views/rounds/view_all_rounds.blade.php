@extends('layouts.app')

@section('content')
<script type="text/javascript">

  function myFunction() {
    var name = $("input[name=name]").val();
  
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
      type:"POST",
      url:"/search",
       data:{name:name},
        success: function(data){
          $('#search_list').html(data);


            }
        
    });
}
</script> 
<div class="container"> 

<div class="row g-2">
  <div class="col-auto">
              <input type="text" name="name" placeholder="Round Name" class="form-control" value="{{old('name')}}" required="" onkeyup="myFunction()"></div>

</div>
          
<div id="search_list" >
    <table class="table table-striped" style="text-align: center">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col"> Category Name</th>
         <th scope="col" style="text-align:center"><i class="fas fa-edit"></i> </th>
         
 
      </tr>
  </thead>
  <tbody>
     @foreach($rounds as $r)
     <tr>
      <th >{{$r->name}}</th>
      <th > Test </th>

      <td  style="text-align:center">  <a href="" class="btn btn-primary ">Update And Details</a></td>
      <td  style="text-align:center">  <a href="" class="btn btn-danger ">Delete</a></td>
     
</tr>

@endforeach

</tbody>

</table></div>
<hr style="border: 1px solid #169cd9;" >
 {!! $rounds->links()!!}
</div>
@endsection 
