<?php 
namespace App\Models;

use DB;

class Invoice extends Model {
	protected static $table = 'invoice';

	public static function getInvoiceDetails($id) {

		$sql = "SELECT item.id as item_id, quantity, price, name, (price * quantity) as subtotal
			FROM item, invoice, invoice_item
			WHERE item.id = invoice_item.item_id
			AND invoice.id = invoice_item.invoice_id
			AND invoice.id = :id";

		$invoiceDetails = DB::select($sql, ["id"=>$id]);
		return $invoiceDetails;
	}

	public static function allInvoicesDetails(){
        // SQL
        $sql = "SELECT customer.id as c_id, first_name, last_name, invoice.id, created_at, sum(price * quantity) as total FROM customer, item, invoice_item, invoice WHERE customer.id = invoice.customer_id and invoice.id = invoice_item.invoice_id and item.id = invoice_item.item_id group by invoice.id;";

        $allInvoicesDetails = DB::select($sql);
        return $allInvoicesDetails;
	}

	public static function addItem($invoice_id, $item_id, $quantity){
		$sql = "INSERT INTO invoice_item (invoice_id, item_id, quantity) values (:invoice_id, :item_id, :quantity)";

		DB::insert($sql, ['invoice_id'=>$invoice_id, 'item_id'=>$item_id, 'quantity'=>$quantity]);
	}

	public static function deleteItem($invoice_id, $item_id){
		DB::delete('delete from invoice_item where invoice_id = :invoice_id and item_id = :item_id', ['invoice_id'=>$invoice_id, 'item_id'=>$item_id]);
	}
}