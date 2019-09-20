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
                         <h3 style="font-size:20px;">Admob Action</h3>
                        </div>
                        <div class="panel-body">
                            {{-- <form> --}}
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped table-hover">
                                            <thead>
                                                    <tr>
                                                        <th style="width: 20px;">No</th>
                                                        <th>AdName</th>
                                                        <th>Owner</th>
                                                        <th>Type</th>
                                                        <th>Time</th>
                                                        <th>Expire</th>
                                                        <th>Active</th>
                                                        <th>Action</th>
                                                    </tr>
                                                    </thead>
                                        <tbody>
                                        <?php $index=1; ?>
                                        @foreach($admobs as $item)
                                        <tr>
                                        <td style="text-align:center;">{{$index++}}</td>
                                        <td>{{$item['ad_name']}}</td>
                                        <td>{{$item['ad_holder']}}</td>
                                        <td>{{$item['type']}}</td>
                                        <td>{{$item['ad_time']}}</td>
                                        @if($item['expire']==0) 
                                        <td><button class="btn done" >No</button></td>
                                        @else
                                        <td><button class="btn done">Yes</button></td>
                                        @endif
            
                                        <td><button class="btn active admobEnable"  data-id="{{$item['ad_id'] }}">@if($item['ad_active']==0) No @else Done @endif</button></td>
        
                                        <td>
                                         <a href="javascript:;" data-id="{{$item['ad_id'] }}" class="btn btn-default btn-icon delete_admob" style="color: red;"><i class="fa fa-trash-o"></i></a>
                                        </td>
                                        </tr>
                                        @endforeach
                                        </tbody>
                                        <tfoot>
                                            <th style="width: 20px;">No</th>
                                                    <th>AdName</th>
                                                    <th>Owner</th>
                                                    <th>Type</th>
                                                    <th>Time</th>
                                                    <th>Expire</th>
                                                    <th>Active</th>
                                                    <th>Action</th>
                                                    {{-- <th style="width: 60px;">Action</th> --}}
                                        </tfoot>
                                    </table>
                                </div>
                               
                              {{$admobs->links()}}
                             
                              
                            {{-- </form> --}}
                            <!-- basic-table-block -->
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
    //  function delteAdmobaction(ad_id){

        $(document).ready(function(){

            $('.delete_admob').click(function(){
            var $this = $(this);
            var ad_id=$(this).data('id');
            $.ajax({
                type:"POST",
                url:"{{route('deleteAdmobaction')}}",
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

        $(".admobEnable").click(function(){
            var id=$(this).data('id');
            var $this = $(this);

           if($(this).hasClass("enable")){
                enable=0;
                $(this).removeClass("enable");
            }
            else{
                enable=1;
                $(this).addClass('enable');
            }
            $.ajax({
                type:"POST",
                url:"{{route('admobenable')}}",
                data:{
                     id:id,
                     enable:enable,
                    _token:"{{csrf_token()}}"
                },
                dataType:"json",
                success:function(data){
                    console.log(data);
                if(!data.error){

                    $($this).text('No');
                }
                else{
                    $($this).text('Done');
                }
                },
                error:function(e){
                    console.log(e);
                }
    
    
            });

        });

        });
     


       
        
    //  }
    </script>
    
@endsection

