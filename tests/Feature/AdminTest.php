<?php

namespace Tests\Feature;

use App\Models\ContactInquiry;
use App\Models\DonationRecord;
use App\Models\ProductInquiry;
use App\Models\Setting;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class AdminTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();

        // Seed default admin user
        User::create([
            'name' => 'Universal Peace Council Admin',
            'email' => 'upc@gmail.com',
            'password' => Hash::make('Justice'),
        ]);

        // Seed default settings row
        Setting::create([
            'id' => 1,
            'razorpay_key' => 'rzp_test_39f70d21f475',
            'razorpay_secret' => 'sec_test_3422d0a72a1c',
            'is_enabled' => false,
        ]);
    }

    public function test_guest_cannot_access_admin_dashboard()
    {
        $response = $this->get(route('admin.dashboard'));
        $response->assertRedirect(route('admin.login'));
    }

    public function test_admin_can_login_with_correct_credentials()
    {
        $response = $this->post(route('admin.login.submit'), [
            'email' => 'upc@gmail.com',
            'password' => 'Justice',
        ]);

        $response->assertRedirect(route('admin.dashboard'));
        $this->assertAuthenticated();
    }

    public function test_admin_cannot_login_with_incorrect_credentials()
    {
        $response = $this->post(route('admin.login.submit'), [
            'email' => 'upc@gmail.com',
            'password' => 'WrongPassword',
        ]);

        $response->assertSessionHasErrors('email');
        $this->assertGuest();
    }

    public function test_authenticated_admin_can_view_dashboard_data()
    {
        $admin = User::where('email', 'upc@gmail.com')->first();
        
        // Seed logs
        ContactInquiry::create([
            'name' => 'Contact Tester',
            'phone' => '1234567890',
            'email' => 'contact@test.com',
            'interest_area' => 'Volunteering',
            'message' => 'Hello',
        ]);

        DonationRecord::create([
            'cause' => 'Animal Rescue',
            'amount' => 1500,
            'payment_method' => 'Card',
            'name' => 'Donor Tester',
            'email' => 'donor@test.com',
            'phone' => '1234567890',
        ]);

        ProductInquiry::create([
            'product_name' => 'Traditional Silk Saree',
            'name' => 'Buyer Tester',
            'phone' => '1234567890',
            'email' => 'buyer@test.com',
            'message' => 'I want to buy',
        ]);

        $response = $this->actingAs($admin)
            ->get(route('admin.dashboard'));

        $response->assertStatus(200);
        $response->assertSee('Contact Tester');
        $response->assertSee('Donor Tester');
        $response->assertSee('Buyer Tester');
    }

    public function test_admin_can_update_razorpay_settings()
    {
        $admin = User::where('email', 'upc@gmail.com')->first();

        $response = $this->actingAs($admin)
            ->post(route('admin.settings.update'), [
                'razorpay_key' => 'rzp_live_newkey123',
                'razorpay_secret' => 'sec_live_secret456',
                'is_enabled' => '1',
            ]);

        $response->assertRedirect();
        $response->assertSessionHas('success');

        $setting = Setting::first();
        $this->assertEquals('rzp_live_newkey123', $setting->razorpay_key);
        $this->assertEquals('sec_live_secret456', $setting->razorpay_secret);
        $this->assertTrue((bool)$setting->is_enabled);
    }
}
