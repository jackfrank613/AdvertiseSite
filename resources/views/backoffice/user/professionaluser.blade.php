@extends('backoffice.master')

@section('content')
<div class="page-container-wrap" style="margin-left:100px">
    <div class="container-fluid">
        <div class="dashBoard-section-1 nmbr-statistic-area">
            <div class="row">
              <div class="col-xs-12">
                <div class="box-widget ui-sortable" data-lobipanel-child-inner-id="eaT4cacZGQ">
                    <div class="panel panel-default lobipanel" data-inner-id="eaT4cacZGQ" data-index="0"
                        style="display: block;">
                        <div style="width:100%;height:50px;background:#eaeaea;padding:10px">
                         <h3 style="font-size:20px;">Professional Users</h3>
                        </div>
                        <div class="panel-body">
                            <form>
                                <table class="table table-bordered table-striped">
                                        <thead>
                                                <tr>
                                                    <th style="width: 20px;">No</th>
                                                    <th style="width: 60px;">
                                                        <a href="javascript:editSelectedUser();" class="btn btn-default btn-icon"><i class="fa fa-edit"></i></a>
                                                        <a href="javascript:deleteSelectedUser()" class="btn btn-default btn-icon" style="color: red;"><i class="fa fa-trash-o"></i></a>
                                                    </th>
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
                                      <td style="text-align:center;"><input type="checkbox" name="user_ids[]" value="{{$user['u_id']}}" class="uer_ids"></td>
                                      <td>{{$user['name']}}</td>
                                      <td>{{$user['email']}}</td>
                                      <td>{{$user['civility']}}</td>
                                      <td>{{$user['address']}}</td>
                                      <td>{{$user['com_name']}}</td>
                                      <td>{{$user['siret']}}</td>
                                      <td>{{$user['zip']}}</td>
                                      <td>{{$user['phone']}}</td>
                                       <td>
                                            <a href="#" class="btn btn-default btn-icon"><i class="fa fa-edit"></i></a>
                                            <a href="javascript:deleteGame({{ $user['id'] }})" class="btn btn-default btn-icon" style="color: red;"><i class="fa fa-trash-o"></i></a>
                                       </td>
                                    </tr>
                                      @endforeach
                                     </tbody>
                                     <tfoot>
                                            <th>No</th>
                                            <th style="width: 60px;">
                                                    <a href="javascript:editSelectedUser();" class="btn btn-default btn-icon"><i class="fa fa-edit"></i></a>
                                                    <a href="javascript:deleteSelectedUser()" class="btn btn-default btn-icon" style="color: red;"><i class="fa fa-trash-o"></i></a>
                                                </th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Civility</th>
                                                <th>Address</th>
                                                <th>Company Name</th>
                                                <th>Siret</th>
                                                <th>Zip</th>
                                                <th>Phone Number</th>
                                                <th style="width: 60px;">Action</th>
                                     </tfoot>
                                </table>
                               
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

@endsection
