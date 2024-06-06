<?php

namespace App\Http\Controllers;
use App\Models\Selling;
use App\Models\Role;
use App\Models\Transaction_Status;
use Illuminate\Http\Request;
use Hash;

class SellingController extends Controller
{
    public function index(){
        $transaction_status = Transaction_Status::All();
        $sellings = Selling::All();

    return view('selling.index', compact('sellings',));
    }

    public function create(){
        $transaction_status = Transaction_Status::All();
        return view('selling/create', compact('transaction_status'));
    }

    public function store(Request $request)
{
    $request->validate([
        'Customer_ID' => 'required',
        'Cashier_ID' => 'required',
        'Date_Sell' => 'required',
        'Selling_Status' => 'required',
        'Grand_Total' => 'required',
        'Id_Product.*' => 'required',
        'Product_Name.*' => 'required',
        'Selling_Price.*' => 'required|numeric',
        'Qty.*' => 'required|numeric',
    ]);

    $selling = Selling::create([
        'Customer_ID' => $request->Customer_ID,
        'Cashier_ID' => $request->Cashier_ID,
        'Date_Sell' => $request->Date_Sell,
        'Selling_Status' => $request->Selling_Status,
        'Grand_Total' => $request->Grand_Total,
    ]);

    foreach ($request->Id_Product as $index => $Id_Product) {
        $detailSelling = new Detail_Selling([
            'ID_Product' => $Id_Product,
            'Product_Name' => $request->Product_Name[$index],
            'Selling_Price' => $request->Selling_Price[$index],
            'Qty' => $request->Qty[$index],
            'Sub_Total' => $request->Selling_Price[$index] * $request->Qty[$index],
        ]);

        $selling->detailSellings()->save($detailSelling);
    }

    return redirect()->route('selling.index')->withSuccess('Great! You have Successfully loggedin');
}

    public function edit(Selling $selling)
    {   
        $transaction_status = Transaction_Status::All();
    return view('selling.edit', compact('selling', 'status'));
    }

    public function update(Request $request, Selling $selling, Transaction_Status $transaction_status)
    {
        $request->validate([
            'Customer_Id' => 'required',
            'Cashier_Id' => 'required',
            'Date_Sell' => 'required',
            'Selling_Status' => 'required',
            'Grand_Total' => 'required',
        ]);
        $selling->Customer_Id = $request->Customer_Id;
        $selling->Cashier_Id = $request->Cashier_Id;
        $selling->Date_Sell = $request->Date_Sell;
        $selling->Selling_Status = $request->Selling_Status;
        $selling->Grand_Total = $request->Grand_Total;
        $selling->save();

        return redirect()->route('selling.index')->withSuccess('Great! You have Successfully updated '. $user->name);
    }

    public function destroy(Selling $selling)
    {
        $selling->delete();
        return redirect()->route('selling.index')->withSuccess($selling->Customer_Id. ' has been deleted successfully');
    }

}