<?php
$background_color = get_sub_field('background_color');
$heading_tag = get_sub_field('heading_tag') ?: 'h4';
$heading_text = get_sub_field('heading_text');
$heading_color = get_sub_field('heading_color');
$paragraph_text = get_sub_field('paragraph_text');
$text_color = get_sub_field('text_color');
$main_image = get_sub_field('main_image');
$button_link = get_sub_field('button_link');
$button_bg_color = get_sub_field('button_bg_color');
$button_text_color = get_sub_field('button_text_color');
$button_hover_bg_color = get_sub_field('button_hover_bg_color');
$button_hover_text_color = get_sub_field('button_hover_text_color');
$button_icon_toggle = get_sub_field('button_icon_toggle');
?>

<div
  class="flex w-full overflow-hidden"
  style="background-color: <?php echo esc_attr($background_color); ?>;">
  <div class="flex flex-col w-full mx-auto md:flex-row max-w-container">
    <img
      loading="lazy"
      src="<?php echo esc_url($main_image['url'] ?? get_template_directory_uri() . '/assets/images/placeholder.png'); ?>"
      alt="<?php echo esc_attr($main_image['alt'] ?? 'Placeholder Image'); ?>"
      class="object-cover w-full max-w-full md:max-w-[50%] max-sm:h-[315px] lg:h-full" />
    <div class="flex flex-col w-full my-auto lg:w-3 max-lg:px-5 max-lg:py-5">
      <div class="flex flex-col w-full max-w-full px-5 lg:w-4/5 lg:px-8">
        <div class="flex flex-col w-full">
          <<?php echo esc_html($heading_tag); ?>
            class="w-full text-3xl font-bold leading-10"
            style="color: <?php echo esc_attr($heading_color); ?>;">
            <?php echo esc_html($heading_text); ?>
          </<?php echo esc_html($heading_tag); ?>>
          <div class="flex mt-1 w-8 min-h-[4px] bg-orange-400"></div>
        </div>
        <div
          class="mt-8 text-base leading-6 max-lg:max-w-full"
          style="color: <?php echo esc_attr($text_color); ?>;">
          <?php echo wp_kses_post($paragraph_text); ?>
        </div>
        <?php if ($button_link): ?>
          <a href="<?php echo esc_url($button_link['url']); ?>"
            class="flex gap-2 justify-center items-center self-start px-8 py-4 mt-8 text-sm font-semibold leading-none rounded border border-solid min-h-[56px] max-lg:px-5"
            style="
              background-color: <?php echo esc_attr($button_bg_color); ?>;
              color: <?php echo esc_attr($button_text_color); ?>;
            "
            onmouseover="
              this.style.backgroundColor='<?php echo esc_attr($button_hover_bg_color); ?>';
              this.style.color='<?php echo esc_attr($button_hover_text_color); ?>';
            "
            onmouseout="
              this.style.backgroundColor='<?php echo esc_attr($button_bg_color); ?>';
              this.style.color='<?php echo esc_attr($button_text_color); ?>';
            "
            target="<?php echo esc_attr($button_link['target']); ?>">
            <div><?php echo esc_html($button_link['title']); ?></div>
            <?php if ($button_icon_toggle): ?>
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M5 12H19M19 12L12 5M19 12L12 19" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
              </svg>
            <?php endif; ?>
          </a>
        <?php endif; ?>
      </div>
    </div>
  </div>
</div>
<section class="relative w-full">
  <div class="flex flex-col items-center w-full py-20 mx-auto md:flex-row max-w-container">
    <div
      class="flex flex-col w-full md:w-1/2 max-md:px-5 max-md:max-w-full">
      <div
        class="flex flex-col w-full text-3xl font-bold leading-none text-black max-md:max-w-full">
        <div class="flex flex-col w-full max-md:max-w-full">
          <h2 class="max-md:max-w-full">Success stories</h2>
          <div class="flex mt-1 w-8 bg-orange-400 min-h-[4px]" role="presentation"></div>
        </div>
      </div>
      <div class="mt-8 text-base leading-6 text-slate-800 max-md:max-w-full">
        Effective data usage can positively impact on all aspects of an
        organisation's performance. Find out how organisations large and small use
        GeoDirectory's products and services to make changes that deliver results.
      </div>
      <div class="flex flex-col w-full mt-8 max-md:max-w-full">
        <div
          class="flex flex-wrap items-start w-full gap-4 pl-4 max-md:max-w-full">
          <div class="flex items-start w-2 gap-2 pt-2">
            <img
              loading="lazy"
              src="https://cdn.builder.io/api/v1/image/assets/f35586c581c84ecf82b6de32c55ed39e/bb4264688195cf3096af3e1e625e4ac6bb2a81b796a7edfa333fc1deda344f69?apiKey=0f8c151e993440459bd06f1271f3d4d8&"
              class="object-contain w-2 aspect-square"
              alt=""
              role="presentation" />
          </div>
          <div
            class="flex-1 text-base shrink basis-0 text-slate-800 max-md:max-w-full">
            Plan forward
          </div>
        </div>
        <div
          class="flex flex-wrap items-start w-full gap-4 pl-4 mt-2 max-md:max-w-full">
          <div class="flex items-start w-2 gap-2 pt-2">
            <img
              loading="lazy"
              src="https://cdn.builder.io/api/v1/image/assets/f35586c581c84ecf82b6de32c55ed39e/bb4264688195cf3096af3e1e625e4ac6bb2a81b796a7edfa333fc1deda344f69?apiKey=0f8c151e993440459bd06f1271f3d4d8&"
              class="object-contain w-2 aspect-square"
              alt=""
              role="presentation" />
          </div>
          <div
            class="flex-1 text-base shrink basis-0 text-slate-800 max-md:max-w-full">
            Streamline resources
          </div>
        </div>
        <div
          class="flex flex-wrap items-start w-full gap-4 pl-4 mt-2 max-md:max-w-full">
          <div class="flex items-start w-2 gap-2 pt-2">
            <img
              loading="lazy"
              src="https://cdn.builder.io/api/v1/image/assets/f35586c581c84ecf82b6de32c55ed39e/bb4264688195cf3096af3e1e625e4ac6bb2a81b796a7edfa333fc1deda344f69?apiKey=0f8c151e993440459bd06f1271f3d4d8&"
              class="object-contain w-2 aspect-square"
              alt=""
              role="presentation" />
          </div>
          <div
            class="flex-1 text-base shrink basis-0 text-slate-800 max-md:max-w-full">
            Cut costs
          </div>
        </div>
        <div
          class="flex flex-wrap items-start w-full gap-4 pl-4 mt-2 max-md:max-w-full">
          <div class="flex items-start w-2 gap-2 pt-2">
            <img
              loading="lazy"
              src="https://cdn.builder.io/api/v1/image/assets/f35586c581c84ecf82b6de32c55ed39e/bb4264688195cf3096af3e1e625e4ac6bb2a81b796a7edfa333fc1deda344f69?apiKey=0f8c151e993440459bd06f1271f3d4d8&"
              class="object-contain w-2 aspect-square"
              alt=""
              role="presentation" />
          </div>
          <div
            class="flex-1 text-base shrink basis-0 text-slate-800 max-md:max-w-full">
            Drive Revenue
          </div>
        </div>
      </div>
      <button
        class="flex gap-2 justify-center items-center self-start px-8 py-4 mt-8 text-sm font-semibold leading-none text-white bg-sky-900 rounded min-h-[56px] max-md:px-5"
        tabindex="0">
        <span class="self-stretch my-auto">See our case studies</span>
        <img
          loading="lazy"
          src="https://cdn.builder.io/api/v1/image/assets/f35586c581c84ecf82b6de32c55ed39e/cc969320eb822628d51d559110ceeb7987aea8e5877e5db88226d2208ef42301?apiKey=0f8c151e993440459bd06f1271f3d4d8&"
          class="self-stretch object-contain w-6 my-auto shrink-0 aspect-square"
          alt=""
          role="presentation" />
      </button>
    </div>
    <div
      class="flex flex-col w-full overflow-hidden md:w-1/2 max-md:px-2">
      <img
        loading="lazy"
        src="https://cdn.builder.io/api/v1/image/assets/f35586c581c84ecf82b6de32c55ed39e/833a78a48449ac05da879e0cbd2b871eda1547960d0983eda027efa934109ff4?apiKey=0f8c151e993440459bd06f1271f3d4d8&"
        class="object-contain w-full h-[304px] md:h-[434px] aspect-[1.28] max-md:max-w-full"
        alt="Success stories illustration showing data usage impact" />
    </div>
  </div>
</section>