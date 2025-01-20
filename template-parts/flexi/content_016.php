<?php
$background_color = get_sub_field('background_color');
$heading_tag = get_sub_field('heading_tag') ?: 'h2';
$heading_text = get_sub_field('heading_text');
$heading_color = get_sub_field('heading_color');
$main_image = get_sub_field('main_image');
$list_items = get_sub_field('list_items');
$paragraph_text = get_sub_field('paragraph_text');
$text_color = get_sub_field('text_color');
$button_link = get_sub_field('button_link');
$button_bg_color = get_sub_field('button_bg_color');
$button_text_color = get_sub_field('button_text_color');
$button_hover_bg_color = get_sub_field('button_hover_bg_color');
$button_hover_text_color = get_sub_field('button_hover_text_color');
$button_icon_toggle = get_sub_field('button_icon_toggle');
?>

<section class="relative w-full" style="background-color: <?php echo esc_attr($background_color); ?>;">
  <div class="flex flex-col-reverse items-center w-full px-5 py-20 mx-auto md:flex-row max-w-container">
    <div class="flex flex-col w-full px-20 md:w-1/2 max-md:px-5 max-md:py-8">
      <<?php echo esc_html($heading_tag); ?>
        class="text-3xl font-bold leading-none"
        style="color: <?php echo esc_attr($heading_color); ?>;">
        <?php echo esc_html($heading_text); ?>
      </<?php echo esc_html($heading_tag); ?>>
      <div class="flex mt-1 w-8 bg-orange-400 min-h-[4px]" role="presentation"></div>

      <div class="mt-4 text-base leading-6" style="color: <?php echo esc_attr($text_color); ?>;">
        <?php echo wp_kses_post($paragraph_text); ?>
      </div>

      <div class="mt-8">
        <?php if ($list_items): ?>
          <?php foreach ($list_items as $item): ?>
            <div class="flex items-center gap-4">
              <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" viewBox="0 0 8 8" fill="none">
                <circle cx="4" cy="4" r="4" fill="#025A70" />
              </svg>
              <div class="text-base leading-6" style="color: <?php echo esc_attr($text_color); ?>;">
                <?php echo esc_html($item['list_text']); ?>
              </div>
            </div>
          <?php endforeach; ?>
        <?php endif; ?>
      </div>

      <?php if ($button_link): ?>
        <a href="<?php echo esc_url($button_link['url']); ?>"
          class="inline-flex items-center justify-center max-w-full gap-2 px-8 py-4 mt-8 text-sm font-semibold leading-none rounded md:max-w-max"
          style="
            background-color: <?php echo esc_attr($button_bg_color); ?>;
            color: <?php echo esc_attr($button_text_color); ?>;"
          onmouseover="this.style.backgroundColor='<?php echo esc_attr($button_hover_bg_color); ?>'; this.style.color='<?php echo esc_attr($button_hover_text_color); ?>';"
          onmouseout="this.style.backgroundColor='<?php echo esc_attr($button_bg_color); ?>'; this.style.color='<?php echo esc_attr($button_text_color); ?>';"
          target="<?php echo esc_attr($button_link['target']); ?>">
          <span><?php echo esc_html($button_link['title']); ?></span>
          <?php if ($button_icon_toggle): ?>
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M5 12H19M19 12L12 5M19 12L12 19" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
          <?php endif; ?>
        </a>
      <?php endif; ?>
    </div>
    <div class="flex w-full overflow-hidden md:w-1/2">
      <img src="<?php echo esc_url($main_image['url'] ?? get_template_directory_uri() . '/assets/images/placeholder.png'); ?>"
        alt="<?php echo esc_attr($main_image['alt'] ?? 'Placeholder Image'); ?>"
        class="object-cover w-full h-[304px] sm:h-[434px] rounded-custom-lg" />
    </div>
  </div>
</section>

<section
  class="flex flex-wrap items-center self-stretch gap-10 py-20 pl-48 pr-32 bg-yellow-500 max-md:px-5"
  role="region"
  aria-label="Customer Testimonial">
  <div
    class="relative flex flex-col justify-center">
    <svg xmlns="http://www.w3.org/2000/svg" width="107" height="66" viewBox="0 0 107 66" fill="none">
      <path d="M38.9091 66H0L28.3931 0H53.8943L38.9091 66ZM92.0147 66H53.1056L81.4988 0H107L92.0147 66Z" fill="#013643" />
    </svg>
    <div class="flex flex-row">
      <blockquote
        class="z-0 text-3xl font-semibold leading-10 text-cyan-950 max-md:max-w-full">
        This is a really great time for GeoDirectory and our customers because
        we've so much more information about Irish buildings now and we can bring
        new build data to market at much greater speed and frequency."
      </blockquote>
      <cite class="z-0 mt-6 text-base text-slate-800 max-md:max-w-full">
        Dara Keogh, CEO, GeoDirectory
      </cite>
    </div>
  </div>
  <img
    loading="lazy"
    src="https://cdn.builder.io/api/v1/image/assets/f35586c581c84ecf82b6de32c55ed39e/2154a48c14ccb5f1b827dfe7d6a75ed0c691862b2d12767931f797b6b6769496?apiKey=0f8c151e993440459bd06f1271f3d4d8&"
    alt="Dara Keogh, CEO of GeoDirectory"
    class="object-contain self-stretch my-auto rounded-lg aspect-[0.9] min-w-[240px] w-[362px]" />
</section>