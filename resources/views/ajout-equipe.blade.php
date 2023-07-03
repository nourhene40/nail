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
                                        <h4 class="card-title mb-4">Ajouter equipe</h4>
                                        <form action="addequipe" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div data-repeater-list="outer-group" class="outer">
                                                <div data-repeater-item class="outer">
                                                    <div class="mb-3">
                                                       
                                                        <label for="formname" style="color:red">Nom :</label>
                                                        <input type="text" class="form-control" id="formname" placeholder="Tapez votre nom..." name="nom">
                                                    </div>
                                                    <label for="formname" style="color:red">metier :</label>
                                                    <input type="text" class="form-control" id="formname" placeholder="Tapez votre metier..." name="metier">
                                                </div>
                                                    
                                                    <div class="mb-3">
                                                        <label for="formemail" style="color:red">image :</label>
                                                        <input type="file" class="form-control" id="formemail"  name="image" >
                                                    </div>
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
        
                                                  
        
                                                  
                                                   
                                                    <button type="submit" class="btn btn-primary">ajouter</button>
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
               