<?php

namespace App\Http\Livewire\Ecommerce\Cart;

use App\lib\zarinpal;
use App\Models\billNumber;
use App\Models\ColorsOriductsSizeSizedetails;
use App\Models\purchase;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CartComponent extends Component
{
    protected $listeners=['refreshParent'=>'$refresh','forcedCloseModal'];
    public $idDel;
    public function incQty($rowId)
    {
        $product=Cart::get($rowId);
        $qty=$product->qty+1;
        Cart::update($rowId,$qty);
    }

    public function decQty($rowId)
    {
        $product=Cart::get($rowId);
        $qty=$product->qty-1;
        Cart::update($rowId,$qty);
    }
//    public function selectItem($id,$action)
//    {
//        $this->idDel=$id;
////        $this->dispatchBrowserEvent('opendeletemodal');
//    }
    public function forcedCloseModal()
    {
//        $this->cleanme();
        $this->resetErrorBag();
        $this->resetValidation();
    }
    public function destroy($rowId)
    {
        Cart::remove($rowId);
        $this->dispatchBrowserEvent('closedeletemodal');
        session()->flash('succsessDel','با موفقیت از سبد خرید حذف شد');
    }

    public function purchase($price)
    {
        $bill_number=billNumber::value('bill_number')+1;
        billNumber::where('id',1)->update(['bill_number'=>$bill_number]);
//        dd($bill_number);
//        $idcsd=ColorsOriductsSizeSizedetails::where('')->where('')->where('')->where('')->value('id');
//        $purchase=purchase::where('id','=',$id)->value('');
        $dataSession=Cart::content();
//        dd($dataSession);
        if (\auth('sanctum')->check())
        {
            foreach ($dataSession as $item)
            {
                $idcpsd=ColorsOriductsSizeSizedetails::where('products_id',$item->id)->where('sizes_id',$item->options->size_id)->where('sizedetails_id',$item->options->sizedetails_id)->where('colors_id',$item->options->colors_id)->value('id');
                $totalQty=ColorsOriductsSizeSizedetails::where('products_id',$item->id)->where('sizes_id',$item->options->size_id)->where('sizedetails_id',$item->options->sizedetails_id)->where('colors_id',$item->options->colors_id)->value('qty');
                purchase::create(
                    ['userId'=>Auth::user()->id,'billNo'=>$bill_number,'idcsd'=>$idcpsd,'status'=>1, 'qty'=>$item->qty,'userInsert'=>Auth::user()->id,'paystatus'=>1]
                );
            }
        }
        else
            {
                return redirect(route('login'));
            }
//        dd($dataSession);
//        $price=$purchase->price;
//        $status=$purchase->status;
//        if($status == 1)
//        {
//            $billNumber=$purchase->billnumber;
//        }
//        else
//        {
//            $bill_n=bill_number::where('id','=',1)->first();
//            $billNumber=$bill_n->countering;
//        }
        $status='';
        $MerchantID 	= "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx";
        $Amount 		= $price;
        $Description 	= 100;
        $Email 			= "a@a.com";
        $Mobile 		= "0912";
        $CallbackURL 	= "http://ica52.com/verify.php";
        $ZarinGate 		= false;
        $SandBox 		= true;
        $zp 	= new zarinpal();
        $result = $zp->request($MerchantID, $Amount, $Description, $Email, $Mobile, $CallbackURL, $SandBox, $ZarinGate);

        if (isset($result["Status"]) && $result["Status"] == 100)
        {
//            if($status == 0)
//            {
//                $billNumber=100+1;
//                $bill_n=bill_number::find($id_bill);
//                $bill_n->countering=$billNumber;
//                $bill_n->save();
//            }
//            $purchase=userPurchace::find($id);
//            $purchase->transactionID=$result["Authority"];
//            $purchase->billnumber=$billNumber;
//            $purchase->save();
            // Success and redirect to pay
            $zp->redirect($result["StartPay"]);
        } else {
            // error
            echo "خطا در ایجاد تراکنش";
            echo "<br />کد خطا : " . $result["Status"];
            echo "<br />تفسیر و علت خطا : " . $result["Message"];
        }
    }
    public function render()
    {
        return view('livewire.ecommerce.cart.cart-component')->layout('layouts.baseWithoutFooter');;
    }
}
