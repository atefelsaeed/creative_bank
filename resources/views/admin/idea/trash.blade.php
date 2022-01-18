@extends('admin_temp')
    @section('styles')
    <!-- Footable CSS -->
    <link href="{{asset('../assets/plugins/footable/css/footable.core.css')}}" rel="stylesheet">
    <link href="{{asset('../assets/plugins/bootstrap-select/bootstrap-select.min.css')}}" rel="stylesheet" />
    <!-- page css -->
    <link href="{{asset('css/pages/footable-page.css')}}" rel="stylesheet">
    @endsection
@section('content')      
<div class="card">
            <div class="card-body">
                <h4 class="card-title">Contact Emplyee list</h4>
                <h6 class="card-subtitle"></h6>
                <div class="table-responsive">
                    <table id="demo-foo-addrow" class="table m-t-30 table-hover contact-list" data-page-size="10">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>date</th>
                                <th>measure</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($ideas as $key=>$idea)
                          
                            <tr>
                                <td></td>
                                <td>{{$idea->name}}</td>
                                <td>{{date(' H:i:s', strtotime($idea->created_at))}}</td>
                                <td><a href="{{route('idea.show',$idea->id)}}"><i class="fas fa-eye"></i></a><a href="{{route('idea.delete',$idea->id)}}"class="m-5"><i class="fas fa-trash-alt"></i></a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- Column -->
@endsection
@section('scripts')    
    <!-- Footable -->
    <script src="{{asset('../assets/plugins/footable/js/footable.all.min.js')}}"></script>
    <script src="{{asset('../assets/plugins/bootstrap-select/bootstrap-select.min.js')}}" type="text/javascript"></script>
    <!--FooTable init-->
    <script src="{{asset('js/footable-init.js')}}"></script>
@endsection