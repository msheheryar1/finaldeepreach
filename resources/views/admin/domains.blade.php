@extends('admin.layout.master')
@section('title','Domains - Deep Reach')

@section('domain_active','active')
@section('content')

<div class="container-fluid mt--7">
      <div class="row">
        <div class="col">
          <div class="card shadow">
            <div class="card-header border-0">
              <h3 class="mb-0">Custom Domains {{$domain->count()}}</h3>
            </div>
            <div class="table-responsive p-2">
              <table class="table align-items-center table-flush" id="datatable-basic">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">S.no.</th>
                    <th scope="col">Domain</th>
                    <th scope="col">User</th>
                    <!--<th scope="col"></th>-->
                  </tr>
                </thead>
                <tbody>
                    <?php $count=0;
                    ?>
                    
                    @forelse($domain as $mydomain)
                    <?php $count++; ?>
                    
                    <tr class="row{{$mydomain->id}}">
                      <td>
                          {{$count}}
                      </td>
                    <td>
                      {{$mydomain->domain}}
                    </td>
                    
                    <td>
                      {{$mydomain->email}}
                    </td>
                 
                    
                  </tr>
                 
                    @empty
                    
                    @endforelse
                  
                </tbody>
              </table>
            </div>
            
          </div>
        </div>
      </div>
  
      <script>
      
$(document).on('click','.del_card',function(e){

 var id= $(this).attr('data-del');
 var check=confirm("Are you sure you want to delete this card?");
 if(check){

               e.preventDefault();
               $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                  }
              });
               $.ajax({
                  url: "{{route('delete-card')}}",
                  method: 'post',
                  data: {
                     id: id
                  },
                  success: function(data){
                    if(data == "Done"){
                    	$(".row"+id).remove();
                    
                    }
                    
                    }
                    
                  });
        


}
else{

}


});


      </script>
@endsection