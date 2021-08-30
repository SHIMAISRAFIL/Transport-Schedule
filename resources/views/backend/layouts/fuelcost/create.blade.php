
@extends('backend.master')

@section('content')
                   
<html>
<head>	<title>Fuel Cost Calculator</title>
	
<h1>Fuel Cost Calculator</h1>

<form action="{{route('fuelcost.store')}}" method="post">
	@csrf
<td>Transport Id</td><td>		
	  <input type="text" name="transportid" value="" class="inhalf indollar" onKeyUp="iptfieldCheck(this, 'r', 'pn');">
			<select name="transportid" >
				<option value="1">2</option>
				<option value="2">3</option>
				<option value="3">4</option>
				<option value="4" selected>1</option>
			</select>
			<br></br>

  
  <td>Fuel Type</td><td>		
	  <input type="text" name="fueltype" value="" class="inhalf indollar" onKeyUp="iptfieldCheck(this, 'r', 'pn');">
			<select name="fueltype" >
				<option value="Disel">Disel</option>
				<option value="Petrol">Petrol</option>
				<option value="Octain">Octain</option>
				<option value="Gas" selected>Gas</option>
			</select>
			<br></br>

  <td>Fuel Price</td><td>		
	  <input type="text" name="fuelprice" value="" class="inhalf indollar" onKeyUp="iptfieldCheck(this, 'r', 'pn');">
			<select name="fuelprice" >
				<option value="500 per gallon">500 per gallon</option>
				<option value="60 per liter" selected>60 per liter</option>
			</select>
			<br></br>

			<td>Fuel Quantity</td><td>		
	  <input type="text" name="fuelquantity" value="" class="inhalf indollar" onKeyUp="iptfieldCheck(this, 'r', 'pn');">
			<select name="fuelquantity" >
				<option value="2 liter">2 liter</option>
				<option value="3 liter">3 liter</option>
				<option value="4 liter">4 liter</option>
				<option value="5 liter">5 liter</option>
				<option value="1 liter" selected>1 liter</option>
			</select>
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
	  
	  <!-- <div class="form-group">
    <label for="remarks">Enter Remarks </label>
    <input name='remarks' id='remarks' type="description" class="form-control" placeholder="">
  </div> -->
  


  

<!-- <p>This calculator can estimate fuel cost according to the distance of a trip, the fuel efficiency of the car, and the price of gas using various units.</p><div id="insmdc"></div>
<table class="panel" >
	<form name="calform">
	<tr>
	<td>Transport Type</td><td>		<input type="text" name="transporttype"  id="transporttype"class="inhalf" onKeyUp="iptfieldCheck(this, 'r', 'pn');">
			<select name="transporttype" >
				<option value="Minibus"></option>
				<option value="Micro"></option>
				<option value="PrivateCar" selected></option>
			</select>
		</td>
		
		<td>Trip Distance</td><td>		<input type="text" name="tripdistance" value="500" class="inhalf" onKeyUp="iptfieldCheck(this, 'r', 'pn');">
			<select name="tripdistanceunit" >
				<option value="miles">miles</option>
				<option value="kilometers" selected>kilometers (km)</option>
			</select>
		</td>
	</tr>
	<tr>
		<td>Fuel Efficiency</td><td>		<input type="text" name="fuelefficiency" value="10" class="inhalf" onKeyUp="iptfieldCheck(this, 'r', 'pn');">
			<select name="fuelefficiencyunit" >
				<option value="mpg">miles per gallon (mpg)</option>
				<option value="lp100k" selected>liters per 100 km (L/100 km)</option>
				<option value="kpl">kilometres per liter (km/L)</option>
				<option value="lpm">liters per mile</option>
			</select>
		</td>
	</tr>
	<tr>
		<td>Gas/Fuel Price</td><td>		<input type="text" name="gasprice" value="3" class="inhalf indollar" onKeyUp="iptfieldCheck(this, 'r', 'pn');">
			<select name="gaspriceunit" >
				<option value="gallon">per gallon</option>
				<option value="liter" selected>per liter</option>
			</select>
		</td>
	</tr>
	<tr>
		<td colspan="2" align="center"><input type="image" src="//d26tpo4cm8sb6k.cloudfront.net/img/svg/calculate.svg" value="Calculate" alt="Calculate" style="margin-top:10px;"> <img src="//d26tpo4cm8sb6k.cloudfront.net/img/svg/clear.svg" onClick="clearForm(document.calform);" class="clearbtn"></td>
	</tr>
	</form>
</table>


</div> -->
@endsection