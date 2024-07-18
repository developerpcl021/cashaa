<?php
/*
  Template Name: Earn cashaa 
*/

get_header();
$theme_path = get_stylesheet_directory_uri();
// echo $theme_path;

// globaly App icons
$app_icons = get_field('app_icons');
?>
<!-- tailwind source and confiq file -->
<script src="<?php echo $theme_path; ?>/assets/js/tailwind-local.js"></script>
<script src="<?php echo $theme_path; ?>/assets/js/tailwind.config.js"></script>
<!-- custom css -->
<link rel="stylesheet" href="<?php echo $theme_path; ?>/assets/style/main.css">
<!-- jquery cdn -->
<script src="<?php echo $theme_path; ?>/assets/js/jquery-3.6.0.min.js"></script>

<div class="bg-global">
    <header class="fixed top-0 left-0 right-0 z-[999999] bg-header">
        <nav class="flex items-center justify-between px-4 mx-auto max-2xl:max-w-[1240px] max-w-[1440px] relative z-50 py-6 md:py-9" aria-label="Global">
            <div class="flex">
                <a href="/">
                    <span class="sr-only">Your Company</span>
                    <img src="<?php echo $theme_path; ?>/assets/image/svg/cashaa-logo.svg" alt="cashaa-logo" class="w-full h-full object-contain max-w-[104px] md:max-w-[172px]" width="100" height="100" loading="lazy">
                </a>
            </div>
            <div class="flex items-center gap-4 md:gap-8 lg:justify-end">
                <a href="#Home" class="xl:hidden font-dmsans font-bold text-md text-white duration-200 border-solid border-b-4 border-clickable">Home</a>
                <a href="#" class="bg-clickable px-3 md:px-10 py-2.5 md:py-4 font-dmsans font-bold text-sm md:text-lg text-white hover:bg-transparent duration-200 border-solid border border-clickable">Get
                    Started</a>
                <a href="#" class="hidden lg:block text-sm font-semibold leading-6 text-white">
                    <img src="<?php echo $theme_path; ?>/assets/image/svg/Playstore.svg" alt="Playstore" class="w-full h-full max-w-[46px]" width="100" height="100" loading="lazy">
                </a>
            </div>
        </nav>
    </header>

    <?php
    $hero_section = get_field('hero_section');
    if ($hero_section) :
        $light_heading = esc_html($hero_section['light_heading']);
        $highlight_heading = esc_html($hero_section['highlight_heading']);
        $bold_heading = esc_html($hero_section['bold_heading']);
        $paragraph_text = esc_html($hero_section['paragraph_text']);
        $bullets_pointers = $hero_section['bullets_pointer'];
        $button = $hero_section['button'];
        // right_side_hero_image
        $right_side_hero_image = $hero_section['right_side_hero_image'];
        // label image
        $bottom_label_image = $hero_section['bottom_label_image'];
    ?>
        <div class="relative">
            <div class="min-h-screen px-4 mx-auto max-2xl:max-w-[1240px] max-w-[1440px] relative z-50 max-sm:pt-48 max-xl:pt-44 py-32 relative z-50 flex">
                <div class="flex flex-col xl:flex-row items-center gap-10 grow">
                    <div class="xl:w-7/12 lg:pt-8 space-y-8">
                        <?php if ($light_heading || $highlight_heading || $bold_heading) { ?>
                            <h1 class="font-dmsans text-[60px] sm:text-[95px] font-extralight text-white leading-none tracking-[1px] max-sm:w-3/4 max-sm:text-center max-sm:mx-auto">
                                <?php echo $light_heading; ?>
                                <p class="font-bold">
                                    <span class="relative"><?php echo $highlight_heading; ?>

                                        <!-- bottom curve line -->
                                        <span class="absolute bottom-0 left-0 z-[-1] -translate-x-[10px] translate-y-[-8px]">
                                            <img src="<?php echo $theme_path; ?>/assets/image/svg/below-liner.svg" alt="below-liner" class="w-full h-full max-w-[220px]" width="100" height="100" loading="lazy">
                                        </span>
                                    </span>

                                    <?php echo $bold_heading; ?>
                                </p>
                            </h1>
                        <?php } ?>
                        <p class="font-dmsans font-normal text-sm md:text-lg text-white max-sm:w-3/4 max-sm:text-center max-sm:mx-auto">
                            <?php echo $paragraph_text; ?>
                        </p>
                        <?php if ($bullets_pointers) { ?>
                            <div class="grid grid-cols-2 gap-3 laptop:w-4/5">
                                <?php
                                foreach ($bullets_pointers as $bullets_pointer) { ?>
                                    <div class="flex items-center gap-3">
                                        <img src="<?php echo $theme_path; ?>/assets/image/svg/blue-ticked.svg" alt="blue-ticked" class="w-full h-full max-w-[24px]" width="100" height="100" loading="lazy">
                                        <p class="font-dmsans font-normal text-[13px] md:text-lg text-white">
                                            <?php echo esc_html($bullets_pointer['pointer_text']); ?>
                                        </p>
                                    </div>
                                <?php } ?>
                            </div> <?php
                                } ?>

                        <div class="flex items-center max-sm:justify-center pt-4 gap-x-6">
                            <?php
                            if ($button) :
                                $button_url = $button['url'];
                                $button_title = $button['title'];
                                $button_target = $button['target'] ? $button['target'] : '_self'; ?>
                                <a href="<?php echo esc_url($button_url); ?>" target="<?php echo esc_attr($button_target); ?>" class="bg-clickable px-10 py-3 md:py-4 text-sm md:text-lg font-bold text-white hover:bg-transparent duration-200 border-solid border border-clickable max-sm:flex-1 text-center flex items-center gap-3">
                                    <?php echo esc_html($button_title); ?>

                                    <span>
                                        <svg width="10" height="15" viewBox="0 0 10 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M0.941521 0.787839C1.5245 0.211729 2.46413 0.2173 3.04024 0.800282L8.74206 6.57012C9.02266 6.85406 9.17703 7.23908 9.17032 7.63822C9.1636 8.03736 8.99637 8.41697 8.70638 8.69131L3.00456 14.0855C2.40916 14.6488 1.46988 14.6228 0.906605 14.0274C0.343331 13.432 0.36937 12.4927 0.964764 11.9294L5.56478 7.57756L0.929078 2.88656C0.352968 2.30358 0.358539 1.36395 0.941521 0.787839Z" fill="white" />
                                        </svg>

                                    </span>
                                </a>
                            <?php endif; ?>

                            <?php if ($app_icons) {
                                foreach ($app_icons as $app_icon) {
                                    $app_url = $app_icon['app_url'];
                                    $image = $app_icon['image'];
                            ?>
                                    <a href="<?php echo $app_url; ?>" target="_blank" class="text-sm font-semibold leading-6 text-white">
                                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="w-full h-full max-w-[24px]" width="100" height="100" loading="lazy">
                                    </a>
                                <?php } ?>
                            <?php } ?>
                        </div>
                    </div>

                    <?php if ($right_side_hero_image) { ?>
                        <!-- For right side image or any content -->
                        <div class="xl:w-5/12 min-h-[400px] relative">
                            <div class="xl:absolute top-0 left-0 z-30 laptop:scale-[1.5] 2xl:scale-[1.2]">
								<img src="<?php echo esc_url($right_side_hero_image['url']); ?>" alt="<?php echo esc_attr($right_side_hero_image['alt']); ?>" class="w-full h-full object-contain max-h-[570px]">
							</div>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <!-- right side background blob -->
            <div class="absolute z-30 top-0 right-0 translate-x-[65%] md:-translate-y-[25%]">
                <img src="<?php echo $theme_path; ?>/assets/image/svg/right-bg-illusion.svg" alt="right-bg-illusion" class="object-contain w-full h-full max-sm:scale-[1.5]" width="100" height="100" loading="lazy">
            </div>
            <!-- left side background blob -->
            <div class="absolute z-30 top-1/2 left-0 -translate-x-[72%] -translate-y-1/2">
                <img src="<?php echo $theme_path; ?>/assets/image/svg/left-bg-illusion.svg" alt="right-bg-illusion" class="object-contain w-full h-full max-sm:scale-[1.5]" width="100" height="100" loading="lazy">
            </div>
            <?php if ($bottom_label_image) { ?>
                <!-- bottom label image of cashaa -->
                <div class="mt-[-140px] relative z-50">
                    <img src="<?php echo esc_url($bottom_label_image['url']); ?>" alt="<?php echo esc_attr($bottom_label_image['alt']); ?>" class="object-contain w-full h-full" width="100" height="100" loading="lazy">
                </div>
            <?php } ?>
        </div>
    <?php endif ?>
</div>

<?php
$awards_winning = get_field('awards_winning');
if ($awards_winning) :
    $heading = $awards_winning['heading'];
    $award_images = $awards_winning['award_image'];

    // counts of user,amounts and values
    $countable_areas = $awards_winning['countable_area'];
?>
    <!-- Awards winning company -->
    <section class="bg-global py-10 md:pt-16 xl:pt-36">
        <div class="px-4 mx-auto max-2xl:max-w-[1240px] max-w-[1440px] relative z-50">
            <h2 class="font-dmsans font-extralight text-5xl md:text-main-head text-white leading-none md:max-w-[60%] lg:max-w-[40%] text-center mx-auto">
                <?php echo $heading; ?></h2>

            <?php if ($award_images) { ?>
                <!-- achieving awards -->
                <div class="grid grid-cols-2 md:grid-cols-5 gap-7 md:max-xl:gap-3 mt-8">
                    <?php
                    foreach ($award_images as $award_image) {
                        $images = $award_image['images'];
                    ?>
                        <span>
                            <img src="<?php echo esc_url($images['url']); ?>" alt="<?php echo esc_attr($images['alt']); ?>" class="w-full h-full object-contain max-w-[240px] mx-auto" width="100" height="100" loading="lazy">
                        </span>
                    <?php } ?>
                </div>
            <?php } ?>

            <?php if ($countable_areas) { ?>
                <!-- overall company reports -->
                <div class="grid md:grid-cols-2 lg:grid-cols-4 max-lg:gap-12 mt-16 w-[90%] mx-auto text-center relative">
                    <?php
                    foreach ($countable_areas as $countable_area) {
                        $number = $countable_area['number'];
                        $sub_heading = $countable_area['sub_heading'];
                    ?>
                        <div class="space-y-4">
                            <h2 class="font-dmsans font-light text-main-head text-white leading-none">
                                <?php echo $number; ?>
                            </h2>
                            <h3 class="font-dmsans font-light text-2xl text-white leading-none capitalize">
                                <?php echo $sub_heading; ?>
                            </h3>
                        </div>
                    <?php } ?>
                </div>
            <?php } ?>
        </div>
    </section>
<?php endif ?>

<?php
$earn_and_beat = get_field('earn_and_beat');
if ($earn_and_beat) :
    $heading = $earn_and_beat['heading'];
    $sub_heading = $earn_and_beat['sub_heading'];

    // counts of user,amounts and values
    $earn_tips = $earn_and_beat['earn_tips'];
?>
    <!-- Earn more and Beat Inflation -->
    <section class="bg-global relative py-10 md:py-16 xl:py-36">
        <div class="px-4 mx-auto max-2xl:max-w-[1240px] max-w-[1440px] relative z-50">
            <div class="md:w-11/12 xl:w-3/5 mx-auto">
                <h2 class="font-dmsans font-extralight text-5xl md:text-main-head text-white leading-none text-center">
                    <?php echo $heading; ?>
                </h2>
                <p class="font-dmsans font-normal text-sm md:text-lg text-white px-8 text-center mt-6">
                    <?php echo $sub_heading; ?>
                </p>

                <?php if ($earn_tips) { ?>
                    <div class="grid md:grid-cols-2 gap-5 mt-10 max-md:text-center">
                        <?php
                        foreach ($earn_tips as $earn_tip) {
                            $image = $earn_tip['image'];
                            $title = $earn_tip['title'];
                            $paragraph = $earn_tip['paragraph'];
                        ?>
                            <div class="border-solid border-2 border-white/10 p-10 xl:pr-16 bg-blurry space-y-4">
                                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="object-contain w-full h-full max-w-[52px] max-h-[60px] max-md:mx-auto" width="100" height="100" loading="lazy">
                                <h3 class="font-dmsans font-semibold text-lg md:text-xl text-white"><?php echo $title; ?></h3>
                                <h4 class="font-dmsans font-normal text-sm md:text-lg text-white">
                                    <?php echo $paragraph; ?>
                                </h4>
                            </div>
                        <?php } ?>
                    </div>
                <?php } ?>
            </div>
        </div>
        <!-- right side background blob -->
        <div class="max-md:hidden absolute z-30 top-0 right-0 translate-x-[65%] -translate-y-[25%]">
            <img src="<?php echo $theme_path; ?>/assets/image/svg/right-bg-illusion.svg" alt="right-bg-illusion" class="object-contain w-full h-full" width="100" height="100" loading="lazy">
        </div>
        <!-- left side background blob -->
        <div class="max-md:hidden absolute z-30 top-1/2 left-0 -translate-x-[72%] -translate-y-1/2">
            <img src="<?php echo $theme_path; ?>/assets/image/svg/left-bg-illusion.svg" alt="right-bg-illusion" class="object-contain w-full h-full" width="100" height="100" loading="lazy">
        </div>
    </section>
<?php endif ?>

<?php
$current_assets = get_field('current_assets');
if ($current_assets) :
    $heading = $current_assets['heading'];

    // counts of user,amounts and values
    $currency_assets = $current_assets['currency_assets'];
?>
    <!-- marquee section (Current yield on assets) -->
    <div class="bg-global relative z-50">
        <div class="max-md:px-4">
            <h2 class="font-dmsans font-extralight text-5xl md:text-main-head text-white leading-none text-center">
                <?php echo $heading; ?></h2>

            <?php if ($currency_assets) { ?>
                <div class="grid max-md:grid-cols-2 md:grid-flow-col md:auto-cols-max 2xl:auto-co ls-auto gap-4 lg:gap-5 mt-10 overflow-x-auto max-w-full" style="scrollbar-width: none;">
                    <?php
                    foreach ($currency_assets as $currency_asset) {
                        $image = $currency_asset['image'];
                        $title = $currency_asset['title'];
                        $subtitle = $currency_asset['subtitle'];
                    ?>
                        <div class="border-solid border-2 border-white/10 p-5 bg-blurry flex items-center gap-4 max-w-[200px]">
                            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="object-contain w-full h-full max-w-[52px]" width="100" height="100" loading="lazy">
                            <div>
                                <h3 class="font-dmsans font-normal text-xl text-white uppercase leading-none"><?php echo $title; ?></h3>
                                <h4 class="font-dmsans font-semibold text-sm md:text-lg text-highlighter leading-none"><?php echo $subtitle; ?></h4>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            <?php } ?>
        </div>
        <?php if ($label_image) { ?>
            <!-- bottom label image of cashaa -->
            <div class="mt-16">
                <img src="<?php echo esc_url($label_image['url']); ?>" alt="<?php echo esc_attr($label_image['alt']); ?>" class="object-contain w-full h-full" width="100" height="100" loading="lazy">
            </div>
        <?php } ?>
    </div>
<?php endif ?>


<!-- Earn Calculator -->
<section class="bg-global py-10 md:py-16 xl:py-36 relative">
    <div class="px-4 mx-auto max-2xl:max-w-[1240px] max-w-[1440px] relative z-50">
        <div class="md:w-3/5 mx-auto">
            <h2 class="font-dmsans font-extralight text-5xl md:text-main-head text-white leading-none text-center">
                Earn Calculator
            </h2>
            <p class="font-dmsans font-normal text-sm md:text-lg leading-8 text-white px-8 text-center mt-6">Select
                a Token,
                Amount, Loyalty Tier and Term to calculate your yields</p>
        </div>
        <div class="mt-12">
            <input type="checkbox" class="hidden" id="checkbox1">
            <input type="checkbox" class="hidden" id="checkbox2" checked>
            <!-- tab labels -->
            <div class="flex items-center gap-4 border border-highlighter border-solid w-fit mx-auto p-2 rounded-full">
                <label for="checkbox1" id="label1" class="p-3 px-10 font-dmsans font-bold text-sm md:text-md text-white cursor-pointer block rounded-full">Earn
                    in Kind</label>
                <label for="checkbox2" id="label2" class="p-3 px-10 font-dmsans font-bold text-sm md:text-md text-white cursor-pointer block rounded-full">Earn
                    in CAS</label>
            </div>

            <div id="content1" class="tab-content">
                <div class="grid md:grid-cols-2 lg:grid-cols-4 mt-10 border border-solid border-white/10">
                    <div class="relative p-8 border-solid max-lg:border-b last:border-b-0 md:border-r last:border-r-0 border-white/10 bg-blurry contain-popup">
                        <button id="dropdownButton" class="space-y-4 w-full">
                            <div class="flex items-center justify-between">
                                <p class="font-dmsans font-normal text-xl text-white text-left">Token</p>

                                <span>
                                    <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="12.3565" cy="12.3565" r="12.3565" fill="#3F6FF9" fill-opacity="0.1" />
                                        <path d="M7.03711 10.689L12.037 15.689L17.0371 10.689" stroke="#3F6FF9" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </span>
                            </div>
                            <div class="inline-flex items-center gap-3 w-full text-sm font-medium text-white">
                                <img id="selectedImage" src="<?php echo $theme_path; ?>/assets/image/png-jpg/assets-1.png" alt="Selected" class="w-full h-full object-contain max-w-[30px]">
                                <span>
                                    <span class="font-dmsans font-normal text-sm md:text-lg text-white block">
                                        USDT
                                    </span>
                                    <span class="font-dmsans font-bold text-md text-[#A6B0D5] block" id="selectedText">Option 1</span>
                                </span>
                            </div>
                        </button>

                        <div id="dropdownMenu" class="absolute top-full left-1/2 z-50 -translate-x-1/2 hidden w-3/4 backdrop-blur-xl bg-gradient-to-r from-white/30 to-[#14192a] dropdownButton">
                            <div class="absolute top-[20px] right-[20px] cursor-pointer" id="close-dropy">
                                <svg width="14" height="15" viewBox="0 0 14 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12.0958 2.19385L1.99915 12.2905" stroke="#3F6FF9" stroke-width="3.58122" stroke-linecap="round" />
                                    <path d="M12.0958 12.2905L1.99915 2.19392" stroke="#3F6FF9" stroke-width="3.58122" stroke-linecap="round" />
                                </svg>
                            </div>
                            <div class="p-6 py-3" role="menu" aria-orientation="vertical" aria-labelledby="dropdownButton">
                                <a href="#" class="block px-1 font-dmsans font-normal text-sm md:text-lg text-white hover:bg-[#14192a] flex items-center gap-2.5 py-3 border-solid border-b last:border-b-0 border-white/10" data-value="Option 1" data-image="<?php echo $theme_path; ?>/assets/image/png-jpg/assets-1.png">
                                    <img src="<?php echo $theme_path; ?>/assets/image/png-jpg/assets-1.png" alt="Option 1" class="w-full h-full object-contain max-w-[30px]">Option 1
                                </a>
                                <a href="#" class="block px-1 font-dmsans font-normal text-sm md:text-lg text-white hover:bg-[#14192a] flex items-center gap-2.5 py-3 border-solid border-b last:border-b-0 border-white/10" data-value="Option 2" data-image="<?php echo $theme_path; ?>/assets/image/png-jpg/assets-2.png">
                                    <img src="<?php echo $theme_path; ?>/assets/image/png-jpg/assets-2.png" alt="Option 2" class="w-full h-full object-contain max-w-[30px]">Option 2
                                </a>
                                <a href="#" class="block px-1 font-dmsans font-normal text-sm md:text-lg text-white hover:bg-[#14192a] flex items-center gap-2.5 py-3 border-solid border-b last:border-b-0 border-white/10" data-value="Option 3" data-image="<?php echo $theme_path; ?>/assets/image/png-jpg/assets-3.png">
                                    <img src="<?php echo $theme_path; ?>/assets/image/png-jpg/assets-3.png" alt="Option 3" class="w-full h-full object-contain max-w-[30px]">Option 3
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="p-8 border-solid max-lg:border-b last:border-b-0 lg:border-r last:border-r-0 border-white/10 bg-blurry contain-popup space-y-4">
                        <div class="flex items-center gap-4">
                            <p class="font-dmsans font-normal text-xl text-white text-left">Amount</p>

                            <spanm class="cursor-pointer">
                                <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.53646 5.35571V6.06405M8.53646 7.83488V11.0224M8.53646 15.2724C12.4485 15.2724 15.6198 12.1011 15.6198 8.18905C15.6198 4.27703 12.4485 1.10571 8.53646 1.10571C4.62444 1.10571 1.45312 4.27703 1.45312 8.18905C1.45312 12.1011 4.62444 15.2724 8.53646 15.2724Z" stroke="#3F6FF9" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>

                                </span>
                        </div>
                        <p class="font-dmsans font-bold text-sm md:text-lg text-white">5000.00</p>
                    </div>

                    <div class="relative p-8 border-solid max-md:border-b last:border-b-0 md:border-r last:border-r-0 border-white/10 bg-blurry contain-popup">
                        <button id="dropdownButton1" class="space-y-4 w-full">
                            <div class="flex items-center justify-between">
                                <p class="font-dmsans font-normal text-xl text-white text-left">Plan Type (CAS Stake)</p>

                                <span>
                                    <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="12.3565" cy="12.3565" r="12.3565" fill="#3F6FF9" fill-opacity="0.1" />
                                        <path d="M7.03711 10.689L12.037 15.689L17.0371 10.689" stroke="#3F6FF9" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </span>
                            </div>
                            <div class="inline-flex items-center gap-3 w-full text-sm font-medium text-white">
                                <img id="selectedImage" src="<?php echo $theme_path; ?>/assets/image/png-jpg/assets-1.png" alt="Selected" class="w-full h-full object-contain max-w-[30px]">

                                <span class="font-dmsans font-bold text-md text-[#A6B0D5] block" id="selectedText">Diamond</span>
                            </div>
                        </button>

                        <div id="dropdownMenu" class="absolute top-full left-1/2 z-50 -translate-x-1/2 hidden w-3/4 backdrop-blur-xl bg-gradient-to-r from-white/30 to-[#14192a] dropdownButton1">
                            <div class="absolute top-[20px] right-[20px] cursor-pointer" id="close-dropy">
                                <svg width="14" height="15" viewBox="0 0 14 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12.0958 2.19385L1.99915 12.2905" stroke="#3F6FF9" stroke-width="3.58122" stroke-linecap="round" />
                                    <path d="M12.0958 12.2905L1.99915 2.19392" stroke="#3F6FF9" stroke-width="3.58122" stroke-linecap="round" />
                                </svg>
                            </div>
                            <div class="p-6 py-3" role="menu" aria-orientation="vertical" aria-labelledby="dropdownButton">
                                <a href="#" class="block px-1 font-dmsans font-normal text-sm md:text-lg text-white hover:bg-[#14192a] flex items-center gap-2.5 py-3 border-solid border-b last:border-b-0 border-white/10" data-value="Base" data-image="<?php echo $theme_path; ?>/assets/image/png-jpg/assets-1.png">
                                    <img src="<?php echo $theme_path; ?>/assets/image/png-jpg/assets-1.png" alt="Base" class="w-full h-full object-contain max-w-[30px]">Base
                                </a>
                                <a href="#" class="block px-1 font-dmsans font-normal text-sm md:text-lg text-white hover:bg-[#14192a] flex items-center gap-2.5 py-3 border-solid border-b last:border-b-0 border-white/10" data-value="Silver" data-image="<?php echo $theme_path; ?>/assets/image/png-jpg/assets-2.png">
                                    <img src="<?php echo $theme_path; ?>/assets/image/png-jpg/assets-2.png" alt="Silver" class="w-full h-full object-contain max-w-[30px]">Silver
                                </a>
                                <a href="#" class="block px-1 font-dmsans font-normal text-sm md:text-lg text-white hover:bg-[#14192a] flex items-center gap-2.5 py-3 border-solid border-b last:border-b-0 border-white/10" data-value="Gold" data-image="<?php echo $theme_path; ?>/assets/image/png-jpg/assets-3.png">
                                    <img src="<?php echo $theme_path; ?>/assets/image/png-jpg/assets-3.png" alt="Gold" class="w-full h-full object-contain max-w-[30px]">Gold
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="relative p-8 border-solid max-md:border-b last:border-b-0 md:border-r last:border-r-0 border-white/10 bg-blurry contain-popup">
                        <button id="dropdownButton2" class="space-y-4 w-full">
                            <div class="flex items-center justify-between">
                                <p class="font-dmsans font-normal text-xl text-white text-left">Term 12 month term</p>

                                <span>
                                    <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="12.3565" cy="12.3565" r="12.3565" fill="#3F6FF9" fill-opacity="0.1" />
                                        <path d="M7.03711 10.689L12.037 15.689L17.0371 10.689" stroke="#3F6FF9" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </span>
                            </div>
                            <div class="inline-flex items-center gap-3 w-full text-sm font-medium text-white">
                                <img id="selectedImage" src="<?php echo $theme_path; ?>/assets/image/png-jpg/assets-1.png" alt="Selected" class="w-full h-full object-contain max-w-[30px]">
                                <span>
                                    <span class="font-dmsans font-normal text-sm md:text-lg text-white block">
                                        USDT
                                    </span>
                                    <span class="font-dmsans font-bold text-md text-[#A6B0D5] block" id="selectedText">Option 1</span>
                                </span>
                            </div>
                        </button>

                        <div id="dropdownMenu" class="absolute top-full left-1/2 z-50 -translate-x-1/2 hidden w-3/4 backdrop-blur-xl bg-gradient-to-r from-white/30 to-[#14192a] dropdownButton2">
                            <div class="absolute top-[20px] right-[20px] cursor-pointer" id="close-dropy">
                                <svg width="14" height="15" viewBox="0 0 14 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12.0958 2.19385L1.99915 12.2905" stroke="#3F6FF9" stroke-width="3.58122" stroke-linecap="round" />
                                    <path d="M12.0958 12.2905L1.99915 2.19392" stroke="#3F6FF9" stroke-width="3.58122" stroke-linecap="round" />
                                </svg>
                            </div>
                            <div class="p-6 py-3" role="menu" aria-orientation="vertical" aria-labelledby="dropdownButton">
                                <a href="#" class="block px-1 font-dmsans font-normal text-sm md:text-lg text-white hover:bg-[#14192a] flex items-center gap-2.5 py-3 border-solid border-b last:border-b-0 border-white/10" data-value="Base" data-image="<?php echo $theme_path; ?>/assets/image/png-jpg/assets-1.png">
                                    <img src="<?php echo $theme_path; ?>/assets/image/png-jpg/assets-1.png" alt="Base" class="w-full h-full object-contain max-w-[30px]">Base
                                </a>
                                <a href="#" class="block px-1 font-dmsans font-normal text-sm md:text-lg text-white hover:bg-[#14192a] flex items-center gap-2.5 py-3 border-solid border-b last:border-b-0 border-white/10" data-value="Silver" data-image="<?php echo $theme_path; ?>/assets/image/png-jpg/assets-2.png">
                                    <img src="<?php echo $theme_path; ?>/assets/image/png-jpg/assets-2.png" alt="Silver" class="w-full h-full object-contain max-w-[30px]">Silver
                                </a>
                                <a href="#" class="block px-1 font-dmsans font-normal text-sm md:text-lg text-white hover:bg-[#14192a] flex items-center gap-2.5 py-3 border-solid border-b last:border-b-0 border-white/10" data-value="Gold" data-image="<?php echo $theme_path; ?>/assets/image/png-jpg/assets-3.png">
                                    <img src="<?php echo $theme_path; ?>/assets/image/png-jpg/assets-3.png" alt="Gold" class="w-full h-full object-contain max-w-[30px]">Gold
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid md:grid-cols-2 gap-3 mt-5">
                    <div class="bg-[url(<?php echo $theme_path; ?>/assets/image/png-jpg/blogs-content-images.png)] bg-no-repeat bg-fully p-7 md:p-16 xl:px-24 md:flex flex-col justify-center items-center">
                        <div class="md:space-y-4">
                            <span class="font-dmsans font-normal text-2xl lg:text-[37px] text-highlighter">Interest
                                Income</span>
                            <h3 class="font-dmsans font-normal text-[55px] md:text-5xl xl:text-huge text-white">
                                $280.00 <span class="text-sm md:text-lg">USD</span></h3>
                            <p class="font-dmsans font-normal text-lg lg:text-[33px] text-white">paid in CAS</p>
                        </div>
                    </div>

                    <div class="space-y-3">
                        <div class="bg-[url(<?php echo $theme_path; ?>/assets/image/png-jpg/blogs-content-images.png)] bg-no-repeat bg-fully py-6 md:py-12 px-10 md:px-12 xl:px-20 flex gap-4 lg:grid lg:grid-cols-3 items-center">
                            <span>
                                <svg width="55" height="79" viewBox="0 0 55 79" fill="none" class="max-lg:max-w-[30px]" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M27.4566 55.2345C34.6974 55.2345 41.6416 52.3581 46.7615 47.2381C51.8815 42.1181 54.7579 35.1739 54.7579 27.9332C54.7579 20.6924 51.8815 13.7482 46.7615 8.62821C41.6416 3.50822 34.6974 0.631836 27.4566 0.631836C20.2158 0.631836 13.2716 3.50822 8.15164 8.62821C3.03165 13.7482 0.155273 20.6924 0.155273 27.9332C0.155273 35.1739 3.03165 42.1181 8.15164 47.2381C13.2716 52.3581 20.2158 55.2345 27.4566 55.2345ZM27.4566 16.2326C26.3489 16.2326 25.6079 17.5587 24.1258 20.2225L23.7436 20.9089C23.3224 21.6656 23.1118 22.04 22.7803 22.2896C22.4527 22.5392 22.0431 22.6328 21.228 22.8161L20.4831 22.9877C17.6047 23.639 16.1655 23.9628 15.8223 25.0626C15.4791 26.1625 16.462 27.313 18.4238 29.6063L18.9308 30.1992C19.4885 30.8505 19.7693 31.1742 19.8941 31.5798C20.0189 31.9855 19.976 32.4184 19.8941 33.2881L19.8161 34.0799C19.5197 37.1415 19.3715 38.6743 20.2685 39.3529C21.1656 40.0315 22.5112 39.4114 25.2062 38.1712L25.9004 37.8513C26.6688 37.5003 27.051 37.3209 27.4566 37.3209C27.8622 37.3209 28.2444 37.5003 29.0128 37.8513L29.707 38.1712C32.402 39.4114 33.7515 40.0315 34.6446 39.3529C35.5417 38.6743 35.3935 37.1415 35.0971 34.0799L35.0191 33.2881C34.9372 32.4184 34.8943 31.9855 35.0191 31.5798C35.1439 31.1781 35.4247 30.8505 35.9824 30.1992L36.4894 29.6063C38.4512 27.313 39.4341 26.1664 39.0909 25.0626C38.7476 23.9589 37.3085 23.639 34.4301 22.9877L33.6891 22.8161C32.8701 22.6328 32.4605 22.5431 32.129 22.2896C31.8014 22.04 31.5908 21.6656 31.1696 20.9089L30.7874 20.2225C29.3053 17.5587 28.5642 16.2326 27.4566 16.2326Z" fill="#3F6FF9" />
                                    <path d="M8.31792 55.005L6.83975 60.3951C4.39043 69.3343 3.16577 73.8039 4.79995 76.2493C5.37328 77.1074 6.14162 77.7938 7.03476 78.2501C9.57768 79.545 13.5091 77.4974 21.368 73.4022C23.9811 72.0371 25.2915 71.3585 26.68 71.2103C27.196 71.1551 27.7163 71.1551 28.2323 71.2103C29.6208 71.3585 30.9273 72.041 33.5443 73.4022C41.4032 77.4974 45.3346 79.545 47.8775 78.2501C48.7707 77.7938 49.539 77.1074 50.1123 76.2493C51.7504 73.8039 50.5219 69.3343 48.0725 60.3951L46.5944 55.005C41.1887 58.835 34.5818 61.0854 27.4561 61.0854C20.3305 61.0854 13.7275 58.835 8.31792 55.005Z" fill="#3F6FF9" />
                                </svg>

                            </span>

                            <p class="font-dmsans font-normal text-sm xl:text-rare text-white">Optimized rewards
                                p.a.</p>
                            <h4 class="font-dmsans font-semibold text-[36px] xl:text-[60px] text-white">5.20%</h4>
                        </div>
                        <div class="bg-[url(<?php echo $theme_path; ?>/assets/image/png-jpg/blogs-content-images.png)] bg-no-repeat bg-fully py-6 md:py-12 px-10 md:px-12 xl:px-20 flex gap-4 lg:grid lg:grid-cols-3 items-center">
                            <span>
                                <svg width="55" height="79" viewBox="0 0 55 79" fill="none" class="max-lg:max-w-[30px]" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M27.4566 55.2345C34.6974 55.2345 41.6416 52.3581 46.7615 47.2381C51.8815 42.1181 54.7579 35.1739 54.7579 27.9332C54.7579 20.6924 51.8815 13.7482 46.7615 8.62821C41.6416 3.50822 34.6974 0.631836 27.4566 0.631836C20.2158 0.631836 13.2716 3.50822 8.15164 8.62821C3.03165 13.7482 0.155273 20.6924 0.155273 27.9332C0.155273 35.1739 3.03165 42.1181 8.15164 47.2381C13.2716 52.3581 20.2158 55.2345 27.4566 55.2345ZM27.4566 16.2326C26.3489 16.2326 25.6079 17.5587 24.1258 20.2225L23.7436 20.9089C23.3224 21.6656 23.1118 22.04 22.7803 22.2896C22.4527 22.5392 22.0431 22.6328 21.228 22.8161L20.4831 22.9877C17.6047 23.639 16.1655 23.9628 15.8223 25.0626C15.4791 26.1625 16.462 27.313 18.4238 29.6063L18.9308 30.1992C19.4885 30.8505 19.7693 31.1742 19.8941 31.5798C20.0189 31.9855 19.976 32.4184 19.8941 33.2881L19.8161 34.0799C19.5197 37.1415 19.3715 38.6743 20.2685 39.3529C21.1656 40.0315 22.5112 39.4114 25.2062 38.1712L25.9004 37.8513C26.6688 37.5003 27.051 37.3209 27.4566 37.3209C27.8622 37.3209 28.2444 37.5003 29.0128 37.8513L29.707 38.1712C32.402 39.4114 33.7515 40.0315 34.6446 39.3529C35.5417 38.6743 35.3935 37.1415 35.0971 34.0799L35.0191 33.2881C34.9372 32.4184 34.8943 31.9855 35.0191 31.5798C35.1439 31.1781 35.4247 30.8505 35.9824 30.1992L36.4894 29.6063C38.4512 27.313 39.4341 26.1664 39.0909 25.0626C38.7476 23.9589 37.3085 23.639 34.4301 22.9877L33.6891 22.8161C32.8701 22.6328 32.4605 22.5431 32.129 22.2896C31.8014 22.04 31.5908 21.6656 31.1696 20.9089L30.7874 20.2225C29.3053 17.5587 28.5642 16.2326 27.4566 16.2326Z" fill="#3F6FF9" />
                                    <path d="M8.31792 55.005L6.83975 60.3951C4.39043 69.3343 3.16577 73.8039 4.79995 76.2493C5.37328 77.1074 6.14162 77.7938 7.03476 78.2501C9.57768 79.545 13.5091 77.4974 21.368 73.4022C23.9811 72.0371 25.2915 71.3585 26.68 71.2103C27.196 71.1551 27.7163 71.1551 28.2323 71.2103C29.6208 71.3585 30.9273 72.041 33.5443 73.4022C41.4032 77.4974 45.3346 79.545 47.8775 78.2501C48.7707 77.7938 49.539 77.1074 50.1123 76.2493C51.7504 73.8039 50.5219 69.3343 48.0725 60.3951L46.5944 55.005C41.1887 58.835 34.5818 61.0854 27.4561 61.0854C20.3305 61.0854 13.7275 58.835 8.31792 55.005Z" fill="#3F6FF9" />
                                </svg>

                            </span>

                            <p class="font-dmsans font-normal text-sm xl:text-rare text-white">Optimized rewards
                                p.a.</p>
                            <h4 class="font-dmsans font-semibold text-[36px] xl:text-[60px] text-white">5.20%</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div id="content2" class="tab-content">
                <div class="grid md:grid-cols-2 lg:grid-cols-4 mt-10 border border-solid border-white/10">
                    <div class="relative p-8 border-solid max-lg:border-b last:border-b-0 md:border-r last:border-r-0 border-white/10 bg-blurry contain-popup">
                        <button id="dropdownButton" class="space-y-4 w-full">
                            <div class="flex items-center justify-between">
                                <p class="font-dmsans font-normal text-xl text-white text-left">Token</p>

                                <span>
                                    <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="12.3565" cy="12.3565" r="12.3565" fill="#3F6FF9" fill-opacity="0.1" />
                                        <path d="M7.03711 10.689L12.037 15.689L17.0371 10.689" stroke="#3F6FF9" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </span>
                            </div>
                            <div class="inline-flex items-center gap-3 w-full text-sm font-medium text-white">
                                <img id="selectedImage" src="<?php echo $theme_path; ?>/assets/image/png-jpg/assets-1.png" alt="Selected" class="w-full h-full object-contain max-w-[30px]">
                                <span>
                                    <span class="font-dmsans font-normal text-sm md:text-lg text-white block">
                                        USDT
                                    </span>
                                    <span class="font-dmsans font-bold text-md text-[#A6B0D5] block" id="selectedText">Option 1</span>
                                </span>
                            </div>
                        </button>

                        <div id="dropdownMenu" class="absolute top-full left-1/2 z-50 -translate-x-1/2 hidden w-3/4 backdrop-blur-xl bg-gradient-to-r from-white/30 to-[#14192a] dropdownButton">
                            <div class="absolute top-[20px] right-[20px] cursor-pointer" id="close-dropy">
                                <svg width="14" height="15" viewBox="0 0 14 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12.0958 2.19385L1.99915 12.2905" stroke="#3F6FF9" stroke-width="3.58122" stroke-linecap="round" />
                                    <path d="M12.0958 12.2905L1.99915 2.19392" stroke="#3F6FF9" stroke-width="3.58122" stroke-linecap="round" />
                                </svg>
                            </div>
                            <div class="p-6 py-3" role="menu" aria-orientation="vertical" aria-labelledby="dropdownButton">
                                <a href="#" class="block px-1 font-dmsans font-normal text-sm md:text-lg text-white hover:bg-[#14192a] flex items-center gap-2.5 py-3 border-solid border-b last:border-b-0 border-white/10" data-value="Option 1" data-image="<?php echo $theme_path; ?>/assets/image/png-jpg/assets-1.png">
                                    <img src="<?php echo $theme_path; ?>/assets/image/png-jpg/assets-1.png" alt="Option 1" class="w-full h-full object-contain max-w-[30px]">Option 1
                                </a>
                                <a href="#" class="block px-1 font-dmsans font-normal text-sm md:text-lg text-white hover:bg-[#14192a] flex items-center gap-2.5 py-3 border-solid border-b last:border-b-0 border-white/10" data-value="Option 2" data-image="<?php echo $theme_path; ?>/assets/image/png-jpg/assets-2.png">
                                    <img src="<?php echo $theme_path; ?>/assets/image/png-jpg/assets-2.png" alt="Option 2" class="w-full h-full object-contain max-w-[30px]">Option 2
                                </a>
                                <a href="#" class="block px-1 font-dmsans font-normal text-sm md:text-lg text-white hover:bg-[#14192a] flex items-center gap-2.5 py-3 border-solid border-b last:border-b-0 border-white/10" data-value="Option 3" data-image="<?php echo $theme_path; ?>/assets/image/png-jpg/assets-3.png">
                                    <img src="<?php echo $theme_path; ?>/assets/image/png-jpg/assets-3.png" alt="Option 3" class="w-full h-full object-contain max-w-[30px]">Option 3
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="p-8 border-solid max-lg:border-b last:border-b-0 lg:border-r last:border-r-0 border-white/10 bg-blurry contain-popup space-y-4">
                        <div class="flex items-center gap-4">
                            <p class="font-dmsans font-normal text-xl text-white text-left">Amount</p>

                            <spanm class="cursor-pointer">
                                <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.53646 5.35571V6.06405M8.53646 7.83488V11.0224M8.53646 15.2724C12.4485 15.2724 15.6198 12.1011 15.6198 8.18905C15.6198 4.27703 12.4485 1.10571 8.53646 1.10571C4.62444 1.10571 1.45312 4.27703 1.45312 8.18905C1.45312 12.1011 4.62444 15.2724 8.53646 15.2724Z" stroke="#3F6FF9" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>

                                </span>
                        </div>
                        <p class="font-dmsans font-bold text-sm md:text-lg text-white">5000.00</p>
                    </div>

                    <div class="relative p-8 border-solid max-md:border-b last:border-b-0 md:border-r last:border-r-0 border-white/10 bg-blurry contain-popup">
                        <button id="dropdownButton1" class="space-y-4 w-full">
                            <div class="flex items-center justify-between">
                                <p class="font-dmsans font-normal text-xl text-white text-left">Plan Type (CAS Stake)</p>

                                <span>
                                    <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="12.3565" cy="12.3565" r="12.3565" fill="#3F6FF9" fill-opacity="0.1" />
                                        <path d="M7.03711 10.689L12.037 15.689L17.0371 10.689" stroke="#3F6FF9" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </span>
                            </div>
                            <div class="inline-flex items-center gap-3 w-full text-sm font-medium text-white">
                                <img id="selectedImage" src="<?php echo $theme_path; ?>/assets/image/png-jpg/assets-1.png" alt="Selected" class="w-full h-full object-contain max-w-[30px]">

                                <span class="font-dmsans font-bold text-md text-[#A6B0D5] block" id="selectedText">Diamond</span>
                            </div>
                        </button>

                        <div id="dropdownMenu" class="absolute top-full left-1/2 z-50 -translate-x-1/2 hidden w-3/4 backdrop-blur-xl bg-gradient-to-r from-white/30 to-[#14192a] dropdownButton1">
                            <div class="absolute top-[20px] right-[20px] cursor-pointer" id="close-dropy">
                                <svg width="14" height="15" viewBox="0 0 14 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12.0958 2.19385L1.99915 12.2905" stroke="#3F6FF9" stroke-width="3.58122" stroke-linecap="round" />
                                    <path d="M12.0958 12.2905L1.99915 2.19392" stroke="#3F6FF9" stroke-width="3.58122" stroke-linecap="round" />
                                </svg>
                            </div>
                            <div class="p-6 py-3" role="menu" aria-orientation="vertical" aria-labelledby="dropdownButton">
                                <a href="#" class="block px-1 font-dmsans font-normal text-sm md:text-lg text-white hover:bg-[#14192a] flex items-center gap-2.5 py-3 border-solid border-b last:border-b-0 border-white/10" data-value="Base" data-image="<?php echo $theme_path; ?>/assets/image/png-jpg/assets-1.png">
                                    <img src="<?php echo $theme_path; ?>/assets/image/png-jpg/assets-1.png" alt="Base" class="w-full h-full object-contain max-w-[30px]">Base
                                </a>
                                <a href="#" class="block px-1 font-dmsans font-normal text-sm md:text-lg text-white hover:bg-[#14192a] flex items-center gap-2.5 py-3 border-solid border-b last:border-b-0 border-white/10" data-value="Silver" data-image="<?php echo $theme_path; ?>/assets/image/png-jpg/assets-2.png">
                                    <img src="<?php echo $theme_path; ?>/assets/image/png-jpg/assets-2.png" alt="Silver" class="w-full h-full object-contain max-w-[30px]">Silver
                                </a>
                                <a href="#" class="block px-1 font-dmsans font-normal text-sm md:text-lg text-white hover:bg-[#14192a] flex items-center gap-2.5 py-3 border-solid border-b last:border-b-0 border-white/10" data-value="Gold" data-image="<?php echo $theme_path; ?>/assets/image/png-jpg/assets-3.png">
                                    <img src="<?php echo $theme_path; ?>/assets/image/png-jpg/assets-3.png" alt="Gold" class="w-full h-full object-contain max-w-[30px]">Gold
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="relative p-8 border-solid max-md:border-b last:border-b-0 md:border-r last:border-r-0 border-white/10 bg-blurry contain-popup">
                        <button id="dropdownButton2" class="space-y-4 w-full">
                            <div class="flex items-center justify-between">
                                <p class="font-dmsans font-normal text-xl text-white text-left">Term 12 month term</p>

                                <span>
                                    <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="12.3565" cy="12.3565" r="12.3565" fill="#3F6FF9" fill-opacity="0.1" />
                                        <path d="M7.03711 10.689L12.037 15.689L17.0371 10.689" stroke="#3F6FF9" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </span>
                            </div>
                            <div class="inline-flex items-center gap-3 w-full text-sm font-medium text-white">
                                <img id="selectedImage" src="<?php echo $theme_path; ?>/assets/image/png-jpg/assets-1.png" alt="Selected" class="w-full h-full object-contain max-w-[30px]">
                                <span>
                                    <span class="font-dmsans font-normal text-sm md:text-lg text-white block">
                                        USDT
                                    </span>
                                    <span class="font-dmsans font-bold text-md text-[#A6B0D5] block" id="selectedText">Option 1</span>
                                </span>
                            </div>
                        </button>

                        <div id="dropdownMenu" class="absolute top-full left-1/2 z-50 -translate-x-1/2 hidden w-3/4 backdrop-blur-xl bg-gradient-to-r from-white/30 to-[#14192a] dropdownButton2">
                            <div class="absolute top-[20px] right-[20px] cursor-pointer" id="close-dropy">
                                <svg width="14" height="15" viewBox="0 0 14 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12.0958 2.19385L1.99915 12.2905" stroke="#3F6FF9" stroke-width="3.58122" stroke-linecap="round" />
                                    <path d="M12.0958 12.2905L1.99915 2.19392" stroke="#3F6FF9" stroke-width="3.58122" stroke-linecap="round" />
                                </svg>
                            </div>
                            <div class="p-6 py-3" role="menu" aria-orientation="vertical" aria-labelledby="dropdownButton">
                                <a href="#" class="block px-1 font-dmsans font-normal text-sm md:text-lg text-white hover:bg-[#14192a] flex items-center gap-2.5 py-3 border-solid border-b last:border-b-0 border-white/10" data-value="Base" data-image="<?php echo $theme_path; ?>/assets/image/png-jpg/assets-1.png">
                                    <img src="<?php echo $theme_path; ?>/assets/image/png-jpg/assets-1.png" alt="Base" class="w-full h-full object-contain max-w-[30px]">Base
                                </a>
                                <a href="#" class="block px-1 font-dmsans font-normal text-sm md:text-lg text-white hover:bg-[#14192a] flex items-center gap-2.5 py-3 border-solid border-b last:border-b-0 border-white/10" data-value="Silver" data-image="<?php echo $theme_path; ?>/assets/image/png-jpg/assets-2.png">
                                    <img src="<?php echo $theme_path; ?>/assets/image/png-jpg/assets-2.png" alt="Silver" class="w-full h-full object-contain max-w-[30px]">Silver
                                </a>
                                <a href="#" class="block px-1 font-dmsans font-normal text-sm md:text-lg text-white hover:bg-[#14192a] flex items-center gap-2.5 py-3 border-solid border-b last:border-b-0 border-white/10" data-value="Gold" data-image="<?php echo $theme_path; ?>/assets/image/png-jpg/assets-3.png">
                                    <img src="<?php echo $theme_path; ?>/assets/image/png-jpg/assets-3.png" alt="Gold" class="w-full h-full object-contain max-w-[30px]">Gold
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid md:grid-cols-2 gap-3 mt-5">
                    <div class="bg-[url(<?php echo $theme_path; ?>/assets/image/png-jpg/blogs-content-images.png)] bg-no-repeat bg-fully py-16 px-7 md:px-16 xl:px-24 md:flex flex-col justify-center items-center">
                        <div class="md:space-y-4">
                            <span class="font-dmsans font-normal text-2xl lg:text-[37px] text-highlighter">Interest
                                Income</span>
                            <h3 class="font-dmsans font-normal text-[55px] md:text-5xl xl:text-huge text-white">
                                $260.00 <span class="text-sm md:text-lg">USD</span></h3>
                            <p class="font-dmsans font-normal text-lg lg:text-[33px] text-white">paid in CAS</p>
                        </div>
                    </div>

                    <div class="space-y-3">
                        <div class="bg-[url(<?php echo $theme_path; ?>/assets/image/png-jpg/blogs-content-images.png)] bg-no-repeat bg-fully py-6 md:py-12 px-10 md:px-12 xl:px-20 flex gap-4 lg:grid lg:grid-cols-3 items-center">
                            <span>
                                <svg width="55" height="79" viewBox="0 0 55 79" fill="none" class="max-lg:max-w-[30px]" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M27.4566 55.2345C34.6974 55.2345 41.6416 52.3581 46.7615 47.2381C51.8815 42.1181 54.7579 35.1739 54.7579 27.9332C54.7579 20.6924 51.8815 13.7482 46.7615 8.62821C41.6416 3.50822 34.6974 0.631836 27.4566 0.631836C20.2158 0.631836 13.2716 3.50822 8.15164 8.62821C3.03165 13.7482 0.155273 20.6924 0.155273 27.9332C0.155273 35.1739 3.03165 42.1181 8.15164 47.2381C13.2716 52.3581 20.2158 55.2345 27.4566 55.2345ZM27.4566 16.2326C26.3489 16.2326 25.6079 17.5587 24.1258 20.2225L23.7436 20.9089C23.3224 21.6656 23.1118 22.04 22.7803 22.2896C22.4527 22.5392 22.0431 22.6328 21.228 22.8161L20.4831 22.9877C17.6047 23.639 16.1655 23.9628 15.8223 25.0626C15.4791 26.1625 16.462 27.313 18.4238 29.6063L18.9308 30.1992C19.4885 30.8505 19.7693 31.1742 19.8941 31.5798C20.0189 31.9855 19.976 32.4184 19.8941 33.2881L19.8161 34.0799C19.5197 37.1415 19.3715 38.6743 20.2685 39.3529C21.1656 40.0315 22.5112 39.4114 25.2062 38.1712L25.9004 37.8513C26.6688 37.5003 27.051 37.3209 27.4566 37.3209C27.8622 37.3209 28.2444 37.5003 29.0128 37.8513L29.707 38.1712C32.402 39.4114 33.7515 40.0315 34.6446 39.3529C35.5417 38.6743 35.3935 37.1415 35.0971 34.0799L35.0191 33.2881C34.9372 32.4184 34.8943 31.9855 35.0191 31.5798C35.1439 31.1781 35.4247 30.8505 35.9824 30.1992L36.4894 29.6063C38.4512 27.313 39.4341 26.1664 39.0909 25.0626C38.7476 23.9589 37.3085 23.639 34.4301 22.9877L33.6891 22.8161C32.8701 22.6328 32.4605 22.5431 32.129 22.2896C31.8014 22.04 31.5908 21.6656 31.1696 20.9089L30.7874 20.2225C29.3053 17.5587 28.5642 16.2326 27.4566 16.2326Z" fill="#3F6FF9" />
                                    <path d="M8.31792 55.005L6.83975 60.3951C4.39043 69.3343 3.16577 73.8039 4.79995 76.2493C5.37328 77.1074 6.14162 77.7938 7.03476 78.2501C9.57768 79.545 13.5091 77.4974 21.368 73.4022C23.9811 72.0371 25.2915 71.3585 26.68 71.2103C27.196 71.1551 27.7163 71.1551 28.2323 71.2103C29.6208 71.3585 30.9273 72.041 33.5443 73.4022C41.4032 77.4974 45.3346 79.545 47.8775 78.2501C48.7707 77.7938 49.539 77.1074 50.1123 76.2493C51.7504 73.8039 50.5219 69.3343 48.0725 60.3951L46.5944 55.005C41.1887 58.835 34.5818 61.0854 27.4561 61.0854C20.3305 61.0854 13.7275 58.835 8.31792 55.005Z" fill="#3F6FF9" />
                                </svg>

                            </span>

                            <p class="font-dmsans font-normal text-sm xl:text-rare text-white">Optimized rewards
                                p.a.</p>
                            <h4 class="font-dmsans font-semibold text-[36px] xl:text-[60px] text-white">5.20%</h4>
                        </div>
                        <div class="bg-[url(<?php echo $theme_path; ?>/assets/image/png-jpg/blogs-content-images.png)] bg-no-repeat bg-fully py-6 md:py-12 px-10 md:px-12 xl:px-20 flex gap-4 lg:grid lg:grid-cols-3 items-center">
                            <span>
                                <svg width="55" height="79" viewBox="0 0 55 79" fill="none" class="max-lg:max-w-[30px]" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M27.4566 55.2345C34.6974 55.2345 41.6416 52.3581 46.7615 47.2381C51.8815 42.1181 54.7579 35.1739 54.7579 27.9332C54.7579 20.6924 51.8815 13.7482 46.7615 8.62821C41.6416 3.50822 34.6974 0.631836 27.4566 0.631836C20.2158 0.631836 13.2716 3.50822 8.15164 8.62821C3.03165 13.7482 0.155273 20.6924 0.155273 27.9332C0.155273 35.1739 3.03165 42.1181 8.15164 47.2381C13.2716 52.3581 20.2158 55.2345 27.4566 55.2345ZM27.4566 16.2326C26.3489 16.2326 25.6079 17.5587 24.1258 20.2225L23.7436 20.9089C23.3224 21.6656 23.1118 22.04 22.7803 22.2896C22.4527 22.5392 22.0431 22.6328 21.228 22.8161L20.4831 22.9877C17.6047 23.639 16.1655 23.9628 15.8223 25.0626C15.4791 26.1625 16.462 27.313 18.4238 29.6063L18.9308 30.1992C19.4885 30.8505 19.7693 31.1742 19.8941 31.5798C20.0189 31.9855 19.976 32.4184 19.8941 33.2881L19.8161 34.0799C19.5197 37.1415 19.3715 38.6743 20.2685 39.3529C21.1656 40.0315 22.5112 39.4114 25.2062 38.1712L25.9004 37.8513C26.6688 37.5003 27.051 37.3209 27.4566 37.3209C27.8622 37.3209 28.2444 37.5003 29.0128 37.8513L29.707 38.1712C32.402 39.4114 33.7515 40.0315 34.6446 39.3529C35.5417 38.6743 35.3935 37.1415 35.0971 34.0799L35.0191 33.2881C34.9372 32.4184 34.8943 31.9855 35.0191 31.5798C35.1439 31.1781 35.4247 30.8505 35.9824 30.1992L36.4894 29.6063C38.4512 27.313 39.4341 26.1664 39.0909 25.0626C38.7476 23.9589 37.3085 23.639 34.4301 22.9877L33.6891 22.8161C32.8701 22.6328 32.4605 22.5431 32.129 22.2896C31.8014 22.04 31.5908 21.6656 31.1696 20.9089L30.7874 20.2225C29.3053 17.5587 28.5642 16.2326 27.4566 16.2326Z" fill="#3F6FF9" />
                                    <path d="M8.31792 55.005L6.83975 60.3951C4.39043 69.3343 3.16577 73.8039 4.79995 76.2493C5.37328 77.1074 6.14162 77.7938 7.03476 78.2501C9.57768 79.545 13.5091 77.4974 21.368 73.4022C23.9811 72.0371 25.2915 71.3585 26.68 71.2103C27.196 71.1551 27.7163 71.1551 28.2323 71.2103C29.6208 71.3585 30.9273 72.041 33.5443 73.4022C41.4032 77.4974 45.3346 79.545 47.8775 78.2501C48.7707 77.7938 49.539 77.1074 50.1123 76.2493C51.7504 73.8039 50.5219 69.3343 48.0725 60.3951L46.5944 55.005C41.1887 58.835 34.5818 61.0854 27.4561 61.0854C20.3305 61.0854 13.7275 58.835 8.31792 55.005Z" fill="#3F6FF9" />
                                </svg>

                            </span>

                            <p class="font-dmsans font-normal text-sm xl:text-rare text-white">Optimized rewards
                                p.a.</p>
                            <h4 class="font-dmsans font-semibold text-[36px] xl:text-[60px] text-white">5.20%</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- right side background blob -->
    <div class="absolute z-30 top-0 right-0 translate-x-[65%] -translate-y-[25%]">
        <img src="<?php echo $theme_path; ?>/assets/image/svg/right-bg-illusion.svg" alt="right-bg-illusion" class="object-contain w-full h-full" width="100" height="100" loading="lazy">
    </div>
    <!-- left side background blob -->
    <div class="absolute z-30 top-1/2 left-0 -translate-x-[72%] -translate-y-1/2">
        <img src="<?php echo $theme_path; ?>/assets/image/svg/left-bg-illusion.svg" alt="right-bg-illusion" class="object-contain w-full h-full" width="100" height="100" loading="lazy">
    </div>
</section>


<?php
$earn_with_cashaa = get_field('earn_with_cashaa');
if ($earn_with_cashaa) :
    $heading = $earn_with_cashaa['heading'];
    $sub_heading = $earn_with_cashaa['sub_heading'];

    // counts of user,amounts and values
    $benefits = $earn_with_cashaa['benefits'];
?>
    <!-- Why Earn with Cashaa? -->
    <section class="bg-global relative py-10 md:py-16 xl:py-36">
        <div class="px-4 mx-auto max-2xl:max-w-[1240px] max-w-[1440px] relative z-50">
            <h2 class="font-dmsans font-extralight text-5xl md:text-main-head text-white leading-none text-center">
                <?php echo $heading; ?>
            </h2>
            <p class="font-dmsans font-normal text-sm md:text-lg leading-8 text-white px-8 text-center mt-6">
                <?php echo $sub_heading; ?>
            </p>
            <?php if ($benefits) { ?>
                <div class="space-y-16 lg:space-y-6">
                    <?php
                    foreach ($benefits as $benefit) {
                        $heading = $benefit['heading'];
                        $content = $benefit['content'];
                        $button = $benefit['button'];
                        // right_side_image
                        $right_side_image = $benefit['right_side_image'];
                    ?>
                        <div class="grid lg:grid-cols-2 gap-5 items-center mt-10">
                            <div class="laptop:w-3/5 space-y-6 max-xl:text-center">
                                <h3 class="font-dmsans font-extralight text-inform-head text-white leading-none"><?php echo $heading; ?></h3>
                                <h4 class="font-dmsans font-normal text-lg text-white"><?php echo $sub_heading; ?></h4>
                                <div class="max-lg:hidden flex items-center max-xl:justify-center pt-4 gap-x-6 w-max">
                                    <?php
                                    if ($button) :
                                        $button_url = $button['url'];
                                        $button_title = $button['title'];
                                        $button_target = $button['target'] ? $button['target'] : '_self'; ?>
                                        <a href="<?php echo esc_url($button_url); ?>" target="<?php echo esc_attr($button_target); ?>" class="bg-clickable px-10 py-4 text-sm md:text-lg font-bold text-white hover:bg-transparent duration-200 border-solid border border-clickable inline-block flex items-center gap-3 w-fit">
                                            <?php echo esc_html($button_title); ?>

                                            <span>
                                                <svg width="10" height="15" viewBox="0 0 10 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0.941521 0.787839C1.5245 0.211729 2.46413 0.2173 3.04024 0.800282L8.74206 6.57012C9.02266 6.85406 9.17703 7.23908 9.17032 7.63822C9.1636 8.03736 8.99637 8.41697 8.70638 8.69131L3.00456 14.0855C2.40916 14.6488 1.46988 14.6228 0.906605 14.0274C0.343331 13.432 0.36937 12.4927 0.964764 11.9294L5.56478 7.57756L0.929078 2.88656C0.352968 2.30358 0.358539 1.36395 0.941521 0.787839Z" fill="white"></path>
                                                </svg>
                                            </span>
                                        </a>
                                    <?php endif; ?>

                                    <?php if ($app_icons) {
                                        foreach ($app_icons as $app_icon) {
                                            $app_url = $app_icon['app_url'];
                                            $image = $app_icon['image'];
                                    ?>
                                            <a href="<?php echo $app_url; ?>" target="_blank" class="text-sm font-semibold leading-6 text-white">
                                                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="w-full h-full max-w-[24px]" width="100" height="100" loading="lazy">
                                            </a>
                                        <?php } ?>
                                    <?php } ?>
                                </div>
                            </div>

                            <div class="space-y-8">
                                <div>
                                    <?php if ($right_side_image) { ?>
                                        <img src="<?php echo esc_url($right_side_image['url']); ?>" alt="<?php echo esc_attr($right_side_image['alt']); ?>" class="object-contain w-full h-full md:h-[360px]" width="100" height="100" loading="lazy">
                                    <?php } ?>
                                </div>
                                <?php
                                if ($button) :
                                    $button_url = $button['url'];
                                    $button_title = $button['title'];
                                    $button_target = $button['target'] ? $button['target'] : '_self'; ?>
                                    <div class="text-center lg:hidden">
                                        <a href="<?php echo esc_url($button_url); ?>" target="<?php echo esc_attr($button_target); ?>" class="bg-clickable px-10 py-4 text-sm md:text-lg font-bold text-white hover:bg-transparent duration-200 border-solid border border-clickable inline-block">
                                            <?php echo esc_html($button_title); ?>
                                        </a>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            <?php } ?>
        </div>
        <!-- right side background blob -->
        <div class="absolute z-30 top-1/2 right-0 translate-x-[65%] -translate-y-1/2">
            <img src="<?php echo $theme_path; ?>/assets/image/svg/right-bg-illusion.svg" alt="right-bg-illusion" class="object-contain w-full h-full" width="100" height="100" loading="lazy">
        </div>
        <!-- left side background blob -->
        <div class="absolute z-30 top-1/2 left-0 -translate-x-[72%] -translate-y-[25%]">
            <img src="<?php echo $theme_path; ?>/assets/image/svg/left-bg-illusion.svg" alt="right-bg-illusion" class="object-contain w-full h-full" width="100" height="100" loading="lazy">
        </div>
    </section>
<?php endif ?>

<!-- wrap in a div because we use blob between section and footer  -->
<div class="overflow-hidden">
    <?php
    $steps_earn = get_field('steps_earn');
    if ($steps_earn) :
        $heading = $steps_earn['heading'];
        // counts of user,amounts and values
        $steps_points = $steps_earn['steps_point'];
        // bottom button
        $button = $steps_earn['button'];
    ?>
        <!-- You are 3 steps away from earning with Cashaa -->
        <section class="bg-global relative py-10 md:py-16 xl:py-36">
            <div class="px-4 mx-auto max-2xl:max-w-[1240px] max-w-[1440px] relative z-50">
                <h2 class="font-dmsans font-extralight text-5xl md:text-main-head text-white leading-none text-center xl:w-1/2 mx-auto">
                    <?php echo $heading; ?>
                </h2>
                <?php if ($steps_points) { ?>
                    <!-- steps cards -->
                    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-3 md:gap-6 xl:gap-12 mt-12 relative">
                        <?php
                        foreach ($steps_points as $steps_point) {
                            $image = $steps_point['image'];
                            $title = $steps_point['title'];
                        ?>
                            <div class="p-5 bg-[url(<?php echo $theme_path; ?>/assets/image/png-jpg/bg-blob-steps.png)] bg-no-repeat bg-fully space-y-4 md:space-y-8  relative">
                                <?php if ($image) { ?>
                                    <div>
                                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="object-contain md:object-cover object-top w-full h-full max-h-[220px] md:max-h-[310px]" width="100" height="100" loading="lazy">
                                    </div>
                                <?php } ?>
                                <h3 class="font-dmsans font-normal text-xl text-white w-4/5 md:w-3/5 mx-auto text-center relative z-50">
                                    <?php echo $title; ?></h3>
                            </div>
                        <?php } ?>
                    </div>
                <?php } ?>
                <div class="flex items-center justify-center pt-4 gap-x-6">
                    <?php
                    if ($button) :
                        $button_url = $button['url'];
                        $button_title = $button['title'];
                        $button_target = $button['target'] ? $button['target'] : '_self'; ?>
                        <a href="<?php echo esc_url($button_url); ?>" target="<?php echo esc_attr($button_target); ?>" class="bg-clickable px-12 xl:px-10 py-4 text-lg font-bold text-white hover:bg-transparent duration-200 border-solid border border-clickable inline-block flex items-center gap-3 w-fit">
                            <?php echo esc_html($button_title); ?>

                            <span>
                                <svg width="10" height="15" viewBox="0 0 10 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0.941521 0.787839C1.5245 0.211729 2.46413 0.2173 3.04024 0.800282L8.74206 6.57012C9.02266 6.85406 9.17703 7.23908 9.17032 7.63822C9.1636 8.03736 8.99637 8.41697 8.70638 8.69131L3.00456 14.0855C2.40916 14.6488 1.46988 14.6228 0.906605 14.0274C0.343331 13.432 0.36937 12.4927 0.964764 11.9294L5.56478 7.57756L0.929078 2.88656C0.352968 2.30358 0.358539 1.36395 0.941521 0.787839Z" fill="white"></path>
                                </svg>
                            </span>
                        </a>
                    <?php endif; ?>

                    <?php if ($app_icons) {
                        foreach ($app_icons as $app_icon) {
                            $app_url = $app_icon['app_url'];
                            $image = $app_icon['image'];
                    ?>
                            <a href="<?php echo $app_url; ?>" target="_blank" class="font-dmsans font-semibold text-sm leading-6 text-white max-md:hidden">
                                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="w-full h-full max-w-[24px]" width="100" height="100" loading="lazy">
                            </a>
                        <?php } ?>
                    <?php } ?>
                </div>

                <?php
                $upcoming_soon = get_field('upcoming_soon');
                if ($upcoming_soon) :
                    $heading = $upcoming_soon['heading'];
                    // counts of user,amounts and values
                    $comes_nexts = $upcoming_soon['comes_next'];
                ?>
                    <div class="mt-28">
                        <!-- Hey, this isn’t the end! See what’s next! -->
                        <h2 class="font-dmsans font-extralight text-5xl md:text-main-head text-white leading-none text-center xl:w-2/5 mx-auto">
                            <?php echo $heading; ?></h2>

                        <?php if ($comes_nexts) { ?>
                            <div class="grid md:grid-cols-2 xl:grid-cols-4 mt-10 border-solid border-2 border-white/10">
                                <?php
                                foreach ($comes_nexts as $comes_next) {
                                    $defaults_data = $comes_next['defaults_data'];
                                    $title = $defaults_data['title'];
                                    $bottom_pointer_text = $defaults_data['bottom_pointer_text'];
                                ?>
                                    <div class="p-10 border-solid border-b-2 xl:border-b-0 border-white/10 p-8 md:p-10 bg-blurry md:min-h-[510px] h-full flex flex-col justify-between items-center relative group max-md:space-y-6">
                                        <p class="font-dmsans font-normal text-unstable text-white">
                                            <?php echo $title; ?>
                                        </p>

                                        <div class="flex items-center gap-3 max-md:hidden">
                                            <img src="<?php echo $theme_path; ?>/assets/image/png-jpg/animated-mouse.png" alt="animated-mouse" class="object-contain w-full h-full max-w-[20px]" width="100" height="100" loading="lazy">
                                            <p class="font-dmsans font-normal text-xl text-[#A6B0D5]">
                                                <?php echo $bottom_pointer_text; ?></p>
                                        </div>

                                        <div class="realtive md:absolute top-0 bottom-0 left-0 right-0 bg-clickable p-4 md:p-10 invisible group-hover:visible opacity-0 group-hover:opacity-100 max-md:hidden group-hover:block duration-200 space-y-8">
                                            <div class="space-y-3">
                                                <h4 class="font-dmsans font-normal text-rare text-white">Become a Diamond Member
                                                </h4>
                                                <p class="font-dmsans font-normal text-sm md:text-lg text-white">
                                                    Become a Diamond by making sure you have 10% or more of your total portfolio
                                                    value
                                                    in
                                                    CAS token at all times.
                                                </p>
                                            </div>
                                            <!-- if double information -->
                                            <div class="space-y-3">
                                                <h4 class="font-dmsans font-normal text-rare text-white">Opt to earn interest in CAS
                                                </h4>
                                                <p class="font-dmsans font-normal text-sm md:text-lg text-white">
                                                    Earn up to 3% bonus on your yields by opting to take your interest&nbsp; and payout
                                                    in
                                                    CAS.
                                                </p>
                                            </div>

                                            <div class="md:absolute bottom-0 left-0 right-0">
                                                <a href="#Start earning" class="bg-global px-10 py-4 text-sm md:text-lg font-bold text-white hover:bg-transparent duration-200 border-solid border-2 border-global inline-block w-full text-center">Start
                                                    earning</a>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        <?php } ?>
                    </div>
                <?php endif ?>
            </div>
            <!-- right side background blob -->
            <div class="absolute z-30 top-1/2 right-0 translate-x-[65%] -translate-y-1/2">
                <img src="<?php echo $theme_path; ?>/assets/image/svg/right-bg-illusion.svg" alt="right-bg-illusion" class="object-contain w-full h-full" width="100" height="100" loading="lazy">
            </div>
            <!-- left side background blob -->
            <div class="absolute z-30 top-1/2 left-0 -translate-x-[72%] -translate-y-[25%]">
                <img src="<?php echo $theme_path; ?>/assets/image/svg/left-bg-illusion.svg" alt="right-bg-illusion" class="object-contain w-full h-full" width="100" height="100" loading="lazy">
            </div>
        </section>
    <?php endif ?>

    <!-- footer -->
    <footer aria-label="Website Footer">
        <div class="bg-global relative">
            <div class="relative z-50">
                <img src="<?php echo $theme_path; ?>/assets/image/png-jpg/label-cashaa.png" alt="label-cashaa" class="object-contain w-full h-full" width="100" height="100" loading="lazy">
            </div>
            <div class="px-4 mx-auto max-2xl:max-w-[1240px] max-w-[1440px] relative z-50 py-12">
                <h2 class="font-dmsans font-extralight text-5xl md:text-main-head text-white leading-none text-center">
                    To join the Cashaa revolution <br> leave your email address below</h2>
                <p class="font-dmsans font-normal text-sm md:text-lg leading-8 text-white xl:w-1/2 mx-auto text-center mt-6 md:mt-8">
                    All
                    or part of the services, some features
                    thereof, or some Digital Assets, are not available in certain jurisdictions, including where
                    restrictions or limitations may apply, as indicated in the relevant general terms and
                    conditions.
                </p>
                <div class="md:w-9/12 xl:w-5/12 mx-auto mt-5 md:mt-8">
                    <div class="flex items-center pt-4 gap-x-6">
                        <form action="" class="flex-1 relative">
                            <input type="email" required="" class="bg-blurry max-md:py-3 p-6 pl-16 pr-24 md:pr-36 w-full font-dmsans font-medium text-highlighter capitalize placeholder:text-highlighter placeholder:text-sm md:text-lg placeholder:font-medium placeholder:font-dmsans focus:outline-0" placeholder="Email Address">

                            <span class="absolute top-1/2 left-0 translate-x-[20px] -translate-y-1/2">
                                <svg width="27" height="21" viewBox="0 0 27 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M25.1829 0.553711H1.18286C0.917645 0.553711 0.663291 0.659068 0.475754 0.846604C0.288218 1.03414 0.182861 1.28849 0.182861 1.55371V18.5537C0.182861 19.0841 0.393575 19.5929 0.768648 19.9679C1.14372 20.343 1.65243 20.5537 2.18286 20.5537H24.1829C24.7133 20.5537 25.222 20.343 25.5971 19.9679C25.9721 19.5929 26.1829 19.0841 26.1829 18.5537V1.55371C26.1829 1.28849 26.0775 1.03414 25.89 0.846604C25.7024 0.659068 25.4481 0.553711 25.1829 0.553711ZM24.1829 18.5537H2.18286V3.82746L12.5066 13.2912C12.6911 13.4606 12.9324 13.5545 13.1829 13.5545C13.4333 13.5545 13.6746 13.4606 13.8591 13.2912L24.1829 3.82746V18.5537Z" fill="#3F6FF9"></path>
                                </svg>
                            </span>
                            <span class="absolute top-1/2 right-0 translate-x-[-10px] -translate-y-1/2">
                                <button class="bg-clickable px-4 md:px-10 py-1 md:py-3 text-lg font-medium text-white hover:bg-transparent duration-200 border-solid border border-clickable">Send
                                </button>
                            </span>
                        </form>
                        <a href="#" class="max-md:hidden">
                            <img src="<?php echo $theme_path; ?>/assets/image/svg/Apple.svg" alt="Apple" class="w-full h-full max-w-[24px]" width="100" height="100" loading="lazy">
                        </a>
                        <a href="#" class="max-md:hidden">
                            <img src="<?php echo $theme_path; ?>/assets/image/svg/Playstore.svg" alt="Playstore" class="w-full h-full max-w-[24px]" width="100" height="100" loading="lazy">
                        </a>
                    </div>

                    <div class="w-fit mx-auto mt-12 md:mt-16">
                        <a href="/">
                            <span class="sr-only">Your Company</span>
                            <img src="<?php echo $theme_path; ?>/assets/image/svg/cashaa-logo.svg" alt="cashaa-logo" class="w-full h-full object-contain max-w-[172px]" width="100" height="100" loading="lazy">
                        </a>
                    </div>
                    <hr class="my-10 border-gray-800">

                    <div class="flex items-center gap-2.5 mx-auto w-fit">
                        <div class="border-solid border-2 border-white/10 p-2.5 bg-blurry rounded-full w-10 h-10 flex items-center justify-center">
                            <img src="<?php echo $theme_path; ?>/assets/image/png-jpg/social-linkedin.png" alt="social-linkedin" class="object-contain w-full h-full" width="100" height="100" loading="lazy">
                        </div>
                        <div class="border-solid border-2 border-white/10 p-2.5 bg-blurry rounded-full w-10 h-10 flex items-center justify-center">
                            <img src="<?php echo $theme_path; ?>/assets/image/png-jpg/social-facebook.png" alt="social-facebook.png" class="object-contain w-full h-full" width="100" height="100" loading="lazy">
                        </div>
                        <div class="border-solid border-2 border-white/10 p-2.5 bg-blurry rounded-full w-10 h-10 flex items-center justify-center">
                            <img src="<?php echo $theme_path; ?>/assets/image/png-jpg/social-xx.png" alt="social-xx.png" class="object-contain w-full h-full" width="100" height="100" loading="lazy">
                        </div>
                        <div class="border-solid border-2 border-white/10 p-2.5 bg-blurry rounded-full w-10 h-10 flex items-center justify-center">
                            <img src="<?php echo $theme_path; ?>/assets/image/png-jpg/social-insta.png" alt="social-insta.png" class="object-contain w-full h-full" width="100" height="100" loading="lazy">
                        </div>
                        <div class="border-solid border-2 border-white/10 p-2.5 bg-blurry rounded-full w-10 h-10 flex items-center justify-center">
                            <img src="<?php echo $theme_path; ?>/assets/image/png-jpg/social-telegram.png" alt="social-telegram.png" class="object-contain w-full h-full" width="100" height="100" loading="lazy">
                        </div>
                    </div>

                    <div class="flex items-center gap-5 mx-auto w-fit my-6">
                        <span class="border-solid border-r-2 last:border-r-0 border-white pr-5 last:pr-0">
                            <a href="#" class="font-dmsans font-normal text-sm md:text-lg leading-none text-white border-solid border-b">
                                AML
                            </a>
                        </span>
                        <span class="border-solid border-r-2 last:border-r-0 border-white pr-5 last:pr-0">
                            <a href="#" class="font-dmsans font-normal text-sm md:text-lg leading-none text-white border-solid border-b">
                                Terms and Conditions
                            </a>
                        </span>
                        <span class="border-solid border-r-2 last:border-r-0 border-white pr-5 last:pr-0">
                            <a href="#" class="font-dmsans font-normal text-sm md:text-lg leading-none text-white border-solid border-b">
                                Privacy Policy
                            </a>
                        </span>
                    </div>
                    <p class="font-dmsans font-normal text-sm leading-none text-white text-center">Copyright 2016-
                        2024
                        Cashaa. All
                        rights reserved.</p>
                </div>
            </div>

            <!-- right side background blob -->
            <div class="absolute z-30 top-1/2 right-0 translate-x-[65%] -translate-y-1/2">
                <img src="<?php echo $theme_path; ?>/assets/image/svg/right-bg-illusion.svg" alt="right-bg-illusion" class="object-contain w-full h-full" width="100" height="100" loading="lazy">
            </div>
            <!-- left side background blob -->
            <div class="absolute z-30 top-1/2 left-0 -translate-x-[72%] -translate-y-[25%]">
                <img src="<?php echo $theme_path; ?>/assets/image/svg/left-bg-illusion.svg" alt="right-bg-illusion" class="object-contain w-full h-full" width="100" height="100" loading="lazy">
            </div>
            <!-- bottom label image of cashaa -->
            <div class="absolute z-0 top-0 left-0 -translate-y-2/3">
                <img src="<?php echo $theme_path; ?>/assets/image/png-jpg/bottom-left-blov.png" alt="label-cashaa" class="object-contain w-full h-full" width="100" height="100" loading="lazy">
            </div>
        </div>
    </footer>
</div>
<script src="<?php echo $theme_path; ?>/assets/js/main.js"></script>

<?php
get_footer();
?>