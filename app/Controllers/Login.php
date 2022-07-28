<?php

namespace PHPMailer\PHPMailer;
namespace App\Controllers;

use App\Models\LoginModel;
use CodeIgniter\I18n\Time;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

class Login extends BaseController
{
    protected $Login;
    protected $Email;

    public function __construct()
    {
        helper(['form']);
        $this->Login = new LoginModel(); 
        $this->Email = new PHPMailer(true);
    }

    public function login()
    {
        $data['title'] = "Login | Muslim Basic";
        return view('User/Pages/Login', $data);
    }

    public function actionLogin()
    {
        $email    = $this->request->getVar('email');
        $pass     = md5($this->request->getVar('pass'));

        $getData  = $this->Login->getWhere(['email' => $email])->getRowArray();

        if ($pass == $getData['password']) {

            $data = [
                'name'      => $getData['name'],
                'email'     => $email,
                'is_active' => $getData['is_active']
            ];

            $this->session->set($data);

            $this->session->setFlashdata('msg', 'Login Berhasil! Happy Shopping ❤️');
            return redirect()->to('/');
        } else {
            $this->session->setFlashdata('msg_err', 'Password dan Condirm Password tidak sama');
            return redirect()->to('/login');
        }
    }

    public function logout()
    {
        $this->session->destroy();
        return redirect()->to('/');
    }

    public function register()
    {
        $data['title'] = "Register | Muslim Basic";
        return view('User/Pages/Register', $data);
    }

    public function actionRegis()
    {
        $name     = $this->request->getVar('name');
        $email    = $this->request->getVar('email');
        $pass     = $this->request->getVar('pass');
        $con_pass = $this->request->getVar('con_pass');

        if ($pass == $con_pass) {
            $token = $this->_str_rand();
            $data = [
                'name'           => $name,
                'email'          => $email,
                'is_active'      => 0,
                'password'       => md5($pass),
                'remember_token' => $token
            ];

            // $this->session->set($data);
            $results   = $this->Login->insert($data);
            $sendEmail = $this->_sendEmail($email, $token, 'regis');

            // dd($sendEmail);

            if ($results && $sendEmail) {
                $this->session->setFlashdata('msg', 'Registrasi Berhasil! Silahkan periksa email anda');
                return redirect()->to('/login');
            } else {
                $this->session->setFlashdata('msg_err', 'Registrasi Gagal!');
                return redirect()->to('/register');
            }
        } else {
            $this->session->setFlashdata('msg_err', 'Password dan Confirm Password tidak sama!');
            return redirect()->to('/register');
        }
    }

    public function forgotPass()
    {
        $data['title'] = "Forgot password | Muslim Basic";
        return view('User/Pages/ForgotPass', $data);
    }

    // public function actionForgotPass()
    // {
        
    // }

    private function _sendEmail($emailTo, $token, $type)
    {
        $this->Email->isSMTP();
        $this->Email->Host       = 'smtp.googlemail.com';
        $this->Email->SMTPAuth   = true;
        $this->Email->Username   = 'muslimbasic8@gmail.com';
        $this->Email->Password   = 'qrtxnbhrgfkxufur';
        $this->Email->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $this->Email->Port       = 587;

        $this->Email->setFrom('muslimbasic8@gmail.com', 'Muslim Basic');
        $this->Email->addAddress($emailTo);

        // Isi Email
        $this->Email->isHTML(true);
        
        if ($type == 'regis' && ($token != "" || $token != null)) {
            $this->Email->Subject   = 'Verification Account';
            $this->Email->Body      = 'Click this link to verify you account : <a href="'. base_url() .'/Login/verify/' . urlencode($token) . '/' . $emailTo . '">Activate</a>';
        } else {
            $this->Email->Subject   = 'Reset Password';
            $this->Email->Body      = 'Click this link to reset your password : <a href="'. base_url() .'/Login/resetpassword/' . urlencode($token) . '/' . $emailTo . '">Reset Password</a>';
        }

        $results = $this->Email->send();
        if ($results) {
            return true;
        } else {
            $this->Email->SMTPDebug  = SMTP::DEBUG_SERVER;
            return "Message could not be sent. Mailer Error: {$this->Email->ErrorInfo}";
        }
    }

    public function verify($emailTo = false, $token = false)
    {
        $getData = $this->Login->getWhere(['email' => $emailTo, 'remember_token' => $token])->getRowArray();

        if ($getData) {
            $now            = Time::now();
            $getNow         = $now->toDateString();
            $getCreatedAt   = $getData['created_at'];
            $created_at     = $now->setTimestamp(strtotime($getCreatedAt))->toDateString();
            $dateStart      = strtotime($getNow);
            $dateEnd        = strtotime($created_at);

            if (($dateStart - $dateEnd) < (60 * 60 * 24)) {
                $datetime = $now->toDateTimeString();

                $data = array(
                    'remember_token' => null,
                    'is_active' => 1,
                    'email_verified_at' => $datetime,
                    'updated_at' => $datetime
                );

                // dd($data);

                $this->Login->set($data);
                $this->Login->where('id', $getData['id']);
                $this->Login->where('email', $emailTo);
                $update = $this->Login->update();

                if ($update) {
                    $this->session->setFlashdata('msg',  $emailTo . ' Akun Berhasil Aktif, Silahkan Login!');
                } else {
                    $this->session->setFlashdata('msg',  $emailTo . ' Akun Gagal Aktif, Silahkan Hubungi Tim Aplikasi!');
                }

            } else {
                $this->Login->where('email', $emailTo);
                $this->Login->delete();
                
                $this->session->setFlashdata('msg_err', 'Token Kadaluarsa! Harap Registrasi Kembali');
            }
        } else {
            $this->session->setFlashdata('msg_err', 'Aktifasi Akun Gagal!, Email Salah!');
        }
        return redirect()->to('/login');
    }

    private function _str_rand(int $length = 32){ // 64 = 32
        $length = ($length < 4) ? 4 : $length;
        return bin2hex(random_bytes(($length-($length%2))/2));
    }
}
