<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
/*
 * Author: Yufi Eko Firmansyah
 * Date: Mar 16, 2015
 * Description: Yooa
 */

//Registration Errors
$lang['auth.email_exists'] = 'Email sudah digunakan';
$lang['auth.user_exists'] = 'Username sudah digunakan';

//Login errors
$lang['auth.invalid_credentials'] = 'Username atau password salah';
$lang['auth.user_id_unavailable'] = 'User id tidak ada';

//Groups and privileges errors
$lang['auth.priv_group_connection_exists'] = 'Koneksi antara hak akses dan grup sudah dilakukan';
$lang['auth.privilege_connection_exists'] = 'Koneksi antara hak akses dan akun sudah dilakukan';
$lang['auth.group_name_exists'] = 'Nama grup sudah digunakan';
$lang['auth.privilege_name_exists'] = 'Nama hak akses sudah digunakan';

//Other errors
$lang['auth.invalid_args'] = 'Parameter yang diterima fungsi %s tidak sesuai';
$lang['auth.user_banned'] = 'Batas percobaan login melampaui batas. Mohon tunggu beberapa saat';

//Email title
$lang['auth.password_reset_email_subject'] = 'Password Reset';
$lang['auth.email_verification_email_subject'] = 'Verifikasi Email';
$lang['auth.email_unavailable'] = 'Email tidak dikenal';