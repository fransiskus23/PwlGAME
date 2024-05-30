@extends('layouts.app')

@section('content')
<section id="home" class="bg-white pt-36 dark:bg-dark">
    <div class="container">
      <!-- Left -->
      <div class="flex flex-wrap items-center justify-center">
        <div class="w-full self-center px-6 md:w-1/2" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="3000">
          <h1 class="text-2xl font-bold text-dark dark:text-white md:text-4xl">Hi, my name is <span class="mt-2 block text-2xl font-black text-sky md:text-5xl">Andriaman Damai Telaumbanua - Tora</span></h1>
          <h2 class="mt-4 text-base font-medium text-dark dark:text-white md:text-xl">Saya seorang <span class="text-pink-500">Junior Front End Developer</span> dari Nias Sumatra utara, Indonesia</h2>
          <div class="mt-3 mb-5 flex items-center">
            <!-- Fecebook -->
            <a href="https://www.facebook.com/Nobita" target="_blank">
              <svg class="mr-3 w-7 transition duration-200 ease-in-out hover:opacity-80 dark:text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="currentColor">
                <title>Fecebook</title>
                <path d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z" />
              </svg>
            </a>
            <!-- Instagram -->
            <a href="https://www.instagram.com/tora_tel/" target="_blank">
              <svg class="mr-3 w-7 transition duration-200 ease-in-out hover:opacity-80 dark:text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" fill="currentColor">
                <title>Instagram</title>
                <path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" />
              </svg>
            </a>
            <!-- Linkedin -->
            <a href="https://www.linkedin.com/in/toratel19082004" target="_blank">
              <svg class="mr-3 w-7 transition duration-200 ease-in-out hover:opacity-80 dark:text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" fill="currentColor">
                <title>Linkedin</title>
                <path d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z" />
              </svg>
            </a>
            <!-- Github -->
            <a href="https://github.com/ToraTelaumbanua" target="_blank">
              <svg class="mr-3 w-7 transition duration-200 ease-in-out hover:opacity-80 dark:text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512" fill="currentColor">
                <title>Github</title>
                <path d="M165.9 397.4c0 2-2.3 3.7-4.5 3-24.5-9-43.2-26.4-57.2-49.3-4.1-6.8-7.9-14.1-11.1-21.7-1-2.3-.3-4.9 1.5-6.4 1.2-1 2.7-1.4 4.2-1.1 8.6 1.5 16.7 4.3 24.6 8.1 2 .9 4.4.3 5.7-1.5 1.2-1.8 1.3-4.1.2-6-1.6-2.7-3.1-5.4-4.4-8.3-1-2-2.7-3.5-4.8-4.3-7.2-2.8-14.8-5.2-22.4-7.2-2.3-.6-4.9.3-6.2 2.3-9.3 14.2-14.2 30.4-14.2 47.6 0 8.5 1.2 17.1 3.5 25.4 1.8 6.4 4.3 12.7 7.5 18.7 7.5 13.8 18.3 25.3 31.2 34.1 3.9 2.7 7.8 5.2 11.9 7.5 3.3 1.9 6.6 3.7 10 5.4 2.5 1.2 4.1 3.8 4.1 6.7zm-8.1-95.4c.6-.6 1.1-1.3 1.6-2 1.3-1.7 2.4-3.4 3.5-5.2.4-.6.9-1.1 1.3-1.7 1.4-2.1 1.2-4.8-.3-6.7-1.3-1.6-2.7-3.2-4-4.8-.9-1.1-2.3-1.7-3.7-1.7-4.6 0-9.1 1-13.3 2.8-1.7.7-3.3 1.5-4.9 2.3-2 .9-3.3 2.9-3.5 5.1s.7 4.3 2.3 5.6c4.5 3.4 8.3 7.7 11.3 12.6.6.9 1.6 1.4 2.7 1.4 1.1.1 2.3-.3 3-1.1zm256.8 9.1c-1.3-2-2.7-3.8-4.1-5.7-1.5-1.9-3.5-3.3-5.7-4.1-7.1-2.7-14.7-4.8-22.2-6.6-2.3-.5-4.7.2-6.5 1.9-1.4 1.4-2.1 3.4-1.8 5.4 2.3 8.1 5.8 15.7 10.2 22.5.5.8 1.2 1.5 2 2 1.3 1 2.7 1.4 4.2 1.3 3.6-.1 7.2-.5 10.7-1.1 3.4-.5 6.7-1.2 9.9-2.2 2.3-.7 4-2.6 4.6-5 .5-1.7.3-3.6-.4-5.3zm-47-74.3c.3-.7.7-1.4 1-2.1.8-1.4 1.7-2.8 2.6-4.2 1.4-2.1 1.3-4.8-.2-6.8-1.2-1.5-2.5-3-3.9-4.4-1.4-1.3-3.3-1.9-5.2-1.6-4.5.5-8.8 1.8-12.8 3.8-1.5.8-3 1.7-4.4 2.6-1.7.9-3.1 2.5-3.7 4.4-.6 1.7-.4 3.6.5 5.2 2.7 4.4 5.4 8.9 8 13.4.7 1.3 2.1 2.1 3.5 2.1.8 0 1.5-.2 2.2-.7 3.2-2.2 6.2-4.5 9-7.1zM248.3 8C111.4 8 0 119.4 0 256.3c0 109.4 70.8 202.3 169.1 235.5 12.3 2.2 16.8-5.3 16.8-11.8 0-5.8-.2-25-0.4-45.5-64.1 13.9-77.6-27.5-77.6-27.5-11.2-28.4-27.4-36-27.4-36-22.5-15.4 1.7-15.1 1.7-15.1 24.9 1.8 38 25.6 38 25.6 22 37.7 57.7 26.8 71.9 20.5 2.2-15.9 8.6-26.8 15.7-32.9-51.2-5.8-105-25.6-105-113.8 0-25.1 8.9-45.7 23.4-61.8-2.4-5.8-10.1-29.1 2.2-60.6 0 0 19-6.1 62.3 23.6 18.1-5 37.5-7.5 56.9-7.6 19.4.1 38.9 2.6 57 7.7 43.1-29.8 62.1-23.7 62.1-23.7 12.3 31.6 4.6 54.8 2.2 60.6 14.5 16.1 23.4 36.7 23.4 61.8 0 88.4-53.9 108-105.3 113.6 8.8 7.5 16.8 22.2 16.8 44.7 0 32.3-.3 58.5-.3 66.5 0 6.6 4.4 14.1 17 11.7C425.2 458.6 496 365.7 496 256.3 496 119.4 384.6 8 248.3 8z" />
              </svg>
            </a>
          </div>
          <p class="mb-3 text-sm font-medium text-slate-400 dark:text-white">I have a strong passion for crafting visually appealing and user-friendly websites.</p>
          <p class="text-sm font-medium text-slate-400 dark:text-white">With a solid foundation in HTML, CSS, and JavaScript, I enjoy transforming ideas into functional and elegant web solutions. I have a keen eye for design, ensuring that every website I create is both aesthetically pleasing and intuitive to navigate.</p>
          <a href="{{ route('products.index') }}" class="mt-5 inline-block rounded bg-primary px-8 py-3 text-base font-semibold text-white transition duration-300 ease-in-out hover:opacity-80">Shop Now</a>
        </div>
        <!-- Right -->
        <div class="relative mt-10 w-full self-end px-4 md:w-1/2" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="3000">
          <div class="relative mt-10">
            <img src="{{ asset('img/logo.jpg') }}" class="relative mx-auto max-w-full rounded-lg" alt="Profile">
            <span class="absolute bottom-5 left-1/2 -translate-x-1/2 text-lg font-semibold text-dark dark:text-white">Andriaman Damai Telaumbanua - Tora</span>
          </div>
        </div>
      </div>
    </div>
  </div>
  </section>
