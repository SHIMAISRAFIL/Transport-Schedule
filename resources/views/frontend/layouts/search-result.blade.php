@extends('frontend.master')

@section('contents')

<div class="collection_text">Search</div>

<form action>

<div class="tab">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 no-padding">
                <button class="tablinks btn-block"
                        onclick="openTab(event, 'one')"
                        id="defaultOpen">
                    <i class=""></i> Search Date
                </button>
            </div>
            
        </div>
    
 <section class="col-md-6 col-sm-6 col-xs-12 col-lg-2">
                    <label class="input">
                        <i class="icon-append fa fa-calendar"></i>
                        <input readonly
                               type="text"
                               name="travelDate"
                               id="date"
                               data-date-start-date="+0d"
                               placeholder="Trip Date"
                               value="12/09/2021">
                    </label>
                </section>

                                       
                    <div class="col-md-6 col-sm-6 col-xs-5 col-lg-5">
                        <button class="btn-u submitBtn form-control"
                                type="submit">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </div>
            </fieldset>
        </form>
    </div>
</form>

@endsection