<section
  class="relative w-full"
  style="background-color: <?php echo esc_attr(get_sub_field('content_014_background_color')); ?>;">
  <div class="flex flex-wrap items-start w-full gap-8 py-12 mx-auto max-w-[1084px] max-md:px-5">
    <?php $heading_tag = get_sub_field('content_014_heading_tag') ?: 'h2'; ?>
    <<?php echo esc_html($heading_tag); ?>
      class="w-full text-3xl leading-none tracking-tighter whitespace-nowrap"
      style="color: <?php echo esc_attr(get_sub_field('content_014_heading_color')); ?>;"
      role="heading">
      <?php echo esc_html(get_sub_field('content_014_heading_text')); ?>
      <div class="mt-1 w-8 min-h-[4px]"
        style="background-color: <?php echo esc_attr(get_sub_field('content_014_underline_color')); ?>;"
        aria-hidden="true"></div>
    </<?php echo esc_html($heading_tag); ?>>

    <div class="flex flex-col w-full lg:flex-row lg:justify-between max-w-[1084px] mx-auto">
      <div class="flex flex-col w-full md:w-[408px] max-md:pb-4">
        <div class="text-lg leading-7"
          style="color: <?php echo esc_attr(get_sub_field('content_014_subheading_color')); ?>;">
          <?php echo wp_kses_post(get_sub_field('content_014_subheading_text')); ?>
        </div>
      </div>

      <div class="flex items-start gap-2 text-base w-full max-w-[599px]">
        <div class="flex flex-col w-full">
          <div class="leading-6"
            style="color: <?php echo esc_attr(get_sub_field('content_014_paragraph_color')); ?>;">
            <?php echo wp_kses_post(get_sub_field('content_014_paragraph_text')); ?>
          </div>
          <?php if ($button = get_sub_field('content_014_button_link')): ?>
            <a href="<?php echo esc_url($button['url']); ?>"
              class="flex flex-row items-center self-start justify-center gap-2 px-6 py-3 mt-6 transition-colors duration-300 rounded focus:outline-none focus:ring-2 focus:ring-offset-2"
              style="
                background-color: <?php echo esc_attr(get_sub_field('content_014_button_color')); ?>;
                color: <?php echo esc_attr(get_sub_field('content_014_button_text_color')); ?>;
              "
              onmouseover="
                this.style.backgroundColor='<?php echo esc_attr(get_sub_field('content_014_button_hover_color')); ?>';
                this.style.color='<?php echo esc_attr(get_sub_field('content_014_button_text_hover_color')); ?>';
              "
              onmouseout="
                this.style.backgroundColor='<?php echo esc_attr(get_sub_field('content_014_button_color')); ?>';
                this.style.color='<?php echo esc_attr(get_sub_field('content_014_button_text_color')); ?>';
              "
              target="<?php echo esc_attr($button['target']); ?>">
              <?php echo esc_html($button['title']); ?>
              <?php if (get_sub_field('content_014_button_icon_toggle')): ?>
                <svg class="ml-2" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M5 12H19M19 12L12 5M19 12L12 19" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
              <?php endif; ?>
            </a>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>


<div
  class="flex overflow-hidden flex-col items-start pr-24 text-white bg-[#025A70] max-md:pr-5">
  <div class="flex flex-wrap gap-10 max-md:max-w-full">
    <img
      loading="lazy"
      src="https://cdn.builder.io/api/v1/image/assets/f35586c581c84ecf82b6de32c55ed39e/85987e55a5884897b5dcc1bb9c2d9c14b0c8817ed85bcaf6c930e2527d76b986?apiKey=0f8c151e993440459bd06f1271f3d4d8&"
      alt=""
      class="object-contain aspect-[1.32] min-w-[240px] w-[640px] max-md:max-w-full" />
    <div
      class="flex flex-col py-20 my-auto min-w-[240px] w-[448px] max-md:max-w-full">
      <div
        class="flex flex-col w-full text-3xl font-bold leading-10 max-md:max-w-full">
        <div class="flex flex-col w-full max-md:max-w-full">
          <div class="max-md:max-w-full">
            Grow your business with accurate market data.
          </div>
          <div class="flex mt-1 w-8 bg-orange-400 min-h-[4px]"></div>
        </div>
      </div>
      <div class="mt-8 text-base leading-6 max-md:max-w-full">
        Lorem ipsum dolor sit amet consectetur. Sagittis pellentesque cras
        ultrices volutpat aliquet. Vel lobortis eget amet quam. Id adipiscing
        proin massa massa netus in. Amet faucibus magna lobortis eu molestie
        ultrices. Elementum amet dolor est quis iaculis amet.
      </div>
      <button
        class="flex gap-2 justify-center items-center self-start px-8 py-4 mt-8 text-sm font-semibold leading-none rounded border border-orange-400 border-solid min-h-[56px] max-md:px-5"
        tabindex="0">
        <div class="self-stretch my-auto">Try the demo - FREE</div>
        <img
          loading="lazy"
          src="https://cdn.builder.io/api/v1/image/assets/f35586c581c84ecf82b6de32c55ed39e/cc969320eb822628d51d559110ceeb7987aea8e5877e5db88226d2208ef42301?apiKey=0f8c151e993440459bd06f1271f3d4d8&"
          alt="Decorative arrow"
          class="self-stretch object-contain w-6 my-auto shrink-0 aspect-square" />
      </button>
    </div>
  </div>
</div>
</div>