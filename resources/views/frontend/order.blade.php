@extends('layouts.frontend')

@section('content')
<style>
    .order-form .container {
      color: #4c4c4c;
      padding: 20px;
      box-shadow: 0 0 10px 0 rgba(0, 0, 0, .1);
      max-width: 650px;
    }

    .order-form-label {
      margin: 8px 0 0 0;
      font-size: 14px;
      font-weight: bold;
    }

.order-form-input,
.form-label,
.form-check-label {
      font-family: 'Open Sans', sans-serif;
      font-size: 14px;

    }

    .btn-submit:hover {
      background-color: #0D47A1 !important;
    }
</style>
<section class="order-form m-4">
    <div class="container pt-4">
        <div class="row">
            <div class="col-12 px-4">
                <h1>You can make  Order </h1>
         
                <hr class="mt-1" />
            </div>
            <form action="{{url('makeorder')}}" method="post">
                @csrf
                <div class="col-12">
                    <div class="row mx-4">
                        <div class="col-12">
                            <label class="order-form-label">Name</label>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-outline">
                                <input name="name"value="{{Auth()->user()->name}}" type="text" id="form1" class="form-control order-form-input" />
                                <label class="form-label" for="form1">First</label>
                            </div>
                        </div>
                        <div class="col-sm-6 mt-2 mt-sm-0">
                            <div class="form-outline">
                                <input name="lname"value="{{Auth()->user()->last}}" type="text" id="form2" class="form-control order-form-input" />
                                <label class="form-label" for="form2">Last</label>
                            </div>
                        </div>
                    </div>
      
    
      
                    </div>
      
                    <div class="row mt-3 mx-4">
                        <div class="col-12">
                            <label class="order-form-label">Adress</label>
                        </div>
                        <div class="col-12">
                            <div class="form-outline">
                                <input name="address"value="{{Auth()->user()->address}}" type="text" id="form5" class="form-control order-form-input" />
                                <label class="form-label" for="form5">Street Address</label>
                            </div>
                        </div>
                        <div class="col-12 mt-2">
                            <div class="form-outline">
                                <input name="phone"value="{{Auth()->user()->phone}}" type="text" id="form6" class="form-control order-form-input" />
                                <label class="form-label" for="form6">Phone Number</label>
                            </div>
                        </div>
                        <div class="col-sm-6 mt-2 pe-sm-2">
                            <div class="form-outline">
                                <input name="city"value="" type="text" id="form7" class="form-control order-form-input" />
                                <label class="form-label" for="form7">City</label>
                            </div>
                        </div>
                        <div class="col-sm-6 mt-2 ps-sm-0">
                            <div class="form-outline">
                                <input name="country"value="country" type="text" id="form8" class="form-control order-form-input" />
                                <label class="form-label" for="form8">Country</label>
                            </div>
                        </div>
                        <div class="col-sm-6 mt-2 pe-sm-2">
                            <div class="form-outline">
                                <input name="zip"value="" type="text" id="form9" class="form-control order-form-input" />
                                <label class="form-label" for="form9">Postal / Zip Code</label>
                            </div>
                        </div>
                      
                    </div>
      
                    <div class="row mt-3 mx-4">
                        <div class="col-12">
                            <div class="form-check">
                                <button class="btn btn-primary">send </button>
                            </div>
                        </div>
                    </div>
      
                    
                </div>
            
            </form>
  
 
        </div>
    </div>
  </section>
  
  @endsection