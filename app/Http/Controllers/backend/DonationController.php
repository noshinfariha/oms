<?php
namespace App\Http\Controllers\backend;
use App\Models\Donation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Library\SslCommerz\SslCommerzNotification;
use App\Models\Account;
class DonationController extends Controller
{
    public function print()
    {
        $donationsdata = Donation::paginate(3);
        return view("Backend.pages.donation.print", compact('donationsdata'));
    }
    public function list()
    {
        $donationsdata = Donation::paginate(3);
        return view("Backend.pages.donation.donation", compact('donationsdata'));
    }
    public function form()
    {
        return view("Backend.pages.donation.form");
    }
    public function store(Request $noshin)
    {
        $validate = validator::make($noshin->all(), [
            'amount' => 'required|numeric|min:10',
            'phone' => 'required|min:11|max:11',
        ]);
        if ($validate->fails()) {
            notify()->error($validate->getMessageBag()->first());
            return redirect()->back();
        }
        $donation = Donation::create([
            'amount' => $noshin->amount,
            'name' => $noshin->donor_name,
            'phone' => $noshin->phone,
            'address' => $noshin->address,
        ]);
        $this->payment($donation);
        return redirect()->route('frontend');
    }
    public function payment($payment)
    {
        $post_data = array();
        $post_data['total_amount'] = $payment->amount; # You cant not pay less than 10
        $post_data['currency'] = "BDT";
        $post_data['tran_id'] = "0";
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
        $sslc = new SslCommerzNotification();
        $payment_options = $sslc->makePayment($post_data, 'hosted');
        if (!is_array($payment_options)) {
            print_r($payment_options);
            $payment_options = array();
        }
    }
}