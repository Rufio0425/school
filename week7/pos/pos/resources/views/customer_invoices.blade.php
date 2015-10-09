@extends('layout')

@section('main')


	<h1>{{$customer->fullName()}}'s Invoices</h1>

		<table>
			<tr>
				<th>Invoice #</th>
				<th>Total</th>
				<th>Creation Date</th>
				<th>Details</th>

			</tr>
			{{-- @foreach($invoices as $invoice) --}}
			<tr>
				<td>Invoice #</td>
				<td>Invoice Date</td>
				<td>Invoice Total</td>
				<td><a href="#">Details</a></td>
			</tr>
			{{-- @endforeach --}}

		</table>
		<a href="/customer">Home</a>
@endsection