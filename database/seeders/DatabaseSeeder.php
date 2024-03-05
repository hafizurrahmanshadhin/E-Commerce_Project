<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\Category;
use App\Models\CustomerProfile;
use App\Models\Invoice;
use App\Models\InvoiceProduct;
use App\Models\Policy;
use App\Models\Product;
use App\Models\ProductCart;
use App\Models\ProductDetail;
use App\Models\ProductReview;
use App\Models\ProductSlider;
use App\Models\ProductWish;
use App\Models\SslcommerzAccount;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
    public function run(): void {
        Policy            :: factory()->count(5)->create();
        SslcommerzAccount :: factory()->count(5)->create();
        User              :: factory()->count(5)->create();
        CustomerProfile   :: factory()->count(5)->create();
        Brand             :: factory()->count(5)->create();
        Category          :: factory()->count(5)->create();
        Product           :: factory()->count(5)->create();
        ProductDetail     :: factory()->count(5)->create();
        ProductWish       :: factory()->count(5)->create();
        ProductCart       :: factory()->count(5)->create();
        ProductSlider     :: factory()->count(5)->create();
        ProductReview     :: factory()->count(5)->create();
        Invoice           :: factory()->count(5)->create();
        InvoiceProduct    :: factory()->count(5)->create();
    }
}
