<?php

namespace App\Http\Controllers;

use Request;
use App\Models\Invoice;
use App\Models\Item;

class InvoiceController extends Controller {
	public function showAll() {
		$invoices = Invoice::allInvoicesDetails();
		// print_r($invoices->getArray()[1]);
		return view('invoice_all', ['invoices'=>$invoices]);
	}

	public function create($id) {
		$invoice = new Invoice;
		$invoice->customer_id = $id;
		$invoice->save();

		return redirect("/invoice/" . $invoice->getId());
	}

	public function postCreate() {
		
	}

	public function show($id) {
		$invoice = Invoice::getInvoiceDetails($id);
		$items = Item::all();
		// print_r($items);
		return view('invoice', ['invoice'=>$invoice, 'id'=>$id, 'items'=>$items->getArray()]);
	}

	public function addItemToInvoice($invoice_id) {

		$item_id = Request::input('items');
		$quantity = Request::input('quantity');

		Invoice::addItem($invoice_id, $item_id, $quantity);

		return redirect("invoice/{$invoice_id}");
	}

	public static function deleteItemFromInvoice($invoice_id, $item_id) {
		$invoice = Invoice::deleteItem($invoice_id, $item_id);
		return redirect("invoice/$invoice_id");
	}
}