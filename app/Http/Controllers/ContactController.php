<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Contact;


class ContactController extends Controller
{
    // 今のところ不要なアクション。もしかしたら活用するかも
    public function form()
    {
        return view('form');
    }
    
    // 問い合わせ内部処理用のアクション
    public function confirm(Request $request)
    {
        
        $this->validate($request, [
            'name'  => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        $contact = new Contact($request->all());

        return view('confirm', compact('contact'));
    }
    
    // 問い合わせに成功したときに利用するアクション。
    // 成功のViewを返すのみ。
    public function process(Request $request)
    {
        
        $action = $request->get('action', 'back');
        // 二つ目は初期値です。

        $input = $request->except('action');
        // そして、入力内容からは取り除いておきます。

        if($action === 'Submit') {
            $contact = $request->all();

            // メール送信処理を実装
            Mail::to('yoshihiroinoue1990@gmail.com')->send(new TestMail($contact));

        return view('complete');
            
        } else {

            // 戻る

            return redirect("top");
    }
        return view('complete');
    }
}
