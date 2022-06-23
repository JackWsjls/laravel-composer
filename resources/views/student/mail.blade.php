<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>邮件</title>
</head>

<body>
  <div>
    <includetail>
      <div align="center">
        <div class="open_email" style="margin-left: 8px; margin-top: 8px; margin-bottom: 8px; margin-right: 8px;">
          <div>
            <br>
            <span class="genEmailContent">
              <div id="cTMail-Wrap" style="word-break: break-all;box-sizing:border-box;text-align:center;min-width:320px; max-width:660px; border:1px solid #f6f6f6; background-color:#f7f8fa; margin:auto; padding:20px 0 30px; font-family:'helvetica neue',PingFangSC-Light,arial,'hiragino sans gb','microsoft yahei ui','microsoft yahei',simsun,sans-serif">
                <div class="main-content" style="">
                  <table style="width:100%;font-weight:300;margin-bottom:10px;border-collapse:collapse">
                    <tbody>
                      <tr style="font-weight:300">
                        <td style="width:3%;max-width:30px;"></td>
                        <td style="max-width:600px;">
                          {{-- LOGO  --}}
                          <div id="cTMail-logo" style="width:92px; height:25px;">
                            {{-- 替换跳转链接  --}}
                            <a href="">
                              {{-- 替换LOGO图片  --}}
                              <img border="0" src="https://imgcache.qq.com/open_proj/proj_qcloud_v2/mc_2014/cdn/css/img/mail/logo-pc.png" style="width:92px; height:25px;display:block">
                            </a>
                          </div>
                          {{-- 页面上边的蓝色分割线  --}}
                          <p style="height:2px;background-color: #00a4ff;border: 0;font-size:0;padding:0;width:100%;margin-top:20px;"></p>

                          <div id="cTMail-inner" style="background-color:#fff; padding:23px 0 20px;box-shadow: 0px 1px 1px 0px rgba(122, 55, 55, 0.2);text-align:left;">
                            <table style="width:100%;font-weight:300;margin-bottom:10px;border-collapse:collapse;text-align:left;">
                              <tbody>
                                {{-- 第一个单元格  --}}
                                <tr style="font-weight:300">
                                  {{-- 左侧表格，设置左边距用的  --}}
                                  <td style="width:3.2%;max-width:30px;"></td>
                                  {{-- 中间表格，正文使用  --}}
                                  <td style="max-width:480px;text-align:left;">
                                    {{-- 以下是正文 --}}
                                    {{-- 可以是标题  --}}
                                    <h1 id="cTMail-title" style="font-size: 20px; line-height: 36px; margin: 0px 0px 22px;">
                                      【XX平台】欢迎注册XXXXXX
                                    </h1>

                                    <p id="cTMail-userName" style="font-size:14px;color:#333; line-height:24px; margin:0;">
                                      尊敬的{{$name}}用户，您好！
                                    </p>

                                    <p class="cTMail-content" style="line-height: 24px; margin: 6px 0px 0px; overflow-wrap: break-word; word-break: break-all;">
                                      <span style="color: rgb(51, 51, 51); font-size: 14px;">
                                        欢迎注册巴拉巴拉一大堆话。
                                      </span>
                                    </p>

                                    <p class="cTMail-content" style="line-height: 24px; margin: 6px 0px 0px; overflow-wrap: break-word; word-break: break-all;">
                                      <span style="color: rgb(51, 51, 51); font-size: 14px;">完成注册，请点击下面按钮验证邮箱。
                                        <span style="font-weight: bold;">非本人操作可忽略。</span>
                                      </span>
                                    </p>

                                    {{-- 按钮  --}}
                                    <p class="cTMail-content" style="font-size: 14px; color: rgb(51, 51, 51); line-height: 24px; margin: 6px 0px 0px; word-wrap: break-word; word-break: break-all;">
                                      {{-- 下面替换成自己的链接  --}}
                                      <a id="cTMail-btn" href="" title="" style="font-size: 16px; line-height: 45px; display: block; background-color: rgb(0, 164, 255); color: rgb(255, 255, 255); text-align: center; text-decoration: none; margin-top: 20px; border-radius: 3px;">
                                        点击此处验证邮箱
                                      </a>
                                    </p>

                                    <p class="cTMail-content" style="line-height: 24px; margin: 6px 0px 0px; overflow-wrap: break-word; word-break: break-all;">
                                      <span style="color: rgb(51, 51, 51); font-size: 14px;">
                                        <br>
                                        无法正常显示？请复制以下链接至浏览器打开：
                                        <br>
                                        <a href="" title="" style="color: rgb(0, 164, 255); text-decoration: none; word-break: break-all; overflow-wrap: normal; font-size: 14px;">
                                          这里是激活账号的链接
                                        </a>
                                      </span>
                                    </p>

                                    {{-- 来个署名  --}}
                                    <dl style="font-size: 14px; color: rgb(51, 51, 51); line-height: 18px;">
                                      <dd style="margin: 0px 0px 6px; padding: 0px; font-size: 12px; line-height: 22px;">
                                        <p id="cTMail-sender" style="font-size: 14px; line-height: 26px; word-wrap: break-word; word-break: break-all; margin-top: 32px;">
                                          此致
                                          <br>
                                          <strong>XXX团队</strong>
                                        </p>
                                      </dd>
                                    </dl>
                                  </td>
                                  {{-- 右侧表格，设置右边距用的  --}}
                                  <td style="width:3.2%;max-width:30px;"></td>
                                </tr>
                              </tbody>
                            </table>
                          </div>

                          {{-- 页面底部的推广  --}}
                          <div id="cTMail-copy" style="text-align:center; font-size:12px; line-height:18px; color:#999">
                            <table style="width:100%;font-weight:300;margin-bottom:10px;border-collapse:collapse">
                              <tbody>
                                <tr style="font-weight:300">
                                  {{-- 左，左边距  --}}
                                  <td style="width:3.2%;max-width:30px;"></td>
                                  {{-- 中，正文  --}}
                                  <td style="max-width:540px;">

                                    <p style="text-align:center; margin:20px auto 14px auto;font-size:12px;color:#999;">
                                      此为系统邮件，请勿回复。
                                      {{-- 可以加个链接  --}}
                                      <a href="" style="text-decoration:none;word-break:break-all;word-wrap:normal; color: #333;" target="_blank">
                                        取消订阅
                                      </a>
                                    </p>

                                    {{-- 可以加个图片，公众号二维码之类的  --}}
                                    <p id="cTMail-rights" style="max-width: 100%; margin:auto;font-size:12px;color:#999;text-align:center;line-height:22px;">
                                      <img border="0" src="http://imgcache.qq.com/open_proj/proj_qcloud_v2/tools/edm/css/img/wechat-qrcode-2x.jpg" style="width:64px; height:64px; margin:0 auto;">
                                      <br>
                                      关注服务号，移动管理云资源
                                      <br>
                                      <img src="https://imgcache.qq.com/open_proj/proj_qcloud_v2/gateway/mail/cr.svg" style="margin-top: 10px;">
                                    </p>
                                  </td>
                                  {{-- 右，右边距  --}}
                                  <td style="width:3.2%;max-width:30px;"></td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </td>
                        <td style="width:3%;max-width:30px;"></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </span>
            {{-- <br>--}}
          </div>
        </div>
      </div>
    </includetail>
  </div>
  <div>
    <includetail>
      <style>
        /* CLIENT-SPECIFIC STYLES */
        body,
        table,
        td,
        a {
          -webkit-text-size-adjust: 100%;
          -ms-text-size-adjust: 100%;
        }

        table,
        td {
          mso-table-lspace: 0pt;
          mso-table-rspace: 0pt;
        }

        img {
          -ms-interpolation-mode: bicubic;
        }

        .hidden {
          display: none !important;
          visibility: hidden !important;
        }

        /* iOS BLUE LINKS */
        a[x-apple-data-detectors] {
          color: inherit !important;
          text-decoration: none !important;
          font-size: inherit !important;
          font-family: inherit !important;
          font-weight: inherit !important;
          line-height: inherit !important;
        }

        /* ANDROID MARGIN HACK */
        body {
          margin: 0 !important;
        }

        div[style*="margin: 16px 0"] {
          margin: 0 !important;
        }

        @media only screen and (max-width: 639px) {

          body,
          #body {
            min-width: 320px !important;
          }

          table.wrapper {
            width: 100% !important;
            min-width: 320px !important;
          }
        }
      </style>
      <style>
        body {
          -webkit-text-size-adjust: 100%;
          -ms-text-size-adjust: 100%;
        }

        img {
          -ms-interpolation-mode: bicubic;
        }

        body {
          margin: 0 !important;
        }
      </style>


      <table border="0" cellpadding="0" cellspacing="0" id="body" style="text-align: center; min-width: 640px; width: 100%; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; margin: 0; padding: 0;" bgcolor="#fafafa">
        <tbody>
          {{-- 最上边紫色的分割线 --}}
          <tr class="line">
            <td style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; height: 4px; font-size: 4px; line-height: 4px; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt;" bgcolor="#6b4fbb">&nbsp;
            </td>
          </tr>
          {{-- 页头的LOGO    --}}
          <tr class="header">
            <td style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; font-size: 13px; line-height: 1.6; color: #5c5c5c; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; padding: 25px 0;">
              <img src="http://192.168.10.105/assets/mailers/gitlab_header_logo-153749eaa7ea6fafcb995161abd3247bc4c4500f31498b0c4024f50093983ac0.gif" width="55" height="50" style="-ms-interpolation-mode: bicubic;">
            </td>
          </tr>
          <tr>
            <td style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
              <table border="0" cellpadding="0" cellspacing="0" class="wrapper" style="width: 640px; border-collapse: separate; border-spacing: 0; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; margin: 0 auto;">
                <tbody>
                  <tr>
                    <td style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; border-radius: 3px; overflow: hidden; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; padding: 18px 25px; border: 1px solid #ededed;" align="left" bgcolor="#ffffff">
                      <table border="0" cellpadding="0" cellspacing="0" class="content" style="width: 100%; border-collapse: separate; border-spacing: 0; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
                        <tbody>
                          <tr>
                            <td style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; color: #333333; font-size: 15px; font-weight: 400; line-height: 1.4; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; padding: 15px 5px;" align="center">
                              <h1 style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; color: #333333; font-size: 18px; font-weight: 400; line-height: 1.4; margin: 0; padding: 0;" align="center">
                                你好，{{$name}}！
                              </h1>
                              <p>
                                点击此链接重置密码：
                              </p>
                              <div id="cta">
                                <a href="" style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%;">点击此处重置链接</a>
                              </div>
                              <p>
                                或复制此链接至浏览器打开：<a href="" style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%;">http://www.baidu.com</a>
                              </p>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </td>
                  </tr>
                </tbody>
              </table>
            </td>
          </tr>
          <tr class="footer">
            <td style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; font-size: 13px; line-height: 1.6; color: #5c5c5c; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; padding: 25px 0;">
              <img height="33" src="http://192.168.10.105/assets/mailers/gitlab_footer_logo-078860f148cc9596195e6bb3fa7db31c30538355576c5c3b569c414902e3d095.gif" style="display: block; -ms-interpolation-mode: bicubic; margin: 0 auto 1em;" width="90">

              <div>
                您收到这封电子邮件是因为你在 XX平台 拥有帐户。
                <a style="color: #3777b0; text-decoration: none; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%;" href="">
                  管理全部通知
                </a>
                ·
                <a style="color: #3777b0; text-decoration: none; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%;" href="http://192.168.10.105/help">
                  帮助
                </a>
              </div>
            </td>
          </tr>

        </tbody>
      </table>
    </includetail>
  </div>

</body>

</html>