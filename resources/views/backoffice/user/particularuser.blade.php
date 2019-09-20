@extends('backoffice.master')

@section('content')
<div class="page-container-wrap">
    <div class="container-fluid">
        <div class="dashBoard-section-1 nmbr-statistic-area">
            <div class="row">
                <div class="col-xs-12 col-md-12 col-sm-12">
                <div class="box-widget ui-sortable" data-lobipanel-child-inner-id="eaT4cacZGQ">
                    <div class="panel panel-default lobipanel" data-inner-id="eaT4cacZGQ" data-index="0"
                        style="display: block;">
                        <div style="width:100%;height:50px;background:#eaeaea;padding:10px">
                         <h3 style="font-size:20px;">Particular Users</h3>
                        </div>
                        <div class="panel-body">
                            <form>
                                <div class="table-responsive" >
                                <table class="table table-bordered table-striped table-hover">
                                        <thead>
                                                <tr>
                                                    <th style="width: 20px;">No</th>
                                                  
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Civility</th>
                                                    <th>Address</th>
                                                    <th>Company Name</th>
                                                    <th>Siret</th>
                                                    <th>Zip</th>
                                                    <th>Phone Number</th>
                                                    <th style="width: 60px;">Action</th>
                                                </tr>
                                                </thead>
                                     <tbody>
                                      <?php $index=1; ?>
                                      @foreach($users as $user)
                                      <tr>
                                      <td style="text-align:center;">{{$index++}}</td>
                                      <td>{{$user['name']}}</td>
                                      <td>{{$user['email']}}</td>
                                      <td>{{$user['civility']}}</td>
                                      <td>{{$user['address']}}</td>
                                      <td>{{$user['com_name']}}</td>
                                      <td>{{$user['siret']}}</td>
                                      <td>{{$user['zip']}}</td>
                                      <td>{{$user['phone']}}</td>
                                       <td>
                                            {{-- <a href="#" class="btn btn-default btn-icon"><i class="fa fa-edit"></i></a> --}}
                                            <a href="javascript:deleteGame()" data-id="{{ $user['u_id'] }}" class="btn btn-default btn-icon deletparticular" style="color: red;"><i class="fa fa-trash-o"></i></a>
                                       </td>
                                    </tr>
                                      @endforeach
                                     </tbody>
                                     <tfoot>
                                            <th>No</th>
                                           
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Civility</th>
                                                <th>Address</th>
                                                <th>Company Name</th>
                                                <th>Siret</th>
                                                <th>Zip</th>
                                                <th>Phone Number</th>
                                                {{-- <th style="width: 60px;">Action</th> --}}
                                     </tfoot>
                                </table>
                                </div>
                              {{$users->links()}}
                             
                              
                            </form><!-- basic-table-block -->
                        </div>
                        <!--panel Body -->
                    </div>
                    <!--panel -->
                </div><!-- widget-module -->
            </div>
          
        </div>
        
    </div>
</div>
<script>
    
    $(".deletparticular").click(function(){
        var id=$(this).data('id');
        var $this = $(this);
        $.ajax({
                type:"POST",
                url:"{{route('deleteparticular')}}",
                data:{
                     id:id,
                    _token:"{{csrf_token()}}"
                },
                dataType:"json",
                success:function(data){
                if(!data.error){

                    $($this).parents('tr').remove();
                }
                else{
                    alert(data.result);
                }
                },
                error:function(e){
                    console.log(e);
                }
    
    
            });


    });
</script>

@endsection
