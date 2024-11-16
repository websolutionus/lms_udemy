<?php

namespace Database\Seeders;

use App\Models\PaymentSetting;
use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $settings = array(
            array(
                "id" => 1,
                "key" => "site_name",
                "value" => "Edu Core",
                "created_at" => "2024-10-13 06:07:49",
                "updated_at" => "2024-10-13 06:11:58",
            ),
            array(
                "id" => 2,
                "key" => "default_currency",
                "value" => "USD",
                "created_at" => "2024-10-13 06:07:49",
                "updated_at" => "2024-10-13 06:11:58",
            ),
            array(
                "id" => 3,
                "key" => "currency_icon",
                "value" => "$",
                "created_at" => "2024-10-13 06:07:49",
                "updated_at" => "2024-10-13 06:11:58",
            ),
            array(
                "id" => 4,
                "key" => "phone",
                "value" => "+1 (228) 498-7767",
                "created_at" => "2024-10-13 06:09:47",
                "updated_at" => "2024-10-13 06:10:06",
            ),
            array(
                "id" => 5,
                "key" => "location",
                "value" => "Sint nostrud laboru",
                "created_at" => "2024-10-13 06:10:06",
                "updated_at" => "2024-10-13 06:10:06",
            ),
            array(
                "id" => 6,
                "key" => "commission_rate",
                "value" => "70",
                "created_at" => "2024-10-13 09:43:53",
                "updated_at" => "2024-10-13 09:43:53",
            ),
            array(
                "id" => 7,
                "key" => "receiver_email",
                "value" => "admin.support@gmail.com",
                "created_at" => "2024-10-31 04:35:32",
                "updated_at" => "2024-10-31 04:35:32",
            ),
            array(
                "id" => 8,
                "key" => "sender_email",
                "value" => "admin@gmail.com",
                "created_at" => "2024-10-31 04:35:32",
                "updated_at" => "2024-10-31 04:35:32",
            ),
            array(
                "id" => 9,
                "key" => "site_logo",
                "value" => "/uploads/educore_67308e7910a41.png",
                "created_at" => "2024-11-10 09:50:10",
                "updated_at" => "2024-11-10 10:44:09",
            ),
            array(
                "id" => 10,
                "key" => "site_footer_logo",
                "value" => "/uploads/educore_67308e7912400.png",
                "created_at" => "2024-11-10 09:50:10",
                "updated_at" => "2024-11-10 10:44:09",
            ),
            array(
                "id" => 11,
                "key" => "site_favicon",
                "value" => "/uploads/educore_67308e7912837.png",
                "created_at" => "2024-11-10 09:50:10",
                "updated_at" => "2024-11-10 10:44:09",
            ),
            array(
                "id" => 12,
                "key" => "site_breadcrumb",
                "value" => "/uploads/educore_67308e7912c27.jpg",
                "created_at" => "2024-11-10 09:50:10",
                "updated_at" => "2024-11-10 10:44:09",
            ),
            array(
                "id" => 13,
                "key" => "mail_mailer",
                "value" => "smtp",
                "created_at" => "2024-11-10 11:50:17",
                "updated_at" => "2024-11-10 11:50:49",
            ),
            array(
                "id" => 14,
                "key" => "mail_host",
                "value" => "sandbox.smtp.mailtrap.io",
                "created_at" => "2024-11-10 11:50:17",
                "updated_at" => "2024-11-10 11:50:49",
            ),
            array(
                "id" => 15,
                "key" => "mail_port",
                "value" => "2525",
                "created_at" => "2024-11-10 11:50:17",
                "updated_at" => "2024-11-10 11:50:49",
            ),
            array(
                "id" => 16,
                "key" => "mail_username",
                "value" => "e803179dfea1f5",
                "created_at" => "2024-11-10 11:50:17",
                "updated_at" => "2024-11-10 11:50:49",
            ),
            array(
                "id" => 17,
                "key" => "mail_password",
                "value" => "9a502d90071980",
                "created_at" => "2024-11-10 11:50:17",
                "updated_at" => "2024-11-10 11:50:49",
            ),
            array(
                "id" => 18,
                "key" => "mail_encryption",
                "value" => "tls",
                "created_at" => "2024-11-10 11:50:17",
                "updated_at" => "2024-11-10 11:50:49",
            ),
            array(
                "id" => 19,
                "key" => "mail_queue",
                "value" => "1",
                "created_at" => "2024-11-10 11:50:17",
                "updated_at" => "2024-11-10 11:50:17",
            ),
        );

        $payment_settings = array(
            array(
                "id" => 1,
                "key" => "paypal_mode",
                "value" => "sandbox",
                "created_at" => "2024-10-09 07:07:45",
                "updated_at" => "2024-10-09 09:49:14",
            ),
            array(
                "id" => 2,
                "key" => "paypal_client_id",
                "value" => "AUnOIw_wR15MzYo0eg87xjJ4bH2b_fsXVMtVtVZcpJVTrQC_rcStGAjyzBJK40vpaaCnYSvi1Gbf6L9f",
                "created_at" => "2024-10-09 07:07:45",
                "updated_at" => "2024-10-09 09:49:08",
            ),
            array(
                "id" => 3,
                "key" => "paypal_client_secret",
                "value" => "EPrUhxAOGPrnp_5-BkaI6UO0CQMyZ-F4ANGdm3Ye4QZofTuHjyzzJCZm3sP5hiSb4XKlUKOo-ozDddD3",
                "created_at" => "2024-10-09 07:07:45",
                "updated_at" => "2024-10-09 09:49:08",
            ),
            array(
                "id" => 4,
                "key" => "paypal_currency",
                "value" => "USD",
                "created_at" => "2024-10-09 07:07:45",
                "updated_at" => "2024-10-09 09:48:23",
            ),
            array(
                "id" => 5,
                "key" => "paypal_rate",
                "value" => "1",
                "created_at" => "2024-10-09 07:07:45",
                "updated_at" => "2024-10-09 09:47:56",
            ),
            array(
                "id" => 6,
                "key" => "paypal_app_id",
                "value" => "App_id",
                "created_at" => "2024-10-09 07:07:45",
                "updated_at" => "2024-10-09 09:49:08",
            ),
            array(
                "id" => 7,
                "key" => "stripe_status",
                "value" => "active",
                "created_at" => "2024-10-10 03:39:33",
                "updated_at" => "2024-10-10 03:39:33",
            ),
            array(
                "id" => 8,
                "key" => "stripe_currency",
                "value" => "USD",
                "created_at" => "2024-10-10 03:39:33",
                "updated_at" => "2024-10-10 03:39:33",
            ),
            array(
                "id" => 9,
                "key" => "stripe_rate",
                "value" => "1",
                "created_at" => "2024-10-10 03:39:33",
                "updated_at" => "2024-10-10 03:39:33",
            ),
            array(
                "id" => 10,
                "key" => "stripe_publishable_key",
                "value" => "pk_test_51MwNFdKW5d0gpOwDt4kj2AWwubKMI8bzSHHjNenilgX91YyHB3O3tB3yD5do2dAl8qpUCFWM6wuMqQeg12ZMnQv600sfwl8Hoq",
                "created_at" => "2024-10-10 03:39:33",
                "updated_at" => "2024-10-10 04:07:10",
            ),
            array(
                "id" => 11,
                "key" => "stripe_secret",
                "value" => "sk_test_51MwNFdKW5d0gpOwDnak9F1qPBvErrGAOHAMdWQ4wHaaWhRDhOtFRw80i8XgiOnDW0ChbYt2yhKdZbR3llR9IkStD00IEVi0Q9z",
                "created_at" => "2024-10-10 03:39:33",
                "updated_at" => "2024-10-10 04:07:10",
            ),
            array(
                "id" => 12,
                "key" => "razorpay_status",
                "value" => "active",
                "created_at" => "2024-10-10 06:37:33",
                "updated_at" => "2024-10-10 06:37:33",
            ),
            array(
                "id" => 13,
                "key" => "razorpay_currency",
                "value" => "INR",
                "created_at" => "2024-10-10 06:37:33",
                "updated_at" => "2024-10-10 06:37:33",
            ),
            array(
                "id" => 14,
                "key" => "razorpay_rate",
                "value" => "84",
                "created_at" => "2024-10-10 06:37:33",
                "updated_at" => "2024-10-10 06:37:33",
            ),
            array(
                "id" => 15,
                "key" => "razorpay_key",
                "value" => "rzp_test_cvrsy43xvBZfDT",
                "created_at" => "2024-10-10 06:37:33",
                "updated_at" => "2024-10-10 07:06:29",
            ),
            array(
                "id" => 16,
                "key" => "razorpay_secret",
                "value" => "c9AmI4C5vOfSWmZehhlns5df",
                "created_at" => "2024-10-10 06:37:33",
                "updated_at" => "2024-10-10 07:06:29",
            ),
        );
        

        Setting::insert($settings);
        PaymentSetting::insert($payment_settings);
    }
}
