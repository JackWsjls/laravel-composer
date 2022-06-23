<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class StudentController extends Controller
{
    public function upload(Request $request) {
      if ($request->isMethod("POST")) {
        // var_dump($_FILES);
        $file = $request->file('source');
        // dd($file);

        if ($file->isValid()) {
          // 原文件名
          $originalName = $file->getClientOriginalName();
          // 扩展名
          $ext = $file->getClientOriginalExtension();
          // MineType
          $type = $file->getClientMimeType();
          // 临时绝对路径
          $realPath = $file->getRealPath();

          $filename = date('Y-m-d-H-i-s') . '-' . uniqid() . '.' . $ext;
          $bool = Storage::disk('uploads')->put($filename, file_get_contents($realPath));
          if ($bool) {
            echo('上传成功');
          } else {
            echo ('上传失败');
          }
        }
        exit;
      }
      return view("student.upload");
    }

    public function mail() {
    // Mail
    // $bool = Mail::raw('邮件内容 测试1', function($message) { // 内容
    //   $message->from('18710278238@163.com', 'wsjls官网');
    //   $message->subject('测试121212'); // 标题
    //   $message->to('418383219@qq.com');
    // });
    // if ($bool) {
    //   echo '发送成功';
    // } else {
    //   echo '发送失败';
    // }

    // 邮件测试第二种方式
      $bool = Mail::send('student.mail', [
        'name' => 'wsjls',
        'age' => 18,
        // 'student' => $student
      ], function ($message) {
        $message->from('18710278238@163.com', 'wsjls官网');
        $message->subject('测试121212'); // 标题
        $message->to('418383219@qq.com');
      });
      if ($bool) {
        echo '发送成功';
      } else {
        echo '发送失败';
      }
    }
}
