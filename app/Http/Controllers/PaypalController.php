<?php

namespace Anunciate\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Validator;
use URL;
use Session;
use Redirect;
//use Input;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
/** All Paypal Details class * */
use PayPal\Rest\ApiContext;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\RedirectUrls;
use PayPal\Api\ExecutePayment;
use PayPal\Api\PaymentExecution;
use PayPal\Api\Transaction;

class PaypalController extends Controller {

    private $_api_context;

    public function __construct() {
        // setup PayPal api context
        $paypal_conf = \Config::get('paypal');
        $this->_api_context = new ApiContext(new OAuthTokenCredential($paypal_conf['client_id'], $paypal_conf['secret']));
        $this->_api_context->setConfig($paypal_conf['settings']);
    }

    public function payWithPaypal() {
        return view('dashboard/paypal');
    }

    public function postPaymentWithpaypal(Request $request) {
//        $id = $request->input('iduser');
//        Session::put('key', $id);


        $payer = new Payer();
        $payer->setPaymentMethod('paypal');

        $item_1 = new Item();


        $item_1->setName('Item 1') /** item name * */
                ->setCurrency('MXN')
                ->setQuantity(1)
                ->setPrice($request->get('amount'));/** unit price * */
        $item_list = new ItemList();
        $item_list->setItems(array($item_1));

        $amount = new Amount();
        $amount->setCurrency('MXN')
                ->setTotal($request->get('amount'));

        $transaction = new Transaction();
        $transaction->setAmount($amount)
                ->setItemList($item_list)
                ->setDescription('Your transaction description');

        $redirect_urls = new RedirectUrls();
        $redirect_urls->setReturnUrl(URL::route('statuspaypal')) /** Specify return URL * */
                ->setCancelUrl(URL::route('statuspaypal'));

        $payment = new Payment();
        $payment->setIntent('Sale')
                ->setPayer($payer)
                ->setRedirectUrls($redirect_urls)
                ->setTransactions(array($transaction));
        /** dd($payment->create($this->_api_context));exit; * */
        try {
            $payment->create($this->_api_context);
        } catch (\PayPal\Exception\PPConnectionException $ex) {
            if (\Config::get('app.debug')) {
                \Session::put('error', 'Connection timeout');
                return Redirect::route('paywithpaypal');
                /** echo "Exception: " . $ex->getMessage() . PHP_EOL; * */
                /** $err_data = json_decode($ex->getData(), true); * */
                /** exit; * */
            } else {
                \Session::put('error', 'Some error occur, sorry for inconvenient');
                return Redirect::route('paywithpaypal');
                /** die('Some error occur, sorry for inconvenient'); * */
            }
        }

        foreach ($payment->getLinks() as $link) {
            if ($link->getRel() == 'approval_url') {
                $redirect_url = $link->getHref();
                break;
            }
        }

        /** add payment ID to session * */
        Session::put('paypal_payment_id', $payment->getId());

        if (isset($redirect_url)) {
            /** redirect to paypal * */
            return Redirect::away($redirect_url);
        }

        \Session::put('error', 'Unknown error occurred');
        return Redirect::route('statuspaypal');
    }

    public function getPaymentStatus() {
        /** Get the payment ID before session clear * */
        $payment_id = Session::get('paypal_payment_id');
        /** clear the session payment ID * */
        Session::forget('paypal_payment_id');
        if (empty(input::get('PayerID')) || empty(input::get('token'))) {
            \Session::put('error', 'La compra se cancelo! failed');
            return Redirect('http://localhost:8180/anunciatec2/Control_Dashuser/index/1');
        }
        $payment = Payment::get($payment_id, $this->_api_context);
        /** PaymentExecution object includes information necessary * */
        /** to execute a PayPal account payment. * */
        /** The payer_id is added to the request query parameters * */
        /** when the user is redirected from paypal back to your site * */
        $execution = new PaymentExecution();
        $execution->setPayerId(Input::get('PayerID'));
        /*         * Execute the payment * */
        $result = $payment->execute($execution, $this->_api_context);
        /** dd($result);exit; /** DEBUG RESULT, remove it later * */
        if ($result->getState() == 'approved') {
            $this->saveOrder(\Session::get('cart'));

            \Session::forget('cart');

            /** it's all right * */
            /** Here Write your database logic like that insert record or value in database if you want * */
            \Session::put('success', 'La compra se realizo de forma satisfactoría.');
            return Redirect('http://localhost:8180/anunciatec2/Control_Dashuser/index/0');
        }
        \Session::put('error', 'La compra fallo.');

        return Redirect('http://localhost:8180/anunciatec2/Control_Dashuser/index/1');
    }

    private function saveOrder() {
//        $total = 100;
//	    $id_usuario = 0;
        $id = Session::get('key');
        //$date= date('d-m-Y',strtotime('-30 day'));
        //$date  = DB::select('SELECT DATE_ADD(CURDATE(), INTERVAL +1 MONTH)');
//        $hoy = date("Y-m-d H:i:s");
//	       \Anunciate\Suscripcion::create([
//                'id'=> $id,
//                'Id_tiposus'=>1,
//                'Fecha_ini'=>$hoy,
//                'Activo'=>'0'
//            ]);

        $fecha = date('Y-m-j H:i:s');
        $nuevafecha = strtotime('+1 month', strtotime($fecha));
        $nuevafecha1 = date('Y-m-j H:i:s', $nuevafecha);


        DB::table('subscriptions')->insert(
                ['user_id' => $id, 'name' => 'basica', 'stripe_plan' => 'basica','finish_at'=>$nuevafecha1]
        );
    }

}
