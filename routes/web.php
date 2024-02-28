<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\AdminAuth;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\front\FrontController;
use Illuminate\Support\Facades\Artisan;
use Spatie\Honeypot\ProtectAgainstSpam;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// ============================== Admin Site Routes ==================================

// \URL::forceScheme('https');

Route::get('/clear-cache', function () {
   Artisan::call('cache:clear');
   Artisan::call('route:clear');

   return "Cache cleared successfully";
});

// --------------------------------- Admin Login -------------------------------------
Route::get('admin',[AdminController::class,'login'])->name('admin/login');
Route::post('admin/do_login',[AdminController::class,'do_login'])->name('admin/do_login');
Route::post('admin/logout',[AdminController::class,'logout'])->name('admin/logout');
Route::post('admin/forgot_password',[AdminController::class,'forgot_password'])->name('admin/forgot_password');
Route::get('admin/reset-password/{admin_id}/{unique_id}',[AdminController::class,'reset_password'])->name('admin/reset-password');
Route::post('admin/do-password-reset',[AdminController::class,'do_reset_password'])->name('admin/do-password-reset');

Route::group(['prefix' => 'admin', 'middleware' => AdminAuth::class], function () {
    // Route::get('/',[AdminController::class,'login'])->name('admin');
    Route::get('dashboard',[AdminController::class,'index'])->name('admin/dashboard');
    Route::get('profile',[AdminController::class,'profile'])->name('admin/profile');
    Route::post('updateProfile',[AdminController::class,'updateProfile'])->name('admin/updateProfile');
    Route::get('social',[AdminController::class,'social'])->name('admin/social');
    Route::post('update-social-link',[AdminController::class,'update_social_link'])->name('admin/update-social-link');
    Route::post('changePassword',[AdminController::class,'changePassword'])->name('admin/changePassword');
    Route::get('logo',[AdminController::class,'logo'])->name('admin/logo');
    Route::post('do-update-logo/{logo_id}',[AdminController::class,'doUpdateLogo'])->name('admin/do-update-logo');
    Route::post('change_status/{id}/{status}/{table}/{wherecol}/{statusvariable}',[AdminController::class,'change_status'])->name('admin/change_status');
    
    // Blogs
    Route::get('blogs',[AdminController::class,'blogs'])->name('admin/blogs');
    Route::get('add_blog',[AdminController::class,'open_blog_form'])->name('admin/add_blog');
    Route::get('update_blog/{id}',[AdminController::class,'open_blog_form'])->name('admin/update_blog');
    Route::post('do_add_blog',[AdminController::class,'doAddBlog'])->name('admin/do_add_blog');
    Route::post('do_update_blog/{id}',[AdminController::class,'doUpdateBlog'])->name('admin/do_update_blog');

    // Press Release
    Route::get('press_release',[AdminController::class,'press_release'])->name('admin/press_release');
    Route::get('add_press_release',[AdminController::class,'open_press_release_form'])->name('admin/add_press_release');
    Route::get('update_press_release/{id}',[AdminController::class,'open_press_release_form'])->name('admin/update_press_release');
    Route::post('do_add_press_release',[AdminController::class,'doAddPressRelease'])->name('admin/do_add_press_release');
    Route::post('do_update_press_release/{id}',[AdminController::class,'doUpdatePressRelease'])->name('admin/do_update_press_release');

    // Case Studies
    Route::get('case_studies',[AdminController::class,'case_studies'])->name('admin/case_studies');
    Route::post('updateCaseStudyOrder',[AdminController::class,'updateCaseStudyOrder'])->name('admin/updateCaseStudyOrder');
    Route::get('add_case_studies',[AdminController::class,'open_case_studies_form'])->name('admin/add_case_studies');
    Route::get('update_case_studies/{id}',[AdminController::class,'open_case_studies_form'])->name('admin/update_case_studies');
    Route::post('do_add_case_studies',[AdminController::class,'doAddCaseStudies'])->name('admin/do_add_case_studies');
    Route::post('do_update_case_studies/{id}',[AdminController::class,'doUpdateCaseStudies'])->name('admin/do_update_case_studies');
    Route::get('view_case_studies/{id}',[AdminController::class,'viewCaseStudies'])->name('admin/view_case_studies');

    // Portfolio
    Route::get('portfolio',[AdminController::class,'portfolio'])->name('admin/portfolio');
  
    Route::get('add_project',[AdminController::class,'open_portfolio_form'])->name('admin/add_project');
    Route::get('update_project/{id}',[AdminController::class,'open_portfolio_form'])->name('admin/update_project');
    Route::post('do_add_project',[AdminController::class,'doAddPortfolio'])->name('admin/do_add_project');
    Route::post('do_update_project/{id}',[AdminController::class,'doUpdatePortfolio'])->name('admin/do_update_project');

    // Testimonials
    Route::get('testimonials',[AdminController::class,'testimonials'])->name('admin/testimonials');
    Route::get('add_testimonial',[AdminController::class,'open_testimonial_form'])->name('admin/add_testimonial');
    Route::get('update_testimonial/{id}',[AdminController::class,'open_testimonial_form'])->name('admin/update_testimonial');
    Route::post('do_add_testimonial',[AdminController::class,'doAddTestimonial'])->name('admin/do_add_testimonial');
    Route::post('do_update_testimonial/{id}',[AdminController::class,'doUpdateTestimonial'])->name('admin/do_update_testimonial');
    Route::get('view_testimonial/{id}',[AdminController::class,'viewTestimonial'])->name('admin/view_testimonial');

    Route::get('about',[AdminController::class,'about'])->name('admin/about');
    
});



// ============================== Front Site Routes ==================================

Route::get('/',[FrontController::class,'index'])->name('front/index');
// Route::get('index',[FrontController::class,'index'])->name('front/index');
Route::get('index2',[FrontController::class,'index2'])->name('front/index2');
Route::get('about',[FrontController::class,'about'])->name('front/about');
Route::get('our-process',[FrontController::class,'our_process'])->name('front/our_process');
Route::get('testimonials',[FrontController::class,'testimonials'])->name('front/testimonials');
Route::get('career',[FrontController::class,'career'])->name('front/career');

Route::get('blogs',[FrontController::class,'blog'])->name('front/blog');
Route::get('blog-detail/{slug}',[FrontController::class,'blog_details'])->name('front/blog_details');

Route::get('press-release',[FrontController::class,'press_release'])->name('front/press_release');
Route::get('press-release-detail/{slug}',[FrontController::class,'press_release_details'])->name('front/press_release_details');

Route::get('contact',[FrontController::class,'contact'])->name('front/contact');
Route::post('send_contact_mail',[FrontController::class,'sendContactMail'])->name('front/send_contact_mail');

Route::get('case-studies',[FrontController::class,'case_studies'])->name('front/case_studies');
Route::get('case-study-detail/{slug}',[FrontController::class,'case_study_details'])->name('front/case_study_details');

// Route::get('portfolio',[FrontController::class,'portfolio'])->name('front/portfolio');
// Route::get('portfolio1',[FrontController::class,'case_studies'])->name('front/portfolio1');
Route::get('portfolio',[FrontController::class,'portfolio'])->name('front/portfolio');
// Route::get('portfolio2',[FrontController::class,'case_studies2'])->name('front/portfolio2');

// --------------------------------- UI UX Design ------------------------------------
Route::get('ui-ux-design-services',[FrontController::class,'services_ui_ux_design'])->name('front/services_ui_ux_design');
Route::get('product-design-services',[FrontController::class,'services_product_design'])->name('front/services_product_design');
Route::get('web-design-services',[FrontController::class,'services_web_design'])->name('front/services_web_design');
Route::get('mobile-app-design-services',[FrontController::class,'services_mobile_app_design'])->name('front/services_mobile_app_design');
Route::get('brand-design-services',[FrontController::class,'services_brand_design'])->name('front/services_brand_design');

// ------------------------------ Web App Development ---------------------------------
Route::get('web-app-development-services',[FrontController::class,'services_web_app_development'])->name('front/services_web_app_development');
Route::get('saas-website-development-services',[FrontController::class,'services_saas_website'])->name('front/services_saas_website');
Route::get('cms-website-development-services',[FrontController::class,'services_cms_website'])->name('front/services_cms_website');
Route::get('ecommerce-website-development-services',[FrontController::class,'services_ecommerce_website'])->name('front/services_ecommerce_website');
Route::get('custom-website-development-services',[FrontController::class,'services_custom_website'])->name('front/services_custom_website');
Route::get('custom-crm-development-services',[FrontController::class,'services_custom_crm'])->name('front/services_custom_crm');

// ----------------------------- Mobile App Development ---------------------------------
Route::get('mobile-app-development-services',[FrontController::class,'services_mobile_app_development'])->name('front/services_mobile_app_development');
Route::get('native-app-development-services',[FrontController::class,'services_native_apps'])->name('front/services_native_apps');
Route::get('hybrid-app-development-services',[FrontController::class,'services_hybrid_apps'])->name('front/services_hybrid_apps');
Route::get('tv-app-development-services',[FrontController::class,'services_tv_apps'])->name('front/services_tv_apps');
Route::get('wearable-app-development-services',[FrontController::class,'services_wearable_apps'])->name('front/services_wearable_apps');
Route::get('iot-app-development-services',[FrontController::class,'services_iot_apps'])->name('front/services_iot_apps');
Route::get('ar-vr-app-development-services',[FrontController::class,'services_ar_vr_apps'])->name('front/services_ar_vr_apps');

// ------------------------------- Quality Assurance ------------------------------------
Route::get('quality-assurance-services',[FrontController::class,'services_quality_assurance'])->name('front/services_quality_assurance');
Route::get('manual-testing-services',[FrontController::class,'services_manual_testing'])->name('front/services_manual_testing');
Route::get('automation-testing-services',[FrontController::class,'services_automation_testing'])->name('front/services_automation_testing');
Route::get('user-experience-testing-services',[FrontController::class,'services_user_experience_testing'])->name('front/services_user_experience_testing');

Route::get('growth-hacking-services',[FrontController::class,'services_growth_hacking'])->name('front/services_growth_hacking');

// ------------------------------------- SEO ------------------------------------
Route::get('seo-services',[FrontController::class,'services_seo'])->name('front/services_seo');
Route::get('performance-marketing-services',[FrontController::class,'services_performance_marketing'])->name('front/services_performance_marketing');
Route::get('google-ads-services',[FrontController::class,'services_google_ads'])->name('front/services_google_ads');
Route::get('meta-ads-services',[FrontController::class,'services_meta_ads'])->name('front/services_meta_ads');

// ------------------------------- Startup Boosters ------------------------------------
Route::get('idea-consulting-services',[FrontController::class,'services_idea_consulting'])->name('front/services_idea_consulting');
Route::get('prototyping-services',[FrontController::class,'services_prototyping'])->name('front/services_prototyping');
Route::get('mvp-development-services',[FrontController::class,'services_mvp_development'])->name('front/services_mvp_development');
Route::get('product-development-services',[FrontController::class,'services_product_development'])->name('front/services_product_development');

// ------------------------------ Hire Web Developers ------------------------------------
Route::get('hire-web-developers',[FrontController::class,'offshore_hire_web_developers'])->name('front/offshore_hire_web_developers');
Route::get('hire-java-developers',[FrontController::class,'offshore_hire_java_developers'])->name('front/offshore_hire_java_developers');
Route::get('hire-python-developers',[FrontController::class,'offshore_hire_python_developers'])->name('front/offshore_hire_python_developers');
Route::get('hire-php-developers',[FrontController::class,'offshore_hire_php_developers'])->name('front/offshore_hire_php_developers');
Route::get('hire-dotnet-developers',[FrontController::class,'offshore_hire_dotnet_developers'])->name('front/offshore_hire_dotnet_developers');
Route::get('hire-ruby-on-rails-developers',[FrontController::class,'offshore_hire_ruby_on_rails_developers'])->name('front/offshore_hire_ruby_on_rails_developers');
Route::get('hire-laravel-developers',[FrontController::class,'offshore_hire_laravel_developers'])->name('front/offshore_hire_laravel_developers');
Route::get('hire-magento-developers',[FrontController::class,'offshore_hire_magento_developers'])->name('front/offshore_hire_magento_developers');
Route::get('hire-shopify-developers',[FrontController::class,'offshore_hire_shopify_developers'])->name('front/offshore_hire_shopify_developers');
Route::get('hire-wordpress-developers',[FrontController::class,'offshore_hire_wordpress_developers'])->name('front/offshore_hire_wordpress_developers');

// ------------------------------ Hire App Developers ------------------------------------
Route::get('hire-app-developers',[FrontController::class,'offshore_hire_app_developers'])->name('front/offshore_hire_app_developers');
Route::get('hire-android-developers',[FrontController::class,'offshore_hire_android_developers'])->name('front/offshore_hire_android_developers');
Route::get('hire-ios-developers',[FrontController::class,'offshore_hire_ios_developers'])->name('front/offshore_hire_ios_developers');
Route::get('hire-react-native-developers',[FrontController::class,'offshore_hire_react_native_developers'])->name('front/offshore_hire_react_native_developers');
Route::get('hire-flutter-developers',[FrontController::class,'offshore_hire_flutter_developers'])->name('front/offshore_hire_flutter_developers');

// ------------------------------ Hire Js Developers ------------------------------------
Route::get('hire-js-developers',[FrontController::class,'offshore_hire_js_developers'])->name('front/offshore_hire_js_developers');
Route::get('hire-react-js-developers',[FrontController::class,'offshore_hire_react_js_developers'])->name('front/offshore_hire_react_js_developers');
Route::get('hire-angular-js-developers',[FrontController::class,'offshore_hire_angular_js_developers'])->name('front/offshore_hire_angular_js_developers');
Route::get('hire-node-js-developers',[FrontController::class,'offshore_hire_node_js_developers'])->name('front/offshore_hire_node_js_developers');

// -------------------------- Hire Full Stack Developers ------------------------------------
Route::get('hire-full-stack-developers',[FrontController::class,'offshore_hire_fullstack_developers'])->name('front/offshore_hire_fullstack_developers');
Route::get('hire-mean-stack-developers',[FrontController::class,'offshore_hire_mean_stack_developers'])->name('front/offshore_hire_mean_stack_developers');
Route::get('hire-mern-stack-developers',[FrontController::class,'offshore_hire_mern_stack_developers'])->name('front/offshore_hire_mern_stack_developers');

// ---------------------------- Hire Other Developers ------------------------------------
Route::get('hire-ui-ux-designers',[FrontController::class,'offshore_ui_ux_designer'])->name('front/offshore_ui_ux_designer');
Route::get('hire-business-analysts',[FrontController::class,'offshore_business_analyst'])->name('front/offshore_business_analyst');
Route::get('hire-project-managers',[FrontController::class,'offshore_project_manager'])->name('front/offshore_project_manager');
Route::get('hire-blockchain-developers',[FrontController::class,'offshore_blockchain_developer'])->name('front/offshore_blockchain_developer');
Route::get('hire-salesforce-developers',[FrontController::class,'offshore_salesforce_developer'])->name('front/offshore_salesforce_developer');

// ------------------------------ Team Extension ------------------------------------
Route::get('offshore-development-center',[FrontController::class,'offshore_development_center'])->name('front/offshore_development_center');
Route::get('offshore-dedicated-teams',[FrontController::class,'offshore_dedicated_teams'])->name('front/offshore_dedicated_teams');
Route::get('offshore-staff-augmentation',[FrontController::class,'offshore_staff_augmentation'])->name('front/offshore_staff_augmentation');

// ---------------------------- (Technology) Mobile ------------------------------------
Route::get('technology-ios',[FrontController::class,'technology_ios'])->name('front/technology_ios');
Route::get('technology-android',[FrontController::class,'technology_android'])->name('front/technology_android');
Route::get('technology-flutter',[FrontController::class,'technology_flutter'])->name('front/technology_flutter');
Route::get('technology-react-native',[FrontController::class,'technology_react_native'])->name('front/technology_react_native');
Route::get('technology-iot',[FrontController::class,'technology_iot'])->name('front/technology_iot');
Route::get('technology-ar',[FrontController::class,'technology_ar'])->name('front/technology_ar');
Route::get('technology-vr',[FrontController::class,'technology_vr'])->name('front/technology_vr');

// ----------------------------- (Technology) Web -------------------------------------
Route::get('technology-java',[FrontController::class,'technology_java'])->name('front/technology_java');
Route::get('technology-php',[FrontController::class,'technology_php'])->name('front/technology_php');
Route::get('technology-python',[FrontController::class,'technology_python'])->name('front/technology_python');
Route::get('technology-ruby-on-rails',[FrontController::class,'technology_ruby_on_rails'])->name('front/technology_ruby_on_rails');
Route::get('technology-laravel',[FrontController::class,'technology_laravel'])->name('front/technology_laravel');
Route::get('technology-mean',[FrontController::class,'technology_mean'])->name('front/technology_mean');
Route::get('technology-mern',[FrontController::class,'technology_mern'])->name('front/technology_mern');
Route::get('technology-angular-js',[FrontController::class,'technology_angular_js'])->name('front/technology_angular_js');
Route::get('technology-react-js',[FrontController::class,'technology_react_js'])->name('front/technology_react_js');
Route::get('technology-shopify',[FrontController::class,'technology_shopify'])->name('front/technology_shopify');
Route::get('technology-wordpress',[FrontController::class,'technology_wordpress'])->name('front/technology_wordpress');

// ------------------------- (Technology) Cloud & Devops -------------------------------------
Route::get('technology-aws',[FrontController::class,'technology_aws'])->name('front/technology_aws');
Route::get('technology-azure',[FrontController::class,'technology_azure'])->name('front/technology_azure');
Route::get('technology-docker',[FrontController::class,'technology_docker'])->name('front/technology_docker');


// ------------------------------------ Food X ---------------------------------------
Route::get('foodx',[FrontController::class,'foodX'])->name('front/foodx');
Route::get('foodx2',[FrontController::class,'foodX2'])->name('front/foodx2');
// ----------------------------------- Grocer X --------------------------------------
Route::get('grocerx',[FrontController::class,'grocerX'])->name('front/grocerx');
Route::get('grocerx2',[FrontController::class,'grocerX2'])->name('front/grocerx2');
// ------------------------------------- Med X ---------------------------------------
Route::get('medx',[FrontController::class,'medX'])->name('front/medx');
Route::get('medx2',[FrontController::class,'medX2'])->name('front/medx2');


Route::get('terms',[FrontController::class,'terms'])->name('front/terms');
Route::get('privacy',[FrontController::class,'privacy'])->name('front/privacy');

Route::get('faqs',[FrontController::class,'faqs'])->name('front/faqs');

Route::get('coupons',[FrontController::class,'coupons'])->name('front/coupons');

Route::post('send-consultation-mail',[FrontController::class,'sendConsultationMail'])->name('front/send_consultation_mail');
Route::post('sendConsultationMailV2',[FrontController::class,'sendConsultationMailV2'])->name('front/sendConsultationMailV2');
Route::post('sendConsultationMailV3',[FrontController::class,'sendConsultationMailV3'])->name('front/sendConsultationMailV3');

Route::post('send-mail',[FrontController::class,'sendMail'])->name('front/send_mail');


//--------------------------------------------------Scalie Routes-------------------------------------------
// Route::get('scaliehome',[FrontController::class,'scalieHome'])->name('scalie/scalieHome');
// Route::get('scalie-become-partner',[FrontController::class,'scalieBecomePartner'])->name('scalie/scalieBecomePartner');
Route::get('step1',[FrontController::class,'hiringStep1'])->name('scalie/hiringStep1');
Route::get('step2',[FrontController::class,'hiringStep2'])->name('scalie/hiringStep2');
Route::get('thank-you',[FrontController::class,'thankyou'])->name('scalie/thankyou');
Route::get('contact-us',[FrontController::class,'contactus'])->name('scalie/contactus');

Route::post('doStep1',[FrontController::class,'doStep1'])->name('Front/doStep/1');
Route::post('doStep2',[FrontController::class,'doStep2'])->name('Front/doStep/2');


Route::get('build-team',[FrontController::class,'scalieHome'])->name('scalie/build-team');
Route::get('become-partner',[FrontController::class,'scalieBecomePartner'])->name('scalie/become-partner');



// Route::get('partner-login',[FrontController::class,'partnerLogin'])->name('scalie/partnerLogin');
// Route::get('partner-signup',[FrontController::class,'partnerSignup'])->name('scalie/partnerSignup');


Route::get('/404', function () {
    abort(404);
});


// Pages Redirect Rules For SEO
Route::redirect('/services-mobile-app-design', '/mobile-app-design-services', 301);
Route::redirect('/services-web-app-development', '/web-app-development-services', 301);
Route::redirect('/services-web-app-development-2', '/web-app-development-services', 301);
Route::redirect('/services-saas-website', '/saas-website-development-services', 301);
Route::redirect('/services-ecommerce-website', '/ecommerce-website-development-services', 301);
Route::redirect('/services-tv-apps', '/tv-app-development-services', 301);
Route::redirect('/services-quality-assurance', '/quality-assurance-services', 301);
Route::redirect('/services-idea-consulting', '/idea-consulting-services', 301);
Route::redirect('/services-mvp-development', '/mvp-development-services', 301);
Route::redirect('/services-brand-design', '/brand-design-services', 301);

Route::redirect('/offshore-hire-app-developers', '/hire-app-developers', 301);
Route::redirect('/offshore-magento', '/hire-magento-developers', 301);
Route::redirect('/case-study/amarooms', '/case-study-detail/amarooms', 301);
Route::redirect('/services-manual-testing', '/manual-testing-services', 301);
Route::redirect('/services-growth-hacking', '/growth-hacking-services', 301);
Route::redirect('/case-study/teksmart', '/case-study-detail/teksmart', 301);
Route::redirect('/offshore-ios', '/hire-ios-developers', 301);



// Old urls to new urls redirection start
Route::redirect('/services_ui_ux_design', '/ui-ux-design-services', 301);
Route::redirect('/services_product_design', '/product-design-services', 301);
Route::redirect('/services_web_design', '/web-design-services', 301);
Route::redirect('/services_mobile_app_design', '/mobile-app-design-services', 301);
Route::redirect('/services_brand_design', '/brand-design-services', 301);
Route::redirect('/services_web_app_development', '/web-app-development-services', 301);
Route::redirect('/services_saas_website', '/saas-website-development', 301);
Route::redirect('/services_cms_website', '/cms-website-development', 301);
Route::redirect('/services_ecommerce_website', '/ecommerce-website-development', 301);
Route::redirect('/services_custom_website', '/custom-website-development', 301);
Route::redirect('/services_custom_crm', '/custom-crm-development', 301);
Route::redirect('/services_mobile_app_development', '/mobile-app-development-services', 301);
Route::redirect('/services_native_apps', '/native-app-development', 301);
Route::redirect('/services_hybrid_apps', '/hybrid-app-development', 301);
Route::redirect('/services_tv_apps', '/tv-app-development', 301);
Route::redirect('/services_wearable_apps', '/wearable-app-development', 301);
Route::redirect('/services_iot_apps', '/iot-app-development', 301);
Route::redirect('/services_ar_vr_apps', '/ar-vr-app-development', 301);
Route::redirect('/services_quality_assurance', '/quality-assurance-services', 301);
Route::redirect('/services_manual_testing', '/manual-testing-services', 301);
Route::redirect('/services_automation_testing', '/automation-testing-services', 301);
Route::redirect('/services_user_experience_testing', '/user-experience-testing-services', 301);
Route::redirect('/services_growth_hacking', '/growth-hacking-services', 301);
Route::redirect('/services_seo', '/seo-services', 301);
Route::redirect('/services_performance_marketing', '/performance-marketing-services', 301);
Route::redirect('/services_google_ads', '/google-ads-services', 301);
Route::redirect('/services_meta_ads', '/meta-ads-services', 301);
Route::redirect('/services_idea_consulting', '/idea-consulting-services', 301);
Route::redirect('/services_prototyping', '/prototyping-services', 301);
Route::redirect('/services_mvp_development', '/mvp-development-services', 301);
Route::redirect('/services_product_development', '/product-development-services', 301);

Route::redirect('/offshore_hire_web_developers', '/hire-web-developers', 301);
Route::redirect('/offshore_hire_java_developers', '/hire-java-developers', 301);
Route::redirect('/offshore_hire_python_developers', '/hire-python-developers', 301);
Route::redirect('/offshore_hire_php_developers', '/hire-php-developers', 301);
Route::redirect('/offshore_hire_dotnet_developers', '/hire-dotnet-developers', 301);
Route::redirect('/offshore_hire_ruby_on_rails_developers', '/hire-ruby-on-rails-developers', 301);
Route::redirect('/offshore_hire_laravel_developers', '/hire-laravel-developers', 301);
Route::redirect('/offshore_hire_magento_developers', '/hire-magento-developers', 301);
Route::redirect('/offshore_hire_shopify_developers', '/hire-shopify-developers', 301);
Route::redirect('/offshore_hire_wordpress_developers', '/hire-wordpress-developers', 301);
Route::redirect('/offshore_hire_app_developers', '/hire-app-developers', 301);
Route::redirect('/offshore_hire_android_developers', '/hire-android-developers', 301);
Route::redirect('/offshore_hire_ios_developers', '/hire-ios-developers', 301);
Route::redirect('/offshore_hire_react_native_developers', '/hire-react-native-developers', 301);
Route::redirect('/offshore_hire_flutter_developers', '/hire-flutter-developers', 301);
Route::redirect('/offshore_hire_js_developers', '/hire-js-developers', 301);
Route::redirect('/offshore_hire_react_js_developers', '/hire-react-js-developers', 301);
Route::redirect('/offshore_hire_angular_js_developers', '/hire-angular-js-developers', 301);
Route::redirect('/offshore_hire_node_js_developers', '/hire-node-js-developers', 301);
Route::redirect('/offshore_hire_fullstack_developers', '/hire-full-stack-developers', 301);
Route::redirect('/offshore_hire_mean_stack_developers', '/hire-mean-stack-developers', 301);
Route::redirect('/offshore_hire_mern_stack_developers', '/hire-mern-stack-developers', 301);
Route::redirect('/offshore_ui_ux_designer', '/hire-ui-ux-designers', 301);
Route::redirect('/offshore_business_analyst', '/hire-business-analysts', 301);
Route::redirect('/offshore_project_manager', '/hire-project-managers', 301);
Route::redirect('/offshore_blockchain_developer', '/hire-blockchain-developers', 301);
Route::redirect('/offshore_salesforce_developer', '/hire-salesforce-developers', 301);
Route::redirect('/offshore_development_center', '/offshore-development-center', 301);
Route::redirect('/offshore_dedicated_teams', '/offshore-dedicated-teams', 301);
Route::redirect('/offshore_staff_augmentation', '/offshore-staff-augmentation', 301);

Route::redirect('/technology_ios', '/technology-ios', 301);
Route::redirect('/technology_android', '/technology-android', 301);
Route::redirect('/technology_flutter', '/technology-flutter', 301);
Route::redirect('/technology_react_native', '/technology-react-native', 301);
Route::redirect('/technology_iot', '/technology-iot', 301);
Route::redirect('/technology_ar', '/technology-ar', 301);
Route::redirect('/technology_vr', '/technology-vr', 301);
Route::redirect('/technology_java', '/technology-java', 301);
Route::redirect('/technology_php', '/technology-php', 301);
Route::redirect('/technology_python', '/technology-python', 301);
Route::redirect('/technology_ruby_on_rails', '/technology-ruby-on-rails', 301);
Route::redirect('/technology_laravel', '/technology-laravel', 301);
Route::redirect('/technology_mean', '/technology-mean', 301);
Route::redirect('/technology_mern', '/technology-mern', 301);
Route::redirect('/technology_angular_js', '/technology-angular-js', 301);
Route::redirect('/technology_react_js', '/technology-react-js', 301);
Route::redirect('/technology_shopify', '/technology-shopify', 301);
Route::redirect('/technology_wordpress', '/technology-wordpress', 301);
Route::redirect('/technology_aws', '/technology-aws', 301);
Route::redirect('/technology_azure', '/technology-azure', 301);
Route::redirect('/technology_docker', '/technology-docker', 301);

Route::redirect('/foodX', '/foodx', 301);
Route::redirect('/grocerX', '/grocerx', 301);
Route::redirect('/medX', '/medx', 301);

Route::redirect('/services-product-development', '/product-development-services', 301);
Route::redirect('/blogs/powerful-it-tools', '/blog-detail/powerful-it-tools', 301);
Route::redirect('/offshore-project-manager', '/hire-project-managers', 301);




Route::redirect('/ui-ux-design-services', '/design-solutions', 301);
Route::redirect('/mobile-app-development-services', '/mobile-solutions', 301);
Route::redirect('/web-app-development-services', '/web-solutions', 301);
Route::redirect('/case-studies', '/portfolio', 301);


// -------------------Designowb New Urls----------------------
Route::get('design-solutions',[FrontController::class,'designSolutions'])->name('designSolutions');
Route::get('mobile-solutions',[FrontController::class,'mobileSolutions'])->name('mobileSolutions');
Route::get('web-solutions',[FrontController::class,'webSolutions'])->name('webSolutions');



Route::get('offshore-development',[FrontController::class,'offshoreDevelopment'])->name('offshoreDevelopment');
Route::get('mobile-app-developers',[FrontController::class,'mobileAppDevelopers'])->name('mobileAppDevelopers');
Route::get('frontend-developers',[FrontController::class,'frontendDevelopers'])->name('frontendDevelopers');
Route::get('backend-developers',[FrontController::class,'backendDevelopers'])->name('backendDevelopers');
Route::get('fullstack-developers',[FrontController::class,'fullstackDevelopers'])->name('fullstackDevelopers');
Route::get('javascript-developers',[FrontController::class,'javascriptDevelopers'])->name('javascriptDevelopers');
Route::get('automation-engineers',[FrontController::class,'automationEngineers'])->name('automationEngineers');
Route::get('software-architects',[FrontController::class,'softwareArchitects'])->name('softwareArchitects');
Route::get('ai-developers',[FrontController::class,'aiDevelopers'])->name('aiDevelopers');
Route::get('machine-learning-engineers',[FrontController::class,'machineLearningEngineers'])->name('machineLearningEngineers');
Route::get('blockchain-developers',[FrontController::class,'blockchainDevelopers'])->name('blockchainDevelopers');
Route::get('dev-ops-engineers',[FrontController::class,'devOpsEngineers'])->name('devOpsEngineers');
Route::get('data-engineers',[FrontController::class,'dataEngineers'])->name('dataEngineers');
Route::get('data-scientists',[FrontController::class,'dataScientists'])->name('dataScientists');
Route::get('tableau-developers',[FrontController::class,'tableauDevelopers'])->name('tableauDevelopers');
Route::get('bi-developers',[FrontController::class,'biDevelopers'])->name('biDevelopers');

Route::get('nearshore-development',[FrontController::class,'nearshoreDevelopment'])->name('nearshoreDevelopment');

Route::get('contractual_staffing',[FrontController::class,'contractualStaffing'])->name('contractualStaffing');
Route::get('leadership_hiring',[FrontController::class,'leadershipHiring'])->name('leadershipHiring');
Route::get('permanent_staffing',[FrontController::class,'permanentStaffing'])->name('permanentStaffing');
Route::get('recruitment_process_outsourcing',[FrontController::class,'recruitmentProcessOutsourcing'])->name('recruitmentProcessOutsourcing');

Route::get('metaverse',[FrontController::class,'metaverseService'])->name('front/metaverse');
Route::get('3d-product-design',[FrontController::class,'threedProductDesign'])->name('front/threedProductDesign');
Route::get('virtual-space-creation',[FrontController::class,'virtualSpaceCreation'])->name('front/virtualSpaceCreation');
Route::get('unity-solutions',[FrontController::class,'unitySolutions'])->name('front/unitySolutions');
Route::get('animations',[FrontController::class,'animations'])->name('front/animations');


Route::get('it-staffing',[FrontController::class,'itStaffing'])->name('front/it-staffing');
Route::get('team-extension',[FrontController::class,'teamExtension'])->name('front/team-extension');
Route::get('virtual-cto',[FrontController::class,'virtualCto'])->name('front/virtual-cto');
Route::get('developer-cost-optimization',[FrontController::class,'developerCostOptimization'])->name('front/developer-cost-optimization');





// Testing Routes

Route::post('send-foodx-mail',[FrontController::class,'sendFoodxMail'])->name('front/send_foodx_mail');
Route::post('send-foodx-modal-mail',[FrontController::class,'sendFoodxModalMail'])->name('front/send_foodx_modal_mail');

Route::get('send-mail-view',[FrontController::class,'sendmailview'])->name('front/sendmailview');


