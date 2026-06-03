<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/blogs', function () {
    return view('blogs');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/cart', function () {
    return view('cart');
});

Route::get('/checkout', function () {
    return view('checkout');
});

Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');

Route::get('/blog/{slug}', function ($slug) {
    $blogs = [
        'ui-design-principles' => [
            'id' => 'ui-design-principles',
            'title' => 'UI Design Principles That Enhance User Engagement',
            'image' => 'https://images.unsplash.com/photo-1561070791-2526d30994b5?w=1200&fit=crop',
            'preview' => 'User Interface (UI) design is much more than just making a website or app look good. It is about creating an intuitive, enjoyable experience that keeps users engaged.',
            'bg_class' => 'bg-[#130d26]',
            'content' => '
                <p class="mb-6">User interface (UI) design is much more than just making a website or app look good. It\'s about creating an intuitive, enjoyable experience that keeps users engaged and drives action. Great UI design guides users effortlessly, reduces confusion, and ultimately supports business goals such as conversions, retention, and brand loyalty.</p>
                <p class="mb-8">At Aura Infotech, we believe UI design is a critical element in digital success. In this post, we\'ll explore fundamental UI design principles that enhance user engagement and help your digital products stand out.</p>
                
                <div class="space-y-8">
                    <div>
                        <h4 class="text-[18px] font-semibold text-white mb-2">1. Clarity and Simplicity</h4>
                        <p class="text-[#9ca3af] leading-relaxed">Clear and simple interfaces reduce cognitive load, making it easier for users to navigate and find what they need. Avoid clutter and unnecessary elements—focus on what matters most to the user. Use concise labels, readable fonts, and intuitive icons. When users understand your interface quickly, they\'re more likely to stay and engage rather than abandon the site or app.</p>
                    </div>
                    <div>
                        <h4 class="text-[18px] font-semibold text-white mb-2">2. Consistency</h4>
                        <p class="text-[#9ca3af] leading-relaxed">Consistency in UI elements—such as buttons, colors, typography, and spacing—creates a familiar environment that users can easily learn and predict. This builds trust and reduces errors. Maintain consistent styling across pages and platforms, and follow established design systems or guidelines (like Material Design or Apple\'s Human Interface Guidelines) to ensure uniformity.</p>
                    </div>
                    <div>
                        <h4 class="text-[18px] font-semibold text-white mb-2">3. Visual Hierarchy</h4>
                        <p class="text-[#9ca3af] leading-relaxed">Effective UI design uses visual hierarchy to guide users\' attention to the most important elements first. Use size, color contrast, spacing, and positioning strategically to highlight key actions and information. For example, a brightly colored call-to-action button placed prominently on the page will naturally draw clicks, boosting conversion rates.</p>
                    </div>
                    <div>
                        <h4 class="text-[18px] font-semibold text-white mb-2">4. Feedback and Responsiveness</h4>
                        <p class="text-[#9ca3af] leading-relaxed">Interactive elements should provide clear feedback. Buttons should show a pressed state, form fields should indicate errors or success, and loading animations reassure users that processes are running. Responsive design ensures your UI adapts seamlessly to different screen sizes and devices, providing a smooth experience whether on mobile, tablet, or desktop.</p>
                    </div>
                    <div>
                        <h4 class="text-[18px] font-semibold text-white mb-2">5. Accessibility</h4>
                        <p class="text-[#9ca3af] leading-relaxed">An accessible UI is usable by people of all abilities, including those with disabilities. This includes considerations such as keyboard navigation, screen reader support, sufficient color contrast, and text alternatives for images. Designing with accessibility in mind not only broadens your audience but also demonstrates inclusivity and social responsibility.</p>
                    </div>
                    <div>
                        <h4 class="text-[18px] font-semibold text-white mb-2">6. Minimize User Effort</h4>
                        <p class="text-[#9ca3af] leading-relaxed">Reduce the number of steps or actions required to complete tasks. Use autofill, smart defaults, and progressive disclosure (showing only necessary information upfront) to streamline user journeys. The easier and faster it is for users to achieve their goals, the higher their satisfaction and engagement.</p>
                    </div>
                    <div>
                        <h4 class="text-[18px] font-semibold text-white mb-2">7. Use of Whitespace</h4>
                        <p class="text-[#9ca3af] leading-relaxed">Whitespace (or negative space) is the empty space between elements. It improves readability, separates sections clearly, and gives the UI a clean, elegant look. Whitespace helps users focus on content without feeling overwhelmed, making the experience more pleasant and less tiring.</p>
                    </div>
                    <div>
                        <h4 class="text-[18px] font-semibold text-white mb-2">8. Emotional Design</h4>
                        <p class="text-[#9ca3af] leading-relaxed">Good UI design considers the emotional response of users. Colors, typography, imagery, and microinteractions all contribute to how users feel while interacting with your product. Design that evokes positive emotions can increase trust, brand affinity, and user loyalty.</p>
                    </div>
                </div>
            '
        ],
        'boost-ecommerce-sales' => [
            'id' => 'boost-ecommerce-sales',
            'title' => 'Boost Online Sales with Smart E-Commerce',
            'image' => 'https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?w=1200&fit=crop',
            'preview' => 'In the rapidly evolving digital marketplace, e-commerce is no longer just about setting up an online store. It\'s about crafting seamless customer journeys, personalizing interactions, and optimizing conversions.',
            'bg_class' => 'bg-[#0d1626]',
            'content' => '
                <p class="mb-6">In the rapidly evolving digital marketplace, e-commerce is no longer just about setting up an online store. It\'s about crafting seamless customer journeys, personalizing user interactions, and optimizing for conversion at every touchpoint.</p>
                <p class="mb-8">With millions of web stores worldwide, standing out requires implementing smart, modern e-commerce strategies. In this post, we will explore the key pillars of smart e-commerce that drive user engagement and skyrocket online sales.</p>
                
                <div class="space-y-8">
                    <div>
                        <h4 class="text-[18px] font-semibold text-white mb-2">1. Seamless Mobile Shopping</h4>
                        <p class="text-[#9ca3af] leading-relaxed">Over 70% of all online retail traffic comes from mobile devices. If your e-commerce site is slow, cluttered, or difficult to navigate on a phone, you are losing customers. Smart e-commerce begins with a mobile-first philosophy, ensuring fast loading speeds, simple layouts, and thumb-friendly navigation.</p>
                    </div>
                    <div>
                        <h4 class="text-[18px] font-semibold text-white mb-2">2. Single-Page One-Click Checkout</h4>
                        <p class="text-[#9ca3af] leading-relaxed">Cart abandonment is the biggest enemy of e-commerce platforms. Reduce shopping friction by eliminating multi-step checkouts. Implementing single-page checkouts, integrating digital wallets (like Apple Pay, Google Pay, and UPI), and allowing guest checkouts can improve conversion rates by up to 35%.</p>
                    </div>
                    <div>
                        <h4 class="text-[18px] font-semibold text-white mb-2">3. Personalized Product Recommendations</h4>
                        <p class="text-[#9ca3af] leading-relaxed">Leverage data analytics and user behavior patterns to display dynamic recommendations. Cross-selling related products and showing "frequently bought together" bundles based on purchase history makes the shopping experience highly intuitive and increases Average Order Value (AOV).</p>
                    </div>
                    <div>
                        <h4 class="text-[18px] font-semibold text-white mb-2">4. Immersive Product Visuals</h4>
                        <p class="text-[#9ca3af] leading-relaxed">Online shoppers cannot touch or try your products, so high-fidelity visuals are mandatory. Utilize high-resolution multi-angle photography, 360-degree product views, video demonstrations, and even interactive Augmented Reality (AR) models to bridge the physical-digital gap and build buying confidence.</p>
                    </div>
                    <div>
                        <h4 class="text-[18px] font-semibold text-white mb-2">5. High-Converting Product Descriptions</h4>
                        <p class="text-[#9ca3af] leading-relaxed">Move away from boring manufacturer specs. Write engaging, benefit-driven copy that speaks directly to your ideal customer. Address their paint points, explain how the product solves their problems, and use bulleted feature summaries to make the page highly scannable.</p>
                    </div>
                </div>
            '
        ],
        'scalable-web-solutions' => [
            'id' => 'scalable-web-solutions',
            'title' => 'The Power of Scalable Web Solutions',
            'image' => 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=1200&fit=crop',
            'preview' => 'In the fast-paced digital economy, businesses need web solutions that don\'t just perform today, but scale seamlessly as their user base and transactional demands grow exponentially.',
            'bg_class' => 'bg-[#0d2126]',
            'content' => '
                <p class="mb-6">In the fast-paced digital economy, businesses need web solutions that don\'t just perform today, but scale seamlessly as their user base and transactional demands grow exponentially tomorrow.</p>
                <p class="mb-8">Scalability is the cornerstone of modern software engineering. In this guide, we dive into how to architect, build, and deploy high-performance web systems designed to support rapid corporate growth without sacrificing speed or reliability.</p>
                
                <div class="space-y-8">
                    <div>
                        <h4 class="text-[18px] font-semibold text-white mb-2">1. Cloud-Native & Microservices Architecture</h4>
                        <p class="text-[#9ca3af] leading-relaxed">Monolithic applications become slow and difficult to maintain over time. Breaking your system down into loose, modular microservices deployed in cloud containers (like Docker & Kubernetes) allows you to scale specific components independently based on active traffic load.</p>
                    </div>
                    <div>
                        <h4 class="text-[18px] font-semibold text-white mb-2">2. Advanced Caching Strategies</h4>
                        <p class="text-[#9ca3af] leading-relaxed">Minimize direct database queries by serving frequently accessed, static data directly from super-fast in-memory stores like Redis or Memcached. Couple this with a powerful Global CDN (Content Delivery Network) to cache frontend static assets close to your users worldwide.</p>
                    </div>
                    <div>
                        <h4 class="text-[18px] font-semibold text-white mb-2">3. Database Sharding and Read Replicas</h4>
                        <p class="text-[#9ca3af] leading-relaxed">As datasets grow, standard SQL queries slow down. Implement database sharding to partition your data across multiple servers, and utilize read replicas to distribute reading traffic away from your primary write database, preventing bottlenecks during heavy loads.</p>
                    </div>
                    <div>
                        <h4 class="text-[18px] font-semibold text-white mb-2">4. Asynchronous Queue Management</h4>
                        <p class="text-[#9ca3af] leading-relaxed">Do not let time-consuming tasks (like sending verification emails, generating PDF invoices, or processing files) block the main server thread. Push these operations into robust asynchronous background workers (like RabbitMQ, Amazon SQS, or Laravel Horizon) to keep your main request loop incredibly fast.</p>
                    </div>
                </div>
            '
        ],
        'ux-matters' => [
            'id' => 'ux-matters',
            'title' => 'Why UX Design Matters for Every Business',
            'image' => 'https://images.unsplash.com/photo-1586717791821-3f44a563fa4c?w=1200&fit=crop',
            'preview' => 'In today\'s digital-first world, user experience (UX) has become a crucial success factor for businesses.',
            'bg_class' => 'bg-[#1e112a]',
            'content' => '
                <p class="mb-6">In today\'s digital-first world, user experience (UX) has become a crucial success factor for businesses. Whether you run a simple corporate website or a complex e-commerce store, the way users interact with your platform directly influences your brand image and bottom-line conversions.</p>
                <p class="mb-8">UX design focuses on understanding user behaviors, needs, and motivations to build intuitive and delightful digital paths. Here is why prioritizing UX design is one of the smartest business moves you can make.</p>
                
                <div class="space-y-8">
                    <div>
                        <h4 class="text-[18px] font-semibold text-white mb-2">1. Increases Customer Conversions</h4>
                        <p class="text-[#9ca3af] leading-relaxed">A platform that is hard to navigate frustrates visitors, driving them to abandon the site. Conversely, a smooth, intuitive layout guides users toward their goals seamlessly, converting casual visitors into paying customers.</p>
                    </div>
                    <div>
                        <h4 class="text-[18px] font-semibold text-white mb-2">2. Lowers Long-term Development Costs</h4>
                        <p class="text-[#9ca3af] leading-relaxed">Fixing a UX flaw post-launch is significantly more expensive than conducting user testing during the design phase. Proactive UX prototyping eliminates developmental revisions and saves engineering hours.</p>
                    </div>
                    <div>
                        <h4 class="text-[18px] font-semibold text-white mb-2">3. Improves Customer Retention and Loyalty</h4>
                        <p class="text-[#9ca3af] leading-relaxed">When users have an effortless, positive experience on your platform, they are more likely to return. Exceptional UX builds strong brand affinity, encouraging brand loyalty and repeat business.</p>
                    </div>
                </div>
            '
        ],
        'development-trends-2025' => [
            'id' => 'development-trends-2025',
            'title' => 'Top Web Development Trends for 2025',
            'image' => 'https://images.unsplash.com/photo-1526374965328-7f61d4dc18c5?w=1200&fit=crop',
            'preview' => 'Web development is moving fast. Discover the key frameworks, tech architectures, and trends that will shape the internet in 2025.',
            'bg_class' => 'bg-[#112a20]',
            'content' => '
                <p class="mb-6">As we charge into 2025, the web development landscape is experiencing a paradigm shift. New paradigms in performance optimization, edge computing, and artificial intelligence integration are transforming how web applications are developed, deployed, and scaled.</p>
                <p class="mb-8">Staying ahead of these technological shifts is essential for any forward-thinking digital team. Let\'s analyze the breakthrough trends driving the future of web technologies.</p>
                
                <div class="space-y-8">
                    <div>
                        <h4 class="text-[18px] font-semibold text-white mb-2">1. AI-Driven Dynamic Web Interfaces</h4>
                        <p class="text-[#9ca3af] leading-relaxed">Web apps are evolving to adapt in real-time to user preferences using edge-running ML models. In 2025, interfaces are hyper-personalized, dynamically rearranging components to match an individual\'s workflow and navigation style.</p>
                    </div>
                    <div>
                        <h4 class="text-[18px] font-semibold text-white mb-2">2. Serverless Edge Computing</h4>
                        <p class="text-[#9ca3af] leading-relaxed">Edge infrastructure allows code execution right next to the user. This drops server response latency to near-zero, rendering pages instantly and securing websites against distributed database vulnerabilities.</p>
                    </div>
                    <div>
                        <h4 class="text-[18px] font-semibold text-white mb-2">3. Advanced Web Assembly (Wasm)</h4>
                        <p class="text-[#9ca3af] leading-relaxed">Web Assembly is expanding beyond gaming and complex simulations. Teams are porting heavy core computing logic into the browser using Wasm, unlocking native desktop performance directly inside standard web pages.</p>
                    </div>
                </div>
            '
        ],
        'digital-marketing-growth' => [
            'id' => 'digital-marketing-growth',
            'title' => 'How Digital Marketing Drives Brand Growth',
            'image' => 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=1200&fit=crop',
            'preview' => 'To succeed in the modern crowded digital space, brands need a highly structured, data-driven marketing strategy.',
            'bg_class' => 'bg-[#2a1111]',
            'content' => '
                <p class="mb-6">To succeed in the modern crowded digital space, brands need a highly structured, data-driven marketing strategy. Modern digital marketing is no longer just about running ads; it\'s about building meaningful, omnichannel funnels that engage prospective clients at every stage of their buyer journey.</p>
                <p class="mb-8">Let\'s explore how a sophisticated, holistic marketing campaign drives exponential corporate growth, organic customer acquisition, and brand authority.</p>
                
                <div class="space-y-8">
                    <div>
                        <h4 class="text-[18px] font-semibold text-white mb-2">1. Data-Driven Customer Targeting</h4>
                        <p class="text-[#9ca3af] leading-relaxed">Unlike traditional media, digital channels let you target campaigns to highly granular cohorts based on intent, interest, and behavior. This ensures you spend ad dollars only on prospects likely to convert.</p>
                    </div>
                    <div>
                        <h4 class="text-[18px] font-semibold text-white mb-2">2. Search Engine Optimization (SEO) & Visibility</h4>
                        <p class="text-[#9ca3af] leading-relaxed">Organic search is the largest source of high-intent digital traffic. A structured SEO layout ranks your brand highly on search queries, capturing free, sustainable, long-term leads and brand visibility.</p>
                    </div>
                    <div>
                        <h4 class="text-[18px] font-semibold text-white mb-2">3. Content Marketing & Thought Leadership</h4>
                        <p class="text-[#9ca3af] leading-relaxed">Providing high-value educational content establishing your team\'s expertise builds profound market trust. Prospective clients choose to do business with brands they recognize as industry authorities.</p>
                    </div>
                </div>
            '
        ]
    ];

    if (!array_key_exists($slug, $blogs)) {
        abort(404);
    }

    $currentBlog = $blogs[$slug];
    
    // Select exactly 3 related blogs dynamically from the remaining ones
    $relatedBlogs = [];
    foreach ($blogs as $key => $item) {
        if ($key !== $slug) {
            $relatedBlogs[] = $item;
        }
    }
    
    $relatedBlogs = array_slice($relatedBlogs, 0, 3);

    return view('blog', [
        'blog' => $currentBlog,
        'relatedBlogs' => $relatedBlogs
    ]);
});

use App\Http\Controllers\CheckoutController;

// Checkout routes
Route::get('/checkout/select-gateway', [CheckoutController::class, 'showPaymentMethods'])->name('checkout.select-gateway');
Route::post('/checkout/process', [CheckoutController::class, 'processPayment'])->name('checkout.process');

// Razorpay routes
Route::get('/checkout/razorpay-payment/{order_id}/{razorpay_order_id}', [CheckoutController::class, 'showRazorpayPayment'])->name('checkout.razorpay-payment');
Route::post('/payment/razorpay-callback', [CheckoutController::class, 'razorpayCallback'])->name('payment.razorpay-callback');

// Success/Failed
Route::get('/payment/success', [CheckoutController::class, 'paymentSuccess'])->name('checkout.success');
Route::get('/payment/failed', [CheckoutController::class, 'paymentFailed'])->name('checkout.failed');

// Purchase routes
Route::get('/purchases', [App\Http\Controllers\PurchaseController::class, 'index'])->name('purchases');
Route::get('/purchases/{id}', [App\Http\Controllers\PurchaseController::class, 'show'])->name('purchases.show');

// Authentication routes (static pages)
Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'showLogin'])->name('login');
Route::get('/register', [App\Http\Controllers\Auth\RegisterController::class, 'showRegister'])->name('register');
Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'login'])->name('login.post');
Route::post('/register', [App\Http\Controllers\Auth\RegisterController::class, 'register'])->name('register.post');
Route::post('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');
Route::get('/logout', function () { return redirect('/'); })->name('logout.get');

// Dashboard and related pages (require authentication)
Route::middleware('auth')->group(function () {
    // Dashboard main page
    Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');

    // Courses page
    Route::get('/courses', [App\Http\Controllers\PurchaseController::class, 'myCourses'])->name('courses');

    // Profile routes
    Route::get('/profile', [ProfileController::class, 'show'])->name('profile');
    Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::post('/profile/password', [App\Http\Controllers\ProfileController::class, 'changePassword'])->name('profile.password');
});