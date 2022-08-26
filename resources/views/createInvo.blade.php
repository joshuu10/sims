@extends('layout.app')

    @section('payments')

        <div class="row">     
        
            <div class="col-md-3 no-padding">
            
            </div>
            <div class="col-md-8 no-padding">
                <br>
                <div class="row">
                    <div class="col-sm-2 no padding">
                        <h6>Action Menu</h6>
                    <div class="list-group">
                        
                        <b><a href="#" class="list-group-item list-group-item-action">Admin fee</a></b>
                        <b><a href="#" class="list-group-item list-group-item-action">Tuition fee</a></b>
                        <b><a href="#" class="list-group-item list-group-item-action">Other fee</a></b>
                    </div>
                    </div>
                    <div class="col-sm-10 no padding">
                            <div class="form-group">
                                <h6>Fee Structure Invoices</h6>
                                <fieldset disabled="">
                            </div>       
                            <div class="form-group row">
                                <label class="col-sm-2.5 col-form-label">Student name<span class="required">*</span></label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" disabled="disabled" value="">
                                </div>
                                <div class="col-sm-1">

                                </div>
                                <label class="col-sm-2.5 col-form-label">Academic Year</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" disabled="disabled" value="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Programme : <span class="required">*</span></label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" disabled="disabled" value="BACHELOR OF COMPUTER ENGINEERING - FOUR YEARS">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-1 col-form-label">Class:</label>
                            
                                <div class="col-sm-2">
                                    <input type="text" class="form-control" disabled="disabled" value="BACHELOR OF COMPUTER ENGINEERING - FOUR YEARS">
                                </div>
                                <label class="col-sm-2 col-form-label">Category</label>
                            
                                <div class="col-sm-2">
                                    <input type="text" class="form-control" disabled="disabled" value=" Private ">
                                </div>
                                <label class="col-sm-1.5 col-form-label">Currency</label>
                            
                                <div class="col-sm-2">
                                    <input type="text" class="form-control" disabled="disabled" value="TZS">
                                </div>
                                


                            </div>
                            
                        
                               
                                </fieldset>
                        
                    </div>  
                    

                    </div> 
                    
                </div>
                <div class="row">
                    <center><button type="button" class="btn btn-primary">Load invoice</button></center>
                   
                    </div> 
       

            </div>
        </div>  
        
      @endsection   