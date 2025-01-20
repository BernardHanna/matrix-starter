<?php
// Retrieve Logo Information
$logo_id = get_field('logo', 'option');
$logo_url = $logo_id ? wp_get_attachment_image_url($logo_id, 'full') : '';
$logo_alt = $logo_id ? get_post_meta($logo_id, '_wp_attachment_image_alt', true) : get_bloginfo('name');

// Retrieve Calculator Button Text and Link
$calculator_text = get_field('calculator_text', 'option') ?: 'Calculator';
$calculator_link = get_field('calculator_link', 'option');

// Retrieve Mobile Navigation Settings
$enable_hamburger = get_field('enable_hamburger', 'option');
$hamburger_style = get_field('hamburger_style', 'option');
$mobile_menu_effect = get_field('mobile_menu_effect', 'option') ?: 'slide_up';
$mobile_menu_width = get_field('mobile_menu_width', 'option') ?: 100;
$mobile_menu_bg = get_field('mobile_menu_background', 'option') ?: '#FFFFFF';
$sticky_menu = get_field('sticky_menu', 'option'); // Sticky menu toggle

// Map effects to transition classes
$effect_classes = [
  'slide_up'    => 'translate-y-full',
  'slide_left'  => '-translate-x-full',
  'slide_right' => 'translate-x-full',
  'fullscreen'  => 'translate-y-full',
];
$transition_class = $effect_classes[$mobile_menu_effect] ?? 'translate-y-full';

// Define additional styles for non-fullscreen menus
$menu_width_style = $mobile_menu_effect !== 'fullscreen'
  ? "width: {$mobile_menu_width}%; left: 0;"
  : "width: 100%;";

use Log1x\Navi\Navi;

$navigation = Navi::make()->build('primary');
?>
<section
  x-data="{
    isSticky: false,
    hasScrolled: false,
    offset: 200, // Scroll offset for sticking
    checkScroll() {
      this.hasScrolled = window.pageYOffset > 0;
      this.isSticky = window.pageYOffset > this.offset;
    },
    checkWindowSize() {
      if (window.innerWidth > 768) {
        this.isOpen = false;
      }
    }
  }"
  x-init="
    window.addEventListener('scroll', () => checkScroll());
    window.addEventListener('resize', () => checkWindowSize());
  "
  class="relative z-50 transition-all duration-500 ease-in-out bg-primary"
  :class="{ 'shadow-lg': hasScrolled }"
  x-effect="isOpen ? document.body.style.overflow = 'hidden' : document.body.style.overflow = ''">
  <div
    :class="{ 
      'fixed top-0 left-0 w-full transform translate-y-0 opacity-100': isSticky, 
      'relative': !isSticky 
    }"
    class="flex flex-wrap items-center justify-between w-full m-auto transition-transform duration-500 ease-in-out bg-white max-xxl:px-8">
    <div class="flex flex-row items-center justify-between w-full mx-auto max-w-container">
      <!-- Logo -->
      <a href="<?php echo esc_url(home_url('/')); ?>" class="flex flex-col items-start justify-center my-auto">
        <?php if ($logo_url) : ?>
          <img src="<?php echo esc_url($logo_url); ?>" alt="<?php echo esc_attr($logo_alt); ?>" class="object-contain max-w-full aspect-[2.33] w-[168px]" />
        <?php else : ?>
          <span class="text-base font-bold"><?php echo get_bloginfo('name'); ?></span>
        <?php endif; ?>
      </a>

      <!-- Desktop Navigation -->
      <div class="flex-wrap items-center hidden gap-10 text-base font-semibold text-black uppercase xl:flex">
        <?php if ($navigation->isNotEmpty()) : ?>
          <nav id="site-navigation">
            <ul id="primary-menu" class="flex space-x-12">
              <?php foreach ($navigation->toArray() as $item) : ?>
                <li class="relative group <?php echo esc_attr($item->classes); ?> <?php echo $item->active ? 'current-item' : ''; ?>">
                  <a href="<?php echo esc_url($item->url); ?>" class="gap-2.5 self-stretch my-auto whitespace-nowrap <?php echo $item->active ? 'active-item' : ''; ?>">
                    <?php echo esc_html($item->label); ?>
                  </a>
                  <?php if ($item->children) : ?>
                    <ul class="absolute left-0 hidden space-y-2 border-t-2 border-green-700 bg-neutral-dark group-hover:block children min-w-[200px]">
                      <?php foreach ($item->children as $child) : ?>
                        <li class="<?php echo esc_attr($child->classes); ?> <?php echo $child->active ? 'current-item' : ''; ?>">
                          <a href="<?php echo esc_url($child->url); ?>" class="block px-4 py-2 text-sm text-black hover:text-black hover:bg-background-light border-b-1 border-background-light">
                            <?php echo esc_html($child->label); ?>
                          </a>
                        </li>
                      <?php endforeach; ?>
                    </ul>
                  <?php endif; ?>
                </li>
              <?php endforeach; ?>
            </ul>
          </nav>
        <?php endif; ?>
      </div>

      <!-- Hamburger Menu Button -->
      <?php if ($enable_hamburger): ?>
        <button
          :class="{ 'is-active z-50': isOpen }"
          class="hamburger <?php echo esc_attr($hamburger_style); ?> md:hidden"
          type="button"
          aria-label="Menu"
          aria-expanded="false"
          @click="isOpen = !isOpen">
          <span class="hamburger-box">
            <span class="hamburger-inner"></span>
          </span>
        </button>
      <?php endif; ?>
    </div>
  </div>

  <!-- Mobile Navigation Menu -->
  <?php if ($enable_hamburger && $navigation->isNotEmpty()): ?>
    <div
      x-show="isOpen"
      class="absolute top-0 left-0 z-40 w-full h-screen transition-transform duration-500 ease-out bg-white"
      style="background-color: <?php echo esc_attr($mobile_menu_bg); ?>; <?php echo esc_attr($menu_width_style); ?>"
      x-transition:enter="transition ease-out duration-500"
      x-transition:leave="transition ease-in duration-300"
      @click.away="isOpen = false">
      <nav class="flex flex-col items-center justify-center h-full">
        <ul class="space-y-8 text-center">
          <?php foreach ($navigation->toArray() as $item) : ?>
            <li>
              <a href="<?php echo esc_url($item->url); ?>" class="text-2xl font-semibold">
                <?php echo esc_html($item->label); ?>
              </a>
            </li>
            <?php if ($item->children) : ?>
              <?php foreach ($item->children as $child) : ?>
                <li>
                  <a href="<?php echo esc_url($child->url); ?>" class="text-xl font-medium">
                    <?php echo esc_html($child->label); ?>
                  </a>
                </li>
              <?php endforeach; ?>
            <?php endif; ?>
          <?php endforeach; ?>
        </ul>
      </nav>
    </div>
  <?php endif; ?>
</section>