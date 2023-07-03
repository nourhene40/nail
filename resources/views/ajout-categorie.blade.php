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
                                        <h4 class="card-title mb-4">add category</h4>
                                        <form method="post" action="/addcategorie" enctype="multipart/form-data" >
                                        @csrf
                                            <div data-repeater-list="outer-group" class="outer">
                                                <div data-repeater-item class="outer">
                                                    <div class="mb-3">

                                                        
                                                        <label for="formname" style="color:red">name  category :</label>
                                                        <input type="text" class="form-control" id="formname" placeholder="write category..." name="nomcategorie">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="formname" style="color:red">Description :</label>
                                                        <input type="text" class="form-control" id="formname" placeholder="write description..." name="description">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="formemail" style="color:red">picture:</label>
                                                        <input type="file" class="form-control" id="formemail"  name="image" >
                                                    </div>
        
                                                    
                                                  
                                                    <button type="submit" class="btn btn-primary">add category</button>
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