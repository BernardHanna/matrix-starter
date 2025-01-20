<?php
$heading_tag = get_sub_field('heading_tag') ?: 'h2';
$heading_text = get_sub_field('heading_text');
$section_bg_color = get_sub_field('section_bg_color') ?: '#E5E7EB';
$form_iframe = get_sub_field('form_iframe');
?>
<section class="flex items-start justify-center py-8 text-black lg:py-20" style="background-color: <?php echo esc_attr($section_bg_color); ?>;">
    <div class="w-full px-4 m-auto max-w-container lg:px-8 xxl:px-0">
        <div class="flex gap-10 items-start min-w-[240px]">
            <div class="flex flex-col w-full">
                <div class="text-3xl font-semibold leading-10">
                    <<?php echo esc_html($heading_tag); ?>><?php echo esc_html($heading_text); ?></<?php echo esc_html($heading_tag); ?>>
                    <div class="mt-4 bg-orange-500 border-orange-500 border-solid border-[3px] min-h-[3px] w-[66px]"></div>
                </div>
                <div class="mt-16 max-md:mt-10">
                    <?php if ($form_iframe): ?>
                        <div class="w-full">
                            <?php echo $form_iframe; ?>
                        </div>
                    <?php else: ?>
                        <form class="grid grid-cols-1 gap-6 mt-6 text-xl leading-snug">
                            <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
                                <div class="w-full">
                                    <label for="name" class="sr-only">Your Name</label>
                                    <input id="name" type="text" placeholder="Your Name*" required class="w-full p-5 bg-white min-h-[68px]" aria-required="true">
                                </div>
                                <div class="w-full">
                                    <label for="email" class="sr-only">Your Email</label>
                                    <input id="email" type="email" placeholder="Your Mail*" required class="w-full p-5 bg-white min-h-[68px]" aria-required="true">
                                </div>
                            </div>
                            <div class="grid grid-cols-1 gap-6 mt-6 md:grid-cols-2">
                                <div class="w-full">
                                    <label for="phone" class="sr-only">Phone</label>
                                    <input id="phone" type="tel" placeholder="Phone" class="w-full p-5 bg-white min-h-[68px]">
                                </div>
                                <div class="w-full">
                                    <label for="subject" class="sr-only">Subject</label>
                                    <input id="subject" type="text" placeholder="Subject" class="w-full p-5 bg-white min-h-[68px]">
                                </div>
                            </div>
                            <div class="w-full mt-6">
                                <label for="message" class="sr-only">Your Message</label>
                                <textarea id="message" placeholder="Your Message..." class="w-full px-5 pt-5 pb-24 bg-white min-h-[220px]"></textarea>
                            </div>
                            <button type="submit" class="w-full px-12 mt-6 text-base font-semibold text-white uppercase bg-primary min-h-[60px] border-2 border-[#0D783D] hover:bg-transparent hover:text-[#0D783D]">Send message</button>
                        </form>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="flex flex-col overflow-hidden text-white">
    <div
        class="flex relative flex-col justify-center items-start px-20 py-28 w-full min-h-[500px] max-md:px-5 max-md:pb-24 max-md:max-w-full"
        role="region"
        aria-label="Hero section">
        <img
            loading="lazy"
            src="https://cdn.builder.io/api/v1/image/assets/f35586c581c84ecf82b6de32c55ed39e/07618c971bd87dde3a34148a9457609347ea474fdf9dd52831841e105fce829d?apiKey=0f8c151e993440459bd06f1271f3d4d8&"
            class="absolute inset-0 object-cover size-full"
            alt="Background image showing business growth concept"
            aria-hidden="true" />
        <div class="w-full mx-auto max-w-container">
            <div
                class="flex relative flex-col p-10 mb-0 max-w-full bg-neutral-900 bg-opacity-50 w-[640px] max-md:px-5 max-md:mb-2.5"
                role="contentinfo">
                <h1 class="text-5xl tracking-tighter leading-[50px] max-md:max-w-full">
                    Grow your revenue
                    <br />
                    by finding new customers
                </h1>
                <p class="mt-2 text-xl leading-7 tracking-tight max-md:max-w-full">
                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
                    eirmod tempor invidunt ut labore et dolore magna aliquyam erat.
                </p>
            </div>
        </div>
    </div>
</section>