@extends('theme')

@section('abc')
                    <div class="container-fluid">

                        <!-- start page title -->
                       
                        <!-- end page title -->

                       
                        <!-- end row -->
        
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">add partner</h4>
                                        <form action="addpartenaire" method="post"  enctype="multipart/form-data" >
                                        @csrf
                                            <div data-repeater-list="outer-group" class="outer">
                                                <div data-repeater-item class="outer">
                                                    <div class="mb-3">

                                                    <div class="mb-3">
                                                        <label for="formemail" style="color:red">picture :</label>
                                                        <input type="file" class="form-control" id="formemail" placeholder="add picture.." name="image">
                                                    </div>
        
                                                  
        
                                                  
        
                                                  
                                                    <button type="submit" class="btn btn-primary">add partner</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                    </div> <!-- container-fluid -->
                </div>
                @endsection 