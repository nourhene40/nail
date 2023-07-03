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
                                        <h4 class="card-title mb-4">add product</h4>
                                        <form action="/addproduit" method="post"  enctype="multipart/form-data" >
                                        @csrf
                                            <div data-repeater-list="outer-group" class="outer">
                                                <div data-repeater-item class="outer">
                                                    <div class="mb-3">

                                                        
                                                        <label for="formname" style="color:red"> product name :</label>
                                                        <input type="text" class="form-control" id="formname" placeholder="write product name..." name="nomproduit">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="formname" style="color:red">Description :</label>
                                                        <input type="text" class="form-control" id="formname" placeholder="write your description..." name="description">
                                                    </div>
                                                    
                                                    <label for="formname" style="color:red">category :</label>
                                                    <select name="nomcategorie" id="" class="form-control"  >
                                                        <label for="email_1"  >category :</label>
                                                        @foreach($donnee as $data)
                                                        <option value="{{$data->nomcategorie}}" > {{$data->nomcategorie}} </option>
                                                        @endforeach
                                                        </select>
<br>
                                                    <div class="mb-3">
                                                        <label for="formemail" style="color:red">Price:</label>
                                                        <input type="number" class="form-control" id="formemail" placeholder="write price ..." name="prix">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="formemail" style="color:red">quantity</label>
                                                        <input type="number" class="form-control" id="formemail" placeholder="write quantity..." name="quantite">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="formemail" style="color:red">name vendor</label>
                                                        <input type="text" class="form-control" id="formemail" placeholder="write name vendor..." name="nomvendeur">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="formemail" style="color:red">image :</label>
                                                        <input type="file" class="form-control" id="formemail" placeholder=" url picture.." name="image">
                                                    </div>
        
                                                  
        
                                                  
        
                                                  
                                                    <button type="submit" class="btn btn-primary">add product</button>
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