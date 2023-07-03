@extends('theme')
@section('abc')
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0 font-size-18">all message</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            
                                        
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-xl-4">
                                
                                <!-- end card -->

                                <div class="card">
                                    
                                    <div class="card-body">
                                      
                                        <h4 class="card-title mb-4">Message</h4>

                                        <p class="text-muted mb-4">{{$contact->message}}</p>
                                        <div class="table-responsive">
                                            <table class="table table-nowrap mb-0">
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">name</th>
                                                        <td>{{$contact->nom}}</td>
                                                    </tr>
                                                   
                                                    <tr>
                                                        <th scope="row">E-mail :</th>
                                                        <td>{{$contact->email}}</td>
                                                    </tr>
                                                  
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                   
                                </div>
                        
                                <!-- end card -->

                                <div class="card">
                                   
                                </div>  
                                <!-- end card -->
                            </div>         
                            
                            <div class="col-xl-8">

                                
                               

                                
                            </div>
                        </div>
                        <!-- end row -->

                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                
               

@endsection  
