@extends('layouts.app')

    @section('student')
    <div class="row">     
        
        <div class="col-md-3 no-padding">
        
        </div>
        <div class="col-md-6 no-padding">

            <form>
            <div class="card card-outline card-primary">
                <div class="card-header text-center">
                    <p  class="h3"><b>SIMS Student Registration</b></p>
                </div>
            </div>    
            <fieldset>
                <center><legend></legend></center>
                <div class="form-group row">
                <label for="firstname" class="col-sm-2 col-form-label">First Name</label>
                
                    <input type="text" class="form-control-plaintext" id="firstname" name="first_name">
               
                </div>
                <div class="form-group row">
                <label for="lastname" class="col-sm-2 col-form-label">Last Name</label>
                
                    <input type="text" class="form-control-plaintext" id="lastname" name="last_name">
               
                </div>
                <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                
                <div class="form-group">
                <label for="college">College</label>
                <select class="form-select" id="exampleSelect1">
                    <option>COICT</option>
                    <option>COSTE</option>
                    <option>COHBS</option>
                    <option>COEBS</option>
                    <option>COHEC</option>
                </select>
                </div>
                <div class="form-group">
                <label for="exampleTextarea">Example textarea</label>
                <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
                </div>
                <div class="form-group">
                <label for="formFile" class="form-label">Default file input example</label>
                <input class="form-control" type="file" id="formFile">
                </div>
                <fieldset class="form-group">
                <legend class="mt-4">Radio buttons</legend>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" id="optionsRadios1" value="male" checked="">  
                    Male
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" id="optionsRadios2" value="female">
                    Female   
                </div>
                </fieldset>
                
                <button type="submit" class="btn btn-primary">Submit</button>
            </fieldset>
            </form>
        </div>
        <div class="col-md-3 no-padding >

        </div>
    </div>        
    @endsection