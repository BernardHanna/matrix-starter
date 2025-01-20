<?php
// Get ACF fields for the section
$heading_tag = get_sub_field('heading_tag') ?: 'h2';
$heading_text = get_sub_field('heading_text') ?: 'Why Choose Us?';
$steps = get_sub_field('steps');

?>
<section class="flex flex-col items-center self-stretch px-4 py-8 bg-white lg:py-20 max-sm:px-6 lg:px-8 xxl:px-0">
  <div class="flex flex-col max-w-full text-3xl font-semibold leading-none text-black w-container">
    <<?php echo esc_html($heading_tag); ?>><?php echo esc_html($heading_text); ?></<?php echo esc_html($heading_tag); ?>>
    <div class="mt-4 bg-primary border-primary border-solid border-[3px] min-h-[3px] w-[66px]"></div>
  </div>
  <div class="flex flex-wrap gap-y-10 gap-x-5 mt-10 max-w-full w-container">
    <?php if ($steps): ?>
      <?php $counter = 1; ?>
      <?php foreach ($steps as $step): ?>
        <?php
        $step_image_id = $step['step_image'];
        $step_image_url = wp_get_attachment_url($step_image_id);
        $step_image_alt = get_post_meta($step_image_id, '_wp_attachment_image_alt', true);
        $step_title = $step['step_title'];
        $step_description = $step['step_description'];
        ?>
        <article class="flex flex-col w-full md:w-[calc(50%-10px)] min-w-[240px] max-md:max-w-full">
          <img src="<?php echo esc_url($step_image_url); ?>" alt="<?php echo esc_attr($step_image_alt); ?>" class="object-cover w-full aspect-[2.18] max-md:max-w-full" />
          <div class="flex flex-col justify-start flex-1 w-full p-10 lg:justify-center bg-neutral-100 max-md:px-5 max-md:max-w-full">
            <div class="flex flex-col w-full gap-6 md:flex-row max-md:max-w-full max-sm:justify-start">
              <div class="relative gap-1.5 self-stretch bg-primary rounded-3xl h-[48px] w-[48px] flex items-center justify-center">
                <span class="text-2xl font-semibold leading-none text-center text-white lg:text-3xl whitespace-nowrap"><?php echo $counter; ?></span>
              </div>
              <div class="flex flex-col flex-1 text-black shrink basis-0">
                <span class="text-2xl font-semibold leading-none lg:text-3xl max-md:max-w-full"><?php echo esc_html($step_title); ?></span>
                <div class="mt-4 bg-primary border-primary border-solid border-[3px] min-h-[3px] w-[66px]"></div>
                <p class="mt-4 text-lg leading-7 max-md:max-w-full"><?php echo $step_description; ?></p>
              </div>
            </div>
          </div>
        </article>
        <?php $counter++; ?>
      <?php endforeach; ?>
    <?php endif; ?>
  </div>
</section>