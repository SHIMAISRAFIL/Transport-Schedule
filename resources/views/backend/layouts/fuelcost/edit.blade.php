@extends('backend.master')

@section('content')
                   
<html>
<head>	
	
<h1> Update Fuel Cost Info</h1>

<form action="{{route('fuelcost.update',$fuelcosts->id)}}" method="POST">
@method('PUT')
@csrf



	<div class="form-group">
  
  <label for="transport_number">Select Transport No.</label>

  <select class="form-control" id="transport_number" name="transport_id">
  @foreach($transports as $transport)
			  <option
              @if($fuelcosts->transport_id==$transport->id)
             
              selected
            @endif
              value="{{$transport->id}}">{{$transport->transport_number}}
           
            </option>
			  @endforeach
  </select>



  
  <td>Fuel Type</td><td>		
	 
			<select value="{{$fuelcosts->fueltype}}" name="fueltype" >
				<option value="Disel">Disel</option>
				<option value="Petrol">Petrol</option>
				<option value="Octain">Octain</option>
				<option value="Gas" selected>Gas</option>
			</select>
			<br></br>

  <td>Fuel Price</td><td>		
	  <input value="{{$fuelcosts->fuelprice}}" type="number" name="fuelprice"  class="inhalf indollar" onKeyUp="iptfieldCheck(this, 'r', 'pn');">
			<!-- <select name="fuelprice" >
				<option value="500 per gallon">500 per gallon</option>
				<option value="60 per liter" selected>60 per liter</option>
			</select> -->
			<br></br>

			<td>Fuel Quantity</td><td>		
	  <input value="{{$fuelcosts->fuelquantity}}" type="number" name="fuelquantity" value="" class="inhalf indollar" onKeyUp="iptfieldCheck(this, 'r', 'pn');">
			
			<br></br>

			<td>Date</td> <td>		
	  <input value="{{$fuelcosts->date}}" type="date" name="date" value="" class="inhalf indollar" onKeyUp="iptfieldCheck(this, 'r', 'pn');">
	  <br></br>
	  <td>Name of Filling Station</td><td>

	  <input value="{{$fuelcosts->place}}" type="text" name="place" value="" class="inhalf indollar" onKeyUp="iptfieldCheck(this, 'r', 'pn');">
			<select name="place" >
				<option value="Gazipur">Gazipur</option>
				<option value="Khilkhet">Khikhet</option>
				<option value="Nikunju">Nikunju</option>
				<option value="Saidabad">Saidabad</option>
				<option value="Abdullahpor" selected>Abdullahpor</option>
			</select>
			<br></br>

			<td>Remarks</td> <td>		
	  <input type="description" name="remarks" value="{{$fuelcosts->remarks}}" class="inhalf indollar" onKeyUp="iptfieldCheck(this, 'r', 'pn');">
	  <br></br>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<br></br>




	  
	  
@endsection