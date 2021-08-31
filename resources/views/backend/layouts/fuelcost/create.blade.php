
@extends('backend.master')

@section('content')
                   
<html>
<head>	<title>Fuel Cost Calculator</title>
	
<h1>Fuel Cost Calculator</h1>

<form action="{{route('fuelcost.store')}}" method="post">
	@csrf
<td>Transport Id</td><td>		
	  
			<select name="transportid" >
				@foreach($transportids as $transportid)
				<option value="{{$transportid->id}}">{{$transportid->id}}</option>
				@endforeach
				<!-- <option value="2">3</option>
				<option value="3">4</option>
				<option value="4" selected>1</option> -->
			</select>
			<br></br>

  
  <td>Fuel Type</td><td>		
	 
			<select name="fueltype" >
				<option value="Disel">Disel</option>
				<option value="Petrol">Petrol</option>
				<option value="Octain">Octain</option>
				<option value="Gas" selected>Gas</option>
			</select>
			<br></br>

  <td>Fuel Price</td><td>		
	  <input type="number" name="fuelprice"  class="inhalf indollar" onKeyUp="iptfieldCheck(this, 'r', 'pn');">
			<!-- <select name="fuelprice" >
				<option value="500 per gallon">500 per gallon</option>
				<option value="60 per liter" selected>60 per liter</option>
			</select> -->
			<br></br>

			<td>Fuel Quantity</td><td>		
	  <input type="number" name="fuelquantity" value="" class="inhalf indollar" onKeyUp="iptfieldCheck(this, 'r', 'pn');">
			<!-- <select name="fuelquantity" >
				<option value="2 liter">2 liter</option>
				<option value="3 liter">3 liter</option>
				<option value="4 liter">4 liter</option>
				<option value="5 liter">5 liter</option>
				<option value="1 liter" selected>1 liter</option>
			</select> -->
			<br></br>

			<td>Date</td> <td>		
	  <input type="date" name="date" value="" class="inhalf indollar" onKeyUp="iptfieldCheck(this, 'r', 'pn');">
	  <br></br>
	  <td>Name of Filling Station</td><td>

	  <input type="text" name="place" value="" class="inhalf indollar" onKeyUp="iptfieldCheck(this, 'r', 'pn');">
			<select name="place" >
				<option value="Gazipur">Gazipur</option>
				<option value="Khilkhet">Khikhet</option>
				<option value="Nikunju">Nikunju</option>
				<option value="Saidabad">Saidabad</option>
				<option value="Abdullahpor" selected>Abdullahpor</option>
			</select>
			<br></br>

			<td>Remarks</td> <td>		
	  <input type="description" name="remarks" value="" class="inhalf indollar" onKeyUp="iptfieldCheck(this, 'r', 'pn');">
	  <br></br>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<br></br>




	  
	  
@endsection