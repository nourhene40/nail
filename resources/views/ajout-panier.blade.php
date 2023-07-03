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
                                        <h4 class="card-title mb-4">Ajout panier</h4>
                                        <form action="/addpanier" method="post">
                                        @csrf
                                            <div data-repeater-list="outer-group" class="outer">
                                                <div data-repeater-item class="outer">
                                                    <div class="mb-3">

                                                        
                                                        <label for="formname" style="color:red">Quantite :</label>
                                                        <input type="number" class="form-control" id="formname" placeholder="tapez nom du quantier..." name="quantite">
                                                    </div>
                                                   
        
                                                    
                                                  
                                                    <button type="submit" class="btn btn-primary">Ajouter</button>
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