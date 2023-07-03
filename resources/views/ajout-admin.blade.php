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
                                        <h4 class="card-title mb-4">add admin</h4>
                                        
                                        <form action="/addadmin" method="post">
                                            @csrf
                                            
                                            <div data-repeater-list="outer-group" class="outer">
                                                <div data-repeater-item class="outer">
                                                    <div class="mb-3">
                                    
                                                        <label for="formname" style="color:red">name :</label>
                                                        <input type="text" class="form-control" id="formname" placeholder="write yourr name ..." name="nom">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="formname" style="color:red">first name:</label>
                                                        <input type="text" class="form-control" id="formname" placeholder="write your name..." name="prenom">
                                                    </div>
        
                                                    <div class="mb-3">
                                                        <label for="formemail" style="color:red">Email :</label>
                                                        <input type="email" class="form-control" id="formemail" placeholder="write  your email..." name="email">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="formemail" style="color:red">password :</label>
                                                        <input type="password" class="form-control" id="formemail" placeholder="write your password..." name="password">
                                                    </div>
                                                    <div class="inner-repeater mb-4">
                                                        <div data-repeater-list="inner-group" class="inner mb-3">
                                                            <label style="color:red">phone:</label>
                                                            <div data-repeater-item class="inner mb-3 row">
                                                                <div class="col-md-10 col-8">
                                                                    <input type="tel" class="inner form-control" placeholder="write your number..." name="telephone"/>
                                                                </div>
                                                                <div class="mb-3">
                                                        <label for="formemail" style="color:red">address:</label>
                                                        <input type="text" class="form-control" id="formemail" placeholder="write your adresse..." name="adresse">
                                                    </div>
                                                                
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
        
                                                  
        
                                                  
                                                   
                                                    <button type="submit" class="btn btn-primary">add admin</button>
</form>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                    </div> <!-- container-fluid -->
@endsection
               