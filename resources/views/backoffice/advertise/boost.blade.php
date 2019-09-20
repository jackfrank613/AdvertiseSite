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
                         <h3 style="font-size:20px;">Boost Advertises</h3>
                        </div>
                        <div class="panel-body">
                            <form>
                             <div class="table-responsive" >
                                <table class="table table-bordered table-striped table-hover">
                                        <thead>
                                                <tr>
                                                    <th style="width: 20px;">No</th>
                                                    {{-- <th style="width: 60px;">
                                                        <a href="javascript:editSelectedUser();" class="btn btn-default btn-icon"><i class="fa fa-edit"></i></a>
                                                        <a href="javascript:deleteSelectedUser()" class="btn btn-default btn-icon" style="color: red;"><i class="fa fa-trash-o"></i></a>
                                                    </th> --}}
                                                    <th>Owner Name</th>
                                                    <th>Admob Type</th>
                                                    <th>Title</th>
                                                    {{-- <th>Subject</th> --}}
                                                    <th>Admob Name</th>
                                                    <th>Address</th>
                                                    <th>Price</th>
                                                    <th>Payment</th>
                                                    <th>Top</th>
                                                    <th>Side</th>
                                                    <th>Urgent</th>
                                                    <th>Create Time</th>
                                                
                                                    <th style="width: 60px;">Action</th>
                                                </tr>
                                                </thead>
                                     <tbody>
                                      <?php $index=1; ?>
                                      @foreach($results as $item)
                                      <tr>
                                      <td style="text-align:center;">{{$index++}}</td>
                                      {{-- <td style="text-align:center;"><input type="checkbox" name="user_ids[]" value="{{$item['u_id']}}" class="uer_ids"></td> --}}
                                      <td>{{$item['name']}}</td>
                                      <td>{{$item['adType']}}</td>
                                      <td>{{$item['subject']}}</td>
                                      {{-- <td>{{$item['body']}}</td> --}}
                                      <td>{{$item['adName']}}</td>
                                      <td>{{$item['adress']}}</td>
                                      <td>{{$item['price']}}&nbsp;€</td>
                                      <td><span class="done">Done</span></td>
                                      @if($item['top_style']==1) 
                                      <td><span class="premium">Done</span></td>
                                      @else
                                      <td><span>No</span></td>
                                      @endif
                                      @if($item['side_style']==1) 
                                      <td><span class="premium">Done</span></td>
                                      @else
                                      <td><span>No</span></td>
                                      @endif
                                      @if($item['top_style']==1) 
                                      <td><span class="premium">Done</span></td>
                                      @else
                                      <td><span>No</span></td>
                                      @endif
                                      <td>{{$item['create_time']}}</td>
                                       <td>
                                            {{-- <a href="#" class="btn btn-default btn-icon"><i class="fa fa-edit"></i></a> --}}
                                            <a class="btn btn-default btn-icon deleteBoost" data-id="{{$item['id']}}" style="color: red;"><i class="fa fa-trash-o"></i></a>
                                       </td>
                                    </tr>
                                      @endforeach
                                     </tbody>
                                     <tfoot>
                                            <th>No</th>
                                            {{-- <th style="width: 60px;">
                                                    <a href="javascript:editSelectedUser();" class="btn btn-default btn-icon"><i class="fa fa-edit"></i></a>
                                                    <a href="javascript:deleteSelectedUser()" class="btn btn-default btn-icon" style="color: red;"><i class="fa fa-trash-o"></i></a>
                                                </th> --}}
                                                <th>Owner Name</th>
                                                <th>Admob Type</th>
                                                <th>Title</th>
                                                {{-- <th>Subject</th> --}}
                                                <th>Admob Name</th>
                                                <th>Address</th>
                                                <th>Price</th>
                                                <th>Payment</th>
                                                <th>Top</th>
                                                <th>Side</th>
                                                <th>Urgent</th>
                                                <th>Create Time</th>
                                                <th style="width: 60px;">Action</th>
                                     </tfoot>
                                </table>
                             </div>
                              {{$results->links()}}
                             
                              
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
  $('.deleteBoost').click(function(){
            var $this = $(this);
            var ad_id=$(this).data('id');
            $.ajax({
                type:"POST",
                url:"{{route('deleteboost')}}",
                data:{
                     ad_id:ad_id,
                    _token:"{{csrf_token()}}"
                },
                dataType:"json",
                success:function(data){
                if(!data.error){
                    console.log(data.result);
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
