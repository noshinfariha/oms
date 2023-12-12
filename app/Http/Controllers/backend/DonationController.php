<?php

namespace App\Http\Controllers\backend;

use App\Models\Donation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Library\SslCommerz\SslCommerzNotification;


class DonationController extends Controller
{
    public function list()
    {
        $donationsdata = Donation::paginate(3);
        return view("Backend.pages.donation.donation", compact('donationsdata'));
    }
    public function form()
    {
        return view("Backend.pages.donation.form");
    }

    public function delete($id)
    {
        $donationDelete = Donation::find($id);

        if ($donationDelete) {
            $donationDelete->delete();
        }
        return redirect()->route('donation');
    }

    public function edit($id)
    {
        $donationEdit = Donation::find($id);
        return view('Backend.pages.donation.edit', compact('donationEdit'));
    }

    public function update(Request $request, $id)
    {
        $donationEdit = Donation::find($id);
        if ($donationEdit) {

            $fileName = $donationEdit->image;
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $fileName = date('Ymdhis') . '.' . $file->getClientOriginalExtension();
                $file->move("uploads", $fileName);
            }


            $donationEdit->update([
                'amount' => $request->amount,
                'payment_method' => $request->payment_method,
                'receiver_account' => $request->receiver_account,
                'transaction_id' => $request->transaction_id,
                'receipt' => $request->receipt,

            ]);
            return redirect()->route('donation');
        }
    }
    public function store(Request $noshin)
    {

        $validate = validator::make($noshin->all(), [
            'payment_method' => 'required',



        ]);

        if ($validate->fails()) {
            return redirect()->back();
        }
        //dd($noshin ->all());
        $donation = Donation::create([
            'amount' => $noshin->amount,
            'payment_method' => $noshin->payment_method,
            'receiver_account' => $noshin->receiver_account,
            'transaction_id' => $noshin->transaction_id,
            'receipt' => $noshin->receipt,

        ]);
        $this->payment($donation);
        return redirect()->route('frontend');
    }
    public function payment($payment)
    {
        // dd($payment);
        $post_data = array();
        $post_data['total_amount'] = $payment->amount; # You cant not pay less than 10
        $post_data['currency'] = "BDT";
        $post_data['tran_id'] = uniqid(); // tran_id must be unique

        # CUSTOMER INFORMATION
        $post_data['cus_name'] = 'Customer Name';
        $post_data['cus_email'] = 'customer@mail.com';
        $post_data['cus_add1'] = 'Customer Address';
        $post_data['cus_add2'] = "";
        $post_data['cus_city'] = "";
        $post_data['cus_state'] = "";
        $post_data['cus_postcode'] = "";
        $post_data['cus_country'] = "Bangladesh";
        $post_data['cus_phone'] = '8801XXXXXXXXX';
        $post_data['cus_fax'] = "";

        # SHIPMENT INFORMATION
        $post_data['ship_name'] = "Store Test";
        $post_data['ship_add1'] = "Dhaka";
        $post_data['ship_add2'] = "Dhaka";
        $post_data['ship_city'] = "Dhaka";
        $post_data['ship_state'] = "Dhaka";
        $post_data['ship_postcode'] = "1000";
        $post_data['ship_phone'] = "8801XXXXXXXXX";
        $post_data['ship_country'] = "Bangladesh";

        $post_data['shipping_method'] = "NO";
        $post_data['product_name'] = "Computer";
        $post_data['product_category'] = "Goods";
        $post_data['product_profile'] = "physical-goods";

        # OPTIONAL PARAMETERS
        $post_data['value_a'] = "ref001";
        $post_data['value_b'] = "ref002";
        $post_data['value_c'] = "ref003";
        $post_data['value_d'] = "ref004";

        // dd($post_data);

        $sslc = new SslCommerzNotification();
        # initiate(Transaction Data , false: Redirect to SSLCOMMERZ gateway/ true: Show all the Payement gateway here )
        $payment_options = $sslc->makePayment($post_data, 'hosted');

        if (!is_array($payment_options)) {
            print_r($payment_options);
            $payment_options = array();
        }
    }
}
