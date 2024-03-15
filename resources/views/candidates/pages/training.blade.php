@extends('candidates.dashboard')
@section('content')
<div class="col-lg-12 mt-4 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Education</h4>
            
            <div class="table-responsive">
                <table class="table table-hover" id="myTable">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Institute</th>
                            <th>Completed Year</th>
                           
                            <th>Action</th>
                           
                            
                        </tr>
                    </thead>
              
                        <tbody>
 
    @foreach ($trainings as $trainings )
    <tr>
        <td>{{ $trainings->name }}</td>
        <td>{{ $trainings->institute_name }}</td>
       
       
       <td>{{ $trainings->completion_year }}</td>
      
        <td class="d-flex">
           


     
            <form method="POST" action="{{ url('/training/delete/'.$trainings->id) }}">
                @csrf

                <button type="submit" class="btn btn-danger confirm-button">Delete</button>
            </form>
        </td>
    </tr>
   
    @endforeach

                            
                        </tbody>
                  
                </table>
        
        
        <div class="card-body">
            @if (Session::has('message'))
                <p class="alert alert-info">{{ Session::get('message') }}</p>
            @endif
            <h4 class="card-title">Personal Training</h4>
            <form class="form-sample" action="{{ url('/candidate/training/create') }}" method="POST">
                @csrf
                <p class="card-description">
                    Personal info
                </p>
                <div class="row">
                    
                    <div class="col-md-4">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Course Name</label>
                            <div class="col-sm-9">
                                <input type="text" name="name" class="form-control" />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Institute Name</label>
                            <div class="col-sm-9">
                                <input type="text" name="institute_name" class="form-control" />
                            </div>
                        </div>
                        
                       
                    
                   
                    

                </div>
                <div class="col-md-4">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Completation Year</label>
                        <div class="col-sm-9">
                            <input type="text" name="completion_year" class="form-control" />
                        </div>
                    </div>
                </div>


               
                <button type="submit" class="btn btn-primary mr-2">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection