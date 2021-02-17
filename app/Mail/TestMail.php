<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class TestMail extends Mailable
{
    use Queueable, SerializesModels;
    
    // 引数で受け取ったデータ用の変数
    protected $contact;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($contact)
    {
        // 引数で受け取ったデータを変数にセット
      $this->contact = $contact;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
          ->from('hoge@hoge.com') // 送信元
          ->subject('テスト送信ですよ') // メールタイトル
          ->view('send') // どのテンプレートを呼び出すか
          ->with(['contact' => $this->contact]);
    }
}
