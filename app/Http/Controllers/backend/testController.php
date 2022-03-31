<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\cauhinh;
use App\Models\Product;
use Illuminate\Http\Request;
use Mail;
use App\Models\Config;
class testController extends Controller
{
    public function index()
    {
        //$item = cauhinh::find(1);
        $item = Product::find(12);
        dd($item->firstname);
    }
    public function index2()
    {
        //$item = cauhinh::find(1);
        $item = Category::find(9);
        dd($item->products);
    }
    public function index3()
    {
        //$item = cauhinh::find(1);
        $list = Category::withCount(['products',
            'products as products_show' => function ($q) {
                $q->where('status', 1);
            },
            'products as products_hide' => function ($q) {
                $q->where('status', 2);
            },
            'products as products_trash' => function ($q) {
                $q->where('status', 0);
            }
        ])
            //dd($list->toSql());

            ->paginate(10);
        //dd($list);
        return view('backend.product.list2', ['list' => $list, 'total' => $list->total()]);
    }
    public function index4(Request $request)
    {
        // $item = cauhinh::find(1);
        // $list = Product::join('categories','products.category_id','=','categories.id')
        //                 ->where('status',1)
        // $list = Product::all();
        // $mang = [];
        // foreach($list as $item)
        // {
        //     array_push($mang,$item->category()->where('status',1)->first());
        // }
        // dd(array_filter($mang));
        // $list = Product::whereHas('category',function($q){
        //     $q->where('status',1);
        // })
        // $list = Product::whereRelation('category','status',1)
        // ->whereRelation('category','id',2)
        $list = Product::whereRelation('category', function ($q) {
            $q->where(['status' => 1, 'id' => 2]);
        })
            // $key = $request->key;
            // $list = Product::where(function($q)use($key){
            //     $q  ->where('name','like','%'.$key.'%')
            //         ->orWhere('sku','like','%'.$key.'%');
            // })
            ->where('status', 1)
            //dd($list->toSql());
            //dd($list->getBindings());
            ->paginate(10);
        return view('backend.product.list3', ['list' => $list, 'total' => $list->total()]);
    }
    public function testmailcontent()
    {
        return view('backend.test.form1');
    }
    public function testmailcontentpost(Request $request)
    {
        $request->validate([
            'email' => ['required','email',],
            'name' => 'required',
            'content' => 'required',
            'title' => 'required'
        ]);
            Mail::raw($request->content, function ($message) use($request){
                // $message->from('john@johndoe.com', 'John Doe');
                // $message->sender('john@johndoe.com', 'John Doe');
                $message->to($request->email, $request->name);
                // $message->cc('john@johndoe.com', 'John Doe');
                // $message->bcc('john@johndoe.com', 'John Doe');
                // $message->replyTo('john@johndoe.com', 'John Doe');
                $message->subject($request->title);
                // $message->priority(3);
                // $message->attach('pathToFile');
            });

        return redirect()->back()->with(['msg'=>'Bạn đã gửi thành công', 'type'=> 'success', 'title'=>'GỬI MAIL']);

    }
    public function testmailcontent1()
    {
        return view('backend.test.form2');
    }
    public function testmailcontentpost1(Request $request)
    {
        $request->validate([
            'email' => ['required','email',],
            'name' => 'required',
            'content' => 'required',
            'title' => 'required'
        ]);
        try {
            Mail::send('backend.test.template', ['msg'=>$request->content], function ($message) use($request){
                // $message->from('john@johndoe.com', 'John Doe');
                    // $message->sender('john@johndoe.com', 'John Doe');
                    $message->to($request->email, $request->name);
                    // $message->cc('john@johndoe.com', 'John Doe');
                    // $message->bcc('john@johndoe.com', 'John Doe');
                    // $message->replyTo('john@johndoe.com', 'John Doe');
                    $message->subject($request->title);
                    // $message->priority(3);
                    // $message->attach('pathToFile');
            });
        } catch (\Exception $e) {
            return redirect()->back()->with(['msg'=>$e->getMessage(), 'type'=> 'danger', 'title'=>'GỬI MAIL']);
        }
        return redirect()->back()->with(['msg'=>'Bạn đã gửi thành công', 'type'=> 'success', 'title'=>'GỬI MAIL']);
    }
    public function testtemplate()
    {
        // $a = Config::getList();
        // dd($a);
        // $a  = Product::get(['name'])->pluck('name');
        // dd($a);
        //return view('backend.auth.templatepass',['href'=>'https://google.com']);
        // $a = Feature::listForUser(1);
        // dd($a->where('parent_id',7));
    }
}
